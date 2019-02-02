<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Helpers\Contracts\SaveStr;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;


//Route::get('/', function (SaveStr $str) {
//    $request = new Request();
//    $user = new User();
//    $str->save($request, $user);
//
//    Save::save($request, $user);
//    return view('registration');
//});

//Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('login', ['uses'=>'MyAuth\LoginController@showLogin','as'=>'showlogin']);
Route::post('login', ['uses'=>'MyAuth\LoginController@login','as'=>'login']);

Route::get('logout', ['uses'=>'MyAuth\LoginController@logout','as'=>'logout']);

Route::get('register', ['uses'=>'MyAuth\RegisterController@showRegister','as'=>'showregister']);
Route::post('register', ['uses'=>'MyAuth\RegisterController@register','as'=>'register']);

Route::get('home', "HomeController@index");

Route::get('showusers', function(){
    $users = User::all();
//    $users = cache()->remember("MyUsersKey",Carbon::now()->addMinutes(3), function(){
//        return User::all();
//    });
    return view('showusers',['users'=>$users]);
});
