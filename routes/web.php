<?php

use Illuminate\Support\Facades\Route;
// use \App\Http\Controllers\AtoresController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix'=>'atores', 'where'=>['id'=>'[0-9]+']], function() {
        Route::any('',                 ['as'=>'atores',            'uses'=>'\App\Http\Controllers\AtoresController@index']);
        Route::get('create',           ['as'=>'atores.create',     'uses'=>'\App\Http\Controllers\AtoresController@create']);
        Route::get('{id}/destroy',     ['as'=>'atores.destroy',    'uses'=>'\App\Http\Controllers\AtoresController@destroy']);
        Route::get('{id}/edit',        ['as'=>'atores.edit',       'uses'=>'\App\Http\Controllers\AtoresController@edit']);
        Route::put('{id}/update',      ['as'=>'atores.update',     'uses'=>'\App\Http\Controllers\AtoresController@update']);
        Route::post('store',           ['as'=>'atores.store',      'uses'=>'\App\Http\Controllers\AtoresController@store']);
    });

    Route::group(['prefix'=>'nacionalidades', 'where'=>['id'=>'[0-9]+']], function() {
        Route::get('',                 ['as'=>'nacionalidades',            'uses'=>'\App\Http\Controllers\NacionalidadesController@index']);
        Route::get('create',           ['as'=>'nacionalidades.create',     'uses'=>'\App\Http\Controllers\NacionalidadesController@create']);
        Route::get('{id}/destroy',     ['as'=>'nacionalidades.destroy',    'uses'=>'\App\Http\Controllers\NacionalidadesController@destroy']);
        Route::get('{id}/edit',        ['as'=>'nacionalidades.edit',       'uses'=>'\App\Http\Controllers\NacionalidadesController@edit']);
        Route::put('{id}/update',      ['as'=>'nacionalidades.update',     'uses'=>'\App\Http\Controllers\NacionalidadesController@update']);
        Route::post('store',           ['as'=>'nacionalidades.store',      'uses'=>'\App\Http\Controllers\NacionalidadesController@store']);
    });

    Route::group(['prefix'=>'filmes', 'where'=>['id'=>'[0-9]+']], function() {
        Route::get('create', ['as'=>'filmes.create', 'uses'=>'\App\Http\Controllers\FilmesController@create']);
        Route::post('store', ['as'=>'filmes.store', 'uses'=>'\App\Http\Controllers\FilmesController@store']);
    });
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
