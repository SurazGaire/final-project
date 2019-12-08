@extends('customer.master')
@section('content')
@include('customer.partials.header')
  <!-- Page Breadcrumbs Start -->
  <div class="slider bg-navy-blue bg-fixed pos-rel breadcrumbs-page" style="padding-bottom:25px;">
        <div class="bg-overlay black opacity-60"></div>
        <div class="container">
            <h1>Contact Us</h1>
        </div>
    </div>
    <!-- Page Breadcrumbs End -->

    <!-- Main Body Content Start -->
    <main id="body-content">
        <!-- <section class="map-frame w-100">
           <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"></iframe>
        </section> -->

        <section class="bg-navy-blue wide-tb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <!-- Contact Address Start -->
                        <div class="widget-wrap mb-0">
                            <div class="contacts-details-simple bg-white">
                                <i class="icofont-google-map"></i>
                              {{$settings->address}} <br>
                            </div>
                        </div>
                        <!-- Contact Address End -->
                    </div>

                    <div class="col-md-4">
                        <!-- Contact Email Start -->
                        <div class="widget-wrap mb-0">
                            <div class="contacts-details-simple bg-white">
                                <i class="icofont-ui-email"></i>
                                
                                <strong><a href="#">{{$settings->email}}</a></strong>
                            </div>
                        </div>
                        <!-- Contact Email End -->
                    </div>

                    <div class="col-md-4">
                        <!-- Contact Call Start -->
                        <div class="widget-wrap mb-0">
                            <div class="contacts-details-simple bg-white">
                                <i class="icofont-phone"></i>
                                {{$settings->phnoe}}<br>
                                {{$settings->e_phone}}
                            </div>
                        </div>
                        <!-- Contact Call End -->
                    </div>
                </div>
            </div>
        </section>

        <section class="wide-tb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <div class="text-left single-content">
                            <div class="display-head">
                                Say Hello! Its Free
                            </div>                                   
                            <p class="mb-4">Need assistance dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore teritatis et quasi architecto.</p>
                        </div>

                        <!-- Contact Form -->
                        <form action="http://mannatstudio.com/html/plomberie/mail.php" method="POST" novalidate="novalidate" class="rounded-field gray-field" id="home_page">
                            <div class="col">
                                    <input type="hidden" name="form1" class="form-control" placeholder="Your Name" value="1" required>
                                </div>
                            <div class="form-row mb-4">
                                
                                <div class="col">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col">
                                    <input type="text" name="email" class="form-control" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-row mb-4">
                                <div class="col">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                </div>
                                <div class="col">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone No." required>
                                </div>
                            </div>
                            <div class="form-row mb-4">
                                <div class="col">
                                    <textarea rows="7" name="msg" placeholder="Message" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <button type="submit" class="form-btn btn-theme bg-pink">Submit Now</button>
                            </div>
                        </form>
                        <!-- Contact Form -->
                    </div>
                </div>
            </div>
        </section>
    </main>







@include('customer.partials.footer')
@endsection