<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>header</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<header>
    <nav class="navbar navbar-expand-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <h1>FreeChat</h1>
            </a>
        @auth
                <div class="dropdown ml-auto">
                    <button class="btn btn-primary dropdown-toggle mr-auto" type="button" data-toggle="dropdown">{{Auth::user()->name}}
                        <span class="caret"></span></button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                    </div>
                </div>
            @else
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">Register</a>
                    </li>
                </ul>
        @endauth
        </div>
    </nav>
</header>

<main>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class = "content">
    @yield('content')
</div>

</main>