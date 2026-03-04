<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/growth', function () {
    return view('growth.index');
})->name('growth.index');

Route::get('/maintenance', function () {
    return view('maintenance.index');
})->name('maintenance.index');

Route::get('/', function () {
    return view('landing');
})->middleware('guest');

Route::middleware(['auth', 'role:user'])->group(function () {

    Route::get('/dashboard', function () {
        return view('user.dashboard');
    });

    Route::get('/maintenance', function () {
        return view('user.maintenance');
    });

    Route::get('/growth', function () {
        return view('user.growth');
    });

});

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/users', function () {
        return view('admin.users');
    });

});