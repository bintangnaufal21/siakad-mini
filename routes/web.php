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
Route::get('/data-dosen', function () {
    return view('data-dosen');
});
Route::get('/data-mata-kuliah', function () {
    return view('data-mata-kuliah');
});
Route::get('/data-jadwal-kuliah', function () {
    return view('data-jadwal-kuliah');
});
Route::get('/data-nilai-mahasiswa', function () {
    return view('data-nilai-mahasiswa');
});
/*! Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); */
