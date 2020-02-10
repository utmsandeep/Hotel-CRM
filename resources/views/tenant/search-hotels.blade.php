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
                                <input type="search" class="form-control2 px-2 py-2 w-100 m-0 mr-1 float-left border-gray-300 h-100" style="min-width: 300px;" placeholder="Location">
                            </div>
                        <div class="col-5 col-sm-6 col-lg-auto col-xl-auto pl-0 pl-lg-1 pr-0 pb-2 pb-lg-0 when top-btn">
                            <div class="dropdown float-left mr-1 h-100 w-100 collapse-when collapse2" style="z-index: 4;" id="datesDropdown">
                                <button class="btn  btn-sm mb-1 px-2 py-1 border-gray-300 dropdown-toggle h-100 w-100" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-calendar d-none d-sm-inline-block" data-resource-id="SearchDurationHeading"></i> When
                                </button>
                                <div class="dropdown-menu keep-open border border-gray-300 p-2" aria-labelledby="dropdownMenuButton" style="z-index: 3;min-width: 300px;">
                                    <form>

                                        <div class="row m-0 p-2 mb-2" style="z-index:4;">
                                            <div class="w-100" data-resource-set="MB_SearchPage">
                                                <select class="dropdown-submenu custom-select w-100 rounded-0" placeholder="Duration"  id="Duration" name="Duration">
                                                    <option value="-1" data-resource-id="SearchDurationFilterHeading">Duration</option>
                                                    <option class="unselected" value="0" data-resource-set="Durations" data-resource-id="Morning">Morning</option>
                                                    <option value="1" data-resource-set="Durations" data-resource-id="Afternoon">Afternoon</option>
                                                    <option value="2" data-resource-set="Durations" data-resource-id="Evening">Evening</option>
                                                    <option value="3" data-resource-set="Durations" data-resource-id="Hourly">Hourly</option>
                                                    <option value="4" data-resource-set="Durations" data-resource-id="FullDay">Full Day</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row m-0 p-2 mb-2">
                                            <div class="form-group form-label-group mb-0 w-100">
                                                <input type="text" data-resource-set="MB_SearchPage" class="form-control rounded-0 flatpickr-input" placeholder="Start Date" readonly="readonly" value="">
                                                <label for="startDate" data-resource-set="MB_GenericText" data-resource-id="StartDate">StartDate</label>
                                            </div>
                                        </div>
                                        <div class="row m-0 p-2 mb-2 ">
                                            <div class="form-label-group mb-0 w-100">
                                                <input type="text" class="form-control rounded-0 flatpickr-input" placeholder="End Date" readonly="readonly" id="EndDate" name="EndDate" value="">
                                                <label for="startDate" data-resource-set="MB_GenericText" data-resource-id="EndDate">EndDate</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="button" class="btn float-right GreenText p-2" aria-busy="false" data-resource-set="MB_GenericButtons" data-resource-id="apply">Apply</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-7 col-sm-6 col-lg-auto col-xl-auto pl-1 pr-0 pb-2 pb-lg-0 top-btn">
                            <div class="dropdown float-left mr-1 h-100 w-100 collapse-selection collapse2" style="z-index: 3;" id="peoplesDropdown">


                                    <button class="btn  btn-sm mb-1 px-2 py-1 border-gray-800 dropdown-toggle h-100 w-100" type="button" data-resource-set="MB_SearchPage" id="peoplesDropdownMenuButton" >
                                        <span id="peoplesMenuText">1 Attendee</span>
                                        <span id="bedroomsMenuText"> | 0 Bedrooms</span>
                                        <span style="position:absolute;bottom:0px;" id="notifyOpenPeoples" data-html="true" data-placement="bottom" data-toggle="popover" data-trigger="focus" title="" data-content="<p>Add attendee and bedroom details. <br>Pick Book Online or RFP. <span id=notifyPeoplesClose>×</span></p>
" data-original-title="Tip: Update Attendees"></span>
                                    </button>
                            </div>
                        </div>
                        <div class="col-5 col-sm-6 col-lg-auto col-xl-auto pl-0 pr-0 pb-sm-2 pb-lg-0 pl-lg-1 top-btn">
                            <div class="dropdown float-left mr-1 h-100 w-100 collapse-book collapse2" style="z-index: 3;" id="peoplesDropdown">


                                    <button class="btn  btn-sm mb-1 px-2 py-1 border-gray-300 dropdown-toggle h-100 w-100" type="button" data-resource-set="MB_SearchPage" id="bookingTypeDropdownMenuButton">
                                        <span id="bookingTypeMenuText">Book Online</span>
                                    </button>
                            </div>
                        </div>
                        <div class="col-7 col-sm-6 col-lg-auto col-xl-auto pl-1 pr-0 top-btn">
                            <div class="dropdown float-left mr-1 h-100 w-100 collapse-more-filter collapse2" style="z-index: 3;" id="moreFiltersDropdown" >
                                <button class="btn  btn-sm mb-1 px-2 py-1 border-gray-300 dropdown-toggle h-100 w-100" type="button" >
                                    More Filters
                                </button>
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
            </div>
            <div class="row m-0 mt-3">
                <div class="col-12 text-center">
                    <span class="load-m"><i class="fa fa-plus" aria-hidden="true"></i>LOAD MORE</span>
                </div>
            </div>
        </div>
        <div class="col-md-4 map-side-lg pr-lg-0 px-0">
            <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448181.16374062485!2d76.81306192555238!3d28.64727993580379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1581336161239!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>
     

@endsection

@section('script')
<script src="{{ asset('js/tenant/slick/slick.js') }}"></script>
@endsection