<?php

namespace App\Http\Controllers\MyAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

use App\User;
use Auth;
use Hash;

class RegisterController extends Controller
{
    //
    public function showRegister(){
        return view("myauth.register");
    }

    public function register(Request $request){
        $this->validator($request);

        $user = new User();

        $user->name = $request['name'];
        $user->login = $request['login'];
        $user->password = Hash::make($request['password']);
        $user->email = $request['email'];
        $user->save();
        Auth::login($user);
        return redirect('home');

    }

    protected function validator($request){
        $this->validate($request, [
            'name' => 'required|max:255',
            'login' => 'required|min:5',
            'email' => 'unique:users|required',
            'password' => 'required',
        ]);



    }
}
