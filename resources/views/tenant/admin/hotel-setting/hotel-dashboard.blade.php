@extends('tenant.admin.layout.master')
@section('title', 'Dashboard')
@section('page-style')
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')}}"/>
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/charts-c3/plugin.css')}}" />
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/morrisjs/morris.min.css')}}" />
<link
      rel="stylesheet"
      type="text/css"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    />
<style>
    * {
  margin: 0;
  padding: 0;
}

.container {
  margin-top: 80px;
}

th {
  height: 30px;
  text-align: center;
  font-weight: 700;
}

td {
  height: 100px;
}

.today {
  background-color: gray;
}

th:nth-of-type(7),
td:nth-of-type(7) {
  font-weight: bold;
}

th:nth-of-type(1),
td:nth-of-type(1) {
  font-weight: bold;
}
.calender-container {
    width: 70%;
    margin: auto;
}
.calender-header {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    text-align: center;
}
.calender-header {
    background-color: #428bca;
    color: #fff;
    position: relative;
}
.calender-header .prev-month {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translate(0, -50%);
    font-size: 20px;
}
.calender-header .next-month{
    position:absolute;
    right:10px;
    top:50%;
    transform: translate(0, -50%);
    font-size:20px;
}
.month-year.text-center {
    width: 100%;
}
.calender-container .table {
    border-top: 4px solid #2066A3;
}
.calender-container table tr:nth-of-type(1) {
    background: #efefef;
    /* padding: 4px 0; */
}
.calender-container table tr:nth-of-type(1) th {
    padding: 12px 8px;
    font-weight: 900;
}
.calender-container .table tr td {
    border: 1px solid #e9e9e9;
    
    vertical-align: middle;
    text-align: center;
    height: 70px;
}
.today {
    background: unset;
    color: #428bca;
    font-weight: bold;
}
.calender-header {
    border-radius: 8px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.event-popup {
    width: 70.2%;
    background: #fff;
    margin: auto;
    position: absolute;
    top: 0;
    left: 50%;
    transform: translate(-50%, 10px);
    z-index: 9;
}
.event-popup-container {
    padding: 15px;
}
span.closing-tab {
    float: right;
    color: #000;
    font-size: 12px;
    font-weight: 900;
}
.popup-content div {
    margin: 47px 0;
}
.event-details {
    color: red;
}
.booking-details {
    color: green;
}
.proposal-details {
    color: blue;
}
.query-details{
  color:yellow;
}
.event-popup {
    display: none;
}
.red-box{
  width: 7px;
  height: 7px;
  background-color: red;
  
}
.blue-box{
  width: 7px;
  height: 7px;
  background-color: blue;
  
}
.pink-box{
  width: 7px;
  height: 7px;
  background-color: pink;
  
}
.something div {
    margin: 7px 0;
    /* display: inherit; */
    border-radius: 50%;
    width: 10px;
    height: 10px;
}
</style>
@stop
@section('content')
<div class="row clearfix" style= "position:relative;">

    <div class="calender-container">
         <div class="container2">
      <div class="calender-header">
        <i class="prev-month fa fa-chevron-left fa-3x"></i>
        <i class="next-month fa fa-chevron-right fa-3x"></i>
        <br />
        <div class="month-year text-center">
          
        </div>
      </div>
      <table class="table table-bordered">
        <tr>
          <th>S</th>
          <th>M</th>
          <th>T</th>
          <th>W</th>
          <th>T</th>
          <th>F</th>
          <th>S</th>
        </tr>
      </table>
    </div>
    </div>



    <div class="event-popup">
    <div class="event-popup-container">
        <span class="closing-tab">X</span>
            
                    <div class="popup-content">
                        <div class="event-details">Lorem ipsum dummy text</div>
                        <div class="booking-details">Lorem ipsum dummy text</div>
                        <div class="proposal-details">Lorem ipsum dummy text</div>
                        <div class="query-details">Lorem ipsum dummy text</div>
                        <div class="booking-details">Lorem ipsum dummy text</div>
                        <div class="lead-details">Lorem ipsum dummy text</div>

                    </div>
            
        
    </div>
</div>

</div>

@stop
@section('page-script')
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{asset('tenant-admin/bundles/jvectormap.bundle.js')}}"></script>
<script src="{{asset('tenant-admin/bundles/sparkline.bundle.js')}}"></script>
<script src="{{asset('tenant-admin/bundles/c3.bundle.js')}}"></script>
<script src="{{asset('tenant-admin/js/pages/index.js')}}"></script>
<script>
   $( document ).ready(function() {
       var CURRENT_DATE = new Date();
var d = new Date();
var events = {
  "2": {
    "red-box": {
      "urls": ["http://amit-hotel-version-2.hoteleventcrm.buzz"],
      "title": "Queries"
    }
  },
  "7": {
    "blue-box": {
      "urls": ["http://amit-hotel-version-2.hoteleventcrm.buzz"],
      "title": "Leads"
    },
    "red-box": {
      "urls": ["http://amit-hotel-version-2.hoteleventcrm.buzz"],
      "title": "Queries"
    }
  },
  "13": {
    "pink-box": {
      "urls": ["http://amit-hotel-version-2.hoteleventcrm.buzz"],
      "title": "Proposals"
    },
    "red-box": {
      "urls": ["http://amit-hotel-version-2.hoteleventcrm.buzz"],
      "title": "Queries"
    },
    "blue-box": {
      "urls": ["http://amit-hotel-version-2.hoteleventcrm.buzz" , "http://amit-hotel-version-2.hoteleventcrm.buzz"],
      "title": "Leads"
    }
  }
};
var content = "January February March April May June July August September October November December".split(
  " "
);
var weekDayName = "SUN MON TUES WED THURS FRI".split(" ");
var daysOfMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

// Returns the day of week which month starts (eg 0 for Sunday, 1 for Monday, etc.)
function getCalendarStart(dayOfWeek, currentDate) {
  var date = currentDate - 1;
  var startOffset = (date % 7) - dayOfWeek;
  if (startOffset > 0) {
    startOffset -= 7;
  }
  return Math.abs(startOffset);
}

// Render Calendar
function renderCalendar(startDay, totalDays, currentDate) {
  var currentRow = 1;
  var currentDay = startDay;
  var $table = $("table");
  var $week = getCalendarRow();
  var $day;
  var i = 1;

  for (; i <= totalDays; i++) {
    $day = $week.find("td").eq(currentDay);

    $day.text(i);
    if(events.hasOwnProperty(i)){
      for( var event in events[i]){
        $day.append("<div class='"+event+"'></div>");
      }
      $day.addClass('something');
    }
    
    //   custom code
    $day.attr("id", "date" + i);
    // $day.addClass(i);
    //   custom code
    if (i === currentDate) {
      $day.addClass("today");
    }

    // +1 next day until Saturday (6), then reset to Sunday (0)
    currentDay = ++currentDay % 7;
    

    // Generate new row when day is Saturday, but only if there are
    // additional days to render
    if (currentDay === 0 && i + 1 <= totalDays) {
      $week = getCalendarRow();
      currentRow++;
    }
  }
}

// Clear generated calendar
function clearCalendar() {
  var $trs = $("tr").not(":eq(0)");
  $trs.remove();
  $(".month-year").empty();
}

// Generates table row used when rendering Calendar
function getCalendarRow() {
  var $table = $("table");
  var $tr = $("<tr/>");
  for (var i = 0, len = 7; i < len; i++) {
    $tr.append($("<td/>"));
  }
  $table.append($tr);
  return $tr;
}

function myCalendar() {
  var month = d.getUTCMonth();
  var day = d.getUTCDay();
  var year = d.getUTCFullYear();
  var date = d.getUTCDate();
  var totalDaysOfMonth = daysOfMonth[month];
  var counter = 1;

  var $h3 = $("<h3>");

  $h3.text(content[month] + " " + year);
  $h3.appendTo(".month-year");
  // custom code
  var months = content[month];
  var currentyear = year;

  var table = $(".table");
  table.attr("id", months + currentyear);

  // custom code

  var dateToHighlight = 0;

  // Determine if Month && Year are current for Date Highlight
  if (
    CURRENT_DATE.getUTCMonth() === month &&
    CURRENT_DATE.getUTCFullYear() === year
  ) {
    dateToHighlight = date;
  }

  //Getting February Days Including The Leap Year
  if (month === 1) {
    if ((year % 100 !== 0 && year % 4 === 0) || year % 400 === 0) {
      totalDaysOfMonth = 29;
    }
  }

  // Get Start Day
  renderCalendar(
    getCalendarStart(day, date),
    totalDaysOfMonth,
    dateToHighlight
  );
}

function navigationHandler(dir) {
  d.setUTCMonth(d.getUTCMonth() + dir);
  clearCalendar();
  myCalendar();
}

$(document).ready(function() {
  // Bind Events
  $(".prev-month").click(function() {
    navigationHandler(-1);
  });
  $(".next-month").click(function() {
    navigationHandler(1);
  });
  // Generate Calendar
  myCalendar();
});
 
$('.table tr').each(function(){
  console.log(this)
  
  // $(this).find('td').each(function(){
  //   console.log(this);
  //     //do your stuff, you can use $(this) to get current cell
  // })
})

});




// $('.container2').on('ready', 'table#March2020 #date1', function(){
//   var eventsymbol = `<div class="event-symbol">
//                        <span class="event-dot query"></span>
//                        <span class="event-dot proposal"></span>
//                        <span class="event-dot booking"></span>
//                        <span class="event-dot lead"></span>
//                        <span class="event-dot convert"></span>
//                     </div>`

//     $(this).append(eventsymbol);   
//     console.log('s')             
// })
// var table = document.getElementByClassName("table");
// for (var i = 0, cell; cell = table.cells[i]; i++) {
//   console.log(cell)
//      //iterate through cells
//      //cells would be accessed using the "cell" variable assigned in the for loop
//}

jQuery(document).on('click' , '.something' , function(){
 $(this).parents('.calender-container').siblings('.event-popup').css('display', 'block');
});

</script>
@stop