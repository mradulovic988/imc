<?php

use App\Http\Controllers\ActorsController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\MyProfilesController;
use App\Http\Controllers\TvController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(MoviesController::class)->group(function () {
    Route::get('/', 'index')->name('movies.index');
    Route::get('/movies/{id}', 'show')->name('movies.show');
});

Route::controller(TvController::class)->group(function () {
    Route::get('/tv', 'index')->name('tv.index');
    Route::get('/tv/{id}', 'show')->name('tv.show');
});

Route::controller(ActorsController::class)->group(function () {
    Route::get('/actors', 'index')->name('actors.index');
    Route::get('/actors/{id}', 'show')->name('actors.show');
});

Route::controller(FavoritesController::class)->middleware(['auth', 'verified'])->group(function () {
    Route::get('/favorites', 'index')->name('favorites.index');
});

Route::controller(UserController::class)->middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', 'index')->name('profile.index');
});

Route::get('/dashboard', fn() => view('dashboard'))
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__ . '/auth.php';
