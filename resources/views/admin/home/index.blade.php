@extends('layouts.admin.master')

@section('content')

<div class="container mt-5">

<a href="{{ route('home.create') }}"
   class="btn btn-primary mb-3">
Add Home Content
</a>

<table class="table table-bordered">

<tr>
<th>ID</th>
<th>Title</th>
<th>Image</th>
<th>Action</th>
</tr>

@foreach($datas as $data)

<tr>

<td>{{ $data->id }}</td>

<td>{{ $data->title }}</td>

<td>

<img src="{{ asset('storage/'.$data->image) }}"
     width="100">

</td>

<td>

<a href="{{ route('home.edit',$data->id) }}"
   class="btn btn-warning">

Edit

</a>

<form action="{{ route('home.destroy',$data->id) }}"
      method="POST"
      style="display:inline-block;">

@csrf
@method('DELETE')

<button class="btn btn-danger">
Delete
</button>

</form>

</td>

</tr>

@endforeach

</table>

</div>

@endsection