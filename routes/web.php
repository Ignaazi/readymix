<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route khusus untuk halaman 404 agar dirender di dalam @yield('content') app.blade.php
Route::get('/404', function () {
    return response()->view('errors.404', [], 404);
});

// Route untuk halaman Terms of Service (Mengarahkan ke pages/terms.blade.php)
Route::get('/term', function () {
    return view('pages.terms');
});

// Route untuk halaman Privacy Policy
Route::get('/privacy', function () {
    return view('pages.privacy');
});