# resources/views/admin/gallery/create.blade.php

@extends('layouts.admin.master')

@section('content')

<div class="container mt-5">

    <h2>Add Gallery</h2>

    <form action="{{ route('gallery.store') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <div class="mb-3">

            <label>Title</label>

            <input type="text"
                   name="title"
                   class="form-control">

        </div>

        <div class="mb-3">

            <label>Image</label>

            <input type="file"
                   name="image1"
                   class="form-control">

        </div>

        <button class="btn btn-primary">
            Save
        </button>

    </form>

</div>

@endsection