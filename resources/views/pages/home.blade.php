@extends('layouts.default')
@section('meta')
    <title>The Awan Villa - Seminyak</title>
    <meta content="best villa in bali" name="description">
    <meta content="bali room booking, car rental bali, bali management property" name="keywords">
@endsection

@section('content')

   
<section id="about" class="introduction scrollto">

  <div class="row clearfix">

      <div class="tengah">
          <div class="section-heading">
              <h2 style="font-family:'MAIAN';font-weight: bold;">- Welcome to The Awan Villas Seminyak - </h2>
              <p class="section-subtitle">
Come and indulge in our little slice of heaven. Inspired by the essence of "Awan," meaning cloud, our villas embody serenity, tranquility, and comfort for every guest. Designed with spacious and open layouts, our villas are perfect for relaxation, sunbathing, and quality time with loved ones.
</p><p class="section-subtitle">Surrounded by lush green gardens and a beautifully landscaped outdoor pool, our villas offer a peaceful and calming retreat. Experience the ultimate getaway in Seminyak, where every moment is a chance to unwind and rejuvenate.
</p>
          </div>

      </div>
  </div>
</section>

<!--Villa-->
<section id="villas" class="scrollto clearfix">
  <div class="row clearfix">

      <div class="col-2">

          <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
              <h2 style="font-family:'MAIAN';">One Bedroom Villas with Private Pool</h2>
              <p >Experience the ultimate in luxury and relaxation in our stunning One Bedroom Villas with Private Pool.</p>
              <a href="/one-bedroom" class="button">More Details <i class="fa fa-play" aria-hidden="true"></i></a>
              <img src="{{asset('assets/images/gallery-images/gallery-image-1.jpg')}}" alt="Landing Page"/>
          </div>
          
      </div>

      <div class="col-2">

          <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
              <h2 style="font-family:'MAIAN';">Two Bedroom Villas with Private Pool</h2>
              <p >Experience the ultimate in luxury and relaxation in our stunning Two Bedroom Villas with Private Pool.</p>
              <a href="/two-bedroom" class="button">More Details <i class="fa fa-play" aria-hidden="true"></i></a>
              <img src="{{asset('assets/images/gallery-images/gallery-image-4.jpg')}}" alt="Landing Page"/>
          </div>
          
      </div>

  </div>
</section>
<!--End of Villa-->

<!--Content Section-->
<div id="services" class="scrollto clearfix">

  <div class="row no-padding-bottom clearfix">

      <div class="tengah">
          <div class="section-heading">
              <h2 style="font-family:'MAIAN';font-weight: bold;">- Provided Services -</h2>
          </div>

      </div>

      <!--Content of the Right Side-->
      <div class="col-2 wow fadeInLeft">
          <div class="section-heading">
              <h2 style="font-family:'MAIAN';">●	In-Villa Spa</h2>
              <p class="section-subtitle">Indulge in the ultimate relaxation experience with our In-Villa Spa services. Enjoy rejuvenating treatments in the comfort and privacy of your own villa.</p>
          </div>
          <!-- Just replace the Video ID "UYJ5IjBRlW8" with the ID of your video on YouTube (Found within the URL) -->
      </div>
      <!--End Content Right Side-->

      <div class="col-2 wow fadeInRight">
          <img src="{{asset('assets/images/spa.jpg')}}" alt="Dancer"/>
      </div>

      <!--Content of the Right Side-->
      <div class="col-3 wow fadeInLeft">
      <img src="{{asset('assets/images/floating.jpg')}}" alt="Dancer"/>
          <div class="section-heading">
              <h2 style="font-family:'MAIAN';">●	Floating Breakfast</h2>
              <p class="section-subtitle">Start your day in paradise with our signature Floating Breakfast experience. Indulge in a Delicious Breakfast Enjoy a mouth-watering breakfast, carefully prepared by our chefs, and served to you in the comfort of your own private pool.
              </p>
          </div>
          <!-- Just replace the Video ID "UYJ5IjBRlW8" with the ID of your video on YouTube (Found within the URL) -->
      </div>
      <!--End Content Right Side-->

      <!-- <div class="col-6 wow fadeInRight">
          <img src="{{asset('assets/images/dining.jpg')}}" alt="Dancer"/>
      </div> -->

      <div class="col-3 wow fadeInLeft">
      <img src="{{asset('assets/images/romantic.jpg')}}" alt="Dancer"/>
          <div class="section-heading">
              <h2 style="font-family:'MAIAN';">●	Romantic Dinner</h2>
              <p class="section-subtitle">Celebrate love and romance with a unforgettable dinner experience under the stars.</p>
          </div>
          <!-- Just replace the Video ID "UYJ5IjBRlW8" with the ID of your video on YouTube (Found within the URL) -->
      </div>

      <div class="col-3 wow fadeInLeft">
      <img src="{{asset('assets/images/honeymoon.jpg')}}" alt="Dancer"/>
          <div class="section-heading">
              <h2 style="font-family:'MAIAN';">●	Honeymoon Decoration</h2>
              <p class="section-subtitle">Make your dream honeymoon even more unforgettable with our romantic decoration packages.
Transform your villa into a love nest with our beautifully crafted decoration packages
</p>
          </div>
          <!-- Just replace the Video ID "UYJ5IjBRlW8" with the ID of your video on YouTube (Found within the URL) -->
      </div>


  </div>


</div>
<!--End of Content Section-->


  <!--Gallery-->
<aside id="gallery" class="row text-center scrollto clearfix" data-featherlight-gallery
      data-featherlight-filter="a">
      <div class="tengah">
          <div class="section-heading">
              <h2 style="font-family:'MAIAN';font-weight: bold;">- Foto Gallery -</h2>
          </div>

      </div>

      <a href="{{asset('assets/images/gallery-images/gallery-image-1.jpg')}}" data-featherlight="image" class="col-3 wow fadeIn"
        data-wow-delay="0.1s">
        <img src="{{asset('assets/images/gallery-images/gallery-image-1.jpg')}}" alt="Landing Page"/>
      </a>
      <a href="{{asset('assets/images/gallery-images/gallery-image-2.jpg')}}" data-featherlight="image" class="col-3 wow fadeIn"
        data-wow-delay="0.3s">
        <img src="{{asset('assets/images/gallery-images/gallery-image-2.jpg')}}" alt="Landing Page"/>
      </a>
      <a href="{{asset('assets/images/gallery-images/gallery-image-3.jpg')}}" data-featherlight="image" class="col-3 wow fadeIn"
        data-wow-delay="0.5s">
        <img src="{{asset('assets/images/gallery-images/gallery-image-3.jpg')}}" alt="Landing Page"/>
      </a>
      <a href="{{asset('assets/images/gallery-images/gallery-image-4.jpg')}}" data-featherlight="image" class="col-3 wow fadeIn"
        data-wow-delay="1.1s">
        <img src="{{asset('assets/images/gallery-images/gallery-image-4.jpg')}}" alt="Landing Page"/>
      </a>
      <a href="{{asset('assets/images/gallery-images/gallery-image-5.jpg')}}" data-featherlight="image" class="col-3 wow fadeIn"
        data-wow-delay="0.9s">
        <img src="{{asset('assets/images/gallery-images/gallery-image-5.jpg')}}" alt="Landing Page"/>
      </a>
      <a href="{{asset('assets/images/gallery-images/gallery-image-6.jpg')}}" data-featherlight="image" class="col-3 wow fadeIn"
        data-wow-delay="0.7s">
        <img src="{{asset('assets/images/gallery-images/gallery-image-6.jpg')}}" alt="Landing Page"/>
      </a>
      <!-- <a href="{{asset('assets/images/gallery-images/gallery-image-7.jpg')}}" data-featherlight="image" class="col-3 wow fadeIn"
        data-wow-delay="0.7s">
        <img src="{{asset('assets/images/gallery-images/gallery-image-7.jpg')}}" alt="Landing Page"/>
      </a>
      <a href="{{asset('assets/images/gallery-images/gallery-image-8.jpg')}}" data-featherlight="image" class="col-3 wow fadeIn"
        data-wow-delay="0.7s">
        <img src="{{asset('assets/images/gallery-images/gallery-image-8.jpg')}}" alt="Landing Page"/>
      </a>
      <a href="{{asset('assets/images/gallery-images/gallery-image-9.jpg')}}" data-featherlight="image" class="col-3 wow fadeIn"
        data-wow-delay="0.7s">
        <img src="{{asset('assets/images/gallery-images/gallery-image-9.jpg')}}" alt="Landing Page"/>
      </a> -->

</aside>
  <!--End of Gallery-->

