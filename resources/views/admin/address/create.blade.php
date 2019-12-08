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
              <h1 class="h4 text-gray-900 mb-4">Add Services!!</h1>
            </div>
            <form class="user" method="post" action="{{route('address.store') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <label for="desc" class="ml-3"><b>Add Address</b></label>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="exampleFirstName"
                  placeholder="Enter new Address" name='address' required>
              </div>
          
              <input type="submit" value="Add new Address" class="btn btn-primary btn-user btn-block">
              <hr>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection