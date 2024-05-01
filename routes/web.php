<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //Users routes
    Route::get('/users')->name('users');
    Route::get('/users/{user}')->name('users.show');
    Route::post('/users')->name('users.store');
    Route::put('/users/{user}')->name('users.update');
    Route::delete('/users/{user}')->name('users.delete');
});
