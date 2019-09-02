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
          <h3 class="panel-title">Edit Attendance</h3>
      </div>
      <div class="panel-body">
          <form method="POST" action="{{ route('attend.update',[$attend->id]) }}" role="form" enctype="multipart/form-data">
            @csrf
            {{method_field('PATCH')}}
              <div class="modal-header">
                  <div class="modal-body">
  
                      
                        <div class="form-group">
                            <label>Date</label>
                            <input  type="date" class="form-control" name="date"  autofocus value="{{$attend->date}}">
    
                        </div>
                      <div class="form-group">
                        <label>Time</label>
                        <input type="time" class="form-control" name="time"   value="{{$attend->time}}">
  
                      </div>
                        <div class="form-group">
                          <label>Venue</label>
                          <input  type="text" class="form-control" name="venue"  value="{{$attend->venue}}">
    
                        </div>
                      <div class="form-group">
                      <textarea  type="text" class="form-control" name="moderators">{{$attend->moderators}}</textarea>
                        </div>
                      
                  </div>
                  <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Update</button>
                  </div>
          </form>
      </div>
  </div>          
                 
                   
               
@endsection
