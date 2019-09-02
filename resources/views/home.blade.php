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
           @if(Auth::user()->status == 0)
            <div class="card bg-danger">
              <div class="card-body text-center">
                <strong class="card-text">Account not activated. </strong><br>
                <strong class="card-text"> Pay Registration Fee and be activated</strong>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Pay Now!
                  </button>
              </div>    
              
                <!-- Button trigger modal -->

              
              <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="false">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Membership Payment</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                            <div class="row" style="margin-bottom:40px;">
                              <div class="col-md-8 col-md-offset-2">
                                <p>
                                    <div>
                                        Membership Fee 
                                      {{Auth::user()->member}}
                                    </div>
                                </p>
                                <input type="text" name="email" value="{{Auth::user()->email}}" class="form-control"> {{-- required --}}
                                
                                <input type="hidden" name="amount" value="{{Auth::user()->member * 104}}"> {{-- required in kobo --}}
                                <input type="hidden" name="interval" value="12">
                                <input type="hidden" name="metadata" value="{{ json_encode($array = ['first_name' => Auth::user()->name, 'department'=> Auth::user()->department,'user_id' => Auth::user()->id]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                                {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
                    
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
                    
                    
                                <p>
                                  <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                  <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                  </button>
                                </p>
                              </div>
                            </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <strong>Make Secured Payment Via Paystack</strong>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
           @elseif(Auth::user()->status == 1)
           <div class="card bg-success">
              <div class="card-body text-center">
                <strong class="card-text">Account activated !!!</strong><br>
                <strong class="card-text">You are a UniqueMappersTeam Member Indeed</strong>
               
              </div> 
           </div>
           @endif  
           <br><br><br><br>
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
                          
                            <div class="col-6">
                                <input id="passport" type="file" class="form-control{{ $errors->has('passport') ? ' is-invalid' : '' }}" name="passport" required>

                                    @if ($errors->has('passport'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('passport') }}</strong>
                                        </span>
                                    @endif
                            </div>
                              <button type="submit" class="btn btn-primary btn-sm">Change Picture</button>
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
