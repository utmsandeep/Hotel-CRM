@extends('tenant.layouts.master')

@section('head')
<link rel="stylesheet" href="{{ asset('js/tenant/slick/slick-theme.css') }}">
@endsection

@section('content')
<!-- image gallery start -->
     <div class="show-hotel-parent">
      <div class="container">
        <div class="row">
          <div class="col-12 p-0">
            <div class="gallery-container-show">
              <div class="gallery-left">
                <div
                  class="image-backgrounded lift positiom-relative"
                  style="background-image: url({{ asset('images/searcpage-img/pinforcowork-0.jpeg') }});"
                  
                ></div>
              </div>
              <div class="gellery-right">
                <div class="gellery-right-top">
                  <div
                    class="image-backgrounded lift positiom-relative"
                    style="background-image: url({{ asset('images/searcpage-img/pinforcowork-1.jpg') }});"
                  ></div>
                </div>
                <div class="gallery-right-bottom">
                  <div
                    class="image-backgrounded lift positiom-relative"
                    style="background-image: url({{ asset('images/searcpage-img/pinforcowork-2.jpg') }});"
                  ></div>
                  <div
                    class="image-backgrounded lift positiom-relative"
                    style="background-image: url({{ asset('images/searcpage-img/pinforcowork-3.jpg') }});"
                  ></div>
                </div>
              </div>
              <div class="see-all">
                <button class="btn">See All</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- image gallery end -->

 <!-- image below section -->
    <div class="hotel-shortlisted-details">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-8 p-0 pr-0 pr-md-5 left-s">
            <div class="hotel-type"><h5>Hotel 2 spaces</h5></div>
            <div class="hotel-name">
              <h1>Maidens hotel</h1>
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span><a href="#">View map</a></span>
            </div>
            <div class="hotel-quotes">
              <p>
                Atmospheric Hotel with British Colonial flavor, located near Red
                Fort.
              </p>
            </div>
            <div class="shortlisted-venue">
              <div class="shortlisted-venue-cards">
                <div class="shortlisted-vaune-card lift">
                  <div class="row">
                    <div class="col-md-11 image-detaile">
                      <div class="image-section-left">
                        <div class="imageinner">
                          <img
                            src="{{ asset('images/searcpage-img/imagecomingsoon.png') }}"
                          />
                          <div class="shortlisted-btn">
                            <button class="btn">
                              <i class="fa fa-check" aria-hidden="true"></i>
                              <a href="">Shorlisted</a>
                            </button>
                          </div>
                        </div>
                        
                        <h5>B Hall</h5>
                      </div>
                      <div class="image-section-right">
                        <div class="bottom-aligned">
                          <div class="bottom-aligned-item">
                            <img
                              src="{{ asset('images/searcpage-img/classroomregular.svg') }}"
                            />
                            <p>150</p>
                          </div>
                          <div class="bottom-aligned-item">
                            <img
                              src="{{ asset('images/searcpage-img/ushaperegular.svg') }}"
                            />
                            <p>175</p>
                          </div>
                          <div class="bottom-aligned-item">
                            <img
                              src="{{ asset('images/searcpage-img/theaterregular.svg') }}"
                            />
                            <p>200</p>
                          </div>
                          <div class="bottom-aligned-item">
                            <img
                              src="{{ asset('images/searcpage-img/receptionregular.svg') }}"
                            />
                            <p>250</p>
                          </div>
                          <div class="bottom-aligned-item">
                            <img
                              src="{{ asset('images/searcpage-img/banquetregular.svg') }}"
                            />
                            <p>250</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-1 cart-details">
                      <div class="cart-inner">
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 pl-0 pr-0 right-s">
            <div class="duration-form">
              <div class="duration-inner">
               <form class="d-form">
                  <div class="input-b">
                  <input type="text" id="start-date" class="d-form-input" placeholder="Start date" />
                  <!-- <span class="floating-label">Start date</span> -->
                  </div>
                  <div class="input-b">
                  <input type="text" id="end-date" class="d-form-input" placeholder="End date" />
                  <!-- <span class="floating-label">End date</span> -->
                  </div>

                  <div class="input-b">
                  <input type="text" id="Attendees" class="d-form-input" placeholder="Attendees" />
                  <!-- <span class="floating-label">Attendees</span> -->
                  </div>

                  <div class="input-b">
                  <input type="text" id="bedroom" class="d-form-input" placeholder="Bedrooms" />
                  <!-- <span class="floating-label">Bedrooms</span> -->
                  </div>

                  <div class="input-b">
                  <select id="duration class="d-form-input" >
                    <option>Duration</option>
                    <option>Morning(00:00-00:00)</option>
                    <option>Afternoon(00:00-00:00)</option>
                    <option>Full day(00:00-00:00)</option>
                  </select>
                  </div>

                  <div class="input-b">
                  <select id="duration class="d-form-input">
                    <option>Room style</option>
                    <option>Classroom</option>
                    <option>U-Shaped</option>
                    <option>Theatre</option>
                    <option>Reception</option>
                    <option>Banquet</option>
                  </select>
                </div>

                </form>
              </div>

              <div class="switches">
                <div class="book-switche">
                  <div class="text-right">Book Online</div>
                  <div class="swtch">
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>

                <div class="book-switche">
                  <div class="text-right">Get Quotes</div>
                  <div class="swtch">
                    <label class="switch">
                      <input type="checkbox" checked>
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
                
              </div>

              <div class="shorlisted-btn-form">
                <div class="btn">
                  <a href="">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    <a href="">Shorlisted</a>
                  </a>
                </div>
              </div>
            </div>
          </div>
         
        </div>
        
      </div>
      
    </div>

    <!-- image below section end -->

    <!-- opening time section -->

    <div class="opening-time">
      <div class="container">
        <div class="row">
          <div class="opening-time-inner">
            <h1 class="op-head">Opening Times</h1>
            <h5 class="op-time">Monday - Sunday (06:00 - 23:00)</h5>
          </div>
        </div>
      </div>
    </div>
    <!-- opening time section end -->
