<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'App\Http\Controllers\PageController@home')->name('home');


Route::get('/services', 'App\Http\Controllers\PageController@services')->name('services');
Route::get('/add-service', 'App\Http\Controllers\PageController@addService')->name('add-service');
Route::get('/about', 'App\Http\Controllers\PageController@about')->name('about');
Route::get('/feedback', 'App\Http\Controllers\PageController@feedback')->name('feedback');

