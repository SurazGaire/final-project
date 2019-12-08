@extends('customer.master')
@section('content')
@include('customer.partials.header')

<div class="slider bg-navy-blue bg-fixed pos-rel breadcrumbs-page" style="padding-bottom:25px;">
  <div class="bg-overlay black opacity-60"></div>
  <div class="container">
    <h1>Login</h1>
  </div>
</div>

<main id="body-content">

  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">

          <div class="col-lg-8 offset-2">
            <div class="p-5">
              <div class="text-center">

                <div class="container">
                  <h1>Customer</h1>
                </div>
              </div>
              @include('includes.flash_messages')
              <form class="user" method="POST" action="{{ route('customer.validate') }}">
                {{ csrf_field() }}
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail" placeholder="Enter Email Address...">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Password">
                </div>
                <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                              <input type="checkbox" class="custom-control-input" id="customCheck">
                              <label class="custom-control-label" for="customCheck">Remember Me</label>
                            </div>
                          </div> 
                <input type="submit" value="Login" class="btn btn-primary btn-block">
                <hr>
                <a href="{{route('customer.register')}}" class="btn btn-primary btn-user btn-block">
                  Register
                </a>

              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>

            </div>
          </div>
        </div>
      </div>


    </div>
  </div>

</main>
@include('customer.partials.footer')
@endsection