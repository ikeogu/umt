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
          <h3 class="panel-title">Add A Member to MGT Team</h3>
      </div>
      <div class="panel-body">
          <form method="POST" action="{{ route('mgtteam.store') }}" role="form" enctype="multipart/form-data">
            @csrf
              <div class="modal-header">
                  <div class="modal-body">
  
                      <div class="form-group">
                          <label for="exampleFormControlFile1">Upload image</label>
                          <input type="file" class="form-control-file"
                              id="exampleFormControlFile1" name="passport">
                      </div>
                      <div class="form-group">
                        <label>Name</label>
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder=" Full Name">
  
                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label>Position</label>
                        <input  type="text" class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" name="position" value="{{ old('position') }}" required placeholder="position">
  
                        @if ($errors->has('position'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('position') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group">
                            <label>Department</label>
                            <input  type="text" class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" name="department" value="{{ old('department') }}" required placeholder="Dir.....">
      
                          </div>
                      <div class="form-group">
                        <textarea id="wok" type="text" class="form-control{{ $errors->has('wok') ? ' is-invalid' : '' }}" name="wok" value="{{ old('wok') }}" required placeholder="Quote ...."></textarea>
  
                        @if ($errors->has('wok'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('wok') }}</strong>
                            </span>
                        @endif
                      </div>
                      
                  </div>
                  <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Send</button>
                  </div>
          </form>
      </div>
  </div>          
                 
                   
               
@endsection
