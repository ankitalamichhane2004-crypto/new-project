@extends('layouts.frontend.master')

@section('content')

<div class="container mt-5">

    <div class="row">

        @foreach($datas as $data)

        <div class="col-lg-4 mb-4">

            <img src="{{ asset('storage/'.$data->image1) }}"
                 class="galleryimg">

            <h5>{{ $data->title }}</h5>

        </div>

        @endforeach

    </div>

</div>

@endsection