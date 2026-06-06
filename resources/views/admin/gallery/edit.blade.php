# resources/views/admin/gallery/edit.blade.php

@extends('layouts.admin.master')

@section('content')

<div class="container mt-5">

    <h2>Edit Gallery</h2>

    <form action="{{ route('gallery.update',$gallery->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label>Title</label>

            <input type="text"
                   name="title"
                   value="{{ $gallery->title }}"
                   class="form-control">

        </div>

        <div class="mb-3">

            <img src="{{ asset('storage/'.$gallery->image1) }}"
                 width="150">

        </div>

        <div class="mb-3">

            <label>New Image</label>

            <input type="file"
                   name="image1"
                   class="form-control">

        </div>

        <button class="btn btn-success">

            Update

        </button>

    </form>

</div>

@endsection