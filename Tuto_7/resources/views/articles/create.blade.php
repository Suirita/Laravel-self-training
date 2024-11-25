@extends('layouts.app')

@section('content')
    <h1>Un Article</h1>
    <form action="/articles" method="POST">
        @csrf
        <label for="title">Titre :</label>
        <input type="text" name="title" value="" required>
        <label for="content">Contenu :</label>
        <textarea name="content" required></textarea>
        <button type="submit">Create</button>
    </form>
@endsection
