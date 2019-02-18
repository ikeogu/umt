@extends('layouts.admindashboard')
@section('dash')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Members</h5>
                      <span class="h2 font-weight-bold mb-0"></span>
                    </div>
                    
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>  {{App\User::count()}}</span>
                    <span class="text-nowrap">{{ App\User::orderBy('updated_at', 'desc')->first()->updated_at->diffForHumans()}} </span> 
                  </p>
                </div>
              </div>
            </div>
           
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Management team</h5>
                      
                    </div>
                    
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i>{{App\MgtTeam::count()}}</span>
                    <span class="text-nowrap"><span class="text-nowrap">{{ App\MgtTeam::orderBy('updated_at', 'desc')->first()->updated_at->diffForHumans()}} </span> </span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Board of Dir</h5>
                     
                    </div>
                    
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> {{App\BoD::count()}}</span>
                    <span class="text-nowrap">{{ App\BoD::orderBy('updated_at', 'desc')->first()->updated_at->diffForHumans()}}</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Project</h5>
                      
                    </div>
                    
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i>  {{App\Project::count()}}</span>
                    <span class="text-nowrap">{{ App\Project::orderBy('updated_at', 'desc')->first()->updated_at->diffForHumans()}}</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     
     
    </div>
  </div>
  @endsection