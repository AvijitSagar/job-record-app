<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- bootstrap css min  --}}
    <link rel="stylesheet" href="{{ asset('job-record/assets/css/bootstrap.min.css') }}">
    {{-- custom css  --}}
    <link rel="stylesheet" href="{{ asset('job-record/assets/css/style.css') }}">
    {{-- datatable css cdns --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
</head>

<body>
    @include('job-record.includes.header')

    {{-- main start  --}}
    @yield('content')
    {{-- main end  --}}

    @include('job-record.includes.footer')



    {{-- bootstrap min js  --}}
    <script src="{{ asset('job-record/assets/js/bootstrap.bundle.min.js') }}"></script>
    {{-- custom js  --}}
    <script src="{{ asset('job-record/assets/js/script.js') }}"></script>
    {{-- datatable js cdn  --}}
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
</body>

</html>
