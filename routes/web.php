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

Route::get('FormInputBarang', function () {
    return view('FormInputBarang');
});

Route::get('tambahpegawai', function () {
    return view('tambahpegawai');
});

Route::get('editpegawai', function () {
    return view('editpegawai');
});

Route::get('daftarpegawai', 'PetugasController@index');

Route::get('hapuspegawai', function () {
    return view('deletepegawai');
});

Route::get('editbarang', function () {
    return view('editbarang');
});

Route::get('daftarbarang', 'DataController@index');

Route::get('hapusbarang', function () {
    return view('deletebarang');
});

Route::resource('index', 'PetugasController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('store', 'DataController@store');

Route::post('storePegawai', 'PetugasController@storePegawai');

Route::get('show', 'PetugasController@show');

Route::delete('hapus&{id}', 'PetugasController@destroy');

Route::delete('hapusbr&{id}', 'DataController@destroy');

Route::get('laporan', 'DataController@indexLaporan');

//Route::get('laporan', 'DataController@index');

//Route::resource('petugas', 'PetugasController');

