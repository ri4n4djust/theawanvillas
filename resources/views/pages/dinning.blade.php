@extends('layouts.default')
@section('meta')
    <title>The Awan Villa - One Bed Room</title>
    <meta content="best villa in bali" name="description">
    <meta content="bali room booking, car rental bali, bali management property" name="keywords">
@endsection

@section('content')

   
<!--Villa-->
<section id="villas" class="scrollto clearfix">
  <div class="row clearfix">

      <div class="col-1">

          <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
                <h2 style="font-family:'MAIAN';">One Bed Room</h2>
                <p >Villas and Spa features 19 beautifully appointed 1 Bedroom Exclusive Pool Villa, each including complimentary bottled water, 
                balcony/terrace, air conditioning, hair dryer, complimentary Wi-Fi, separate shower and tub.
                The Hotel’srecreational facilities, which include massage, spa, garden, indoor pool are designed for escape and relaxation.</p>
                <div class="col-3">
                    <img src="{{asset('assets/images/icon/pool.png')}}" alt="Company"/><br>
                    <span>Private Pool Size: 7m x 3m x 1,5m</span>
                </div>
                <div class="col-3">
                <img src="{{asset('assets/images/icon/wifi.png')}}" alt="Pool"/><br>
                    <span>High Spped Wifi</span>
                </div>
                <div class="col-3">
                <img src="{{asset('assets/images/icon/villa.png')}}" alt="Pool"/><br>
                    <span>High Spped Wifi</span>
                </div>
                <div class="col-3">
                <img src="{{asset('assets/images/icon/plug.png')}}" alt="Pool"/><br>
                    <span>High Spped Wifi</span>
                </div>
                <div class="col-3">
                <img src="{{asset('assets/images/icon/bed.png')}}" alt="Pool"/><br>
                    <span>High Spped Wifi</span>
                </div>
                <div class="col-3">
                <img src="{{asset('assets/images/icon/door.png')}}" alt="Pool"/><br>
                    <span>High Spped Wifi</span>
                </div>
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
            <h2 style="font-family:'MAIAN';font-weight: bold;"></h2>
        </div>

    </div>

    <!--Content of the Right Side-->
    <div class="col-2 wow fadeInLeft">
        <div class="section-heading">
            <h2 class="section-title">In Villa Romantic Candle Light Dinner</h2>
            <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam!</p>
            
        </div>
    </div>
    <!--End Content Right Side-->

    <div class="col-2 wow fadeInRight">
        <div class="row clearfix">

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

        </div>
    </div>

</div>


</div>
<!--End of Content Section-->




<!--maps-->
<section id="maps" class="scrollto clearfix">
  <div class="row-maps clearfix">

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.1950637291725!2d115.15047537590551!3d-8.672991588291344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2476d6fd93ac5%3A0x336afb89db0054f2!2sThe%20Awan%20Villas!5e0!3m2!1sid!2sid!4v1737874401447!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  </div>
</section>
<!--End of maps-->
   

@stop