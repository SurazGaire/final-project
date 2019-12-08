@extends('admin.master')
@section('content')


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a class="btn btn-primary float-right mr-3 mb-2" href="{{ route('employee.create') }}">Add an Employee</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Image</th>
        <th>Service Name</th>
        <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Image</th>
        <th>Service Name</th>
        <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach($employees as $employee)
            <tr>
              <td>{{ $employee->id }}</td>
              <td>{{ $employee->fname }}</td>
              <td>{{ $employee->email }}</td>
              <td>{{ $employee->address }}</td>
              <td>{{ $employee->phone }}</td>
              <td>{{ $employee->image }}</td>
              <td>{{ $employee->service_id }}</td>
              <td><a href="{{ route('employee.edit',$employee->id) }}">Edit</a> / <a href="{{ route('employee.delete',$employee->id) }}">Delete</a></td>
            </tr>
           @endforeach
          </tbody>
        </table>
      </div>
    </div>

    @endsection