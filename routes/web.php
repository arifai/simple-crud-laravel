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

// Buat route baru
Route::get('/beasiswa', 'BeasiswaController@index');
Route::get('/beasiswa/add', 'BeasiswaController@add'); // menampilkan halaman /pegawai/add
Route::post('/beasiswa/tambah', 'BeasiswaController@tambah'); // method tambah
Route::get('/beasiswa/edit/{id}', 'BeasiswaController@edit');
Route::post('/beasiswa/update', 'BeasiswaController@update');
Route::get('/beasiswa/del/{id}', 'BeasiswaController@del');
