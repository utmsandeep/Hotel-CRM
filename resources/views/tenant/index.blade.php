<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/main-system/style.css') }}">
    <!-- Material Design for Bootstrap fonts and icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

    <!-- Material Design for Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Questrial|Roboto&display=swap" rel="stylesheet">
    
    <title>Hotel Management</title>
  </head>
  <body>
  
    <header>
      <nav class="navbar navbar-expand-lg desktop">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse container" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#"><span class="logofirst">Hotel</span>CRM</a>
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
          <form class="form-inline my-2 my-lg-0">
            <button class="btn  my-2 my-sm-0 btn btn-raised btn-primary" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Login <img src="{{ asset('images/main-system/downarrow.png') }}" class="downarrow" /></button>
          </form>
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

    <div class="sectionbanner">
      <div class="bannersection">
        <div class="bannercontent">

          <div class="typewriter">
            <h1>Discover spaces.</h1>
          </div>
          
          <div class="formsection">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" id="inputAddress" placeholder="Meeting City">
            </div>

            <div class="form-row">
              <div class="col-md-6">
                <div class="form-group">
                <input type="text" class="form-control" id="inputEmail4" placeholder="No. of people">
              </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                <input type="text" class="form-control" id="inputPassword4" placeholder="Duration">
              </div>
            </div>
            </div>
            
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-group">
                <input type="text" class="form-control" id="inputEmail4" placeholder="Start date">
              </div></div>
              <div class="col-md-6">
                <div class="form-group">
                <input type="text" class="form-control" id="inputPassword4" placeholder="End date">
              </div></div>

            </div>
            <button type="button" class="btn btn-raised spacebtn">Find Space</button>
          </form>
        </div>

        </div>
        <div class="bannerimg">
          <img src="{{ asset('images/main-system/bannerimage.jpg') }}" />
        </div>
      </div>

    </div>

      <section class="sectiontwo">
      <div class="badgepart">
        <span class="badge badge-pill badge-primary">Innovation</span>
      </div>
        <div class="details">
          <h3>Join the digital transformation of events</h3>
          <p>One platform catering for all your meeting 
          and events from a 5 person boardroom for one hour to a 200 person conference.</p>
        </div>
      
        <div class="container cardflex">
          
          <div class="cards">
            <div class="card">
              <img src="{{ asset('images/main-system/meetingpic.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Small meetings</h5>
                <p class="card-text">Book smaller spaces online
                  on-demand by the hour or day.</p>
                <a href="#" class="btn btn-primary bookbtn">Book online </a>
              </div>
            </div>
          </div>
          <div class="cards">
            <div class="card">
              <img src="{{ asset('images/main-system/accomodationpic.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Conference & events</h5>
                <p class="card-text">Let venues bid for your larger events. Get multiple quotes, 
                  compare and book direct.</p>
                <a href="#" class="btn btn-primary bookbtn">Select Venues </a>
              </div>
            </div>
          </div>
          <div class="cards">
            <div class="card">
              <img src="{{ asset('images/main-system/conferencepic.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Group accommodation</h5>
                <p class="card-text">Hotels compete for your groups by adding competitive offers online via RFP</p>
                <a href="#" class="btn btn-primary bookbtn">Select Hotels </a>
              </div>
            </div>
          </div>

        </div>
      </section>

      <section class="container">
        <div class="globalsection">
        <div class="flexpart">
          <div class="textpart margintop">
            <div class="badgepart">
              <span class="badge2 badge-pill badge-primary">Global</span>
            </div>
            <h1>Over 137,000 spaces around the world.</h1>

            <p>Discover a wide range of venues suitable 
            for all your meeting needs from major hotel brands to independent alternative spaces</p>

            <p><img src="{{ asset('images/main-system/check.png') }}" />Hotels</p>
            <p><img src="{{ asset('images/main-system/check.png') }}" />Alternative spaces</p>
            <p><img src="{{ asset('images/main-system/check.png') }}" />Conference venues</p>
            <p><img src="{{ asset('images/main-system/check.png') }}" />Coworking spaces</p>

          </div>
          <div class="imgpart">

            <div class="row">
              <div class="col-md-6">
                <img class="img1" src="{{ asset('images/main-system/image11.jpg') }}" />
              </div>
              <div class="col-md-6">
                <img class="img2" src="{{ asset('images/main-system/image22.jpg') }}" />
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <img class="img3" src="{{ asset('images/main-system/image44.jpg') }}" />
              </div>
              <div class="col-md-6 mt">
                <img class="img4" src="{{ asset('images/main-system/image33.jpg') }}" />
              </div>
            </div>

          </div>
        </div>
        </div>
      </section>
 
      <hr>

         <section class="container">
        <div class="globalsection">
        <div class="flexpart">
          <div class="textpart">
            <div class="badgepart">
              <span class="badge2 badge-pill badge-primary">Business</span>
            </div>
            <h1>Business account:
              Track your meetings expenditure.</h1>

            <p>With a business account your organisation can easily track global meeting expenditure and savings.
               The platform includes:</p>

            <p><img src="{{ asset('images/main-system/check.png') }}" />Booking approvals</p>
            <p><img src="{{ asset('images/main-system/check.png') }}" />Live reporting</p>
            <p><img src="{{ asset('images/main-system/check.png') }}" />Preferred hotels</p>
            <p><img src="{{ asset('images/main-system/check.png') }}" />Increased savings</p>

          </div>
          <div class="imgpart">

            <div class="row">
              <div class="col-md-12">
                <img class="img5" src="{{ asset('images/main-system/mainpic.png') }}" />
              </div>
             
            </div>
         

          </div>
        </div>
        </div>
      </section>



      
      <section class="sectiontwo uniqueplace">
        <div class="badgepart">
          <span class="badge badge-pill badge-primary">UNIQUE VENUES</span>
        </div>
          <div class="details">
            <h3>Unique spaces ready to host your events</h3>
            <p>Discover thousands of alternative meeting spaces around the world.</p>
          </div>
        
          <div class="container cardflex">
            <div class="row">
            <div class="cards">
              <div class="card">
                <a href="#">
                <img src="{{ asset('images/main-system/meetingpic.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Paris.Art Galleries</h5>
                  <p class="card-text">Deskeo Saint-Honore</p>
                </div>
              </a>
              </div>
            </div>
            <div class="cards">
              <div class="card">
                <a href="#">
                <img src="{{ asset('images/main-system/accomodationpic.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Amsterdam.Museum</h5>
                  <p class="card-text">Eye Filmmuseum</p>
                </div>
                </a>
              </div>
            </div>
            <div class="cards">
              <div class="card">
                <a href="#">
                <img src="{{ asset('images/main-system/conferencepic.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">San Francisco </h5>
                  <p class="card-text"> Eco-Systm San Francisco</p>
                 
                </div>
                </a>
              </div>
            </div>
            </div>
            <div class="row">
              <div class="cards">
                <div class="card">
                  <a href="#">
                  <img src="{{ asset('images/main-system/meetingpic.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">London.Stadium</h5>
                    <p class="card-text">London Stadium.</p>
                  
                  </div>
                  </a>
                </div>
              </div>
              <div class="cards">
                <div class="card">
                  <a href="#">
                  <img src="{{ asset('images/main-system/accomodationpic.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Berlin.Studio</h5>
                    <p class="card-text">Village Berlin</p>
                   
                  </div>
                  </a>
                </div>
              </div>
              <div class="cards">
                <div class="card">
                  <a href="#">
                  <img src="{{ asset('images/main-system/conferencepic.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Sydney.Business Centers</h5>
                    <p class="card-text">Stone & Chalk Sydney</p>
                
                  </div>
                  </a>
                </div>
              </div>
              </div>
          </div>
        </section>

        <section class="container">
          <div class="explorecities">
            <div class="badgepart">
              <span class="badge badge-pill badge-primary">CITIES</span>
            </div>
              <div class="details">
                <h3>Explore our top cities</h3>
                <p>Discover 137,000 unique spaces</p>
              </div>
              <div class="explore">
                <div class="city">
                  <a href="#">
                  <img src="{{ asset('images/main-system/image11.jpg') }}" />
                  <div class="detailcity">
                    <h2>London</h2>
                    <h5>
                      Explore 4,954 meeting venues in the Capital city of the England
                  </h5>
                  <p>$200 per day</p>
                  </div>
                </a>
                </div>
                <div class="city">
                  <a href="#">
                  <img src="{{ asset('images/main-system/image4.jpg') }}" />
                  <div class="detailcity">
                    <h2>London</h2>
                    <h5>
                      Explore 4,954 meeting venues in the Capital city of the England
                  </h5>
                  <p>$200 per day</p>
                  </div>
                </a>
                </div>
                <div class="city">
                  <a href="#">
                  <img src="{{ asset('images/main-system/image33.jpg') }}" />
                  <div class="detailcity">
                    <h2>London</h2>
                    <h5>
                      Explore 4,954 meeting venues in the Capital city of the England
                  </h5>
                  <p>$200 per day</p>
                  </div>
                </a>
                </div>
              </div>
              <div class="explore">
                <div class="city">
                  <a href="#">
                  <img src="{{ asset('images/main-system/image5.jpg') }}" />
                  <div class="detailcity">
                    <h2>London</h2>
                    <h5>
                      Explore 4,954 meeting venues in the Capital city of the England
                  </h5>
                  <p>$200 per day</p>
                  </div>
                </a>
                </div>
                <div class="city">
                  <a href="#">
                  <img src="{{ asset('images/main-system/image22.jpg') }}" />
                  <div class="detailcity">
                    <h2>London</h2>
                    <h5>
                      Explore 4,954 meeting venues in the Capital city of the England
                  </h5>
                  <p>$200 per day</p>
                  </div>
                </a>
                </div>
                <div class="city">
                  <a href="#">
                  <img src="{{ asset('images/main-system/image5.jpg') }}" />
                  <div class="detailcity">
                    <h2>London</h2>
                    <h5>
                      Explore 4,954 meeting venues in the Capital city of the England
                  </h5>
                  <p>$200 per day</p>
                  </div>
                </a>
                </div>
              </div>
          </div>
        </section>

        <section class="poplocation">
          <div class="container">
            <div class="badgepart">
              <span class="badge badge-pill badge-primary">Locations</span>
            </div>
            <h1>
              Popular Locations
            </h1>
            <div class="row">
              <div class="col-md-3">
                <ul>
                  <li>Amsterdam Conference Centres</li>

                  <li>Amsterdam Conference Venues</li>
                    
                  <li>Belfast Conference Venues</li>
                    
                  <li>Belfast Meeting Rooms</li>
                    
                  <li>  Berlin Conference Centres</li>
                    
                  <li> Geneva Conference Centres</li>
                    
                  <li>  Glasgow Conference Venues</li>
                    
                  <li> Heathrow Conference Centres</li>
                    
                  <li>  Heathrow Conference Venues</li>
                    
                  <li>  Hong Kong Conference Venues</li>
                    
                  <li>  Meeting Rooms in Hong Kong</li>
                    
                  <li> Meeting rooms in Leeds</li>
                    
                  <li>  Meeting Rooms in London</li>
                    
                  <li>  Meeting Rooms in Manchester</li>
                    
                  <li>  Meeting Rooms in New York</li>
                </ul>
              </div>
              <div class="col-md-3">
                <ul>
                  <li>Amsterdam Conference Centres</li>

                  <li>Amsterdam Conference Venues</li>
                    
                  <li>Belfast Conference Venues</li>
                    
                  <li>Belfast Meeting Rooms</li>
                    
                  <li>  Berlin Conference Centres</li>
                    
                  <li> Geneva Conference Centres</li>
                    
                  <li>  Glasgow Conference Venues</li>
                    
                  <li> Heathrow Conference Centres</li>
                    
                  <li>  Heathrow Conference Venues</li>
                    
                  <li>  Hong Kong Conference Venues</li>
                    
                  <li>  Meeting Rooms in Hong Kong</li>
                    
                  <li> Meeting rooms in Leeds</li>
                    
                  <li>  Meeting Rooms in London</li>
                    
                  <li>  Meeting Rooms in Manchester</li>
                    
                  <li>  Meeting Rooms in New York</li>
                </ul>
              </div>
              <div class="col-md-3">
                <ul>
                  <li>Amsterdam Conference Centres</li>

                  <li>Amsterdam Conference Venues</li>
                    
                  <li>Belfast Conference Venues</li>
                    
                  <li>Belfast Meeting Rooms</li>
                    
                  <li>  Berlin Conference Centres</li>
                    
                  <li> Geneva Conference Centres</li>
                    
                  <li>  Glasgow Conference Venues</li>
                    
                  <li> Heathrow Conference Centres</li>
                    
                  <li>  Heathrow Conference Venues</li>
                    
                  <li>  Hong Kong Conference Venues</li>
                    
                  <li>  Meeting Rooms in Hong Kong</li>
                    
                  <li> Meeting rooms in Leeds</li>
                    
                  <li>  Meeting Rooms in London</li>
                    
                  <li>  Meeting Rooms in Manchester</li>
                    
                  <li>  Meeting Rooms in New York</li>
                </ul>
              </div>
              <div class="col-md-3">
                <ul>
                  <li>Amsterdam Conference Centres</li>

                  <li>Amsterdam Conference Venues</li>
                    
                  <li>Belfast Conference Venues</li>
                    
                  <li>Belfast Meeting Rooms</li>
                    
                  <li>  Berlin Conference Centres</li>
                    
                  <li> Geneva Conference Centres</li>
                    
                  <li>  Glasgow Conference Venues</li>
                    
                  <li> Heathrow Conference Centres</li>
                    
                  <li>  Heathrow Conference Venues</li>
                    
                  <li>  Hong Kong Conference Venues</li>
                    
                  <li>  Meeting Rooms in Hong Kong</li>
                    
                  <li> Meeting rooms in Leeds</li>
                    
                  <li>  Meeting Rooms in London</li>
                    
                  <li>  Meeting Rooms in Manchester</li>
                    
                  <li>  Meeting Rooms in New York</li>
                </ul>
              </div>
            </div>
          </div>
        </section>

        <section class="container">
          <div class="footer">
            <div class="part1">
              <h1 class="logo"><span class="logofirst">Hotel</span>CRM</h1>
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

        
    <!-- JavaScript -->
    <script src="assets/js/style.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

    <script>
      function openNav() {
        document.getElementById("mobmenu").style.width = "100%";
      }
      
      function closeNav() {
        document.getElementById("mobmenu").style.width = "0%";
      }
      </script>
  </body>
</html>