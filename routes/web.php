<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('dashboard');

Route::get('/charts', function () {
    return view('charts');
})->name('charts');
