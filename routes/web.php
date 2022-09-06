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
    return 'SELAMAT DATANG';
    //return view('welcome');
});

Route::get('/about', function () {
    return 'NIM : 1941720224 <br> Nama : Muhammad Hajar Priatmaja <br> Kelas : TSA WEB A';
    //return view('welcome');
});

Route::get('/articles/{id}', function ($id) {
    return 'HALAMAN ARTIKEL DENGAN ID ' . $id;
    //return view('welcome');
});




// -- NOMOR 2 --


