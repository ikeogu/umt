@extends('layouts.app')
@section('content')

<section class="section section-lg section-shaped ">
        <div class="shape shape-style-1 shape-dark">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
 <!-- SVG separator -->
 <div class="separator separator-bottom separator-skew">
          <svg x="0" y="0" viewBox="0 0 2350 80" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
       
            <polygon class="fill-white" points="2350 0 2350 80 0 80"></polygon>

          </svg>
        </div>

        
      
    

      </section>
      <section class="card py-5 m-md-3 mb-md-3">
                <div class=" text-center ">
                    
                    <strong><h1> <img src="{{asset('img/brand/blue.png')}}"> UMT Meeting Minute  <img src="{{asset('img/brand/blue.png')}}"></h1></strong>
                    
                </div>
                  
                  <div class="container p-5">
                    <div class="row">
                      <div class="col-sm-4">
                        <h6>Meeting Date: {{$minute->date}}</h6>
                        <h6>  Day: {{$minute->day}} Meeting Time: {{$minute->time}}</h6>
                      </div>
                      <div class="col-sm-4">
                        <h6>Meeting Location : {{$minute->location}}</h6>
                      <h6>Meeting Called by :{{$minute->calledby}}</h6>
                      </div>
                      
                    </div>
                    <hr>
                    <div class=" text-center ">
                        <h3>Meeting Purpose {{$minute->purpose}}</h3>
                    </div>
                    <hr>
                    <div class=" ">
                        <h3>Agender Topics</h3>
                        <h5>{{$minute->agender}}</h5>
                    </div>
                    <hr>
                    <div class=" ">
                        <h3>Discussion Points</h3>
                        <h5>{{$minute->points}}</h5>
                    </div>
                    <hr>
                    <div class=" ">
                        <h3>Presentation Topics</h3>
                        <h5>{{$minute->pre_title}}</h5>
                    </div>
                    <hr>
                    <div class=" ">
                        <h3>Presenter's Name</h3>
                        <h5>{{$minute->pre_name}}</h5>
                    </div>
                    <hr>
                    <div class=" ">
                        <h3>Conclusion</h3>
                        <h5>{{$minute->conclusion}}</h5>
                    </div>
                    <hr>
                    <div class=" ">
                        <h6>Signed by :{{$minute->signed}}</h6>
                        
                    </div>
                  </div>
      </section>
    
@endsection

