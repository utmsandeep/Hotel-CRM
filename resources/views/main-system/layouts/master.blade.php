<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
   
    <link rel="stylesheet" href="{{ asset('css/main-system/style.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Material Design for Bootstrap fonts and icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

    <!-- Material Design for Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Questrial|Roboto&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    @yield('head')

    <title>Hotel Management @yield('title')</title>
  </head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg desktop">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse container" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="{{ route('welcome') }}"><img src="{{ asset('images/main-system/logo.png') }}" style="width: 170px;"></a>
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('plateform') }}">Platform <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('solutions') }}">Solutions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact us</a>
              </li>
              
            </ul>
          </div>
        </nav>
      </header>
  
      <div class="mobmenupart">
      <h2>HotelCRM</h2>
        <div id="mobmenu" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
              <a href="#">List Space</a>
              <a href="{{ route('solutions') }}">Solutions</a>
              <a href="#">Blog</a>
			  <a href="#">Contact us</a>
              
            </div>
          </div>
          
          
          <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
          
          </div>

      
      @yield('content')

  

    <section class="container">
        <div class="footer">
          <div class="part1">
            <h1 class="logo"><img src="{{ asset('images/main-system/logo.png') }}" style="width: 170px;"></h1>
            <p>Helping the world meet</p>
            <div class="logo">
              <a href="#"><img src="{{ asset('images/main-system/fblogo.png') }}" class="fb" /></a>
              <a href="#"><img src="{{ asset('images/main-system/linkedin.png') }}" class="fb" /></a>
              <a href="#"><img src="{{ asset('images/main-system/instagram.png') }}" class="fb" /></a>
              <a href="#"><img src="{{ asset('images/main-system/twitterlogo.png') }}" class="fb" /></a>
              <a href="#"><img src="{{ asset('images/main-system/youtube.png') }}" class="fb" /></a>
            </div>
          </div>
          <div class="part2">
            <h3>About Us</h3>
            <p><a href="#">Team</a></p>
            <p><a href="#">News</a></p>
            <p><a href="#">Blog</a></p>
            <p><a href="#">Careers</p>
            <p><a href="contactus.html"> Contact Us</a></p>
          </div>
          <div class="part2">
            <h3>Meeting Organiser</h3>
            <p><a href="#">How it works</a></p>
            <p><a href="#">Business account</a></p>
            <p><a href="#">White Paper</a></p>
          </div>
          <div class="part2">
            <h3>Hotel and Organiser</h3>
            <p><a href="#">List Space</a></p>
            <p><a href="#">Premium Listing</a></p>
            <p><a href="#">Booking Engine</a></p>
          </div>
          <div class="part2">
            <h3>Legal </h3>
            <p><a href="#">Terms</a></p>
            <p><a href="#">Privacy</a></p>
          </div>
        </div>
      </section>

      <div class="footerbottom">
        <div class="container">
          <h6>Copyright 1999-2019. All Rights Reserved.</h6>
        </div>
      </div>

        <!-- The signin model -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"> <div class="signimg">
            <img src="{{ asset('images/main-system/signin.jpg') }}" class="signinimg" />
          </div></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body loginmodelbody">
         <div class="loginpage">
         
          <h2>Sign in</h2>
          <h3>Login to your account</h3>

          <form action="#">
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" placeholder="Enter Email" id="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" placeholder="Enter Password" id="pwd">
            </div>
            <div class="row textpart">
            <div class="form-group form-check halfwidth">
              <label class="form-check-label remme">
                <input class="form-check-input " type="checkbox"> Remember me
              </label>
            </div>
            <div class="form-group forgetbtn halfwidth">
              <a href="#">Forgot Password?</a>
            </div>
          </div>
            <div class="row">
            <div class="halfwidth">
            <button type="submit" class="btn btn-primary subbtn ">Submit</button>
          </div>
          <div class="halfwidth">
            <button type="submit" class="btn btn-primary regbtn ">Register</button>
          </div>
          </div>
          </form>

         </div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        
        </div>
        
      </div>
    </div>
  </div>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
  <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  
  <script>
    function openNav() {
      document.getElementById("mobmenu").style.width = "100%";
    }
    
    function closeNav() {
      document.getElementById("mobmenu").style.width = "0%";
    }
    </script>

  <script>
    function openNav() {
      document.getElementById("mobmenu").style.width = "100%";
    }
    
    function closeNav() {
      document.getElementById("mobmenu").style.width = "0%";
    }
    </script>
       <script>
        function openCity(evt, cityName) {
          var i, x, tablinks;
          x = document.getElementsByClassName("city");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablink");
          for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-blu", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " w3-blu";
        }
        </script>

        @yield('script')
</body>
</html>