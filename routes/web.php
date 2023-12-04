<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
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

Route::get('/', function () {
    return view('layout.content');
});

Route::get('/api/berita', 'App\Http\Controllers\BeritaController@index');
Route::post('/api/berita/store', 'App\Http\Controllers\BeritaController@store');