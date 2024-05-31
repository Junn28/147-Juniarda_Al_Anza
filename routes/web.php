<?php

use App\Http\Controllers\AbsentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PresenceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function() {
    Route::get('/', 'index')->name('loginPage');
    Route::get('/logout', 'logout')->name('logout');
    Route::post('/login', 'login')->name('login');
    Route::post('/signup', 'signUp')->name('signup');
});

// admin
Route::get('/admin/home', [HomeController::class, 'index'])->middleware(['authenticate:admin'])->name('admin.home');
Route::get('/admin/permission', [PermissionController::class, 'index'])->middleware(['authenticate:admin'])->name('admin.permission');
Route::delete('/absent/delete/{id}', [AbsentController::class, 'destroy'])->middleware(['authenticate:admin'])->name('absent.delete');
Route::post('/addUser', [UserController::class, 'add'])->middleware(['authenticate:admin'])->name('add');

// user
Route::get('/home', [HomeController::class, 'index'])->middleware(['authenticate:user'])->name('user.home');

Route::post('/timeIn', [PresenceController::class, 'store'])->middleware(['authenticate:user'])->name('timeIn');
Route::put('/timeOut', [PresenceController::class, 'update'])->middleware(['authenticate:user'])->name('timeOut');

Route::get('/presence', [AbsentController::class, 'presence'])->middleware(['authenticate:user'])->name('presence');
Route::get('/absence', [AbsentController::class, 'absence'])->middleware(['authenticate:user'])->name('absence');
Route::get('/permit', [AbsentController::class, 'permission'])->middleware(['authenticate:user'])->name('permit');

Route::get('/permission', [PermissionController::class, 'index'])->middleware(['authenticate:user'])->name('user.permission');
Route::post('/permission', [PermissionController::class, 'store'])->middleware(['authenticate:user'])->name('user.permission');

Route::get('/getSession', function() {
    $data = request()->session()->all();
    return $data;
});
