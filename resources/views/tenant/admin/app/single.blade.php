@extends('tenant.admin.layout.master')
@section('title', 'Mail Single')
@section('parentPageTitle', 'App')
@section('page-style')
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-select/css/bootstrap-select.css')}}" />
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/summernote/dist/summernote.css')}}" />
@stop
@section('content')
<div class="row clearfix">
    <div class="col-md-12">
        <div class="d-flex">
            <div class="mobile-left">
                <a class="btn btn-info btn-icon toggle-email-nav collapsed" data-toggle="collapse" href="#email-nav" role="button" aria-expanded="false" aria-controls="email-nav">
                    <span class="btn-label"><i class="zmdi zmdi-more"></i></span>
                </a>
            </div>
            <div class="inbox left" id="email-nav">
                <div class="mail-compose mb-4">
                    <a href="{{route('app.compose')}}" class="btn btn-danger btn-block">Compose</a>
                </div>
                <div class="mail-side">
                    <ul class="nav">
                        <li class="active"><a href="{{route('app.inbox')}}"><i class="zmdi zmdi-inbox"></i>Inbox<span class="badge badge-primary">6</span></a></li>
                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-mail-send"></i>Sent</a></li>
                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-badge-check"></i>Important </a></li>
                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-file"></i>Draft<span class="badge badge-info">3</span></a></li>
                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-email"></i>All Mail</a></li>
                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-alert-circle"></i>Spam<span class="badge badge-warning">6</span></a></li>
                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-delete"></i>Trash<span class="badge badge-danger">9</span></a></li>
                    </ul>
                    <h3 class="label">Labels</h3>
                    <ul class="nav">
                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-label text-danger"></i>UI Project<span class="badge badge-primary">5</span></a></li>
                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-label text-info"></i>Marketing</a></li>
                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-label text-dark"></i>Payout</a></li>
                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-label text-primary"></i>Meeting</a></li>
                    </ul>
                </div>
            </div>
            <div class="inbox right">
                <div class="card">
                    <div class="body mb-2">
                        <div class="d-flex justify-content-between flex-wrap-reverse">
                            <h5 class="mt-0 mb-0 font-17">Your updated item Aero Admin</h5>
                            <div>
                                <small>Jan 9, 2019, 9:55 PM</small>
                                <a href="javascript:void(0);" class="p-2"><i class="zmdi zmdi-star-outline"></i></a>
                                <a href="javascript:void(0);" class="p-2"><i class="zmdi zmdi-mail-reply"></i></a>
                                <a href="javascript:void(0);" class="p-2"><i class="zmdi zmdi-delete text-danger"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="body mb-2">
                        <ul class="list-unstyled d-flex justify-content-md-start mb-0">
                            <li><img class="rounded w40" src="assets/images/xs/avatar7.jpg" alt=""></li>
                            <li class="ml-3">
                                <p class="mb-0"><span class="text-muted">From:</span> <a href="javascript:void(0);">woodwalton@info.com</a>, <a href="javascript:void(0);">info@examples.com</a></p>
                                <p class="mb-0"><span class="text-muted">To:</span> Me</p>
                            </li>
                        </ul>
                    </div>
                    <div class="body mb-2">
                        <h6>Hello,</h6>
                        <br>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
                        <ul>
                            <li>standard dummy text ever since the 1500s, when an unknown printer</li>
                            <li>Lorem Ipsum has been the industry's standard dummy</li>
                        </ul>
                        <p class="text-info">Purchase: Aero has not yet purchased this item from you.</p>
                        <br>
                        <div class="file_folder">
                            <a href="javascript:void(0);">
                                <div class="icon">
                                    <i class="zmdi zmdi-chart text-success"></i>
                                </div>
                                <div class="file-name">
                                    <p class="mb-0 text-muted">Report2017.xls</p>
                                    <small>Size: 68KB</small>
                                </div>
                            </a>
                            <a href="javascript:void(0);">
                                <div class="icon">
                                    <i class="zmdi zmdi-collection-text text-primary"></i>
                                </div>
                                <div class="file-name">
                                    <p class="mb-0 text-muted">Report2017.doc</p>
                                    <small>Size: 68KB</small>
                                </div>
                            </a>
                            <a href="javascript:void(0);">
                                <div class="icon">
                                    <i class="zmdi zmdi-collection-pdf text-danger"></i>
                                </div>
                                <div class="file-name">
                                    <p class="mb-0 text-muted">Report2017.pdf</p>
                                    <small>Size: 68KB</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="body">
                        <a href="{{route('app.compose')}}" class="p-2"><i class="zmdi zmdi-mail-reply"></i> Reply</a> or
                        <a href="{{route('app.compose')}}" class="p-2"><i class="zmdi zmdi-mail-send"></i> Forward</a>
                    </div>
                </div>
            </div>
        </div>
    </div>          
</div>
@stop
@section('page-script')
<script src="{{asset('tenant-admin/plugins/dropzone/dropzone.js')}}"></script>
<script src="{{asset('tenant-admin/plugins/summernote/dist/summernote.js')}}"></script>
@stop