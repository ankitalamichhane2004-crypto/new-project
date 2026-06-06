@extends('layouts.admin.master')

@section('content')

<div class="container mt-4">

    <h2>Add Image</h2>

    <form action="{{ route('home-gallery.store') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label>Upload Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button class="btn btn-success">
            Save
        </button>

    </form>

</div>

@endsection