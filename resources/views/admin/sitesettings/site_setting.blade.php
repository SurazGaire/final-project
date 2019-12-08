@extends('admin.master')
@section('content')
<div class="container">
  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">

        <div class="col-lg-7">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Update Site!</h1>
            </div>
            <form class="user" method="POST" action="{{ route('sitesettings.update') }}">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="text" class="form-control form-control-user" enctype="multipart/form-data"
                  id="exampleFirstName" placeholder="Update Site Name" name='name' value="{{$settings->name}}">
              </div>
              <div class="form-group">
                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                  placeholder="Update Site Email" name="email" value="{{$settings->email}}">
              </div>
              <div class="form-group">
                <input type="text" value="{{$settings->address}}" class="form-control form-control-user" placeholder="Update address" name="address">
              </div>

              <div class="form-group">
                <input type="number" value="{{$settings->phone}}" class="form-control form-control-user" placeholder="Update phone number"
                  name="phone">
              </div>
              <div class="form-group">
                <input type="number" value="{{$settings->e_phone}}" class="form-control form-control-user" placeholder="Update emergency phone number"
                  name="e_phone">
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="" placeholder="Update Facebook"
                  name="facebook" value="{{$settings->facebook}}">
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" placeholder="Update twitter"
                 name="twitter" value="{{$settings->twitter}}">
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" placeholder="Update Instagram"
                  name="instagram" value="{{$settings->instagram}}">
              </div>

              <input type="submit" value="Update Site" class="btn btn-primary btn-user btn-block">
              <hr>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection