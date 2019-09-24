@extends('layouts.main')
@section('mainview')
<section>
   
        <div id="blog_title">
            <h2>{{$blo->title}}</h2>
            <div class="card date">
                <h6 >{{$blo->created_at->format('d/m/Y')}}</h6>
            </div>
        </div>
    <div class="container-fluid">
        <div class="cont">
        <div id="img">
            <img src="/storage/blog_post/{{$blo->image}}" alt="..." height="400" width="100%" >
        </div>
        <div class="blog_content">
            <p>{{$blo->body}}</p>
        </div>
    </div> 
    
        
</section>
@endsection