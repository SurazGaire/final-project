@extends('admin.master')
@section('content')


<div class="card shadow mb-4">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" bgcolor="#DCDCDC" >
        <thead bgcolor="#C0C0C0">
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Package</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->fname }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->phone }}</td>

            <td>
              @if(count($user->package) > 0)
              
              @foreach($user->package as $package)
              @if($package->package_name=='bpack')
              Basic Package
              @elseif($package->package_name=='vpack')
              Valued Package
              @else
              Unlimited Package
              @endif
              @endforeach
             @else
              No Package
              @endif
            </td>
            <td><a href="{{ route('customers.delete',$user->id) }}"></a>
            <button onclick="handleDelete({{ $user->id }} )"><i class="fa fa-trash"></i></button></td></td>
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

  <form action="" method="GET" id="deleteCustomer">
          @method('DELETE')
          @csrf
          <div class="modal-body">
            <p class="text-center">Are you sure you want to delete this Customer?</p>
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
      var form = document.getElementById('deleteCustomer');
      form.action = '/repairr/admin/customers/delete/' + id;
      $('#delete').modal('show');
    }

  </script>


  @endsection