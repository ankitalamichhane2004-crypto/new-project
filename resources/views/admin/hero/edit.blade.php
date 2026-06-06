```php
@extends('layouts.admin.master')

@section('content')

<div class="container mt-5">

    <h2>Edit Hero Section</h2>

    <form action="{{ route('hero.update',$data->id) }}" 
          method="POST" 
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label>Title</label>

            <input type="text" 
                   name="title" 
                   value="{{ $data->title }}" 
                   class="form-control">

        </div>

        <div class="mb-3">

            <label>Old Video</label><br>

            <video width="200" controls>

                <source src="{{ asset('videos/'.$data->video) }}" 
                        type="video/mp4">

            </video>

        </div>

        <div class="mb-3">

            <label>New Video</label>

            <input type="file" 
                   name="video" 
                   class="form-control">

        </div>

        <button type="submit" class="btn btn-success">

            Update

        </button>

    </form>

</div>

@endsection
```
