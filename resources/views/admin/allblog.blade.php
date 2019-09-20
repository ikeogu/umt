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
      <h3 class="panel-title">Blog Posts </h3>
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
            <th >Title</th>
            <th >subtitle</th>
            <th >Body</th>
            <th >Image</th>
            <th >Date</th>
            <th >Action</th>
          </tr>
          @foreach ($blog as $bo)
          <tr>
              
            <td>
              <div class="d-flex align-items-center">
                  <h5>{{$bo->id}}</h5>
              </div>
            </td>
            <td>
                <div class="d-flex align-items-center">
                    <h5>{{$bo->title}}</h5>
                </div>
                </td>
            <td>
              <div class="d-flex align-items-center">
                <h5>{{$bo->subtitle}}</h5>
              </div>
            </td>
          
          
          
            <td>
              <div class="d-flex align-items-center">
                <h5>{{$bo->body}}</h5>
              </div>
            </td>
            <td class="text-right">
                <div class="media align-items-center">
                    <a  class="avatar rounded-circle mr-3">
                    <img src="/storage/blog_post/{{$bo->image}}"  height="60" width="60">
                    </a>
                </div>
            </td>
            <td>
                <div class="d-flex align-items-center">
                  <h5>{{$bo->created_at->diffForHumans()}}</h5>
                </div>
              </td>
          <td><a class="btn btn-default" href="/bod/{{$bo->id}}/">Edit</a> 
              <form action="{{ route('blog.destroy' , $bo->id)}}" method="POST">
                <input name="_method" type="hidden" value="DELETE">
                {{ csrf_field() }}                                                       
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                
              </form>
            </td>
          </tr>
          @endforeach
         
         
      </table>
  </div>
</div>
@endsection