@extends('layouts.main')
@section('mainview')
    <section class="choose__us" id="choose">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 mx-auto pt-5">
                
                </div>
                <div class="col-12 col-sm-6 col-md-8 mx-auto pt-6">
                    <div class="container">
                        <h2 class="title__head clog">Blog</h2>
                        
                    </div>
                   
                    
                </div>
            </div>
           
        </div>
        <div class="blog ">
                <div class="row">
                    <div class="col-6  col-sm-6 card" id="img">
                    <a href="{{route('single')}}">
                        <img src="/img/theme/5.png" alt="..."  height="300" width="645">
                        </a>
                    </div>
                    <div class="col-6  col-sm-6 card" id="cont">
                        <a href="{{route('single')}}">
                        <h3>Testing</h3>
                        <h5>Subtitle</h5>
                        <h6>August 10,2019</h6>
                        </a>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-6 card col-sm-6" id="cont">
                        <a href="">
                         <h3>Testing</h3>
                        <h5>Subtitle</h5>
                        <h6>August 10,2019</h6>
                        </a>
                    </div>
                    <div class="col-6 card col-sm-6" id="img">
                        <a href="">
                        <img src="/img/theme/5.png"alt="..." height="300" width="645">
                        </a>
                    </div>
                    
                </div>
                <div class="row">

                    <div class="col-6 card col-sm-6" id="img">
                        <a href="">
                         <img src="/img/theme/5.png" alt="..."height="300" width="645">
                        </a>
                    </div>
                    <div class="col-6 card col-sm-6" id="cont">
                        <a href="">
                         <h3>Testing</h3>
                        <h5>Subtitle</h5>
                        <h6>August 10,2019</h6>
                         </a>
                    </div>
                    
                </div>
            </div>
    </section>
@endsection