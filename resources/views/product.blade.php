

@extends('layouts.frontend.master')

@section('content')
     
<div class="video-container">
  
  <video class="video" autoplay loop muted playsinline>
     <source src="{{ asset('images/productpagevideo.mp4') }}" alt="video">
  </video>

  <div class="overlayer"></div>

  <h3 class="video-text">
   Complete Agrovet Solutions for Modern Farming
  </h3>

</div>

<div class="container">
  <div class="row">
    @foreach ($products as $product)
    
   
    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="product shadow p-5">
  <a href="product1.html">
    <img src="{{ asset('storage/' . $product->image) }}" class="productimg">
    <p>{{ $product->ProductName }}</p>
  </a>
</div>
    </div>
     @endforeach

     <!-- <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="{{ asset('images/Boviosta cal.png') }} " class="productimg">
    <p>Boviosta CAl</p>
  </a>
</div>
    </div>


     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="{{ asset('images/boviosta gel.png') }}" class="productimg">
    <p>Boviosta Gel</p>
  </a>
</div>
    </div>


     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
     <img src="{{ asset('images/websters.png') }}" class="productimg">
    <p>Websters</p>
  </a>
</div>
    </div> -->
  </div> 
</div>

<!-- <div class="container">
  <div class="row">

    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="product shadow p-5">
  <a href="product1.html">
     <img src="{{ asset('images/Boviosta Advance Gel.png') }}" class="productimg">
    
    <p>Boviosta Advance Gel</p>
  </a>
</div>
    </div>

     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
     <img src="{{ asset('images/Rytime.png') }}" class="productimg">
    <p>RyTime</p>
  </a>
</div>
    </div>


     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
     <img src="{{ asset('images/Udder Guard Kit(UGK).png') }}" class="productimg">
    
    <p>Udder Guard Kit(UGK)</p>
  </a>
</div>
    </div>


     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
   <img src="{{ asset('images/Exopel Vet.jpg') }}" class="productimg">
    <p>Exopel Vet</p>
  </a>
</div>
    </div>
  </div> 
</div> -->

<!-- <div class="container">
  <div class="row">

    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="product shadow p-5">
  <a href="product1.html">
    <img src="{{ asset('images/Apozen.jpg') }}" class="productimg">
    <p>Apozen</p>
  </a>
</div>
    </div>

     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="{{ asset('images/Mylogen.jpg') }}" class="productimg">
    <p>Mylogen</p>
  </a>
</div>
    </div>


     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="{{ asset('images/Mustmilk.jpg') }}" class="productimg">
    <p>Mustmilk</p>
  </a>
</div>
    </div>


     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="{{ asset('images/Calfokit.png') }}" class="productimg">
    <p>Calfokit</p>
  </a>
</div>
    </div>
  </div> 
</div>

<div class="container">
  <div class="row">

    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="product shadow p-5">
  <a href="product1.html">
    <img src="{{ asset('images/Digescon.png') }}" class="productimg">
    <p>Digescon</p>
  </a>
</div>
    </div>

     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="{{ asset('images/Boviup H.jpg') }}" class="productimg">
    <p style="color: black; "> Boviup H</p>
  </a>
</div>
    </div>


     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
     <img src="{{ asset('images/Beliton.png') }}" class="productimg">
    <p>Beliton</p>
  </a>
</div>
    </div>


     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="{{ asset('images/AD Grow p.jpg') }}" class="productimg">
   
    <p>AD Grow P</p>
  </a>
</div>
    </div>
  </div> 
</div>

<div class="container">
  <div class="row">

    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="product shadow p-5">
  <a href="product1.html">
     <img src="{{ asset('images/stickers.jpg') }}" class="productimg">
    <p>stickers</p>
  </a>
</div>
    </div>

     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
     <img src="{{ asset('images/saaf.png') }}" class="productimg">
    <p style="color: black; "> Saaf</p>
  </a>
</div>
    </div>


     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
     <img src="{{ asset('images/Rounder.jpg') }}" class="productimg">
    <p>Rounder</p>
  </a>
</div>
    </div>


     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="{{ asset('images/antracol.jpg') }}" class="productimg">
    <p>Antracol</p>
  </a>
</div>
    </div>
  </div> 
</div>

<div class="container">
  <div class="row">

    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="product shadow p-5">
  <a href="product1.html">
    <img src="{{ asset('images/bavistin.jpg') }}" class="productimg">
    <p>Bavistin</p>
  </a>
</div>
    </div>

     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="{{ asset('images/kingstar.png') }}" class="productimg">
    <p style="color: black; "> kingstar</p>
  </a>
</div>
    </div>


     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
     <img src="{{ asset('images/King Mil 72.jpg') }}" class="productimg">
    <p>King Mil 72</p>
  </a>
</div>
    </div>


     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="{{ asset('images/Apozen.jpg') }}" class="productimg">
    <p></p>
  </a>
</div>
    </div>
  </div> 
</div> -->


<div class="whatapp">
  <img src="{{ asset('images/whatsapp.png') }}" alt="">
</div>

@endsection