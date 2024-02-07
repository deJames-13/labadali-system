<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('register');
});
Route::get('/signin', function () {
    return view('signin');
});

Route::get('/user', function () {
    return view('userdash');
});

Route::get('/order', function () {
    return view('order');
});
