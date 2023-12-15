<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\JobRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobRecordController extends Controller
{
    public function index()
    {
        return view('job-record.record.manage', [
            // user wise job record showing
            // this line of code fetches all job records from the "job_records" table where the "user_id" column matches the ID of the currently authenticated user.
            'records' => JobRecord::where('user_id', Auth::user()->id)->get()
        ]);
    }

    public function create()
    {
        return view('job-record.record.add');
    }

    public function store(Request $request)
    {
        // validation 
        $this->validate($request, [
            'company_name' => 'required|max:255',
            'company_address' => 'required',
            'vacency' => 'nullable|regex:/(^[0-9]+$)/u',
            'position' => 'required',
            'applied_on' => 'required',
            'application_deadline' => 'nullable',
            'application_process' => 'nullable',
            'useful_links' => 'nullable',
            'description' => 'nullable'
        ], [
            'company_name.required' => 'company name is required',
            'company_name.max' => 'this field can contail maximum 255 character',
            'company_address.required' => 'company address is required',
            'vacency' => 'this field only contains numbers',
            'position.required' => 'position is required',
            'applied_on.required' => 'appplied date is required'
        ]);

        JobRecord::newJobRecord($request);
        return back()->with('message', 'Information added successfully');
    }

    public function show(string $jobRecord)
    {
        return view('job-record.record.show', [
            'record' => JobRecord::find($jobRecord),
            // this line of code will retrieve the associated feedback for the specified job record.
            'feedback' => JobRecord::find($jobRecord)->feedback
        ]);
    }

    public function edit(string $jobRecord)
    {
        return view('job-record.record.edit', [
            'record' => JobRecord::find($jobRecord)
        ]);
    }

    public function update(Request $request, string $jobRecord)
    {
        JobRecord::updateJobRecord($request, $jobRecord);
        return redirect(route('list.record.job'))->with('message', 'Record updated successfully');
    }

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
