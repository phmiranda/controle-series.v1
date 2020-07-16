<?php

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
    return view('welcome');
});

Route::get('/series', 'SerieController@index')->name('series.index');
Route::get('/series/create', 'SerieController@create')->name('series.create');
Route::post('/series/create', 'SerieController@store')->name('series.save');
Route::delete('/series/{id}', 'SerieController@destroy')->name('series.delete');
