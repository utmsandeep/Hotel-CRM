@extends('tenant.layouts.master')

@section('head')
<link rel="stylesheet" href="{{ asset('js/tenant/slick/slick-theme.css') }}">
@endsection

@section('content')
     <div class="container-fluid top-menu1">
      <div class="row">
        <div class="col-12 pt-2 border-bottom pb-2 position-fixed bg-white menu top-menu" style="z-index: 4;">
            <div class="row px-2 d-block d-md-flex">
                <div class="col-12 px-2">
                    <div class="row m-0">
                        <div class="col-12 col-md-6 col-lg-auto p-0 mb-2 mb-lg-0 search-input">
                                <input type="search" class="form-control2 px-2 py-2 w-100 m-0 mr-1 float-left border-gray-300" style="min-width: 300px;" placeholder="Location">
                            </div>
                        <div class="col-5 col-sm-6 col-lg-auto col-xl-auto pl-0 pl-lg-1 pr-0 pb-2 pb-lg-0 top-btn">
                           
                        <div class="float-left mr-1 h-100 w-100  collapse2" style="z-index: 4;">
                                <button class="btn btn-sm mb-1 px-2 py-1 border-gray-300  w-100 custum-toggle" style="padding: 7.7px 0.5rem !important;" type="button">
                                    <i class="fa fa-calendar d-none d-sm-inline-block"></i> When
                                </button>
                                <div class="border border-gray-300 p-2 custom-dropdawn"  style="z-index: 3;min-width: 300px;">
                                    <form>

                                        <div class="row m-0 p-2 mb-2" style="z-index:4;">
                                            <div class="w-100">
                                                <select class="custom-select2 w-100" placeholder="Duration">
                                                    <option value="-1">Duration</option>
                                                    <option  value="0">Morning</option>
                                                    <option value="1">Afternoon</option>
                                                    <option value="2">Evening</option>
                                                    <option value="3">Hourly</option>
                                                    <option value="4">Full Day</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row m-0 p-2 mb-2 custom-input-parent">
                                            <div class="mb-0 w-100 ">
                                                <input type="text" class="custominput2" placeholder="Start Date"  value="">
                                                <label for="startDate" class = "d-n" data-resource-set="MB_GenericText" data-resource-id="StartDate">StartDate</label>
                                            </div>
                                        </div>
                                        <div class="row m-0 p-2 mb-2 custom-input-parent">
                                            <div class="mb-0 w-100">
                                                <input type="text" class="custominput2" placeholder="End Date"  value="">
                                                <label for="startDate" class = "d-n" data-resource-set="MB_GenericText" data-resource-id="EndDate">EndDate</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="button" class="btn custom-btn float-right GreenText p-2">Apply</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-7 col-sm-6 col-lg-auto col-xl-auto pl-1 pr-0 pb-2 pb-lg-0 top-btn">
                            <div class="float-left mr-1 h-100 w-100  collapse2" style="z-index: 3;">


                                    <button class="btn  btn-sm mb-1 px-2 py-1 border-gray-800 w-100 custum-toggle" style="padding: 7.7px 0.5rem !important;" type="button">
                                        <span id="peoplesMenuText">1 Attendee</span>
                                        <span id="bedroomsMenuText"> | 0 Bedrooms</span>
                                       
                                    </button>
                                    <div class="row position-relative pt-12 pt-lg-8 ">
      <div
        class="col-12 custom-drop col-lg-6 px-0 pb-10 pt-6 col-md-8 position-fixed border-right border-gray-300"
        style="z-index: 3; background: #FFF; height: calc(100vH - 140px);overflow-y: auto !important;overflow-x: hidden !important;"
      >
        <div class="row m-0">
          <div class="col-12 pb-1 drop-head-att">
            <h5>Attendees & Bedrooms</h5>
          </div>
          <div class="col-12 pt-2">
            <div class="row m-0 p-1 mb-2">
              <div class="col-8 col-lg-9 pl-0 my-auto">
                <i class="fa fa-users" aria-hidden="true"></i>
                Attendees
              </div>
              <div class="col-4 col-lg-3 m-auto p-0">
                <div class="row m-0">
                  <div class="col-auto p-0">
                    <input
                      type="button"
                      value="-"
                      class="button-minus btn-minus2 btn-min"
                    />
                  </div>
                  <div class="col-4 p-0 input-value">
                    <input type="number" value="1" />
                  </div>
                  <div class="col-auto p-0">
                    <input
                      type="button"
                      value="+"
                      class="button-minus btn-plus2 btn-min"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 pt-2">
            <div class="row m-0 p-1 mb-2">
              <div class="col-8 col-lg-9 pl-0 my-auto">
                <i class="fa fa-bed" aria-hidden="true"></i>
                Bedroom
              </div>
              <div class="col-4 col-lg-3 m-auto p-0">
                <div class="row m-0">
                  <div class="col-auto p-0">
                    <input
                      type="button"
                      value="-"
                      class="button-minus btn-minus2 btn-min"
                    />
                  </div>
                  <div class="col-4 p-0 input-value">
                    <input type="number" value="1" />
                  </div>
                  <div class="col-auto p-0">
                    <input
                      type="button"
                      value="+"
                      class="button-minus btn-plus2 btn-min"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 partition">
            <hr />
            <h5>Booking Type</h5>
          </div>
          <div class="col-12 pt-2 mb-2 online">
            <div class="row m-0">
              <div class="col-6 p-1">
                <i class="fa fa-credit-card" aria-hidden="true"></i>
                Book online<span class="person-count p-count-design"
                  >(1-40)</span
                >
              </div>
              <div class="col-6 p-0 text-right">
                <label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
              </div>
              <div class="col-12 p-1">Book now and pay via credit card</div>
            </div>
          </div>
          <div class="col-12 pt-2 mb-2">
            <div class="row m-0">
              <div class="col-6 p-1">
                <i class="fa fa-shopping-cart"></i>
                Get quotes<span class="bed-count p-count-design"
                  >(Unlimited people/Bedroom)</span
                >
              </div>
              <div class="col-6 p-0 text-right">
                <label class="switch">
  <input type="checkbox" checked>
  <span class="slider round"></span>
