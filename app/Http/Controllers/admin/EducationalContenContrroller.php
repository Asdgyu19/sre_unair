<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use App\Models\EducationalContent;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class EducationalContentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educationalContents = EducationalContent::with('user')->latest()->paginate(10);
        return view('admin.educational_contents.index', compact('educationalContents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.educational_contents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'required|string|max:255',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:draft,published,archived',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['user_id'] = Auth::id();


        if ($request->hasFile('featured_image')) {
            $path = $request->file('featured_image')->store('educational_contents', 'public');
            $data['featured_image'] = $path;
        }

        if ($request->status === 'published' && empty($data['published_at'])) {
            $data['published_at'] = now();
        }

        EducationalContent::create($data);

        return redirect()->route('admin.educational-contents.index')
            ->with('success', 'Educational content created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EducationalContent  $educationalContent
     * @return \Illuminate\Http\Response
     */
    public function show(EducationalContent $educationalContent)
    {
        return view('admin.educational_contents.show', compact('educationalContent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EducationalContent  $educationalContent
     * @return \Illuminate\Http\Response
     */
    public function edit(EducationalContent $educationalContent)
    {
        return view('admin.educational_contents.edit', compact('educationalContent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EducationalContent  $educationalContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EducationalContent $educationalContent)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'required|string|max:255',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:draft,published,archived',
        ]);

        $data = $request->all();
        
        // Only update slug if title has changed
        if ($educationalContent->title !== $request->title) {
            $data['slug'] = Str::slug($request->title);
        }

        if ($request->hasFile('featured_image')) {
            // Delete old image if exists
            if ($educationalContent->featured_image) {
                Storage::disk('public')->delete($educationalContent->featured_image);
            }
            
            $path = $request->file('featured_image')->store('educational_contents', 'public');
            $data['featured_image'] = $path;
        }

        if ($request->status === 'published' && $educationalContent->status !== 'published') {
            $data['published_at'] = now();
        }

        $educationalContent->update($data);

        return redirect()->route('admin.educational-contents.index')
            ->with('success', 'Educational content updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EducationalContent  $educationalContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(EducationalContent $educationalContent)
    {
        // Delete featured image if exists
        if ($educationalContent->featured_image) {
            Storage::disk('public')->delete($educationalContent->featured_image);
        }
        
        $educationalContent->delete();

        return redirect()->route('admin.educational-contents.index')
            ->with('success', 'Educational content deleted successfully.');
    }
}

