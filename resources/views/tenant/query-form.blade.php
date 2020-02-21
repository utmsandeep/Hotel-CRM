@extends('tenant.layouts.master')

@section('head')

@endsection
@section('content')

<!-- multistep-form-page -->
<div class="multi-step-form-page">
  <div class="m-s-f-p-innner">
    <!-- progress bar -->
    <div class="progress3">
      <div class="progressed active-bar twenty">20%</div>
      <div class="progressed fourty">40%</div>
      <div class="progressed sixty">60%</div>
      <div class="progressed eighty">80%</div>
      <div class="progressed ninty">90%</div>
      <div class="progressed hundred">100%</div>
    </div>
<!-- progress bar end -->

<!-- form and summary section -->
<div class="form-summery">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-7">
        <div class="form-section">
          <form class="full-form" id="query-form">
            <!-- first step -->
            <div class="meeting-section activestep">
              <h5 class="form-head"><i class="fa fa-calendar" aria-hidden="true"></i>Meeting Details</h5>
              <div class="form-fields">
                <div class="input-step-f">
                  <input class="step-form-in" id="Attendees" placeholder="Attendees" name="attendees" />
                </div>

                <div class="input-step-f">
                  <select class="step-form-in" id="event-purpose" name="eventpurpose">
                    <option value="">Please Select your purpose of event</option>
                    <option value="0">Advisory Board</option>
                    <option value="1">Conference</option>
                    <option value="2">Corporate Event</option>
                    <option value="3">Customer Training</option>
                    <option value="4">Dinner</option>
                    <option value="5">Exhibition</option>
                    <option value="6">Meeting</option>
                    <option value="7">Recruting</option>
                    <option value="8">Team Meeting</option>
                    <option value="9">Training</option>
                    <option value="Other">Other</option>

                  </select>
                </div>

                <div class="input-step-f custom-purpose-event" id='custum-event'>
                  <input type="text" class="step-form-in" placeholder="Describe your purpose of event" name="event-purpose" />
                </div>


                <div class="input-step-f">
                  <input type="text" class="step-form-in" id="start-d" placeholder="Start Date" name="startdate" />
                </div>

              <div class="input-step-f">
                <input type="text" class="step-form-in" id="end-d" placeholder="End Date"  name="enddate"/>
              </div>

              <div class="switch-input datef">
                <div class="sw">
                  <label class="switch">
                    <input type="checkbox" id="flex-date">
                    <span class="slider round"></span>
                  </label>
                </div>
                <span>My dates are flexible</span>
              </div>


              <div class="input-step-f custom-date-event">
                <input type="text" id="alternate-date" class="step-form-in" placeholder="Alternet date" name="alternatedate" />
              </div>



              <div class="input-step-f input-step-f-full">
                <input type="text" class="step-form-in" id="location" placeholder="Please Enter Your Location"  name="location"/>
              </div>


              <div class="switch-input locationf">
                <div class="sw">
                  <label class="switch">
                    <input type="checkbox" id="flex-location">
                    <span class="slider round"></span>
                  </label>
                </div>
                <span>Alternative Location</span>
              </div>

              <div class="input-step-f custom-location-event">
                <input type="text" class="step-form-in" placeholder="Alternative Location" name="altlocation" />
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
                        <button type="button" class="btn">Meeting Room 1</button>
                      </div>
                      <span class="date-collapse-btn">
                        <i class="fas fa-chevron-down"></i>
                        <i class="fas fa-chevron-up"></i>
                      </span>
                    </div>
                    <div class="meetion-room-content-collapse">

                    <div class="meeting-room-form">

                      <div class="input-step-f">
                        <input class="step-form-in" id="Attendees2" placeholder="Attendees" value="1" name="attendees" />
                      </div>

                      <div class="input-step-f">
                        <select class="step-form-in" id="layout" name="layout">
                          <option value = "">Please Select layout</option>
                          <option value = "Theatre">Theatre</option>
                          <option value = "BoardRoom">Board Room</option>
                          <option value = "ClassRoom">Class Room</option>
                          <option value = "Banquet">Banquet</option>
                          <option value = "Reception">Reception</option>
                          <option value = "U-Shaped">U-Shaped</option>
                          <option value = "Cabaret">Cabaret</option>
                       </select>
                      </div>


                      <div class="input-step-f">
                        <select class="step-form-in"
                           id="start-time" name="starttime">
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
                        <select class="step-form-in" id="End time" name="endtime">
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
                                <input type="button" value="-" id="decrement" class="input-group-in decrement" name="decrement" /> 
                              </div>
                              <div class="input-group-n 2">
                                <input type="number" min="0" id="counttter" class="input-group-in" value="0" name="counttter" />
                              </div>
                              <div class="input-group-n 3">
                                <input type="button" value="+" id="increment" class="input-group-in increment" name="increment" />
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
                                <input type="button" value="-" id="decrement" class="input-group-in decrement" name="decrement" />
                              </div>
                              <div class="input-group-n 2">
                                <input type="number" min="0" id="counttter" class="input-group-in" value="0" name="counttter" />
                              </div>
                              <div class="input-group-n 3">
                                <input type="button" value="+" id="increment" class="input-group-in increment" name="increment" />
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
                                <input type="button" value="-" id="decrement" class="input-group-in decrement" name="decrement" />
                              </div>
                              <div class="input-group-n 2">
                                <input type="number" min="0" id="counttter" class="input-group-in" value="0" name= "counttter" />
                              </div>
                              <div class="input-group-n 3">
                                <input type="button" value="+" id="increment" class="input-group-in increment" name = "increment" />
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <div class="add-equipment">
                          <button type="button" class="btn"><i class="fa fa-plus" aria-hidden="true"></i>Add extra equipment</button>
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
                      <button type="button" class="btn"><i class="fas fa-utensils"></i></i>Breakfast</button>
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
                                <input type="button" value="-" id="decrement" class="input-group-in decrement" name="decrement"> 
                              </div>
                              <div class="input-group-n 2">
                                <span class="bmd-form-group"><input type="number" min="0" id="counttter" class="input-group-in" value="0" name="counttter" ></span>
                              </div>
                              <div class="input-group-n 3">
                                <input type="button" value="+" id="increment" class="input-group-in increment" name="increment">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="add-equipment">
                          <button type="button" class="btn"><i class="fa fa-plus" aria-hidden="true"></i>Add extra equipment</button>
                        </div>

                  
                  </div>
                </div>

                <div class="collaps-bt">
                  <div class="room-details-btn">
                    <div class="meeting-room-btn">
                      <button type="button" class="btn"><i class="fas fa-coffee"></i>Tea & Coffee Break</button>
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
                                <input type="button" value="-" id="decrement" class="input-group-in decrement" name="increment"> 
                              </div>
                              <div class="input-group-n 2">
                                <span class="bmd-form-group"><input type="number" min="0" id="counttter" class="input-group-in" value="0" name="counttter"></span>
                              </div>
                              <div class="input-group-n 3">
                                <input type="button" value="+" id="increment" class="input-group-in increment" name="increment">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="add-equipment">
                          <button type="button" class="btn"><i class="fa fa-plus" aria-hidden="true"></i>Add extra equipment</button>
                        </div>






                  </div>
                </div>
                  
                <div class="collaps-bt">
                  <div class="room-details-btn">
                    <div class="meeting-room-btn">
                      <button type="button" class="btn"><i class="fas fa-utensils"></i>Lunch</button>
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
                                <input type="button" value="-" id="decrement" class="input-group-in decrement" name="decrement"> 
                              </div>
                              <div class="input-group-n 2">
                                <span class="bmd-form-group"><input type="number" min="0" id="counttter" class="input-group-in" value="0" name="counttter"></span>
                              </div>
                              <div class="input-group-n 3">
                                <input type="button" value="+" id="increment" class="input-group-in increment" name="increment">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="add-equipment">
                          <button type="button" class="btn"><i class="fa fa-plus" aria-hidden="true"></i>Add extra equipment</button>
                        </div>







                  </div>
                </div>
                  

                <div class="collaps-bt">
                  <div class="room-details-btn">
                    <div class="meeting-room-btn">
                      <button type="button" class="btn"><i class="fas fa-utensils"></i>Dinner</button>
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
                                <input type="button" value="-" id="decrement" class="input-group-in decrement" name="decrement"> 
                              </div>
                              <div class="input-group-n 2">
                                <span class="bmd-form-group"><input type="number" min="0" id="counttter" class="input-group-in" value="0" name="counttter"></span>
                              </div>
                              <div class="input-group-n 3">
                                <input type="button" value="+" id="increment" class="input-group-in increment" name="increment">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="add-equipment">
                          <button type="button" class="btn"><i class="fa fa-plus" aria-hidden="true"></i>Add extra equipment</button>
                        </div>





                  </div>
                </div>
                  

                <div class="collaps-bt">
                  <div class="room-details-btn">
                    <div class="meeting-room-btn">
                      <button type="button" class="btn"><i class="fas fa-glass-cheers"></i>Drinks and Reception</button>
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
                                <input type="button" value="-" id="decrement" class="input-group-in decrement" name="decrement"> 
                              </div>
                              <div class="input-group-n 2">
                                <span class="bmd-form-group"><input type="number" min="0" id="counttter" class="input-group-in" value="0" name="counttter"></span>
                              </div>
                              <div class="input-group-n 3">
                                <input type="button" value="+" id="increment" class="input-group-in increment" name="increment">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="add-equipment">
                          <button type="button" class="btn"><i class="fa fa-plus" aria-hidden="true"></i>Add extra equipment</button>
                        </div>








                  </div>
                </div>
                  


                <div class="collaps-bt">
                  <div class="room-details-btn">
                    <div class="meeting-room-btn">
                      <button type="button" class="btn"><i class="fa fa-plus-circle" aria-hidden="true"></i>Additional</button>
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
                                <input type="button" value="-" id="decrement" class="input-group-in decrement" name="decrement"> 
                              </div>
                              <div class="input-group-n 2">
                                <span class="bmd-form-group"><input type="number" min = "0" id="counttter" class="input-group-in" value="0" name="counttter"></span>
                              </div>
                              <div class="input-group-n 3">
                                <input type="button" value="+" id="increment" class="input-group-in increment" name="increment">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="add-equipment">
                          <button type="button" class="btn"><i class="fa fa-plus" aria-hidden="true"></i>Add extra equipment</button>
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


          <div class="meeting-section Accomodation">
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
                <div class="arrival-and-departure-details">

                  <div class="input-step-f">
                    <input type="text" class="step-form-in" id="arrival-d" placeholder="Arrival date of first delegate" name="arrivaldate"/>
                  </div>

                  <div class="input-step-f">
                    <input type="text" class="step-form-in" id="departure-d" placeholder="Departure date of first delegate" name="departuredate" />
                  </div>

                  <div class="day-room-details">
                    <a href="#" class="date-cont">
                      <div class="date-text">
                        <span><i class="fa fa-calendar" aria-hidden="true"></i></span>Feb 19, 2020
                      </div>
                      <span class="date-collapse-btn">
                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                        <i class="fas fa-chevron-up" aria-hidden="true"></i>
                    
                      </span>
                    </a>
                    <div class="date-wise-room-details-collapse">

                      <div class="equipment-section-card">
                        <div class="equipment-section-card-left">
                          <i class="fa fa-bed" aria-hidden="true"></i>Double room
                      
                        </div>
                        <div class="equipment-section-card-right">
                          <div class="input-group1">
                            <div class="input-group-n 1">
                              <input type="button" value="-" id="decrement" class="input-group-in decrement" name="decrement">
                            </div>
                            <div class="input-group-n 2">
                              <span class="bmd-form-group"><input type="number" min = "0" id="counttter" class="input-group-in" value="0" name="counttter"></span>
                            </div>
                            <div class="input-group-n 3">
                              <input type="button" value="+" id="increment" class="input-group-in increment" name="increment">
                            </div>
                          </div>
                        </div>
                      </div>



                      <div class="equipment-section-card">
                        <div class="equipment-section-card-left">
                          <i class="fa fa-bed" aria-hidden="true"></i>Single room
                      
                        </div>
                        <div class="equipment-section-card-right">
                          <div class="input-group1">
                            <div class="input-group-n 1">
                              <input type="button" value="-" id="decrement" class="input-group-in decrement" name="decrement">
                            </div>
                            <div class="input-group-n 2">
                              <span class="bmd-form-group"><input type="number" min = "0" id="counttter" class="input-group-in" value="0" name="counttter"></span>
                            </div>
                            <div class="input-group-n 3">
                              <input type="button" value="+" id="increment" class="input-group-in increment" name="increment">
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="include-breakfast">
                        <label class="switch">
                          <input type="checkbox">
                          <span class="slider round"></span>
                        </label>
                        <span>Include Breakfast</span>
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




          <!-- fourth step end -->




           <!-- fifth step -->


          <div class="meeting-section summery">
            <h5 class="form-head"><i class="fa fa-calendar" aria-hidden="true"></i>Summary</h5>
            <div class="form-fields">
              <div class="summary-details">

                <div class="input-step-f">
                  <input type="text" class="step-form-in" id="f-n" placeholder="Full Name" name="fname" />
                </div>

                <div class="input-step-f">
                  <input type="text" class="step-form-in" id="l-n" placeholder="Last Name" name="lname" />
                </div>

                <div class="input-step-f">
                  <input type="tel" class="step-form-in" id="ph" placeholder="Phone" name="phone" />
                </div>

                <div class="input-step-f">
                  <input type="text" class="step-form-in" id="comp" placeholder="Company Name" name="company" />
                </div>

                <div class="input-step-f">
                  <input type="text" class="step-form-in" id="arrival-d" placeholder="Decision Date"  name="decisiondate"/>
                </div>

                <div class="input-step-f">
                  <select class="crncy" placeholder="Currency" id="Currency" name="currency">
                    <option>Please Select
                    </option>
                    <option>Algerian Dinar</option>
                    <option>Argentina Peso</option>
                    <option>Australian Dollar</option>
                    <option>Azerbaijani manat</option>
                    <option>Bahrain Dinars</option>
                    <option>Bangladeshi Taka</option>
                    <option>Brazil Real</option>
                    <option>Bulgaria Lev</option>
                    <option>Bulgarian Lev</option>
                    <option>Burmese Kyat</option>
                    <option>Canadian Dollars</option>
                    <option>Chile Peso</option>
                    <option>China Yuan</option>
                    <option>Croatia Kuna</option>
                    <option>Czech Republic Koruny</option>
                    <option>Danish kroner</option>
                    <option>Dominican peso</option>
                    <option>Egypt Pound</option>
                    <option>Emirati Dirham</option>
                    <option>Estonian kroons</option>
                    <option>Euro</option>
                    <option>Fiji Dollars</option>
                    <option>Ghana</option>
                    <option>Hong Kong Dollar</option>
                    <option>Hungarian Forint</option>
                    <option>Iceland Krona</option>
                    <option>India Rupees</option>
                    <option>Indonesian rupiahs</option>
                    <option>Israeli new shekel</option>
                    <option>Jamaican Dollar</option>
                    <option>Japanese Yen</option>
                    <option>Jordanian Dinar</option>
                    <option>Jordanian Dinar</option>
                    <option>Kazakhstani Tenge</option>
                    <option>Kenyan shilling</option>
                    <option>Kuwait Dinars</option>
                    <option>Lebanon Pounds</option>
                    <option>Malaysian Ringgit</option>
                    <option>Mexico Peso</option>
                    <option>Moroccan Dirham</option>
                    <option>Namibian Dollar</option>
                    <option>Nepalese Rupee</option>
                    <option>New Taiwan Dollars</option>
                    <option>New Zealand Dollar</option>
                    <option>Nigerian Naira</option>
                    <option>Norway Krone</option>
                    <option>Oman Rials</option>
                    <option>Pakistani Rupee</option>
                    <option>Philippines Pesos</option>
                    <option>Poland Zloty</option>
                    <option>Qatar Riyals</option>
                    <option>Romanian New Leu</option>
                    <option>Russia Rubles</option>
                    <option>Saudi Riyal</option>
                    <option>Serbian Dinar</option>
                    <option>Singapore Dollar</option>
                    <option>Rand</option>
                    <option>South Korean won</option>
                    <option>Sri Lanka Rupee</option>
                    <option>Sterling</option>
                    <option>Sweden Kroner</option>
                    <option>Swiss francs</option>
                    <option>Taiwan Dollar</option>
                    <option>Tanzanian Shilling</option>
                    <option>Thailand Baht</option>
                    <option>Tunisia Dinar</option>
                    <option>Turkey Lira</option>
                    <option>Ukrainian Hryvnia</option>
                    <option>US Dollar</option>
                    <option>Vietnamese Dong</option>
                    <option>XOF</option>
                    <option>Zambian Kwacha</option>
                  </select>
                </div>

                <div class="input-step-f">
                  <input type="text" class="step-form-in" id="budget" placeholder="Budget" name="budget" />
                </div>


                <div class="input-step-f f-w">
                  <input type="text" class="step-form-in" id="additiona" placeholder="Additional" name="additional" />
                </div>


                <div class="meeting-allocation-response">
                  <h4><i class="fas fa-tasks"></i>Meeting Allocation</h4>

                  <div class="input-step-f">
                    <input type="text" class="step-form-in" id="meet-name" placeholder="Meeting Name" name="meeting-name" />
                  </div>

                  <div class="input-step-f">
                    <input type="text" class="step-form-in" id="pon" placeholder="Purchase Order Number" name="purchase-number" />
                  </div>


                  <div class="aggrement">
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                    <span>I agree to the <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a></span>
                  </div>

                </div>

              </div>
              </div>



              <div class="prev-nex-btn">
              
                <div class="previous-b" id="meet-f-p">
                  <button class="btn"><i class="fas fa-chevron-left"></i>Back</button>
                </div>
              
                <div class="next-b" id="meet-f-n">
                  <button class="btn">Submit Enquiry</button>
                </div>
              </div>


              </div>




         




          <!-- fifth step end -->



          <!-- sixth step -->

          
          <!-- sixth step end -->


          </form>
        </div>
      </div>
        <!-- side summary -->
      <div class="col-12 col-md-5">
        <div class="side-summary">
          <div class="head-summery">
            <div class="left-h">
              <h4>Summary</h4>
              <p>Your Enquiry Details</p>

            </div>
            <div class="right-h">
              <img src="{{ asset('images/searcpage-img/illustration-2.png') }}">
            </div>
          </div>
          <div class="day-summary">
            <a href="#" class="date-cont">
              <div class="date-text">
                <span><i class="fa fa-calendar" aria-hidden="true"></i></span>Feb 19, 2020
              </div>
              <span class="date-collapse-btn">
                <i class="fas fa-chevron-down" aria-hidden="true"></i>
                <i class="fas fa-chevron-up" aria-hidden="true"></i>
            
              </span>
            </a>
            <div class="side-summary-collapse">
              <div class="top-row">
                <div class="side-summary-collapse-l">
                  <h4>Room Hire A</h4>
                </div>
                <div class="side-summary-collapse-r">
                  <h4>1 delegates</h4>
                </div>
              </div>

              <div class="bottom-row">
                <div class="side-summary-collapse-l">
                  <h4><i class="fas fa-clock"></i>9:00 AM to 5:30 PM</h4>
                </div>
                <div class="side-summary-collapse-r">
                  <h4>Class Room</h4>
                </div>
              </div>
              
            </div>
          </div>

          <div class="Shortlist-summary">
            <a href="#" class="date-cont">
              <div class="date-text">
                <span><i class="fa fa-list-alt" aria-hidden="true"></i></span>Shortlist
              </div>
              <span class="date-collapse-btn">
                <i class="fas fa-chevron-down" aria-hidden="true"></i>
                <i class="fas fa-chevron-up" aria-hidden="true"></i>
            
              </span>
            </a>

            <div class="shortlist-collapse">
              <div class="img-left">
                <img src="{{ asset('images/searcpage-img/sh-8859b625232b4ebcaae6154bb.jpg') }}">
              </div>
              <div class="shrt-lis-head">Metropolitan Hotel New Delhi</div>

            </div>

          </div>


        </div>
      </div>

      <!-- side summary end -->
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
<script src ="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


