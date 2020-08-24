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
Route::get('siswa/', 'SiswaController@index');



// route update
Route::put('siswa/{id}', 'SiswaController@update');

// saya buat routes baru = tentang-kami, dengan nama file tentang_kami di views tentang_kami.blade.php
Route::get('tentang-kami', function () {
    return view('tentang_kami');
});

// route clients
Route::get('client', function () {
    return view('clients_saya');
});

// route portofolio
Route::get('portofolio', function () {
    return view('portofolio_saya');
});

// route cari
Route::get('query', 'SiswaController@search');

// route cetak semua data
Route::get('cetak', 'SiswaController@print');

// route cetak  data
Route::get('cetak-perdata/{id}', 'SiswaController@perdata');



// route data data client

		//route tambah data
		//method get untuk ambil inputan user dari form
		Route::get('client/create', 'ClientController@create');
		Route::post('client', 'ClientController@store'); //method post buat insert data

		// perhatikan nama route nya, ini untuk menampikan data client
		Route::get('client', 'ClientController@index');

// route edit
Route::get('client/{id}/edit', 'ClientController@edit');
// route update
// tambah method PUT, input hidden kalo di update
Route::put('client/{id}', 'ClientController@update');

     // buat route delete
      Route::delete('client/{id}', 'ClientController@hapus');

      // route cari cliet jquery
       Route::get('search', 'ClientController@search');

// route cetak  data
Route::get('cetak-perdata-client/{id}', 'ClientController@perdata');


// route data laundry
Route::get('laundry', 'LaundryController@index');


// buat route untuk create data transaksi laundry dengan nama routenya laundry/create
Route::get('laundry/create', 'LaundryController@create');
Route::post('laundry', 'LaundryController@store'); //method post buat insert data

// route edit
Route::get('laundry/{id}/edit', 'LaundryController@edit');
// route update
Route::put('laundry/{id}', 'LaundryController@update');


       // buat route delete data laundry
      Route::delete('laundry/{id}', 'LaundryController@hapus');


      // route cetak  per data
      Route::get('cetak-perdata-laundry/{id}', 'LaundryController@perdata');

      // route cari client jquery
       Route::get('searchlaundry', 'LaundryController@search');
