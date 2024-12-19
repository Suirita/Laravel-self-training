<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['permission:view dashboard'])->group(function () {
    Route::get('/dashboard', function () {
        return 'Welcome to the dashboard';
    });
});

Route::get('/admin/dashboard', [AdminController::class, 'index']);
