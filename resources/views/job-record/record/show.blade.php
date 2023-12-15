@extends('job-record.master')

@section('title')
    Manage Records
@endsection

@section('content')
    <main>
        <section class="my-5">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center col-lg-12">
                    <div class="card p-3 mx-auto">
                        <div class="col-md-12 mx-auto">
                            <h3 class="text-center"><b>Company & Job Infoes</b></h3>
                            <p class=" mt-3 text-center text-success">{{ Session::get('message') }}</p>
                            <div>
                                <table id="" class="table table-bordered" style="width:100%">
                                    <tbody>
                                        <tr>
                                            <th>Name</th>
                                            <td>{{$record->company_name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <td>{{$record->company_address}}</td>
                                        </tr>
                                        <tr>
                                            <th>Vacency</th>
                                            <td>{{$record->vacency}}</td>
                                        </tr>
                                        <tr>
                                            <th>Position</th>
                                            <td>{{$record->position}}</td>
                                        </tr>
                                        <tr>
                                            <th>Applied On</th>
                                            <td>{{$record->applied_on}}</td>
                                        </tr>
                                        <tr>
                                            <th>Application Deadline</th>
                                            <td>{{$record->application_deadline}}</td>
                                        </tr>
                                        <tr>
                                            <th>Application Process</th>
                                            <td>{{$record->application_process}}</td>
                                        </tr>
                                        <tr>
                                            <th>Useful Links</th>
                                            <td><a href="{{$record->useful_links}}" target="blank">{{$record->useful_links}}</a></td>
                                        </tr>
                                        <tr>
                                            <th>Description</th>
                                            <td>{{$record->description}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12 mx-auto my-5">
                            <h3 class="text-center"><b>Feedback of the job</b></h3>
                            <p class=" mt-3 text-center text-success">{{ Session::get('message') }}</p>
                            <div>
                                <table id="" class="table table-bordered" style="width:100%">
                                    <tbody>
                                        <tr>
                                            <th>Contacted via</th>
                                            <td>{{$feedback->contacted_via ?? ''}}</td>
                                        </tr>
                                        <tr>
                                            <th>Contacted On</th>
                                            <td>{{$feedback->contacted_on ?? ''}}</td>
                                        </tr>
                                        <tr>
                                            <th>Viva Date & Time</th>
                                            <td>{{$feedback->viva_date ?? ''}} {{$feedback->viva_time ?? ''}}</td>
                                        </tr>
                                        <tr>
                                            <th>Company email or phone</th>
                                            <td>{{$feedback->email_or_phone ?? ''}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    <a href="{{route('list.record.job')}}"><button class="btn btn-sm btn-outline-danger" type="submit">Back to list</button></a>
                                    {{-- <a href="{{route('edit.feedback', $feedback->job_record_id ?? '')}}"><button class="btn btn-sm btn-outline-primary" type="submit">Edit Feedback</button></a> --}}

                                    {{-- check if there is no feedback under the job record, then appears a disabled button otherwise show the edit feedback button  --}}
                                    @if ($feedback)
                                        <a href="{{ route('edit.feedback', $feedback->job_record_id) }}" class="btn btn-sm btn-outline-primary">Edit Feedback</a>
                                    @else
                                        <button class="btn btn-sm btn-outline-primary" type="button" disabled>Edit Feedback</button>
                                    @endif

                                    <a href="{{route('create.feedback', $record->id)}}"><button class="btn btn-sm btn-outline-success" type="submit">Add Feedback</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
