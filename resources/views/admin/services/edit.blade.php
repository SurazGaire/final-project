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
              <h1 class="h4 text-gray-900 mb-4">Edit Service!</h1>
            </div>
            <form class="user" method="post" enctype="multipart/form-data" action="{{ route('service.update',$ser->id) }} ">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="exampleServiceName"
                  placeholder="Employee Name" name='sname' value="{{ $ser->sname }}">
              </div>
              <label for="desc">Describe service</label>
              <div class="form-group">
                <textarea name="desc" rows="5" class="form-control">{{ $ser->desc }}</textarea>
              </div>
              <label for="image">Upload an Image</label>
              <div class="form-group">
                <input type="file"   name="image">
              </div>

              <label for="bpack">Basic Package</label>
                  <input type="text" id="bpack" class="form-control form-control-user" value="{{$ser->bpack}}" name="bpack" >
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                   
                   <label for="vpack">Value Package</label>
                 <input type="text" id="vpack" class="form-control form-control-user" value="{{$ser->vpack}}" name="vpack" >
               </div>
                 <div class="col-sm-6 mb-3 mb-sm-0">
                   
                   <label for="upack">Unlimited Package</label>
                 <input type="text" id="upack" class="form-control form-control-user" value="{{$ser->upack}}" name="upack" >
               </div>

              <input type="submit" value="Update Service Details" class="btn btn-primary btn-user btn-block">
              <hr>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection