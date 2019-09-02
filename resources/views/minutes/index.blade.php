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
      <h3> Meeting's Minutes</h3>       
      <div class="container">
         
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="row row-grid">
             @foreach($minute as $bo)
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                  <div class="card-body py-5">
                    <div class="card card-title">
                      <h4>{{$bo->purpose}}</h4>
                    </div>
                    <h6 class="text-primary text-uppercase">Date: {{$bo->date}}</h6>
                    
                    <div>
                      <span class="badge badge-pill badge-primary">Time:{{$bo->time}}</span>
                    
                      <p>Venue: {{$bo->location}}</p>
                      <p>Signed: {{$bo->signed}}</p>
                    </div>
                   <a href="/minute/{{$bo->id}}/"> Read Minute</a>
                  </div>
                </div>
              </div>
              @endforeach
              
            </div>
          </div>
        </div>
      </div>
@endsection