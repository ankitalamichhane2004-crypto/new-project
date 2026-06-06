@extends('layouts.admin.master')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between mb-3">
        <h2>Home Gallery</h2>

        <a href="{{ route('home-gallery.create') }}" class="btn btn-success">
            + Add Image
        </a>
    </div>

    <div class="row">

        @forelse($galleries as $item)

        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">

            <div class="card shadow">

                <img src="{{ asset('images/'.$item->image) }}"
                     style="height:200px; width:100%; object-fit:cover;">

                <div class="card-body text-center">

                    <a href="{{ route('home-gallery.edit', $item->id) }}"
                       class="btn btn-primary btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('home-gallery.destroy', $item->id) }}"
                          method="POST"
                          style="display:inline-block;">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Delete this image?')">
                            Delete
                        </button>

                    </form>

                </div>

            </div>

        </div>

        @empty

        <div class="col-12 text-center">
            <h5>No images found</h5>
        </div>

        @endforelse

    </div>

</div>

@endsection