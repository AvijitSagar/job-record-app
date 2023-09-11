@extends('job-record.master')

@section('title')
    Feedback
@endsection

@section('content')
    <main>
        <section class="my-5">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center col-lg-12">
                    <div class="card p-3 mx-auto">
                        <div class="col-md-12 mx-auto">
                            <h3 class="text-center"><b>FEEDBACK</b></h3>
                            <p class=" mt-3 text-center text-success">{{ Session::get('message') }}</p>
                            <form class="mt-5" action="{{route('store.feedback', $jobRecord->id)}}" method="POST">
                                @csrf
                                <div class="container">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Company Name</label>
                                            <input type="text" value="{{$jobRecord->company_name}}" class="form-control" name="company_name">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Contacted Yet?</label>
                                            <select class="form-control" name="contacted_yet" id="">
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Contacted On</label>
                                            <input type="date" class="form-control" name="contacted_on">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Contacted Via</label>
                                            <input type="text" class="form-control" name="contacted_via">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Viva Date</label>
                                            <input type="date" class="form-control" name="viva_date">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Viva Time</label>
                                            <input type="time" class="form-control" name="viva_time">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Email or Phone</label>
                                            <input type="text" class="form-control" name="email_or_phone">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Addres</label>
                                            <input type="text" value="{{$jobRecord->company_address}}" class="form-control" name="company_address">
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
