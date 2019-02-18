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
          
                  <strong > <h4> Write about carried out Project</h4></strong>
                  <h6>Thanks for your interest in joining and supporting UniqueMappersTeam. Members of the organisation are entitled to contribute in the affairs of the organisatioin. Anyone who wants to influence the activities of UniqueMappersTeam is welcome to join.</h6>

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
                <form method="POST" action="{{ route('project.store') }}" role="form" enctype="multipart/form-data">
                        @csrf
                            
                        <div class="col-sm-4 col-sm-offset-1">
                            <div class="picture-container">
                                <div class="picture">
                                    <img src="../img/brand/empty_profile.png" class="picture-src" />
                                    <input type="file" name="passport">
                                </div>
                                <h6>Choose Picture</h6>
                            </div>
                        </div>
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
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input id="date" type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="{{ old('date') }}" required placeholder="Date">

                                @if ($errors->has('date'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                  <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-phone"></i></span>
                        </div>
                        <textarea id="body" type="text" class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}" name="body" value="{{ old('body') }}" required placeholder="Body"></textarea>

                            @if ($errors->has('body'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('body') }}</strong>
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
