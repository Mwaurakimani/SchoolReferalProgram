<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/vue', function () {
    return Inertia::render('Welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
])->group(function () {
    Route::get('/Portal', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
