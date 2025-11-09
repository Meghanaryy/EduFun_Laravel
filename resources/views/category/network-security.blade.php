@extends('layouts.app')
@section('content')
<div class="container mt-5 pt-5">
    <h2 class="text-center fw-bold mb-5">Network Security</h2>
    <div class="row">
        @foreach($courses as $course)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset($course['image']) }}" class="card-img-top" style="height:200px; object-fit:cover;" alt="{{ $course['title'] }}">
                <div class="card-body">
                    <h5 class="fw-bold">{{ $course['title'] }}</h5>
                    <p>{{ $course['description'] }}</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
