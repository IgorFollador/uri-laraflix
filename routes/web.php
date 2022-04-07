<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtoresController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/atores', [AtoresController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
