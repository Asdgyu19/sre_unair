<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ProjectController extends Controller
{
    public function show()
    {
        // Mengambil semua project dengan relasi images (Eager Loading)
        $projects = Project::with('images')
                            // Urutkan berdasarkan status: 'Berjalan' akan memiliki nilai 0, yang lain 1, 2, dst.
                            // Sehingga 'Berjalan' akan selalu di atas.
                            ->orderByRaw("
                                CASE status
                                    WHEN 'Berjalan' THEN 0
                                    WHEN 'Belum Dimulai' THEN 1
                                    WHEN 'Ditunda' THEN 2
                                    WHEN 'Selesai' THEN 3
                                    WHEN 'Dibatalkan' THEN 4
                                    ELSE 5
                                END
                            ")
                            // Kemudian urutkan berdasarkan tanggal mulai terbaru
                            ->orderBy('start_date', 'desc')
                            ->get();

        // Mengirim data projects ke view 'projects'
        return view('projects', ['projects' => $projects]);
    }

    public function index()
    {
        $projects = Project::with('images')->latest()->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => ['nullable', Rule::in(['social', 'academic', 'external', 'internal'])],
            'by' => ['required', Rule::in(['Research & Development', 'Competency Development', 'IT Development', 'Brand Marketing', 'Human Resource', 'External Relation', 'Funding'])],
            'status' => ['required', Rule::in(['Belum Dimulai', 'Berjalan', 'Selesai', 'Ditunda', 'Dibatalkan'])],
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'images'   => 'nullable|array',
            'images.*' => 'image|max:4096',
        ]);

        $project = Project::create([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
            'by' => $request->by,
            'status' => $request->status,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('project-images', 'public');
                $project->images()->create(['path' => $path]);
            }
        }

        return redirect()->route('admin.projects.index')->with('success', 'Program Kerja berhasil dibuat.');
    }

    public function edit(Project $project)
    {
        $project->load('images');
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        // 1. Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => ['nullable', Rule::in(['social', 'academic', 'external', 'internal'])],
            'by' => ['required', Rule::in([
                'Research & Development',
                'Competency Development',
                'IT Development',
                'Brand Marketing',
                'Human Resource',
                'External Relation',
                'Funding'
            ])],
            'status' => ['required', Rule::in([
                'Belum Dimulai',
                'Berjalan',
                'Selesai',
                'Ditunda',
                'Dibatalkan'
            ])],
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'images'   => 'nullable|array',
            'images.*' => 'image|max:4096',
        ]);

        // 2. Update data utama proyek
        $project->update($request->only([
            'name',
            'description',
            'category',
            'by',
            'status',
            'start_date',
            'end_date'
        ]));

        // 3. Simpan gambar baru jika ada
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('project-images', 'public');

                // relasi akan otomatis mengisi project_id
                $project->images()->create([
                    'path' => $path
                ]);
            }
        }

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        // Hapus gambar dari storage sebelum menghapus data
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Program Kerja berhasil dihapus.');
    }
}
