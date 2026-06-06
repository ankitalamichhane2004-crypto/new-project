@extends('layouts.admin.master')

@section('content')

<div class="container mt-4">

    <h2>Edit Image</h2>

    <form action="{{ route('home-gallery.update', $homeGallery->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Current Image</label><br>
            <img src="{{ asset('images/'.$homeGallery->image) }}"
                 width="120"
                 style="border-radius:10px;">
        </div>

        <div class="mb-3">
            <label>Change Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button class="btn btn-primary">
            Update
        </button>

    </form>

</div>

@endsection