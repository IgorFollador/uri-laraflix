<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtoresController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/atores', [AtoresController::class, 'index']);
Route::get('/atores/create', [AtoresController::class, 'create']);
Route::post('/atores/store', [AtoresController::class, 'store']);
Route::get('atores/{id}/destroy', [AtoresController::class, 'destroy']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
