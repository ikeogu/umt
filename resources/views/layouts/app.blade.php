<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'UniqueMappersTeam Network') }}</title>

    <!-- Scripts -->
   
    <!-- Favicon -->
  <link href="{{asset('favicon/favicon.ico')}}" rel="icon" type="image/png">
  <!-- Fonts -->
 
  <!-- Icons -->
  <link href="{{asset('vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{asset('css/argon.css')}}" rel="stylesheet">

 
</head>

<body>
  <header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="/">
          <img src="{{asset('img/brand/blue.png')}}">
         <span >UniqueMappersTeam</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="/">
                  <img src="{{asset('img/brand/blue.png')}}">
                  <span >UniqueMappersTeam</span>
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
          <li class="nav-item">
              <a class="nav-link nav-link-icon" href="/" target="_blank" data-toggle="tooltip" title="Back home">
                <i class="fa fa-home"></i>
                <span class="nav-link-inner--text d-lg-none">Home</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                <i class="ni ni-ui-04 d-lg-none"></i>
                <span class="nav-link-inner--text">Activities</span>
              </a>
              <div class="dropdown-menu ">
                
                 
                  <a href="{{route('project.index')}}" class="dropdown-item">
                   Projects
                      
                  </a>
                  <a href="{{route('research.index')}}" class="dropdown-item">
                    
                    Research Topics
                     
                  </a>
                
              </div>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                <i class="ni ni-collection d-lg-none"></i>
                <span class="nav-link-inner--text">About</span>
              </a>
              <div class="dropdown-menu">
                <a href="{{route('bod.index')}}" class="dropdown-item">Board of Dir</a>
                <a href="{{route('mgtteam.index')}}" class="dropdown-item">Mgt Team</a>
                <a href="#" class="dropdown-item"></a>
                <a href="{{route('training.index')}}" class="dropdown-item">Traning Services</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                <i class="ni ni-collection d-lg-none"></i>
                <span class="nav-link-inner--text">Get Involved</span>
              </a>
              <div class="dropdown-menu">
                <a href="/register" class="dropdown-item">Be a Member</a>
                <a href="/login" class="dropdown-item">Login</a>
                
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="{{route('gallery.index')}}" target="_blank" data-toggle="tooltip" title="Take a look at our gallery">
                <i class="fa fa-users"></i>
                <span class="nav-link-inner--text d-lg-none">Gallery</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://twitter.com/@uniquemappers" target="_blank" data-toggle="tooltip" title="Follow us on Twitter">
                <i class="fa fa-twitter-square"></i>
                <span class="nav-link-inner--text d-lg-none">Twitter</span>
              </a>
            </li>
            @if (Auth::user())
                @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
            <a href="{{ route('logout') }}" class="dropdown-item"
              onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="ni ni-user-run text-white"></i>
                <span class="text-white">Logout</span>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
              </form>

              <li class="nav-item">
              <a class="nav-link nav-link-icon" href="{{route('users.edit',[Auth::user()->id])}}" target="_blank" data-toggle="tooltip" title="Edit Profile">
                <i class="fa fa-users"></i>
                <span class="nav-link-inner--text d-lg-none">Edit Profile</span>
              </a>
            </li>
            @endif  

          </ul>
        </div>
      </div>
    </nav>
  </header>
  
   
        <main >
            @yield('content')
        </main>
   
    <footer class="footer">
    <div class="container">
      <div class="row row-grid align-items-center mb-5">
        <div class="col-lg-6">
          <h3 class="text-primary font-weight-light mb-2">UniqueMappersTeam Network</h3>
          
        </div>
        <div class="col-lg-6 text-lg-center btn-wrapper">
          <a target="_blank" href="https://twitter.com/@uniquemappers" class="btn btn-neutral btn-icon-only btn-twitter btn-round btn-lg" data-toggle="tooltip" data-original-title="Follow us">
            <i class="fa fa-twitter"></i>
          </a>
          <a target="_blank" href="https://facebook.com/uniquemappersteam" class="btn btn-neutral btn-icon-only btn-facebook btn-round btn-lg" data-toggle="tooltip" data-original-title="Like us">
            <i class="fa fa-facebook-square"></i>
          </a>
          
          <a target="_blank" href="https://github.com/ikeogu/umt" class="btn btn-neutral btn-icon-only btn-github btn-round btn-lg" data-toggle="tooltip" data-original-title="Star on Github">
            <i class="fa fa-github"></i>
          </a>
        </div>
      </div>
      <hr>
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-6">
          <div class="copyright">
            &copy; <script>
           document.write(new Date().getFullYear())
        </script> UniqueMappersTeam Network.<br /> Made with
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
        
      </div>
    </div>
  </footer>
  <!-- Core -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/popper/popper.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/bootstrap.min.js')}}"></script>
  <script src="{{asset('vendor/headroom/headroom.min.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{asset('vendor/onscreen/onscreen.min.js')}}"></script>
  <script src="{{asset('vendor/nouislider/js/nouislider.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>

  <script src="{{asset('js/argon.js')}}"></script>

</body>
</html>
