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
            <div class="card bg-gradient-secondary shadow p-5">
              <div class="card-body p-5">
          
                  <strong > <h4> UniqueMappersTeam  New Membership Registration/Renewal form</h4></strong>
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
                <form id="register" method="post" action="{{route('user_reg')}}" >
                    {{csrf_field()}}
                            
                        
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                      </div>
                      <input id="name" type="text" class="form-control" name="name" required autofocus placeholder="Name">

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
                      <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required placeholder="Email">

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
                        <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone"  required placeholder="Phone">

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
                                <option>Female </option>
                                <option> Male </option>
                                <option> Other </option>
                            
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-user"></i></span>
                        </div>
                        <input id="osmusername" type="text" class="form-control{{ $errors->has('osmusername') ? ' is-invalid' : '' }}" name="osmusername" value="{{ old('osmusername') }}" required placeholder="OSM Username">

                          @if ($errors->has('osmusername'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('osmusername') }}</strong>
                              </span>
                          @endif
                            <p> if you don't have an  OSM username click on this <a href="https://www.openstreetmap.org"> link</a> to get one and continue the rigistration.</p>
                        </div> 
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-user"></i></span>
                        </div>
                        <input id="department" type="text" class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department" value="{{ old('department') }}" required placeholder="Department">

                            @if ($errors->has('department'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('department') }}</strong>
                                </span>
                            @endif
                        </div> 
                    </div>
                       
                    <div class=" form-group">
                        <select class="form-control" name="member" id="member">
                              <option> --Membership Category-- </option>
                              <option value="1000">UnderGraduate - N1000</option>
                              <option value="2000">Post-Graduate - N2500</option>
                              <option value="3000">Senoir Friend -N3000</option>
                              <option value="5000">Staff Member - N5000</option>                       
                        </select>
                    </div>                
                     
                    <div class="form-group row">
                        <div class="col-6">
                          <div class="input-group ">
                           
                            <input id="joined" type="text" class="form-control{{ $errors->has('joined') ? ' is-invalid' : '' }}" name="joined" required placeholder="Date you Joined dd/mm/YY">

                            @if ($errors->has('joined'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('joined') }}</strong>
                                </span>
                            @endif
                              
                          </div>
                        </div>  

                        <div class="col-6">
                          <div class="input-group input-group-alternative">
                          <input id="joined_by" type="text" class="form-control{{ $errors->has('joined_by') ? ' is-invalid' : '' }}" name="joined_by" required placeholder="How did you hear about Us?">
      
                            @if ($errors->has('joined_by'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('joined_by') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                  </div>
                 
                   
                 
                
                    <div class="col-12">
                      <div class="custom-control custom-control-alternative custom-checkbox">
                        <input class="custom-control-input" id="customCheckRegister" type="checkbox" name="agree" value="I Agree">
                        <label class="custom-control-label" for="customCheckRegister">
                          <span>
                          
                    
                                    I certify that by submitting this form, I agree to be contacted by the program personnel of UniqueMappersTeam and its administrative team regarding my application or my intrest including agreement to be contacted for scientific study or surveys.
                         </span>
                          
                        </label>
                      </div>
                    </div>
        
                  <div class="text-center">
                    <button class="btn btn-primary mt-4" data-toggle="modal" data-target="#myModal">Send</button>
                  </div>
                  
                  </div>
                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog" style="top:200px;">
                        <div class="modal-dialog">
                        
                            <!-- Modal content-->
                            <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Membership Fee Payment</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                
                                
                            </div>
                            <div class="modal-body">
                                <button class="btn" type="submit" id="send_form">
                                    <img src="img/theme/paystack.jpg" width="290" height="100"/>
                                </button>
                            </div>
                            <div class="modal-footer">
                                <p>Make Secured Payment Via Paystack</p>
                                
                            </div>
                        </div>
                    </div>    
                    <!--End  Modal -->
        
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  
    
    </section>
   
@endsection
