<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/sign-in', function () {
    return view('pages.sign-in');
})->name('sign-in');

Route::post('/sign-in', function () {
    return redirect('/')
        ->with('success', 'Demo sign in successful!');
})->name('sign-in.submit');
