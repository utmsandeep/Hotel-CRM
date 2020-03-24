@extends('tenant.admin.layout.master')
@section('title', 'My Profile')
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
@endsection
@section('content')
<div class="row clearfix profile-section">
    <!-- left section start -->
  <div class="col-xl-4 col-lg-12 col-md-12">
    <div class="card mcard_3">
        <div class="upper-section-profile">
             <a href="javascript:void(0);"
                  ><img
                     src="{{asset('tenant-admin/images/profile_av.jpg')}}"
                     class="rounded-circle"
                    alt="profile-image"
             /></a>

            <h4 class="m-t-10">{{ $profile->firstname }}</h4>
            <h5 class="role">{{ $profile->adminRole->name }}</h5>
            <a href="#" id="edit-btn" class="editbtn"><i class="fa fa-pencil" aria-hidden="true"></i>Edit Profile</a>
         </div>
      <div class="body">
         
        <div class="row">
          <div class="col-12 mb-4">
            <ul class="social-links list-unstyled">
              <li>
                <a
                  href="https://www.facebook.com/thememakkerteam"
                  title="facebook"
                  ><i class="zmdi zmdi-facebook-box"></i
                ></a>
              </li>
              <li>
                <a href="https://twitter.com/thememakker" title="twitter"
                  ><i class="zmdi zmdi-twitter-box"></i
                ></a>
              </li>
              <li>
                <a
                  href="https://www.instagram.com/thememakker/"
                  title="instagram"
                  ><i class="zmdi zmdi-instagram"></i
                ></a>
              </li>
            </ul>
            <!-- <a
              href="https://themeforest.net/user/wrraptheme/portfolio"
              class="btn btn-danger"
              >Our Portfolio</a
            > -->
            <!-- <a href="https://thememakker.com/" class="btn btn-success"
              >More Template</a
            > -->
          </div>
          <div class="profile-desc">
            <h5 class="profile-h">Profile</h5>
            <div class="profile-desc-inner">
              <small>Experience</small>
              <h5>6+ Year</h5>
            </div>
            <div class="profile-desc-inner">
              <small>Hourly Rate</small>
              <h5>18$</h5>
            </div>
            <div class="profile-desc-inner">
              <small>Team</small>
              <h5>25+</h5>
            </div>
            <div class="profile-desc-inner">
              <small>Tasks</small>
              <h5>25+</h5>
            </div>
            <div class="profile-desc-inner">
              <small>File</small>
              <h5>25+</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="body">
        <small class="text-muted">Reviews: </small>
        <p>
          <i class="text-warning zmdi zmdi-star"></i>
          <i class="text-warning zmdi zmdi-star"></i>
          <i class="text-warning zmdi zmdi-star"></i>
          <i class="text-warning zmdi zmdi-star"></i>
          <i class="text-warning zmdi zmdi-star-half"></i>
        </p>
        <hr />
        <small class="text-muted">Email address: </small>
        <p>wraptheme@gmail.com</p>
        <hr />
        <span
          >We offer development services in Angular, Laravel, WordPress, React
          and many other platforms.</span
        >
        <hr />
        <ul class="list-unstyled">
          <li>
            <div>Angular</div>
            <div class="progress m-b-20">
              <div
                class="progress-bar l-blush"
                role="progressbar"
                aria-valuenow="89"
                aria-valuemin="0"
                aria-valuemax="100"
                style="width: 89%"
              >
                <span class="sr-only">56% Complete</span>
              </div>
            </div>
          </li>
          <li>
            <div>Laravel</div>
            <div class="progress m-b-20">
              <div
                class="progress-bar l-purple "
                role="progressbar"
                aria-valuenow="91"
                aria-valuemin="0"
                aria-valuemax="100"
                style="width: 91%"
              >
                <span class="sr-only">87% Complete</span>
              </div>
            </div>
          </li>
          <li>
            <div>Photoshop</div>
            <div class="progress m-b-20">
              <div
                class="progress-bar l-blue "
                role="progressbar"
                aria-valuenow="72"
                aria-valuemin="0"
                aria-valuemax="100"
                style="width: 72%"
              >
                <span class="sr-only">62% Complete</span>
              </div>
            </div>
          </li>
          <li>
            <div>Wordpress</div>
            <div class="progress m-b-20">
              <div
                class="progress-bar l-green "
                role="progressbar"
                aria-valuenow="63"
                aria-valuemin="0"
                aria-valuemax="100"
                style="width: 63%"
              >
                <span class="sr-only">87% Complete</span>
              </div>
            </div>
          </li>
          <li>
            <div>FrontEnd</div>
            <div class="progress m-b-20">
              <div
                class="progress-bar l-amber"
                role="progressbar"
                aria-valuenow="78"
                aria-valuemin="0"
                aria-valuemax="100"
                style="width: 78%"
              >
                <span class="sr-only">32% Complete</span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- left section end here -->
  <!-- right section -->
 <div class="col-xl-8 col-lg-12 col-md-12">
  <div class="row clearfix">
    <div class="profile-right-section">
      <div class="card">
        <div class="body">
          <div class="profile-right-inner">
            <div class="profile-cards">
              <div class="card">
                <div class="body">
                  <h5 class="card-head">Email</h5>
                  <p>{{ $profile->email }}</p>
                </div>
              </div>
            </div>

            <div class="profile-cards">
              <div class="card">
                <div class="body">
                  <h5 class="card-head">Primary Mobile No.</h5>
                  <p>{{ $profile->primary_mobile }}</p>
                </div>
              </div>
            </div>

            <div class="profile-cards">
              <div class="card">
                <div class="body">
                  <h5 class="card-head">Secondary Mobile No.</h5>
                  <p>{{ $profile->secondary_mobile }}</p>
                </div>
              </div>
            </div>

            <div class="profile-cards">
              <div class="card">
                <div class="body">
                  <h5 class="card-head">Assigned Hotel</h5>
                  <p>Amit Hotel</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



  <!-- right section -->
</div>



<!-- edit section start here -->
<div class="row clearfix profile-edit-section">
  <div class="edit-section-inner">
    <div class="card">
      <div class="body">
        <h5 class="edit-profile-head">
          Edit your profile
          <span class="backto-profile"><a>Back to your profile</a></span>
        </h5>
        <div class="edit-form-container">
          <form>
            <!-- profile picture edit -->

           <label class="dp-label">Profile picture</label>
            <input type="file" class="dropify" name="display-picture" />
        






            <!-- profile picture edit end here -->
            <div class="form-edit f_name">
              <label>First Name</label>
              <input type="text" name="Firstname" id="Firstname" />
            </div>

            <div class="form-edit l_name">
              <label>Last Name</label>
              <input type="text" name="Lastname" id="Lastname" />
            </div>

            <div class="form-edit pswd">
              <label>Password</label>
              <input type="text" name="Password" id="Password" />
            </div>

            <div class="form-edit pswd">
              <label>Confirm Password</label>
              <input type="text" name="confirm_password" id="confirm_password" />
            </div>

            <div class="form-edit email">
              <label>Email</label>
              <input type="email" name="email" id="email" />
            </div>

            <div class="form-edit phone_no.">
              <label>Phone No</label>
              <input type="text" name="phone" id="phone" />
            </div>

            <div class="form-edit role">
              <label>Role</label>
              <input type="text" name="role" id="role" />
            </div>

            <button type="submit" class="submit-edit" id="submit-edit">Submit</button>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- edit section ends here -->

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
