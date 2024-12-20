@extends('layouts.admin')

@section('content')
  <div class="container">
    <button class="btn btn-primary mb-4" onclick="window.location.href='{{ route('admin.create') }}'">Create Article</button>
    <div class="card shadow-sm">
      <div class="card-header bg-primary text-white">
        <h3 class="card-title mb-0">Articles</h3>
      </div>
      <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Title</th>
              <th>Content</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($articles as $article)
              <tr>
                <td>{{ $article->title }}</td>
                <td>{{ $article->content }}</td>
                <td>
                  <a href="{{ route('admin.show', $article->id) }}" class="btn btn-primary">Show</a>
                  <form action="{{ route('admin.destroy', $article->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
