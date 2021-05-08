<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// //Route::get('/{id}','WelcomeController@index');
// //Route::get('/admin/{age}','WelcomeController@admin')->middleware('checkage');
// Route::post('login', 'WelcomeController@adminLogin')->middleware('checkuser'::class);

// //Route::resource phần resource controller

// Route::resource('photos','DemoController');
// //Route::get('demo1', 'DemoController');

require_once 'fontend.php';

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
