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
          <svg x="0" y="0" viewBox="0 0 2160 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
       
            <polygon class="fill-white" points="2160 0 2160 100 0 100"></polygon>

          </svg>
        </div>

        
      
    

      </section>       
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="row row-grid">
             @foreach($caresearch as $bo)
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                  <div class="card-body py-5">
                    <div class="card-profile-image">
                        <img class="rounded-circle" src="{{$bo->passport}}" />
                    </div>
                    <h6 class="text-primary text-uppercase">{{$bo->name}}</h6>
                    <p class="description mt-3"></p>
                    <div>
                      <span class="badge badge-pill badge-primary">{{$bo->author}}</span>
                      <span class="badge badge-pill badge-primary">{{$bo->coauthor}}</span>
                      <span class="badge badge-pill badge-primary"> {{ str_limit($bo->body, $limit = 50, $end = '...') }}</span>
                    
                      
                    </div>
                   
                  </div>
                </div>
              </div>
              @endforeach
              
            </div>
          </div>
        </div>
      </div>
@endsection

