<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('layouts.public.main'));

Route::get('/dashboard', fn() => view('dashboard'))
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__ . '/auth.php';
