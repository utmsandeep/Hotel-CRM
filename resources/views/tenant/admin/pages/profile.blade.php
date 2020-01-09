@extends('tenant.admin.layout.master')
@section('title', 'User Profile')
@section('parentPageTitle', 'Pages')
@section('page-style')
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/light-gallery/css/lightgallery.css')}}">
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/fullcalendar/fullcalendar.min.css')}}">
@stop
@section('content')
<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="card mcard_3">
            <div class="body">
                <a href="profile.html"><img src="{{asset('tenant-admin/images/profile_av.jpg')}}" class="rounded-circle shadow " alt="profile-image"></a>
                <h4 class="m-t-10">Michael Dorsey</h4>                            
                <div class="row">
                    <div class="col-12">
                        <ul class="social-links list-unstyled">
                            <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                            <li><a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                            <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                        </ul>
                        <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                    </div>
                    <div class="col-4">                                    
                        <small>Following</small>
                        <h5>852</h5>
                    </div>
                    <div class="col-4">                                    
                        <small>Followers</small>
                        <h5>13k</h5>
                    </div>
                    <div class="col-4">                                    
                        <small>Post</small>
                        <h5>234</h5>
                    </div>                            
                </div>
            </div>
        </div>
        <div class="card">
            <div class="body">
                <small class="text-muted">Email address: </small>
                <p>michael_dorsey@gmail.com</p>
                <hr>
                <small class="text-muted">Phone: </small>
                <p>+ 202-555-0191</p>
                <hr>
                <ul class="list-unstyled">
                    <li>
                        <div>Photoshop</div>
                        <div class="progress m-b-20">
                            <div class="progress-bar l-blue " role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%"> <span class="sr-only">62% Complete</span> </div>
                        </div>
                    </li>
                    <li>
                        <div>Wordpress</div>
                        <div class="progress m-b-20">
                            <div class="progress-bar l-green " role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%"> <span class="sr-only">87% Complete</span> </div>
                        </div>
                    </li>
                    <li>
                        <div>HTML 5</div>
                        <div class="progress m-b-20">
                            <div class="progress-bar l-amber" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%"> <span class="sr-only">32% Complete</span> </div>
                        </div>
                    </li>
                    <li>
                        <div>Angular</div>
                        <div class="progress m-b-20">
                            <div class="progress-bar l-blush" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%"> <span class="sr-only">56% Complete</span> </div>
                        </div>
                    </li>
                </ul>
                <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</span>
            </div>
        </div>                    
    </div>
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="body">
                <div id="calendar"></div>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2><strong>Media</strong> Gallery</h2>
            </div>
            <div class="body">
                <p>All pictures taken from <a href="https://pexels.com/" target="_blank">pexels.com</a></p>
                <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tenant-admin/images/image-gallery/1.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('tenant-admin/images/image-gallery/1.jpg')}}" alt=""> </a> </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tenant-admin/images/image-gallery/2.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('tenant-admin/images/image-gallery/2.jpg')}}" alt=""> </a> </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tenant-admin/images/image-gallery/3.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('tenant-admin/images/image-gallery/3.jpg')}}" alt=""> </a> </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tenant-admin/images/image-gallery/4.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('tenant-admin/images/image-gallery/4.jpg')}}" alt=""> </a> </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tenant-admin/images/image-gallery/5.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('tenant-admin/images/image-gallery/5.jpg')}}" alt=""> </a> </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tenant-admin/images/image-gallery/6.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('tenant-admin/images/image-gallery/6.jpg')}}" alt=""> </a> </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tenant-admin/images/image-gallery/7.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('tenant-admin/images/image-gallery/7.jpg')}}" alt=""> </a> </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tenant-admin/images/image-gallery/8.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('tenant-admin/images/image-gallery/8.jpg')}}" alt=""> </a> </div>                                
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('tenant-admin/plugins/light-gallery/js/lightgallery-all.min.js')}}"></script>
<script src="{{asset('tenant-admin/bundles/fullcalendarscripts.bundle.js')}}"></script>
<script src="{{asset('tenant-admin/js/pages/medias/image-gallery.js')}}"></script>
<script src="{{asset('tenant-admin/js/pages/calendar/calendar.js')}}"></script>
@stop
