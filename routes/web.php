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


// ini akan di buat otomatis ketika kita migrasi make:auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// buat route untuk create data siswa dengan nama routenya siswa/create
Route::get('siswa/create', 'SiswaController@create');
Route::post('siswa', 'SiswaController@store'); //method post buat insert data
// buat route delete
Route::delete('siswa/{id}', 'SiswaController@hapus');

// route edit data, id siswa {id}, function nya edit
Route::get('siswa/{id}/edit', 'SiswaController@edit');

// buat route untuk menampilkan data siswa , nama route nya siswa, methodnya index
Route::get('siswa', 'SiswaController@index');

// saya buat routes baru = tentang-kami, dengan nama file tentang_kami di views tentang_kami.blade.php
Route::get('tentang-kami', function () {
    return view('tentang_kami');
});

// route update
Route::put('siswa/{id}', 'SiswaController@update');

