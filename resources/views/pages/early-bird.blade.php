@extends('layouts.default')
@section('meta')
    <title>The Awan Villa - Seminyak</title>
    <meta content="best villa in bali" name="description">
    <meta content="bali room booking, car rental bali, bali management property" name="keywords">
@endsection

@section('content')

 

  <!--Gallery-->
<aside id="gallery" class="row text-center scrollto clearfix" data-featherlight-gallery
      data-featherlight-filter="a">
      <div class="tengah">
          <div class="section-heading">
              <h2 style="font-family:'MAIAN';font-weight: bold;">- Early Bird -</h2>
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


 
   

@stop