<script>
$( document ).ready(function() {

  // accordian
    
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
// accordian




// datapicker

    $(function () {
    var dateToday = new Date();
    
        $("#arrival-d").datepicker({
            dateFormat: "mm/dd/yy",
            showOtherMonths: true,
            selectOtherMonths: true,
            autoclose: true,
            changeMonth: true,
            changeYear: true,
            minDate: dateToday,
            
            //gotoCurrent: true,
        });

         $("#departure-d").datepicker({
            dateFormat: "mm/dd/yy",
            showOtherMonths: true,
            selectOtherMonths: true,
            autoclose: true,
            changeMonth: true,
            changeYear: true,
            
            
            //gotoCurrent: true,
        });


        $('#alternate-date').datepicker({
            dateFormat: "mm/dd/yy",
            showOtherMonths: true,
            selectOtherMonths: true,
            autoclose: true,
            changeMonth: true,
            changeYear: true,
            minDate: dateToday,
            
            //gotoCurrent: true,
        });


        $('#start-d').datepicker({
            dateFormat: "mm/dd/yy",
            showOtherMonths: true,
            selectOtherMonths: true,
            autoclose: true,
            changeMonth: true,
            changeYear: true,
            minDate: dateToday,
            
            //gotoCurrent: true,
        });
       
       $("#end-d").datepicker({
            dateFormat: "mm/dd/yy",
            showOtherMonths: true,
            selectOtherMonths: true,
            autoclose: true,
            changeMonth: true,
            changeYear: true,
            
            
            //gotoCurrent: true,
        });
        
         
        // return selected
        
       
        
   
  
    
   
        
});


// datapicker




// next btn function
$('.next-b').click(function(e){
  e.preventDefault();
  var current = $('.meeting-section.active');
  var nxt = $(this).parent().parent().next();
 var ind =  $('.meeting-section').index(nxt);

//  validation
var form = $('#query-form');
form.validate({
  rules:{
    attendees:{
      required:true,
      number: true
    },
    eventpurpose:{
      required:true
    },
    startdate:{
      required:true,
      
    },
    enddate:{
      required:true,
      

    },
    location:{
      required:true,
    },
    layout:{
      required:true,
    },
    starttime:{
      required:true,
    },
    endtime:{
      required:true,
    },
    
    arrivaldate:{
      required:true
    }
  },
  messages:{
    attendees:{
      required: "This field is required",
    },
    eventpurpose:{
      required: "Select any option"
    },
    startdate:{
      required: "This field is required"

    },
    enddate:{
      required: "This field is required"
    },
    location:{
      required: "This field is required"

    },
    layout:{
      required: "Select any option"
    },
    starttime:{
      required: "This field is required"
    },
    endtime:{
      required:"This field is required"
    },
    arrivaldate:{
      required: "This field is required"
    }
    
  }
})

// validation end
if(form.valid() == true){
  $(this).parent().parent().removeClass('activestep');
   $(this).parent().parent().next().addClass('activestep');
  $('.progress3 div').eq(ind).addClass('active-bar');
  $('.progress3 div').eq(ind).siblings('div').removeClass('active-bar');
  $("html, body").animate({ scrollTop: 0 }, "slow");

}

   
})




// previous btn fucntion

$('.previous-b').click(function(e){
  e.preventDefault();
  var prv = $(this).parent().parent().prev();
  var pindx = $('.meeting-section').index(prv);
  $(this).parent().parent().removeClass('activestep');
  $(this).parent().parent().prev().addClass('activestep');
  $('.progress3 div').eq(pindx).addClass('active-bar');
  $('.progress3 div').eq(pindx).siblings('div').removeClass('active-bar');
  $("html, body").animate({ scrollTop: 0 }, "slow");
  

})


// previous btn function end




$('#event-purpose').change(function(e){
  e.preventDefault();
 var selval = $("#event-purpose option:selected").val();
 if(selval == 'Other'){
   $('#custum-event').css('display', 'block');
   
 }else{
   $('#custum-event').css('display', 'none');
 }
})



$('#flex-date').on('click', function(){
  if($(this).is(':checked')){
    $('.custom-date-event').css('display', 'block');
    
  }else{
    $('.custom-date-event').css('display', 'none');

  }
})

$('#flex-location').on('click', function(){
  if($(this).is(':checked')){
    $('.custom-location-event').css('display', 'block');
    
  }else{
    $('.custom-location-event').css('display', 'none');

  }
})




var  increment = 0;
$('.increment').click(function(){
  var $button = $(this)
    var  $input = $button.parent('div').siblings('.input-group-n.2').find('input');
    var newval = parseInt($input.val())+1;
    $input.val(newval);
    increment += newval;
    
      
      
})
$('.decrement').click(function(){
 
  var $button = $(this)
  var $input = $button.parent('div').siblings('.input-group-n.2').find('input')
  var nowVal = parseInt($input.val())-1;
  if(nowVal <= 0){
    nowVal = 0;
  }
  $input.val(nowVal);
  increment += nowVal;
})


 

  














});
</script>
@endsection

  
  