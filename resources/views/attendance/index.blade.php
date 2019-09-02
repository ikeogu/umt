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
      <h3> Attendance</h3>       
      <div class="container">
         
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="row row-grid">
             @foreach($attend as $bo)
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                  <div class="card-body py-5">
                    <div class="card card-title">
                      <h4  class="text-primary text-uppercase">Date: {{$bo->date}}</h4>
                    </div>
                   
                    <div>
                      <span class="badge badge-pill badge-primary text-uppercase">Time:{{$bo->time}}</span>
                    
                      <p>Venue: {{$bo->venue}}</p>
                      <p>Moderators: {{$bo->moderators}}</p>
                    </div>
                   <a href="/attend/{{$bo->id}}/">Fill In</a>
                  </div>
                </div>
              </div>
              @endforeach
              
            </div>
          </div>
        </div>
      </div>
@endsection

