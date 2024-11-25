<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = [
            ['id' => 1, 'title' => 'Introduction à Laravel', 'content' => 'Lorem ipsum...'],
            ['id' => 2, 'title' => 'Pourquoi choisir Laravel ?', 'content' => 'Lorem ipsum...']
        ];
        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = [
            'id' => $id,
            'title' => "Article $id",
            'content' => 'Contenu de l’article...'
        ];
        return view('articles.show', compact('article'));
    }
}
