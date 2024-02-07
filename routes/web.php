<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('register');
});
Route::get('/signin', function () {
    return view('signin');
});

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/dash', function () {
    return view('dash');
});

Route::get('/order', function () {
    return view('order');
});
