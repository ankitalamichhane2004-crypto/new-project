@extends('layouts.frontend.master')
@section('content')

   
   <div class="video-container">
  
  <video class="video" autoplay loop muted playsinline>
     <source src="{{ asset('images/hen.mp4') }}" alt="video">
  </video>

  <div class="overlayer"></div>

  <h3 class="video-text">
    Healthy Animals, Better Farming, Brighter Future
  </h3>

</div>




         <div class="container">
          <div class="row">

            <div class="col-lg-4 col-md-6 col-sm-12  ">
              <div class="wholecard">
              <div class="card shadow">
                <img src="{{ asset('./images/card2.goat.jpg') }}" alt="" class="cardimg">
            <i class="ri-heart-line heart"></i>
            <h4 style="color: rgb(10, 146, 10); padding: 10px;">Trusted Goat Healthcare</h4>
            <p>We are dedicated to supporting goat farmers with comprehensive healthcare solutions that ensure the health and productivity of their herds. Our range of high-quality vaccines, medicines, and nutritional supplements protects goats from common and serious diseases while promoting strong growth and development. By improving immunity, enhancing milk yield, and increasing meat production, our trusted products help farmers achieve healthier animals and higher profitability. With our expertise and commitment, goat farmers can confidently raise healthier herds and grow their farming business sustainably.</p>
        </div>
        </div>
        </div>


          <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="wholecard">
            <div class="card shadow">
              <img src="{{ asset('./images/card3.fish.jpg') }}" alt="" class="cardimg">
            <i class="ri-heart-line heart"></i>
            <h4 style="color: rgb(10, 146, 10); padding: 10px;">Reliable Fish Health </h4>
            <p>We support fish farmers with high-quality healthcare solutions to ensure healthy and productive aquaculture. Our range of medicines, vaccines, and nutritional supplements helps prevent diseases, improve growth rates, and enhance overall fish health. By promoting better immunity and optimal development, our trusted products contribute to higher yield, improved quality, and increased profitability for fish farmers. With our expertise and reliable solutions, farmers can confidently maintain healthy fish and achieve sustainable aquaculture success.</p>
            </div>
        </div>
        </div>
       
        
         <div class="col-lg-4 col-md-6 col-sm-12 ">
          <div class="wholecard">
        <div class="card shadow">
          <img src="{{ asset('./images/plant image - Copy.jpg') }}" alt="" class="cardimg">
            <i class="ri-heart-line heart"></i>
            <h4 style="color: rgb(10, 146, 10); padding: 10;">Seeds & Plant Growth</h4>
            <p>Choosing well-tested and certified seeds is one of the most important decisions a farmer can make for successful and safe farming. High-quality seeds are specially selected and tested to ensure better germination, strong plant growth, and resistance against common pests and diseases. When you use reliable seeds, your crops grow more uniformly, mature on time, and produce higher yields with better quality. Well-tested seeds also adapt better to different weather conditions and soil types, reducing the risk of crop failure. In addition, certified seeds help reduce dependence on excessive fertilizers and chemicals because healthy plants naturally fight infections and stress. By investing in trusted seeds from a reliable agrovet source, farmers can protect their fields, save money in the long run, and ensure a profitable harvest every season.</p>
        </div>
        </div>
        </div>
        </div>
        </div>
       




        <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 col-sm-12  ">
              <div class="wholecard">
              <div class="card shadow">
                <img src="{{ asset('./images/crop protection.png') }}" alt="" class="cardimg">
            <i class="ri-heart-line heart"></i>
            <h4 style="color: rgb(10, 146, 10); padding: 10px;">Protect Every Crop</h4>
            <p>Protecting crops is essential for achieving a healthy harvest and maximizing farm income. Timely fertilization provides crops with the nutrients they need at different growth stages, helping plants grow stronger and produce better yields. At the same time, proper pest and disease management prevents insects, weeds, and infections from damaging crops. Regular field inspection allows early detection of problems, making treatment more effective and less costly. Using the right pesticides and fertilizers at the correct time and in the right dosage minimizes crop loss and improves quality. Effective crop protection also reduces the risk of complete failure due to unexpected pest attacks or nutrient deficiency. By following a planned crop protection strategy and using quality agrovet products, farmers can ensure better production, protect their investment, and enjoy higher profits each season.
            </p>
            </div>
            </div>
        </div>


          <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="wholecard">
            <div class="card shadow">
              <img src="{{ asset('./images/nutrition.jpg') }}" alt="" class="cardimg">
            <i class="ri-heart-line heart"></i>
            <h4 style="color: rgb(10, 146, 10); padding: 10px;">Feed Decides Growth </h4>
            <p>Feed plays a major role in the overall growth, health, and productivity of farm animals and poultry. A complete and balanced diet provides essential nutrients such as proteins, vitamins, minerals, and energy that support proper body development and strong immunity. When animals receive the right feed, they grow faster, produce better quality milk, meat, and eggs, and become more resistant to diseases. Good nutrition also improves digestion, bone strength, fertility, and overall performance. On the other hand, poor feeding can result in slow growth, weak immunity, and higher chances of illness, causing financial loss to farmers. By choosing quality feed and nutritional supplements from a trusted agrovet, farmers can ensure better animal health, improved farm output, and long-term profitability.</p>
            </div>
        </div>
        </div>
        


         <div class="col-lg-4 col-md-6 col-sm-12 ">
          <div class="wholecard">
        <div class="card shadow">
          <img src="{{ asset('./images/business.webp') }}" alt="" class="cardimg">
            <i class="ri-heart-line heart"></i>
            <h4 style="color: rgb(10, 146, 10); padding: 10;">Farm as business</h4>
            <p>Farming should be managed like a business to achieve long-term success and higher income. Proper planning helps farmers decide what to grow or raise, when to invest, and how to manage resources efficiently. Keeping accurate records of expenses, production, sales, and health treatments allows farmers to understand profit and loss clearly. When records are maintained properly, it becomes easier to identify problems, improve weak areas, and make better decisions for the next season. Farm business planning also helps in managing risks, accessing loans or support programs, and setting financial goals. By treating farming as a business, farmers can control costs, increase productivity, and achieve stable and sustainable income growth.</p>
        </div>
        </div>
        </div>
        </div>


      </div>
        
        

<div class="whatapp">
  <img src="{{ asset('./images/whatsapp.png') }}" alt="">
</div>



@endsection