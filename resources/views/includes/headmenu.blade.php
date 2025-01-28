@php $gmbr = "" ; @endphp
<header id="banner" class="scrollto clearfix" data-zs-src='["{{asset("assets")}}/images/banner-images/banner-image-1.jpg", "{{asset("assets")}}/images/banner-images/banner-image-2.jpg", "{{asset("assets")}}/images/banner-images/banner-image-3.jpg", "{{asset("assets")}}/images/banner-images/banner-image-4.jpg"]' >

    <div id="header" class="nav-collapse">
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

                <aside>

                    <!--Social Icons in Header-->
                    <ul class="social-icons">
                        <li>
                            <a target="_blank" title="Facebook" href="https://www.facebook.com/username">
                                <i class="fa fa-facebook fa-3x"></i><span>Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" title="Twitter" href="http://www.twitter.com/username">
                                <i class="fa fa-twitter fa-3x"></i><span>Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" title="Instagram" href="http://www.instagram.com/username">
                                <i class="fa fa-instagram fa-3x"></i><span>Instagram</span>
                            </a>
                        </li>
                    </ul>
                    <!--End of Social Icons in Header-->

                </aside>

                <!--Main Navigation-->
                <nav id="nav-main">
                    <ul>
                        <li ><a  href="/">Home</a></li>
                        <li >
                            <a  href="/villas">VILLAS</a>
                            <ul>
                                <li><a href="/single">Single</a></li>
                                <li><a href="/double">Double</a></li>
                            </ul>
                        </li>
                        <li >
                            <a href="/dining">DINING</a>
                        </li>
                        <li ><a  href="/gallery">GALLERY</a></li>
                        <li class="dropdown-menu">
                            <a href="#">SPECIAL OFFERS</a>
                            <ul>
                                <li><a id="spesial" href="honemoon.php">Honeymoon Package</a></li>
                                <li><a href="dining.php">Family Package</a></li>
                                <li><a id="spesial" href="honemoon.php">Honeymoon Package</a></li>
                                <li><a href="dining.php">Family Package</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!--End of Main Navigation-->

                <div id="nav-trigger"><span></span></div>
                <nav id="nav-mobile"></nav>

            </div>
        </div>
    </div><!--End of Header-->

    <!--Banner Content-->
    <div id="banner-content" class="row clearfix">

        <div class="col-38">

            <div class="section-heading">
                <h1 style="font-family:'MAIAN';">Bali Awan Villas</h1>
                <h2>- Best Place To Stay In bali -</h2>
            </div>

            <!--Call to Action-->
            <a href="#" class="button">BOOK TODAY</a>
            <!--End Call to Action-->

        </div>

    </div><!--End of Row-->
</header>