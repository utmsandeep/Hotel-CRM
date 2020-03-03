@extends('tenant.admin.layout.master')
@section('title', 'My Profile')
@section('page-style')
<style>
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
.upper-section-profile {
    background: #f5ccd994;
    padding: 20px;
}
</style>
@endsection
@section('content')
<div class="row clearfix">
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

            <h4 class="m-t-10">WrapTheme</h4>
            <h5 class="role">Security Lead</h5>
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
                  <p>example@gmail.com</p>
                </div>
              </div>
            </div>

            <div class="profile-cards">
              <div class="card">
                <div class="body">
                  <h5 class="card-head">Mobile No.</h5>
                  <p>9876543210</p>
                </div>
              </div>
            </div>

            <div class="profile-cards">
              <div class="card">
                <div class="body">
                  <h5 class="card-head">Mobile No.</h5>
                  <p>9876543210</p>
                </div>
              </div>
            </div>

            <div class="profile-cards">
              <div class="card">
                <div class="body">
                  <h5 class="card-head">Mobile No.</h5>
                  <p>9876543210</p>
                </div>
              </div>
            </div>
            <div class="profile-cards">
              <div class="card">
                <div class="body">
                  <h5 class="card-head">Mobile No.</h5>
                  <p>9876543210</p>
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

@stop