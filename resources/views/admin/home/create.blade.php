@extends('layouts.admin.master')

@section('content')

<div class="container mt-5">

<form action="{{ route('home.store') }}"
      method="POST"
      enctype="multipart/form-data">

@csrf

<input type="text"
       name="title"
       class="form-control mb-3"
       placeholder="Title">

<textarea name="description"
          class="form-control mb-3"></textarea>

<input type="file"
       name="image"
       class="form-control mb-3">

<button class="btn btn-primary">
Save
</button>

</form>

</div>

@endsection