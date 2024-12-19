<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckRole;


Route::get('/', function () {
  return view('welcome');
});

Auth::routes();


Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', CheckRole::class . ':admin']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
