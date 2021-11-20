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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','App\Http\Controllers\Controller@index');
// Route::get('regis/','App\Http\Controllers\Controller@regis');
// Route::get('inform/','App\Http\Controllers\Controller@inform');
Route::resource('regis', 'App\Http\Controllers\HomeController');
Route::get('regis/', 'App\Http\Controllers\HomeController@users');

// Route::get('regis/','HomeController@regis');
// Route::get('inform/','HomeController@inform');