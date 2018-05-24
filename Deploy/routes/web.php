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
Route::get('/workpage/search', 'Controller@search')->name('workpage.search');
Route::get('/workpage/getTime', 'Controller@getTime')->name('workpage.getTime');
Route::get('/workpage/getChart', 'Controller@getChart')->name('workpage.getChart');
Route::get('/chart', 'Controller@exportChart')->name('workpage.exportChart');

Route::post('/pegawai/changepassword', 'Controller@changePasswordPegawai')->name('workpage.pegawai.changepassword');


Route::get('/admin/dashboard', function(){ return view('admin.dashboard'); })->name('admin.dashboard');
Route::get('/admin', 'AdminController@index')->name('adminIndex'); 
// Route::post('/admin/adduser', 'AdminController@adduser')->name('adduser');
// Route::get('/admin/deleteuser', 'AdminController@deleteuser')->name('deleteuser');
// Route::post('/admin/addpelanggan', 'AdminController@addpelanggan')->name('addpelanggan');

Route::get('/admin/dashboard', function(){return view('admin.dashboard');})->name('admin.dashboard');
Route::get('/admin/manajemenpegawai', 'AdminController@pegawai')->name('admin.pegawai');
Route::get('/admin/manajemenpegawai/get', 'AdminController@getPegawai')->name('admin.pegawai.get');
Route::post('/admin/manajemenpegawai/tambah', 'AdminController@tambahpegawai')->name('admin.pegawai.tambah');
Route::get('/admin/manajemenpegawai/hapus/{id}', 'AdminController@hapuspegawai')->name('admin.pegawai.hapus');
Route::post('/admin/manajemenpegawai/edit', 'AdminController@edit')->name('admin.pegawai.edit');
Route::get('/admin/manajemenpelanggan', 'AdminController@pelanggan')->name('admin.pelanggan');
Route::get('/admin/manajemenpelanggan/get', 'AdminController@getPelanggan')->name('admin.pelanggan.get');
Route::get('/admin/manajemenpelanggan/tambah', 'AdminController@tambahPelanggan')->name('admin.pelanggan.tambah');
Route::get('/admin/about', function(){ return view('admin.about'); })->name('admin.about');
Route::get('/admin/version', function(){ return view('admin.version'); })->name('admin.version');


// // Admin
// Route::get('/admin', 'Controller@adminIndex')->name('admin');
// Route::get('/admin/buatakun', 'Controller@adminCreate')->name('buatakun');

// Route::get('/admin/manajemenakun', 'Controller@manajemenakun')->name('manajemenakun');
// //go to manajemen akun

// Route::post('/admin/manajemenakun/ubahpassword', 'Controller@ubahpassword')->name('ubahpassword');
// //change password admin

// Route::get('/admin/manajemenakun/delete/{id}', 'Controller@deleteakun');
// //delete akun admin

// Route::post('/admin/manajemenakun/tambahakun', 'Controller@tambahakun')->name('tambahakun');

// Route::get('/admin/manajemendata', 'PelangganController@index')->name('manajemendata');

// Route::post('/admin/manajemendata/tambah', 'PelangganController@store')->name('tambahdata');



// Route::get('/admin2', 'adminController@adminhome')->name('adminhome');
// Route::get('/admin2/workpage', 'adminController@workpage')->name('adminworkpage');
// // Route::get('/admin2/user_management', 'adminController@user_management')->name('user_management');
// Route::post('/admin2/adduser', 'adminController@adduser')->name('adduser');

Route::get('/pelanggan', 'PelangganController@index')->name('pelanggan');
Route::any('/pelanggan/search', 'PelangganController@search')->name('pelanggansearch');
Route::get('/pelanggan/tetap', 'PelangganController@tetap')->name('pelanggantetap');
Route::get('/pelanggan/turun', 'PelangganController@turun')->name('pelangganturun');
Route::get('/pelanggan/chart', 'PelangganController@chart')->name('chart');
Route::get('/pelanggan/curang', 'PelangganController@pln')->name('pln');
Route::get('/pelanggan/chart/export', 'PelangganController@export')->name('export');
Route::get('/pelanggan/tahunan', 'PelangganController@tahunan')->name('pelanggantahunan');
Route::get('/pelanggan/tes', 'PelangganController@tes')->name('tes');
