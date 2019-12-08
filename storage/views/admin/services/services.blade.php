@extends('admin.master')
@section('content')


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a class="btn btn-primary float-right mr-3 mb-2" href="{{ route('service.create') }}">Add a Service</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>Id</th>
                <th>Service Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>Id</th>
                <th>Service Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach($services as $service)
            <tr>
              <td>{{ $service->id }}</td>
              <td>{{ $service->sname }}</td>
              <td>{{ $service->desc }}</td>
              <td>{{ $service->image }}</td>
            <td><a href="{{ route('service.edit',$service->id) }}">Edit</a> / <a href="{{ route('service.delete',$service->id) }}">Delete</a></td>
            </tr>
       @endforeach
          </tbody>
        </table>
      </div>
    </div>

    @endsection