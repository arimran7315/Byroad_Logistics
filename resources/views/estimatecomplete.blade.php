@extends('layout.master')

@section('content')
    <div id="page-banner" class="page-banner faq-banner container-fluid no-padding">
        <div class="page-heading">
            <h3>Estimate</h3>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active"><a href="#">Estimate Completed</a></li>
            </ol>
        </div>
    </div>
    <!-- What We Do -->
    <div class="container-fluid no-padding what-we-do">
        <div class="section-padding"></div>
        <!-- Container -->
        <div class="container">
            <!-- Booking Form -->
            <div class="booking-form">
                <div class="container">
                    <div class="col-md-12">
                        <div class="container text-center">
                            @php
                                if ($miles <= 300) {
                                    $price = round($miles * 1.96);
                                } elseif ($miles > 300 && $miles <= 1000) {
                                    $price = round($miles * 0.93);
                                } elseif ($miles > 1000 && $miles <= 1500) {
                                    $price = round($miles * 0.58);
                                } else {
                                    $price = 'Error';
                                }
                            @endphp
                            <h1 style="color: #23de33;">Thank you! <br> Your request has been submitted!</h1>
                            <h4 style="color: #23de33;">Your Estimate transportation cost is</h4>
                            <h2 style="color: #23de33;">$ {{ $price }}</h2> <br>
                            <a href="{{route('welcome')}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div><!-- Booking Form /- -->
        </div><!-- Container/-  -->
        <div class="section-padding"></div>
    </div><!-- What We Do/- -->
@endsection 
