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
              <h2 style="font-family:'MAIAN';font-weight: bold;">- Welcome To - </h2>
              <h2 style="font-family:'MAIAN';font-weight: bold;font-size: 60px;">the Awan Villas </h2>
              <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam!</p>
          </div>

      </div>
  </div>
</section>

<!--Villa-->
<section id="villas" class="scrollto clearfix">
  <div class="row clearfix">

      <div class="col-2">

          <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
              <h2 style="font-family:'MAIAN';">Single Bed Villa</h2>
              <p >Villas and Spa features 19 beautifully appointed 1 Bedroom Exclusive Pool Villa, each including complimentary bottled water, 
                balcony/terrace, air conditioning, hair dryer, complimentary Wi-Fi, separate shower and tub.
                The Hotel’srecreational facilities, which include massage, spa, garden, indoor pool are designed for escape and relaxation.</p>
              <a href="#" class="button">More Details</a>
              <img src="{{asset('assets/images/gallery-images/gallery-image-1.jpg')}}" alt="Landing Page"/>
          </div>
          
      </div>

      <div class="col-2">

          <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
              <h2 style="font-family:'MAIAN';">Double Bed</h2>
              <p >Villas and Spa features 19 beautifully appointed 1 Bedroom Exclusive Pool Villa, each including complimentary bottled water, 
                balcony/terrace, air conditioning, hair dryer, complimentary Wi-Fi, separate shower and tub.
                The Hotel’srecreational facilities, which include massage, spa, garden, indoor pool are designed for escape and relaxation.</p>
              <a href="#" class="button">More Details</a>
              <img src="{{asset('assets/images/gallery-images/gallery-image-4.jpg')}}" alt="Landing Page"/>
          </div>
          
      </div>

  </div>
</section>
<!--End of Villa-->

<!--Introduction-->
<section id="about" class="introduction scrollto">

  <div class="row clearfix">

      <div class="col-3">
          <div class="section-heading">
              <h2 class="section-title">Some Activity In And Outside Our Villa</h2>
              <p class="section-subtitle">some of activity can be do in villa or visit some near place</p>
          </div>

      </div>

      <div class="col-2-3">

          <!--Icon Block-->
          <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.1s">
              <!--Icon-->
              <div class="col-3">
                  <!-- <i class="fa fa-html5 fa-2x"></i> -->
                  <img src="{{asset('assets/images/icon/spa.png')}}" alt="spa"/>
              </div>
              <!--Icon Block Description-->
              <div class="icon-block-description">
                  <h4>In Villa SPA massagge </h4>
                  <p>Has ne tritani atomorum conclusionemque, in dolorum volumus cotidieque eum. At vis choro
                      neglegentur iudico</p>
              </div>
          </div>
          <!--End of Icon Block-->

          <!--Icon Block-->
          <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.3s">
              <!--Icon-->
              <div class="col-3">
                  <!-- <i class="fa fa-html5 fa-2x"></i> -->
                  <img src="{{asset('assets/images/icon/breakfast.png')}}" alt="spa"/>
              </div>
              <!--Icon Block Description-->
              <div class="icon-block-description">
                  <h4>Breakfast</h4>
                  <p>Cu vero ipsum vim, doctus facilisi sea in. Eam ex falli honestatis repudiandae, sit
                      detracto mediocrem disputationi</p>
              </div>
          </div>
          <!--End of Icon Block-->

          <!--Icon Block-->
          <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.5s">
              <!--Icon-->
              <div class="col-3">
                  <!-- <i class="fa fa-html5 fa-2x"></i> -->
                  <img src="{{asset('assets/images/icon/tour.png')}}" alt="spa"/>
              </div>
              <!--Icon Block Description-->
              <div class="icon-block-description">
                  <h4>Tour</h4>
                  <p>Id porro tritani recusabo usu, eum intellegam consequuntur et. Fugit debet ea sit, an pro
                      nemore vivendum</p>
              </div>
          </div>
          <!--End of Icon Block-->

          <!--Icon Block-->
          <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.5s">
              <!--Icon-->
              <div class="col-3">
                  <!-- <i class="fa fa-html5 fa-2x"></i> -->
                  <img src="{{asset('assets/images/icon/place.png')}}" alt="spa"/>
              </div>
              <!--Icon Block Description-->
              <div class="icon-block-description">
                  <h4>Near Interested Place</h4>
                  <p>Id porro tritani recusabo usu, eum intellegam consequuntur et. Fugit debet ea sit, an pro
                      nemore vivendum</p>
              </div>
          </div>
          <!--End of Icon Block-->

      </div>

  </div>


</section>
  <!--End of Introduction-->


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
      <a href="{{asset('assets/images/gallery-images/gallery-image-7.jpg')}}" data-featherlight="image" class="col-3 wow fadeIn"
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
      </a>

</aside>
  <!--End of Gallery-->


  <!--Content Section-->
  <!-- <div id="services" class="scrollto clearfix"> -->

  <!-- <div class="row no-padding-bottom clearfix"> -->


      <!--Content Left Side-->
      <!-- <div class="col-3"> -->
          <!--User Testimonial-->
          <!-- <blockquote class="testimonial text-right bigtest">
              <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                  labore
                  et dolore magna aliqua</q>
              <footer>— John Doe, Happy Customer</footer>
          </blockquote> -->
          <!-- End of Testimonial-->

      <!-- </div> -->
      <!--End Content Left Side-->

      <!--Content of the Right Side-->
      <!-- <div class="col-3"> -->
          <!-- <div class="section-heading">
              <h3>BELIEVING</h3>
              <h2 class="section-title">Focusing On What Matters Most</h2>
              <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam!</p>
          </div> -->
          <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
              totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
              dicta sunt explicabo.
          </p> -->
          <!-- <p>
              Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
              consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
              Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet!
          </p> -->
          <!-- Just replace the Video ID "UYJ5IjBRlW8" with the ID of your video on YouTube (Found within the URL) -->
          <!-- <a href="#" data-videoid="UYJ5IjBRlW8" data-videosite="youtube" class="button video link-lightbox">
              WATCH VIDEO <i class="fa fa-play" aria-hidden="true"></i>
          </a> -->
      <!-- </div> -->
      <!--End Content Right Side-->

      <!-- <div class="col-3">
          <img src="images/dancer.jpg" alt="Dancer"/>
      </div> -->

  <!-- </div> -->


  <!-- </div> -->
  <!--End of Content Section-->


<!--Clients-->
<section id="clients" class="scrollto clearfix">
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
</section>
  <!--End of Clients-->

  <!--Pricing Tables-->
<section id="pricing" class="secondary-color text-center scrollto clearfix ">
  <div class="row clearfix">

      <div class="section-heading">
          <h3>YOUR CHOICE</h3>
          <h2 class="section-title">We have the right package for you</h2>
      </div>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <!--Pricing Block-->
            <div class="pricing-block wow fadeInUp" data-wow-delay="0.4s">
                <div class="pricing-block-content">
                    <h3>Honeymoon Package</h3>
                    <p class="pricing-sub">Romantic honeymoon</p>
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
                    <h3>Family Package</h3>
                    <p class="pricing-sub">Romantic honeymoon</p>
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
                    <h3>Couple Package</h3>
                    <p class="pricing-sub">Romantic honeymoon</p>
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
                    <h3>Couple Package</h3>
                    <p class="pricing-sub">Romantic honeymoon</p>
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
                    <h3>Couple Package</h3>
                    <p class="pricing-sub">Romantic honeymoon</p>
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