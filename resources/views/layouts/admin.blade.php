<!DOCTYPE html>
  <html lang-en>

  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, intial-scale=1">
      <title>Admin| Dashboard</title>
      <link href="{{ asset('favicon/favicon.ico')}}" rel="icon" type="image/png">
      <!-- core css -->
      <link href="{{asset('css/bootstrap2.min.css')}}" rel="stylesheet">
      <link href="{{asset('css/style2.css')}}" rel="stylesheet">
      
     
  </head>

      <header id="header">
          <div class="container">
              <div class="row">
                  <div class="col-md-10">
                      <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>UniqueMapperTeam<small> Dashboard </small></h1>
                  </div>
                  
                  <div class="col-sm col-md-2 text-center" id="login">
                        <a href="/">Home</a>
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
              </div>
          </div>
      </header>


      <section id="breadcrumb">
          <div class="container">
              <ol class="breadcrumb">
                  <li class="active">
                      Dashboard
                  </li>
              </ol>
          </div>
      </section>

      <section>
          <div class="container">
              <div class="row">
                  <div class="col-md-3">
                      <div class="list-group">
                          <a href="{{route('adminhome')}}" class="list-group-item active main-color-bg">
                              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
                          </a>
                          <a href="{{route('attend.create')}}" class="list-group-item"><span class="glyphicon glyphicon-list-alt"
                            aria-hidden="true"></span> Add  Attendance
                        </a>
                        <a href="{{route('minute.create')}}" class="list-group-item"><span class="glyphicon glyphicon-list-alt"
                            aria-hidden="true"></span> Add Minute 
                        </a>
                        <a class="list-group-item" href="{{route('mgtteam.create')}}">
                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                                Add a Mgt Team 
                                
                            </a>
                          <a class="list-group-item" href="{{route('bod.create')}}">
                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                                Add to Board of Dir 
                               
                            </a>
                          <a class="list-group-item" href="{{route('gallery.create')}}">
                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                                Add to Gallery 
                               
                            </a>
                          <a class="list-group-item" href="{{route('project.create')}}">
                              <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                              Add  Project
                             
                          </a>
                          
                          
                          <a class="list-group-item" href="{{route('research.create')}}">
                          <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                          Add Research topic
                          
                          </a>
                          
                          
                          <a class="list-group-item" href="{{route('training.create')}}">
                              <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                              Add training Courses
                              
                          </a>
                          <a class="list-group-item" href="{{route('blog.create')}}">
                            <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                            Make a Post
                            
                        </a>
                          <a href="{{route('allattend')}}" class="list-group-item"><span class="glyphicon glyphicon-list-alt"
                              aria-hidden="true"></span> All Attendance<span class="badge">{{App\Attendance::count()}}</span>
                          </a>
                         
                        <a href="{{route('minute.index2')}}" class="list-group-item"><span class="glyphicon glyphicon-list-alt"
                            aria-hidden="true"></span> All Minutes <span class="badge">{{App\Minute::count()}}</span>
                        </a>
                       
                          <a class="list-group-item" href="{{route('allmembers')}}">
                          <span class="glyphicon glyphicon-list-alt"  aria-hidden="true"></span>
                              All Reg Members
                              <span class="badge">{{App\User::count()}}</span>
                          </a>
                          <a class="list-group-item" href="{{route('allpro')}}">
                                <span class="glyphicon glyphicon-list-alt"  aria-hidden="true"></span>
                                    All Project
                                    <span class="badge">{{App\Project::count()}}</span>
                         </a>
                          <a class="list-group-item" href="{{route('contact.index')}}">
                                <span class="glyphicon glyphicon-list-alt"  aria-hidden="true"></span>
                                    All Inbox
                                    <span class="badge">{{App\Contact::count()}}</span>
                          </a>
                            
              
                         
                          
                          
                          <a class="list-group-item" href="{{route('allmgtteam')}}">
                              <span class="glyphicon glyphicon-list-alt"aria-hidden="true"></span>
                              All Mgt Teams 
                              <span class="badge">{{App\mgtTeam::count()}}</span>
                          </a> 
                          
                          
                         
                          
                          <a class="list-group-item" href="{{route('allbod')}}">
                              <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                              All Board of Dirs
                              <span class="badge">{{App\BoD::count()}}</span>
                          </a>
                          
                          <a class="list-group-item" href="{{route('allblog')}}">
                            <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                            All Post <span class="badge">{{App\Blog::count()}}</span>
                        </a>
                          <a class="list-group-item" href="{{route('gallery.index')}}">
                              <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                              All Gallery<span class="badge">{{App\Gallery::count()}}</span>
                          </a>
                          <a class="list-group-item" href="{{route('allres')}}">
                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                                All Research<span class="badge">{{App\Research::count()}}</span>
                            </a>
                       
                           
                      </div>
                  </div>
                  <div class="col-md-9">

                      <!-- Website Overview -->
                      <div class="panel panel-default">
                          <div class="panel-heading main-color-bg">
                              <h3 class="panel-title">Website Overview</h3>
                          </div>
                          <div class="panel-body">
                              <div class="col-md-3">
                                  <div class="well dash-box">
                                      <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{App\User::count()}}</h2>
                                      <h4>Members</h4>
                                  </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="well dash-box">
                                      <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> {{App\Attendance::count()}}
                                      </h2>
                                      <h4> Attendance</h4>
                                  </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="well dash-box">
                                      <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> {{App\Contact::count()}}</h2>
                                      <h4>Inbox</h4>
                                  </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="well dash-box">
                                      <h2><span class="glyphicon glyphicon-list" aria-hidden="true"></span> {{App\Blog::count()}}</h2>
                                      <h4>Blog</h4>
                                  </div>
                              </div>

                          </div>
                      </div>
                      <main>
                        @yield('contents')
                      </main>
                    
                    </div>
                  </div>
              </div>
          </section>
  
          <footer id="footer">
          <p>Copyright UniMappersTeam &copy; {{date('Y')}}</p>
          </footer>
  
         
  
  
          <!-- Bootstrap core Javascript
          ======================================== -->
          <!-- placed at the end of the document so the pages load faster -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="{{asset('js/bootstrap.min.js')}}"></script>
      </body>
  
      </html>