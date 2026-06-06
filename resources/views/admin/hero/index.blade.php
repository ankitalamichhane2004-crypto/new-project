
@extends('layouts.admin.master')

@section('content')

<div class="container mt-5">

    <a href="{{ route('hero.create') }}" 
       class="btn btn-primary mb-3">

       Add Hero Section

    </a>

    <table class="table table-bordered">

        <thead>

            <tr>

                <th>ID</th>
                <th>Title</th>
                <th>Video</th>
                <th>Action</th>

            </tr>

        </thead>

        <tbody>

            @foreach($datas as $data)

            <tr>

                <td>{{ $data->id }}</td>

                <td>{{ $data->title }}</td>

                <td>

                    <video width="200" controls>

                        <source src="{{ asset('videos/'.$data->video) }}" 
                                type="video/mp4">

                    </video>

                </td>

                <td>

                    <a href="{{ route('hero.show',$data->id) }}" 
                       class="btn btn-info">

                       Show

                    </a>

                    <a href="{{ route('hero.edit',$data->id) }}" 
                       class="btn btn-success">

                       Edit

                    </a>

                    <form action="{{ route('hero.destroy',$data->id) }}" 
                          method="POST" 
                          style="display:inline-block;">

                        @csrf
                        @method('DELETE')

                        <button type="submit" 
                                class="btn btn-danger">

                            Delete

                        </button>

                    </form>

                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection
```
