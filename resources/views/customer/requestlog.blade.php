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

<div class="card shadow mb-4">
 
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" bgcolor="#DCDCDC">
                <thead bgcolor="#C0C0C0">
                    <tr>
                        <th>User Info</th>
                        <th>Service Name</th>
                        <th>Time</th>
                        <th>Address</th>

                        <th>Employee Details</th>
                        <th>Action</th>
                        <th>Rate</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($requested_services as $requested_service)
                    <tr>
                        <td>Name:{{ $requested_service->user->fname }}
                            <br>
                            Email: {{ $requested_service->user->email }}
                            <br>
                            Phone: {{ $requested_service->user->phone }}
                        </td>
                        <td>{{ $requested_service->service_name }}</td>
                        <td>{{ $requested_service->time }}</td>
                        <td>{{ $requested_service->address }}</td>




                        <td>@if($requested_service->status == 'Ongoing' || $requested_service->status == 'Completed')

                            Name:{{ $requested_service->employee->fname }}
                            <br>
                            Email: {{ $requested_service->employee->email }}
                            <br>
                            Phone: {{ $requested_service->employee->phone }}

                            @else
                            No Employee Assigned
                            @endif
                        </td>



                        <td>
                            @if($requested_service->status == 'Ongoing')
                            Ongoing
                            @endif
                            @if($requested_service->status == 'Completed')
                            Task Completed
                            @if($requested_service->rate)
                            <br>
                            {{'You have Rated:'}}
                            {{ $requested_service->rate}}
                            @endif
                            @endif



                            @if($requested_service->status == 'Available')
                            Remain to Assign
                            @endif
                        </td>
                        <td>
                            <form method="POST" action="{{route('update_rate')}}">
                                @csrf
                                <input type="hidden" name="requested_service_id" value="{{$requested_service->id}}">
                                <select name="rate">
                                    @for($i=5;$i>0;$i--)
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                                <input type="submit" value="submit">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
