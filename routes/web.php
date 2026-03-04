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