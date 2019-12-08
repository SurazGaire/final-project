@extends('admin.master')
@section('content')


<div class="card shadow mb-4">
  <!-- <div class="card-header py-3">
    <a class="btn btn-primary float-right mr-3 mb-2" href="{{ route('employee.create') }}">Add an Employee</a>
  </div> -->
  <div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" bgcolor="#DCDCDC" >
        <thead bgcolor="#C0C0C0">
          <tr>
            <th>User Info</th>
            <th>Time</th>
            <th>Address</th>
            <th>Message</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        
        <tbody>
          @foreach($requested_services as $requested_service)
          <tr>
            <td>Name:{{ $requested_service->user->fname }}
                <br>
                Email: {{ $requested_service->user->email }}
                <br>
                Phone: {{ $requested_service->user->phone }}
            </td>
            <td>{{ $requested_service->time }}</td>
            <td>{{ $requested_service->address }}</td>
             <td>{{ $requested_service->message}}</td>
             <td>{{ $requested_service->status }}</td>
             <td>
             @if($requested_service->status == 'Ongoing')
                @if($requested_service->employee_id == Auth::guard('employee')->user()->id)
                <a href="{{ route('change_employee_status_completed',$requested_service->id) }}" class="btn btn-danger btn-sm" >Mark as Completed</a> 
                @endif
            @endif

                @if($requested_service->status == 'Completed')
                    Task Completed
                @endif
             </td>
   
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  @endsection