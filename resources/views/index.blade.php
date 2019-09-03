@extends('layouts.app')

@section('content')

<div class="position-relative">
      <!-- shape Hero -->
      <section class="section section-lg section-shaped ">
        <div class="shape shape-style-1 shape-dark">
       
        </div>
       
         <!--Banner starts here-->
    <div id="banner">

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div id="bg-slider" class="carousel slide" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active one">
                            <div class="carousel-caption text-white">
                                <h2 class="text-white">We Are</h2>
                                <h1 class="text-white">UniqueMappersTeam </h1>
                                    <h2 class="text-white">Network</h2>
                            </div>

                        </div>
                        <div class="item two">
                            
                        </div>
                        <div class="item three">
                        </div>
                    </div>

                    
                </div>

            </div>
        </div>
    </div>

       
        
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew">
          <svg x="0" y="0" viewBox="0 0 2160 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
       
            <polygon class="fill-white" points="2160 0 2160 100 0 100"></polygon>

          </svg>
        </div>
      </section>
      <!-- 1st Hero Variation -->
    </div>
    <section class="section section-lg">
       
    </section>
    <section class="section section-lg">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-md-6 order-md-2">
            <img src="{{asset('img/theme/macbook-pro.jpg')}}" class="img-fluid floating">
          </div>
          <div class="col-md-6 order-md-1">
            <div class="pr-md-5">
              <div class="icon icon-lg icon-shape icon-shape-primary shadow rounded-circle mb-5">
                <i class="ni ni-satisfied"></i>
              </div>
              <h3>UniqueMappersTeam features</h3>
              <p>We are known for most humanitarian services, particularly most of our activities are Geospatial Activities, which includes</p>
              <ul class="list-unstyled mt-5">
                <li class="py-2">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="badge badge-circle badge-primary mr-3">
                        <i class="ni ni-satisfied"></i>
                      </div>
                    </div>
                    <div>
                      <h5 class="mb-0">Participatory Citizen Science</h5>
                      <h6 class="mb-0"> The Gathering of volunteers to carry out scientific research<h6>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="badge badge-circle badge-primary mr-3">
                        <i class="ni ni-satisfied"></i>
                      </div>
                    </div>
                    <div>
                      <h5 class="mb-0"> Sustainable Maping of Our Environment</h5>
                      <h6 class="mb-0">Local and remote mapping for disaster response and socioeconomic development</h6>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="badge badge-circle badge-primary mr-3">
                        <i class="ni ni-satisfied"></i>
                      </div>
                    </div>
                    <div>
                      <h5 class="mb-0">Equipping Its Members with Frontline Pratical maping and Geospatial Skills Empowerment</h5>
                      <h6 class="mb-0">Brings training to your door step</h6>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section pb-0  bg-gradient-default">
        <div class="container">
          <div class="d-flex px-3">

          <div class=" justify-content-center text-center mb-lg">
            <h4 class="display-3 text-white">Benefits For volunteers</h4>
            <p class="text-white ">UniqueMappersTeam Newtork is made up of the following sub-team.</p>
          </div>

                     
          </div>
          <div class="row row-grid align-items-center">
              <div class="col-md-6">
                <div class="row">
                  <div class=" bg-default shadow border-0 ">
                    <img src="{{asset('img/theme/benefits.png')}}" class="card-img-top" height="500" width="1500">
                  </div>
                  
                 
                </div>
              </div> 
              <div class="col-md-6 p-5">
                  <div class="pl-md-5">
                    <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle mb-5 text-white">
                      <i class="ni ni-satisfied"></i>
                    </div>
                    
                    <h3 class="text-white">A brief of it</h3>
                      <p class="text-white">UniqueMappersTeam connects you to thousands of projects in need of your help<br>When you create an account, you can track your contributions to OSM on your dashboard. Add your interests and location to your profile to get custom project and event recommendations. You can also connect to the thousands of other citizen scientists / volunteers in our community to answer questions, share experiences, and more</p>
                      <ul class="text-white">
                        <li>Crowd sourcing</li>
                        <li>Field data collction </li>
                        <li>Open data mapping</li>
                        <li>Open Source Geospatial Technology Empowerment</li>
                        <li>Open source innovation</li>
                        <li>Community Participatory research </li>
                        <li>Participatory Citizen Science Activities/ Research</li>
                        <li>Professional Mentoring </li>
                        <li>Free Traning on Open source Geospatial Software Applications</li>
                        <li>Skill Acquisation and Self development</li>
                        <li>Gender Equality Drive</li>
                        <li>Competent in Research and Knowledge Sharing</li>
                        <li>Oppurtunity for Professional International Networking among communities</li>
                        <li>Oppurtunity to Travel Grant for conferences</li>
                      </ul>
                  </div>
                </div>
          </div>
        </div>
    </section>        
    <section class="section bg-secondary">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-md-6">
            <div class="card bg-default shadow border-0">
              <img src="{{asset('img/theme/iphone.png')}}" class="card-img-top">
              <blockquote class="card-blockquote">
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="svg-bg">
                  <polygon points="0,52 583,95 0,95" class="fill-default" />
                  <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default" />
                </svg>
                <h4 class="display-3 font-weight-bold text-white">We deal With</h4>
                <h4 class="lead text-italic text-white">OpenStreetMap and other Open Source Geospatial Tools.</h4>
              </blockquote>
            </div>
          </div>
          <div class="col-md-6">
            <div class="pl-md-5">
              <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle mb-5">
                <i class="ni ni-satisfied"></i>
              </div>
              <h3>OpenStreetMap</h3>
              <p class="lead">OSM is a map and database whereby the stored geographic data is owned by the contributors themselves, allowing everyone to view, create, use this information for free, in new and innovative ways. We use this great tool, which is the editable map of the world,in which every features of the earth can be represented, these features includes building,roads,water ways and more.</p>
              <p>To help in humanitarian services, we use this tool to represent  communities prone to disasters on the digital map and those NGOs who are to take care of those in need of help can easily get information of these communities prone to disaster and respond to them </p>
              <p>We try to represent every family on this platform and from this OpenStreetmap Platform, research can be carried out, like high density of Malaria in Nigeria.</p>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section pb-0  bg-gradient-default">
      <div class="container">
        <div class="d-flex px-3">
                
                <div class=" justify-content-center text-center mb-lg">
                    <h4 class="display-3 text-white">Affilated Teams</h4>
                    <p class="text-white ">UniqueMappersTeam Newtork is made up of the following sub-team.</p>
                </div>
            </div>
        <div class="row row-grid align-items-center">
            
          
          <div class="col-md-4 order-lg-2 ml-lg-auto">
            <div class="card shadow shadow-lg--hover mt-5">
              <div class="card-body">
                <div class="d-flex px-3">
                  
                  <div class="pl-4">
                    <h5 class="title text-primary">AbsuMappersTeam</h5>
                    
                    <p> Abia State University</p>
                    <p> Abia State</p>
                    <a href="https://www.facebook.com/Absumappersteam-1709186109157466/?__tn__=%2Cd%2CP-R&eid=ARDzg-nitixoPjEhXWHGclmBeK8hbqN1d3VUy6QmwcII9r9MTWFElbywYJa-I6nkjNV4W-ww6ChWyX-s" class="text-primary"><i class="fa fa-facebook"></i> visit FB page</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card shadow shadow-lg--hover mt-5">
              <div class="card-body">
                <div class="d-flex px-3">
                  
                  <div class="pl-4">
                    <h5 class="title text-primary">ImsuMappersTeam</h5>
                    <p>School:Imo State Univesity </p>
                    <p>Imo State</p>
                    <a href="https://www.facebook.com/Imsumappersteam-Owerri-260247004656628/" class="text-primary"> <i class="fa fa-facebook"></i> visit FB page</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="card shadow shadow-lg--hover mt-5">
              <div class="card-body">
                <div class="d-flex px-3">
                  
                  <div class="pl-4">
                    <h5 class="title text-primary">IgnatusMappersTeam</h5>
                    <p> Porth Harcourt Rivers State</p>
                    <a href="https://www.facebook.com/ignatiusmappersteam/" class="text-primary"> <i class="fa fa-facebook"></i> visit FB page</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 order-lg-1">

              <div class="card shadow shadow-lg--hover mt-5">
              <div class="card-body">
                <div class="d-flex px-3">
                  
                  <div class="pl-4">
                    <h5 class="title text-primary">OyoMappersTeam</h5>
                    <P>Oyo State University</P>
                    <p> Oyo State </p>
                  
                    <a href="#" class="text-primary"> <i class="fa fa-facebook"></i> visit FB page</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="card shadow shadow-lg--hover mt-5">
              <div class="card-body">
                <div class="d-flex px-3">
                  
                  <div class="pl-4">
                    <h5 class="title text-primary">Lionmappersteam</h5>
                    <p> University of Nigeria Nsukka</p>
                    <p> Enugu State</p>
                    
                    <a href="https://www.facebook.com/Lionmappersteam-enugu-Campus-361221567667528/" class="text-primary"><i class="fa fa-facebook"></i>visit FB page</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card shadow shadow-lg--hover mt-5">
              <div class="card-body">
                <div class="d-flex px-3">
                  
                  <div class="pl-4">
                    <h5 class="title text-primary">LionMappersTeam</h5>
                    <p>Enugu Campus</p>
                    <p>Enugu State</p>
                    <a href="#" class="text-primary"> <i class="fa fa-facebook"></i> visit FB page</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 order-lg-1">
            <div class="card shadow shadow-lg--hover mt-5">
                <div class="card-body">
                  <div class="d-flex px-3">
               
                    <div class="pl-4">
                      <h5 class="title text-primary">UniMadMappersTeam</h5>
                      <p>University of Madugiri</p>
                      <p>Borno Sate</p>
                      <a href="#" class="text-primary"> <i class="fa fa-facebook"></i> visit FB page</a>
                    </div>
                  </div>
                </div>
            </div>

            <div class="card shadow shadow-lg--hover mt-5">
              <div class="card-body">
                <div class="d-flex px-3">
                
                  <div class="pl-4">
                    <h5 class="title text-primary">FutoMappersTeam</h5>
                    <p>Fedral University of Technology Oweeri</p>
                    <p>Owerri Imo State</p>
                    <a href="#" class="text-primary"> <i class="fa fa-facebook"></i> visit FB page</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card shadow shadow-lg--hover mt-5">
              <div class="card-body">
                <div class="d-flex px-3">
               
               
                <div class="pl-4">
                <h5 class="title text-primary">UniLagMappersTeam</h5>
                <p>University of Lagos.</p>
                <p>Lagos State</p>
                <a href="#" class="text-primary"> <i class="fa fa-facebook"></i>visit FB page</a>
                </div>
            </div>
            </div>
            </div>
            </div> 
        </div>


      </div>
      <!-- SVG separator -->
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>
    <section class="section section-lg">
      <div class="container card">
        <div class="row justify-content-center text-center mb-lg">
          <div class="col-lg-8">
            <h2 class="display-3 card-title">Our Amazing Partners</h2>
            <p class="lead text-muted">We are blessed by this organisations.They are indeed good partners</p>
          </div>
        </div>
        <div class="row card-body">
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 partner">
            <div class="px-4">
              <img src="{{asset('img/theme/hot.png')}}" class=" img-center img-fluid shadow shadow-lg--hover" >
              
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 partner">
            <div class="px-4">
              <img src="{{asset('img/theme/youth.png')}}" class=" img-center img-fluid shadow shadow-lg--hover" >
              
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 partner">
            <div class="px-4">
              <img src="{{asset('img/theme/rich.png')}}" class=" img-center img-fluid shadow shadow-lg--hover" >
              
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 partner">
            <div class="px-4">
              <img src="{{asset('img/theme/logonew.png')}}" class=" img-center img-fluid shadow shadow-lg--hover">
              
            </div>
          </div>
         
        </div>
      </div>
    </section>
    <section class="section bg-gradient-default">
        <div class="container card">
          <div class="row justify-content-center text-center mb-lg">
            <div class="col-lg-8">
              <h2 class="display-3 card-title">Platform we use</h2>
              <p class="lead text-black">We make use of web-based application platforms for <br> developing information systems and for<br>deploying spartial data infastructure</p>
            </div>
          </div>
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
      
    <section class="section section-lg bg-gradient-default">
      <div class="container pt-lg pb-300">
     
        <div class="row justify-content-center text-center mb-lg">
          <div class="col-lg-8">
            <h2 class="display-3 text-white"> Contact Us</h2>
            <p class="lead text-muted text-white"> You can get in touch with us </p>
          </div>
        </div>
      </div>
      <!-- SVG separator -->
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>
    <section class="section section-lg pt-lg-0 section-contact-us">
      <div class="container">
        <div class="row justify-content-center mt--300">
          <div class="col-lg-8">
            <div class="card bg-gradient-secondary shadow">
              <div class="card-body p-lg-5">
              
					<div class="contact-info-box address clearfix">
						<h3><i class="fa fa-address-card"></i> Address:</h3>
						<span> University of Port harcourt <br> Choba, Port Harcourt, Rivers State.</span>
					</div>
					<div class="contact-info-box phone clearfix">
						<h3><i class="fa fa-phone"></i> Phone:</h3>
						<span> +234-8063-908-020</span>
						<span> +234-8133-627-610</span>
					</div>
					<div class="contact-info-box email clearfix">
						<h3><i class="fa fa-envelope"></i> email:</h3>
						<span> uniquemappersteam@gmail.com</span>
					</div>
					<div class="contact-info-box hours clearfix">
						<h3><i class="fa fa-clock-o"></i> Hours:</h3>
						<span><strong> Monday - Thursday:</strong> 10am - 7pm<br><strong>Friday:</strong> 10am - 4pm<br><strong>Saturday - Sunday:</strong> Not avaliable</span>
					</div>
					<ul class="social-link">
						<li class="twitter"><a href="https://twitter.com/@uniquemappers"><i class="fa fa-twitter"></i></a></li>
						<li class="facebook"><a href="https://facebook.com/uniquemappersteam"><i class="fa fa-facebook"></i></a></li>
							<li class="gplus"><a href="https://gmail.com/uniquemappersteam@gmail.com"><i class="fa fa-google-plus"></i></a></li>
						<li class="gplus"><a href="https://ccs.infospace.com/ClickHandler.ashx?encp=ld%3d20180809%26app%3d1%26c%3dhandytab1%26s%3dhandytab%26rc%3dhandytab1%26dc%3d%26euip%3d129.56.130.106%26pvaid%3d5e42d07281cb4e7c8cd8b7d1a8cfaf09%26dt%3dDesktop%26gdpr%3dFalse%26fct.uid%3dfc9dd3876a65494aa9ba1ee2c82e6ed2%26en%3dCzTQwdmcejSAFqHdKNxkzRsVGx0kjev63zgK0mGHvVlOVwAyWiSFnb27SoJil3NS%26coi%3d1494%26npp%3d1%26p%3d0%26pp%3d0%26mid%3d9%26ep%3d1%26ru%3dhttps%253a%252f%252fwww.hotosm.org%252fupdates%252funiquemappersteam-collaboration-with-transparent-earth-nigeria-ltd%252f%26du%3dhttps%253a%252f%252fwww.hotosm.org%252fupdates%252funiquemappersteam-collaboration...%26hash%3d6C329D3CE58B3E1367EC6E545A930AD5&ap=1&cop=main-title&om_userid=&om_sessionid=&om_pageid="> <i class="fa fa-google-plus"></i> visit our HOT page</a> </li>
						<li class="gplus">  <a href="https://www.hotosm.org/projects/uniquemappersteam-umt-youthmappers/"> <i class="fa fa-google-plus"></i> visit our publications</a></li>
					</ul>
				</div>
				

            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    @endsection