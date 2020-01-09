@extends('tenant.admin.layout.master')
@section('title', 'Chat')
@section('parentPageTitle', 'App')
@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="chat_list">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="zmdi zmdi-search"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search..." required>
                </div>
                <ul class="user_list list-unstyled mb-0 mt-3">
                    <li>
                        <a href="javascript:void(0);">
                            <img src="{{asset('tenant-admin/images/xs/avatar1.jpg')}}" alt="avatar" />
                            <div class="about">
                                <div class="name">Vincent Porter</div>
                                <div class="status offline"> <i class="zmdi zmdi-circle"></i> left 7 mins ago </div>
                            </div>
                        </a>
                    </li>
                    <li class="active">
                        <a href="javascript:void(0);">
                            <img src="{{asset('tenant-admin/images/xs/avatar2.jpg')}}" alt="avatar" />
                            <div class="about">
                                <div class="name">Aiden Chavez</div>
                                <div class="status me"> <i class="zmdi zmdi-circle"></i> online </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <img src="{{asset('tenant-admin/images/xs/avatar3.jpg')}}" alt="avatar" />
                            <div class="about">
                                <div class="name">Mike Thomas</div>
                                <div class="status online"> <i class="zmdi zmdi-circle"></i> online </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <img src="{{asset('tenant-admin/images/xs/avatar4.jpg')}}" alt="avatar" />
                            <div class="about">
                                <div class="name">Erica Hughes</div>
                                <div class="status online"> <i class="zmdi zmdi-circle"></i> online </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <img src="{{asset('tenant-admin/images/xs/avatar5.jpg')}}" alt="avatar" />
                            <div class="about">
                                <div class="name">Ginger Johnston</div>
                                <div class="status online"> <i class="zmdi zmdi-circle"></i> online </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <img src="{{asset('tenant-admin/images/xs/avatar6.jpg')}}" alt="avatar" />
                            <div class="about">
                                <div class="name">Tracy Carpenter</div>
                                <div class="status offline"> <i class="zmdi zmdi-circle"></i> left 30 mins ago </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <img src="{{asset('tenant-admin/images/xs/avatar7.jpg')}}" alt="avatar" />
                            <div class="about">
                                <div class="name">Christian Kelly</div>
                                <div class="status offline"> <i class="zmdi zmdi-circle"></i> left 10 hours ago </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <img src="{{asset('tenant-admin/images/xs/avatar8.jpg')}}" alt="avatar" />
                            <div class="about">
                                <div class="name">Monica Ward</div>
                                <div class="status online"><i class="zmdi zmdi-circle"></i> online</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <img src="{{asset('tenant-admin/images/xs/avatar9.jpg')}}" alt="avatar" />
                            <div class="about">
                                <div class="name">Dean Henry</div>
                                <div class="status offline"><i class="zmdi zmdi-circle"></i> offline since Oct 28</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="chat_window body">
                <div class="chat-header">
                    <div class="user">
                        <img src="{{asset('tenant-admin/images/xs/avatar2.jpg')}}" alt="avatar" />
                        <div class="chat-about">
                            <div class="chat-with">Aiden Chavez</div>
                            <div class="chat-num-messages">already 8 messages</div>
                        </div>
                    </div>
                    <div class="setting">
                        <a href="javascript:void(0);" class="btn btn-sm btn-warning"><i class="zmdi zmdi-camera"></i></a>
                        <a href="javascript:void(0);" class="btn btn-sm btn-info"><i class="zmdi zmdi-file-text"></i></a>
                    </div>
                    <a href="javascript:void(0);" class="list_btn btn btn-info btn-round float-md-right"><i class="zmdi zmdi-comments"></i></a>
                </div>
                <hr>
                <ul class="chat-history">
                    <li class="clearfix">
                        <div class="status online message-data text-right">
                            <span class="time">10:10 AM, Today</span>
                            <span class="name">Michael</span>
                            <i class="zmdi zmdi-circle me"></i>
                        </div>
                        <div class="message other-message float-right"> Hi Aiden, how are you? How is the project coming along? </div>
                    </li>
                    <li>
                        <div class="status message-data">
                            <span class="name">Aiden</span>
                            <span class="time">10:12 AM, Today</span>
                        </div>
                        <div class="message my-message">
                            <p>Are we meeting today? Project has been already finished and I have results to show you.</p>
                            <div class="attachment">
                                <a class="w200" href="javascript:void(0);"><img src="{{asset('tenant-admin/images/image-gallery/2.jpg')}}" alt="" class="img-fluid img-thumbnail"></a>
                                <a class="w200" href="javascript:void(0);"><img src="{{asset('tenant-admin/images/image-gallery/5.jpg')}}" alt="" class="img-fluid img-thumbnail"></a>
                            </div>
                        </div>
                    </li>                        
                    <li>
                        <div class="status message-data">
                            <span class="name">Aiden</span>
                            <span class="time">10:31 AM, Today</span>
                        </div>
                        <i class="zmdi zmdi-circle" style="color: #04BE5B; font-size: 10px;"></i>
                        <i class="zmdi zmdi-circle" style="color: #83d0a7; font-size: 10px;"></i>
                        <i class="zmdi zmdi-circle" style="color:#DAE9DA; font-size: 10px;"></i>
                    </li>
                </ul>
                <div class="chat-box">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="zmdi zmdi-mail-send"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Enter text here..." required>
                    </div>                                                            
                </div>
            </div>
        </div>
    </div>
</div>
@stop