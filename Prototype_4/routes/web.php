<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;

Auth::routes();

Route::prefix('public')->name('public.')->group(function () {
  Route::get('/index', [ArticleController::class, 'index'])->name('index');
  Route::get('/{id}', [ArticleController::class, 'show'])->name('show');
});

Route::middleware('auth')->group(function () {
  Route::get('/home', [HomeController::class, 'index'])->name('home');

  Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/index', [ArticleController::class, 'index'])->name('index');
    Route::get('/create', [ArticleController::class, 'create'])->name('create');
    Route::post('/', [ArticleController::class, 'store'])->name('store');
    Route::get('/{id}', [ArticleController::class, 'show'])->name('show');
    Route::delete('/{id}', [ArticleController::class, 'destroy'])->name('destroy');
  });
});
