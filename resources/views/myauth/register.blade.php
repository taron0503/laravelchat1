@extends('layouts.myapp')

@section('content')

    <div class = "container">
        <div class="row justify-content-center">
            <form method = "POST" action="{{route('register')}}" class = "col-md-6 form-horizontal">
                @csrf
                <div class="row form-group">
                    <label for="login" class = "col-sm-2 control-label">Login</label>
                    <input type="text" name = 'login' id = "login" value = "{{old('login')}}" class="col-sm-6 form-control">
                </div>

                <div class="row form-group">
                    <label for="name" class = "col-sm-2 control-label">Name</label>
                    <input type="text" name = 'name' id = "name" value = "{{old('name')}}" class = "col-sm-6 form-control">
                </div>

                <div class="row form-group">
                    <label for="email" class = "col-sm-2 control-label">Email</label>
                    <input type="text" name = 'email' id = "email" value = "{{old('email')}}" class = "col-sm-6 form-control">
                </div>

                <div class="row form-group">
                    <label for="password" class = "col-sm-2 control-label">Password</label>
                    <input type="text" name = 'password' id = "password" class = "col-sm-6 form-control">
                </div>
                <button type = 'submit' class = "btn btn-primary">Register</button>
            </form>
        </div>
    </div>
@endsection