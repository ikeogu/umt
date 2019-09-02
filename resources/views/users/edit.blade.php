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
          <div class="col-lg-8">
            <div class="card bg-gradient-secondary shadow">
              <div class="card-body p-lg-5">
          
                  <strong > <h4 class="card-title">Edit Profile</h4>  </strong>
                  
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
              <form method="post"  action="{{route('users.update', [$user->id])}}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <input type="hidden" name="_method" value="put">

                          
                        
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                      </div>
                      <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required autofocus placeholder="Name">

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
                      <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email}}" required placeholder="Email">

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
                            <span class="input-group-text"><i class="ni ni-phone"></i></span>
                        </div>
                        <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ $user->phone }}" required placeholder="Phone">

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
                                <option>Gender</option>
                                <option value="Female">Female </option>
                                <option value="Male"> Male </option>
                                <option value="Other"> Other </option>
                            
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-users"></i></span>
                        </div>
                        <input id="osmusername" type="text" class="form-control{{ $errors->has('osmusername') ? ' is-invalid' : '' }}" name="osmusername" value="{{ $user->osmusername }}" required placeholder="OSM Username">

                          @if ($errors->has('osmusername'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('osmusername') }}</strong>
                              </span>
                          @endif
                            <h5> if you don't have an  OSM username click on this <a href="https://www.openstreetmap.org"> link</a> to get one and continue the rigistration.</h5>
                        </div> 
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-users"></i></span>
                        </div>
                        <input id="department" type="text" class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department" value="{{$user->department }}" required placeholder="Department">

                            @if ($errors->has('department'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('department') }}</strong>
                                </span>
                            @endif
                        </div> 
                    </div>
                       
                    <LABEL class="control-label col-lg-6 col-sm-9">Membership Category</LABEL>
                    <div class="col-lg-6  col-sm-6 form-group">
                        <select class="form-control" name="member" value="{{ $user->member }}">
                              <option>--SELECT--</option>
                              <OPTION value="UnderGraduate - N1000">UnderGraduate - N1000</OPTION>
                              <OPTION value="Post-Graduate - N2000">Post-Graduate - N2000</OPTION>
                              <OPTION value="Senoir Friend - N3000">Senoir Friend -N3000</OPTION>
                              <OPTION value="Staff Member - N5000">Staff Member - N5000</OPTION>                       
                        </select>
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
