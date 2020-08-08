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

/*Route::get('/', function () {
    return view('index');
});*/

Route::get('/index', 'HomeController@home');
Route::get('/selamat-datang', 'AuthController@welcome');
Route::get('/form-register', 'AuthController@formregister');

Route::get('/master', function(){
	return view('adminlte.master');
});

//tugas hari 3 pekan 3
Route::get('/', function(){
	return view('tugas.index');
});

Route::get('/data-tables', function(){
	return view('tugas.data-tables');
});

//Tugas hari 5 pekan 3
Route::get('/pertanyaan', 'PertanyaanController@index'); 
Route::get('/pertanyaan/create', 'PertanyaanController@create'); 
Route::post('/pertanyaan', 'PertanyaanController@store'); 
Route::get('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@show'); 
Route::get('/pertanyaan/{pertanyaan_id}/edit', 'PertanyaanController@edit'); 
Route::put('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@update'); 
Route::delete('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@destroy'); 
