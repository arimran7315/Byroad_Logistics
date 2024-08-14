@extends('layout.master')

@section('content')
<div id="page-banner" class="page-banner blog-banner container-fluid no-padding">
    <div class="page-heading">
        <h3>Services</h3>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active"><a href="#">Services</a></li>
        </ol>
    </div>
</div><!-- Banner Section /- -->
    <!-- What We Do -->
    <div class="container-fluid no-padding what-we-do">
        <div class="section-padding"></div>
        <div class="image-box">
            <img src="{{ asset('images/services/truck.png') }}" alt="service" />
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
    <div class="container-fluid no-padding what-we-do what-we-do2">
        <div class="section-padding"></div>
        <div class="container">
            <div class="col-md-12">
                <div class="section-header">
                    <h3>What We Do For You</h3>
                </div>
                <div class="col-md-4">
                    <div class="what-we-do-box">
                        <p>With years of expertise in the industry, we have established ourselves as leaders in auto
                            transport, offering a comprehensive range of services tailored to meet your unique needs.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="what-we-do-box">
                        <p>From standard car shipping to specialized transport for exotic cars, motorcycles, and vintage
                            automobiles, we have the knowledge and resources to handle it all with utmost care and
                            precision.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="what-we-do-box">
                        <p>What sets us apart is our unwavering commitment to customer satisfaction. We prioritize clear
                            communication, transparency, and reliability in every interaction.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-md-4">
                    <div class="what-we-do-box">
                        <p>Our dedicated team of professionals works tirelessly to coordinate every aspect of your
                            transport, keeping you informed and reassured every step of the way.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="what-we-do-box">
                        <p>At Byroad Logistic Inc, we take pride in our attention to detail and our ability to deliver
                            results that exceed expectations. When you choose us, you can trust that your vehicle is in the
                            safest hands, allowing you to focus on what matters most to you.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="what-we-do-box">
                        <p>Experience the difference with Byroad Logistic Inc – where your satisfaction is our priority, and
                            your vehicle arrives safely, on time, every time.</p>
                        <div class="more-service"><a title="Book Now" href="{{route('estimatePage')}}"
                                style="background-color: rgb(246, 90, 40);">Get Free Quote</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-padding"></div>
    </div>

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
