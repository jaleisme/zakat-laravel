
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>My{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body, .dropdown-item{
            font-family: 'Montserrat', sans-serif !important;
            font-size: 12px !important;
        }
        .bg-success{
            background-color: #019147 !important;
        }
        .text-success{
            color: #019147 !important;
        }
        .btn-success{
            background-color: #019147 !important;
        }
        .button{
            border-radius: 12px;
            font-size: 14px;
            font-weight: 600;
            padding: 16px 24px;
        }
        .btn-warning, .btn-primary{
            background-color: #FF9823 !important;
            color: #ffffff !important;
            border: 1px solid #FF9823;
        }
    </style>
    @yield('custom-css')
</head>
<body>
    @if((new \Jenssegers\Agent\Agent())->isDesktop())
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <div style="font-weight: 800; font-size: 24px;">My<span class="text-success" style="font-weight: 800; font-size: 24px;">Zakat</span></div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="button btn btn-warning" href="{{ route('login') }}" style="font-size: 12px;">Login | Register</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('distribution.index') }}">Distribution</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mustahik</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('mustahik.index') }}">Mustahik</a>
                                    <a class="dropdown-item" href="{{ route('mustahik-category.index') }}">Mustahik Category</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Payment</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('payment.index') }}">Payment</a>
                                    <a class="dropdown-item" href="{{ route('payment-type.index') }}">Payment Type</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script>
        function confirmDelete(url){
            var ask = window.confirm("Are you sure you want to delete this record?");
            if (ask) {
                window.alert("This post was successfully deleted.");
                window.location.href = url;

            }
        }
    </script>
    @yield('custom-js')

    <!-- Mobile Detection -->
    @elseif((new \Jenssegers\Agent\Agent())->isMobile())
    <div class="container d-flex align-items-center justify-content-middle bg-success" style="height: 100vh;">
        <div class="row">
            <div class="col-12 text-white">
                <img src="{{ asset('img/mobile-illustration.svg') }}" alt="" class="w-100">
                <h2 class="font-weight-bold text-center">You're detected using mobile device.</h2>
                <p style="font-size: 14px; margin-top: 16px;" class="text-justify">To ensure the best possible experience and functionality, we kindly request that you refrain from accessing our website on mobile devices and instead utilize a desktop or laptop computer. Thank you for your understanding, and have a nice day :D</p>
            </div>
        </div>
    </div>
    @endif
</body>
</html>
