<html lang="en">
<head>

<style>
   
 </style>
</head>
<body>
    <div class="mainheader">
    <div class="container">
        <div class="header">
        <div class="row">
               <div class="col-lg-4 col-md-6">
                <div class="fontstart">
                <img src="{{ asset('images/facebook.png') }}" alt="photo">
                <img src="{{ asset('images/viber.png') }}" alt="photo">
                <img src="{{ asset('images/whatsapp.png') }}" alt="photo">
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="fontcenter">
              <i class="ri-mail-line email"></i>
                <p>knkagrovet4646@gmail.com</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="fontend">
            <i class="ri-phone-line phone"></i>
                <p>9865509590,9845343497</p>
                </div>
            </div>
         </div>
        </div>
        </div>
        </div>
    





        <div class="navheader">
          <div class="container">
        <div class="header2 bg-light">
       
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('images/logo.png') }}" alt="photo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Product</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           About
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('aboutProduct') }}">About Product</a></li>

            <li><a class="dropdown-item" href="{{ route('whychooseus') }}">Why Choose Us</a></li>
          </ul>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('blog') }}">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('gallery.index') }}">Gallery</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('contactus') }}">Contact Us</a>
        </li>
       
  </div>
</nav>
</div>
</div>
</div>

 </body>


</html>