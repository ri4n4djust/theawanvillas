<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
<meta charset="UTF-8">

<!--Page Title-->
<title>The Awan Villas - Seminyak Bali</title>

<!--Meta Keywords and Description-->
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>

<!--Favicon-->
<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" title="Favicon"/>
<!-- Main CSS Files -->
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<!-- Namari Color CSS -->
<link rel="stylesheet" href="{{asset('assets/css/namari-color.css')}}">
<!--Icon Fonts - Font Awesome Icons-->
<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
<!-- Animate CSS-->
<link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/zoomslider.css')}}" />
<script type="text/javascript" src="{{asset('assets/js/modernizr-2.6.2.min.js')}}"></script>
<!--Google Webfonts-->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<meta name="csrf-token" content="{{ csrf_token() }}">


<style type="text/css">
	.swiper-container {
      /* width: 100%; */
      /* height: 400px; */
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    #banner-other {
        background: url("{{asset('assets/images/other.jpg')}}") no-repeat center top;
        background-size:cover;
        height: 250px;
    }
    .box-other {
        display: inline-block;
        padding: 15px 25px;
        margin: 10px;
        background-color:#fff;
        /* border: 1px solid #f0f0f0; */
        border-radius: 4px;
        box-shadow: 0px 1px 0px rgba(40, 49, 176, 0.98);
    }
    
</style>
</head>
<header id="banner-other" class="scrollto clearfix" >

    <div id="header" class="nav-collapse" style="z-index: 2;">
        <div class="row clearfix">
            <div class="col-1">

                <!--Logo-->
                <div id="logo">
                    
                    <!--Logo that is shown on the banner-->
                    <img src="{{asset('assets/images/logo.png')}}" id="banner-logo" alt="Landing Page"/>
                    <!-- <h1>The Awan Villas</h1>  -->
                    <!--End of Banner Logo-->

                    <!--The Logo that is shown on the sticky Navigation Bar-->
                    <img src="{{asset('assets/images/logo-2.png')}}" id="navigation-logo" alt="Landing Page"/>
                    <!--End of Navigation Logo-->

                </div>
                <!--End of Logo-->

                <!--Main Navigation-->
                <nav id="nav-main">
                    <ul>
                        <li ><a  href="/">Home</a></li>
                        <li >
                            <a  href="#">VILLAS</a>
                            <ul>
                                <li><a href="/one-bedroom">One Bed Room</a></li>
                                <li><a href="/two-bedroom">Two Bed Room</a></li>
                            </ul>
                        </li>
                        <!-- <li ><a href="/dining">DINING</a></li> -->
                        <li ><a  href="/provide-services">Provided Services</a></li>
                        <li ><a  href="/gallery">GALLERY</a></li>
                        <li><a href="/special-offer">SPECIAL OFFERS</a></li>
                        <li ><a  href="/about-us">About Us</a></li>
                    </ul>
                </nav>
                <!--End of Main Navigation-->

                <div id="nav-trigger"><span></span></div>
                <nav id="nav-mobile"></nav>

            </div>
        </div>
    </div><!--End of Header-->

</header>
<script>
    // Save original backgrounds for each category
    const bannerOther = document.getElementById('banner-other');
    const backgrounds = {
        spa: "{{ asset('images/spa.png') }}",
        menu: "{{ asset('images/other1.png') }}",
        tur: "{{ asset('images/other1.png') }}"
    };

    // Patch filterOther to also change background
    const originalFilterOther = window.filterOther;
    window.filterOther = function(category) {
        // Change background
        if (backgrounds[category]) {
            bannerOther.style.background = `url('${backgrounds[category]}') no-repeat center top`;
            bannerOther.style.backgroundSize = 'cover';
        }
        // Call original logic
        if (typeof originalFilterOther === 'function') {
            originalFilterOther(category);
        }
    };
