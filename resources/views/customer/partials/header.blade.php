   <!--Header -->


   <header class="header-2" style="padding-top:5px;">


       <div class="container rounded-bottom">
           <!-- Top Bar Start -->
           <div class="top-bar">
               <div class="row align-items-center">
                   <!-- <div class="col">
                        Your Courteous Repairing Professionals                        
                    </div> -->
                   <div class="col-auto align-items-center d-flex">
                       <span class="light-social-icons order-lg-first">
                           <a href="#"><i class="icofont-twitter"></i></a>
                           <a href="{{$settings->facebook}}"><i class="icofont-facebook"></i></a>
                           <a href="#"><i class="icofont-pinterest"></i></a>
                           <a href="{{$settings->instagram}}"><i class="icofont-instagram"></i></a>
                       </span>
                       <span class="order-lg-last d-flex ml-auto">
                           <a class="ml-3" href="#" id="search_home"><i class="icofont-search"></i></a>
                       </span>
                   </div>
               </div>

           </div>
           <!-- Top Bar End -->

           <!-- Main Navigation Start -->
           <div class="header-fixed">
               <div class="container p-0">
                   <nav class="navbar navbar-expand-lg btco-hover-menu">
                       <!-- <a class="navbar-brand rounded-bottom light-bg" href="index.html">
                           <img src="{{ URL::to('/')}}/public/customer/images/logo_light_pink.png" alt="">
                       </a> -->
                       <!-- Topbar Request Quote Start -->
                       @if(Auth::guard('customer')->check())
                       <a href="{{ route('request_service') }}" class="order-lg-last btn-theme bg-pink fw-6 ml-4">SCHEDULE SERVICE</a>
                       @endif

                       <!-- Toggle Button Start -->
                       <button class="navbar-toggler x collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <!-- Toggle Button End -->

                       <!-- Topbar Request Quote End -->

                       <div class="collapse navbar-collapse mainmenu" id="navbarCollapse" data-hover="dropdown">
                           <ul class="navbar-nav ml-auto">
                               <li class="nav-item dropdown">
                                   <a class="nav-link" href="{{route('/')}}">Home</a>
                               </li>



                               </li>
                               <li class="nav-item  dropdown">
                                   <a class="nav-link" href="{{route('customer.services')}}">Services </a>

                               </li>
                               @if(!Auth::guard('customer')->check())
                               <li class="nav-item  dropdown">
                                   <a class="nav-link" href="{{route('get_a_job')}}">Want a job?</a>
                               </li>
                               @endif

                               <li class="nav-item  dropdown">
                                   <a class="nav-link" href="{{route('customer.aboutus')}}">About Us</a>
                               </li>
                               <li class="nav-item  dropdown">
                                   <a class="nav-link" href="{{route('customer.contact_us')}}">Contact Us</a>
                               </li>

                               <li class="nav-item  dropdown">
                                   <a class="nav-link" href="{{route('customer.amc')}}">AMC </a>

                               </li>


                               @if(!Auth::guard('customer')->check())
                               <li class="nav-item  dropdown">
                                   <a class="nav-link" href="{{route('customer.login')}}">Login</a>
                               </li>
                               @endif


                               @if(Auth::guard('customer')->check())
                               <!-- <a href="{{ route('customer.logout') }}" class="order-lg-last btn-theme bg-pink fw-6 ml-4">Logout</a> -->
                               <li class="nav-item dropdown no-arrow">
                                   <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                       <i class="fas fa-fw fa-user"></i>
                                       <span>{{ Auth::guard('customer')->user()->fname }}</span>
                                       <!-- Dropdown - User Information -->
                                       <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                       <a class="dropdown-item" href="{{route('customer.profile')}}">
                                               Profile
                                           </a>
                                           <a class="dropdown-item" href="{{route('customer.request_log')}}">
                                               Request log
                                           </a>
                                          

                                           <a class="dropdown-item" href="{{ route('customer.logout') }}">
                                               <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                               Logout
                                           </a>
                                       </div>
                               </li>
                               @endif



                               <!-- Main Navigation End -->
                       </div>
                   </nav>
               </div>
           </div>
           <!-- Main Navigation End -->
       </div>
   </header>

   <!--header-->