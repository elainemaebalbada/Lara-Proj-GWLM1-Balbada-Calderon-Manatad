<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('home');
});

// About Page
Route::get('/about', function () {
    return view('about');
})->name('about');