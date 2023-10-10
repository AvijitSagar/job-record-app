<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class JobRecord extends Model
{
    use HasFactory;

    private static $jobRecord;

    public static function newJobRecord($request){
        self::$jobRecord = new JobRecord();
        self::$jobRecord->user_id = Auth::user()->id;
        self::$jobRecord->company_name = $request->company_name;
        self::$jobRecord->company_address = $request->company_address;
        self::$jobRecord->vacency = $request->vacency;
        self::$jobRecord->position = $request->position;
        self::$jobRecord->applied_on = $request->applied_on;
        self::$jobRecord->application_deadline = $request->application_deadline;
        self::$jobRecord->application_process = $request->application_process;
        self::$jobRecord->useful_links = $request->useful_links;
        self::$jobRecord->description = $request->description;
        self::$jobRecord->save();
    }
    public static function updateJobRecord($request, $jobRecord){
        self::$jobRecord = JobRecord::find($jobRecord);
        self::$jobRecord->company_name = $request->company_name;
        self::$jobRecord->company_address = $request->company_address;
        self::$jobRecord->vacency = $request->vacency;
        self::$jobRecord->position = $request->position;
        self::$jobRecord->applied_on = $request->applied_on;
        self::$jobRecord->application_deadline = $request->application_deadline;
        self::$jobRecord->application_process = $request->application_process;
        self::$jobRecord->useful_links = $request->useful_links;
        self::$jobRecord->description = $request->description;
        self::$jobRecord->save();
    }
    public static function deleteJobRecord($jobRecord){
        self::$jobRecord = JobRecord::find($jobRecord);
        // self::$jobRecord = Feedback::find($jobRecord);
        self::$jobRecord->delete();
    }

    public function user(){
        return $this->hasOne(User::class);
    }
}
