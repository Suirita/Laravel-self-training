<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', function () {   
    $article = \App\Models\Article::find(1);
    $article->comments()->create(['content' => 'Super article !']);

    $video = \App\Models\Video::create(['title' => 'My video', 'content' => 'My video content', 'user_id' => 1]);
    $video->comments()->create(['content' => 'Super video !']);

    dd(['articles' => [$article, $video]]);
});
