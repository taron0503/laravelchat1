@extends('layouts.myapp')

@section('content')
    <div class = "container">
        <div class="row justify-content-center">
            <form method = "POST" action="{{route('login')}}" class = "col-md-6 form-horizontal">
                @csrf
                <div class="row form-group">
                    <label for="login" class = "col-sm-2 control-label">Login</label>
                    <input type="text" name = 'login' id = "login" value = "{{old('login')}}" class="col-sm-6 form-control">
                </div>

                <div class="row form-group">
                    <label for="password" class = "col-sm-2 control-label">Password</label>
                    <input type="text" name = 'password' id = "password" class = "col-sm-6 form-control">
                </div>

                <div class="row form-group">
                    <label for="remember">Remember</label>
                    <input type="checkbox" name = "remember" id = "remember">
                </div>

                <button type = 'submit' class = "btn btn-primary">Login</button>
            </form>
        </div>
    </div>
@endsection