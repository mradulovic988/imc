<?php

use App\Http\Controllers\ActorsController;
use App\Http\Controllers\DashboardUsersController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\ListsController;
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
    Route::get('/actors/page/{page?}', 'index');
    Route::get('/actors/{id}', 'show')->name('actors.show');
});

Route::controller(ListsController::class)->middleware(['auth', 'verified'])->group(function () {
    Route::get('/your-lists', 'index')->name('your-lists.index');
    Route::get('/create-your-list', 'create')->name('create-your-list.create');
    Route::post('/lists', 'store')->name('lists.store');
});

Route::controller(UserController::class)->middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', 'index')->name('profile.index');
});

Route::middleware('admin')->group(function () {
    Route::get('/dashboard-users', [DashboardUsersController::class, 'index'])->name('dashboard.users');
    Route::get('/dashboard-logs', fn() => view('dashboard.logs'))->name('dashboard.logs');
    Route::get('/dashboard-settings', fn() => view('dashboard.settings'))->name('dashboard.settings');
    Route::get('/dashboard-notifications', fn() => view('dashboard.notifications'))->name('dashboard.notifications');
});

require __DIR__ . '/auth.php';
