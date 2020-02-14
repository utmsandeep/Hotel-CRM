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
              <div class="prev-nex-btn">
              <div class="next-b meet-s">
                <button class="btn">Next</button>
              </div>
</div>
            </div>
          <!-- first step end -->

         <!-- second step start -->
          <div class="meeting-section meeting-room">
            <h5 class="form-head"><i class="fa fa-handshake-o" aria-hidden="true"></i>Meeting Rooms</h5>
            <div class="form-fields">
              <div class="meeting-room-details">
                <div class="indi-date">
                    <a href="#" class="date-cont">
                     <div class="date-text">
                      <span><i class="fa fa-calendar" aria-hidden="true"></i></span>Feb 19, 2020
                     </div>
                    <span class="date-collapse-btn">
                      <i class="fas fa-chevron-down"></i>
                      <i class="fas fa-chevron-up"></i>

                    </span>
                  </a>
                  <div class="date-collapse-content">

                    <div class="room-details-btn">
                      <div class="meeting-room-btn">
                        <button class="btn">Meeting Room 1</button>
                      </div>
                      <span class="date-collapse-btn">
                        <i class="fas fa-chevron-down"></i>
                        <i class="fas fa-chevron-up"></i>
                      </span>
                    </div>
                    <div class="meetion-room-content-collapse">

                    <div class="meeting-room-form">

                      <div class="input-step-f">
                        <input class="step-form-in" id="Attendees2" placeholder="Attendees" value="1" />
                      </div>

                      <div class="input-step-f">
                        <select class="step-form-in" id="layout">
                          <option>Please Select</option>
                          <option>Theatre</option>
                          <option>Board Room</option>
                          <option>Class Room</option>
                          <option>Banquet</option>
                          <option>Reception</option>
                          <option>U-Shaped</option>
                          <option>Cabaret</option>
                       </select>
                      </div>


                      <div class="input-step-f">
                        <select class="step-form-in"
                           id="start-time">
                          <option value="00:00">Start time</option>
                          <option value="00:00">00:00</option>
                          <option value="00:30">00:30</option>
                          <option value="01:00">01:00</option>
                          <option value="01:30">01:30</option>
                          <option value="02:00">02:00</option>
                          <option value="02:30">02:30</option>
                          <option value="03:00">03:00</option>
                          <option value="03:30">03:30</option>
                          <option value="04:00">04:00</option>
                          <option value="04:30">04:30</option>
                          <option value="05:00">05:00</option>
                          <option value="05:30">05:30</option>
                          <option value="06:00">06:00</option>
                          <option value="06:30">06:30</option>
                          <option value="07:00">07:00</option>
                          <option value="07:30">07:30</option>
                          <option value="08:00">08:00</option>
                          <option value="08:30">08:30</option>
                          <option selected="selected" value="09:00">09:00</option>
                          <option value="09:30">09:30</option>
                          <option value="10:00">10:00</option>
                          <option value="10:30">10:30</option>
                          <option value="11:00">11:00</option>
                          <option value="11:30">11:30</option>
                          <option value="12:00">12:00</option>
                          <option value="12:30">12:30</option>
                          <option value="13:00">13:00</option>
                          <option value="13:30">13:30</option>
                          <option value="14:00">14:00</option>
                          <option value="14:30">14:30</option>
                          <option value="15:00">15:00</option>
                          <option value="15:30">15:30</option>
                          <option value="16:00">16:00</option>
                          <option value="16:30">16:30</option>
                          <option value="17:00">17:00</option>
                          <option value="17:30">17:30</option>
                          <option value="18:00">18:00</option>
                          <option value="18:30">18:30</option>
                          <option value="19:00">19:00</option>
                          <option value="19:30">19:30</option>
                          <option value="20:00">20:00</option>
                          <option value="20:30">20:30</option>
                          <option value="21:00">21:00</option>
                          <option value="21:30">21:30</option>
                          <option value="22:00">22:00</option>
                          <option value="22:30">22:30</option>
                          <option value="23:00">23:00</option>
                          <option value="23:30">23:30</option>
                        </select>
                      </div>


                      <div class="input-step-f">
                        <select class="step-form-in" id="End time">
                          <option value="00:00">00:00</option>
                          <option value="00:30">00:30</option>
                          <option value="01:00">01:00</option>
                          <option value="01:30">01:30</option>
                          <option value="02:00">02:00</option>
                          <option value="02:30">02:30</option>
                          <option value="03:00">03:00</option>
                          <option value="03:30">03:30</option>
                          <option value="04:00">04:00</option>
                          <option value="04:30">04:30</option>
                          <option value="05:00">05:00</option>
                          <option value="05:30">05:30</option>
                          <option value="06:00">06:00</option>
                          <option value="06:30">06:30</option>
                          <option value="07:00">07:00</option>
                          <option value="07:30">07:30</option>
                          <option value="08:00">08:00</option>
                          <option value="08:30">08:30</option>
                          <option value="09:00">09:00</option>
                          <option value="09:30">09:30</option>
                          <option value="10:00">10:00</option>
                          <option value="10:30">10:30</option>
                          <option value="11:00">11:00</option>
                          <option value="11:30">11:30</option>
                          <option value="12:00">12:00</option>
                          <option value="12:30">12:30</option>
                          <option value="13:00">13:00</option>
                          <option value="13:30">13:30</option>
                          <option value="14:00">14:00</option>
                          <option value="14:30">14:30</option>
                          <option value="15:00">15:00</option>
                          <option value="15:30">15:30</option>
                          <option value="16:00">16:00</option>
                          <option value="16:30">16:30</option>
                          <option value="17:00">17:00</option>
                          <option selected="selected" value="17:30">17:30</option>
                          <option value="18:00">18:00</option>
                          <option value="18:30">18:30</option>
                          <option value="19:00">19:00</option>
                          <option value="19:30">19:30</option>
                          <option value="20:00">20:00</option>
                          <option value="20:30">20:30</option>
                          <option value="21:00">21:00</option>
                          <option value="21:30">21:30</option>
                          <option value="22:00">22:00</option>
                          <option value="22:30">22:30</option>
                          <option value="23:00">23:00</option>
                          <option value="23:30">23:30</option>
                        </select>
                      </div>



                    </div>



                    <div class="equipment-section">
                      <div class="equipment-inner">
                        <h5>Equipment</h5>

                        <div class="equipment-section-card">
                          <div class="equipment-section-card-left">
                            <i class="fas fa-plug"></i>LCD Projector

                          </div>
                          <div class="equipment-section-card-right">
                            <div class="input-group1">
                              <div class="input-group-n 1">
                                <input type="button" value="-" id="decrement" class="input-group-in" /> 
                              </div>
                              <div class="input-group-n 2">
                                <input type="text"  class="input-group-in" />
                              </div>
                              <div class="input-group-n 3">
                                <input type="button" value="+" id="increment" class="input-group-in" />
                              </div>
                            </div>
                          </div>
                        </div>



                        <div class="equipment-section-card">
                          <div class="equipment-section-card-left">
                            <i class="fas fa-plug"></i>Projection Screen
                        
                          </div>
                          <div class="equipment-section-card-right">
                            <div class="input-group1">
                              <div class="input-group-n 1">
                                <input type="button" value="-" id="decrement" class="input-group-in" />
                              </div>
                              <div class="input-group-n 2">
                                <input type="text" class="input-group-in" />
                              </div>
                              <div class="input-group-n 3">
                                <input type="button" value="+" id="increment" class="input-group-in" />
                              </div>
                            </div>
                          </div>
                        </div>



                        <div class="equipment-section-card">
                          <div class="equipment-section-card-left">
                            <i class="fas fa-plug"></i>Flipchart
                        
                          </div>
                          <div class="equipment-section-card-right">
                            <div class="input-group1">
                              <div class="input-group-n 1">
                                <input type="button" value="-" id="decrement" class="input-group-in" />
                              </div>
                              <div class="input-group-n 2">
                                <input type="text" class="input-group-in" />
                              </div>
                              <div class="input-group-n 3">
                                <input type="button" value="+" id="increment" class="input-group-in" />
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <div class="add-equipment">
                          <button class="btn"><i class="fa fa-plus" aria-hidden="true"></i>Add extra equipment</button>
                        </div>


                        
                      </div>
                    </div>


                    <div class="add-room">
                      <div class="btn"><i class="fa fa-plus" aria-hidden="true"></i>Add another room</div>
                    </div>

                    </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="prev-nex-btn">

            <div class="previous-b" id="meet-r-p">
              <button class="btn"><i class="fas fa-chevron-left"></i>Back</button>
            </div>

            <div class="next-b" id ="meet-r-n">
              <button class="btn">Next</button>
            </div>
          </div>
          </div>

          <!-- second step start end -->


               <!-- third step start -->

     <div class="meeting-section Food & Drink">
          <h5 class="form-head"><i class="fa fa-handshake-o" aria-hidden="true"></i>Food and Drink</h5>
          <div class="form-fields">
            <div class="food-and-drink-details">
              <div class="indi-date2">
                <a href="#" class="date-cont">
                  <div class="date-text">
                    <span><i class="fas fa-utensils"></i></span>Feb 19, 2020
                  </div>
                  <span class="date-collapse-btn">
                    <i class="fas fa-chevron-down"></i>
                    <i class="fas fa-chevron-up"></i>
                
                  </span>
                </a>

                <div class="date-collapse-content">
                <div class="collaps-bt">
                  <div class="room-details-btn">
                    <div class="meeting-room-btn">
                      <button class="btn"><i class="fas fa-utensils"></i></i>Breakfast</button>
                    </div>
                    <span class="date-collapse-btn">
                      <i class="fas fa-chevron-down"></i>
                      <i class="fas fa-chevron-up"></i>
                    </span>
                  </div>

                  <div class="meetion-room-content-collapse">


                  <div class="equipment-section-card">
                          <div class="equipment-section-card-left">
                            <i class="fas fa-plug" aria-hidden="true"></i>Hot Breakfast Rolls

                          </div>
                          <div class="equipment-section-card-right">
                            <div class="input-group1">
                              <div class="input-group-n 1">
                                <input type="button" value="-" id="decrement" class="input-group-in"> 
                              </div>
                              <div class="input-group-n 2">
                                <span class="bmd-form-group"><input type="text" class="input-group-in"></span>
                              </div>
                              <div class="input-group-n 3">
                                <input type="button" value="+" id="increment" class="input-group-in">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="add-equipment">
                          <button class="btn"><i class="fa fa-plus" aria-hidden="true"></i>Add extra equipment</button>
                        </div>

                  
                  </div>
                </div>

                <div class="collaps-bt">
                  <div class="room-details-btn">
                    <div class="meeting-room-btn">
                      <button class="btn"><i class="fas fa-coffee"></i>Tea & Coffee Break</button>
                    </div>
                    <span class="date-collapse-btn">
                      <i class="fas fa-chevron-down"></i>
                      <i class="fas fa-chevron-up"></i>
                    </span>
                  </div>
                  <div class="meetion-room-content-collapse">


                  <div class="equipment-section-card">
                          <div class="equipment-section-card-left">
                            <i class="fas fa-plug" aria-hidden="true"></i>Tea and Coffee only

                          </div>
                          <div class="equipment-section-card-right">
                            <div class="input-group1">
                              <div class="input-group-n 1">
                                <input type="button" value="-" id="decrement" class="input-group-in"> 
                              </div>
                              <div class="input-group-n 2">
                                <span class="bmd-form-group"><input type="text" class="input-group-in"></span>
                              </div>
                              <div class="input-group-n 3">
                                <input type="button" value="+" id="increment" class="input-group-in">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="add-equipment">
                          <button class="btn"><i class="fa fa-plus" aria-hidden="true"></i>Add extra equipment</button>
                        </div>






                  </div>
                </div>
                  
                <div class="collaps-bt">
                  <div class="room-details-btn">
                    <div class="meeting-room-btn">
                      <button class="btn"><i class="fas fa-utensils"></i>Lunch</button>
                    </div>
                    <span class="date-collapse-btn">
                      <i class="fas fa-chevron-down"></i>
                      <i class="fas fa-chevron-up"></i>
                    </span>
                  </div>
                  <div class="meetion-room-content-collapse">

                  <div class="equipment-section-card">
                          <div class="equipment-section-card-left">
                            <i class="fas fa-plug" aria-hidden="true"></i>Sandwiches

                          </div>
                          <div class="equipment-section-card-right">
                            <div class="input-group1">
                              <div class="input-group-n 1">
                                <input type="button" value="-" id="decrement" class="input-group-in"> 
                              </div>
                              <div class="input-group-n 2">
                                <span class="bmd-form-group"><input type="text" class="input-group-in"></span>
                              </div>
                              <div class="input-group-n 3">
                                <input type="button" value="+" id="increment" class="input-group-in">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="add-equipment">
                          <button class="btn"><i class="fa fa-plus" aria-hidden="true"></i>Add extra equipment</button>
                        </div>







                  </div>
                </div>
                  

                <div class="collaps-bt">
                  <div class="room-details-btn">
                    <div class="meeting-room-btn">
                      <button class="btn"><i class="fas fa-utensils"></i>Dinner</button>
                    </div>
                    <span class="date-collapse-btn">
                      <i class="fas fa-chevron-down"></i>
                      <i class="fas fa-chevron-up"></i>
                    </span>
                  </div>
                  <div class="meetion-room-content-collapse">


                  <div class="equipment-section-card">
                          <div class="equipment-section-card-left">
                            <i class="fas fa-plug" aria-hidden="true"></i>2-Course

                          </div>
                          <div class="equipment-section-card-right">
                            <div class="input-group1">
                              <div class="input-group-n 1">
                                <input type="button" value="-" id="decrement" class="input-group-in"> 
                              </div>
                              <div class="input-group-n 2">
                                <span class="bmd-form-group"><input type="text" class="input-group-in"></span>
                              </div>
                              <div class="input-group-n 3">
                                <input type="button" value="+" id="increment" class="input-group-in">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="add-equipment">
                          <button class="btn"><i class="fa fa-plus" aria-hidden="true"></i>Add extra equipment</button>
                        </div>





                  </div>
                </div>
                  

                <div class="collaps-bt">
                  <div class="room-details-btn">
                    <div class="meeting-room-btn">
                      <button class="btn"><i class="fas fa-glass-cheers"></i>Drinks and Reception</button>
                    </div>
                    <span class="date-collapse-btn">
                      <i class="fas fa-chevron-down"></i>
                      <i class="fas fa-chevron-up"></i>
                    </span>
                  </div>
                  <div class="meetion-room-content-collapse">




                  <div class="equipment-section-card">
                          <div class="equipment-section-card-left">
                            <i class="fas fa-plug" aria-hidden="true"></i>Drinks and Reception

                          </div>
                          <div class="equipment-section-card-right">
                            <div class="input-group1">
                              <div class="input-group-n 1">
                                <input type="button" value="-" id="decrement" class="input-group-in"> 
                              </div>
                              <div class="input-group-n 2">
                                <span class="bmd-form-group"><input type="text" class="input-group-in"></span>
                              </div>
                              <div class="input-group-n 3">
                                <input type="button" value="+" id="increment" class="input-group-in">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="add-equipment">
                          <button class="btn"><i class="fa fa-plus" aria-hidden="true"></i>Add extra equipment</button>
                        </div>








                  </div>
                </div>
                  


                <div class="collaps-bt">
                  <div class="room-details-btn">
                    <div class="meeting-room-btn">
                      <button class="btn"><i class="fa fa-plus-circle" aria-hidden="true"></i>Additional</button>
                    </div>
                    <span class="date-collapse-btn">
                      <i class="fas fa-chevron-down"></i>
                      <i class="fas fa-chevron-up"></i>
                    </span>
                  </div>
                  <div class="meetion-room-content-collapse">



                  <div class="equipment-section-card">
                          <div class="equipment-section-card-left">
                            <i class="fas fa-plug" aria-hidden="true"></i>Additional

                          </div>
                          <div class="equipment-section-card-right">
                            <div class="input-group1">
                              <div class="input-group-n 1">
                                <input type="button" value="-" id="decrement" class="input-group-in"> 
                              </div>
                              <div class="input-group-n 2">
                                <span class="bmd-form-group"><input type="text" class="input-group-in"></span>
                              </div>
                              <div class="input-group-n 3">
                                <input type="button" value="+" id="increment" class="input-group-in">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="add-equipment">
                          <button class="btn"><i class="fa fa-plus" aria-hidden="true"></i>Add extra equipment</button>
                        </div>





                  </div>
                </div>
                  



                </div>
              </div>
            </div>

          </div>
          <div class="prev-nex-btn">
          
            <div class="previous-b" id="meet-f-p">
              <button class="btn"><i class="fas fa-chevron-left"></i>Back</button>
            </div>
          
            <div class="next-b" id="meet-f-n">
              <button class="btn">Next</button>
            </div>
          </div>
          </div>




          <!-- third step end -->



                   <!-- fourth step start -->


          <div class="meeting-section Food & Drink">
            <h5 class="form-head"><i class="fa fa-bed" aria-hidden="true"></i>Accomodation</h5>
            <div class="form-fields">
              <div class="food-and-drink-details">
                <h4>Do you require accommodation</h4>
                <div class="radio-btn">
                  <input type="radio" id="yes"  value="Yes" checked="checked">
                  <label>Yes</label>
                  <input type="radio" id="no" value="No">
                  <label>No</label>

                </div>
                <p>How do you reduce your event costs?</p>
                <p>Include accommodation</p>
                <p>Attendes can pay direct via a ref code.</p>
                <div class="arrival-and-departure">
                  
                </div>
                
              </div>
            </div>
            <div class="prev-nex-btn">
            
              <div class="previous-b" id="meet-f-p">
                <button class="btn"><i class="fas fa-chevron-left"></i>Back</button>
              </div>
            
              <div class="next-b" id="meet-f-n">
                <button class="btn">Next</button>
              </div>
            </div>
          </div>




          <!-- fourth step end -->


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





@section('script')

<!-- <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script> -->


<script>
$( document ).ready(function() {
    
  $('.date-cont').click(function(){
    $(this).siblings('div').slideToggle("slow", function(){});
    $(this).children('.date-collapse-btn').children('.fa-chevron-down').toggleClass('flip');
    return false
  })
  $('.room-details-btn').click(function(){
    $(this).siblings('div').slideToggle("slow", function(){});
    $(this).children('.date-collapse-btn').children('.fa-chevron-down').toggleClass('flip');
    $(this).parents('.collaps-bt').siblings('.collaps-bt').children('.meetion-room-content-collapse').slideUp();

    
  })

});
</script>
@endsection

  
  