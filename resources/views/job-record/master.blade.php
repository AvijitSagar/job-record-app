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
    {{-- header start --}}
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href=""><b><i>NOTE APP</i></b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::routeIs('') ? 'active' : '' }}" aria-current="page"
                                href="">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::routeIs('') ? 'active' : '' }}"
                                aria-current="page" href="">Add Note</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::routeIs('note.manage') ? 'active' : '' }}"
                                href="">Your Notes</a>
                        </li>
                    </ul>
                    <form class="d-flex" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-outline-danger" type="submit">Logout</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    {{-- header end  --}}



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
