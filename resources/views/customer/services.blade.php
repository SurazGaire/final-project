@extends('customer.master')
@section('content')
@include('customer.partials.header')

<!-- Page Breadcrumbs Start -->
<div class="slider bg-navy-blue bg-fixed pos-rel breadcrumbs-page" style="padding-bottom:25px; padding-top:120px;">
    <div class="bg-overlay black opacity-60"></div>
    <div class="container">
        <h1>Services</h1>
        <!-- <div class="breadcrumbs-description">
                Molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.
            </div>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#"><i class="icofont-ui-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>   -->
    </div>
</div>
<!-- Page Breadcrumbs End -->

<!-- Main Body Content Start -->
<main id="body-content">
    <section class="sidebar-overflow">
        <div class="wide-tb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <!-- <div class="single-content-gap"> -->
                        <!-- <div class="about-img mt-0">
                                    <img src="{{ URL::to('/')}}/public/customer/images/services_img.jpg" alt="">
                                </div> -->





                        <div class="row">
                            <!-- Main Heading Start -->
                            <div class="col-sm-12">
                                <div class="heading-wrap d-flex align-items-center">
                                    <div class="heading-main">
                                        <span>What we Can Do</span>
                                        Our Services
                                    </div>
                                </div>
                            </div>
                            <!-- Main Heading End -->
                            @foreach($services as $service)
                            <!-- Services Items Start -->
                            <div class="col-md-6">
                                <div class="service-page-item">
                                    <img src="{{ asset ($service->image)}}" alt="">
                                    <h3><a href="{{route('services.service_details',$service->id)}}">{{$service->sname}}</a></h3>
                                

                                
                                </div>
                            </div>
                            <!-- Services Items End -->
                            @endforeach

                        </div>

                        <div class="callout-img d-md-flex align-items-center mt-5">
                            <div class="callout-plumbing-man">
                                <img src="{{ URL::to('/')}}/public/customer/images/callout_plumbing_man.png" alt="">
                            </div>
                            <div class="mr-auto head-text">Have a plumbing issue? <br>Contact our friendly team!</div>
                            @if(Auth::guard('customer')->check())
                            <a href="{{route('request_service')}}" class="btn btn-theme bg-pink">Schedule Service</a>
                            @else
                            <a href="{{route('customer.login')}}" class="btn btn-theme bg-pink">Schedule Service</a>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
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