@extends('tenant.admin.layout.master')
@section('title', 'Lead')
@section('parentPageTitle', 'Lead')
@section('create-new')

@stop

@section('page-style')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    h3.name-h {
    font-size: 21px;
    font-weight: 400;
}
h3.name-h span {
    font-size: 12px;
    padding-left: 10px;
}
.details-inner table tr td span {
    font-size: 14px;
}
tr.tabdiv td.al-rgt {
    color: #777;
    text-align: right;
}
tr.tabdiv td {
    padding: 7px 35px;
}
h4.hide-btn {
    margin: 0;
}
.hide-details {
    margin-top: 35px;
}
h4.hide-btn span {
    color: #458ac5;
    font-size: 12px;
    text-transform: uppercase;
    padding-right: 10px;
}
.to-be-collapse {
    display: none;
}
.rot{
    transform: rotateX(180deg);
}
</style>

@stop

@section('content')
 <div class="lead-page">
      <div class="lead-container">
        <div class="lead-row">
          <!-- name and details -->
          <div class="name-and-detail">
            <div class="name-section">
              <h3 class="name-h">
                Mr. Christopher Maclead (Sample)<span
                  >- Rangoni Of Florence</span
                >
              </h3>
            </div>
            <div class="details-section">
              <div class="details-inner">
                <table>
                  <tr class="tabdiv">
                    <td class="al-rgt"><span>Lead Owner</span></td>
                    <td><span>William</span></td>
                  </tr>
                  <tr class="tabdiv">
                    <td class="al-rgt"><span>Email</span></td>
                    <td><span>William_satter@gmail.com</span></td>
                  </tr>
                  <tr class="tabdiv">
                    <td class="al-rgt"><span>Lead Owner</span></td>
                    <td><span>William</span></td>
                  </tr>
                  <tr class="tabdiv">
                    <td class="al-rgt"><span>Phone</span></td>
                    <td><span>5555555555</span></td>
                  </tr>
                  <tr class="tabdiv">
                    <td class="al-rgt"><span>Mobile</span></td>
                    <td><span>5555555555</span></td>
                  </tr>
                  <tr class="tabdiv">
                    <td class="al-rgt"><span>Lead Status</span></td>
                    <td><span>Lost Lead</span></td>
                  </tr>
                </table>
              </div>

              <div class="best-time"></div>
            </div>

            <div class="hide-details">
              <div class="hide-details-inner">
                <h4 class="hide-btn">
                  <span>Show details</span
                  ><span><i class="fa fa-angle-down colla-pse"></i></span>
                </h4>
                <div class="to-be-collapse">
                  to be show on hide
                </div>
              </div>
            </div>

            <div class="notes-section">
              <div class="notes-section-inner">
                <div class="notes-head">
                  <h5 class="notes-h">Notes</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- name and details -->
    </div>

        
@stop

@section('page-script')
<script>
    $( document ).ready(function() {
    $('.hide-btn').click(function(){
        $(this).siblings('div').toggle();
        $(this).children('span').find('.colla-pse').toggleClass("rot")
    })
});
</script>


@stop