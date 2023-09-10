@extends('job-record.master')

@section('title')
    Edit info
@endsection

@section('content')
    <main>
        <section class="my-5">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center col-lg-12">
                    <div class="card p-3 mx-auto">
                        <div class="col-md-12 mx-auto">
                            <h3 class="text-center"><b>EDIT INFO</b></h3>
                            <p class=" mt-3 text-center text-success">{{ Session::get('message') }}</p>
                            <form class="mt-5" action="{{route('record.update', $record->id)}}" method="POST">
                                @csrf
                                <div class="container">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Company Name</label>
                                            <input type="text" class="form-control" name="company_name" value="{{$record->company_name}}">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Company Address</label>
                                            <input type="text" class="form-control" name="company_address" value="{{$record->company_address}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Vacency</label>
                                            <input type="number" class="form-control" name="vacency" value="{{$record->vacency}}">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">position</label>
                                            <input type="text" class="form-control" name="position" value="{{$record->position}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Applied On</label>
                                            <input type="date" class="form-control" name="applied_on" value="{{$record->applied_on}}">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Application Deadline</label>
                                            <input type="date" class="form-control" name="application_deadline" value="{{$record->application_deadline}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Application Process</label>
                                            <input type="text" class="form-control" name="application_process" value="{{$record->application_process}}">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Useful links</label>
                                            <input type="text" class="form-control" name="useful_links" value="{{$record->useful_links}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" name="description" id="" cols="10" rows="5">{{$record->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="col-md-6 mt-3 btn btn-primary text-center">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
