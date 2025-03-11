@extends('layouts.default')
@section('meta')
    <title>The Awan Villa - Seminyak</title>
    <meta content="best villa in bali" name="description">
    <meta content="bali room booking, car rental bali, bali management property" name="keywords">
@endsection

@section('content')

 

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
              <p class="section-subtitle">Make your dream honeymoon even more unforgettable with our romantic decoration packages. Transform your villa into a love nest with our beautifully crafted decoration packages
              </p>
          </div>
          <!-- Just replace the Video ID "UYJ5IjBRlW8" with the ID of your video on YouTube (Found within the URL) -->
      </div>


  </div>


</div>
<!--End of Content Section-->


   

@stop