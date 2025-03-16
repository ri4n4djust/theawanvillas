@extends('layouts.default')

@section('meta')
    <title>The Awan Villa - Two Bed Room</title>
    <meta content="best villa in bali" name="description">
    <meta content="bali room booking, car rental bali, bali management property" name="keywords">
@endsection

@section('content')

   
<!--Villa-->
<section id="villas" class="scrollto clearfix">
  <div class="row clearfix">

      <div class="col-1">

            <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
                <h2 style="font-family:'MAIAN';">Two Bedroom Villas with Private Pool</h2>
                <p class="section-subtitle" >Experience the ultimate in luxury and relaxation in our stunning One Bedroom Villas with Private Pool.</p>
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
                    <span>Villa Size 180 sqm</span>
                </div>
                <div class="col-3">
                <img src="{{asset('assets/images/icon/plug.png')}}" alt="Pool"/><br>
                    <span>Electrical Voltase 220V</span>
                </div>
                <div class="col-3">
                <img src="{{asset('assets/images/icon/bed.png')}}" alt="Pool"/><br>
                    <span>Bedroom 5m x 5m</span>
                </div>
                <div class="col-3">
                <img src="{{asset('assets/images/icon/door.png')}}" alt="Pool"/><br>
                    <span>Living Room 3,2m x 7,30m</span>
                </div>
            </div>
            <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
                <h2 >Our luxurious villas boast:</h2>
                    - Private Swimming Pool: Unwind in your own private oasis, surrounded by lush tropical gardens.<br>
                    - Sundeck: Soak up the sun and take in the stunning surroundings.<br>
                    - Shower garden which is surrounded by tropical gardens with the villa’s size 300sm2.<br>
            </div>
            <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
                <h2 >Villa Amenities</h2>
                <h3 >Each villa is equipped with:</h3>
                    - Full-Size Refrigerators: Stock up on your favorite snacks and drinks.<br>
                    - Flat Screen Televisions (TV Cables): Stay entertained, with a range of channels to choose from.<br>
                    - Electric Kettle<br>
                    - Kitchenette: Prepare snacks and light meals with ease.<br>
            </div>
            <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
                <h2 >Guest Rooms</h2>
                <h3 >Our luxurious guest rooms feature:</h3>
                    - King Size Bed and Twin Beds: Enjoy a restful night's sleep in our comfortable beds.<br>
                    - Mosquito Net: Sleep peacefully, protected from mosquitoes.<br>
                    - Air-Conditioned: Stay cool and comfortable, with air conditioning throughout the villa.<br>
                    - Wardrobes: Ample storage space for your belongings.<br>
                    - Flat Screen Televisions (TV Cables): Stay entertained, with a range of channels to choose from.<br>
                    - IDD Telephones: Stay connected, with international direct dialing.<br>
                    - Internet Access (WiFi): Stay online, with fast and reliable internet access.<br>
                    - Safety Deposit Boxes: Secure storage for your valuables.<br>
            <div>
            <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
                <h2 >Foto Gallery</h2>
                @foreach($galeries as $item)
                <a href="{{ asset('storage/images/' . $item->nama_foto) }}" data-featherlight="image" class="col-5 wow fadeIn"
                    data-wow-delay="0.2s">
                    <img src="{{ asset('storage/images/' . $item->nama_foto) }}" alt="{{ $item->nama_foto }}"/>
                </a>
                @endforeach
            <div>
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