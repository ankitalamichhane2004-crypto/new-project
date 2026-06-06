@extends('layouts.admin.master')

@section('content')

<div class="container mt-5">

<form action="{{ route('home.update',$home->id) }}"
      method="POST"
      enctype="multipart/form-data">

@csrf
@method('PUT')

<input type="text"
       name="title"
       value="{{ $home->title }}"
       class="form-control mb-3">

<textarea name="description"
          class="form-control mb-3">{{ $home->description }}</textarea>

<img src="{{ asset('storage/'.$home->image) }}"
     width="120">

<input type="file"
       name="image"
       class="form-control mt-3">

<button class="btn btn-success mt-3">
Update
</button>

</form>

</div>

@endsection