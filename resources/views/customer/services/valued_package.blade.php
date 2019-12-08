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

<div class="col-md-4 col-sm-12">
                <div class="pricing-table" height=50px; width=50px;>
                    <div class="txt-blue fw-7">Valued Package</div>

                    <div class="pricing">
                    <sup></sup>Rs {{$services->vpack}}
                    </div>

                    <ul class="list-unstyled icons-listing theme-orange">
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;"><i class="icofont-check"></i>One Routine Check Up</li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;"><i class="icofont-check"></i>3 Emergency Visits </li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;"><i class="icofont-check"></i>Free Maintainenance of 50$</li>

                    </ul>
                    <button id="payment-button" class="btn-theme bg-pink">Get Package</button>
                </div>
            </div>


@endsection      

@section('scripts')
<script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_ff941d9972514720850e0f75d6c17970",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "eventHandler": {
                onSuccess (payload) {
                    // hit merchant api for initiating verfication
                    console.log(payload);
                            $.ajax({
                                type: "POST",
                                url: "{{ route('payment.verification.valued_package') }}",
                                data:{
                                amount : payload.amount,
                                token : payload.token,
                                
                                },
                                success: function(res)
                                {
                                response = JSON.parse(res);
                                console.log(response);
                                $.ajax({
                                    type: "POST",
                                    url : "{{ route('order.make.valued_package') }}",
                                    data: {
                                        response : response,
                                        service_id: {{ $services->id }}
                                    },
                                    success:function(res){
                                        console.log(res);
                                    },
                                    error:function(res){
                                        console.log(res);
                                    }
                                })
                                },
                                error: function(error)
                                {
                                console.log(error);
                                },
                                })
                                },
                },
                onError (error) {
                    console.log(error);
                },
                onClose () {
                    console.log('widget is closing');
                }
            };


        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function () {
            checkout.show({amount:  {{ $services->vpack }}*100});
        }
    </script>

@endsection


