@extends('layout.master')

@section('content')
    <!-- Photo Slider2 -->
    <div class="container-fluid photos-slider2 no-padding">
        <div id="photos-slider2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{ asset('images/photos-slider/photo-slide-1.webp') }}" alt="side-1" />
                    <div class="container photos-slider2-content">
                        <div class="col-md-8 col-sm-12 col-xs12 pull-right">
                            <div class="slider-content">
                                <h2>A reliable way to</h2>
                                <h2>Travel Around</h2>
                                <p>We Offer The Best Taxi Service In The City</p>
                                <a href="{{route('estimatecomplete.create')}}" title="Learn More" class="learn-more">Get free estimate</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('images/photos-slider/photo-slide-1.png') }}" alt="side-1" />
                    <div class="container photos-slider2-content">
                        <div class="col-md-8 col-sm-12 col-xs12 pull-right">
                            <div class="slider-content">
                                <h2>A reliable way to</h2>
                                <h2>Travel Around</h2>
                                <p>We Offer The Best Taxi Service In The City</p>
                                <a href="{{route('estimatecomplete.create')}}" title="Learn More" class="learn-more">Get free estimate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- Photo Slider/- -->


    <!-- What We Do -->
    <div class="container-fluid no-padding what-we-do">
        <div class="section-padding"></div>
        <div class="image-box">
            <img src="{{asset('images/services/truck.png')}}" alt="service" />
        </div>
        <!-- Container -->
        <div class="container">
            <div class="col-md-8 pull-right">
                <div class="col-md-6 col-sm-6">
                    <div class="about">
                        <h3>Get To Know</h3>
                        <h2>Who We Are</h2>
                        <p>Welcome to Byroad Logistic Inc, where excellence in auto transport meets unparalleled customer
                            service. At Byroad Logistic Inc, we understand that your vehicle is more than just a mode of
                            transportation; it's an essential part of your life. Whether you're relocating across the
                            country, purchasing a new vehicle from a dealership, or sending your prized possession to a car
                            show, we're here to ensure a seamless and stress-free transport experience. </p>
                        <a href="about.php" title="Know More">Know More</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 no-right-padding">
                    <div class="more-than-you">
                        <div class="section-header">
                            <h3>We Do More Than You Wish</h3>
                        </div>
                        <ul>
                            <li>Indulge in unparalleled convenience with our exclusive <b>DOOR TO DOOR </b>dispatching
                                service</li>
                            <li>Safely transporting <b>VINTAGE AND LUXURY</b> cars with white-glove care</li>
                            <li>Exquisitely transporting <b>BIKES</b> to their destinations</li>
                            <li>Urgency meets sophistication in <b>EXPEDITE</b> delivery</li>
                            <li>ENCLOSED transport for unrivaled protection or <b>OPEN</b> transport for a seamless journey
                            </li>
                        </ul>
                        <p>Effortlessly coordinating the elegant transport of multiple vehicles, ensuring each arrives in
                            style at its destination.</p>
                    </div>
                </div>
            </div>
        </div><!-- Container/-  -->
        <div class="section-padding"></div>
    </div><!-- What We Do/- -->

    <!-- Services -->
    <div class="container-fluid	 no-padding services">
        <div class="section-padding"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="service-box">
                        <h3>Enjoy The</h3>
                        <h2>Services We Offer</h2>
                        <p>Cruise worry-free with our expert auto transport, where your vehicle's journey is our passion.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-box">
                        <div id="sevice-slider" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="{{asset('images/services/service-1.png')}}" alt="service-1" />
                                </div>
                                <div class="item">
                                    <img src="{{asset('images/services/service-2.png')}}" alt="service-2" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-box content">
                        <div class="section-box-title">
                            <img src="{{asset('images/services/icon-1.png')}}" alt="home-pickup" />
                            <span>RELIABILITY</span>
                        </div>
                        <p>Key traits include transparent pricing, secure handling, insurance coverage, and effective
                            communication throughout the process.</p>
                        <a href="#" title="Read More">Read More ...</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-box content">
                        <div class="section-box-title">
                            <img src="{{asset('images/icon/anytime.png')}}" alt="anytime" />
                            <span>EFFICIENCY</span>
                        </div>
                        <p>Swift delivery, streamlined logistics, and responsive customer support, ensuring your vehicle
                            reaches its.</p>
                        <a href="#" title="Read More">Read More ...</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-box">
                        <img src="{{asset('images/services/service-2.png')}}" alt="service-2" />

                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-box book-now">
                        <p>Discover the heartfelt commitment in our exceptional auto transport services, where efficiency
                            and reliability converge to assure you a seamless journey for your vehicle, making us your
                            ultimate choice for transportation needs</p>
                        <a href="estimate.php" title="Book Now">Get Free Estimate</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-padding"></div>
    </div><!-- -Services/- -->


    <!-- Counter Style2 -->
    <div id="counter" class="container-fluid no-padding counter-style2">
        <div class="section-padding"></div>
        <div class="container">
            <!-- Counter -->
            <div class="counter">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="statistics-box">
                        <h3><span>VEHICLE DELIVERED</span></h3>
                        <i class="statistics-icon"><img src="{{asset('images/icon/car.png')}}" alt="statistics-icon" /></i>
                        <p style="color: white; font-size:32px; font-weight:600;"><span id="statistics_count-1"
                                data-statistics_percent="10000"></span>+</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="statistics-box">
                        <h3><span>CUSTOMERS SATISFACTION</span></h3>
                        <i class="statistics-icon"><img src="{{asset('images/icon/thumb-up.png')}}"
                                alt="statistics-icon" /></i>
                        <p style="color: white; font-size:32px; font-weight:600;"><span id="statistics_count-2"
                                data-statistics_percent="100"></span>%</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="statistics-box">
                        <h3><span>QUALIFIED DRIVERS</span></h3>
                        <i class="statistics-icon"><img src="{{asset('images/icon/driver.png')}}"
                                alt="statistics-icon" /></i>
                        <p style="color: white; font-size:32px; font-weight:600;"><span id="statistics_count-3"
                                data-statistics_percent="15000"></span>+</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="statistics-box">
                        <h3><span>STATES COVERED</span></h3>
                        <i class="statistics-icon"><img src="{{asset('images/icon/milestone.png')}}"
                                alt="statistics-icon" /></i>
                        <p style="color: white; font-size:32px; font-weight:600;"><span id="statistics_count-4"
                                data-statistics_percent="50"></span></p>
                    </div>
                </div>
            </div><!-- Counter/- -->
        </div>
        <div class="section-padding"></div>
    </div><!-- Counter Style2 /- -->

    <!-- Choose Us -->
    <div class="container-fluid no-padding choose-us">
        <div class="section-padding"></div>
        <!-- Container -->
        <div class="container">
            <div class="section-header">
                <h3>Here is Who We Are</h3>
            </div>
            <!-- Choose Carousel -->
            <div class="choose-carousel">
                <div class="col-md-12">
                    <div class="choose-us-box">
                        <div class="choose-img-box"><img src="{{asset('images/about/card1.png')}}" alt="choose-us-4" /></div>
                        <div class="choose-us-content-box">
                            <h3>SAFETY STANDARDS</h3>
                            <p>Our rigorous safety protocols and expert handling ensure your vehicle arrives unscathed,
                                giving you confidence in our ability to protect your valuable asset.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="choose-us-box">
                        <div class="choose-img-box"><img src="{{asset('images/about/card2.png')}}" alt="choose-us-1" /></div>
                        <div class="choose-us-content-box">
                            <h3>GUARANTEED TIMELINESS</h3>
                            <p>With our proven track record of punctuality and efficiency, you can trust us to deliver your
                                vehicle on time, every time, saving you precious time and minimizing disruptions to your
                                schedule.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="choose-us-box">
                        <div class="choose-img-box"><img src="{{asset('images/about/card3.png')}}" alt="choose-us-5" /></div>
                        <div class="choose-us-content-box">
                            <h3>TRANSPARENT COMMUNICATION</h3>
                            <p>From booking to delivery, we keep you informed at every stage, providing clear communication
                                and updates so you can rest assured knowing your vehicle is in reliable hands.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div><!-- Choose Carousel/- -->
        </div><!-- Container/- -->
        <div class="section-padding"></div>
    </div><!-- Choose Us/- -->

    <!-- Testimonial -->
    <div class="container-fluid no-padding testimonial">
        <img src="{{asset('images/border-pattern.jpg')}}" alt="border" />
        <div class="section-padding"></div>
        <div class="container">
            <div class="section-header">
                <h3>Words from Our Customers</h3>
            </div>
            <div id="testimonial-slider" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <p><i class="fa fa-quote-left"></i>Byroad Logistics has truly set the bar for unparalleled service!
                            Their commitment to excellence, combined with their seamless operations, ensures every delivery
                            is not just a transaction, but an experience of reliability and satisfaction. Choose Byroad
                            Logistics for a partnership that exceeds expectations every time.<i
                                class="fa fa-quote-right"></i></p>
                        <span>Thomas Knoll</span>
                    </div>
                    <div class="item">
                        <p><i class="fa fa-quote-left"></i>Byroad Logistics has truly set the bar for unparalleled service!
                            Their commitment to excellence, combined with their seamless operations, ensures every delivery
                            is not just a transaction, but an experience of reliability and satisfaction. Choose Byroad
                            Logistics for a partnership that exceeds expectations every time.<i
                                class="fa fa-quote-right"></i></p>
                        <span>Thomas Knoll</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-padding"></div>
        <img src="{{asset('images/border-pattern.jpg')}}" alt="border" />
    </div><!-- Testimonial/- -->


    <!-- Partner -->
    <div id="partner" class="container-fluid no-padding partner">
        <div class="section-padding"></div>
        <div class="container">
            <div class="section-header">
                <h3>Our Clients And Partners</h3>
            </div>
            <div class="partner-carousel">
                <div class="col-md-12">
                    <img src="{{asset('images/partner/partner-1.png')}}" alt="partner-1" style="filter: grayscale(100%);" />
                </div>
                <div class="col-md-12">
                    <img src="{{asset('images/partner/partner-2.png')}}" alt="partner-2" style="filter: grayscale(100%);" />
                </div>
                <div class="col-md-12">
                    <img src="{{asset('images/partner/partner-3.png')}}" alt="partner-3" style="filter: grayscale(100%);" />
                </div>
                <div class="col-md-12">
                    <img src="{{asset('images/partner/partner-4.png')}}" alt="partner-4" style="filter: grayscale(100%);" />
                </div>
                <div class="col-md-12">
                    <img src="{{asset('images/partner/partner-5.png')}}" alt="partner-5" style="filter: grayscale(100%);" />
                </div>
                <div class="col-md-12">
                    <img src="{{asset('images/partner/partner-6.png')}}" alt="partner-6" style="filter: grayscale(100%);" />
                </div>
            </div>
        </div>
        <div class="section-padding"></div>
    </div><!-- Partner /- -->
@endsection
