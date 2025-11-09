@extends('layouts.app')

@section('content')
<div class="text-center mb-4">
    @if($writer->avatar)
        <img src="{{ asset('img/'.$writer->avatar) }}" class="rounded-circle mb-3" style="height:120px;">
    @endif
    <h3>{{ $writer->name }}</h3>
    <p class="text-muted">{{ $writer->bio }}</p>
</div>

<h4>Articles by {{ $writer->name }}</h4>
<div class="row">
@foreach($posts as $post)
  <div class="col-md-4">
    <div class="card mb-3">
      <div class="card-body">
        <h5>{{ $post->title }}</h5>
        <p>{{ $post->excerpt }}</p>
        <a href="{{ route('post.show', $post->slug) }}" class="btn btn-primary btn-sm">Read more</a>
      </div>
    </div>
  </div>
@endforeach
</div>
{{ $posts->links() }}
@endsection
