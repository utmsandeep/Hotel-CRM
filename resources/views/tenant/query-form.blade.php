@extends('tenant.layouts.master')

@section('head')

@endsection
@section('content')

<!-- multistep-form-page -->
<div class="multi-step-form-page">
  <div class="m-s-f-p-innner">
    <!-- progress bar -->
    <div class="progress3">
      <div class="progressed">20%</div>
    </div>
<!-- progress bar end -->

<!-- form and summary section -->
<div class="form-summery">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-7">
        <div class="form-section">
          <form class="full-form">
            <!-- first step -->
            <div class="meeting-section">
              <h5 class="form-head"><i class="fa fa-calendar" aria-hidden="true"></i>Meeting Details</h5>
              <div class="form-fields">
                <div class="input-step-f">
                  <input class="step-form-in" id="Attendees" placeholder="Attendees" />
                </div>

                <div class="input-step-f">
                  <select class="step-form-in" id="event-purpose">
                    <option>Please Select</option>
                    <option>Advisory Board</option>
                    <option>Conference</option>
                    <option>Corporate Event</option>
                    <option>Customer Training</option>
                    <option>Dinner</option>
                    <option>Exhibition</option>
                    <option>Meeting</option>
                    <option>Recruting</option>
                    <option>Team Meeting</option>
                    <option>Training</option>
                    <option>Other</option>

                  </select>
                </div>

                <div class="input-step-f custom-purpose-event">
                  <input type="text" class="step-form-in" placeholder="Describe your purpose of event" />
                </div>


                <div class="input-step-f">
                  <input type="text" class="step-form-in" id="start-d" placeholder="Start Date" />
                </div>

              <div class="input-step-f">
                <input type="text" class="step-form-in" id="end-d" placeholder="End Date" />
              </div>

              <div class="switch-input datef">
                <div class="sw">
                  <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                  </label>
                </div>
                <span>My dates are flexible</span>
              </div>


              <div class="input-step-f custom-date-event">
                <input type="text" class="step-form-in" placeholder="Describe your purpose of event" />
              </div>



              <div class="input-step-f input-step-f-full">
                <input type="text" class="step-form-in" id="location" placeholder="Please Enter Your Location" />
              </div>


              <div class="switch-input locationf">
                <div class="sw">
                  <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                  </label>
                </div>
                <span>Alternative Location</span>
              </div>

              <div class="input-step-f custom-location-event">
                <input type="text" class="step-form-in" placeholder="Describe your purpose of event" />
              </div>

              </div>
              <div class="next-b meet-s">
                <button class="btn">Next</button>
              </div>
            </div>
          <!-- first step end -->

         <!-- second step start -->
          <div class="meeting-secttion meeting-room">
            <h5 class="form-head"><i class="fa fa-handshake-o" aria-hidden="true"></i>Meeting Rooms</h5>
            <div class="form-fields">
            </div>
          </div>

          <!-- second step start end -->
          </form>
        </div>
      </div>
      <div class="col-12 col-md-5"></div>
    </div>
  </div>
</div>
<!-- form and summary section end -->
  </div>
</div>
<!-- multistep-form-page end -->
@endsection