<!--Content Section-->
<!-- 
<div id="services" class="scrollto clearfix">

  <div class="row no-padding-bottom clearfix">

      <div class="tengah">
          <div class="section-heading">
              <h2 style="font-family:'MAIAN';font-weight: bold;">- SPA -</h2>
          </div>

      </div>

      <div class="col-2 wow fadeInRight">
          <img src="{{asset('assets/images/spa.jpg')}}" alt="Dancer"/>
      </div>

      <div class="col-2 wow fadeInLeft">
          <div class="section-heading">
              <h2 class="section-title">In Villa Spa</h2>
              <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam!</p>
          </div>
          <a href="#" data-videoid="UYJ5IjBRlW8" data-videosite="youtube" class="button video link-lightbox">
              WATCH VIDEO <i class="fa fa-play" aria-hidden="true"></i>
          </a>
      </div>
  </div>
</div> -->

<!--End of Content Section-->

<!--Clients-->
<!-- <section id="clients" class="scrollto clearfix">
  <div class="row clearfix">

      <div class="col-3">

          <div class="section-heading">
              <h2 class="section-title">Best Villa Facilities</h2>
              <p class="section-subtitle">Some of ouf villa Facilities</p>
          </div>

      </div>

      <div class="col-2-3">

          <a href="#" class="col-3">
              <img src="{{asset('assets/images/icon/pool.png')}}" wi alt="Company"/>
              <div class="client-overlay"><span>Private Pool Size: 7m x 3m x 1,5m</span></div>
          </a>
          <a href="#" class="col-3">
          <img src="{{asset('assets/images/icon/desk.png')}}" alt="Company"/>
              <div class="client-overlay"><span>24Hour Front Office</span></div>
          </a>
          <a href="#" class="col-3">
          <img src="{{asset('assets/images/icon/wifi.png')}}" alt="Pool"/>
              <div class="client-overlay"><span>High Spped Wifi</span></div>
          </a>
          <a href="#" class="col-3">
          <img src="{{asset('assets/images/icon/villa.png')}}" alt="Pool"/>
              <div class="client-overlay"><span>High Spped Wifi</span></div>
          </a>
          <a href="#" class="col-3">
          <img src="{{asset('assets/images/icon/plug.png')}}" alt="Pool"/>
              <div class="client-overlay"><span>High Spped Wifi</span></div>
          </a>
          <a href="#" class="col-3">
          <img src="{{asset('assets/images/icon/bed.png')}}" alt="Pool"/>
              <div class="client-overlay"><span>High Spped Wifi</span></div>
          </a>
          <a href="#" class="col-3">
          <img src="{{asset('assets/images/icon/door.png')}}" alt="Pool"/>
              <div class="client-overlay"><span>High Spped Wifi</span></div>
          </a>

      </div>

  </div>
</section> -->
  <!--End of Clients-->

  <!--Pricing Tables-->
<aside id="gallery" class="row text-center scrollto clearfix" data-featherlight-gallery
      data-featherlight-filter="a">
  <div class="tengah">
      <div class="section-heading">
          <h2 style="font-family:'MAIAN';font-weight: bold;">- We have the right package for you -</h2>
      </div>
  </div>
