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
