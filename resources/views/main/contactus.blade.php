@extends('layouts.main')
@section('mainview')
    <section class="testimony">
        <h2 class="title__head py-4 text-center">Contact us</h2>
        <div class="container" id="testimony">
          <div class="row justify-content-center">
            <div class="col-10 col-sm-6 col-md-5 mx-auto">
              <div class="card p-4" id="card">
                <img src="{{asset('img/sp.jpeg')}}" alt=""  width="150" class="img-fluid mx-auto">
                <i class="fas fa-quote-right text-center "></i>
                <p class="pt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit..</p>
                <p class="text-right"><strong>Mr Victor Sunday</strong></p>
              </div>
            </div>
            <div class="col-10 col-sm-6 col-md-5 mx-auto pt-2">
              <div class=" p-4" >
                  
                <i class="fas fa-quote-right text-center"></i> 
                <p class="pt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam veniam,ratione voluptates amet
                  laborum, animi explicabo sapiente ipsa officia illo voluptatum recusandae iure vero nemo. Dolorem ab iusto
                  autem quae debitis soluta consequatur esse, fugit, eligendi earum reprehenderit, consectetur deleniti.</p>
               
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Testimonies end 
        ==========================================================-->
    
      <!-- Contact -->
      <section class="contact">
        <h2 class="title__head text-center">Contact us</h2>
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
              
        <div class="container" id="contact">
          <div class="row">
            <div class="col-12 col-sm-6 mx-auto my-2">
              <img src="{{asset('/img/contact.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-12 col-sm-6 mx-auto mt-4">
              <div class="container">
              <form action="{{route('contact.store')}}" method="POST">
                @csrf
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas  fa-user"></i></span>
                      </div>
                      <input type="text" class="form-control" placeholder="Full Name" name="name">
                    </div>
                    <div class="input-group my-4">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas  fa-envelope"></i></span>
                      </div>
                      <input type="email" class="form-control" placeholder="Email Address" name="email">
                    </div>
                    <div class="input-group my-4">
                      <textarea class="form-control" rows="9" placeholder="Enter Your Message Here" name="message"></textarea>
                    </div>
                </form>
                <button class="btn btn-btn btn-fill d-flex ml-auto">Send Message</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- contact end 
@endsection