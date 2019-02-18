@extends('layouts.app')

@section('content')
<main class="profile-page">
    <section class="section-profile-cover section-shaped my-0">
      <!-- Circles background -->
      <div class="shape shape-style-1 shape-dark alpha-4">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      @if(auth()->user()->isAdmin == 1)
        <div class= "main main-raised" style="padding-top:150px;">
             
            <div class="card">
                <div class="card-header">
                    <h4>You are an admin</h4>
                    <h5> <a href="{{route('adminhome')}}">click on Admin</a></h5>
                </div>
            </div>
        </div> 
        
      <!-- SVG separator -->
      <div class="separator separator-bottom separator-skew">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="card card-profile shadow mt--300">
          <div class="px-4">
            <div class="row">
              @if ($message = Session::get('success'))

                  <div class="alert alert-success alert-block">

                      <button type="button" class="close" data-dismiss="alert">×</button>

                      <strong>{{ $message }}</strong>

                  </div>

              @endif

              @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <strong>Whoops!</strong> There were some problems with your input.<br><br>
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
           </div>
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <img class="rounded-circle" src="storage/avatars/{{Auth::user()->passport}}" />
                </div>
                
              </div>
              
            </div>
            <br />
            <br />
            <br />
            <br />

              
          


            <div class="text-center mt-5">
              <h3>{{Auth::user()->name}}
                <span class="font-weight-light"></span>
              </h3>
              <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i>{{Auth::user()->email}}</div>
              <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i>{{Auth::user()->member}}</div>
              <div><i class="ni education_hat mr-2"></i>{{Auth::user()->department}}</div>
            </div>
            <div class="mt-5 py-5 border-top text-center">
              <div class="row justify-content-center">
                <div class="col-lg-9">
                  <p>{{Auth::user()->osmusername}}</p>
                  <p>{{Auth::user()->gender}}</p>
                  <p>{{Auth::user()->phone}}</p>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="mt-5 py-5 border-top text-center">
              <div class="row justify-content-center">
                <div class="col-lg-9">
                  <form action="/profile" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                          
                            <div class="col-md-8">
                                <input id="passport" type="file" class="form-control{{ $errors->has('passport') ? ' is-invalid' : '' }}" name="passport" required>

                                    @if ($errors->has('passport'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('passport') }}</strong>
                                        </span>
                                    @endif
                            </div>
                              <button type="submit" class="btn btn-primary">Change Picture</button>
                        </div>
                  </form>
                </div>
              </div>
            </div>  
        </div>
      </div>
        </div>
        
      </div>
              
      @elseif(auth()->user()->isAdmin == 3)  
      <!-- SVG separator -->
      <div class="separator separator-bottom separator-skew">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="card card-profile shadow mt--300">
          <div class="px-4">
            <div class="row">
              @if ($message = Session::get('success'))

                  <div class="alert alert-success alert-block">

                      <button type="button" class="close" data-dismiss="alert">×</button>

                      <strong>{{ $message }}</strong>

                  </div>

              @endif

              @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <strong>Whoops!</strong> There were some problems with your input.<br><br>
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
           </div>
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <img class="rounded-circle" src="storage/avatars/{{Auth::user()->passport}}" />
                </div>
                
              </div>
              
            </div>
            <br />
            <br />
            <br />
            <br />

              
          


            <div class="text-center mt-5">
              <h3>{{Auth::user()->name}}
                <span class="font-weight-light"></span>
              </h3>
              <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i>{{Auth::user()->email}}</div>
              <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i>{{Auth::user()->member}}</div>
              <div><i class="ni education_hat mr-2"></i>{{Auth::user()->department}}</div>
            </div>
            <div class="mt-5 py-5 border-top text-center">
              <div class="row justify-content-center">
                <div class="col-lg-9">
                  <p>{{Auth::user()->osmusername}}</p>
                  <p>{{Auth::user()->gender}}</p>
                  <p>{{Auth::user()->phone}}</p>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="mt-5 py-5 border-top text-center">
              <div class="row justify-content-center">
                <div class="col-lg-9">
                  <form action="/profile" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                          
                            <div class="col-md-8">
                                <input id="passport" type="file" class="form-control{{ $errors->has('passport') ? ' is-invalid' : '' }}" name="passport" required>

                                    @if ($errors->has('passport'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('passport') }}</strong>
                                        </span>
                                    @endif
                            </div>
                              <button type="submit" class="btn btn-primary">Change Picture</button>
                        </div>
                  </form>
                </div>
              </div>
            </div> 
      </div>
        </div>
        
   
           @endif              
    </section>
  </main>
@endsection