</aside>
<section id="pricing" class="secondary-color text-center scrollto clearfix ">
  
  <div class="row clearfix">

      <!-- <div class="section-heading">
          <h2 class="section-title">We have the right package for you</h2>
      </div> -->

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <!--Pricing Block-->
            <div class="pricing-block wow fadeInUp" data-wow-delay="0.4s">
                <div class="pricing-block-content">
                    <h3>Last Minute Deals</h3>
                    <div class="pricing">
                        <!-- <div class="price"><span>$</span>19</div> -->
                        <img src="{{asset('assets/images/gallery-images/gallery-image-9.jpg')}}" alt="Landing Page"/>
                    </div>
                    <ul>
                        <li>2 Night with one time setup bed</li>
                        <li>2 with breakfast</li>
                        <li>one time romantic candilac diner</li>
                        <li>one time lunch pool</li>
                        <li>1 year free updates</li>
                    </ul>
                    <a href="#" class="button">BOOK TODAY</a>
                </div>
            </div>
            <!--End Pricing Block-->
          </div>
          <div class="swiper-slide">
            <!--Pricing Block-->
            <div class="pricing-block wow fadeInUp" data-wow-delay="0.4s">
                <div class="pricing-block-content">
                    <h3>Hot Deals</h3>
                    <div class="pricing">
                        <!-- <div class="price"><span>$</span>19</div> -->
                        <img src="{{asset('assets/images/gallery-images/gallery-image-4.jpg')}}" alt="Landing Page"/>
                    </div>
                    <ul>
                        <li>2 Night with one time setup bed</li>
                        <li>2 with breakfast</li>
                        <li>one time romantic candilac diner</li>
                        <li>one time lunch pool</li>
                        <li>1 year free updates</li>
                    </ul>
                    <a href="#" class="button">BOOK TODAY</a>
                </div>
            </div>
            <!--End Pricing Block-->
          </div>
          <div class="swiper-slide">
            <!--Pricing Block-->
            <div class="pricing-block wow fadeInUp" data-wow-delay="0.4s">
                <div class="pricing-block-content">
                    <h3>Early Bird</h3>
                    <div class="pricing">
                        <!-- <div class="price"><span>$</span>19</div> -->
                        <img src="{{asset('assets/images/gallery-images/gallery-image-8.jpg')}}" alt="Landing Page"/>
                    </div>
                    <ul>
                        <li>2 Night with one time setup bed</li>
                        <li>2 with breakfast</li>
                        <li>one time romantic candilac diner</li>
                        <li>one time lunch pool</li>
                        <li>1 year free updates</li>
                    </ul>
                    <a href="#" class="button">BOOK TODAY</a>
                </div>
            </div>
            <!--End Pricing Block--> 
          </div>
          <div class="swiper-slide">
            <!--Pricing Block-->
            <div class="pricing-block wow fadeInUp" data-wow-delay="0.4s">
                <div class="pricing-block-content">
                    <h3>2 Nights Honeymoon Package</h3>
                    <div class="pricing">
                        <!-- <div class="price"><span>$</span>19</div> -->
                        <img src="{{asset('assets/images/gallery-images/gallery-image-8.jpg')}}" alt="Landing Page"/>
                    </div>
                    <ul>
                        <li>2 Night with one time setup bed</li>
                        <li>2 with breakfast</li>
                        <li>one time romantic candilac diner</li>
                        <li>one time lunch pool</li>
                        <li>1 year free updates</li>
                    </ul>
                    <a href="#" class="button">BOOK TODAY</a>
                </div>
            </div>
            <!--End Pricing Block--> 
          </div>
          <div class="swiper-slide">
            <!--Pricing Block-->
            <div class="pricing-block wow fadeInUp" data-wow-delay="0.4s">
                <div class="pricing-block-content">
                    <h3>3 Nights Honeymoon Package</h3>
                    <div class="pricing">
                        <!-- <div class="price"><span>$</span>19</div> -->
                        <img src="{{asset('assets/images/gallery-images/gallery-image-8.jpg')}}" alt="Landing Page"/>
                    </div>
                    <ul>
                        <li>2 Night with one time setup bed</li>
                        <li>2 with breakfast</li>
                        <li>one time romantic candilac diner</li>
                        <li>one time lunch pool</li>
                        <li>1 year free updates</li>
                    </ul>
                    <a href="#" class="button">BOOK TODAY</a>
                </div>
            </div>
            <!--End Pricing Block--> 
          </div>
          <div class="swiper-slide">
            <!--Pricing Block-->
            <div class="pricing-block wow fadeInUp" data-wow-delay="0.4s">
                <div class="pricing-block-content">
                    <h3>Family Package</h3>
                    <div class="pricing">
                        <!-- <div class="price"><span>$</span>19</div> -->
                        <img src="{{asset('assets/images/gallery-images/gallery-image-8.jpg')}}" alt="Landing Page"/>
                    </div>
                    <ul>
                        <li>2 Night with one time setup bed</li>
                        <li>2 with breakfast</li>
                        <li>one time romantic candilac diner</li>
                        <li>one time lunch pool</li>
                        <li>1 year free updates</li>
                    </ul>
                    <a href="#" class="button">BOOK TODAY</a>
                </div>
            </div>
            <!--End Pricing Block--> 
          </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <!-- <div class="swiper-button-next"></div> -->
        <!-- <div class="swiper-button-prev"></div> -->
      </div>
      <script>
        var swiper = new Swiper('.swiper-container', {
          slidesPerView: 1,
          spaceBetween: 30,
          centeredSlides: true,
          autoplay: {
            delay: 3500,
            disableOnInteraction: false,
          },
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
          breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 50,
          },
          1920: {
            slidesPerView: 3,
            spaceBetween: 50,
          },
        },
        });
      </script>

  </div>
</section>

<!--maps-->
<section id="maps" class="scrollto clearfix">
  <div class="row-maps clearfix">

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.1950637291725!2d115.15047537590551!3d-8.672991588291344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2476d6fd93ac5%3A0x336afb89db0054f2!2sThe%20Awan%20Villas!5e0!3m2!1sid!2sid!4v1737874401447!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  </div>
</section>
<!--End of maps-->
   

@stop