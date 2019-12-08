@extends('customer.master')
@section('content')

@include('customer.partials.header')


<!-- Page loader Start -->
<div id="pageloader">
    <div class="loader-item">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>
</div>
<!-- Page loader End -->
<!-- Fullscreen Slider Start -->
<div class="slider bg-light-gray">
    <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
        <div id="rev_slider_1078_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
            <ul>
               
            @foreach($slideDesc as $slide)
                <li data-index="rs-82" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeOut" data-easeout="Power4.easeOut" data-masterspeed="1000" data-thumb="../../assets/images/waterfal-100x50.html" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 50px 0px transparent">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset($slide->image)}}" alt="" data-bgposition="center center" data-kenburns="off" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 11
                    <div class="tp-caption medium_light_white tp-resizeme"  data-blendmode=”color-dodge“ data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','-10','-10']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":500,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-fontsize="['28','28','28','28']" data-lineheight="['34','34','34','50']"></div> -->

                    <!-- LAYER NR. 12
                    <div class="tp-caption tp-resizeme small_light_white " id="slide-82-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['60','60','60','60']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":600,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-fontsize="['16','16','16','13']" data-lineheight="['30','30','30','20']"></div> -->

                    <!-- LAYER NR. 12 -->
                    <!-- <div class="tp-caption tp-resizeme btn-theme bg-pink rev-btn" id="slide-82-layer-5" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['140','140','140','140']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":750,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[30,30,30,30]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[30,30,30,30]" data-fontsize="['14','14','14','14']" data-lineheight="['16','16','16','16']">Learn More <i class="icofont-rounded-right"></i></div> -->
                 
                </li>
                
                @endforeach
               
            </ul>
            <div class="tp-bannertimer tp-bottom" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
        </div>
    </div>
</div>
<!-- Fullscreen Slider End -->



