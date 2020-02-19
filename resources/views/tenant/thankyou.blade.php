@extends('tenant.layouts.master')

@section('head')

@endsection
@section('content')

<div class="thank-page">
      <div class="thank-inner">
        <!-- banner-section -->
        <div class="banner-thank" style="background-image: url({{ asset('images/searcpage-img/peopleinboardroomredwall.jpeg') }});">
        <div class="b-overlay"></div>
          <div class="text-container">
            <p class="thank-text">
              Thank you! Your meeting request for Delhi, India has been
              successfully submitted
            </p>
          </div>
        </div>
        <!-- banner-section-end -->

        <!-- card section -->

        <div class="login-card-section">
          <div class="container">
            <div class="row">
              <div class="login-cards-sec">
                <div class="indi-card">
                  <div class="login card-pading">
                    <h4>
                      <i class="fa fa-thumbs-up" aria-hidden="true"></i>LOGIN
                      DETAILS
                    </h4>
                    <p>
                      You’ll receive an email with details to set up your
                      personal meetings dashboard.
                    </p>
                  </div>
                </div>
                <div class="indi-card">
                  <div class="login card-pading">
                    <h4>
                      <i class="fa fa-list" aria-hidden="true"></i>PROPOSALS
                    </h4>
                    <p>
                      You’ll receive an email with details to set up your
                      personal meetings dashboard.
                    </p>
                  </div>
                </div>
                <div class="indi-card">
                  <div class="login card-pading">
                    <h4><i class="fas fa-clock"></i>DECISION</h4>
                    <p>
                      You’ll receive an email with details to set up your
                      personal meetings dashboard.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- card section end -->

        <!-- let us hear section -->
        <div class="let-hear-section">
          <div class="container">
            <div class="row">
              <div class="let-us-inner">
                <h2>Let us hear form you directly</h2>
                <h4>
                  If you have any further question, you can contact the team
                  below
                </h4>
                <div class="let-us-card">
                  <i class="fa fa-mobile" aria-hidden="true"></i>
                  <h3 class="">Irland</h3>
                  <p class="phone-no">+353 (0) 1 254 5611</p>
                </div>

                <div class="let-us-card">
                  <i class="fa fa-mobile" aria-hidden="true"></i>
                  <h3 class="">UK</h3>
                  <p class="phone-no">+44 203 868 5860</p>
                </div>

                <div class="let-us-card">
                  <i class="fas fa-envelope-open-text"></i>
                  <h3 class="">Email</h3>
                  <p class="phone-no">enquiries@meetingsbooker.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- let us hear section end -->
      </div>
    </div>

@endsection