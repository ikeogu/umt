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
          <h3 class="panel-title">Edit {{$blo->title}}</h3>
      </div>
      <div class="panel-body">
          <form method="POST" action="{{ route('blog.update',[$blo->id]) }}" role="form" enctype="multipart/form-data">
            @csrf
            {{method_field('PATCH')}}
              <div class="modal-header">
                  <div class="modal-body">
  
                      <div class="form-group">
                          <label for="exampleFormControlFile1">Upload image</label>
                          <input type="file" class="form-control-file"
                              id="exampleFormControlFile1" name="image">
                      </div>
                      <div class="form-group">
                        <label>Title</label>
                        <input id="name" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $blo->title }}" required autofocus >
  
                        @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label>Subtitle</label>
                        <input id="name" type="text" class="form-control{{ $errors->has('subtitle') ? ' is-invalid' : '' }}" name="subtitle" value="{{ $blo->subtitle }}"  autofocus>
  
                        @if ($errors->has('subtitle'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('subtitle') }}</strong>
                        </span>
                        @endif
                      </div>
                      
                      
                      <div class="form-group">
                        <textarea id="body" type="text" class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}" name="body">{{ $blo->body}} </textarea>
  
                        @if ($errors->has('body'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('body') }}</strong>
                            </span>
                        @endif
                      </div>
                      
                  </div>
                  <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Update Post</button>
                  </div>
          </form>
      </div>
  </div>          
                 
                   
               
@endsection
