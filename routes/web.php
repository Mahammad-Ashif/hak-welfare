<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return redirect()->route('home');
    return view('client.home');
});

Route::get('/home', function () {
    return view('welcome');
})->name('home');
