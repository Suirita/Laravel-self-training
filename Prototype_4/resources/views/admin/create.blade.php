@extends('layouts.admin')

@section('content')
  <div class="container">
    <div class="card shadow-sm">
      <div class="card-header bg-primary text-white">
        <h3 class="card-title mb-0">Create Article</h3>
      </div>
      <div class="card-body">
        <form action="{{ route('admin.store') }}" method="post">
          @csrf
          <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" id="title" name="title" class="form-control" placeholder="Enter article title" required>
          </div>
          <div class="mb-3">
              <label for="content" class="form-label">Content</label>
              <textarea id="content" name="content" class="form-control" rows="5" placeholder="Enter article content" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Create</button>
        </form>
      </div>
    </div>
  </div>
@endsection
