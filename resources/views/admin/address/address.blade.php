@extends('admin.master')
@section('content')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <a class="btn btn-primary float-right mr-3 mb-2" href="{{ route('address.create') }}">Add Address</a>
  </div>

<div class="card shadow mb-4">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" cellspacing="0" bgcolor="#DCDCDC" >
        <thead bgcolor="#C0C0C0">
          <tr>
            <th>Id</th>
            <th>Address</th>
            <th>Action</th>
            
          </tr>
        </thead>
        <tbody>
          @foreach($address as $add)
          <tr>
            <td>{{ $add->id }}</td>
            <td>{{ $add->address }}</td>
            <td><a href="{{ route('address.delete',$add->id) }}"><i class="fa fa-trash"></i></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  @endsection