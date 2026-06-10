@extends('layouts.frontend.master')
@section('content')


    <div class="container">
        <div class="whole">
        <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="googlemap">
                <h3 style="color: green;">Our Store Location</h3>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.0591478227298!2d84.50121577492224!3d27.68456672649685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994e53b8b3288bb%3A0xd140c1a23cfced71!2sKnk%20agrovet!5e0!3m2!1sen!2snp!4v1767191040145!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            </div>


            
            <div class="col-lg-6 col-md-12">
     
    <div class="form-section">
        <form action="" class="contact-form" onsubmit="return validateform()">
<!-- 
         <div>
            <label for="name">Name</label>
            <input type="text"  placeholder="Enter your name"  name="name"  id="name" >
         </div>
         <p id="errormsg-name"></p> -->
         

         <div>
            <label for="email">Email</label>
            <input type=""  placeholder="Enter your email"   value=""  id="email">
         </div>
         <p id="errormsg-email"></p>

          <div>
            <label for="number">Number</label>
            <input type="number"  placeholder="Enter your number"   value="" id="number" >
         </div>
         <p id="errormsg-number"></p>

          <div>
            <label for="password">Password</label>
            <input type="password"  placeholder="Enter your Password"   value="" id="password" >
         </div>
         <p id="errormsg-password"></p>
<!--         
         <div>
             <label for="">Message</label>
             <textarea name="" id="message" rows="6"></textarea>
           </div>
           <p id="errormsg-mssg"></p>

           <button>Submit</button>
          </form>

          -->
    </section>
    </div>
    </div>
    </div>
    </div>
<!-- 


<div class="whatapp">
  <img src="{{ asset('./images/whatsapp.png') }}" alt="">
</div> -->




@endsection