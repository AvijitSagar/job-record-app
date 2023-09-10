<?php

namespace App\Http\Controllers;

use App\Models\JobRecord;
use Illuminate\Http\Request;

class JobRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('job-record.record.manage', [
            'records' => JobRecord::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('job-record.record.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        JobRecord::newJobRecord($request);
        return back()->with('message', 'Information added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(JobRecord $jobRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobRecord $jobRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobRecord $jobRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobRecord $jobRecord)
    {
        //
    }
}
