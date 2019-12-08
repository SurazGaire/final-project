<!--Footer-->
<footer class="bg-scroll bg-2 pos-rel footer-2 bg-5">
        <!-- Footer Contact Start -->
        <div class="footer-contact-overlay" style="margin-top:50px;>
            <div class="container">
                <div class="row align-items-center">
                        <div class="col-sm-6 col-md-3">
                            <div class="contacts-details-simple">
                                <h3>Follow Us</h3>
                                <div class="social-round">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href="{{$settings->facebook}}"><i class="icofont-facebook"></i></a>
                                    <a href="#"><i class="icofont-pinterest"></i></a>
                                    <a href="{{$settings->instagram}}"><i class="icofont-instagram"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="contacts-details-simple">
                                <h3>Our Address</h3>
                               {{$settings->address}} <br> Nepal
                            </div>                            
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="contacts-details-simple">
                                <h3>Say Hello</h3>
                                <strong><a href="#">{{$settings->email}}</a></strong>
                            </div>                            
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="contacts-details-simple">
                                <h3>Emergency Call</h3>
                                {{$settings->phone}} <br>

                            </div>                            
                        </div>                   
                        

                    </div>
            </div>
        </div>
        <!-- Footer Contact End -->
        <div class="bg-overlay black opacity-80"></div>

        
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div>
                        <div class="mb-4">
                            <!-- <a href="index.html"><img src="{{ URL::to('/')}}/public/customer/images/logo_dark.png" alt=""></a> -->
                        </div>
                        <p class="mb-4"> </p>

                        <div class="footer-heading">
                            Payment Methods
                        </div>


                        <div class="mb-4">
                            <a href="#"><img src="{{ URL::to('/')}}/public/customer/images/payment_1.png" alt=""></a>
                            <a href="#"><img src="{{ URL::to('/')}}/public/customer/images/payment_2.png" alt=""></a>
                            <a href="#"><img src="{{ URL::to('/')}}/public/customer/images/payment_3.png" alt=""></a>
                            <a href="#"><img src="{{ URL::to('/')}}/public/customer/images/payment_4.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="wide-tb-100 pt-0 px-5 pr-0 pb-0 footer-md-space">
                        <div class="row">
                            <!-- Quick Links Start -->
                            <div class="col-sm-12 col-md-4">

                            </div>
                            <!-- Quick Links End -->

                            <!-- Top Services Start -->
                            <div class="col-sm-12 col-md-4">
                                <!-- <div class="footer-heading">
                                    Top Services
                                </div> -->

                                <!-- <div class="quick-links">
                                    <ul class="list-unstyled icons-listing mb-0">
                                        <li><a href="#"><i class="icofont-arrow-right"></i> Water Heater</a></li>
                                        <li><a href="#"><i class="icofont-arrow-right"></i> Frozen Pipes</a></li>
                                        <li><a href="#"><i class="icofont-arrow-right"></i> Clogged Drains</a></li>
                                        <li><a href="#"><i class="icofont-arrow-right"></i> Leaks</a></li>
                                        <li><a href="#"><i class="icofont-arrow-right"></i> Sewage Backups</a></li>
                                        <li><a href="#"><i class="icofont-arrow-right"></i> Drain & Sewer</a></li>
                                        <li><a href="#"><i class="icofont-arrow-right"></i> Damaged Sewer Lines</a></li>
                                    </ul>
                                </div> -->
                            </div>
                            <!-- Top Services End -->

                            <!-- Footer Timing Start -->
                            <div class="col-sm-12 col-md-8">
                                <div class="footer-heading">
                                    Working Hours 
                                </div>

                                <div class="footer-timing">
                                    <ul class="list-unstyled">
                                        <li class="justify-content-between d-flex">
                                            <span>{{$time_desc->weekdays}}</span>
                                            <span>{{$time_desc->weekdays_time}}</span>
                                        </li>
                                        <li class="justify-content-between d-flex">
                                            <span>{{$time_desc->weekends}}</span>
                                            <span>{{$time_desc->weekends_time}}</span>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <!-- Footer Timing End -->
                        </div>                        
                    </div>
                </div>

            </div>
        </div>

        <div class="copyright-wrap transparent">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        © Copyright <span>Hamro Marmat Sewa</span> 2019. All right reserved Created by <a href="#" rel="nofollow">Suraz and Group</a>
                    </div>
                </div>
                
            </div>
        </div>
        
    </footer>
<!--Footer-->