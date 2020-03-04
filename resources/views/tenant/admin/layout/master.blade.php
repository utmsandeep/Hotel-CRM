<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon"> <!-- Favicon-->
        <title>{{ config('app.name') }} - @yield('title')</title>
        <meta name="description" content="@yield('meta_description', config('app.name'))">
        <meta name="author" content="@yield('meta_author', config('app.name'))">
        @yield('meta')
        {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
        @stack('before-styles')        
        <link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap/css/bootstrap.min.css')}}">
        @if (trim($__env->yieldContent('page-style')))
            @yield('page-style')
        @endif
        <!-- Custom Css -->
        <link rel="stylesheet" href="{{asset('tenant-admin/css/style.min.css')}}">
        <style>
            .hotel-show-cont-in-h {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}
.hotel-show-card-h {
    flex-basis: 20%;
}
.hotel-show-card-h a {
    display: block;
    padding: 0 12px;
}
.below-thumb-details h5 {
    font-size: 12px;
    margin-bottom: 2px;
    font-weight: bold;
    color: #999;
}
        </style>
        @stack('after-styles')
    </head>
    <?php 
        $setting = !empty($_GET['theme']) ? $_GET['theme'] : '';
        $theme = "theme-blush";
        $menu = "";
        if ($setting == 'p') {
            $theme = "theme-purple";
        } else if ($setting == 'b') {
            $theme = "theme-blue";
        } else if ($setting == 'g') {
            $theme = "theme-green";
        } else if ($setting == 'o') {
            $theme = "theme-orange";
        } else if ($setting == 'bl') {
            $theme = "theme-cyan";
        } else {
            $theme = "theme-blush";
        }

        if (Request::segment(2) === 'rtl' ){
            $theme .= " rtl";
        }
    ?>
    <body class="<?= $theme ?>">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ asset('tenant-admin/images/logo.svg') }}" width="48" height="48" alt="Aero"></div>
                <p>Please wait...</p>        
            </div>
        </div>
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
       <!--  @include('tenant.admin.layout.navbarright') -->
        @include('tenant.admin.layout.sidebar')
        <!-- @include('tenant.admin.layout.rightsidebar') -->
        <section class="content">
  <div class="block-header">
    <div class="row">
      <!-- hotel list section -->
<div class="col-lg-12 col-md-12">
  <div class="inner-hotel-show-h">
    <div class="hotel-show-cont-h">
      <div class="card">
        <div class="body">
          <h5 class="search-hotel-head-h">Switch Hotel</h5>
          <div class="hotel-show-cont-in-h">
            <div class="hotel-show-card-h">
              <a class="thumb-link" href="#">
              <div class="thumb-image">
                <img src="{{ asset('images/searcpage-img/lemeridiennewdelhi-18.jpg') }}"></img>
              </div>
              <div class="below-thumb-details">
                <h5 class="hotel-name">The Claridges,</h5>
                <h5 class="hotel-location">New Delhi</h5>
              </div>
            </a>
            </div>
            <div class="hotel-show-card-h">
              <a class="thumb-link" href="#">
                <div class="thumb-image">
                  <img src="{{ asset('images/searcpage-img/nparbitrationin-3.jpg') }}"></img>
                </div>
                <div class="below-thumb-details">
                  <h5 class="hotel-name">The Taj Hotel,</h5>
                  <h5 class="hotel-location">New Delhi</h5>
                </div>
              </a>
            </div>
            <div class="hotel-show-card-h">
              <a class="thumb-link" href="#">
                <div class="thumb-image">
                  <img src="{{ asset('images/searcpage-img/shangrilahotelnewdelhi-6.jpg') }}"></img>
                </div>
                <div class="below-thumb-details">
                  <h5 class="hotel-name">La Maridian,</h5>
                  <h5 class="hotel-location">New Delhi</h5>
                </div>
              </a>
            </div>
            <div class="hotel-show-card-h">
              <a class="thumb-link" href="#">
                <div class="thumb-image">
                  <img src="{{ asset('images/searcpage-img/theimperialnewdelhi-0.jpg') }}"></img>
                </div>
                <div class="below-thumb-details">
                  <h5 class="hotel-name">The Imperial,</h5>
                  <h5 class="hotel-location">New Delhi</h5>
                </div>
              </a>
            </div>
            <div class="hotel-show-card-h">
              <a class="thumb-link" href="#">
                <div class="thumb-image">
                  <img src="{{ asset('images/searcpage-img/Vivanta-by-Taj---Ambassador-0.png') }}"></img>
                </div>
                <div class="below-thumb-details">
                  <h5 class="hotel-name">Regent Continental Hotel,</h5>
                  <h5 class="hotel-location">New Delhi</h5>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- hotel list section end -->
      <div class="col-lg-7 col-md-6 col-sm-12">
        <h2>@yield('title')</h2>
        <ul class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('dashboard.index')}}"
              ><i class="zmdi zmdi-home"></i> Hotel
            </a>
          </li>
          @if (trim($__env->yieldContent('parentPageTitle')))
          <li class="breadcrumb-item">@yield('parentPageTitle')</li>
          @endif @if (trim($__env->yieldContent('title')))
          <li class="breadcrumb-item active">@yield('title')</li>
          @endif
        </ul>
        <button class="btn btn-primary btn-icon mobile_menu" type="button">
          <i class="zmdi zmdi-sort-amount-desc"></i>
        </button>
      </div>
      <div class="col-lg-5 col-md-6 col-sm-12">
        <button
          class="btn btn-primary btn-icon float-right right_icon_toggle_btn"
          type="button"
        >
          <i class="zmdi zmdi-arrow-right"></i>
        </button>
        @yield('create-new')
      </div>
      
    </div>
    @if(session()->get('success'))
    <div class="alert alert-success" role="alert">
      <strong>{{ session()->get('success') }}</strong>
      <button
        type="button"
        class="close"
        data-dismiss="alert"
        aria-label="Close"
      >
        <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
      </button>
    </div>
    @endif @if ($errors->any())
    <div class="alert alert-danger" role="alert">
      @foreach ($errors->all() as $error)
      <strong>{{ $error }}</strong><br />
      @endforeach

      <button
        type="button"
        class="close"
        data-dismiss="alert"
        aria-label="Close"
      >
        <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
      </button>
    </div>

    @endif
  </div>
  <div class="container-fluid">
    @yield('content')
  </div>
</section>

        @yield('modal')
        <!-- Scripts -->
        @stack('before-scripts')
        <!-- <script type="text/javascript" src="{{ asset('js/app.js') }}"></script> -->
        <script src="{{ asset('tenant-admin/bundles/libscripts.bundle.js') }}"></script>    
        <script src="{{ asset('tenant-admin/bundles/vendorscripts.bundle.js') }}"></script>

        <script src="{{ asset('tenant-admin/bundles/mainscripts.bundle.js') }}"></script>
        @stack('after-scripts')
        @if (trim($__env->yieldContent('page-script')))
            @yield('page-script')
		@endif
    </body>
</html>