@extends('layouts.public')

@section('content')
  <div class="container mx-auto px-4">
    <div class="shadow rounded-lg overflow-hidden">
      <div class="bg-blue-600 text-white p-4">
        <h3 class="text-lg font-semibold mb-0">Article</h3>
      </div>
      <div class="p-4 bg-white">
        <h4 class="text-xl font-bold">{{ $article->title }}</h4>
        <p class="mt-2">{{ $article->content }}</p>
      </div>
    </div>
  </div>
@endsection
