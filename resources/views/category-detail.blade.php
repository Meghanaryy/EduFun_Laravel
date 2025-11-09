@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <h2 class="mb-4">{{ $category->name }}</h2>

  @foreach($articles as $article)
  <div class="card mb-3 shadow-sm border-0">
    <div class="card-body">
      <h4>{{ $article->title }}</h4>
      <p>{{ Str::limit($article->content, 120) }}</p>
      <small>Written by {{ $article->writer->name }} on {{ $article->published_at }}</small>
      <br>
      <a href="{{ route('detail', $article->id) }}" class="btn btn-sm btn-primary mt-2">Read More</a>
    </div>
  </div>
  @endforeach
</div>
@endsection