</script>
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
     <div class="col-3 other-service-item spa" style="display:block;">
        <div class="box-other wow " data-wow-delay="0.1s">
            <h3>PACKAGE 1 - (90Mnt). 350K</h3>
            <p>
                - Massage  <br>
                - Scrub <br>
                - Aromatic Ear Candling <br>
            </p>
            <p>Last order 08.00 P.M<br>
            + 21% service charge & government tax</p>
        </div>
    </div>
    <div class="col-3 other-service-item spa" style="display:block;">
        <div class="box-other wow " data-wow-delay="0.1s">
            <h3>PACKAGE 2 - (120Mnt). 450K</h3>
            <p>
                - Massage  <br>
                - Scrub <br>
                - Aromatic Ear Candling <br>
                - Body Masker <br>
            </p>
            <p>Last order 08.00 P.M<br>
            + 21% service charge & government tax</p>
        </div>
    </div>
    <div class="col-3 other-service-item spa" style="display:block;">
        <div class="box-other wow " data-wow-delay="0.1s">
            <h3>PACKAGE 3 - (120Mnt). 450K</h3>
            <p>
                - Massage  <br>
                - Scrub <br>
                - Aromatic Ear Candling <br>
                - Manicure <br>
            </p>
            <p>Last order 08.00 P.M<br>
            + 21% service charge & government tax</p>
        </div>
    </div>
    <div class="col-3 other-service-item spa" style="display:block;">
        <div class="box-other wow " data-wow-delay="0.1s">
            <h3>PACKAGE Honeymoon - (120Mnt). 800K</h3>
            <p>
                - Massage  <br>
                - Scrub <br>
                - Flower Bath <br>
            </p>
            <p>Last order 08.00 P.M<br>
            + 21% service charge & government tax</p>
        </div>
    </div>
    <div class="col-3 other-service-item spa" style="display:block;">
        <div class="box-other wow " data-wow-delay="0.1s">
            <h3>TREATMENTS - Balinese Massage 60Mnt.<br> 190K</h3>
            <p>Last order 08.00 P.M<br>
            + 21% service charge & government tax</p>
        </div>
    </div>
    <div class="col-3 other-service-item spa" style="display:block;">
        <div class="box-other wow " data-wow-delay="0.1s">
            <h3>TREATMENTS - Massage & Scrub 90Mnt.<br> 290K</h3>
            <p>Last order 08.00 P.M<br>
            + 21% service charge & government tax</p>
        </div>
    </div>
    <div class="col-3 other-service-item spa" style="display:block;">
        <div class="box-other wow " data-wow-delay="0.1s">
            <h3>TREATMENTS - Aroma Therapy 60Mnt.<br> 185K</h3>
            <p>Last order 08.00 P.M<br>
            + 21% service charge & government tax</p>
        </div>
    </div>
    <div class="col-3 other-service-item spa" style="display:block;">
        <div class="box-other wow " data-wow-delay="0.1s">
            <h3>TREATMENTS - Foot Reflexology 60Mnt.<br> 180K</h3>
            <p>Last order 08.00 P.M<br>
            + 21% service charge & government tax</p>
        </div>
    </div>
    <div class="col-3 other-service-item spa" style="display:block;">
        <div class="box-other wow " data-wow-delay="0.1s">
            <h3>TREATMENTS - Traditional Boreh 60Mnt.<br> 190K</h3>
            <p>Last order 08.00 P.M<br>
            + 21% service charge & government tax</p>
        </div>
    </div>
    <div class="col-3 other-service-item spa" style="display:block;">
        <div class="box-other wow " data-wow-delay="0.1s">
            <h3>TREATMENTS - Back Massage 60Mnt.<br> 180K</h3>
            <p>Last order 08.00 P.M<br>
            + 21% service charge & government tax</p>
        </div>
    </div>
    <div class="col-3 other-service-item spa" style="display:block;">
        <div class="box-other wow " data-wow-delay="0.1s">
            <h3>TREATMENTS - Manicure.<br> 150K</h3>
            <p>Last order 08.00 P.M<br>
            + 21% service charge & government tax</p>
        </div>
    </div>
    <div class="col-3 other-service-item spa" style="display:block;">
        <div class="box-other wow " data-wow-delay="0.1s">
            <h3>TREATMENTS - Padicure.<br> 150K</h3>
            <p>Last order 08.00 P.M<br>
            + 21% service charge & government tax</p>
        </div>
    </div>
    <div class="col-3 other-service-item spa" style="display:block;">
        <div class="box-other wow " data-wow-delay="0.1s">
            <h3>TREATMENTS - Warm Stone Massage 90Mnt.<br> 300K</h3>
            <p>Last order 08.00 P.M<br>
            + 21% service charge & government tax</p>
        </div>
    </div>
    <div class="col-3 other-service-item spa" style="display:block;">
        <div class="box-other wow " data-wow-delay="0.1s">
            <h3>TREATMENTS - Aromatic Ear Candling.<br> 125K</h3>
            <p>Last order 08.00 P.M<br>
            + 21% service charge & government tax</p>
        </div>
    </div>
    <!-- end spa -->
     <!-- bagian menu -->
    <div class="col-3 other-service-item menu" style="display:block;">
        <div class="box-other wow " data-wow-delay="0.1s">
            <h3>Instan Fried Noodle - Normal.  15K</h3>
            <p>Carrot, Cabbage, Green Vegetable, Spicy / Not<br>
            + 21% service charge & government tax</p>
        </div>
    </div>
    <div class="col-3 other-service-item menu" style="display:block;">
        <div class="box-other wow " data-wow-delay="0.1s">
            <h3>Instan Fried Noodle - Special.  20K</h3>
            <p>Carrot, Cabbage, Green Vegetable, Poached Egg, Spicy / Not<br>
            + 21% service charge & government tax</p>
        </div>
    </div>
    <div class="col-3 other-service-item menu" style="display:block;">
        <div class="box-other wow " data-wow-delay="0.1s">
            <h3>Instan Noodle Soup - Normal.  15K</h3>
            <p>Carrot, Cabbage, Green Vegetable, Spicy / Not<br>
            + 21% service charge & government tax</p>
        </div>
    </div>
    <div class="col-3 other-service-item menu" style="display:block;">
        <div class="box-other wow " data-wow-delay="0.1s">
            <h3>Instan Noodle Soup - Special.  20K</h3>
            <p>Carrot, Cabbage, Green Vegetable, Poached Egg, Spicy / Not<br>
            + 21% service charge & government tax</p>
        </div>
    </div>
    <div class="col-3 other-service-item menu" style="display:block;">
        <div class="box-other wow " data-wow-delay="0.1s">
            <h3>French Fries.  25K</h3>
            <p>Served With Tomato Sauce & Mayonnaise<br>
            + 21% service charge & government tax</p>
        </div>
    </div>
    <div class="col-3 other-service-item menu" style="display:block;">
        <div class="box-other wow " data-wow-delay="0.1s">
            <h3>Chicken Nugget.  25K</h3>
            <p>Served With Tomato Sauce & Mayonnaise<br>
            + 21% service charge & government tax</p>
        </div>
    </div>
    <div class="col-3 other-service-item menu" style="display:block;">
        <div class="box-other wow " data-wow-delay="0.1s">
            <h3>Vegetable Spring Rool.  25K</h3>
            <p>With Mix Vegetable, Vermicelli Noodle Served With Sweet & Sour Sauce<br>
            + 21% service charge & government tax</p>
        </div>
    </div>
    <div class="col-4 other-service-item menu" style="display:block;">
        <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
            <!-- <h3>Simple Menu</h3> -->
            <img src="{{ asset('images/buketbeer.png') }}" alt="Simple Menu" style="width:100%;max-width:300px;">
            <!-- <p>Enjoy delicious food and drinks prepared by our chefs.</p> -->
        </div>
    </div>
    <div class="col-4 other-service-item menu" style="display:block;">
        <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
            <!-- <h3>Tour</h3> -->
            <img src="{{ asset('images/buketbeer1.png') }}" alt="Tour Service" style="width:100%;max-width:300px;">
            <!-- <p>Discover Bali with our curated tour experiences.</p> -->
        </div>
    </div>
    <div class="col-4 other-service-item menu" style="display:block;">
        <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
            <!-- <h3>Tour</h3> -->
            <img src="{{ asset('images/spaghetti.png') }}" alt="Tour Service" style="width:100%;max-width:300px;">
            <!-- <p>Discover Bali with our curated tour experiences.</p> -->
        </div>
    </div>
    <div class="col-4 other-service-item menu" style="display:block;">
        <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
            <!-- <h3>Tour</h3> -->
            <img src="{{ asset('images/burger.png') }}" alt="Tour Service" style="width:100%;max-width:300px;">
            <!-- <p>Discover Bali with our curated tour experiences.</p> -->
        </div>
    </div>
    <div class="col-4 other-service-item menu" style="display:block;">
        <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
            <!-- <h3>Tour</h3> -->
            <img src="{{ asset('images/pizza.png') }}" alt="Tour Service" style="width:100%;max-width:300px;">
            <!-- <p>Discover Bali with our curated tour experiences.</p> -->
        </div>
    </div>
    <div class="col-4 other-service-item menu" style="display:block;">
        <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
            <!-- <h3>Tour</h3> -->
            <img src="{{ asset('images/calamari.png') }}" alt="Tour Service" style="width:100%;max-width:300px;">
            <!-- <p>Discover Bali with our curated tour experiences.</p> -->
        </div>
    </div>
    <div class="col-4 other-service-item menu" style="display:block;">
        <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
            <!-- <h3>Tour</h3> -->
            <img src="{{ asset('images/satay.png') }}" alt="Tour Service" style="width:100%;max-width:300px;">
            <!-- <p>Discover Bali with our curated tour experiences.</p> -->
        </div>
    </div>
    <div class="col-4 other-service-item menu" style="display:block;">
        <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
            <!-- <h3>Tour</h3> -->
            <img src="{{ asset('images/bbq.png') }}" alt="Tour Service" style="width:100%;max-width:300px;">
            <!-- <p>Discover Bali with our curated tour experiences.</p> -->
        </div>
    </div>
    <div class="col-4 other-service-item menu" style="display:block;">
        <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
            <!-- <h3>Tour</h3> -->
            <img src="{{ asset('images/curry.png') }}" alt="Tour Service" style="width:100%;max-width:300px;">
            <!-- <p>Discover Bali with our curated tour experiences.</p> -->
        </div>
    </div>
    <!-- bagian tur -->

    <div class="col-4 other-service-item tur" style="display:block;">
        <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
            <h3>Tour</h3>
            <img src="{{ asset('images/buketbeer1.png') }}" alt="Tour Service" style="width:100%;max-width:300px;">
            <p>Discover Bali with our curated tour experiences.</p>
        </div>
    </div>
