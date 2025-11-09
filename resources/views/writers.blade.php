@extends('layouts.app')
@section('content')
<div class="bg-light py-5">
    <div class="container text-left">

        <h2 class="fw-bold mb-5">Our Writers:</h2>

        <div class="row justify-content-center">
            @foreach($writers as $writer)
                <div class="col-md-4 mb-4">
                    <div class="card border-0 bg-transparent">
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{ asset('img/' . $writer->image) }}" 
                                 alt="{{ $writer->name }}" 
                                 class="rounded-circle shadow" 
                                 width="180" height="180"
                                 style="object-fit: cover;">
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold">{{ $writer->name }}</h5>
                            <p class="text-muted mb-0">Spesialis {{ $writer->specialization }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
@endsection
