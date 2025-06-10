@extends('layouts.default')
@section('meta')
    <title>The Awan Villa - Seminyak</title>
    <meta content="best villa in bali" name="description">
    <meta content="bali room booking, car rental bali, bali management property" name="keywords">
@endsection

@section('content')

<section id="villas" class="scrollto clearfix">
  <div class="row clearfix">

    <div class="col-3">

        <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
            <h2 style="font-family:'MAIAN';">SPA</h2>
            <!-- <p >Indulge in the ultimate relaxation experience with our In-Villa Spa services. Enjoy rejuvenating treatments in the comfort and privacy of your own villa.</p> -->
            <a onclick="filterOther('spa')" class="button">More Details <i class="fa fa-play" aria-hidden="true"></i></a>
        
        </div>
        
    </div>

    <div class="col-3">

        <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
            <h2 style="font-family:'MAIAN';">Simple Menu</h2>
            <!-- <p >Savor exquisite culinary delights with our Food and Drink services. Enjoy a variety of dishes prepared by our talented chefs, served directly in your villa.</p> -->
            <a onclick="filterOther('simple')" class="button">More Details <i class="fa fa-play" aria-hidden="true"></i></a>
            
        </div>
        
    </div>

    <div class="col-3">

        <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
            <h2 style="font-family:'MAIAN';">Tour</h2>
            <!-- <p >Explore the beauty of Bali with our Tour services. We offer a range of curated tours and travel services to enhance your experience.</p> -->
            <a onclick="filterOther('tur')" class="button">More Details <i class="fa fa-play" aria-hidden="true"></i></a>
            
        </div>
        
    </div>

  </div>
</section>

<div id="other-services-gallery" class="row text-center scrollto clearfix">
    <!-- bagia spa -->
    <div class="col-4 other-service-item spa" style="display:block;">
        <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
            <h3>SPA1</h3>
            <img src="{{ asset('storage/images/spa.jpg') }}" alt="Spa Service" style="width:100%;max-width:300px;">
            <p>Relax and rejuvenate with our in-villa spa treatments.</p>
        </div>
    </div>
    <div class="col-4 other-service-item spa" style="display:block;">
        <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
            <h3>SPA2</h3>
            <img src="{{ asset('storage/images/spa.jpg') }}" alt="Spa Service" style="width:100%;max-width:300px;">
            <p>Relax and rejuvenate with our in-villa spa treatments.</p>
        </div>
    </div>
    <div class="col-4 other-service-item spa" style="display:block;">
        <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
            <h3>SPA 3</h3>
            <img src="{{ asset('storage/images/spa.jpg') }}" alt="Spa Service" style="width:100%;max-width:300px;">
            <p>Relax and rejuvenate with our in-villa spa treatments.</p>
        </div>
    </div>
<!-- end spa -->
    <div class="col-4 other-service-item simple" style="display:block;">
        <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
            <h3>Simple Menu</h3>
            <img src="{{ asset('storage/images/simple-menu.jpg') }}" alt="Simple Menu" style="width:100%;max-width:300px;">
            <p>Enjoy delicious food and drinks prepared by our chefs.</p>
        </div>
    </div>
    <div class="col-4 other-service-item tur" style="display:block;">
        <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
            <h3>Tour</h3>
            <img src="{{ asset('storage/images/tour.jpg') }}" alt="Tour Service" style="width:100%;max-width:300px;">
            <p>Discover Bali with our curated tour experiences.</p>
        </div>
    </div>
</div>

<script>
function filterOther(category) {
    var items = document.querySelectorAll('.other-service-item');
    items.forEach(function(item) {
        if (category === 'spa' && item.classList.contains('spa')) {
            item.style.display = 'block';
        } else if (category === 'simple' && item.classList.contains('simple')) {
            item.style.display = 'block';
        } else if (category === 'tur' && item.classList.contains('tur')) {
            item.style.display = 'block';
        } else if (!category) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}
</script>

<aside id="gallery" class="row text-center scrollto clearfix" data-featherlight-filter="spa">
    <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
        <a href="{{ asset('storage/images/' ) }}" data-featherlight="image" class="col-3 wow fadeIn spa"
            data-wow-delay="0.2s">
            <img src="{{ asset('storage/images/' ) }}" alt="spa1"/>
        </a>
    </div>
    <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
        <a href="{{ asset('storage/images/' ) }}" data-featherlight="image" class="col-3 wow fadeIn menu"
            data-wow-delay="0.2s">
            <img src="{{ asset('storage/images/' ) }}" alt="spa1"/>
        </a>
    </div>
</aside>

<!-- <script>
  function filterOther(category) {
    console.log('Filtering by category:', category);
    var items = document.querySelectorAll('#gallery spa');
    items.forEach(function(item) {
      if (category === 'spa' || item.classList.contains(category)) {
        item.style.display = 'block';
      } else {
        item.style.display = 'none';
      }
    });
  }
</script> -->
@stop