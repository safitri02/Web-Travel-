<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');
Route::get('/login', 'LoginController@index');
Route::post('/proses_login', 'LoginController@proses');
Route::get('/logout', 'LoginController@logout');

//Route Tampilan Frontend
Route::get('/tentang', 'PageController@tentang');
Route::get('/destinasi', 'PageController@wisata');
Route::get('/destinasi/{daerah}', 'PageController@per_daerah');
Route::post('/cari_wisata', 'PageController@cari_wisata');

Route::get('/eksplorasi', 'PageController@eksplorasi');
Route::get('/wisata/{id}/eksplor', 'PageController@wisata_detail');
Route::get('/kuliner', 'PageController@kuliner');
Route::get('/hotel_detail/{id}', 'PageController@hotel_detail');
Route::post('/ulasan/{id}', 'PageController@ulasan');
Route::get('/kontak', 'PageController@kontak');

//Booking Hotel & Beli Tiket
Route::get('/booking_hotel/{id}', 'TransaksiController@booking_hotel');

//Route admin
Route::get('/admin', 'AdminController@index');
Route::get('/daerah', 'AdminController@daerah');
Route::get('/tambah_daerah', 'AdminController@tambah_daerah');
Route::post('/tambah_daerah', 'AdminController@daerah_store');
Route::get('/kategori', 'AdminController@kategori');
Route::get('tambah_kategori', 'AdminController@tambah_kategori');
Route::post('tambah_kategori', 'AdminController@store_kategori');
Route::get('/wisata', 'AdminController@wisata');
Route::get('/tambah_wisata', 'AdminController@add_wisata');
Route::post('/tambah_wisata', 'AdminController@store');
Route::get('/hapus_wisata/{id}', 'AdminController@destory');
Route::get('/restoran', 'AdminController@restoran');
Route::get('/tambah_restoran', 'AdminController@tambah_restoran');
Route::post('/tambah_restoran', 'AdminController@restoran_store');
Route::get('/hapus_restoran/{id}', 'AdminController@restoran_destroy');
Route::get('/hotel', 'AdminController@hotel');
Route::get('/tambah_hotel', 'AdminController@tambah_hotel');
Route::post('/tambah_hotel', 'AdminController@hotel_store');
Route::get('/hapus_hotel/{id}', 'AdminController@hotel_destroy');


