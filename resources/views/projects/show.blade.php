@extends('layouts.app')

@section('content')

          
  <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 300px; background-image: url(../../img/theme/un.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Project Details</h1>
            <p class="text-white mt-0 mb-5"> A well detailed explaination of the project with the date it was carried out</p>
           
          </div>
        </div>
      </div>
    </div>
          
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-5 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-12 order-lg-8">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="../storage/project/{{$project->passport}}" class="img-responsive" width="100%" height="100%">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-info mr-4">{{$project->name}}</a>
                <a href="#" class="btn btn-sm btn-default float-right">{{$project->date}}</a>
              </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
              
              <div class="text-center">
               
                <hr class="my-4">
                <p>{{$project->body}}</p>
                
              </div>
            </div>
          </div>
        </div>
      </div>  
    </div>
    

@endsection


     
   