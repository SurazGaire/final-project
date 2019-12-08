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
              <h1 class="h4 text-gray-900 mb-4">Edit Your Details!</h1>
            </div>
            <form class="user" method="POST" action="{{ route('update_employee_details',$emp->id) }}">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="exampleFirstName"
                  placeholder="Employee Name" name='fname' value="{{ $emp->fname }}">
              </div>
              <div class="form-group">
                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                  placeholder="Email Address" name="email" value="{{ $emp->email }}">
              </div>
              <div class="form-group">
              <select name="address" class="form-control">
                @foreach($address as $add)
                 <option value="{{$add->address}}">{{$add->address}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <input type="number" class="form-control form-control-user" placeholder="Phone Number" name="phone"
                  value="{{ $emp->phone }}">
              </div>
              <div class="form-group">
                <select name="service" id="" class="form-control">
                @foreach($services as $service)
                 <option value="{{$service->sname}}">{{$service->sname}}</option>
                  @endforeach
                </select>
                </select>
              </div>
              <label for="image">Upload an Image</label>
              <div class="form-group">
                <input type="file" name="image">
              </div>
              <input type="submit" value="Update Employee Details" class="btn btn-primary btn-user btn-block">
              <hr>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection