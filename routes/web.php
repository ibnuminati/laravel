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



Route:: get('/','Controller@home');
Route:: get('/register','Controller@register');
Route:: post('/welcome','Controller@welcome');

Route::get('/', function () {
    return view('items.main');
});
Route:: get('/data-tables', function(){
    return view('items.index');
});

Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::get('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@show');
Route::post('/pertanyaan', 'PertanyaanController@store');
Route::delete('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@destroy');
Route::get('/pertanyaan/{pertanyaan_id}/edit', 'PertanyaanController@edit');
Route::put('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@update');