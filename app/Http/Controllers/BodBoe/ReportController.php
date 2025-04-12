<?php

namespace App\Http\Controllers\BodBoe;

use Illuminate\Routing\Controller;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class ReportController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('bod_boe');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::with('user')->latest()->paginate(10);
        return view('bod_boe.reports.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bod_boe.reports.create');
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
            'description' => 'nullable|string',
            'report_file' => 'required|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx|max:10240',
            'report_date' => 'required|date',
            'report_type' => 'required|string|max:255',
            'status' => 'required|in:draft,published,archived',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::id();


        if ($request->hasFile('report_file')) {
            $path = $request->file('report_file')->store('reports', 'public');
            $data['file_path'] = $path;
        }

        Report::create($data);

        return redirect()->route('bod-boe.reports.index')
            ->with('success', 'Report created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        return view('bod_boe.reports.show', compact('report'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        return view('bod_boe.reports.edit', compact('report'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'report_file' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx|max:10240',
            'report_date' => 'required|date',
            'report_type' => 'required|string|max:255',
            'status' => 'required|in:draft,published,archived',
        ]);

        $data = $request->all();

        if ($request->hasFile('report_file')) {
            // Delete old file if exists
            if ($report->file_path) {
                Storage::disk('public')->delete($report->file_path);
            }
            
            $path = $request->file('report_file')->store('reports', 'public');
            $data['file_path'] = $path;
        }

        $report->update($data);

        return redirect()->route('bod-boe.reports.index')
            ->with('success', 'Report updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        // Delete file if exists
        if ($report->file_path) {
            Storage::disk('public')->delete($report->file_path);
        }
        
        $report->delete();

        return redirect()->route('bod-boe.reports.index')
            ->with('success', 'Report deleted successfully.');
    }
}

