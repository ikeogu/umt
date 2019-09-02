@extends('layouts.app')
@section('content')

<section class="section section-lg section-shaped ">
    <div class="shape shape-style-1 shape-dark">
        <span></span>
        <span></span>
        <span></span>
    </div>
 <!-- SVG separator -->
    <div class="separator separator-bottom separator-skew">
        <svg x="0" y="0" viewBox="0 0 2350 80" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">

        <polygon class="fill-white" points="2350 0 2350 80 0 80"></polygon>

        </svg>
    </div>
</section>
        
    <div class="container">
        <h2>{{$attend->date}} Attendance</h2>
        <p>This helps us to keep track of active Members</p>
    <p>Date :{{$attend->date}}. <small>Venue: {{$attend->venue}}</small>. <small>Time: {{$attend->time}}</small></p>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                
                <th>Name</th>
                <th>Dept</th>
                <th>Level</th>
                <th>Phone</th>
                <th>OSM UserName</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($attend->attend as $item)
                 <tr>
                     
                    <td>{{$item->name}}</td>
                    <td>{{$item->dept}}</td>
                    <td>{{$item->level}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->osmusername}}</td>
                </tr>
            @endforeach
            
          
            </tbody>
        </table>
        <hr><hr><br>
                       
        <div class="content">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
            @endif
        </div>
          
        <h6 class="text-center">Add Attendance</h6>
        <div class="card p-5">
        <form action="{{route('attendee.store')}}" method="POST">
            @csrf
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationDefault01">Name</label>
                    <input type="text" class="form-control" id="validationDefault01" placeholder="Name" required name="name">
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationDefault02">Dept</label>
                    <input type="text" class="form-control" id="validationDefault02" placeholder="Department"  required name="dept">
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationDefaultUsername">OSM Username</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                      </div>
                      <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required name="osmusername">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault04">Level</label>
                    <input type="text" class="form-control" id="validationDefault04" placeholder="State" required name="level">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault05">Phone</label>
                    <input type="text" class="form-control" id="validationDefault05" placeholder="08033455550" required name="phone">
                  </div>
                </div>
                <input type="hidden" value="{{$attend->id}}" name="attend">
                <button class="btn btn-primary" type="submit">Present</button>
            </form>
        </div>   
    </div>

@endsection