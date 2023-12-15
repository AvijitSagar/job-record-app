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
                            <h3 class="text-center"><b>JOB RECORDS</b></h3>
                            <p class=" mt-3 text-center text-success">{{ Session::get('message') }}</p>
                            <p class=" mt-3 text-center text-danger">{{ Session::get('message-danger') }}</p>
                            <div>
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Company</th>
                                            <th>Position</th>
                                            <th>Vacancy</th>
                                            <th>Applied date</th>
                                            <th>Viva date & time</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($records as $record)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ substr(($record->company_name), 0, 12) }}...</td>
                                                <td>{{ substr(($record->position), 0, 12) }}...</td>
                                                <td>{{ $record->vacency }}</td>
                                                {{-- <td>{{ $record->applied_on }}</td> --}}
                                                <td>{{ \Carbon\Carbon::parse($record->applied_on)->format('j M y') }}</td>
                                                {{-- <td>{{ optional($record->feedback)->viva_date }} {{optional($record->feedback)->viva_time}}</td> --}}
                                                {{-- this is for date and time format and its color --}}
                                                <td class="@if($record->feedback && $record->feedback->viva_date < now()) text-danger @elseif($record->feedback && $record->feedback->viva_date < now()->addDays(5)) text-success @endif">
                                                    @if($record->feedback && $record->feedback->viva_date < now())
                                                        Expired on {{ \Carbon\Carbon::parse(optional($record->feedback)->viva_date)->format('j M') }}
                                                    @else
                                                        {{ optional($record->feedback)->viva_date ? \Carbon\Carbon::parse(optional($record->feedback)->viva_date)->format('j M') : '' }}
                                                        {{ optional($record->feedback)->viva_time ? \Carbon\Carbon::parse(optional($record->feedback)->viva_time)->format('h:i A') : '' }}
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{route('record.edit', $record->id)}}"><button class="btn btn-sm btn-outline-warning"
                                                            type="submit">Edit</button></a>
                                                    <a href="{{route('record.show', $record->id)}}"><button class="btn btn-sm btn-outline-info"
                                                            type="submit">View</button></a>
                                                    <a href="{{route('create.feedback', $record->id)}}"><button class="btn btn-sm btn-outline-success"
                                                        type="submit">Feedback</button></a>
                                                    <a href="{{route('record.delete', $record->id)}}"><button class="btn btn-sm btn-outline-danger"
                                                            type="submit"
                                                            onclick="return confirm('Delete the record?')">Delete</button></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
