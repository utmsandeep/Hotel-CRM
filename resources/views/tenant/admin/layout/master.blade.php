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
          .search-hotel-list-left, .search-hotel-list-right {
                width: 50%;
                float: left;
            }
            .search-hotel-list {
                  display: flex;
                  flex-direction: row;
                  flex-wrap: wrap;
              }
              ul.search-hotel-menu {
                  margin: 0;
                  list-style-type: none;
                  padding: 6px 14px;
              }
              ul.search-hotel-menu li ul {
                  list-style-type: none;
                  display: none;
                  padding: 5px 14px;
                  box-shadow: 0 0 4px #00000012;
              }
              .search-hotel-list {
                  background: #fff;
                  box-shadow: 0 0 4px #00000012;
                  margin-bottom: 25px;
                  align-items: center;
              }
              .search-hotel-list-right p {
                    margin: 0;
                }   
              .search-hotel-list ul.ml-menu {
                  position: absolute;
                  /* top: 100%; */
                  background: #fff;
                  left: 0;
                  z-index: 9;
              } 
              ul.search-hotel-menu li {
                  position: relative;
                  padding: 4px 0;
                
              }
              .search-hotel-list-right p {
                    color: #999;
                    padding: 6px 14px;
                }
                .search-hotel-list-right p span {
                      color: #000;
                      font-weight: bold;
                  }
                .search-hotel-list-right {
                    text-align: right;
                }
                ul.search-hotel-menu li.active a {
    
                    color: #000000bf;
                }
                @media screen and (max-width:667px){
                  .search-hotel-list-left, .search-hotel-list-right {
                      width: 100%;
                      float: unset;
                  }
                  .search-hotel-list-right {
                      text-align: left;
                  }
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

      <!-- hotel search dropdawn start -->
      <div class = "col-lg-12 col-md-12">
        <div class="search-hotel-list">
          <div class="search-hotel-list-left">
            <ul class="search-hotel-menu">
              @php
            $utm_hotels = adminAsignedHotels();
           @endphp
            <li class="">
                <a href="#App" class="menu-toggle"> <i class="zmdi zmdi-home"></i> <span>Switch Hotel</span></a>
                <ul class="ml-menu">
                    @foreach($utm_hotels as  $utm_hotel)
                    <li class=@if(isset($hotel_code) && $hotel_code == $utm_hotel->Hotel->hotel_code) active @endif><a href="{{ route('tenant.admin.hotel.dashboard' , ['hotel_code'=>$utm_hotel->Hotel->hotel_code]) }}"> {{ $utm_hotel->Hotel->name }} </a></li>
                    @endforeach
                </ul>
            </li>

            </ul>
          </div>
          <div class="search-hotel-list-right">
            <p class="switched-hotel">Currently you are in <span id="Switched-hotel-name">Demo Hotel</span></p>
          </div>
        </div>
      </div>

      <!-- hotel search dropdawn end here -->


      
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
        <script>
          $( document ).ready(function(){
          var activehotel =  $('.search-hotel-menu').find('li.active').text();
          if(activehotel == ''){
            $('.search-hotel-list-right').children('p').css('display', 'none')
          }
          $('.search-hotel-list-right').children('p').children('#Switched-hotel-name').text(activehotel);
          
         
          
          })
        </script>
        @stack('after-scripts')
        @if (trim($__env->yieldContent('page-script')))
            @yield('page-script')
		@endif
    </body>
</html>