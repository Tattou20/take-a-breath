<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;


Route::get('/', function () {
    return view('home');
});

Route::get('/home', 'App\Http\Controllers\PageController@home')->name('home');


Route::get('/servicelist', 'App\Http\Controllers\PageController@servicelist')->name('servicelist');
Route::get('/add-service', 'App\Http\Controllers\PageController@addService')->name('add-service');
Route::get('/about', 'App\Http\Controllers\PageController@about')->name('about');
Route::get('/feedback', 'App\Http\Controllers\PageController@feedback')->name('feedback');
Route::get('/all-services', 'App\Http\Controllers\PageController@allServices')->name('all-services');


Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
Route::put('/services/{id}', [ServiceController::class, 'update'])->name('services.update');
Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');