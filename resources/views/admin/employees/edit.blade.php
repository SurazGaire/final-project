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
              <h1 class="h4 text-gray-900 mb-4">Edit Employee!</h1>
            </div>
            <form class="user" method="post" action="{{ route('employee.update',$emp->id) }}">
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
                <input type="text" class="form-control form-control-user" placeholder="Address" name="address"
                  value="{{ $emp->address }}">
              </div>
              <div class="form-group">
                <input type="number" class="form-control form-control-user" placeholder="Phone Number" name="phone"
                  value="{{ $emp->phone }}">
              </div>
              <div class="form-group">
                <select name="service" id="" class="form-control">
                  <option value="plumber">Plumber</option>
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