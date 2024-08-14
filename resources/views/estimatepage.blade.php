@extends('layout.master')

@section('content')
   <!-- Banner Section -->
		<div id="page-banner" class="page-banner faq-banner container-fluid no-padding">
			<div class="page-heading">
				<h3>Estimate</h3>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active"><a href="#">Get Free Estimate</a></li>
				</ol>
			</div>
		</div><!-- Banner Section /- -->

    <!-- What We Do -->
    <div class="container-fluid no-padding what-we-do">
        <div class="section-padding"></div>
        <!-- Container -->
        <div class="container">
            <!-- Booking Form -->
            <div class="booking-form">
                <div class="container">
                    <div class="col-md-12">
                        <form name="book-taxi" class="book-taxi-form" method="POST" action="{{ route('estimatecomplete.store') }}">
                            @csrf
                            <h3>Book Your Taxi Now</h3>
                            <div class="contanier-fluid">
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="txt_name">From :</label>
                                    <div id="from" class="address-field autocomplete-container"></div>
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="txt_phone">To :</label>
                                    <div id="to" class="address-field autocomplete-container"></div>
                                </div>
                            </div>
                            <div class="form-group col-md-4 col-sm-4">
                                <label for="txt_name">Name :</label>
                                <input type="text" class="form-control" placeholder="Your Name" name="name" value="{{old('name')}}"/>
                            </div>
                            <div class="form-group col-md-4 col-sm-4">
                                <label for="txt_phone">Email :</label>
                                <input type="text" class="form-control" placeholder="Your Email" name="Email" value="{{old('Email')}}" />
                            </div>
                            <div class="form-group col-md-4 col-sm-4">
                                <label for="txt_phone">Phone Number :</label>
                                <input type="text" class="form-control" placeholder="Your Phone Number" name="phone" value="{{old('phone')}}" />
                            </div>
                            <div class="form-group col-md-3 col-sm-3">
                                <label for="txt_startfrom">Pickup Date :</label>
                                <input type="date" class="form-control" name="date" value="{{old('date')}}" />
                            </div>
                            <div class="form-group col-md-3 col-sm-3">
                                <label for="txt_drop">Vehicle Year :</label>
                                <input type="text" class="form-control" name="year" value="{{old('year')}}" />
                            </div>
                            <div class="form-group col-md-3 col-sm-3">
                                <label for="txt_drop">Vehicle Make :</label>
                                <input type="text" class="form-control" name="make" value="{{old('make')}}" />
                            </div>
                            <div class="form-group col-md-3 col-sm-3">
                                <label for="txt_drop">Vehicle Model :</label>
                                <input type="text" class="form-control" name="model" value="{{old('model')}}" />
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="txt_startfrom">Career :</label>
                                <select name="career" class="form-control">
                                    <option value="" selected hidden>--Select--</option>
                                    <option value="Open">Open</option>
                                    <option value="Enclosed">Enclosed</option>
                                    <option value="Driveway">Driveway</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="txt_startfrom">Condition :</label>
                                <select name="condition" class="form-control">
                                    <option value="" selected hidden>--select--</option>
                                    <option value="Operable">Operable</option>
                                    <option value="Inoperable">Inoperable</option>
                                </select>
                            </div>
                            <input type="hidden" id="fromcity" name="from">
                            <input type="hidden" id="tocity" name="to">
                            <input type="hidden" id="lon1">
                            <input type="hidden" id="lat1">
                            <input type="hidden" id="lon2">
                            <input type="hidden" id="lat2">
                            <input type="hidden" id="miles" name="miles">
                            <div class="col-md-12"><small class="terms">By providing your phone number and clicking through, you agree to our <a href="/terms-conditions"> Terms &amp; Condition, </a><a href="/privacy"> Privacy Statement, </a> and authorize us (Byroad logistic inc) to make or initiate sales calls, text msgs, and prerecorded voicemails to that number using an automated system. Your agreement is not a condition of purchasing products, goods or services. You may opt out&nbsp;at&nbsp;any&nbsp;time.</small></div>
                            <div class="col-md-12">
                                <button type="submit" title="submit" class="btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- Booking Form /- -->
        </div><!-- Container/-  -->
        <div class="section-padding"></div>
    </div><!-- What We Do/- -->
@endsection
