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
    return view('index');
});

Auth::routes();

Route::get('/workpage', 'Controller@workpage')->name('workpage');
Route::get('/workpage/getPelanggan', 'Controller@getPelanggan')->name('workpage.getPelanggan');
Route::get('/workpage/getTetap', 'Controller@getTetap')->name('workpage.getTetap');
Route::get('/workpage/getPln1', 'Controller@getPln1')->name('workpage.getPln1');
Route::get('/workpage/getPln3', 'Controller@getPln3')->name('workpage.getPln3');
Route::get('/workpage/turun', 'Controller@getTurun')->name('workpage.getTurun');
Route::get('/workpage/search', 'Controller@search')->name('workpage.search');
Route::get('/workpage/getTime', 'Controller@getTime')->name('workpage.getTime');
Route::get('/workpage/getChart', 'Controller@getChart')->name('workpage.getChart');
Route::post('/workpage/export', 'Controller@export')->name('workpage.export');
Route::get('/chart', 'Controller@exportChart')->name('workpage.exportChart');

Route::post('/pegawai/changepassword', 'Controller@changePasswordPegawai')->name('workpage.pegawai.changepassword');

Route::get('/admin/dashboard', function(){return view('admin.dashboard');})->name('admin.dashboard');
Route::get('/admin/manajemenpegawai', 'AdminController@pegawai')->name('admin.pegawai');
Route::get('/admin/manajemenpegawai/get', 'AdminController@getPegawai')->name('admin.pegawai.get');
Route::post('/admin/manajemenpegawai/tambah', 'AdminController@tambahpegawai')->name('admin.pegawai.tambah');
Route::get('/admin/manajemenpegawai/hapus/{id}', 'AdminController@hapuspegawai')->name('admin.pegawai.hapus');
Route::post('/admin/manajemenpegawai/edit', 'AdminController@edit')->name('admin.pegawai.edit');
Route::get('/admin/manajemenpelanggan', 'AdminController@pelanggan')->name('admin.pelanggan');
Route::get('/admin/manajemenpelanggan/get', 'AdminController@getPelanggan')->name('admin.pelanggan.get');
Route::post('/admin/manajemenpelanggan/tambah', 'AdminController@tambahPelanggan')->name('admin.pelanggan.tambah');
Route::get('/admin/manajemenpelanggan/hapus', 'AdminController@hapusPelanggan')->name('admin.pelanggan.hapus');
Route::get('/admin/about', function(){ return view('admin.about'); })->name('admin.about');
Route::get('/admin/version', function(){ return view('admin.version'); })->name('admin.version');
