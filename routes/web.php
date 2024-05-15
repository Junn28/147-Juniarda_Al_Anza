<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.login');
});

Route::get('/home', function() {
    return view('pages/home');
});

Route::get('/permission', function() {
    return view('pages/permission');
});

Route::get('/admin-home', function() {
    return view('pages/admin/home');
});

Route::get('/admin-permission', function() {
    return view('pages/admin/permission');
});