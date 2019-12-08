@extends('customer.master')
@section('style')
<style>
    .pricing-table {
        height=100px;
        width=50px;
    }
</style>
@endsection
@section('content')
@include('customer.partials.header')

<div class="slider bg-navy-blue bg-fixed pos-rel breadcrumbs-page" style="padding-bottom:25px; padding-top:120px;">
    <div class="bg-overlay black opacity-60"></div>
    <div class="container">
        <h1>Annual Maintainenance Cost</h1>
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






<!-- Our Pricing Section Start -->
<section class="wide-tb-100 bg-white">
    <div class="container">
    <div class="txt-blue fw-7">Minimum Chagge For Any Service is Rs 100</div>
        @foreach($services as $ser)
        

        <div class="display-head">
            <span style="font-size:1.5rem;">{{$ser->sname}}</span>
        </div>
        <div class="row">

            <!-- Pricing Table -->
            <div class="col-md-4 col-sm-12">
                <div class="pricing-table" height=50px; width=50px;>
                    <div class="txt-blue fw-7">Basic Package</div>

                    <div class="pricing">
                    <sup>Rs</sup> {{$ser->bpack}}
                    </div>

                    <ul class="list-unstyled icons-listing theme-orange">
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;"><i class="icofont-check"></i>One Routine Check Up</li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;"><i class="icofont-check"></i>3 Emergency Visits </li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;"><i class="icofont-check"></i>Free Maintainenance of 50$</li>

                    </ul>
                    @if(Auth::guard('customer')->check());
                    <a href="{{route('services.basic_package',$ser->id)}}" class="btn-theme bg-pink">Request Now</a>
                    @endif
                </div>
            </div>
            <!-- Pricing Table -->

            <!-- Pricing Table -->
            <div class="col-md-4 col-sm-12">
                <div class="pricing-table best-seller" height=50px; width=50px;>
                    <div class="txt-blue fw-7">Value Package</div>

                    <div class="pricing">
                    <sup>Rs</sup>{{$ser->vpack}}
                    </div>
                    <ul class="list-unstyled icons-listing theme-orange ">
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;"><i class="icofont-check"></i>5 Routine Check Up</li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;"><i class="icofont-check"></i>10 Emergency Visits </li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;"><i class="icofont-check"></i>Free Maintainenance of 250$</li>

                    </ul>
                    @if(Auth::guard('customer')->check());
                    <a href="{{route('services.valued_package',$ser->id)}}" class="btn-theme bg-pink">Request Now</a>
                    @endif
                </div>
            </div>
            <!-- Pricing Table -->

            <!-- Pricing Table -->
            <div class="col-md-4 col-sm-12">
                <div class="pricing-table" height=40px; width=50px;>
                    <div class="txt-blue fw-7">Unlimited Package</div>

                    <div class="pricing">
                    <sup>Rs</sup>{{$ser->upack}}
                    </div>
                    <ul class="list-unstyled icons-listing theme-orange ">
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;"><i class="icofont-check"></i>One Emergency Check Up</li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;"><i class="icofont-check"></i>3 Emergency Visits </li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;"><i class="icofont-check"></i>Free Maintainenance of 500$</li>

                    </ul>

                    @if(Auth::guard('customer')->check());
                    <a href="{{route('services.unlimited_package',$ser->id)}}" class="btn-theme bg-pink">Request Now</a>
                     @endif
                </div>
            </div>
            <!-- Pricing Table -->

        </div>

        @endforeach
    </div>

    <!-- Carpentery -->

   


    <!-- Carpentery -->




</section>
<!-- Our Pricing Section End -->



@include('customer.partials.footer')
@endsection

