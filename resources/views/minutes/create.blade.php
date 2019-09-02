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
          <h3 class="panel-title">Create Meeting Minute</h3>
      </div>
      <div class="panel-body">
          <form method="POST" action="{{ route('minute.store') }}" role="form" enctype="multipart/form-data">
            @csrf
              <div class="modal-header">
                  <div class="modal-body">
  
                      
                      <div class="form-group">
                        <label>Date</label>
                        <input  type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="{{ old('date') }}" required autofocus >
  
                        @if ($errors->has('date'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('date') }}</strong>
                        </span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label>Time</label>
                        <input  type="time" class="form-control{{ $errors->has('time') ? ' is-invalid' : '' }}" name="time" value="{{ old('time') }}" required >
  
                        @if ($errors->has('time'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('time') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group">
                            <label>Day</label>
                            <input  type="text" class="form-control{{ $errors->has('day') ? ' is-invalid' : '' }}" name="day" value="{{ old('day') }}" required placeholder="Wednesday">
      
                            @if ($errors->has('day'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('day') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Meeting Location</label>
                            <input  type="text" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" value="{{ old('location') }}" required >
        
                            @if ($errors->has('location'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('location') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Meeting Called By</label>
                            <input  type="text" class="form-control{{ $errors->has('calledby') ? ' is-invalid' : '' }}" name="calledby" value="{{ old('calledby') }}" required >
        
                            @if ($errors->has('calledby'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('calledby') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                                <label>Meeting purpose</label>
                                <input  type="text" class="form-control{{ $errors->has('purpose') ? ' is-invalid' : '' }}" name="purpose" value="{{ old('purpose') }}" required >
            
                                @if ($errors->has('purpose'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('purpose') }}</strong>
                                    </span>
                                @endif
                            </div>
                      <div class="form-group">
                            <label>Agender</label>
                        <textarea  type="text" class="form-control{{ $errors->has('agender') ? ' is-invalid' : '' }}" name="agender" value="{{ old('agender') }}" required placeholder="Agender ...."></textarea>
  
                        @if ($errors->has('agender'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('agender') }}</strong>
                            </span>
                        @endif
                      </div>
                        <div class="form-group">
                            <label>Discussion Points</label>
                            <textarea  type="text" class="form-control{{ $errors->has('points') ? ' is-invalid' : '' }}" name="points" value="{{ old('points') }}" required placeholder="1. Agender ...."></textarea>
        
                            @if ($errors->has('points'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('points') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Presentation Topics</label>
                            <textarea  type="text" class="form-control{{ $errors->has('pre_title') ? ' is-invalid' : '' }}" name="pre_title" value="{{ old('pre_title') }}" required placeholder="1. OSM ...."></textarea>
        
                            @if ($errors->has('pre_title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('pre_title') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Presenter's Name</label>
                            <textarea  type="text" class="form-control{{ $errors->has('pre_name') ? ' is-invalid' : '' }}" name="pre_title" value="{{ old('pre_name') }}" required placeholder="1. Honesty...."></textarea>
        
                            @if ($errors->has('pre_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('pre_name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                                <label>Conclusion</label>
                                <textarea  type="text" class="form-control{{ $errors->has('conclusion') ? ' is-invalid' : '' }}" name="conclusion" value="{{ old('conclusion') }}" required placeholder="1. ...."></textarea>
            
                                @if ($errors->has('conclusion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('conclusion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                                <label>Signed By</label>
                                <input  type="text" class="form-control{{ $errors->has('signed') ? ' is-invalid' : '' }}" name="signed" value="{{ old('signed') }}" required >
            
                                @if ($errors->has('signed'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('signed') }}</strong>
                                    </span>
                                @endif
                        </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"> Post Minute</button>
                    </div>
          </form>
      </div>
  </div>          
                 
                   
               
@endsection
