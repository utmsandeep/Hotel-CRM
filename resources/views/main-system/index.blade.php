<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="{{ asset('css/main-system/frontmain.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main-system/style.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Material Design for Bootstrap fonts and icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

    <!-- Material Design for Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Questrial|Roboto&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Hotel Management</title>
  </head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg desktop">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse container" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#"><img src="{{ asset('images/main-system/logo.png') }}" style="width: 170px;"></a>
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="#">Platform <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Solutions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Resources</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
              <button class="btn  my-2 my-sm-0 btn btn-raised btn-primary" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Login <img src="{{ asset('images/main-system/downarrow.png') }}" class="downarrow" /></button>
            </form> -->
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
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Login</a>
            </div>
          </div>
          
          
          <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
          
          </div>

  
<section class="banner">
    <div class="bannerimg22">
        <img src="{{ asset('images/main-system/bg2.png') }}" />
        <div class="description">
            <h3><span>THE POWER OF ONE</span></h3>
            <h2><span>PLATFORM</span></h2> 
            <p><span>Uncompromising distribution. Intelligent retailing. One platform.</span></p>
        </div>
    </div>
</section>

<section class="firstsection">
    <img class="circleimg" src="{{ asset('images/main-system/circle2.png') }}">
    <div class="container">
        <h6>Welcome to Sabre Hospitality Solutions.</h6>
        <hr class="underlinehr">
<p> Our team is rooted in hospitality and technology fuels everything we do.
We are powered by innovation with a relentless dedication to maximizing revenue for every hotelier.
 With the power of one platform, we are evolving the way people experience hospitality.</p>
</div>
</section>

<section class="secondpart">
    <div class="container">
    <div class="flexbox reverseflex">
        <div class="descriptionbox">
            <h4 class="padright">The platform was born to evolve.</h4>
            <p class="padright">The platform was built with evolution in mind, 
            allowing hoteliers to see the big picture when it comes to their business. 
            That means no more siloed or duplicated data and
             the ability to optimize revenue efficiently across all channels.</p>
             <div class="padright"> <a href="#" class="learnmore">
                 Learn more about the platform
             </a></div>
        </div>
        <div class="imgbox">
            <img src="{{ asset('images/main-system/image22.jpg') }}" />
        </div>

    </div>

    <div class="flexbox">
       
        <div class="imgbox">
            <img src="{{ asset('images/main-system/image22.jpg') }}" />
        </div>
        <div class="descriptionbox">
            <h4 class="padleft">The platform was born to evolve.</h4>
            <p class="padleft">The platform was built with evolution in mind, 
            allowing hoteliers to see the big picture when it comes to their business. 
            That means no more siloed or duplicated data and
             the ability to optimize revenue efficiently across all channels.</p>
             <div class="padleft"><a href="#" class="learnmore">
                 Learn more about the platform
             </a></div>
        </div>

    </div>

    <div class="flexbox reverseflex">
        <div class="descriptionbox">
            <h4 class="padright">The platform was born to evolve.</h4>
            <p class="padright">The platform was built with evolution in mind, 
            allowing hoteliers to see the big picture when it comes to their business. 
            That means no more siloed or duplicated data and
             the ability to optimize revenue efficiently across all channels.</p>
             <div class="padright"><a href="#" class="learnmore">
                 Learn more about the platform
             </a></div> 
        </div>
        <div class="imgbox">
            <img src="{{ asset('images/main-system/image22.jpg') }}" />
        </div>
    
    </div>
</div>
</section>

<section class="tabsection">
    <div class="container">
        <h4>  Increase revenue while enhancing the guest 
            experience with solutions that span the entire journey. </h4>
            <div class="w3-bar">
                <button class="w3-bar-item w3-button tablink w3-blu" onclick="openCity(event,'Research')"><i class='fas fa-search icontext'></i></button>
                <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Shop')"><i class='fas fa-shopping-cart icontext'></i></button>
                <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Pretrip')"><i class='fas fa-briefcase icontext'></i></button>
                <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Instay')"><i class='fas fa-building icontext'></i></button>
                <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Poststay')"><i class='fas fa-phone icontext'></i></button>
              </div>
              
              <div id="Research" class="w3-container city mainpart">
                <h3>Research</h3>
                <hr class="underlinehr2">
                <div class="flexpart">
               <div class="first">
            <p> Travel planning habits are constantly evolving.
                 Be found when travelers are researching for properties like yours.</p>
                </div>
                <div class="second">
             <ul>
                <li>Booking Engine</li>
                <li>Digital Experience</li>
                <li>GDS Media</li>
                <li>Guest Experience</li>
                <li>Voice Agent  </li>  
            </ul>
            </div>
        </div>
              </div>
            
              <div id="Shop" class="w3-container city mainpart" style="display:none">
                <h3>Shop & Book</h3>
                <hr class="underlinehr2">
                <div class="flexpart">
                    <div class="first">
                <p>Convert guests by truly understanding them and leverage
                 available guest data to improve booking revenue potential</p>
                </div>
                <div class="second">
             <ul>
                <li>Booking Engine</li>
                <li>Central Reservations</li>
                <li>Digital Experience</li>
                <li>Hotel RFP</li>
            </ul>
              </div>
              </div>
              </div>
            
              <div id="Pretrip" class="w3-container city mainpart" style="display:none">
                <h3>Pre-trip</h3>
                <hr class="underlinehr2">
                <div class="flexpart">
                <div class="first">
                <p>Enhance the customer experience before arrival to ensure maximum profitability, 
                deeper engagement, and stronger brand association.</p>
                </div>
                <div class="second">
                    <ul>
                <li>Ancillary Booking Engine</li>
                <li>Booking Engine</li>
                <li>Guest Experience</li>
                <li>Voice Agent</li>
            </ul>
              </div>
              </div>
              </div>

              <div id="Instay" class="w3-container city mainpart" style="display:none">
                <h3>In-stay</h3>
                <hr class="underlinehr2">
                <div class="flexpart">
                    <div class="first">
                <p>Give your guests more personalized service with 
                products that go beyond operational efficiency.</p>
                </div>
                <div class="second">
                <ul>
                <li>Guest Experience</li>
                <li>Property Hub</li>
                 </ul>
              </div>
                </div>
              </div>

              <div id="Poststay" class="w3-container city mainpart" style="display:none">
                <h3>Post-stay</h3>
                <hr class="underlinehr2">
                <div class="flexpart">
                    <div class="first">
                <p>Engage with guests after their stay with personalized offers and messages, 
                based on their preferences, demographics, and purchase history.</p>
                </div>
                <div class="second">
                <ul>
                <li>Central Reservations</li>
                <li>Guest Experience</li>
                <li>Performance Insights</li>
                <li>Retailing Insights</li>
               </ul>
              </div>
            </div>
            </div>

           
            
    </div>
</section>
<section class="secondpart">
    <div class="container">
      <div class="flexbox">
       
        <div class="imgbox">
            <img src="{{ asset('images/main-system/image22.jpg') }}" />
        </div>
        <div class="descriptionbox">
            <h4 class="padleft">We don’t have customers. We have a community.</h4>
            <p class="padleft">The platform was built with evolution in mind, 
            allowing hoteliers to see the big picture when it comes to their business. 
            That means no more siloed or duplicated data and
             the ability to optimize revenue efficiently across all channels.</p>
             <div class="padleft"><a href="#" class="learnmore">
                 See the wins
             </a></div>
        </div>

    </div>
  </div>
</section>
  

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
</body>
</html>