@extends('layouts.app')

@section('content')
    <h2>Liste des Articles</h2>
    @foreach ($articles as $article)
        <x-article-card :article="$article" />
    @endforeach

@endsection
