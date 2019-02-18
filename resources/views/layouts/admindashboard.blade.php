<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Admin</title>
  <!-- Favicon -->
  <link href="{{asset('img/favicon/favicon.ico')}}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{asset('vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
  
  <!-- Argon CSS -->
  <link type="text/css" href="{{asset('css/argon.css')}}" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"> </span> MENU
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="{{route('adminhome')}}">
        <img src="{{asset('img/brand/blue.png')}}" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="storage/avatars/{{Auth::user()->passport}}">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="{{route('user')}}" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            
            <div class="dropdown-divider"></div>
            
              <a href="{{ route('logout') }}" class="dropdown-item"
              onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
              </form>
             
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="{{asset('img/brand/blue.png')}}">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('adminhome')}}">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('allmembers')}}">
              <i class="ni ni-planet text-blue"></i>All Reg Members
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{route('mgtteam.create')}}">
              <i class="ni ni-pin-3 text-orange"></i> Add a Mgt Team
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('allmgtteam')}}">
              <i class="ni ni-pin-3 text-orange"></i> view all Mgt Teams
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('bod.create')}}">
              <i class="ni ni-single-02 text-yellow"></i>Add a Board of Dir
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('allbod')}}">
              <i class="ni ni-single-02 text-yellow"></i> View Board of Dirs
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('gallery.create')}}">
              <i class="ni ni-single-02 text-yellow"></i> Post Event pictures
          </li> <li class="nav-item">
            <a class="nav-link" href="{{route('gallery.index')}}">
              <i class="ni ni-single-02 text-yellow"></i> Gallery
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('project.create')}}">
              <i class="ni ni-key-25 text-info"></i> Create Project
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('research.create')}}">
              <i class="ni ni-key-25 text-info"></i>Add Research topic
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('training.create')}}">
              <i class="ni ni-key-25 text-info"></i>Add training Courses
            </a>
          </li>
          
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        
        </ul>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark " id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="{{route('adminhome')}}">Dashboard</a>
        <!-- Form -->
        
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="storage/avatars/{{Auth::user()->passport}}">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">{{auth::user()->name}}</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0" >Welcome!</h6>
              </div>
              <a href="{{route('user')}}" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
             
              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}" class="dropdown-item"
              onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
              </form>
             

                          
            </div>
          </li>
        </ul>
      </div>
    </nav>
   
        <main class="py-4">
            @yield('dash')
        </main>
    
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>
  <!-- Optional JS -->
  
  <!-- Argon JS -->
  <script src="{{asset('js/argon.js')}}"></script>
</body>

</html>