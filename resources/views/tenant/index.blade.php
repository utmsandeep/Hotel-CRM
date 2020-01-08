@extends('tenant.layouts.master')
@section('title') @endsection

@section('content')
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
        
@endsection