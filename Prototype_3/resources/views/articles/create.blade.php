@extends('layouts.app')

@section('title', 'Créer un Article')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Créer un Article</h1>
        <form action="/articles" method="POST" class="p-4 bg-light rounded shadow-sm">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titre :</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Entrez le titre de l'article" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Contenu :</label>
                <textarea name="content" id="content" class="form-control" rows="5" placeholder="Écrive z le contenu de l'article" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Créer</button>
        </form>
    </div>
@endsection
