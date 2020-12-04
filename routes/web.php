<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user1', function () {
    return view('user1');
});

Route::get('/user2', function () {
    return view('user2');
});

Route::get('/user3', function () {
    return view('user3');
});

Route::get('/user4', function () {
    return view('user4');
});


