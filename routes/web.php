<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/regis', function () {
    return view('regis');
});
Route::get('/landing', function () {
    return view('landing');
});
Route::get('/dashboard', function () {
    return view('operator.dashboard');
});