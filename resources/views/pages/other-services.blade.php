@extends('layouts.default')
@section('meta')
    <title>The Awan Villa - Seminyak</title>
    <meta content="best villa in bali" name="description">
    <meta content="bali room booking, car rental bali, bali management property" name="keywords">
@endsection

@section('content')
    <section id="villas" class="scrollto clearfix">
    <div class="row clearfix">

    <a onclick="filterOther('spa')" class="button">Spa </a>
    <a onclick="filterOther('menu')" class="button">Food & Beverage </a>
    <a onclick="filterOther('tour')" class="button">Tour </a>

        <!-- <div class="col-3">

            <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
                <img src="{{ asset('storage/images/4_spa2.jpg') }}" alt="Spa Service" style="width:100%;max-width:300px;max-height:100px;">
                <h2 style="font-family:'MAIAN';">SPA</h2>
                <a onclick="filterOther('spa')" class="button">More Details </a>
            
            </div>
            
        </div>

        <div class="col-3">

            <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
                <img src="{{ asset('storage/images/6_250316-bjh-230316_BJH_-(491).jpg') }}" alt="Spa Service" style="width:100%;max-width:300px;max-height:100px;">
                <h2 style="font-family:'MAIAN';">Food Baverage</h2>
                <a onclick="filterOther('menu')" class="button">More Details <i class="fa fa-play" aria-hidden="true"></i></a>
                
            </div>
            
        </div>

        <div class="col-3">

            <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
                <img src="{{ asset('storage/images/4_spa2.jpg') }}" alt="Spa Service" style="width:100%;max-width:300px;max-height:100px;">
                <h2 style="font-family:'MAIAN';">Tour</h2>
                <a onclick="filterOther('tur')" class="button">More Details <i class="fa fa-play" aria-hidden="true"></i></a>
                
            </div>
            
        </div> -->

    </div>
    </section>

    <div id="other-services-gallery" class="row text-left scrollto clearfix">
        <!-- bagia spa -->
        <div class="col-2 other-service-item spa" style="display:block;">
            <div class="box-other wow " data-wow-delay="0.1s">
                <h3>TREATMENTS - Balinese Massage 60Mnt.<br> 190K</h3>
                <p>Last order 08.00 P.M<br>
                + 21% service charge & government tax</p>
            </div>
        </div>
        <div class="col-2 other-service-item spa" style="display:block;">
            <div class="box-other wow " data-wow-delay="0.1s">
                <h3>TREATMENTS - Massage & Scrub 90Mnt.<br> 290K</h3>
                <p>Last order 08.00 P.M<br>
                + 21% service charge & government tax</p>
            </div>
        </div>
        <div class="col-2 other-service-item spa" style="display:block;">
            <div class="box-other wow " data-wow-delay="0.1s">
                <h3>TREATMENTS - Aroma Therapy 60Mnt.<br> 185K</h3>
                <p>Last order 08.00 P.M<br>
                + 21% service charge & government tax</p>
            </div>
        </div>
        <div class="col-2 other-service-item spa" style="display:block;">
            <div class="box-other wow " data-wow-delay="0.1s">
                <h3>TREATMENTS - Foot Reflexology 60Mnt.<br> 180K</h3>
                <p>Last order 08.00 P.M<br>
                + 21% service charge & government tax</p>
            </div>
        </div>
        <div class="col-2 other-service-item spa" style="display:block;">
            <div class="box-other wow " data-wow-delay="0.1s">
                <h3>TREATMENTS - Traditional Boreh 60Mnt.<br> 190K</h3>
                <p>Last order 08.00 P.M<br>
                + 21% service charge & government tax</p>
            </div>
        </div>
        <div class="col-2 other-service-item spa" style="display:block;">
            <div class="box-other wow " data-wow-delay="0.1s">
                <h3>TREATMENTS - Back Massage 60Mnt.<br> 180K</h3>
                <p>Last order 08.00 P.M<br>
                + 21% service charge & government tax</p>
            </div>
        </div>
        <div class="col-2 other-service-item spa" style="display:block;">
            <div class="box-other wow " data-wow-delay="0.1s">
                <h3>TREATMENTS - Manicure.<br> 150K</h3>
                <p>Last order 08.00 P.M<br>
                + 21% service charge & government tax</p>
            </div>
        </div>
        <div class="col-2 other-service-item spa" style="display:block;">
            <div class="box-other wow " data-wow-delay="0.1s">
                <h3>TREATMENTS - Padicure.<br> 150K</h3>
                <p>Last order 08.00 P.M<br>
                + 21% service charge & government tax</p>
            </div>
        </div>
        <div class="col-2 other-service-item spa" style="display:block;">
            <div class="box-other wow " data-wow-delay="0.1s">
                <h3>TREATMENTS - Warm Stone Massage 90Mnt.<br> 300K</h3>
                <p>Last order 08.00 P.M<br>
                + 21% service charge & government tax</p>
            </div>
        </div>
        <div class="col-2 other-service-item spa" style="display:block;">
            <div class="box-other wow " data-wow-delay="0.1s">
                <h3>TREATMENTS - Aromatic Ear Candling.<br> 125K</h3>
                <p>Last order 08.00 P.M<br>
                + 21% service charge & government tax</p>
            </div>
        </div>
    <!-- end spa -->
        <div class="col-4 other-service-item menu" style="display:block;">
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
            } else if (category === 'menu' && item.classList.contains('menu')) {
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
@stop

