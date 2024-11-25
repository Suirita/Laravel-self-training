@extends('layouts.app')

@section('title', 'Liste des Articles')

@section('content')
    <h2 class="mb-4 text-center">Liste des Articles</h2>
    <div class="row g-4">
        @if($articles->count() > 0)
            @foreach ($articles as $article)
                <div class="col-md-4">
                    <x-article-card :article="$article" />
                </div>
            @endforeach
        @else
            <div class="col-12">
                <p class="text-muted text-center">Aucun article disponible pour le moment.</p>
            </div>
        @endif
    </div>
@endsection
