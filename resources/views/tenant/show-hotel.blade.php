@extends('tenant.layouts.master')

@section('head')
<link rel="stylesheet" href="{{ asset('js/tenant/slick/slick-theme.css') }}">
@endsection

@section('content')
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

@endsection

@section('script')
<script src="{{ asset('js/tenant/slick/slick.js') }}"></script>
<script>
$( document ).ready(function() {
   

   

});
</script>
@endsection


