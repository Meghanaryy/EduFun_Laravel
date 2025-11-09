@extends('layouts.app')
@section('content')
<h2>{{ $article->title }}</h2>
<p><strong>Writer:</strong> {{ $article->writer->name }}</p>
<p><strong>Date:</strong> {{ $article->published_at }}</p>
<p>{{ $article->content }}</p>
@endsection