</div>

<script>
    window.onload = function() {
        filterOther('spa');
    };
    function filterOther(category) {
        var items = document.querySelectorAll('.other-service-item');
        items.forEach(function(item) {
            if (category === 'spa' && item.classList.contains('spa')) {
                bannerOther.style.background = `url('${backgrounds.spa}') no-repeat center top`;
                bannerOther.style.backgroundSize = 'cover';
                item.style.display = 'block';
            } else if (category === 'menu' && item.classList.contains('menu')) {
                bannerOther.style.background = `url('${backgrounds.menu}') no-repeat center top`;
                bannerOther.style.backgroundSize = 'cover';
                item.style.display = 'block';
            } else if (category === 'tur' && item.classList.contains('tur')) {
                bannerOther.style.background = `url('${backgrounds.tur}') no-repeat center top`;
                bannerOther.style.backgroundSize = 'cover';
                item.style.display = 'block';
            } else if (!category) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }
</script>

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

<!-- Include JavaScript resources -->
<script src="{{asset('assets/js/jquery.1.8.3.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.zoomslider.min.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/featherlight.min.js')}}"></script>
<script src="{{asset('assets/js/featherlight.gallery.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.enllax.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
<!-- <script src="js/jquery.stickyNavbar.min.js"></script> -->
<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/images-loaded.min.js')}}"></script>
<!-- <script src="js/lightbox.min.js"></script> -->
<script src="{{asset('assets/js/site.js')}}"></script>
<script>
    const popupContainer = document.getElementById('popupContainer');
    const popupContent =
        document.getElementById('popupContent');
        popupContainer.addEventListener
            ('mouseover', function () {
                popupContent.style.display = 'block';
            });
        popupContainer.addEventListener
            ('mouseout', function () {
                popupContent.style.display = 'none';
        });
</script>
