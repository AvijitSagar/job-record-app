<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\JobRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('job-record.record.manage', [
            // user wise job record showing
            // this line of code fetches all job records from the "job_records" table where the "user_id" column matches the ID of the currently authenticated user.
            'records' => JobRecord::where('user_id', Auth::user()->id)->get()
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
    public function show(string $jobRecord)
    {
        return view('job-record.record.show', [
            'record' => JobRecord::find($jobRecord),
            // this line of code will retrieve the associated feedback for the specified job record.
            'feedback' => JobRecord::find($jobRecord)->feedback
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $jobRecord)
    {
        return view('job-record.record.edit', [
            'record' => JobRecord::find($jobRecord)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $jobRecord)
    {
        JobRecord::updateJobRecord($request, $jobRecord);
        return redirect(route('list.record.job'))->with('message', 'Record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $jobRecord)
    {
        $feedbackExists = Feedback::where('job_record_id', $jobRecord)->exists();

        if ($feedbackExists) {
            JobRecord::deleteJobRecord($jobRecord);
            Feedback::deleteFeedback($jobRecord);
            return back()->with('message', 'Job record and its feedback deleted successfully');
        } else {
            JobRecord::deleteJobRecord($jobRecord);
            return back()->with('message', 'Job record deleted successfully');
        }
    }
}