</label>
              </div>
              <div class="col-12 p-1">Shortlist venue and get update</div>
            </div>
          </div>
          <div class="col-12 pt-6 pb-6">
            <div class="floated-right">
              <button type="button" class="btn cancel-btn custom-can-btn">
                Cancel
              </button>
              <button type="button" class="btn apply-btn custom-can-btn">
                Apply
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
                                    
                                    
                            </div>
                        </div>
                        <div class="col-5 col-sm-6 col-lg-auto col-xl-auto pl-0 pr-0 pb-sm-2 pb-lg-0 pl-lg-1 top-btn">
                            <div class="float-left mr-1 h-100 w-100 collapse-book collapse2" style="z-index: 3;">


                                    <button class="btn  btn-sm mb-1 px-2 py-1 border-gray-300 custum-toggle w-100" style="padding: 7.7px 0.5rem !important;" type="button">
                                        <span id="bookingTypeMenuText2">Get Quotes</span>
                                    </button>
                                    <div class="row position-relative pt-12 pt-lg-8 ">
                      <div
                        class="col-12 custom-drop col-lg-6 px-0 pb-10 pt-6 col-md-8 position-fixed border-right border-gray-300"
                        style="z-index: 3; background: #FFF; height: calc(100vH - 140px);overflow-y: auto !important;overflow-x: hidden !important;"
                      >
                        <div class="row m-0">
                          <div class="col-12 pb-1 drop-head-att">
                            <h5>Attendees & Bedrooms</h5>
                          </div>
                          <div class="col-12 pt-2">
                            <div class="row m-0 p-1 mb-2">
                              <div class="col-8 col-lg-9 pl-0 my-auto">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                Attendees
                              </div>
                              <div class="col-4 col-lg-3 m-auto p-0">
                                <div class="row m-0">
                                  <div class="col-auto p-0">
                                    <input
                                      type="button"
                                      value="-"
                                      class="button-minus btn-minus2 btn-min"
                                    />
                                  </div>
                                  <div class="col-4 p-0 input-value">
                                    <input type="number" value="1" />
                                  </div>
                                  <div class="col-auto p-0">
                                    <input
                                      type="button"
                                      value="+"
                                      class="button-minus btn-plus2 btn-min"
                                    />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12 pt-2">
                            <div class="row m-0 p-1 mb-2">
                              <div class="col-8 col-lg-9 pl-0 my-auto">
                                <i class="fa fa-bed" aria-hidden="true"></i>
                                Bedroom
                              </div>
                              <div class="col-4 col-lg-3 m-auto p-0">
                                <div class="row m-0">
                                  <div class="col-auto p-0">
                                    <input
                                      type="button"
                                      value="-"
                                      class="button-minus btn-minus2 btn-min"
                                    />
                                  </div>
                                  <div class="col-4 p-0 input-value">
                                    <input type="number" value="1" />
                                  </div>
                                  <div class="col-auto p-0">
                                    <input
                                      type="button"
                                      value="+"
                                      class="button-minus btn-plus2 btn-min"
                                    />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-12 partition">
                            <hr />
                            <h5>Booking Type</h5>
                          </div>
                          <div class="col-12 pt-2 mb-2 online">
                            <div class="row m-0">
                              <div class="col-6 p-1">
                                <i
                                  class="fa fa-credit-card"
                                  aria-hidden="true"
                                ></i>
                                Book online<span
                                  class="person-count p-count-design"
                                  >(1-40)</span
                                >
                              </div>
                              <div class="col-6 p-0 text-right">
                                <label class="switch">
                                  <input type="checkbox" />
                                  <span class="slider round"></span>
                                </label>
                              </div>
                              <div class="col-12 p-1">
                                Book now and pay via credit card
                              </div>
                            </div>
                          </div>
                          <div class="col-12 pt-2 mb-2">
                            <div class="row m-0">
                              <div class="col-6 p-1">
                                <i class="fa fa-shopping-cart"></i>
                                Get quotes<span class="bed-count p-count-design"
                                  >(Unlimited people/Bedroom)</span
                                >
                              </div>
                              <div class="col-6 p-0 text-right">
                                <label class="switch">
                                  <input type="checkbox" checked />
                                  <span class="slider round"></span>
                                </label>
                              </div>
                              <div class="col-12 p-1">
                                Shortlist venue and get update
                              </div>
                            </div>
                          </div>
                          <div class="col-12 pt-6 pb-6">
                            <div class="floated-right">
                              <button
                                type="button"
                                class="btn cancel-btn custom-can-btn"
                              >
                                Cancel
                              </button>
                              <button
                                type="button"
                                class="btn apply-btn custom-can-btn"
                              >
                                Apply
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                            </div>
                        </div>
                        <div class="col-7 col-sm-6 col-lg-auto col-xl-auto pl-1 pr-0 top-btn">
                            <div class="float-left mr-1 w-100 h-100 collapse-more-filter collapse2" style="z-index: 3;">
                                <button class="btn  btn-sm mb-1 px-2 py-1 border-gray-300  custum-toggle  w-100" style="padding: 7.7px 0.5rem !important;" type="button" >
                                    More Filters
                                </button>
                                <div class="row position-relative pt-12 pt-lg-8 ">
      <div
        class="col-12 custom-drop temp-block col-lg-6 px-0 pb-10 pt-6 col-md-8 position-fixed border-right border-gray-300"
        style="z-index: 3; background: #FFF; height: calc(100vH - 140px);overflow-y: auto !important;overflow-x: hidden !important;"
      >
        <div class="venue-type">
          <div class="row m-0">
            <div class="col-12 venue-head">
              <h5>Venue Type</h5>
            </div>
            <div class="col-6 col-md-4 venue-selection">
              <input type="checkbox" class="check-filter" />
              <label class="check-lb">Hotel</label>
            </div>
            <div class="col-6 col-md-4 venue-selection">
              <input type="checkbox" class="check-filter" />
              <label class="check-lb">Conference Centre</label>
            </div>
            <div class="col-6 col-md-4 venue-selection">
              <input type="checkbox" class="check-filter" />
              <label class="check-lb">Sports Venue</label>
            </div>
            <div class="col-6 col-md-4 venue-selection">
              <input type="checkbox" class="check-filter" />
              <label class="check-lb">Acedemic Venue</label>
            </div>
            <div class="col-6 col-md-4 venue-selection">
              <input type="checkbox" class="check-filter" />
              <label class="check-lb">Business centre</label>
            </div>
            <div class="col-6 col-md-4 venue-selection">
              <input type="checkbox" class="check-filter" />
              <label class="check-lb">Pub/Restaurent</label>
            </div>
            <div class="col-6 col-md-4 venue-selection">
              <input type="checkbox" class="check-filter" />
              <label class="check-lb">Event Location</label>
            </div>
            <div class="col-6 col-md-4 venue-selection">
              <input type="checkbox" class="check-filter" />
              <label class="check-lb">Other</label>
            </div>
          </div>
        </div>


          <div class="venue-type">
          <div class="row m-0">
            <div class="col-12 venue-head">
              <h5>Room Layout</h5>
            </div>
            <div class="col-6 col-md-4 venue-selection">
              <input type="checkbox" class="check-filter" />
              <label class="check-lb">U-Shaped</label>
            </div>
            <div class="col-6 col-md-4 venue-selection">
              <input type="checkbox" class="check-filter" />
              <label class="check-lb">Board Room</label>
            </div>
            <div class="col-6 col-md-4 venue-selection">
              <input type="checkbox" class="check-filter" />
              <label class="check-lb">Reception</label>
            </div>
            <div class="col-6 col-md-4 venue-selection">
              <input type="checkbox" class="check-filter" />
              <label class="check-lb">Banquet</label>
            </div>
            <div class="col-6 col-md-4 venue-selection">
              <input type="checkbox" class="check-filter" />
              <label class="check-lb">Theatre</label>
            </div>
            <div class="col-6 col-md-4 venue-selection">
              <input type="checkbox" class="check-filter" />
              <label class="check-lb">Classroom</label>
            </div>
          </div>
        </div>


        <div class="venue-type">
          <div class="row m-0">
            <div class="col-12 venue-head">
              <h5>Food & Drinks</h5>
            </div>
            <div class="col-6 col-md-4 venue-selection">
              <input type="checkbox" class="check-filter" />
              <label class="check-lb">Tea/Coffee</label>
            </div>
            <div class="col-6 col-md-4 venue-selection">
              <input type="checkbox" class="check-filter" />
              <label class="check-lb">Lunch</label>
            </div>
          </div>
        </div>



        <div class="venue-type">
          <div class="row m-0">
            <div class="col-12 venue-head">
              <h5>Equipment</h5>
            </div>
            <div class="col-6 col-md-4 venue-selection">
              <input type="checkbox" class="check-filter" />
              <label class="check-lb">LCD Projector</label>
            </div>
            <div class="col-6 col-md-4 venue-selection">
              <input type="checkbox" class="check-filter" />
              <label class="check-lb">Projection Screen</label>
            </div>
            <div class="col-6 col-md-4 venue-selection">
              <input type="checkbox" class="check-filter" />
              <label class="check-lb">Flipchart</label>
            </div>
          </div>
        </div>


        <div class="venue-type">
          <div class="row m-0">
            <div class="col-12 venue-head">
              <h5>Facilities</h5>
            </div>
            <div class="col-6 col-md-4 venue-selection">
              <input type="checkbox" class="check-filter" />
              <label class="check-lb">WIFI</label>
            </div>
            <div class="col-6 col-md-4 venue-selection">
              <input type="checkbox" class="check-filter" />
              <label class="check-lb">Parking</label>
            </div>
            <div class="col-6 col-md-4 venue-selection">
              <input type="checkbox" class="check-filter" />
              <label class="check-lb">AV Technician onsite</label>
            </div>
            <div class="col-6 col-md-4 venue-selection">
              <input type="checkbox" class="check-filter" />
              <label class="check-lb">Bar</label>
            </div>
            <div class="col-6 col-md-4 venue-selection">
              <input type="checkbox" class="check-filter" />
              <label class="check-lb">Restaurent</label>
            </div>
            <div class="col-6 col-md-4 venue-selection">
              <input type="checkbox" class="check-filter" />
              <label class="check-lb">Disabled facilities</label>
            </div>
          </div>
        </div>


        <div class="btn-row-filter">
          <div class="row m-0">
            <div class="col-12">
              <div class="floated-right">
                <button class="btn cancel-btn custom-can-btn" type="btn">
                  Cancel
                </button>
                <button class="btn clear-btn custom-can-btn" type="btn">
                  Clear All
                </button>
                <button class="btn apply-btn custom-can-btn" type="btn">
                  Apply
                </button>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
      </div>
    </div>
