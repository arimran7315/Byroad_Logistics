@extends('layout.master')
@section('content')
    <div id="page-banner" class="page-banner blog-banner container-fluid no-padding">
        <div class="page-heading">
            <h3>Contact</h3>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active"><a href="#">Contact Us</a></li>
            </ol>
        </div>
    </div><!-- Banner Section /- -->

    <!-- Page Content -->
    <!-- Choose Us -->
    <div class="container-fluid no-padding choose-us">
        <div class="section-padding"></div>
        <!-- Container -->
        <div class="container">
            <div class="section-header">
                <h3>Contact info</h3>
            </div>
            <!-- Choose Carousel -->
            <div class="choose-carousel">
                <div class="col-md-12">
                    <div class="choose-us-box">
                        <div class="choose-img-box"><img src="{{ asset('images/about/card1.png') }}" alt="choose-us-4" />
                        </div>
                        <div class="choose-us-content-box">
                            <h3>US Office</h3>
                            <p>9170 Trinity Dr, Lake in the hills, IL 60156</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="choose-us-box">
                        <div class="choose-img-box"><img src="{{ asset('images/about/card2.png') }}" alt="choose-us-1" />
                        </div>
                        <div class="choose-us-content-box">
                            <h3>CANADA OFFICE</h3>
                            <p>30 New Delhi Drive 106, Markham, ON, L3S 0B5</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="choose-us-box">
                        <div class="choose-img-box"><img src="{{ asset('images/about/card3.png') }}" alt="choose-us-5" />
                        </div>
                        <div class="choose-us-content-box">
                            <h3>CONTACT (TOLL-FREE)</h3>
                            <p>800-636-4902</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="choose-us-box">
                        <div class="choose-img-box"><img src="{{ asset('images/about/card1.png') }}" alt="choose-us-5" />
                        </div>
                        <div class="choose-us-content-box">
                            <h3>EMAIL</h3>
                            <p>support@byroadlogistics.com</p>
                        </div>
                    </div>
                </div>
            </div><!-- Choose Carousel/- -->
        </div><!-- Container/- -->
        <div class="section-padding"></div>
    </div><!-- Choose Us/- -->
@endsection
