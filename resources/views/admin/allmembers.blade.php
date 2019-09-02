@extends('layouts.admin')
@section('contents')
<div class="content">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
    @endif
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
    </div><br />
    @endif
</div>
  
<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
      <h3 class="panel-title">UniqueMapersTeam Members</h3>
  </div>
  <div class="panel-body">
      <div class="row">
          <div class="col-md-12">
             
          </div>
      </div>
      <br>
      <table class="table table-strip table-hover">
          <tr>
            <th >Id</th>
            <th >Name</th>
            <th >Department</th>
            <th >OSM UserName</th>
            <th >Phone</th>
            <th >Gender</th>
            <th >Membership</th>
            
            <th >Status</th>
            <th >Action</th>
          </tr>
          @foreach ($mem as $bo)
          <tr>
            <td>
                <div class="d-flex align-items-center">
                    <h5>{{$bo->id}}</h5>
                </div>
            </td>
            
            <td>
                <div class="d-flex align-items-center">
                    <h5>{{$bo->name}}</h5>
                </div>
            </td>
            <td>
                <div class="d-flex align-items-center">
                    <h5>{{$bo->department}}</h5>
                </div>
                </td>
            <td>
              <div class="d-flex align-items-center">
                <h5>{{$bo->osmusername}}</h5>
              </div>
            </td>
           
          
          
            <td>
              <div class="d-flex align-items-center">
                <h5>{{$bo->phone}}</h5>
              </div>
            </td>
            
            <td>
              <div class="d-flex align-items-center">
                <h5>{{$bo->sex}}</h5>
              </div>
            </td>
            
            <td>
              <div class="d-flex align-items-center">
                <h5>{{$bo->member}}</h5>
              </div>
            </td>
            
           
            @if($bo->status == 1)
             <td>
                <div class="d-flex align-items-center">
                  <h5>Active</h5>
                </div>
              </td>          
            @else
            <td>
                <div class="d-flex align-items-center">
                  <h5>Not Active</h5>
                </div>
              </td>
            @endif
            <td>
              <div class="d-flex align-items-center">
              <a class="btn btn-default" href="/makeModerator/{{$bo->id}}/edit">Moderator</a> 
              <form action="{{ route('users.destroy' , $bo->id)}}" method="POST">
                  <input name="_method" type="hidden" value="DELETE">
                  {{ csrf_field() }}                                                       
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                  
                </form>
              </div>
            </td>
          </tr>
          @endforeach
         
         
      </table>
  </div>
</div>
@endsection