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
                                        <tr>
                                            <th>Status</th>
                                            <td>{{$record->status}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    <a href="{{route('list.record.job')}}"><button class="btn btn-sm btn-outline-danger" type="submit">Back to list</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
