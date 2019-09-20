<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!--Bootstrap css-->
  <link rel="stylesheet" href="{{secure_asset('css/bootstrap3.min.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/72094f5737.js" crossorigin="anonymous"></script>
  <!--Main css-->
  <link rel="stylesheet" href="{{secure_asset('/css/style3.css')}}">
  <!--Font awesome-->
  <link rel="stylesheet" href="{{secure_asset('/css/all3.css')}}">
  <title>UniqueMappers </title>
  <script src="https://unpkg.com/scrollreveal@4"></script>
  <script>
    window.sr = ScrollReveal({
      distance: '100px',
      duration: 1000,
      easing: 'ease',
      mobile: true,
      reset: false,
      scale: 1,
      viewFactor: 0.1,
    });
  </script>
</head>

<body>
  <!-- task bar-->
  <div class="top-nav">
    <ul class="contact">
      <li><i class="fas fa-envelope"></i></li>
      <li>uniquemappersteam@gmail.com</li>
      <li>|</li>
      <li><i class="fas fa-phone"></i></li>
      <li>+234  806 3908 020</li>
      <li>+234  810 2779 652</li>
    </ul>
    <ul class="social_links">
      <li><a href=""> <a target="_blank" href="https://facebook.com/uniquemappersteam"
         data-toggle="tooltip" data-original-title="Like us">
        <i class="fab fa-facebook-f"></i>
      </a></li>
      
      <li> <a target="_blank" href="https://twitter.com/@uniquemappers" data-toggle="tooltip" data-original-title="Follow us">
        <i class="fab fa-twitter"></i>
      </a>
    </li>
     
      <li>
        <a target="_blank" href="https://github.com/ikeogu/umt"  data-toggle="tooltip" data-original-title="Star on Github">
          <i class="fab fa-github"></i>
        </a>
      </li>
      
      <li>
        <a  href="{{route('local')}}" style="color:aliceblue">
          visit uniquemappersteam (local)
        </a>
      </li>
    </ul>
  </div>
  <!-- task bar end-->

  <!--Header-->
  <header>
    <nav>
      <div class="branding">
        <h2>UniqueMappers Open Source Network</h2>
      </div>
      <ul class="nav-links">
        <li><a href="/" class="active">Home</a></li>
        <li><a href="{{route('main_us')}}">About us</a></li>
        <li><a href="#offer">What We Offer</a></li>
        <li><a href="{{route('board')}}">Board of Trustees </a></li>
        <li><a href="{{route('blog.index')}}">Blog</a></li>
        <li><a href="{{route('contact.create')}}">Contact</a></li>
        <li><a class="btn btn-btn btn-fill" href="https://docs.google.com/forms/d/e/1FAIpQLScxaovxjtJzRoZFFPnExW72WOM2FJG-yPykSfVuPsCvRoxaSw/viewform" target="_blank">Register</a></li>
       
      </ul>
      <div class="menu-toggle">
        <i class="fas fa-bars" aria-hidden="true"></i>
      </div>
    </nav>
  </header>

  <!-- News -->
  <div class="news text-center">
    <marquee behavior="scroll" direction="right">
      <ul>
        <li> We are <strong> Unique</strong> <i class="fas fa-caret-right color0"></i> In everything</li>
        <li>We are <strong> Unique</strong> <i class="fas fa-caret-right color1"></i> In Mapping</li>
        <li>We are  <strong> Unique</strong><i class="fas fa-caret-right color2"></i> Humaniterian Services</li>
        <li>We are <strong> Unique</strong> <i class="fas fa-caret-right color0"></i> MappersTeam</li>
        <li>We are<strong> Unique</strong> <i class="fas fa-caret-right color0"></i> Mapper Open Source Network</li>
      </ul>
    </marquee>
  </div>
  
      @yield('mainview')
  
  <footer>
      <div class="container">
      <div class="main__footer py-5">
        <div class="row">
          <div class="col-10 col-sm-4 col-md-4 px-3 mx-auto">
            <div class="container">
              <h2 class="footer__title">UniqueMappers Open Source Network</h2>
              <ul class="footer__links">
                <li><i class="fab fa-facebook-f fab-links"></i></li>
                <li><i class="fab fa-instagram fab-links"></i></li>
                <li><i class="fab fa-twitter fab-links"></i></li>
              </ul>
            </div>
          </div>
          <div class="col-10 col-sm-2 col-md-3 mx-auto py-4">
            <h4>Quick Links</h4>
            <div class="container">
              <ul>
                <li> <a href="{{route('main_us')}}">About</a></li>
                <li> <a href="#">Privacy Policy</a></li>
                <li> <a href="#">Consultancy</a></li>
                <li> <a href="{{route('contact.create')}}">Contact us</a></li>
                <li> <a href="#">Terms And Conditions</a></li>
              </ul>
            </div>
          </div>
          <div class="col-10 col-sm-6 col-md-5 mx-auto">
            <div class="container">
              <h2 class="footer__title">Subscribe To Our NewsLetter</h2>
              <p>Subscribe to our newsletter to get important news, amazing offers & inside scoops:</p>
              <form action="">
                <div class="form-group">
                  <div class="input-group my-4">
                    <input type="text" class="form-control" placeholder="Email Address">
                    <div class="input-group-prepend">
                      <button class="btn-sub">Subscribe</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="small__footer text-center">
      <p>UniqueMappers &copy; 2015 - 2019 All right reserved.</p>
      <p>Design by <a href="bithub.com">Emmanuel Technical Director</a></p>
    </div>
</footer>
<!--footer end 
  =============================================================
  =============================================================
  =============================================================-->

<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
  crossorigin="anonymous"></script>
<script src="{{secure_asset('js/bootstrap3.bundle.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{secure_asset('js/script3.js')}}"></script>
<script>
  sr.reveal('#contact', {
    origin: 'left',
  });

  sr.reveal('#card, #offer, #works', {
    origin: 'bottom',
  });

  sr.reveal('.card, #choose', {
    origin: 'right',
  });


</script>
</body>

</html>