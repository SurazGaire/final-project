@extends('admin.master')
@section('content')


<div class="card shadow mb-4">
  <div class="card-header py-3">
    <a class="btn btn-primary float-right mr-3 mb-2" href="{{ route('employee.create') }}">Add an Employee</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" bgcolor="#DCDCDC">
        <thead bgcolor="#C0C0C0">
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Image</th>
            <th>Service Name</th>
            <th>Registration Type</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          @foreach($employees as $employee)
          <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->fname }}
             
            </td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->address }}</td>
            <td>{{ $employee->phone }}</td>

            <td><img src="{{ asset($employee->image) }}" height="70px" alt=""></td>
            <td>{{ $employee->service }}</td>
            <td>
              @if($employee->added_by_admin)
              Added By Admin
              @else
              Self Registered
              @endif
            </td>
            <td><a href="{{ route('employee.edit',$employee->id) }}"><i class="fa fa-edit"></i></a>
              <button onclick="handleDelete({{ $employee->id }} )"><i class="fa fa-trash"></i></button></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  @endsection

  @section('modal')

  <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLabel">Delete Confirmation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" method="GET" id="deleteEmployee">
          @method('DELETE')
          @csrf
          <div class="modal-body">
            <p class="text-center">Are you sure you want to delete this Employee?</p>
            <input type="hidden">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Yes, Delete</button>
          </div>

        </form>

      </div>
    </div>
  </div>

  

  <script>
    function handleDelete(id){
      var form = document.getElementById('deleteEmployee');
      form.action = '/repairr/admin/employees/delete/' + id;
      $('#delete').modal('show');
    }

  </script>



  @endsection