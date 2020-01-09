@extends('tenant.admin.layout.master')
@section('title', 'Media')
@section('parentPageTitle', 'UI')
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 ">
        <div class="card">
            <div class="header">
                <h2><strong>Default</strong> Media</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="media mleft">
                    <div class="media-left"> <a href="javascript:void(0);"> <img class="media-object" src="{{asset('tenant-admin/images/lg/avatar1.jpg')}}" width="64" height="64" alt=""> </a> </div>
                    <div class="media-body">
                        <h4 class="media-heading">Media heading</h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                        ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                        in faucibus.
                    </div>
                </div>
                <div class="media mleft">
                    <div class="media-left"> <a href="javascript:void(0);"> <img alt="" class="media-object" src="{{asset('tenant-admin/images/lg/avatar2.jpg')}}" width="64" height="64"> </a> </div>
                    <div class="media-body">
                        <h4 class="media-heading">Media heading</h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                        ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                        in faucibus.
                        <div class="media m-t-20">
                            <div class="media-left"> <a href="javascript:void(0);"> <img alt="" class="media-object" src="{{asset('tenant-admin/images/lg/avatar3.jpg')}}" width="64" height="64"> </a> </div>
                            <div class="media-body">
                                <h4 class="media-heading">Nested media heading</h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla
                                vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum
                                in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                                fringilla. Donec lacinia congue felis in faucibus. </div>
                        </div>
                    </div>
                </div>
                <div class="media mright">
                    <div class="media-body">
                        <h4 class="media-heading">Media heading</h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                        ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. </div>
                    <div class="media-right"> <a href="javascript:void(0);"> <img alt="" class="media-object" src="{{asset('tenant-admin/images/lg/avatar4.jpg')}}" width="64" height="64"> </a> </div>
                </div>
                <div class="media mleft">
                    <div class="media-left"> <a href="javascript:void(0);"> <img alt="" class="media-object" src="{{asset('tenant-admin/images/lg/avatar1.jpg')}}" width="64" height="64"> </a> </div>
                    <div class="media-body">
                        <h4 class="media-heading">Media heading</h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                        ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. </div>
                    <div class="media-right"> <a href="javascript:void(0);"> <img class="media-object" src="{{asset('tenant-admin/images/lg/avatar2.jpg')}}" width="64" height="64"> </a> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 ">
        <div class="card">
            <div class="header">
                <h2><strong>Media</strong> Alignment</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="media">
                    <div class="media-left"> <a href="javascript:void(0);"> <img alt="" class="media-object" src="{{asset('tenant-admin/images/lg/avatar1.jpg')}}" width="64" height="64"> </a> </div>
                    <div class="media-body">
                        <h4 class="media-heading">Top aligned media</h4>
                        <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
                            commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                            in faucibus. </p>
                        <p> Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis
                            natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                    </div>
                </div>
                <div class="media media-middle">
                    <div class="media-left"> <a href="javascript:void(0);"> <img alt="" class="media-object" src="{{asset('tenant-admin/images/lg/avatar2.jpg')}}" width="64" height="64"> </a> </div>
                    <div class="media-body">
                        <h4 class="media-heading">Middle aligned media</h4>
                        <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
                            commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                            in faucibus. </p>
                        <p> Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis
                            natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                    </div>
                </div>
                <div class="media media-bottom">
                    <div class="media-left"> <a href="javascript:void(0);"> <img alt="" class="media-object" src="{{asset('tenant-admin/images/lg/avatar3.jpg')}}" width="64" height="64"> </a> </div>
                    <div class="media-body">
                        <h4 class="media-heading">Bottom aligned media</h4>
                        <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
                            commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                            in faucibus. </p>
                        <p> Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis
                            natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop