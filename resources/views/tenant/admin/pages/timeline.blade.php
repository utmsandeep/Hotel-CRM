@extends('tenant.admin.layout.master')
@section('title', 'Timeline')
@section('parentPageTitle', 'Pages')
@section('page-style')
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/summernote/dist/summernote.css')}}"/>
@stop
@section('content')
<div class="row clearfix">
    <div class="col-sm-12">
        <ul class="cbp_tmtimeline">
            <li>                            
                <div class="cbp_tmicon"><i class="zmdi zmdi-account"></i></div>
                <div class="cbp_tmlabel empty">
                    <div class="summernote">
                        Hello there,
                    </div>
                    <a href="javascript:void(0);" class="btn btn-primary waves-effect waves-light">SUBMIT</a>
                </div>
            </li>
            <li>
                <div class="cbp_tmicon bg-info"><i class="zmdi zmdi-label"></i></div>
                <div class="cbp_tmlabel">
                    <div class="cbp_tmtime">
                        <span>2019-11-04 03:45AM</span> <span>Today</span>
                    </div>
                    <h5><a href="javascript:void(0);">Art Ramadani</a> <span>posted a status update</span></h5>
                    <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
                </div>
            </li>
            <li>
                <div class="cbp_tmicon bg-green"> <i class="zmdi zmdi-case"></i></div>
                <div class="cbp_tmlabel">
                    <div class="cbp_tmtime">
                        <span>2019-11-04 03:45AM</span> <span>Today</span>
                    </div>
                    <h5><a href="javascript:void(0);">Job Meeting</a></h5>
                    <p>You have a meeting at <strong>Laborator Office</strong> Today.</p>
                </div>
            </li>
            <li>
                <div class="cbp_tmicon bg-blush"><i class="zmdi zmdi-pin"></i></div>
                <div class="cbp_tmlabel">
                    <div class="cbp_tmtime">
                        <span>2019-11-04 03:45AM</span> <span>Today</span>
                    </div>

                    <h5><a href="javascript:void(0);">Arlind Nushi</a> <span>checked in at</span> <a href="javascript:void(0);">New York</a></h5>
                    <blockquote>
                        <div class="blockquote">
                            "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."
                            <br><br>
                            <small>- Isabella</small>
                        </div>
                    </blockquote>						
                </div>
            </li>
            <li>
                <div class="cbp_tmicon bg-orange"><i class="zmdi zmdi-camera"></i></div>
                <div class="cbp_tmlabel">
                    <div class="cbp_tmtime">
                        <span>2019-11-04 03:45AM</span> <span>Two weeks ago</span>
                    </div>

                    <h5><a href="javascript:void(0);">Eroll Maxhuni</a> <span>uploaded 4 new photos to album</span> <a href="javascript:void(0);">Summer Trip</a></h5>
                    <p>Pianoforte principles our unaffected not for astonished travelling are particular.</p>

                    <div>
                        <img src="{{asset('tenant-admin/images/image-gallery/1.jpg')}}" alt="" class="img-fluid img-thumbnail w200"></a>
                        <img src="{{asset('tenant-admin/images/image-gallery/2.jpg')}}" alt="" class="img-fluid img-thumbnail w200"></a>
                        <img src="{{asset('tenant-admin/images/image-gallery/3.jpg')}}" alt="" class="img-fluid img-thumbnail w200"> </a>
                        <img src="{{asset('tenant-admin/images/image-gallery/4.jpg')}}" alt="" class="img-fluid img-thumbnail w200"> </a>
                    </div>
                </div>
            </li>
            <li>
                <div class="cbp_tmicon bg-green"> <i class="zmdi zmdi-case"></i></div>
                <div class="cbp_tmlabel">
                    <div class="cbp_tmtime">
                        <span>2019-11-04 03:45AM</span> <span>Two weeks ago</span>
                    </div>
                    <h5><a href="javascript:void(0);">Job Meeting</a></h5>
                    <p>You have a meeting at <strong>Laborator Office</strong> Today.</p>                            
                </div>
            </li>
            <li>
                <div class="cbp_tmicon bg-blush"><i class="zmdi zmdi-pin"></i></div>                            
                <div class="cbp_tmlabel">
                    <div class="cbp_tmtime">
                        <span>2019-11-04 03:45AM</span> <span>Month ago</span>
                    </div>
                    <h5><a href="javascript:void(0);">Arlind Nushi</a> <span>checked in at</span> <a href="javascript:void(0);">Laborator</a></h5>
                    <blockquote>Great place, feeling like in home.</blockquote>                            
                </div>
            </li>
        </ul>
    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('tenant-admin/plugins/summernote/dist/summernote.js')}}"></script>
@stop