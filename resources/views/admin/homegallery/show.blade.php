@extends('layouts.admin.master')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Image Details</h2>

        <a href="{{ route('home-gallery.index') }}" class="btn btn-secondary">
            Back
        </a>
    </div>

    <div class="card shadow">

        <div class="card-body text-center">

            <img src="{{ asset('images/'.$homeGallery->image) }}"
                 style="width: 400px; max-width: 100%; border-radius: 10px; object-fit: cover;">

            <h4 class="mt-3">
                {{ $homeGallery->title ?? 'No Title' }}
            </h4>

        </div>

    </div>

</div>

@endsection