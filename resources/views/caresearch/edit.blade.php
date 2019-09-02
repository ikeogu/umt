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
          <h3 class="panel-title">Edit Research work</h3>
      </div>
      <div class="panel-body">
          <form method="POST" action="{{ route('caresearch.update',[$car->id]) }}" role="form" enctype="multipart/form-data">
            @csrf
            {{method_field('PATCH')}}
              <div class="modal-header">
                  <div class="modal-body">
  
                      <div class="form-group">
                          <label for="exampleFormControlFile1">Upload image</label>
                          <input type="file" class="form-control-file"
                              id="exampleFormControlFile1" name="picture">
                      </div>
                      <div class="form-group">
                        <label>Title</label>
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $car->name }}" required autofocus placeholder=" Full Name">
  
                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label>Author</label>
                        <input id="author" type="author" class="form-control{{ $errors->has('author') ? ' is-invalid' : '' }}" name="author" value="{{ $car->author }}" required placeholder="author">
  
                        @if ($errors->has('author'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('author') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group">
                          <label>Co Author</label>
                          <input  type="text" class="form-control{{ $errors->has('author') ? ' is-invalid' : '' }}" name="coauthor" value="{{ $car->coauthor}}" required placeholder=" Co author">
    
                          @if ($errors->has('coauthor'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('coauthor') }}</strong>
                              </span>
                          @endif
                        </div>
                      <div class="form-group">
                        <textarea id="body" type="text" class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}" name="body" value="{{ $car->body}}" required placeholder="Quote ...."></textarea>
  
                        @if ($errors->has('body'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('body') }}</strong>
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
