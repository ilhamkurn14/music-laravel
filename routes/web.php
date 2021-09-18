<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarFilmController;
use App\Http\Controllers\DaftarGenreController;

Route::resource('daftargenres', DaftarGenreController::class);
Route::resource('daftarfilms', DaftarFilmController::class);
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
// Route::get('/', 'App\Http\Controllers\DaftarFilmController@tampilkanSemuaDaftarFilm' , 'App\Http\Controllers\DaftarGenreController@tampilkanSemuaDaftarGenre');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/daftarfilm', 'App\Http\Controllers\DaftarFilmController@tampilkanSemuaDaftarFilm');
