<?php

namespace App\Http\Controllers\MyAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;

class LoginController extends Controller
{
    //
    public function showLogin(){
        return view("myauth.login");
    }

    public function login(Request $request){
        $array = $request->all();
        $remember = $request->has('remember');

        if(Auth::attempt(["email" =>$array['login'], "password"=>$array["password"]], $remember)){

            return redirect("/home");
        }else{
            return redirect()->back()->withInput($request->all())->withErrors('data not correct');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
