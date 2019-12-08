@extends('admin.master')
@section('content')


<div class="card shadow mb-4">
  <div class="card-header py-3">
    <a class="btn btn-primary float-right mr-3 mb-2" href="{{ route('images.create') }}">Add Images</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" bgcolor="#DCDCDC" >
        <thead bgcolor="#C0C0C0">
          <tr>
            <th>Id</th>
            <th>Description</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
       
        <tbody>
          @foreach($gallery as $gal)
          <tr>
            <td>{{ $gal->id }}</td>
            <td>{{ $gal->desc }}</td>
            <td><img src="{{ asset ($gal->image) }}"  height="70px" alt=""></td>
            <td><a href="{{ route('images.edit',$gal->id) }}"><i class="fa fa-edit"></i></a > 
            <a href="{{ route('images.delete',$gal->id) }}"><i class="fa fa-trash"></i></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  @endsection