<main id="body-content">

    <!-- Services Slider Start -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12">
                    <div class="callout-banner bg-sky-blue">
                        <div class="d-md-inline-flex justify-content-around w-100">
                            <div class="order-md-2">
                                <i class="icofont-phone"></i>
                            </div>
                            <div class="text-md-right order-md-1">
                                <span>Call Office</span>
                                {{$settings->phone}}
                            </div>

                            <div class="order-md-3">
                                <span>24/7 Emergency Service</span>
                                {{$settings->e_phone}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Slider End -->

    <!-- Who We Are Section Start -->
    <section class="wide-tb-100 bg-light-gray">
        <div class="container">
            <div class="row">
                <!-- Main Heading Start -->
                <div class="col-sm-12">
                    <div class="heading-wrap d-flex align-items-center">
                        <div class="heading-main">
                            <span>What we offer</span>
                            Our Services
                        </div>

                    </div>
                </div>
                <!-- Main Heading End -->
                @foreach($services as $service)
                <div class="col-sm-4">
                    <div class="card" style="width: 20rem; height: 20rem;">
                        <img class="card-img-top" src="{{ asset ($service->image) }}" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title"><a href="{{route('services.service_details',$service->id)}}">{{$service->sname}}</a></h5>

                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>

                    <br>
                </div>

                @endforeach
            </div>
        </div>
        </div>
    </section>
    <!-- Who We Are Section End -->

    <!-- Video Description Start -->
    <section class="wide-tb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <!-- Heading Start -->
                    <div class="display-head">

                        {{$service_desc->title}}


                    </div>
                    <div class="display-lead txt-black">
                        {{$service_desc->desc}}
                    </div>
                    <!-- Heading End -->

                    <p class="my-4"></p>

                    <ul class="list-unstyled icons-listing theme-orange w-half mb-0">
                        @foreach($services as $service)
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;"><i class="icofont-check"></i>{{$service->sname}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-5 col-sm-12 offset-md-1 order-md-first">
                    <img src=" {{ asset ( $service_desc -> image ) }} " height="250px" width="300px">
                </div>
            </div>

        </div>
        </div>
    </section>
    <!-- Video Description Start -->

    <!-- Project Gallery Start -->
    <section class="wide-tb-100 bg-sky-blue bg-fixed splash-bg pos-rel">
        <div class="container">
            <div class="row">
                <!-- Main Heading Start -->
                <div class="col-sm-12">
                    <div class="heading-wrap d-flex align-items-center white-text">
                        <div class="heading-main">
                            Gallery
                        </div>
                    </div>
                </div>
                <!-- Main Heading End -->

            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-sm-12">
                    <div class="owl-carousel owl-theme center-round" id="home-gallery">
                        @foreach($galleries as $gallery)
                        <!-- Home Services Item -->
                        <div class="item">
                            <img src="{{ asset( $gallery -> image ) }}" alt="">
                        </div>
                        @endforeach
                        <!-- Home Services Item -->


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Project Gallery End -->

    <!-- Our Quality Section Start -->
    <section class="wide-tb-100 bg-white">
        <div class="container">
            <div class="row">
                <!-- Main Heading Start -->
                <div class="col-sm-12">
                    <div class="heading-wrap d-flex align-items-center">
                        <div class="heading-main">
                            <span>What To Expect</span>
                            Our Quality
                        </div>
                        <div class="sub-head-text">
                        </div>
                    </div>
                </div>
                <!-- Main Heading End -->

                <!-- Quality Box Start -->
                <div class="col-md-4 col-12">
                    <div class="icon-box-3 bg-light-gray">
                        <i class="icofont-badge"></i>
                        <h3>High Quality Service</h3>
                        <p></p>
                    </div>
                </div>
                <!-- Quality Box End -->

                <!-- Quality Box Start -->
                <div class="col-md-4 col-12">
                    <div class="icon-box-3 bg-light-gray">
                        <i class="icofont-dollar"></i>
                        <h3>Competitive Rates</h3>
                        <p></p>
                    </div>
                </div>
                <!-- Quality Box End -->

                <!-- Quality Box Start -->
                <div class="col-md-4 col-12">
                    <div class="icon-box-3 bg-light-gray">
                        <i class="icofont-safety-hat"></i>
                        <h3>Qualified Agents</h3>
                        <p></p>
                    </div>
                </div>
                <!-- Quality Box End -->

            </div>
        </div>
    </section>
    <!-- Our Quality Section End -->

    <!-- Callouts Start -->
    <section class="wide-tb-100 bg-scroll text-center pos-rel bg-6 txt-white callout-style-1">
        <div class="bg-overlay black opacity-50"></div>
        <div class="container">
            <div class="row wide-tb-60">
                <div class="col-sm-12">
                    <p>If you need any emergency service, simply call our 24 hour emergency number</p>
                    <div class="display-head txt-white">
                        Our Reliable Emergency <br class="d-sm-none d-md-block">Service with Fair rateslity
                    </div>
                    <div class="btn btn-theme bg-pink large">{{$settings->e_phone}}</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Callouts End -->

    <!-- Our Team Section Start -->
  
    <!-- Our Team Section End -->

    <!-- Our Blog Section Start -->

        <!-- Our Blog Section End -->

        <!-- Our Customer Section Start -->
        <section class="wide-tb-100 bg-navy-blue bg-fixed splash-bg pos-rel">
            <div class="bg-overlay blue opacity-80"></div>
            <div class="container">
                <div class="row">
                    <!-- Main Heading Start -->
                    <div class="col-sm-12">
                        <div class="heading-wrap d-flex align-items-center light">
                            <div class="heading-main mx-auto">
                                <span>What Our</span>
                                Customer Say’s
                            </div>
                        </div>
                    </div>
                    <!-- Main Heading End -->

                    <div class="col-md-8 offset-md-2">
                        <div class="owl-carousel owl-theme" id="home-client-single">

                            <!-- Client Testimonials Slider Item -->
                            <div class="item">
                                <div class="client-testimonial-single">
                                    <i class="icofont-quote-left"></i>
                                    <p>We have used intelligent plumbing twice for emergencies. I would highly recommend this plumbing company since we've had such a wonderful luck with them and they have always been pleasant nice and efficient.</p>
                                    <img src="{{ URL::to('/')}}/public/customer/images/team_1.jpg" alt="">
                                    <h3>Gregory Rondeau <span>Designer</span></h3>
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
        <!-- Our Blog Section End -->



        <section class="w-100 map-frame">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"></iframe>
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