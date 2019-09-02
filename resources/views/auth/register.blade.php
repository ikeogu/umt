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
      <div class="container p-5">
        <div class="row justify-content-center ">
          <div class="col-8">
            <div class="card bg-gradient-secondary shadow">
              <div class="card-body p-5">
          
                  <strong > <h4> UniqueMappersTeam  New Membership Registration/Renewal form</h4></strong>
                  <p>Thanks for your interest in joining and supporting UniqueMappersTeam. Members of the organisation are entitled to contribute in the affairs of the organisatioin. </p>

                    <h4> Fill in the form below to sign up</h4>
              </div>s
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
              <form method="POST" action="{{ route('register') }}" role="form" enctype="multipart/form-data" class="p-5">
                        @csrf
                            
                        
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-2"></i></span>
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
                        <span class="input-group-text"><i class="ni ni-email-8"></i></span>
                      </div>
                      <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                  <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-phone-3"></i></span>
                        </div>
                        <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required placeholder="Phone">

                            @if ($errors->has('phone'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div> 
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-gender"></i></span>
                        </div>
                            
                            <select name="gender" class="form-control">
                                
                                <option value="Female">Female </option>
                                <option value="Male"> Male </option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-users"></i></span>
                        </div>
                        <input id="osmusername" type="text" class="form-control{{ $errors->has('osmusername') ? ' is-invalid' : '' }}" name="osmusername" value="{{ old('osmusername') }}" required placeholder="OSM Username">

                          @if ($errors->has('osmusername'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('osmusername') }}</strong>
                              </span>
                          @endif
                            <span> No  OSM username click on this <a href="https://www.openstreetmap.org"> link</a> to get one and continue the registration.</span>
                        </div> 
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-users"></i></span>
                        </div>
                        <input id="department" type="text" class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department" value="{{ old('department') }}" required placeholder="Department">

                            @if ($errors->has('department'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('department') }}</strong>
                                </span>
                            @endif
                        </div> 
                    </div>
                  <div class="row">     
                    
                    <div class="col-6 form-group">
                        <label class="control-label"> Membership Category </label>
                        <select class="form-control" name="member">
                              <option value="1000">UnderGraduate - N1000</option>
                              <option value="2000">Post-Graduate - N2000</option>
                              <option value="3000">Senoir Friend -N3000</option>
                              <option value="5000">Staff Member - N5000</option>                       
                        </select>
                    </div>                
                     
                    <div class="form-group col-6">
                    
                     <label class="control-label"> When did you join?</label>
                     
                      <input id="joined" type="date" class="form-control{{ $errors->has('joined') ? ' is-invalid' : '' }}" name="joined" required >

                        @if ($errors->has('joined'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('joined') }}</strong>
                            </span>
                        @endif
                    </div>        
                   
                  </div>
                 
                   
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                     
                      <input id="joined_by" type="text" class="form-control{{ $errors->has('joined_by') ? ' is-invalid' : '' }}" name="joined_by" required placeholder="How did you hear about us?">

                        @if ($errors->has('joined_by'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('joined_by') }}</strong>
                            </span>
                        @endif
                    </div>
                  </div>
                 
                  <div class="form-group">
                 
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      
                      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>        
                  </div>
                    <div class="form-group ">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="conform password">
                           
                        </div>
                    </div>
                  <div class="row my-4">
                    <div class="col-12">
                      <div class="custom-control custom-control-alternative custom-checkbox">
                        <input class="custom-control-input" id="customCheckRegister" type="checkbox" name="agree" value="I Agree">
                        <label class="custom-control-label" for="customCheckRegister">
                          <span>
                          
                    
                                    I certify that by submitting this form, I agree to be contacted by the program personnel of UniquemappersTeam and its administrative team regarding my application or my intrest including agreement to be contacted for scientific study or surveys.
                         </span>
                          
                        </label>
                      </div>
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