<!-- menu-below-section -->
<div class="container-fluid menu-below">
    <div class="row">
        <div class="col-12 col-md-8 pb-4 pt-9 position-relative">
            <div class="row">
                <div class="col-12 pt-8 pb-2 pt-lg-3 font-weight-bold text-center menu-below-head">
                    527 Meeting Rooms in Amsterdam, Netherlands
                </div>
            </div>
            <div class="row px-1 px-md-2">
      <div class="col-12 col-md-4 my-2 px-2 venueCard">
        <div class="card shadow-light-lg mb-0">
          <div class="card-img card-img-top img-cstm">
            <img
              class="w-100"
              src="{{ asset('images/searcpage-img/sh-broadway-hotel-0.jpg') }}"
            />
          </div>
          <div class="card-body position-relative px-2 pt-2">
            <a class="text-decoration-none" href="">
              <div>
                <h4
                  class="small PurpleText font-weight-bold text-uppercase mb-0 d-inline venueName"
                  style="margin-top:20px"
                >
                  Hotel
                  <span class="align-top">.</span>
                  <span class="number">2</span>
                  <span class="spacetext">Spaces</span>
                </h4>
              </div>
              <h5 class="mb-1 font-weight-bold">Broadway Hotel</h5>
              <p class="mb-1 cart-btn">
                <button class="btn px-3 font-weight-normal">
                  <i class="fa fa-shopping-cart"></i>
                  Shortlist Venue
                </button>
              </p>
              <p class="card-stars my-2" style="min-height:12px;"></p>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 my-2 px-2 venueCard">
        <div class="card shadow-light-lg mb-0">
          <div class="card-img card-img-top img-cstm">
            <img
              class="w-100"
              src="{{ asset('images/searcpage-img/sh-broadway-hotel-0.jpg') }}"
            />
          </div>
          <div class="card-body position-relative px-2 pt-2">
            <a class="text-decoration-none" href="">
              <div>
                <h4
                  class="small PurpleText font-weight-bold text-uppercase mb-0 d-inline venueName"
                  style="margin-top:20px"
                >
                  Hotel
                  <span class="align-top">.</span>
                  <span class="number">2</span>
                  <span class="spacetext">Spaces</span>
                </h4>
              </div>
              <h5 class="mb-1 font-weight-bold">Broadway Hotel</h5>
              <p class="mb-1 cart-btn">
                <button class="btn px-3 font-weight-normal">
                  <i class="fa fa-shopping-cart"></i>
                  Shortlist Venue
                </button>
              </p>
              <p class="card-stars my-2" style="min-height:12px;"></p>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 my-2 px-2 venueCard">
        <div class="card shadow-light-lg mb-0">
          <div class="card-img card-img-top img-cstm">
            <img
              class="w-100"
              src="{{ asset('images/searcpage-img/sh-broadway-hotel-0.jpg') }}"
            />
          </div>
          <div class="card-body position-relative px-2 pt-2">
            <a class="text-decoration-none" href="">
              <div>
                <h4
                  class="small PurpleText font-weight-bold text-uppercase mb-0 d-inline venueName"
                  style="margin-top:20px"
                >
                  Hotel
                  <span class="align-top">.</span>
                  <span class="number">2</span>
                  <span class="spacetext">Spaces</span>
                </h4>
              </div>
              <h5 class="mb-1 font-weight-bold">Broadway Hotel</h5>
              <p class="mb-1 cart-btn">
                <button class="btn px-3 font-weight-normal">
                  <i class="fa fa-shopping-cart"></i>
                  Shortlist Venue
                </button>
              </p>
              <p class="card-stars my-2" style="min-height:12px;"></p>
            </a>
          </div>
        </div>
      </div>
    </div>
            <div class="row m-0 mt-3">
                <div class="col-12 text-center">
                    <span class="load-m"><i class="fa fa-plus" aria-hidden="true"></i>LOAD MORE</span>
                </div>
            </div>
        </div>
        <div class="col-md-4 map-side-lg pr-lg-0 px-0">
            <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448181.16374062485!2d76.81306192555238!3d28.64727993580379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1581336161239!5m2!1sen!2sin" width="600" height="620" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>
     

<!-- test slider -->
<!-- <div class="test">
  <img src="{{ asset('images/searcpage-img/sh-broadway-hotel-0.jpg') }}" />
  <img src="{{ asset('images/searcpage-img/sh-broadway-hotel-0.jpg') }}" />
  <img src="{{ asset('images/searcpage-img/sh-broadway-hotel-0.jpg') }}" />
</div> -->




@endsection

@section('script')
<script src="{{ asset('js/tenant/slick/slick.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$( document ).ready(function() {
    $('.custum-toggle').click(function(){
      $(this).siblings('.custom-dropdawn').toggle();
      
    });
    $('.custum-toggle').click(function(){
      $(this).siblings('div').children('.custom-drop').toggle();
      
    });
    
// $('.test').slick({
//    slidesToShow: 1,
//    slidesToScroll: 1,
//    arrows: false,
//    fade: true,
//    asNavFor: '.slider-nav'
//  });
  

});
</script>
@endsection