<!-- vaune facilty -->
    <div class="venue-facilities-section">
      <div class="container">
        <div class="row">
          <div class="venue-facility-inner">
            <h1 class="op-head">Opening Times</h1>
            <div class="facilities-card">
              <div class="facilities-card-inner">
                <div class="f-card">
                  <div class="f-card-inner">
                    <img src="{{ asset('images/searcpage-img/business-centre.png') }}">
                    <h4>Business centre</h4>
                  </div>
                </div>

                <div class="f-card">
                  <div class="f-card-inner">
                    <img src="{{ asset('images/searcpage-img/parking.png') }}">
                    <h4>Parking</h4>
                  </div>
                </div>

                <div class="f-card">
                  <div class="f-card-inner">
                    <img src="{{ asset('images/searcpage-img/disabled-facilities.png') }}">
                    <h4>Disabled facilities</h4>
                  </div>
                </div>

                <div class="f-card">
                  <div class="f-card-inner">
                    <img src="{{ asset('images/searcpage-img/wifi.png') }}">
                    <h4>WIFI</h4>
                  </div>
                </div>

                <div class="f-card">
                  <div class="f-card-inner">
                    <img src="{{ asset('images/searcpage-img/av-technician.png') }}">
                    <h4>AV Technician onsite</h4>
                  </div>


                 
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
    </div>
    <!-- vauue facility end -->

    <!-- add review button -->
    <div class="review-btn">
      <div class="container">
        <div class="row">
          <div class="ad-re-cont">
            <div class="add-review-btn">
              <button class="btn"><a href="#">Add your review</a></button>
             </div>
          </div>
        </div>
      </div>
    </div>
    <!-- add review button end -->
<!-- load map button -->
<div class="review-btn">
  <div class="container">
    <div class="row">
      <div class="ad-re-cont">
        <div class="add-review-btn load-map">
          <button class="btn"><a href="#">Load map</a></button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- load map button end -->
    

@endsection

@section('script')
<script src="{{ asset('js/tenant/slick/slick.js') }}"></script>
<!-- <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script> -->
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
$( document ).ready(function() {
   

  
  $(function () {
    var dateToday = new Date();
    
        $("#start-date").datepicker({
            dateFormat: "mm/dd/yy",
            showOtherMonths: true,
            selectOtherMonths: true,
            autoclose: true,
            changeMonth: true,
            changeYear: true,
            minDate: dateToday,
            
            //gotoCurrent: true,
        });
       
        $("#start-date").on("change",function(){
         selected = $(this).val();
         
        // return selected
        
       
        
    });
  
    
   
        $("#end-date").datepicker({
            dateFormat: "mm/dd/yy",
            showOtherMonths: true,
            selectOtherMonths: true,
            autoclose: true,
            changeMonth: true,
            changeYear: true,
            
           
            // gotoCurrent: true,
        });
});


            
           
        

});
</script>
@endsection


