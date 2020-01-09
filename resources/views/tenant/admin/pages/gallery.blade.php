@extends('tenant.admin.layout.master')
@section('title', 'Gallery')
@section('parentPageTitle', 'Pages')
@section('page-style')
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/light-gallery/css/lightgallery.css')}}">
@stop
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="body">
                <p>All pictures taken from <a href="https://pexels.com/" target="_blank">pexels.com</a></p>
                <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tenant-admin/images/image-gallery/1.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('tenant-admin/images/image-gallery/1.jpg')}}" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tenant-admin/images/image-gallery/2.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('tenant-admin/images/image-gallery/2.jpg')}}" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tenant-admin/images/image-gallery/3.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('tenant-admin/images/image-gallery/3.jpg')}}" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tenant-admin/images/image-gallery/4.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('tenant-admin/images/image-gallery/4.jpg')}}" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tenant-admin/images/image-gallery/5.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('tenant-admin/images/image-gallery/5.jpg')}}" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tenant-admin/images/image-gallery/6.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('tenant-admin/images/image-gallery/6.jpg')}}" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tenant-admin/images/image-gallery/7.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('tenant-admin/images/image-gallery/7.jpg')}}" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tenant-admin/images/image-gallery/8.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('tenant-admin/images/image-gallery/8.jpg')}}" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tenant-admin/images/image-gallery/9.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('tenant-admin/images/image-gallery/9.jpg')}}" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tenant-admin/images/image-gallery/10.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('tenant-admin/images/image-gallery/10.jpg')}}" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tenant-admin/images/image-gallery/11.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('tenant-admin/images/image-gallery/11.jpg')}}" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tenant-admin/images/image-gallery/12.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('tenant-admin/images/image-gallery/12.jpg')}}" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tenant-admin/images/image-gallery/13.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('tenant-admin/images/image-gallery/13.jpg')}}" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tenant-admin/images/image-gallery/14.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('tenant-admin/images/image-gallery/14.jpg')}}" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="{{asset('tenant-admin/images/image-gallery/15.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('tenant-admin/images/image-gallery/15.jpg')}}" alt=""> </a> </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('tenant-admin/plugins/light-gallery/js/lightgallery-all.min.js')}}"></script>
<script src="{{asset('tenant-admin/js/pages/medias/image-gallery.js')}}"></script>
@stop