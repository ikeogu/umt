@extends('layouts.admin')
@section('contents')



<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
      <h3 class="panel-title">List of Various Attendance </h3>
  </div>
  <div class="panel-body">
      <div class="row">
          <div class="col-md-12">
             
          </div>
      </div>
      <br>
      <table class="table table-strip table-hover">
          <tr>
            <th >ID</th>
            <th >Date</th>
            <th >Time</th>
            <th >Venue</th>
            <th >purpose</th>
            <th >Created</th>
            <th >Action</th>
          </tr>
          @foreach ($minute as $bo)
          <tr>
              
            <td>
              <div class="d-flex align-items-center">
                  <h5>{{$bo->id}}</h5>
              </div>
            </td>
            <td>
                <div class="d-flex align-items-center">
                    <h5>{{$bo->date}}</h5>
                </div>
                </td>
            <td>
              <div class="d-flex align-items-center">
                <h5>{{$bo->time}}</h5>
              </div>
            </td>
          
          
          
            <td>
              <div class="d-flex align-items-center">
                <h5>{{$bo->location}}</h5>
              </div>
            </td>
            <td>
                <div class="d-flex align-items-center">
                    <h5>{{$bo->purpose}}</h5>
                </div>
            </td>
            <td>
                <div class="d-flex align-items-center">
                    <h5>{{$bo->created_at->diffForHumans()}}</h5>
                </div>
            </td>
               
        <td><a class="btn btn-default" href="/minute/{{$bo->id}}/edit">Edit</a> <a
                    class="btn btn-danger" href="/minite/{{$bo->id}}">Delete</a>
            </td>
          </tr>
          @endforeach
         
         
      </table>
  </div>
</div>
@endsection