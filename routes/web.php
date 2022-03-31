<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AtoresController as AtoresController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/atores', [AtoresController::class, 'index']);