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
              <h1 class="h4 text-gray-900 mb-4">Add Desceprition!!</h1>
            </div>
            <form class="user" method="post" action="{{route('slideDesc.store') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <label for="desc">Title</label>
              <div class="form-group">
               <input type="text" class="form-control" name="title" placeholder="Insert Title">
              <label for="desc">Description</label>
              <div class="form-group">
                <textarea name="desc" rows="5" cols="30" class="form-control" required></textarea>
              </div>
              <label for="image">Upload an Image</label>
              <div class="form-group">
                <input type="file" name="image" required>
              </div>
              <input type="submit" value="Add Description" class="btn btn-primary btn-user btn-block">
              <hr>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection