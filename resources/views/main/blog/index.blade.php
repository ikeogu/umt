@extends('layouts.main')
@section('mainview')
    <section class="choose__us" id="choose">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 mx-auto pt-5">
                
                </div>
                <div class="col-12 col-sm-6 col-md-8 mx-auto pt-6">
                    <div class="container">
                        <h2 class="title__head">Blog</h2>
                        
                    </div>
                   
                    
                </div>
            </div>
        </div>   
        
            <div class="blog ">
            @if ($status === 0)
                <div class="row card">
                    <h3>We have No Post yet!</h3>
                    
                </div>
            @elseif ($status === 1)
                @foreach ($blog as $item)
                    <div class="row">
                        <div class="col-6 col-md-6 col-sm-6 card" id="img">
                        <a href="/blog/{{$item->id}}">
                        <img src="storage/blog_post/{{$item->image}}" alt="..."  height="300" width="645">
                                </a>
                            </div>
                        <div class="col-6 col-md-6 col-sm-6 card" id="cont">
                            <a href="/blog/{{$item->id}}">
                            <h3>{{$item->title}}</h3>
                            <h5>{{$item->subtitle}}</h5>
                            <h6>{{$item->created_at->diffForHumans()}}</h6>
                            </a>
                        </div>
                        
                    </div>
                @endforeach
            @else
                @foreach ($blog as $item)
                <div class="row">
                    <div class="col-6 col-md-6 col-sm-6 card" id="cont">
                        <a href="/blog/{{$item->id}}">
                        <h3>{{$item->title}}</h3>
                        <h5>{{$item->subtitle}}</h5>
                        <h6>{{$item->created_at->diffForHumans()}}</h6>
                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-sm-6 card" id="img">
                        <a href="/blog/{{$item->id}}">
                            <img src="storage/blog_post/{{$item->image}}" alt="..."  height="300" width="645">
                        </a>
                    </div>
                </div> 
                @endforeach
            @endif
            </div>
         
    </section>
@endsection