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
            <form class="user" method="post" action="{{ route('images.update',$gal->id) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <label for="desc">Describe service</label>
              <div class="form-group">
                <textarea name="desc" rows="5" class="form-control">{{ $gal->desc }}</textarea>
              </div>
              <label for="image">Upload an Image</label>
              <div class="form-group">
                <input type="file" name="image">
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