<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Reviewer Panel')</title>

    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

    <!-- Reviewer Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
        <div class="container">
            <a href="{{ url('/reviewer') }}" class="navbar-brand">
                <img src="{{ asset('dist/img/AdminLTELogo.png') }}" class="brand-image img-circle elevation-3">
                <span class="brand-text font-weight-light">Reviewer Panel</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="{{ url('/reviewer') }}" class="nav-link">Films</a></li>
                    <li class="nav-item"><a href="{{ url('/reviewer/reviews') }}" class="nav-link">My Reviews</a></li>
                </ul>

                <!-- Right side: Logout -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ route('logout') }}"
                            class="nav-link text-danger"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content-wrapper mt-3">
        <div class="content py-3">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>

    <footer class="main-footer">
        <strong>Copyright &copy; {{ date('Y') }} Film Review App.</strong> All rights reserved.
    </footer>
</div>

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>
</html>
