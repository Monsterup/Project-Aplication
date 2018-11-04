<?php

use Illuminate\Support\Facades\Auth;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('register','Users@register');
Route::post('postRegister','Users@postRegister');
Route::get('login','Users@login');
Route::post('postLogin','Users@postLogin');

Route::get('logout', function(){
    Auth::logout();
    return view('welcome');
});

Route::get('pageAksesKhusus', function(){
    return view('pageAksesKhusus');
});

Route::get('delete', 'Admin@delete');
Route::get('update', 'Admin@update');
Route::get('adRoute', 'Admin@index');