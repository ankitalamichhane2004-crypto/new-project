@extends('layouts.frontend.master')

@section('content')
<div class="video-container">

    <video class="video" autoplay loop muted playsinline>

        <source src="{{ asset('videos/'.$datas->video) }}" type="video/mp4">

    </video>

    <div class="overlayer"></div>

    <h3 class="video-text" 
        data-aos="fade-right" 
        data-aos-duration="3000">

        {{ $datas->title }}

    </h3>

</div>
<div class="container">

<div class="section" style="margin: 50px;">

    <h1 style="color:#04803b; font-family: Livvic; padding-top:20px;">
        <center>From seed to success, we walk with farmers.</center>
    </h1>

    <div class="row">

        @foreach($galleries as $item)

        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="parts1">
                <img src="{{ asset('images/'.$item->image) }}"
                     class="images2"
                     alt="photo">
            </div>
        </div>

        @endforeach

    </div>

</div>

</div>
   
   <div class="sectionss">
   <div class="container">
   <div class="section1">
    <div class="row">
      <div class="col-lg-6 col-md-12">
    <div data-aos="fade-right" data-aos-duration="3000">
    <div class="content1"><center>
    <h3 style="color: #04803b; padding-top: 20px;">All You Need to Know About</h3>
    <h4 style="color: #04803b;">Who We Are</h4>
    <p style="font-family: livvic; padding: 10px;">KNK Agrovet is a highly trusted and dedicated company committed to the growth and development of Nepal’s poultry and livestock industry. We specialize in providing a wide range of high-quality veterinary products, animal health solutions, and agricultural inputs that cater to the unique needs of farmers across the country. Our mission is to support farmers by promoting healthy livestock, improving farm productivity, and ensuring sustainable agricultural practices.<br>

At KNK Agrovet, we work closely with farmers, veterinarians, and animal health professionals to deliver reliable and effective solutions that enhance animal welfare and optimize farm operations. From preventive care and nutritional supplements to disease management and innovative agricultural products, we strive to offer comprehensive support that empowers farmers to achieve success.
</p>

<button class="read-more" style="margin-bottom: 30px;">Read More</button>
    </div></center>
    </div>
    </div>

      <div class="col-lg-6 col-md-12">
    <div data-aos="fade-left" data-aos-duration="3000">
    <div class="content2"><img src="{{ asset('images/cow.jpg') }}" alt="photo" class="cow"></div>
    </div>
   </div>
   </div>
   </div>
   </div>
   </div>

<div class="swiper-container testimonial-slider-rtl" dir="rtl">
  <div class="swiper-wrapper">
   <div class="swiper-slide"> <img src="{{ asset('images/swiperimage1.png') }}" alt="photo"></div>
   <div class="swiper-slide"> <img src="{{ asset('images/swiperimage2.png') }}" alt="photo"></div>
   <div class="swiper-slide"> <img src="{{ asset('images/swiperimage3.png') }}" alt="photo"></div>
   <div class="swiper-slide"> <img src="{{ asset('images/swiperimage4.png') }}" alt="photo"></div>
   <div class="swiper-slide"> <img src="{{ asset('images/swiperimage5.png') }}" alt="photo"></div>
   <div class="swiper-slide"> <img src="{{ asset('images/swiperimage9.png') }}" alt="photo"></div>
  </div>
  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
  <!-- Add Navigation -->
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>

<div class="container our-services">
  <div class="row">
    <div class="col-lg-4 col-md-6">
      <div class="flip-container">
        <div class="flipper">
          <div class="front" style="background:  #04803b !important;">
            <img class="lazyload" src="{{ asset('images/review-image1.jpg') }}" alt="Avatar" style="width:150px;height:150px;">
            <h3>Sarmila Thapa</h3>
          </div>
          <div class="back" style="background: #04803b !important;">
            <h5>Poultry Fram Owner</h5>
            <p>High-quality veterinary products that improve bird health and farm performance. KNK Agrovet is a reliable and trusted partner.”</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="flip-container">
        <div class="flipper">
          <div class="front" style="background:  #036AAA;">
            <img class="lazyload" src="{{ asset('images/review-image2.jpg') }}" alt="Avatar" style="width:150px;height:150px;">
            <h3>Shiva Subedi</h3>
          </div>
          <div class="back" style="background:  #036AAA;">
            <h5>Tomato Farming</h5>
            <p>“Effective fertilizers and crop protection products from KNK Agrovet improved tomato growth and disease control.”</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="flip-container">
        <div class="flipper">
          <div class="front" style="background: #04803b;">
            <img class="lazyload" src="{{ asset('images/review-image3.jpg') }}"" alt="Avatar" style="width:150px;height:150px;">
            <h3>Ram Devkota</h3>
          </div>
          <div class="back" style="background:  #04803b;">
            <h5>ELDERLY REHAB</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, distinctio.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

 @endsection