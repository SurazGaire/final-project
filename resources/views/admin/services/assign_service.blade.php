@extends('admin.master')
@section('content')


<div class="card shadow mb-4">
  <!-- <div class="card-header py-3">
    <a class="btn btn-primary float-right mr-3 mb-2" href="{{ route('employee.create') }}">Add an Employee</a>
  </div> -->
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" bgcolor="#DCDCDC">
        <thead bgcolor="#C0C0C0">
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
       
          
       
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          @foreach($employees as $employee)
          <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->fname }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->phone }}</td>
            

           
            <td><a href="{{ route('assign.employee',['service_id'=>$service_id,'id'=>$employee->id,]) }}">Assign</a></td>

           
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>


@endsection