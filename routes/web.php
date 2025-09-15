<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/data-mahasiswa', function () {
    return view('data-mahasiswa');
});
/*! Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); */
