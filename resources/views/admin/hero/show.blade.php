

```php id="u6t4jg"
@extends('layouts.admin.master')

@section('content')

<div class="container mt-5">

    <h2>Hero Section Details</h2>

    <div class="card p-4">

        <h3>{{ $data->title }}</h3>

        <video width="500" controls>

            <source src="{{ asset('videos/'.$data->video) }}" 
                    type="video/mp4">

        </video>

    </div>

</div>

@endsection
```
