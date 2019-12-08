@extends('customer.master')
@section('content')
@include('customer.partials.header')

<div class="slider bg-navy-blue bg-fixed pos-rel breadcrumbs-page">
        <div class="bg-overlay black opacity-60"></div>
        <div class="container">
            <h1>Register!!</h1>
        </div>
    </div>

 <main id="body-content">

 <section id="customerregister">
  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">

          <div class="col-lg-8 offset-2">
            <div class="p-5">
              <div class="text-center">
                <h1>Customer</h1>
              </div>
              @include('includes.errors')
              <form class="user" method="POST" action="{{ route('customer.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" enctype="multipart/form-data"
                    id="exampleFirstName" placeholder="Full Name" name='fname' required>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="Email Address" name="email" required>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="" placeholder="Password"
                      name="password" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" placeholder="Confirm Password"
                      name="confirm_password">
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" placeholder="Address" name="address">
                </div>
                <div class="form-group">
                  <input type="number" class="form-control form-control-user" placeholder="Phone Number" name="phone"
                    required>
                </div>
                <input type="submit" value="Register as Customer" class="btn btn-primary btn-user btn-block">
                <hr>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</section>




</main>





@include('customer.partials.footer')
@endsection