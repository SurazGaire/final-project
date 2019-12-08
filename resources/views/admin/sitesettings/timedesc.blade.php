@extends('admin.master')
@section('content')
<div class="col-lg-7">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Add Time Description!!</h1>
            </div>
            <form class="user" method="post" action="{{route('sitesettings.time_desc_update')}}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  
                    <label for="days">Week Days</label>
                  <input type="text" id="weekdays" class="form-control form-control-user" value="{{$time_desc->weekdays}}" name="weekdays" >
                </div>
                <div class="col-sm-6">
                <label for="days">Regular Service Time</label>
                  <input type="text" class="form-control form-control-user" value="{{$time_desc->weekdays_time}}" name="weekdays_time">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="days">Week Ends</label>
                  <input type="text" id="weekends" class="form-control form-control-user" value="{{$time_desc->weekends}}" name="weekends" >
                </div>
                <div class="col-sm-6">
                <label for="days">Regular Service Time</label>
                  <input type="text" class="form-control form-control-user" value="{{$time_desc->weekends_time}}" name="weekends_time">
                </div>
              </div>
              <input type="submit" value="Update" class="btn btn-primary btn-user btn-block">
              <hr>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection