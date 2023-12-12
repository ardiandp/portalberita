<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

/*Route::get('/', function () {
    return view('layout.content');
}); */
Route::get('/', [BerandaController::class, 'index'])->name('beranda.index');
Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda.index');
Route::get('/berita/data', [BeritaController::class, 'getBerita'])->name('berita.data');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::post('/berita/store', 'App\Http\Controllers\BeritaController@store');

Route::get('/api/berita', 'App\Http\Controllers\BeritaController@index');
Route::post('/api/berita/store', 'App\Http\Controllers\BeritaController@store');


Route::get('/users', [UserController::class, 'index'])->name('users.index');