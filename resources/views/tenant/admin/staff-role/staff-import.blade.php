@extends('tenant.admin.layout.master')
@section('title', 'Import Staff')
@section('parentPageTitle', 'Staff')
@section('page-style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://amit-hotel-version-2.hoteleventcrm.buzz/tenant-admin/plugins/dropify/css/dropify.min.css"/>
<style>
  .col-xl-4.col-lg-12.col-md-12 .mcard_3 {
    
    box-shadow: 0 0 4px #00000012;
    
}
.upper-section-profile {
   
    padding: 20px;
    background: #e6e6e694;
    
}
    .profile-desc {
    width: 100%;
}
h5.profile-h {
    font-weight: bold;
    color: #999;
}
.profile-desc-inner small {
    color: #999;
    font-size: 14px;
}
.profile-right-section {
    width: 100%;
}
.profile-right-inner {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}
.profile-cards {
    flex-basis: 50%;
   
    padding: 10px;
}
.profile-cards .card {
    border: 1px solid #f2f2f2;
   
}
h5.card-head {
    font-size: 16px;
    color: #e47297;
    font-weight: bold;
}
.profile-cards p {
    color: #999;
}
ul.social-links.list-unstyled li a {
    color: #e47297;
}
.upper-section-profile .editbtn {
    border: 1px solid;
    padding: 6px 0px;
    margin-top: 10px;
    display: block;
    width: 50%;
    margin: auto;
    border-radius: 5px;
}
.upper-section-profile .editbtn i {
    padding-right: 8px;
}
.profile-edit-section{
  display:none;
}
.form-edit label {
    display: block;
   color: #e47297;
}
.dp-label{
  display: block;
   color: #e47297;

}
h5.edit-profile-head {
    font-weight: bold;
    border-bottom: 2px solid #f2f2f2;
    padding-bottom: 7px;
}
.form-edit {
    margin: 28px 0;
    width: 50%;
    float: left;
    padding: 0 15px;
}
.edit-form-container {
    overflow: auto;
}
.form-edit input {
    height: 40px;
    border-radius: 5px;
    width: 100%;
    box-shadow: none;
    border: 1px solid #ddd;
    padding: 3px 7px;
}
span.backto-profile {
    float: right;
   cursor: pointer;
    font-size: 13px;
    color: #0c7ce6;
}
.dropify-wrapper {
    width: 21%;
}
.submit-edit:hover {
    background: #e47297;
    color: #fff;
}
.submit-edit {
    background: unset;
    border: 1px solid #e47297;
    color: #e47297;
    padding: 6px 25px;
    border-radius: 5px;
    float: right;
    margin-right: 15px;
}
@media screen and (max-width:414px){
  .profile-cards {
    flex-basis: 100%;
  }
}
@media screen and (max-width:667px){
  .form-edit{
    width:100%;
  }
}
</style>

@stop
@section('content')
<!-- Input -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
       
        <form method="post" enctype="multipart/form-data" action="{{ route('tenant.admin.staff.convert') }}">
            @csrf
            <div class="body">
                    <p>Import Staff</p>
                    <input type="file" name="content" class="dropify">
                </div>
           <div class="form-actions">
                <div class="card-body">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop
@section('page-script')
<script src="http://amit-hotel-version-2.hoteleventcrm.buzz/tenant-admin/plugins/dropify/js/dropify.min.js"></script>
<script>
  $( document ).ready(function(){
   $('.editbtn').click(function(){
    $(this).parents('.profile-section').fadeOut(1000);
    $(this).parents('.profile-section').siblings('.profile-edit-section').fadeIn(1000);
     return false

   })

   $('.dropify').dropify();


   $('.backto-profile').click(function(){
     $(this).parents('.profile-edit-section').fadeOut(1000);
     $(this).parents('.profile-edit-section').siblings('.profile-section').fadeIn(1000);
   })


  })
</script>
@stop
@section('page-script')

<script src="{{asset('tenant-admin/plugins/momentjs/moment.js')}}"></script>
<script src="{{asset('tenant-admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
<script src="{{asset('tenant-admin/js/pages/forms/basic-form-elements.js')}}"></script>
@stop