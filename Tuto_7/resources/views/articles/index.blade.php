@extends('layouts.app')

@section('content')
    <h1>Liste des Articles</h1>
    <button><a href="/articles/create">Créer un nouvel article</a></button>
    <ul>
        @foreach($articles as $article)
            <li>
                <a href="/articles/{{$article['id']}}">{{$article['title']}}</a>
            </li>
        @endforeach
    </ul>
@endsection
