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
          <h3 class="panel-title">Edit Training</h3>
      </div>
      <div class="panel-description">
          <form method="POST" action="{{ route('training.update',[$trn->id]) }}" role="form" enctype="multipart/form-data">
            @csrf
            {{method_field('PATCH')}}
              <div class="modal-header">
                  <div class="modal-description">
  
                     
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
                        <label>link</label>
                        <input  type="text" class="form-control{{ $errors->has('link') ? ' is-invalid' : '' }}" name="link" value="{{ $trn->link}}" required placeholder="link">

                        @if ($errors->has('link'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('link') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group">
                          <textarea id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ $trn->description}}" required placeholder="Project Details"></textarea>

                          @if ($errors->has('description'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('description') }}</strong>
                              </span>
                          @endif
                      </div>
                      
                  </div>
                  <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Update</button>
                  </div>
          </form>
      </div>
  </div>          
                 
                   
               
@endsection
