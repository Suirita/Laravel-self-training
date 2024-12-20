<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
  public function index()
  {
    $articles = Article::all();

    if (Auth::check()) {
      return view('admin.index', compact('articles'));
    } else {
      return view('public.index', compact('articles'));
    }
  }

  public function create()
  {
    return view('admin.create');
  }

  public function store(Request $request)
  {
    $request->validate([
      'title' => 'required',
      'content' => 'required',
    ]);

    $article = new Article;
    $article->title = $request->title;
    $article->content = $request->content;
    $article->save();

    return redirect()->route('admin.index');
  }

  public function show($id)
  {
    $article = Article::find($id);

    if (Auth::check()) {
      return view('admin.show', compact('article'));
    } else {
      return view('public.show', compact('article'));
    }
  }

  public function destroy($id)
  {
    $article = Article::find($id);
    $article->delete();

    return redirect()->route('admin.index');
  }
}
