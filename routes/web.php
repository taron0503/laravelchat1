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


//Route::get('/', function (SaveStr $str) {
//    $request = new Request();
//    $user = new User();
//    $str->save($request, $user);
//
//    Save::save($request, $user);
//    return view('registration');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mymethod', 'HomeController@mymethod')->name('mymethod');
