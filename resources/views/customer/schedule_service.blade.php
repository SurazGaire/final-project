@extends('customer.master')
@section('content')
@include('customer.partials.header')


<!-- Page Breadcrumbs Start -->
<div class="slider bg-navy-blue bg-fixed pos-rel breadcrumbs-page">
    <div class="bg-overlay black opacity-60"></div>
    <div class="container">
        <h1>Request Service</h1>
    </div>
</div>
<!-- Page Breadcrumbs End -->

<!-- Main Body Content Start -->
<main id="body-content">
    <section class="sidebar-overflow">
        <div class="wide-tb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="single-content-gap">
                            <!-- Request Form Start -->
                            @include('includes.errors')
                            <form action="{{ route('request_service.store') }}" method="post" id="contactusForm" novalidate="novalidate" class="rounded-field gray-field cmxform">
                                {{ csrf_field() }}
                                <div class="col">
                                    <input type="hidden" name="form5" class="form-control" placeholder="Your Name" value="5" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName">Your Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" value="{{ $user->fname }}" disabled>
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="firstName">Address<span class="text-danger">*</span></label>
                                        <select name="address" id="" class="form-control">

                                            @foreach($address as $add)

                                            <option value="{{ $add->address }}">{{ $add->address }}</option>

                                            @endforeach
                                        </select>


                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                    <label for="email">Email<span class="text-danger">*</span></label>
                                        <input type="text" id="email" class="form-control" placeholder="" value="{{ $user->email }}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                    <label for="phone">Phone<span class="text-danger">*</span></label>
                                        <input type="text" name="phone5" name="phone" class="form-control" value="{{ $user->phone }}" disabled>
                                    </div>
                                </div>
                                <hr class="mb-4">
                                <fieldset>
                                    <h3 class="mb-3 h3-sm">Type of Service You are Interested<span class="text-danger">*</span></h3>
                                    <select name="service_name" id="" class="col-md-6">
                                        @foreach($services as $service)
                                        <option value="{{ $service->sname }}"><b>{{ $service->sname }}</b></option>
                                        @endforeach
                                    </select>

                                </fieldset>

                                <hr class="mb-4">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="Best_Time">Best Time<span class="text-danger">*</span></label>
                                        <select title="Please select any one" name="service_time" id="Best_Time" class="custom-select" aria-invalid="false" required>
                                            <option value="09am-12pm">09 AM - 12 PM</option>
                                            <option value="12pm-03pm">12 PM - 03 PM</option>
                                            <option value="03pm-06pm">03 PM - 06 PM</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Hear_About">Hear About Us<span class="text-danger">*</span></label>
                                        <select title="Please select any one" required name="hearAbout" id="Hear_About" class="custom-select" aria-invalid="false">
                                            
                                            <option value="Friends">Friends</option>
                                            <option value="Facebook">Facebook</option>
                                            <option value="Google">Google</option>
                                            <option value="Collegue">Collegue</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="col">
                                        <textarea rows="7" name="message" id="cment" placeholder="Describe your problem" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="form-row text-center">

                                    <button name="contactForm" id="contactForm" type="submit" class="form-btn mx-auto btn-theme bg-pink large">Submit Now</button>
                                </div>
                            </form>
                            <!-- Request Form End -->
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 sidebar-right">
                        <!-- Add Some Left Space -->
                        <aside class="sidebar-spacer row">

                            <!-- Sidebar Primary Start -->
                            <div class="sidebar-primary col-lg-12 col-md-6">
                                <!-- Search Widget Start -->
                                <div class="widget-wrap">
                                    <h3 class="h3-md fw-7 mb-4">Search</h3>
                                    <form class="flex-nowrap col ml-auto sidebar-search p-0">
                                        <input type="text" class="form-control" placeholder="Search …">
                                        <button type="submit" class="btn"><i class="icofont-search p-0"></i></button>
                                    </form>
                                </div>
                                <!-- Search Widget End -->

                                <!-- Recent Post Widget Start -->
                                
                                <!-- Recent Post Widget End -->

                                <!-- Sidebar Support Widget Start -->
                                <div class="widget-wrap text-center">
                                    <div class="emergency-service">
                                        <h3 class="h3-md fw-5 txt-orange mb-4 fw-6">Emergency Service</h3>
                                        <p>A team of professionals who are there when you need them, Just call.</p>
                                        <a  class="btn-theme bg-pink oval mt-3">{{$settings->e_phone}}</a>
                                    </div>
                                </div>
                                <!-- Sidebar Support Widget End -->
                            </div>
                            <!-- Sidebar Primary End -->

                            <!-- Sidebar Secondary Start -->
                            
                            <!-- Sidebar Secondary Start -->
                        </aside>
                        <!-- Add Some Left Space -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@include('customer.partials.footer')
@endsection