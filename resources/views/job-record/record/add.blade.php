@extends('job-record.master')

@section('title')
    Home
@endsection

@section('content')
    <main>
        <section class="my-5">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center col-lg-12">
                    <div class="card p-3 mx-auto">
                        <div class="col-md-12 mx-auto">
                            <h3 class="text-center"><b>INFORMATIONS</b></h3>
                            <p class=" mt-3 text-center text-success">{{ Session::get('message') }}</p>
                            <form class="mt-5" action="{{route('record.job')}}" method="POST">
                                @csrf
                                <div class="container">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Company Name</label> <span class="text-danger">*</span>
                                            <input type="text" class="form-control" name="company_name">
                                            <span class="text-danger">{{$errors->has('company_name') ? $errors->first('company_name') : ''}}</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Company Address</label> <span class="text-danger">*</span>
                                            <input type="text" class="form-control" name="company_address">
                                            <span class="text-danger">{{$errors->has('company_address') ? $errors->first('company_address') : ''}}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Vacency</label>
                                            <input type="text" class="form-control" name="vacency">
                                            <span class="text-danger">{{$errors->has('vacency') ? $errors->first('vacency') : ''}}</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">position</label> <span class="text-danger">*</span>
                                            <input type="text" class="form-control" name="position">
                                            <span class="text-danger">{{$errors->has('position') ? $errors->first('position') : ''}}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Applied On</label> <span class="text-danger">*</span>
                                            <input type="date" class="form-control" name="applied_on">
                                            <span class="text-danger">{{$errors->has('applied_on') ? $errors->first('applied_on') : ''}}</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Application Deadline</label>
                                            <input type="date" class="form-control" name="application_deadline">
                                            <span class="text-danger">{{$errors->has('application_deadline') ? $errors->first('application_deadline') : ''}}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Application Process</label>
                                            <input type="text" class="form-control" name="application_process">
                                            <span class="text-danger">{{$errors->has('application_process') ? $errors->first('application_process') : ''}}</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Useful links</label>
                                            <input type="text" class="form-control" name="useful_links">
                                            <span class="text-danger">{{$errors->has('useful_links') ? $errors->first('useful_links') : ''}}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" name="description" id="" cols="10" rows="5"></textarea>
                                            <span class="text-danger">{{$errors->has('description') ? $errors->first('description') : ''}}</span>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="col-md-6 mt-3 btn btn-primary text-center">Submit</button>
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
