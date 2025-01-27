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
    return view('home');
});

Route::get('/contact', function() {
    return view('contact');
});


Route::group(['prefix' => 'post'], function () {
    Route::get('create', 'PostController@create');
    Route::post('store', 'PostController@store');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
