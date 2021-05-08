<?php
use Illuminate\Support\Facades\Route;
Route::get('/', 'FrontendController@index')->name('home');
Route::get('/master', 'FrontendController@extendsMaster')-> name('extendsMaster');
?>
