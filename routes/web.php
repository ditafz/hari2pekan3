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

   