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
          <h3 class="panel-title">Edit Project </h3>
      </div>
      <div class="panel-body">
          <form method="POST" action="{{ route('project.update',[$pro->id]) }}" role="form" enctype="multipart/form-data">
            @csrf
            {{method_field('PATCH')}}
              <div class="modal-header">
                  <div class="modal-body">
  
                      <div class="form-group">
                          <label for="exampleFormControlFile1">Change image</label>
                          <input type="file" class="form-control-file"
                              id="exampleFormControlFile1" name="passport">
                      </div>
                      <div class="form-group">
                        <label>Name</label>
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $pro->name }}" required autofocus placeholder=" Full Name">
  
                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label>Date</label>
                        <input  type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="{{ $pro->date}}" required placeholder="Date">

                        @if ($errors->has('date'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('date') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group">
                          <textarea id="body" type="text" class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}" name="body" value="{{ $pro->body}}" required placeholder="Project Details"></textarea>

                          @if ($errors->has('body'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('body') }}</strong>
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
