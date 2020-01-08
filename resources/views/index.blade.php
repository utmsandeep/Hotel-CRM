<?php 
// echo "<pre>";
// print_r($data['banner']);
// die;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('front/styles/style.css')}}">
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
          <a class="navbar-brand" href="#">HOTELCRM</a>
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
            <button class="btn  my-2 my-sm-0 btn btn-raised btn-primary" type="submit">Login <img src="{{asset('front/images/downarrow.png')}}" class="downarrow" /></button>
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
            <a href="#">Login</a>
          </div>
        </div>
        
        
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
        
        </div>

    <div class="sectionbanner">
	@foreach($data['banner'] as $banner)
      <div class="bannersection">
        <div class="bannercontent">

          <div class="typewriter">
            <h1>{{@$banner['name']}}</h1>
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
          <img src="{{asset('images/banner')}}/{{@$banner['image']}}" />
        </div>
      </div>
	@endforeach
    </div>

      <section class="sectiontwo">
      <div class="badgepart">
        <span class="badge badge-pill badge-primary">Innovation</span>
      </div>
        <div class="details">
          <!--h3>Join the digital transformation of events</h3>
          <p>One platform catering for all your meeting and events from a 5 person boardroom for one hour to a 200 person conference.</p-->
        </div>
      
        <div class="container cardflex">
        @foreach($data['innovation'] as $innovation) 
          <div class="cards">
            <div class="card">
              <img src="{{asset('images/innovation')}}/{{$innovation['image']}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{$innovation['name']}}</h5>
                <p class="card-text">{{$innovation['small_description']}}</p>
                <a href="#" class="btn btn-primary bookbtn">Detail</a>
              </div>
            </div>
          </div>
		@endforeach
        </div>
      </section>

      <section class="container">
		@foreach($data['globalm'] as $globalm) 
        <div class="globalsection">
        <div class="flexpart">
          <div class="textpart margintop">
            <div class="badgepart">
              <span class="badge2 badge-pill badge-primary">Global</span>
            </div>
            <h1>{{$globalm['name']}}</h1>
            <p>{{$globalm['small_description']}}</p>
            <!--p><img src="{{asset('front/images/check.png')}}" />Hotels</p>
            <p><img src="{{asset('front/images/check.png')}}" />Alternative spaces</p>
            <p><img src="{{asset('front/images/check.png')}}" />Conference venues</p>
            <p><img src="{{asset('front/images/check.png')}}" />Coworking spaces</p-->
          </div>
          <div class="imgpart">
			<img class="img1" src="{{asset('images/globalm')}}/{{$globalm['image']}}" />
          </div>
        </div>
        </div>
		@endforeach
      </section>
 
      <hr>

      <section class="container">
		@foreach($data['business'] as $business) 
        <div class="globalsection">
        <div class="flexpart">
          <div class="textpart">
            <div class="badgepart">
              <span class="badge2 badge-pill badge-primary">Business</span>
            </div>
            <h1>{{$business['name']}}</h1>
            <p>{{$business['small_description']}}</p>
            
          </div>
          <div class="imgpart">
            <div class="row">
              <div class="col-md-12">
                <img class="img5" src="{{asset('images/business')}}/{{$business['image']}}" />
              </div>
            </div>
          </div>
        </div>
        </div>
		@endforeach
	  </section>



      
      <section class="sectiontwo uniqueplace">
        <div class="badgepart">
          <span class="badge badge-pill badge-primary">UNIQUE VENUES</span>
        </div>
          <div class="details" style="display:none;">
            <h3>Unique spaces ready to host your events</h3>
            <p>Discover thousands of alternative meeting spaces around the world.</p>
          </div>
        
          <div class="container cardflex">
            <div class="row">
			@foreach($data['uniquevenue'] as $uniquevenue) 
              <div class="cards">
                <div class="card">
                  <a href="#">
                  <img src="{{asset('images/uniquevenue')}}/{{$uniquevenue['image']}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">{{$uniquevenue['name']}}</h5>
                    <p class="card-text">{{$uniquevenue['small_description']}}</p>
                  </div>
                  </a>
                </div>
              </div>
			@endforeach
			</div>
          </div>
        </section>

        <section class="container">
          <div class="explorecities">
            <div class="badgepart">
              <span class="badge badge-pill badge-primary">CITIES</span>
            </div>
              <div class="details" style="display:none;">
                <h3>Explore our top cities</h3>
                <p>Discover 137,000 unique spaces</p>
              </div>
              <div class="explore">
				@foreach($data['city'] as $city) 
                <div class="city">
                  <a href="#">
                  <img src="{{asset('images/city')}}/{{$city['image']}}" />
                  <div class="detailcity">
                    <h2>{{$city['name']}}</h2>
                    <h5>{{$city['small_description']}}</h5>
                  <p>${{$city['price']}} per day</p>
                  </div>
                </a>
                </div>
				@endforeach
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
                  <li>Berlin Conference Centres</li>
                  <li>Geneva Conference Centres</li>
                  <li>Glasgow Conference Venues</li>
                  <li>Heathrow Conference Centres</li>
                  <li>Heathrow Conference Venues</li>
                  <li>Hong Kong Conference Venues</li>
                  <li>Meeting Rooms in Hong Kong</li>
                  <li>Meeting rooms in Leeds</li>
                  <li>Meeting Rooms in London</li>
                  <li>Meeting Rooms in Manchester</li>
                  <li>Meeting Rooms in New York</li>
                </ul>
              </div>
              <div class="col-md-3">
                <ul>
                  <li>Amsterdam Conference Centres</li>
                  <li>Amsterdam Conference Venues</li>
                  <li>Belfast Conference Venues</li>
                  <li>Belfast Meeting Rooms</li>
                  <li>Berlin Conference Centres</li>
                  <li>Geneva Conference Centres</li>
                  <li>Glasgow Conference Venues</li>
                  <li>Heathrow Conference Centres</li>
                  <li>Heathrow Conference Venues</li>
                  <li>Hong Kong Conference Venues</li>
                  <li>Meeting Rooms in Hong Kong</li>
                  <li>Meeting rooms in Leeds</li>
                  <li>Meeting Rooms in London</li>
                  <li>Meeting Rooms in Manchester</li>
                  <li>Meeting Rooms in New York</li>
                </ul>
              </div>
              <div class="col-md-3">
                <ul>
                  <li>Amsterdam Conference Centres</li>
                  <li>Amsterdam Conference Venues</li>
                  <li>Belfast Conference Venues</li>
                  <li>Belfast Meeting Rooms</li>
                  <li>Berlin Conference Centres</li>
                  <li>Geneva Conference Centres</li>
                  <li>Glasgow Conference Venues</li>
                  <li>Heathrow Conference Centres</li>
                  <li>Heathrow Conference Venues</li>
                  <li>Hong Kong Conference Venues</li>
                  <li>Meeting Rooms in Hong Kong</li>
                  <li>Meeting rooms in Leeds</li>
                  <li>Meeting Rooms in London</li>
                  <li>Meeting Rooms in Manchester</li>
                  <li>Meeting Rooms in New York</li>
                </ul>
              </div>
              <div class="col-md-3">
                <ul>
                  <li>Amsterdam Conference Centres</li>
                  <li>Amsterdam Conference Venues</li>
                  <li>Belfast Conference Venues</li>
                  <li>Belfast Meeting Rooms</li>
                  <li>Berlin Conference Centres</li>
                  <li>Geneva Conference Centres</li>
                  <li>Glasgow Conference Venues</li>
                  <li>Heathrow Conference Centres</li>
                  <li>Heathrow Conference Venues</li>
                  <li>Hong Kong Conference Venues</li>
                  <li>Meeting Rooms in Hong Kong</li>
                  <li>Meeting rooms in Leeds</li>
                  <li>Meeting Rooms in London</li>
                  <li>Meeting Rooms in Manchester</li>
                  <li>Meeting Rooms in New York</li>
                </ul>
              </div>
            </div>
          </div>
        </section>

        <section class="container">
          <div class="footer">
            <div class="part1">
              <h1 class="logo">HotelCRM</h1>
              <p>Helping the world meet</p>
              <div class="logo">
                <a href="#"><img src="{{asset('front/images/fblogo.png')}}" class="fb" /></a>
                <a href="#"><img src="{{asset('front/images/linkedin.png')}}" class="fb" /></a>
                <a href="#"><img src="{{asset('front/images/instagram.png')}}" class="fb" /></a>
                <a href="#"><img src="{{asset('front/images/twitterlogo.png')}}" class="fb" /></a>
                <a href="#"><img src="{{asset('front/images/youtube.png')}}" class="fb" /></a>
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

    <!-- JavaScript -->
    <script src="{{asset('front/js/style.js')}}"></script>
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