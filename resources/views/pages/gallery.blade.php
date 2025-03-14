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
              <h2 style="font-family:'MAIAN';font-weight: bold;">- Foto Gallery -</h2>
          </div>

      </div>
      <div class="gallery-categories">
        <button class="button" onclick="filterGallery('all')">All</button>
        <button class="button" onclick="filterGallery('category1')">Category 1</button>
        <button class="button" onclick="filterGallery('category2')">Category 2</button>
        <button class="button" onclick="filterGallery('category3')">Category 3</button>
      </div>

      <script>
        function filterGallery(category) {
          var items = document.querySelectorAll('#gallery a');
          items.forEach(function(item) {
            if (category === 'all' || item.classList.contains(category)) {
              item.style.display = 'block';
            } else {
              item.style.display = 'none';
            }
          });
        }
      </script>
      <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
        <a href="{{asset('assets/images/gallery-images/gallery-image-1.jpg')}}" data-featherlight="image" class="col-3 wow fadeIn category1"
          data-wow-delay="0.2s">
          <img src="{{asset('assets/images/gallery-images/gallery-image-1.jpg')}}" alt="Gallery Image 10"/>
        </a>
        <a href="{{asset('assets/images/gallery-images/gallery-image-2.jpg')}}" data-featherlight="image" class="col-3 wow fadeIn category2"
          data-wow-delay="0.4s">
          <img src="{{asset('assets/images/gallery-images/gallery-image-2.jpg')}}" alt="Gallery Image 11"/>
        </a>
        <a href="{{asset('assets/images/gallery-images/gallery-image-3.jpg')}}" data-featherlight="image" class="col-3 wow fadeIn category3"
          data-wow-delay="0.6s">
          <img src="{{asset('assets/images/gallery-images/gallery-image-3.jpg')}}" alt="Gallery Image 12"/>
        </a>
        <a href="{{asset('assets/images/gallery-images/gallery-image-4.jpg')}}" data-featherlight="image" class="col-3 wow fadeIn category1"
          data-wow-delay="0.8s">
          <img src="{{asset('assets/images/gallery-images/gallery-image-4.jpg')}}" alt="Gallery Image 13"/>
        </a>
        <a href="{{asset('assets/images/gallery-images/gallery-image-5.jpg')}}" data-featherlight="image" class="col-3 wow fadeIn category2"
          data-wow-delay="1s">
          <img src="{{asset('assets/images/gallery-images/gallery-image-5.jpg')}}" alt="Gallery Image 14"/>
        </a>
        <a href="{{asset('assets/images/gallery-images/gallery-image-6.jpg')}}" data-featherlight="image" class="col-3 wow fadeIn category3"
          data-wow-delay="1.2s">
          <img src="{{asset('assets/images/gallery-images/gallery-image-6.jpg')}}" alt="Gallery Image 15"/>
        </a>
        <a href="{{asset('assets/images/gallery-images/gallery-image-7.jpg')}}" data-featherlight="image" class="col-3 wow fadeIn category1"
          data-wow-delay="1.4s">
          <img src="{{asset('assets/images/gallery-images/gallery-image-7.jpg')}}" alt="Gallery Image 16"/>
        </a>
        <a href="{{asset('assets/images/gallery-images/gallery-image-8.jpg')}}" data-featherlight="image" class="col-3 wow fadeIn category2"
          data-wow-delay="1.6s">
          <img src="{{asset('assets/images/gallery-images/gallery-image-8.jpg')}}" alt="Gallery Image 17"/>
        </a>
        <a href="{{asset('assets/images/gallery-images/gallery-image-9.jpg')}}" data-featherlight="image" class="col-3 wow fadeIn category3"
          data-wow-delay="1.8s">
          <img src="{{asset('assets/images/gallery-images/gallery-image-9.jpg')}}" alt="Gallery Image 18"/>
        </a>
      </div>
      

</aside>
  <!--End of Gallery-->


 
   

@stop