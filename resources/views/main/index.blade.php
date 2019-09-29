@extends('layouts.main')
@section('mainview')
    <!--Banner-->
    <section class="container-fluid">
        <div class="row">
          <div id="sr-prev" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="20000">
                <img src="./img/theme/download.jpg" class="d-block w-100" alt="...">
               
                <div class="carousel-caption d-sm-block">
                  <h2 > UniqueMappersTeam</h2>
                  <h4 style="color:white" > A Community based NGO<span> for</span></h4>
                  <ul>
                    <li><p >Mobile Data Collection</p></li>
                    <li><p > Open Data Mapping</p></li>
                    <li><p > Open Source Geospatial Empowerment</p></li>
                    <li><p >Humanitarian Response Mapping Team</p></li>
                    <li><p > OpenStreetMap Nigeria Community</p></li>
                    <li><p > Participatory Citizen Science</p></li>
                  </ul>
                 
                </div>
              </div>
              <div class="carousel-item active" data-interval="20000">
                <img src="./img/theme/download.jpg" class="d-block w-100 " alt="...">
                <div class="carousel-caption d-sm-block">
                  
                </div>
              </div>
              <div class="carousel-item active" data-interval="20000">
                <img src="./img/theme/download.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-sm-block">
                 
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
      <!--Banner end-->
    <section class="section-1">
        <div class="text-center container">
            <div class="row">
            <div class="col-md-6 col-sm-6 col-6">
                <marquee behavior="scroll"  height="120" direction="up" scrolldelay="250">
                <div class="text-center"><span class="name pr-4">Crowd source</span> <span class="amount pr-4">mapping</span> <i class="fas fa-caret-down text-danger"></i> <span class="px-4 text-danger">OSM</span></div>
                <div class="mt-4 text-center"><span class="name pr-4">GeoNode</span> <span class="amount pr-4">Open Source</span> <i class="fas fa-caret-up text-danger"></i> <span class="px-4 text-danger">OSGeo</span></div>
                <div class="mt-4 text-center"><span class="name pr-4"> OpenStreetMap  </span> <span class="amount pr-4">Nigeria</span> <i class="fas fa-caret-up text-warning"></i> <span class="px-4 text-danger">Community</span></div>
                <div class="mt-4 text-center"><span class="name pr-4">Humanitarian </span> <span class="amount pr-4"> Response</span> <i class="fas fa-caret-up text-warning"></i> <span class="px-4 text-danger">Mapping Team</span></div>
                </marquee>
            </div>
            <div class="col-md-6 col-sm-6 col-6">
                <marquee behavior="scroll" direction="up" height="120"  scrolldelay="250">
                <div class="text-center"><span class="name pr-4">Data</span> <span class="amount pr-4">Collection</span> <i class="fas fa-caret-up text-green"></i> <span class="px-4 text-green">ODK</span></div>
                <div class="mt-4 text-center"><span class="name pr-4">Citizen </span> <span class="amount pr-4">Science</span> <i class="fas fa-caret-up text-green"></i> <span class="px-4 text-green">StallCatchers</span></div>
                <div class="mt-4 text-center"><span class="name pr-4">Mobile  </span> <span class="amount pr-4">Data</span> <i class="fas fa-caret-up text-info"></i> <span class="px-4 text-danger">Collection</span></div>
                <div class="mt-4 text-center"><span class="name pr-4">Open Source </span> <span class="amount pr-4">Geospatial </span> <i class="fas fa-caret-up text-info"></i> <span class="px-4 text-danger">Empowerment</span></div>
                </marquee>
            </div>
            </div>
        </div>
    </section>
    <!-- why choose us -->
    <section class="choose__us" id="choose">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 mx-auto pt-5">
                <div class="container">
                    <img src="/img/about.jpg" class="img-fluid" alt="">
                </div>
                </div>
                <div class="col-12 col-sm-6 col-md-8 mx-auto pt-4">
                <div class="container">
                    <h2 class="title__head">WHAT WE DO</h2>
                    <p>ONLINE CROWDSOURCED MAPPING
                      A gathering of Volunteers to create and edit professional quality mobile digital maps that are up-to-date on events such as humanitarian crises, crime, wars and natural disasters. We join emergency response efforts led by the Humanitarian OpenStreetMap Team (HOT) when an active crises arises. We proactively map the places in the world where the most vulnerable people live that are not accessible in the map.
                      </p>
                    <a class="btn btn-btn btn-fill" href="{{route('main_us')}}">know more</a>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why choose us end-->
    <!--what we offer -->
    <section class="we__offer">
        <div class="container">
          <div class="row" id="offer">
            <div class="col-10 col-sm-6 col-md-8 mx-auto">
              <div class="container">
                <h2 class="title__head">What Our Platform Offers You</h2>
                <p>We can carry out financial inclusive community research using mobile data and geospatial technology And make such data globally accessible We engage the youths in national mapping competition and needs corporate partnership support, We define vulnerable communities for response</p>
                <p>OpenStreetMap is built by a community of mappers that contribute and maintain data about roads, trails, cafés, railway stations, and much more, all over the world.
                  </p>
              </div>
              <div class="row">
                <div class="col-10 col-md-6 col-sm-4 mx-auto py-3">
                  <ul>
                    <li><img src="./img/security.png" class="img-fluid" alt=""> Security</li>
                  </ul>
                </div>
                <div class="col-10 col-md-6 col-sm-4 mx-auto py-3">
                  <ul>
                    <li><img src="./img/fly.png" class="img-fluid" alt=""> Instant Payment</li>
                  </ul>
                </div>
                <div class="col-10 col-md-6 col-sm-4 py-3 mx-auto">
                  <ul>
                    <li><img src="./img/dollar.png" class="img-fluid" alt=""> Stable Income</li>
                  </ul>
                </div>
                <div class="col-10 col-md-6 col-sm-4 py-3 mx-auto">
                  <ul>
                    <li><img src="./img/call.png" class="img-fluid" alt=""> 24 Hours Support</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-10 col-sm-6 col-md-4 mx-auto">
              <div class="container">
                <img src="img/offer.jpg" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- what we offer end 
        =========================================================-->
    <!-- How it works -->
    <section class="works mt-sm-4">
        <div class="container">
        <div class="row" id="works">
            <div class="col-10 col-sm-6 col-md-4 mx-auto">
            <div class="container">
                <img src="img/img.png" class="img-fluid" alt="">
            </div>
            </div>
            <div class="col-10 col-sm-6 col-md-8 mx-auto">
            <div class="container">
                <h2 class="title__head">SUSTAINABLE MAPPING OF OUR ENVIRONMENT</h2>
               <p> Equipping its members with Frontline practical mapping and geospatial.</p>
                <h4 class="title__head">FEATURED WORK</h4>
                <p>We work together, we explore, we impact and we map the difference.
                   
                    </p>
                <p> we provide the map that saves life.
                    we build mappers.</p>
                <h6>Achievement Links </h6>
                <ul>
                  <li> <a href="https://twitter.com/VictorS60596921
                    ">UniqueMappersTeam Twitter page </a></li>
                  <li> <a href="https://twitter.com/uniquemappers
                    "> UniqueMappersTeam </a> </li>
                  <li> <a href="http://blogs.discovermagazine.com/citizen-science-salon/2019/03/20/fighting-alzheimers-disease-during-the-megathon-spotlight-on-three-citizen-scientists/#.XP21LlxKiM9">Fighting Alzheimers Disease During the Megathon</a> </li>
                  <li> <a href="https://www.hotosm.org/updates/uniquemappersteam-collaboration-with-transparent-earth-nigeria-ltd/">UniqueMappersTeam Collaboration with Transparent Earth Nigeria Ltd</a> </li>
                  <li> <a href="https://www.hotosm.org/updates/ripples-of-hot-micro-grants-impact-on-uniquemappersteam-community/">Ripples of HOT Micro Grant impact on UniqueMappersTeam Community</a> </li>
                 
                </ul>
            </div>
            </div>
        </div>
        </div>
    </section>
  <!-- How it works end 
    ==========================================================-->
    <section class="plans">
        <div class="container" id="plans">
            <h2 class="title__head pb-5 text-center">OUR AMAZING PARTNER AND SUPPORTERS</h2>
            <div class="row card-body">
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 partner">
              <div class="px-4">
                <img src="{{asset('img/theme/arc.jfif')}}" class=" img-center img-fluid shadow shadow-lg--hover" >
                
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 partner">
              <div class="px-4">
                <img src="{{asset('img/theme/iphone.png')}}" class=" img-center img-fluid shadow shadow-lg--hover" >
                
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 partner">
              <div class="px-4">
                <img src="{{asset('img/theme/qgis.jpg')}}" class=" img-center img-fluid shadow shadow-lg--hover" >
                
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 partner">
              <div class="px-4">
                <img src="{{asset('img/theme/me.png')}}" class=" img-center img-fluid shadow shadow-lg--hover">
                
              </div>
            </div>
            <div class="row card-body">
              <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 partner">
                <div class="px-4">
                  <img src="{{asset('img/theme/odk.png')}}" class=" img-center img-fluid shadow shadow-lg--hover" >
                  
                </div>
              </div>
              <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 partner">
                <div class="px-4">
                  <img src="{{asset('img/theme/OSM-Fight.png')}}" class=" img-center img-fluid shadow shadow-lg--hover" >
                  
                </div>
              </div>
              <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 partner">
                <div class="px-4">
                  <img src="{{asset('img/theme/mapswipe.png')}}" class=" img-center img-fluid shadow shadow-lg--hover" >
                  
                </div>
              </div>
              <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 partner">
                <div class="px-4">
                  <img src="{{asset('img/theme/map.jpg')}}" class=" img-center img-fluid shadow shadow-lg--hover">
                  
                </div>
              </div>
            </div>
            <div class="row card-body">
              <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 partner">
                <div class="px-4">
                  <img src="{{asset('img/theme/globe.png')}}" class=" img-center img-fluid shadow shadow-lg--hover" >
                  
                </div>
              </div>
              <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 partner">
                <div class="px-4">
                  <img src="{{asset('img/theme/mos.jpg')}}" class=" img-center img-fluid shadow shadow-lg--hover" >
                  
                </div>
              </div>
              <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 partner">
                <div class="px-4">
                  <img src="{{asset('img/theme/stall.jpg')}}" class=" img-center img-fluid shadow shadow-lg--hover" >
                  
                </div>
              </div>
              
            </div>
          </div>
        </div>
    </section>
     <!-- map -->
    <section class="map">
        <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            <div class="map-responsive">
                <iframe
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                width="800" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
            </div>
            </div>
        </div>
        </div>
    </section>
  <!-- map end 
      ==========================================================-->

    <section class="connect">
        <h2 class="title__head text-center">Let's Connect!</h2>
        <div class="container" id="contact">
        <div class="links">
            <aside>
                <a><i class="fas fa-envelope " href="uniquemappersteam@gmail.com"></i></a>
                
               
                
                <a href=""> <a target="_blank" href="https://facebook.com/uniquemappersteam"
                    data-toggle="tooltip" data-original-title="Like us">
                    <i class="fab fa-facebook-f "></i>
                </a>
                
                <a target="_blank" href="https://twitter.com/@uniquemappers" data-toggle="tooltip" data-original-title="Follow us">
                    <i class="fab fa-twitter "></i>
                </a>
               
                
                
                <a target="_blank" href="https://github.com/ikeogu/umt"  data-toggle="tooltip" data-original-title="Star on Github">
                <i class="fab fa-github "></i>
                </a>
            </aside>   
                
            
        </div>
        </div>
  </section>
@endsection