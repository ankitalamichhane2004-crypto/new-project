# resources/views/admin/gallery/index.blade.php

@extends('layouts.admin.master')

@section('content')

<div class="container mt-5">

    <a href="{{ route('gallery.create') }}"
       class="btn btn-primary mb-3">

       Add Gallery

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

                <img src="{{ asset('storage/'.$data->image1) }}"
                     width="120">

            </td>

            <td>

                <a href="{{ route('gallery.show',$data->id) }}"
                   class="btn btn-info">

                   Show

                </a>

                <a href="{{ route('gallery.edit',$data->id) }}"
                   class="btn btn-warning">

                   Edit

                </a>

                <form action="{{ route('gallery.destroy',$data->id) }}"
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