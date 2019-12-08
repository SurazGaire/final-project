 @extends('customer.master')
 @section('content')
 
 <!--Header -->


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



                             


                               @if(Auth::guard('customer')->check())
                               <!-- <a href="{{ route('customer.logout') }}" class="order-lg-last btn-theme bg-pink fw-6 ml-4">Logout</a> -->
                               <li class="nav-item dropdown no-arrow">
                                   <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                       <i class="fas fa-fw fa-user"></i>
                                       <span>{{ Auth::guard('customer')->user()->fname }}</span>
                                       <!-- Dropdown - User Information -->
                                       <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                           <a class="dropdown-item">
                                           <a class="dropdown-item" href="#">
                                               Activity Log
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
<main id="body-content">
   <div class="col-md-4 col-sm-12">
                <div class="pricing-table" height=50px; width=50px;>
                  
                    <div class="pricing">
                     Your Info
                    </div>

                    <ul class="list-unstyled icons-listing theme-orange">
                        <span style="font-size:large;"><li >{{$customer->name}}</li></span>
                        <span style="font-size:large;"><li >{{$customer->email}}</li></span>
                        <span style="font-size:large;"><li >{{$customer->address}}</li></span>
                        <span style="font-size:large;"><li >{{$customer->phone}}</li></span>
                       <li>  <button onclick="window.location='{{ route('customer.amc') }} '" class="btn btn-danger btn-sm">
                        @if(count($customer->package) > 0)
              
              @foreach($customer->package as $package)
              @if($package->package_name=='bpack')
              Basic Package
              @elseif($package->package_name=='vpack')
              Valued Package
              @else
              Unlimited Package
              @endif
              @endforeach
             @else
              No Package
              @endif
                        
                    
                           </button> </li>

                    </ul>
                    
                </div>
            </div>
</main>




   @endsection