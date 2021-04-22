<!DOCTYPE html>
<html lang="{{ str_replace('_', '-',config('app.locale'))  }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App manager</title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    @yield('my_css_link')
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('home_') }}">
        <img src="{{ asset('images/diamond.svg') }}" alt="">
        Manager
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home_') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register_') }}">register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login_') }}">login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin_') }}">voir les employés</a>
            </li>
        </ul>

    </div>
</nav>

<body>
    <div class="container">
    @if (session()->has('message'))
        <div class="alert mt-3 alert-success">{{ session()->get('message') }}</div>
    @endif     
    </div>
    <!-- chargement du templete -->
    @yield('content')
</body>

</html>