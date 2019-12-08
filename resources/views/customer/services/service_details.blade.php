@extends('customer.master')
@section('content')




<header class="header-2" style="padding-top:5px;">


<div class="container rounded-bottom">
    <!-- Top Bar Start -->
    <!-- Top Bar End -->

    <!-- Main Navigation Start -->
    <div class="header-fixed">
        <div class="container p-0">
            <nav class="navbar navbar-expand-lg btco-hover-menu">
                <!-- <a class="navbar-brand rounded-bottom light-bg" href="index.html">
                    <img src="{{ URL::to('/')}}/public/customer/images/logo_light_pink.png" alt="">
                </a> -->
                <!-- Topbar Request Quote Start -->
              

                <!-- Toggle Button Start -->
               
                <!-- Toggle Button End -->

                <!-- Topbar Request Quote End -->

                <div class="collapse navbar-collapse mainmenu" id="navbarCollapse" data-hover="dropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="order-lg-last btn-theme bg-pink fw-6 ml-4" href="{{route('/')}}">Home</a>
                        </li>



                      





                        <!-- Main Navigation End -->
                </div>
            </nav>
        </div>
    </div>
    <!-- Main Navigation End -->
</div>
</header>
<main id="body-content">

<!-- Service Single Section Start -->
<section class="wide-tb-100 bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-12 text-md-center">
                <div class="about-img mt-0">
                    <img src="{{asset($services->image)}}" alt="">
                </div>

                <!-- Heading Start -->
                <div class="display-head mt-5">
                  {{$services->sname}}
                </div>
                <!-- Heading End -->

                <p>{{$services->desc}}</p>
                      
            </div>
        </div>
    </div>
</section>
<!-- Service Single Section End -->

<!-- Service Description Start -->
<section class="wide-tb-100 bg-white">
    <div class="container">
        

        <div class="display-head">
            <span style="font-size:1.5rem;">Packages</span>
        </div>
        <div class="row">

            <!-- Pricing Table -->
            <div class="col-md-4 col-sm-12">
                <div class="pricing-table" height=50px; width=50px;>
                    <div class="txt-blue fw-7">Basic Package</div>

                    <div class="pricing">
                        {{$services->bpack}}<sup>$</sup>
                    </div>

                    <ul class="list-unstyled icons-listing theme-orange">
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;"><i class="icofont-check"></i>One Routine Check Up</li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;"><i class="icofont-check"></i>3 Emergency Visits </li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;"><i class="icofont-check"></i>Free Maintainenance of 50$</li>

                    </ul>
                    </ul>
                    @if(Auth::guard('customer')->check());
                    <a href="{{route('services.basic_package',$services->id)}}" class="btn-theme bg-pink">Request Now</a>
                    @endif
                </div>
            </div>
            <!-- Pricing Table -->

            <!-- Pricing Table -->
            <div class="col-md-4 col-sm-12">
                <div class="pricing-table best-seller" height=50px; width=50px;>
                    <div class="txt-blue fw-7">Value Package</div>

                    <div class="pricing">
                    {{$services->vpack}}<sup>$</sup>
                    </div>
                    <ul class="list-unstyled icons-listing theme-orange ">
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;"><i class="icofont-check"></i>5 Routine Check Up</li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;"><i class="icofont-check"></i>10 Emergency Visits </li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;"><i class="icofont-check"></i>Free Maintainenance of 250$</li>

                    </ul>
                    @if(Auth::guard('customer')->check());
                    <a href="{{route('services.valued_package',$services->id)}}" class="btn-theme bg-pink">Request Now</a>
                    @endif
                </div>
            </div>
            <!-- Pricing Table -->

            <!-- Pricing Table -->
            <div class="col-md-4 col-sm-12">
                <div class="pricing-table" height=40px; width=50px;>
                    <div class="txt-blue fw-7">Unlimited Package</div>

                    <div class="pricing">
                    {{$services->upack}}<sup>$</sup>
                    </div>
                    <ul class="list-unstyled icons-listing theme-orange ">
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;"><i class="icofont-check"></i>One Emergency Check Up</li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;"><i class="icofont-check"></i>3 Emergency Visits </li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;"><i class="icofont-check"></i>Free Maintainenance of 500$</li>

                    </ul>
                    @if(Auth::guard('customer')->check());
                    <a href="{{route('services.unlimited_package',$services->id)}}" class="btn-theme bg-pink">Request Now</a>
                    @endif
                </div>
            </div>
            <!-- Pricing Table -->

        </div>

      
    </div>

    <!-- Carpentery -->

   


    <!-- Carpentery -->




</section>
<!-- Service Description End -->
</main>
@endsection