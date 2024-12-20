@extends('layouts.admin')

@section('content')
  <div class="container">
    <div class="card shadow-sm">
      <div class="card-header bg-primary text-white">
        <h3 class="card-title mb-0">Article</h3>
      </div>
      <div class="card-body">
        <h4>{{ $article->title }}</h4>
        <p>{{ $article->content }}</p>
      </div>
    </div>
  </div>
@endsection
