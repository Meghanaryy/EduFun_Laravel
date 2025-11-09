@extends('layouts.app')

@section('content')
<h2 class="mb-4">Our Writers</h2>
<div class="row">
@foreach($writers as $writer)
  <div class="col-md-4">
    <div class="card mb-3">
      <div class="card-body">
        <h5>{{ $writer->name }}</h5>
        <p class="text-muted small">{{ Str::limit($writer->bio, 120) }}</p>
        <a href="{{ route('writers.show', $writer->id) }}" class="btn btn-primary btn-sm">View profile</a>
      </div>
    </div>
  </div>
@endforeach
</div>
@endsection
