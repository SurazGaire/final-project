@extends('customer.master')
@section('content')
@include('customer.partials.header')

<!-- Page Breadcrumbs Start -->
    <div class="slider bg-navy-blue bg-fixed pos-rel breadcrumbs-page" style="padding-bottom:25px;">
        <div class="bg-overlay black opacity-60"></div>
        <div class="container">
            <h1>About Us</h1>
        </div>
    </div>
    <!-- Page Breadcrumbs End -->

    <!-- Main Body Content Start -->
    <main id="body-content">

      <!-- About Us Section Start -->
      <section class="wide-tb-100">
            <div class="container">
                <div class="row">
                    <!-- Tabbing Start -->
                   
                    <!-- Tabbing End -->
                </div>
            </div>
        </section>

        

        <!-- Statistics Counter Section Start -->
        <section class="wide-tb-100 bg-scroll bg-4 pos-rel">
            <div class="bg-overlay blue opacity-70"></div>
            <div class="container wide-tb-100" >
                <div class="row">
                    <!-- Heading Start -->
                    <div class="col-sm-12 text-center mb-4">
                        <div class="display-head">
                            <span class="txt-pink"> Some Of Our Facts</span>
                        </div>
                    </div>
                    <!-- Heading End -->

                    <!-- Counter Col Start -->
                    <div class="col counter-style-1 col-6 col-lg-3 col-sm-6">
                        <span class="counter">{{$customers_count}}</span>
                        <span>+</span>
                        <div>
                            Customers
                        </div>
                    </div>
                    <!-- Counter Col End -->

                    <!-- Counter Col Start -->
                    <div class="col counter-style-1 col-6 col-lg-3 col-sm-6">
                        <span class="counter">{{$employees_count}}</span>
                        <span>+</span>
                        <div>
                            Employees
                        </div>
                    </div>
                    <!-- Counter Col End -->

                    <!-- Spacer For Medium -->
                    <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
                    <!-- Spacer For Medium -->                

                    <!-- Counter Col Start -->
                    <div class="col counter-style-1 col-6 col-lg-3 col-sm-6">
                        <span class="counter">{{$services_count}}</span>
                        <span>+</span>
                        <div>
                            Services Owned
                        </div>
                    </div>
                    <!-- Counter Col End -->

                </div>
            </div>        
        </section>
        <!-- Statistics Counter Section End -->

        <!-- Why Choose Us Start -->
        <section class="wide-tb-100">
            <div class="container pos-rel">
                <div class="row">
                    <div class="img-business-man">
                        <img src="" alt="">
                    </div>
                    <div class="col-sm-12 text-center">
                        <!-- Heading Start -->
                        <div class="display-head">
                            Few Reasons To Choose Us
                        </div>
                        <div class="display-lead txt-black">
                            More Than 50 Years of Combined Experience in Every Job
                        </div>
                        <!-- Heading End -->
                    </div>

                    <div class="col-md-12 col-lg-6 mt-5 ml-auto why-choose wow fadeInRight" data-wow-duration="0" data-wow-delay="0.6s">
                        <div class="row">
                            <!-- Icon Box 2 -->
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">              
                                <div class="icon-box-2">
                                    <div class="icon-wrap d-flex align-items-center">
                                        <div class="icon">
                                            <i class="icofont-clock-time"></i>
                                        </div>
                                        Always <br>Available
                                    </div>
                             
                                </div>
                            </div>
                            <!-- Icon Box -->

                            <!-- Icon Box 2 -->
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">              
                                <div class="icon-box-2">
                                    <div class="icon-wrap d-flex align-items-center">
                                        <div class="icon">
                                            <i class="icofont-users-alt-3"></i>
                                        </div>
                                        Qualified<br>Agents
                                    </div>
                                  
                                </div>              
                            </div>
                            <!-- Icon Box -->

                            <!-- Spacer For Medium -->
                            <div class="w-100 spacer-60 d-none d-md-none d-lg-block d-sm-none"></div>
                            <!-- Spacer For Medium -->

                            <!-- Icon Box 2 -->
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">              
                                <div class="icon-box-2">
                                    <div class="icon-wrap d-flex align-items-center">
                                        <div class="icon">
                                            <i class="icofont-bullhorn"></i>
                                        </div>
                                        Best<br>Offers

                                    </div>
                                </div>              
                            </div>
                            <!-- Icon Box -->

                            <!-- Icon Box 2 -->
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">              
                                <div class="icon-box-2">
                                    <div class="icon-wrap d-flex align-items-center">
                                        <div class="icon">
                                            <i class="icofont-dollar"></i>
                                        </div>
                                        Fair<br>Prices
                                    </div>
                                   
                                </div>              
                            </div>
                            <!-- Icon Box -->
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Why Choose Us End -->

        <!-- Callouts Start -->
        <section class="wide-tb-100 bg-fixed bg-1 pos-rel txt-white callout-style-1">
            <div class="bg-overlay black opacity-50"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p>If you need any emergency plumbing service, simply call our 24 hour emergency number</p>
                        <div class="display-head">
                            Our Reliable Emergency Plumbing<br>Service with Fair rateslity
                        </div>
                        <a href="#" class="btn-theme bg-pink large">{{$settings->e_phone}}</a>
                    </div>
                </div>            
            </div>        
        </section>
        <!-- Callouts End -->

        <!-- Our Team Section Start -->
     
        <!-- Our Team Section End -->

        <!-- Vision/Mission Section Start -->
       
        <!-- Vision/Mission Section End -->

        <!-- Our Customer Section Start -->
        <section class="wide-tb-100">
            <div class="container">
                <div class="row">
                    <!-- Main Heading Start -->
                    <div class="col-sm-12">
                        <div class="heading-wrap d-flex align-items-center">
                            <div class="heading-main">
                                <span>What Our</span>
                                Customer Say’s
                            </div>
                            <div class="sub-head-text">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium
                            </div>
                        </div>
                    </div>
                    <!-- Main Heading End -->

                    <div class="col-sm-12">
                        <div class="owl-carousel owl-theme rounded-top-arrow" id="home-client-testimonials">

                            <!-- Client Testimonials Slider Item -->
                            <div class="item">
                                <div class="client-testimonial">
                                    <div class="media">
                                        <div class="client-testimonial-icon rounded-circle">
                                            <img src="{{ URL::to('/')}}/public/customer/images/team_1.jpg" alt="">
                                        </div>
                                        <div class="client-inner-content media-body">
                                            <h3>John Morise</h3>
                                            <p>Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in.</p>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <span><i class="icofont-star"></i>
                                                <i class="icofont-star"></i></span>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Client Testimonials Slider Item -->

                            <!-- Client Testimonials Slider Item -->
                            <div class="item">
                                <div class="client-testimonial">
                                    <div class="media">
                                        <div class="client-testimonial-icon rounded-circle">
                                            <img src="images/team_2.jpg" alt="">
                                        </div>
                                        <div class="client-inner-content media-body">
                                            <h3>John Morise</h3>
                                            <p>Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in.</p>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <span><i class="icofont-star"></i>
                                                <i class="icofont-star"></i></span>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Client Testimonials Slider Item -->

                            <!-- Client Testimonials Slider Item -->
                            <div class="item">
                                <div class="client-testimonial">
                                    <div class="media">
                                        <div class="client-testimonial-icon rounded-circle">
                                            <img src="{{ URL::to('/')}}/public/customer/images/team_3.jpg" alt="">
                                        </div>
                                        <div class="client-inner-content media-body">
                                            <h3>John Morise</h3>
                                            <p>Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in.</p>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <span><i class="icofont-star"></i>
                                                <i class="icofont-star"></i></span>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Client Testimonials Slider Item -->

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Our Customer Section End -->

        <!-- Our Blog Section Start -->
      
        <!-- Our Blog Section End -->

        <!-- Our Partners Section Start -->
        <section class="wide-tb-50 bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
                        <div class="owl-carousel owl-theme" id="home-clients">

                            <!-- Client Logo -->
                            <div class="item">
                                <img src="{{ URL::to('/')}}/public/customer/images/partners/partner1.png" alt="">
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <img src="{{ URL::to('/')}}/public/customer/images/partners/partner2.png" alt="">
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <img src="{{ URL::to('/')}}/public/customer/images/partners/partner3.png" alt="">
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <img src="{{ URL::to('/')}}/public/customer/images/partners/partner4.png" alt="">
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <img src="{{ URL::to('/')}}/public/customer/images/partners/partner5.png" alt="">
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <img src="{{ URL::to('/')}}/public/customer/images/partners/partner6.png" alt="">
                            </div>
                            <!-- Client Logo -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Partners Section End -->  
    </main>

   @include('customer.partials.footer')

    <!-- Search Popup Start -->
    <div class="overlay overlay-hugeinc">    
        <form class="form-inline mt-2 mt-md-0">
            <div class="form-inner">
                <div class="form-inner-div d-inline-flex align-items-center no-gutters">
                    <div class="col-md-1">
                        <i class="icofont-search"></i>
                    </div> 
                    <div class="col-10">
                        <input class="form-control w-100 p-0" type="text" placeholder="Search" aria-label="Search">
                    </div>
                    <div class="col-md-1">
                        <a href="#" class="overlay-close link-oragne"><i class="icofont-close-line"></i></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Search Popup End -->

    <div class="video-box">
        <!-- close-video -->
        <div class="close-video">
            <i class="icofont-close-line"></i>
        </div><!-- /close-video -->
    </div><!-- /video-box -->

    <!-- Back To Top Start -->
    <a id="mkdf-back-to-top" href="#" class="off"><i class="icofont-rounded-up"></i></a>
    <!-- Back To Top End -->
@endsection