<?php

use Illuminate\Support\Facades\Route;

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
    return view('theme');
});
Route::get('register', 'App\Http\Controllers\Auth\RegisterController@register')->name('register');
Route::post('register', 'App\Http\Controllers\Auth\RegisterController@storeUser');
Route::get('login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
Route::post('login', 'App\Http\Controllers\Auth\LoginController@authenticate');
Route::get('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::get('home', 'App\Http\Controllers\HomeController@home')->name('home');
Route::view('theme','theme');
Route::get('theme','App\Http\Controllers\themeController@index');