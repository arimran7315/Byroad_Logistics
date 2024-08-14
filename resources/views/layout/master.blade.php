<!DOCTYPE html>
<html class=""><!--<![endif]-->

<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>Byroad Logistics INC</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="/images/favicon.ico" />
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114x114-precomposed.png">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72x72-precomposed.png">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57x57-precomposed.png">	
	
	<!-- Library - Loader CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('libraries/loader/loaders.min.css')}}">

	<!-- Library - Google Font Familys -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100italic,100,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<script src=" https://unpkg.com/@geoapify/geocoder-autocomplete@^1/dist/index.min.js"></script>
    <link
      rel="stylesheet"
      href="https://unpkg.com/@geoapify/geocoder-autocomplete@^1/styles/minimal.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<!-- Library - Bootstrap v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="{{asset('libraries/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('libraries/bootstrap/bootstrap-datetimepicker.min.css')}}">
	
	<!-- Font Icons -->
	<link rel="stylesheet" type="text/css" href="{{asset('libraries/fonts/font-awesome.min.css')}}">

	<!-- Library - OWL Carousel V.2.0 beta -->
	<link rel="stylesheet" type="text/css" href="{{asset('libraries/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('libraries/owl-carousel/owl.theme.css')}}">

	<!-- Library - FlexSlider v2.5.0 -->
	<link rel="stylesheet" type="text/css" href="{{asset('libraries/flexslider/flexslider.css')}}">

	<!-- Library - Animate CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('libraries/animate/animate.min.css')}}">

	<!-- Custom - Common CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/plugins.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/navigation-menu.css')}}">

	<!-- Custom - Theme CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/shortcodes.css')}}">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	
	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
</head>
<style>
    .autocomplete-container {
    position: relative;
}
</style>
<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
    <!-- Loader -->
    <div id="site-loader" class="load-complete">
        <div class="loader">
            <div class="loader-inner ball-clip-rotate">
                <div></div>
            </div>
        </div>
    </div><!-- Loader /- -->

    <a id="top"></a>
    <!-- Main Container -->
    <div class="main-container">
        <!-- Header -->
        <header class="header-main">

            <!-- Logo Block -->
            <div class="middle-header container-fluid no-padding">
                <!-- Container -->
                <div class="container">
                    <div class="col-md-4 logo-block pull-left">
                        <a href="{{route('welcome')}}">
                            <img src="{{asset('images/logo.png')}}" alt="Logo" />
                            <b>Byroad Logistics</b><span>Always there for you</span>
                        </a>
                    </div>
                    <div class="col-md-6 pull-right">
                        
                        <div class="phone">
                            <img src="{{asset('images/icon/phone-ic.png')}}" alt="phone" />
                            <p>CONTACT SUPPORT (TOLL-FREE)<span> 800-636-4902</span></p>
                        </div>
                    </div>
                </div><!-- Container /- -->
            </div><!-- Logo Block /- -->
            <nav class="navbar ow-navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand logo-block">
                            <a href="#">
                                <img src="{{asset('images/logo.png')}}" alt="Logo" />
                                <b>National Cab</b><span>Always there for you</span>
                            </a>
                        </div>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="home">
                                <a href="{{route('welcome')}}" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                            </li>
                            <li class="about-nav"><a href="{{route('aboutPage')}}">About Us</a></li>
                            <li class="service-nav"><a href="{{route('servicePage')}}">Our Services</a></li>
                            <li class="blog-nav"><a href="{{route('blog.index')}}">Blogs</a></li>
                            <li class="term-nav"><a href="{{route('termsPage')}}">Terms</a></li>
                            <li class="privacy-nav"><a href="{{route('privacyPage')}}">Privacy</a></li>
                            <li class="contact-nav"><a href="{{route('contactPage')}}">Contact US</a></li>							
                        </ul>						
                    </div>
                    <a href="{{route('estimatecomplete.create')}}">Get Free Estimate</a>
                </div>
            </nav>
        </header>
        <!-- Header /- -->

        @hasSection('content')
            @yield('content')
        @else
            <h2>No Content</h2>
        @endif

        <footer class="footer-main">
            <!-- Container -->
            <div class="container">
                <div class="col-md-4 col-sm-6">
                    <aside class="widget widget-subscribe">
                        <div class="subscribe-box">
                            <h4>Subscribe To Mail!</h4>
                            <p>Get our Daily email n.ewsletter with Special Services, Updates, Offers and more</p>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">SignUp</button>
                                </span>
                            </div><!-- /input-group -->
                        </div>
                        <ul>
                            <li><a href="#"><img src="{{asset('images/icon/ftr-fb.png')}}" alt="ftr" /></a></li>
                            <li><a href="#"><img src="{{asset('images/icon/ftr-g%2b.png')}}" alt="ftr" /></a></li>
                            <li><a href="#"><img src="{{asset('images/icon/ftr-tumbler.png')}}" alt="ftr" /></a></li>
                            <li><a href="#"><img src="{{asset('images/icon/ftr-dribbble.png')}}" alt="ftr" /></a></li>
                            <li><a href="#"><img src="{{asset('images/icon/ftr-ln.png')}}" alt="ftr" /></a></li>
                            <li><a href="#"><img src="{{asset('images/icon/ftr-tw.png')}}" alt="ftr" /></a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-4 col-sm-6">
                    <aside class="widget widget-links">
                        <h3 class="widget-title">MISSION AND VISION</h3>
                        <ul>
                            <li><a href="#"><b>Mission:</b> Redefining auto transport with reliability, efficiency, and care.</a></li>
                            <li><a href="#"><b>Vision:</b> To be the premier choice, setting the industry standard for excellence in auto transport solutions.</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-4 col-sm-6">
                    <aside class="widget widget-about">
                        <h3 class="widget-title">about Us</h3>
                        <ul>
                            <li><img src="{{asset('images/icon/ftr-location.png')}}" alt="Address" /><b>Canada Office:</b> 30 New Delhi Drive 106, Markham, ON, L3S 0B5 <span><b>US Office:</b>9170 Trinity Dr, Lake in the hills, IL 60156</span></li>
                            <li><img src="{{asset('images/icon/ftr-customer.png')}}" alt="Phone" /> Customer Support : <span>800-636-4902</span></li>
                            <li><img src="{{asset('images/icon/ftr-email.png')}}" alt="Mail" /><span>Email :</span><a href="mailto:mail@NationalCab.com"> support@byroadlogistics.com</a></li>
                        </ul>
                    </aside>
                </div>
            </div><!-- Container /- -->
            <div class="bottom-footer container-fluid no-padding">
                <div class="container">
                    <ul class="col-md-5 pull-left">
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Client Support</a></li>
                    </ul>
                    <div class="col-md-7 pull-right">
                        <p class="copyright">COPYRIGHTS © 2024 BYROAD LOGISTICS INC. ALL RIGHTS RESERVED</p>
                    </div>
                </div>
            </div>
        </footer>

    </div><!-- Main Container -->
  <!-- JQuery v1.11.3 -->
<script src="{{asset('js/jquery.min.js')}}"></script>

<!-- Library - Modernizer -->
<script src="{{asset('libraries/modernizr/modernizr.js')}}"></script>

<!-- Library - Bootstrap v3.3.5 -->
<script src="{{asset('libraries/bootstrap/bootstrap.min.js')}}"></script><!-- Bootstrap JS File v3.3.5 -->
<script src="{{asset('libraries/bootstrap/bootstrap-datetimepicker.min.js')}}"></script><!-- Bootstrap JS File v3.3.5 -->

<!-- jQuery Easing v1.3 -->
<script src="{{asset('js/jquery.easing.min.js')}}"></script>

<!-- Library - jQuery.appear -->
<script src="{{asset('libraries/appear/jquery.appear.js')}}"></script>

<!-- Library - OWL Carousel V.2.0 beta -->
<script src="{{asset('libraries/owl-carousel/owl.carousel.min.js')}}"></script>

<!-- jQuery For Number Counter -->	
<script src="{{asset('libraries/number/jquery.animateNumber.min.js')}}"></script>

<!-- Library - Google Map API -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

<!-- Library - FlexSlider v2.5.0 -->
<script defer src="{{asset('libraries/flexslider/jquery.flexslider.js')}}"></script>

<!-- Library - Theme JS -->
<script src="{{asset('js/functions.js')}}"></script>

    <script src="{{asset('js/estimate.js')}}"></script>
</body>

</html>
