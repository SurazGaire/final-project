@extends('admin.master')
@section('content')


<div class="card shadow mb-4">
  <div class="card-header py-3">
    <a class="btn btn-primary float-right mr-3 mb-2" href="{{ route('service.create') }}">Add a Service</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" bgcolor="#DCDCDC" >
        <thead bgcolor="#C0C0C0">
          <tr>
            <th>Id</th>
            <th>Service Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Basic Package</th>
            <th>Value Package</th>
            <th>Unlimited Package</th>
            <th>Action</th>
          </tr>
        </thead>
       
        <tbody>
          @foreach($services as $service)
          <tr>
            <td>{{ $service->id }}</td>
            <td>{{ $service->sname }}</td>
            <td>{{ $service->desc }}</td>
            
            <td><img src="{{ asset($service->image) }}" class="img img-rounded" height="70px" alt=""></td>
            <td>{{ $service->bpack }}</td>
            <td>{{ $service->vpack}}</td>
            <td>{{ $service->upack }}</td>
            <td><a href="{{ route('service.edit',$service->id) }}"><i class="fa fa-edit"></i></a > 
            <a href="{{ route('service.delete',$service->id) }}"><i class="fa fa-trash"></i></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  @endsection