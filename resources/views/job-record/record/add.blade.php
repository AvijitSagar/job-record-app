@extends('job-record.master')

@section('title')
    Home
@endsection

@section('content')
<main>
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="card p-3 col-md-8 mx-auto">
                    <div class="col-md-10 mx-auto">
                        <h1 class="text-center"><b>ADD A NOTE</b></h1>
                        <p class=" mt-3 text-center text-success">{{ Session::get('message') }}</p>
                        <form class="mt-5 text-center" action="" method="POST">
                            @csrf
                            <div class="mb-3 text-center">
                                <label class="form-label">Note Title</label>
                                <input class="form-control" name="title">
                            </div>
                            <div class="mb-3 text-center">
                                <label for="floatingTextarea">Description</label>
                                <textarea class="form-control" cols="10" rows="5" name="description"></textarea>
                            </div>
                            <button type="submit" class="col-md-6 btn btn-primary text-center">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection