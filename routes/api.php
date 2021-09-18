<?php

use App\Http\Controllers\DaftarFilmController;
use App\Http\Controllers\DaftarGenreController;
use App\Http\Controllers\MovieController;
// Use App\Models\DaftarGenre;
// Use App\Models\DaftarFilm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::name("daftargenre.")->group(function () {
    Route::get('/daftargenres', [DaftarGenreController::class, 'index']);
});

Route::name("daftarfilm.")->middleware('auth:sanctum')->group(function () {
    Route::get('/daftarfilms', [DaftarFilmController::class, 'index']);
});

Route::name("daftarfilm.daftargenre.")->middleware('auth:sanctum')->group(function () {
    Route::get('/daftarfilms/{daftarfilm}/daftargenres', [MovieController::class, 'index']);
});