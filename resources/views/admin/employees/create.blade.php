@extends('admin.master')
@section('style')
<style>
.error{
  font-size:1rem;
  color:red;

}
</style>
@endsection
@section('content')


<div class="container">
  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">

        <div class="col-lg-7">
          <div class="p-5">
            <div class="text-center">
              <!-- @include('includes.errors') -->
              <h1 class="h4 text-gray-900 mb-4">Add an Employee!</h1>
            </div>
            <form class="user" method="POST" enctype="multipart/form-data" action="{{ route('employee.store') }}" id="updatePasswordForm">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="text" class="form-control form-control-user"  id="exampleFirstName" placeholder="Employee Name" name='fname' required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" name="email" required>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" id="newPassword" class="form-control form-control-user" placeholder="Password" name="password" >
                </div>
                <div class="col-sm-6">
                  <input type="password" class="form-control form-control-user" placeholder="Confirm Password" name="confirm_password">
                </div>
              </div>

              <div class="form-group">
                <input type="number" class="form-control form-control-user" placeholder="Phone Number" name="phone" required>
              </div>

              <div class="form-group">
                <select name="address" id="" class="form-control">
                  @foreach($address as $add)
                  <option value="{{$add->address}}">{{ $add->address }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <select name="service" id="" class="form-control">
                @foreach($services as $service)
                  <option value="{{$service -> sname}}">{{ $service->sname }}</option>
                  @endforeach
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

@section('scripts')

<script src="{{URL::to('/')}}/public/admin/js/jquery.validate.js"></script>
<script src="{{URL::to('/')}}/public/admin/js/jquery.passtrength.js"></script>

<script>

    $().ready(function() {
        $("#updatePasswordForm").validate({
          errorClass: 'error',
            rules: {
                password: {
                    required: true,
                    minlength: 8,
                },
                confirm_password: {
                    required: true,
                    equalTo: "#newPassword",
                    minlength: 8,
                },
                phone:{
                  minlength:10,
                }
            },
            messages: {
                password: {
                    required: 'Please enter your new password',
                    minlength: 'The password must be at least 8 character long',
                },
                confirm_password: {
                    required: 'Please re-enter your password',
                    minlength: 'The password must be at least 8 character long',
                    equalTo: 'The password and confirm password field must be equal',
                },

            }
        });

        $('#newPassword').passtrength({
            minChars: 8,
            passwordToggle: true,
            tooltip: true,
           
        });
    });
</script>



@endsection