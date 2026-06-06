
@extends('layouts.frontend.master')

@section('content')
     
   <div class="video-container">
  
  <video class="video" autoplay loop muted playsinline>
     <source src="{{ asset('./images/ankitavideo.mp4') }}" type="video/mp4">
  </video>

  <div class="overlayer"></div>

  <h3 class="video-text">
    From Soil to Success
  </h3>

</div>

 <div class="page-header">
        <h1>Premium Product Collection</h1>
        <p>Discover our latest and best products</p>
    </div>

    <!-- Product Grid -->
    <div class="product-grid">

        <!-- Card 1 -->
        <div class="product-card card1">
            <div class="product-badge">New</div>
            <div class="product-wishlist">♥</div>
            <div class="product-image"><img src="{{ asset('./images/Boviup H.jpg') }}" alt="" class="product-image"></div>
            <div class="product-content">
                <h2 class="product-title">Boviup</h2>
                <div class="product-rating">★★★★★ <span>(4.8)</span></div>
                <div class="product-price">
                    <span class="old-price">Rs250</span>Rs200
                </div>
                <a href="#" class="product-btn">Buy Now</a>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="product-card card2">
            <div class="product-badge">New</div>
            <div class="product-wishlist">♥</div>
            <div class="product-image"><img src="{{ asset('./images/saaf.png') }}" alt="" class="product-image"></div>
            <div class="product-content">
                <h2 class="product-title">Saaf</h2>
                <div class="product-rating">★★★★★ <span>(4.9)</span></div>
                <div class="product-price">
                    <span class="old-price">Rs899</span> Rs749
                </div>
                <a href="#" class="product-btn">Buy Now</a>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="product-card card3">
            <div class="product-badge">Best Seller</div>
            <div class="product-wishlist">♥</div>
            <div class="product-image"><img src="{{ asset('./images/Beliton.png') }}" alt="" class="product-image"></div>
            <div class="product-content">
                <h2 class="product-title">Beliton</h2>
                <div class="product-rating">★★★★★ <span>(4.7)</span></div>
                <div class="product-price">
                    <span class="old-price">Rs199</span> Rs149
                </div>
                <a href="#" class="product-btn">Buy Now</a>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="product-card card4">
            <div class="product-badge">Best seller</div>
            <div class="product-wishlist">♥</div>
            <div class="product-image" ><img src="{{ asset('./images/bavistin.jpg') }}" alt="" class="product-image"></div>
            <div class="product-content">

                <h2 class="product-title">Bavistin</h2>
                <div class="product-rating">★★★★★ <span>(4.6)</span></div>
                <div class="product-price">
                    <span class="old-price">Rs299</span> Rs219
                </div>
                <a href="#" class="product-btn">Buy Now</a>
            </div>
        </div>

 

     <div class="product-card card5">
            <div class="product-badge">Best seller</div>
            <div class="product-wishlist">♥</div>
            <div class="product-image" ><img src="{{ asset('./images/Calfokit.png') }}" alt="" class="product-image"></div>
            <div class="product-content">

                <h2 class="product-title">Calfokit</h2>
                <div class="product-rating">★★★★★ <span>(4.6)</span></div>
                <div class="product-price">
                    <span class="old-price">Rs200</span> Rs170
                </div>
                <a href="#" class="product-btn">Buy Now</a>
            </div>
        </div>
</div>
    </div>

    

<div class="container">
  <a href="./product.html">
  <center>
<button>View Product</button>
</center>
</div>
</a>
    
@endsection