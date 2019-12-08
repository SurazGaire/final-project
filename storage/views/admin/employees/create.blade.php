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
                <h1 class="h4 text-gray-900 mb-4">Add an Employee!</h1>
              </div>
              <form class="user" method="POST" action="{{ route('employee.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" enctype="multipart/form-data" id="exampleFirstName" placeholder="Employee Name" name='fname'>
                  </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" name="email">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="" placeholder="Password" name="password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" placeholder="Connfirm Password" name="confirm_password">
                  </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"  placeholder="Address" name="address">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control form-control-user"  placeholder="Phone Number" name="phone">
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
                <input type="submit" value="Add Employee" class="btn btn-primary btn-user btn-block">
                <hr>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  @endsection