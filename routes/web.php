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
Route::get('inform/','App\Http\Controllers\HomeController@index');
// Route::get('regis/','App\Http\Controllers\Controller@regis');

Route::resource('regi', 'App\Http\Controllers\HomeController');
Route::get('regis/', 'App\Http\Controllers\HomeController@users');
// Route::get('inform/','App\Http\Controllers\HomeController@informa');


Route::get('/inform/{id}', 'App\Http\Controllers\HomeController@blog_detail');

// Route::get('regis/','HomeController@regis');
// Route::get('inform/','HomeController@inform');