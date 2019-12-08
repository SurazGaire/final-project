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
            <th>Service Name</th>
            <th>Time</th>
            <th>Address</th>
            <th>Message</th>
            <th>Hear About Us</th>
            <th>Employee Details</th>
            <th>Customer Rating</th>
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
            <td>{{ $requested_service->service_name }}</td>
            <td>{{ $requested_service->time }}</td>
            <td>{{ $requested_service->address }}</td>
             <td>{{ $requested_service->message}}</td>
            <td>{{ $requested_service->hear_about_us }}</td>

            

            <td>@if($requested_service->status == 'Ongoing' || $requested_service->status == 'Completed')
              
            Name:{{ $requested_service->employee->fname }}
                <br>
                Email: {{ $requested_service->employee->email }}
                <br>
                Phone: {{ $requested_service->employee->phone }}

                @else
                No Employee Assigned
                @endif
              </td>
              <td>
              @if($requested_service->status == 'Completed')
             
              @if($requested_service->rate == 0  )
             
              Not Rated
              @else
              {{$requested_service->rate}}/5
              @endif
              @endif


              </td>

                
           
           
             <td>
            @if($requested_service->status == 'Ongoing')
               Ongoing
                @endif
            @if($requested_service->status == 'Completed')
               Task Completed
                @endif

                               

                @if($requested_service->status == 'Available')
                <a href="{{ route('service.assign',$requested_service->id) }}" class="btn btn-danger btn-sm">Assign</a> 
                @endif
             </td>
</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  @endsection