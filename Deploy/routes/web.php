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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin
Route::get('/admin', 'Controller@adminIndex')->name('admin');
Route::get('/admin/buatakun', 'Controller@adminCreate')->name('buatakun');

Route::get('/admin/manajemenakun', 'Controller@manajemenakun')->name('manajemenakun');
//go to manajemen akun

Route::post('/admin/manajemenakun/ubahpassword', 'Controller@ubahpassword')->name('ubahpassword');
//change password admin

Route::get('/admin/manajemenakun/delete/{id}', 'Controller@deleteakun');
//delete akun admin

Route::post('/admin/manajemenakun/tambahakun', 'Controller@tambahakun')->name('tambahakun');

Route::get('/admin/manajemendata', 'PelangganController@index')->name('manajemendata');

Route::post('/admin/manajemendata/tambah', 'PelangganController@store')->name('tambahdata');



Route::get('/admin2', 'adminController@adminhome')->name('adminhome');
Route::get('/admin2/workpage', 'adminController@workpage')->name('adminworkpage');
// Route::get('/admin2/user_management', 'adminController@user_management')->name('user_management');
Route::post('/admin2/adduser', 'adminController@adduser')->name('adduser');
