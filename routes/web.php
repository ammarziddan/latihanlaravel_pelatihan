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

Route::get('/', function () {
    // echo "Ammar Ziddan";
    return view('welcome');
});

Route::get('/docs', function () {
    echo "Ammar Ziddan";
});

Route::get('/login', function () {
    echo "Halaman Login";
})->name('login');

Route::get('/fakultas/{namafakultas}', 'FakultasController@index');

Route::get('/sarjana/{alas}', 'SarjanaController@index');


Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/mahasiswa/create', 'MahasiswaController@create')->name('mahasiswa.create');
Route::post('/mahasiswa/store', 'MahasiswaController@store')->name('mahasiswa.store');
Route::get('/mahasiswa/edit/{id}', 'MahasiswaController@edit')->name('mahasiswa.edit');
Route::post('/mahasiswa/update/{id}', 'MahasiswaController@update')->name('mahasiswa.update');
Route::get('/mahasiswa/destroy/{id}', 'MahasiswaController@destroy')->name('mahasiswa.destroy');
