# resources/views/admin/gallery/show.blade.php

@extends('layouts.admin.master')

@section('content')

<div class="container mt-5">

    <h2>Gallery Details</h2>

    <h4>{{ $gallery->title }}</h4>

    <img src="{{ asset('storage/'.$gallery->image1) }}"
         width="300">

</div>

@endsection