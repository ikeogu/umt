@extends('layouts.app')

@section('content')

 <section class="section section-shaped section-lg">
      <div class="shape shape-style-1 bg-gradient-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        
      </div>
      <section class="section section-lg pt-lg-0 section-contact-us">
      <div class="container">
        <div class="row justify-content-center ">
          <div class="col-lg-8">
            <div class="card bg-gradient-secondary shadow">
              <div class="card-body p-lg-5">
          
                  <strong > <h4> Training For UniqueMappersTeam</h4></strong>
                  <h6>Training keeps us updated with recent technologies.</h6>

                    <h4> Fill in the form below to sign up</h4>
                </div>
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
                <form method="POST" action="{{ route('training.store') }}" role="form" enctype="multipart/form-data">
                        @csrf
                            
                    
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                      </div>
                      <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Name">

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-link"></i></span>
                      </div>
                      <input id="position" type="text" class="form-control{{ $errors->has('link') ? ' is-invalid' : '' }}" name="link" value="{{ old('position') }}" placeholder="Link">

                                @if ($errors->has('link'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('link') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                  <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-note"></i></span>
                        </div>
                        <input id="phone" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}" required placeholder="Description">

                            @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div> 
                    </div>
                   
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4">Send</button>
                  </div>
                </form>
          </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
