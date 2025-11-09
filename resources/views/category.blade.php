@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <h2 class="mb-4">Course Categories</h2>

  <div class="row">
    @foreach($categories as $category)
    <div class="col-md-6 mb-3">
      <div class="card shadow-sm border-0 p-3">
        <h4 class="fw-bold text-primary">{{ $category->name }}</h4>
        <p>Explore materials and articles related to {{ $category->name }}.</p>
        <a href="{{ route('category.detail', $category->id) }}" class="btn btn-outline-primary">View Courses</a>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
