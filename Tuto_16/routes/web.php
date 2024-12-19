<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', function () {
    $query = Article::query();

    if (request('category_id')) {
        $query->where('category_id', request('category_id'));
    }

    if (request('status')) {
        $query->where('status', request('status'));
    }

    $articles = $query->paginate(10);
    return view('articles.index', compact('articles'));
});
