@extends('layouts.public')

@section('content')
  <div class="container mx-auto px-4">
    <div class="shadow rounded-lg overflow-hidden">
      <div class="bg-blue-600 text-white p-4">
        <h3 class="text-lg font-semibold mb-0">Articles</h3>
      </div>
      <div class="p-4 bg-white grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach($articles as $article)
          <div class="border rounded-lg shadow hover:shadow-md overflow-hidden">
            <div class="p-4">
              <h4 class="text-lg font-bold mb-2">{{ $article->title }}</h4>
              <p class="text-sm text-gray-700 mb-4">{{ $article->content }}</p>
              <a href="{{ route('public.show', $article->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Show</a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
