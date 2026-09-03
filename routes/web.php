<?php

use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.layouts.single-master');
});

Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
});

Route::get('/login', function () {
    return view('admin.pages.auth.login');
});

Route::get('/users', [Usercontroller::class, 'index'])->name('users.index');

Route::get('/users/create', [Usercontroller::class, 'create'])->name('users.create');
