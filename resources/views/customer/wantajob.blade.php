@extends('customer.master')
@section('content')
@include('customer.partials.header')

<div class="slider bg-navy-blue bg-fixed pos-rel breadcrumbs-page" style="padding-bottom:25px; padding-top:120px;">
    <div class="bg-overlay black opacity-60"></div>
    <div class="container">
        <h1>Get a Job</h1>
    </div>
</div>

<main id="body-content">
    <section class="sidebar-overflow">
        <div class="wide-tb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">



                        /


                        <div class="row">
                            <!-- Main Heading Start -->
                            <div class="col-sm-12">
                                <div class="heading-wrap d-flex align-items-center">
                                    <div class="heading-main">
                                        <span>How it Works</span>
                                        Hiring Procedure
                                    </div>
                                </div>
                            </div>
                            <!-- Main Heading End -->

                            <!--Working Procedure of Employee Registration-->
                            <div class="col-md-4 col-sm-6">
                                <div class="theme-collapse capsules">
                                    <!-- Toggle Links 1 -->
                                    <div class="toggle">
                                        <i class=""></i>1. Register
                                    </div>
                                    <!-- Toggle Links 2 -->
                                    <div class="toggle">
                                        <i class=""></i> 2.Admin verifies the employee
                                    </div>
                                    <!-- Toggle Links 2 -->

                                    <!-- Toggle Links 3 -->
                                    <div class="toggle">
                                        <i class=""></i> 3.Employee start giving services
                                    </div>
                                    <!-- Toggle Links 3 -->

                                </div>
                            </div>


                            <!--Working Procedure of Employee Registration-->

                            <!--How WEbsite Works-->
                            <div class="col-sm-12 col-md-4  ">
                                <div class="heading-wrap d-flex align-items-center">
                                    <div class="heading-main">
                                        <span>How it Works</span>
                                       How it Works
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="theme-collapse capsules">
                                    <!-- Toggle Links 1 -->
                                    <div class="toggle">
                                        <i class=""></i>1. Login
                                    </div>
                                    <!-- Toggle Links 2 -->
                                    <div class="toggle">
                                        <i class=""></i> 2.Request for the service
                                    </div>
                                    <!-- Toggle Links 2 -->

                                    <!-- Toggle Links 3 -->
                                  
                                    <div class="toggle">
                                        <i class=""></i> 3.System Inspection
                                    </div>

                                    <div class="toggle">
                                        <i class=""></i> 4.System Inspection
                                    </div>

                                    <div class="toggle">
                                        <i class=""></i> 5.Pay Online (Optional)
                                    </div>

                                    <div class="toggle">
                                        <i class=""></i> 6.Sit Back and Relax
                                    </div>


                                    <!-- Toggle Links 3 -->

                                </div>
                            </div>



                            <!--How WEbsite Works-->



                        </div>
                        <div class="callout-img d-md-flex  mt-5">
                            <div class="mr-auto head-text">Do you want to register? <br>Register Yourself!!</div>
                            <a href="{{route('employee.register')}}" class="btn btn-theme bg-pink">Request for registration</a>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>
</main>





@include('customer.partials.footer')
@endsection