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
          <h3 class="panel-title">Add a Reseach Work</h3>
      </div>
      <div class="panel-description">
          <form method="POST" action="{{ route('research.store') }}" role="form" enctype="multipart/form-data">
            @csrf
              <div class="modal-header">
                  <div class="modal-description">
  
                     
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
                        <label>Link</label>
                        <input  type="text" class="form-control{{ $errors->has('link') ? ' is-invalid' : '' }}" name="link" value="{{ old('link') }}" required placeholder="link">

                        @if ($errors->has('link'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('link') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group">
                          <textarea id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}" required placeholder="Project Details"></textarea>

                          @if ($errors->has('description'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('description') }}</strong>
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
