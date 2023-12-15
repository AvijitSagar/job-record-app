<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\JobRecord;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function create($id)
    {
        $feedbackExists = Feedback::where('job_record_id', $id)->first();

        if ($feedbackExists) {
            return redirect(route('list.record.job'))->with('message-danger', 'Feedback already added');
        } else {
            return view('job-record.feedback.add', [
                'jobRecord' => JobRecord::find($id)
            ]);
        }
    }

    public function store(Request $request, $job_record_id)
    {
        // validation 
        $this->validate($request, [
            'contacted_yet' => 'required',
            'contacted_on' => 'required',
            'contacted_via' => 'nullable',
            'viva_date' => 'required',
            'viva_time' => 'required',
            // either email or phone number
            'email_or_phone' => [
                'nullable',
                function ($attribute, $value, $fail) {
                    if (!filter_var($value, FILTER_VALIDATE_EMAIL) && !preg_match('/^(01)[0-9]{9}$/', $value)) {
                        $fail('The field must be a valid email address or match the phone number pattern.');
                    }
                },
            ],
        ], [
            'contacted_yet.required' => 'this field is required',
            'contacted_on.required' => 'contact date is required',
            'viva_date.required' => 'viva date is required',
            'viva_time.required' => 'viva time is required',
            'email_or_phone.email' => 'please give valid email',
            'email_or_phone.regex' => 'please give valid phone number'
        ]);

        Feedback::newFeedback($request, $job_record_id);
        return redirect(route('list.record.job'))->with('message', 'Feedback added for the job');
    }

    public function edit(string $feedback)
    {
        return view('job-record.feedback.edit', [
            'feedback' => Feedback::where('job_record_id', $feedback)->first(),
            'jobRecord' => JobRecord::find($feedback)
        ]);
    }

    public function update(Request $request, string $feedback_id)
    {
        Feedback::updateFeedback($request, $feedback_id);
        return back()->with('message', 'Feedback for the job has been updated');
    }

}
