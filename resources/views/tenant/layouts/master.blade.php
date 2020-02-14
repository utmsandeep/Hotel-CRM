<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/main-system/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main-system/frontmain.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Material Design for Bootstrap fonts and icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

    <!-- Material Design for Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Questrial|Roboto&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>

      .toggle.btn{
        margin-left: 10px;
      }
      
      #target {
        margin-left: 10px;
        background: #fff;
        width: 180px;
        display: none;
        position: absolute;
        box-shadow: 1px 2px 4px 0.6px #04030324;
        margin-top: 10px;
      }

      .popoption{
        list-style-type:none;
        font-size: 14px;
        margin-top: 15px;
        margin-bottom: 15px;
        padding: 10px 20px 0px 20px;
      }
      .popoption a{
        color: #111;
      }
      .popoption a i{
       padding-right: 10px;
       
      }

    </style>
    @yield('head')
    <title>Hotel Management @yield('title')</title>
  </head>
  <body>
  <form id="logout-form" action="{{ route('tenant.logout.submit') }}" method="post" style="display: none;">
            @csrf
  </form>
    <header>
      <nav class="navbar navbar-expand-lg desktop">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse container" id="navbarTogglerDemo01">
		    <a class="navbar-brand" href="{{ route('tenant.index') }}"><img src="http://hoteleventcrm.buzz/images/main-system/logo.png" style="width: 170px;"></a>
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">List Space <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Solutions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Join</a>
            </li>
          </ul>
           @if(!auth('consumer')->user())
          <form class="form-inline my-2 my-lg-0">
            <button class="btn  my-2 my-sm-0 btn btn-raised btn-primary" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Login <img src="{{ asset('images/main-system/downarrow.png') }}" class="downarrow" /></button>
          </form>
          @endif

          @if(auth('consumer')->user())
          <ul class="navbar-nav">
            <li class="nav-item">
              <button class="toggle btn my-2 my-sm-0 btn-raised btn-primary">Profile</button>
              <div id="target" class="popoption">
               
                 <p><a href="#"><i class='fa fa-bell'></i>My Profile</a></p> 
                 
                  <hr>
                  <p><a href="{{ route('tenant.logout.submit') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class='fa fa-sign-out'></i>Logout</a></p> 
              
              </div>
            </li>
          </ul>
          @endif
        </div>
      </nav>
    </header>

    <div class="mobmenupart">
    <h2>HotelCRM</h2>
      <div id="mobmenu" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <div class="overlay-content">
            <a href="#">List Space</a>
            <a href="#">Solutions</a>
            <a href="#">Join</a>
            @if(!auth('consumer')->user())
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Login</a>
            @endif

            @if(auth('consumer')->user())
          <ul class="navbar-nav">
            <li class="nav-item">
              <button class="toggle btn my-2 my-sm-0 btn-raised btn-primary">Profile</button>
              <div id="target" class="popoption">
               
                 <p><a href="#"><i class='fa fa-bell'></i>My Profile</a></p> 
                 
                  <hr>
                  <p><a href="{{ route('tenant.logout.submit') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class='fa fa-sign-out'></i>Logout</a></p> 
              
              </div>
            </li>
          </ul>
          @endif
          </div>
        </div>
        
        
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
        
        </div>
        
        <!-- @if(session()->get('success'))
          <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> {{ session()->get('success') }}
          </div>        
        @endif
      @if (session()->get('errors'))
          <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Danger!</strong>
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
        </div><br />
      @endif  -->

        @yield('content')

    

        <section class="container">
          <div class="footer">
            <div class="part1">
        
			   <a href="{{ route('tenant.index') }}" class="logofoot"><img src="http://hoteleventcrm.buzz/images/main-system/logo.png" style="width: 170px; margin-bottom: 20px;"></a>
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

          <form action="{{ route('tenant.login.submit') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" placeholder="Enter Email" id="email" name="email">
              <span class="invalid-feedback" role="alert">
                  <strong>These credentials do not match our records</strong>
              </span>
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" placeholder="Enter Password" id="pwd" name="password">
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
            <a href="{{ route('tenant.register') }}"><button type="button" class="btn btn-primary regbtn">Register</button></a>
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

        
    <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
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
        $('.toggle').click(function() {
        $('#target').toggle('slow');
        });
      </script>
    @yield('script')
  </body>
</html>