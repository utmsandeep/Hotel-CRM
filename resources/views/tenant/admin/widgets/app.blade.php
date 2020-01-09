@extends('tenant.admin.layout.master')
@section('title', 'App')
@section('parentPageTitle', 'Widgets')
@section('content')
<div class="row clearfix">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card state_w1">
            <div class="body d-flex justify-content-between">
                <div>
                    <h5>2,365</h5>
                    <span><i class="zmdi zmdi-eye col-amber"></i> Post View</span>
                </div>
                <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#FFC107">5,2,3,7,6,4,8,1</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card state_w1">
            <div class="body d-flex justify-content-between">
                <div>                                
                    <h5>365</h5>
                    <span><i class="zmdi zmdi-thumb-up col-blue"></i> Likes</span>
                </div>
                <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#46b6fe">8,2,6,5,1,4,4,3</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card state_w1">
            <div class="body d-flex justify-content-between">
                <div>
                    <h5>65</h5>
                    <span><i class="zmdi zmdi-comment-text col-red"></i> Comments</span>
                </div>
                <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#ee2558">4,4,3,9,2,1,5,7</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card state_w1">
            <div class="body d-flex justify-content-between">
                <div>                            
                    <h5>2,055</h5>
                    <span><i class="zmdi zmdi-account text-success"></i> Profile Views</span>
                </div>
                <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#04BE5B">7,5,3,8,4,6,2,9</div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-xl-3 col-lg-3 col-md-6">
        <div class="card mcard_4">                        
            <div class="body">
                <ul class="header-dropdown list-unstyled">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-menu"></i> </a>
                        <ul class="dropdown-menu slideUp">
                            <li><a href="javascript:void(0);">Edit</a></li>
                            <li><a href="javascript:void(0);">Delete</a></li>
                            <li><a href="javascript:void(0);">Report</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="img">
                    <img src="{{asset('tenant-admin/images/lg/avatar1.jpg')}}" class="rounded-circle" alt="profile-image">
                </div>
                <div class="user">
                    <h5 class="mt-3 mb-1">Eliana Smith</h5>
                    <small class="text-muted">UI/UX Desiger</small>
                </div>
                <ul class="list-unstyled social-links">
                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-dribbble"></i></a></li>
                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-behance"></i></a></li>
                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-pinterest"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6">
        <div class="card mcard_4">                        
            <div class="body">
                <ul class="header-dropdown list-unstyled">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-menu"></i> </a>
                        <ul class="dropdown-menu slideUp">
                            <li><a href="javascript:void(0);">Edit</a></li>
                            <li><a href="javascript:void(0);">Delete</a></li>
                            <li><a href="javascript:void(0);">Report</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="img">
                    <img src="{{asset('tenant-admin/images/lg/avatar2.jpg')}}" class="rounded-circle" alt="profile-image">
                </div>
                <div class="user">
                    <h5 class="mt-3 mb-1">Fidel Tonn</h5>
                    <small class="text-muted">Angular Lead</small>
                </div>
                <ul class="list-unstyled social-links">
                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-github"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6">
        <div class="card mcard_4">                        
            <div class="body">
                <ul class="header-dropdown list-unstyled">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-menu"></i> </a>
                        <ul class="dropdown-menu slideUp">
                            <li><a href="javascript:void(0);">Edit</a></li>
                            <li><a href="javascript:void(0);">Delete</a></li>
                            <li><a href="javascript:void(0);">Report</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="img">
                    <img src="{{asset('tenant-admin/images/lg/avatar3.jpg')}}" class="rounded-circle" alt="profile-image">
                </div>
                <div class="user">
                    <h5 class="mt-3 mb-1">Gary Camara</h5>
                    <small class="text-muted">Web Developer</small>
                </div>
                <ul class="list-unstyled social-links">
                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-dribbble"></i></a></li>
                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-github"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6">
        <div class="card mcard_4">                        
            <div class="body">
                <ul class="header-dropdown list-unstyled">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-menu"></i> </a>
                        <ul class="dropdown-menu slideUp">
                            <li><a href="javascript:void(0);">Edit</a></li>
                            <li><a href="javascript:void(0);">Delete</a></li>
                            <li><a href="javascript:void(0);">Report</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="img">
                    <img src="{{asset('tenant-admin/images/lg/avatar4.jpg')}}" class="rounded-circle" alt="profile-image">
                </div>
                <div class="user">
                    <h5 class="mt-3 mb-1">Eliana Smith</h5>
                    <small class="text-muted">UI/UX Desiger</small>
                </div>
                <ul class="list-unstyled social-links">
                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook-box"></i></a></li>
                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-linkedin-box"></i></a></li>
                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-pinterest-box"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-md-12 col-lg-4">
        <div class="card">
            <div class="body">
                <h3 class="mt-0 mb-0">2,028</h3>
                <p class="text-muted">Total Projects</p>
                <div class="progress">
                    <div class="progress-bar l-amber" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                </div>
                <small>21% higher than last month</small>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-4">
        <div class="card">
            <div class="body">
                <h3 class="mt-0 mb-0">510</h3>
                <p class="text-muted">Completed Task</p>
                <div class="progress">
                    <div class="progress-bar l-pink" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                </div>
                <small>43% higher than last month</small>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-4">
        <div class="card">
            <div class="body">
                <h3 class="mt-0 mb-0">17</h3>
                <p class="text-muted">Ongoing Projects</p>
                <div class="progress">
                    <div class="progress-bar l-green" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                </div>
                <small>23% higher than last month</small>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-md-12 col-lg-6">
        <div class="card">
            <div class="header">
                <h2><strong>Activities</strong></h2>
                <ul class="header-dropdown">
                    <li><a href="javascript:void(0);" title="add new"><i class="zmdi zmdi-plus"></i></a></li>
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right slideUp">
                            <li><a href="javascript:void(0);">Edit</a></li>
                            <li><a href="javascript:void(0);">Delete</a></li>
                            <li><a href="javascript:void(0);">Report</a></li>
                        </ul>
                    </li>                                
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <ul class="list-unstyled activity">
                    <li class="a_birthday">
                        <h4>Admin Birthday</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing</p>
                        <small>1 months ago.</small>
                    </li>
                    <li class="a_code">
                        <h4>Code Change</h4>
                        <p>It is a long established fact that a reader will be distracted</p>
                        <small>1 week ago.</small>
                    </li>
                    <li class="a_contact">
                        <h4>Add New Contact</h4>
                        <code>maryamamiri@gmail.com</code>
                        <code>fideltonn@gmail.com</code>
                        <small>1 months ago.</small>
                    </li>
                    <li class="a_email">
                        <h4>New Email</h4>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply</p>
                        <small>3 months ago.</small>
                    </li>
                    <li class="a_contact">
                        <h4>Add New Contact</h4>
                        <code>maryamamiri@gmail.com</code>
                        <small>1 months ago.</small>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-6">
        <div class="card">
            <div class="header">
                <h2><strong>Inbox</strong></h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right slideUp">
                            <li><a href="javascript:void(0);">Edit</a></li>
                            <li><a href="javascript:void(0);">Delete</a></li>
                            <li><a href="javascript:void(0);">Report</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">                            
                <div class="d-flex bd-highlight text-center mb-3">
                    <div class="bg-blue flex-fill bd-highlight">
                        <h3 class="mt-3 mb-0">08</h3>
                        <p>Emails Sent</p>
                    </div>
                    <div class="bg-green flex-fill bd-highlight">
                        <h3 class="mt-3 mb-0">83%</h3>
                        <p>Were Read </p>
                    </div>
                    <div class="bg-orange flex-fill bd-highlight">
                        <h3 class="mt-3 mb-0">0%</h3>
                        <p>Were Clicked</p>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search...">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="zmdi zmdi-search"></i></span>
                    </div>
                </div>
                <ul class="list-unstyled inbox_widget">
                    <li class="d-flex justify-content-start">
                        <div class="inbox-img">
                            <img src="{{asset('tenant-admin/images/xs/avatar1.jpg')}}" alt="">
                        </div>
                        <div class="inbox_info">
                            <a href="javascript:void(0)">Aaron Enlightened <small class="inbox-date">13:34 PM</small></a>
                            <p class="message">Lorem Ipsum is simply dummy text of fact that a reader will be the printing and typesetting industry.</p>
                        </div>
                    </li>
                    <li class="d-flex justify-content-start">
                        <div class="inbox-img">
                            <img src="{{asset('tenant-admin/images/xs/avatar2.jpg')}}" alt="">
                        </div>
                        <div class="inbox_info">
                            <a href="javascript:void(0)">Frank Camly <small class="inbox-date">13:34 PM</small></a>
                            <p class="message">It is a long established the printing and typesetting fact that a reader will be distracted by the readable.</p>
                        </div>
                    </li>
                    <li class="d-flex justify-content-start">
                        <div class="inbox-img">
                            <img src="{{asset('tenant-admin/images/xs/avatar1.jpg')}}" alt="">
                        </div>
                        <div class="inbox_info">
                            <a href="javascript:void(0)">Tim Hank <small class="inbox-date">13:34 PM</small></a>
                            <p class="message">Lorem Ipsumfact that a reader will be is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </li>
                    <li class="d-flex justify-content-start">
                        <div class="inbox-img">
                            <img src="{{asset('tenant-admin/images/xs/avatar3.jpg')}}" alt="">
                        </div>
                        <div class="inbox_info">
                            <a href="javascript:void(0)">Hossein Shams <small class="inbox-date">13:34 PM</small></a>
                            <p class="message">Lorem Ipsum is simply dummy of the printing and fact that a reader will be typesetting industry.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="body">
                <img class="img-responsive" src="{{asset('tenant-admin/images/image-gallery/11.jpg')}}" alt="About the image">
                <div class="mt-4 pw_header">
                    <h6>Magazine Design</h6>
                    <small class="text-muted">Aero  |  Last Update: 12 Dec 2019</small>
                </div>
                <div class="pw_meta">
                    <span>4,870 USD</span>
                    <small class="text-muted">Budget / Salary</small>
                    <small class="text-danger">17 Days Remaining</small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card">                    
            <div class="body">
                <img class="img-responsive" src="{{asset('tenant-admin/images/image-gallery/10.jpg')}}" alt="About the image">
                <div class="mt-4 pw_header">
                    <h6>New Dashboard</h6>
                    <small class="text-muted">Aero  |  Last Update: 17 Dec 2019</small>
                </div>
                <div class="pw_meta">
                    <span>921 USD</span>
                    <small class="text-muted">Budget / Salary</small>
                    <small class="text-success">Early Dec 2019</small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="body">
                <img class="img-responsive" src="{{asset('tenant-admin/images/image-gallery/12.jpg')}}" alt="About the image">
                <div class="mt-4 pw_header">
                    <h6>Mobile App</h6>
                    <small class="text-muted">Aero  |  Last Update: 21 Dec 2019</small>
                </div>
                <div class="pw_meta">
                    <span>1,870 USD</span>
                    <small class="text-muted">Budget / Salary</small>
                    <small class="text-danger">10 Days Remaining</small>
                </div>
            </div>
        </div>
    </div>
</div>            
<div class="row clearfix">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>ToDo</strong> List</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right slideUp">
                            <li><a href="javascript:void(0);">Edit</a></li>
                            <li><a href="javascript:void(0);">Delete</a></li>
                            <li><a href="javascript:void(0);">Report</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body todo_list">
                <div class="input-group mb-4">
                    <input type="text" class="form-control" placeholder="Type your task here...">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Add Todo</button>
                    </div>
                </div>                            
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Walk the dog this evening
                        <span class="badge badge-primary badge-pill">x</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Go shopping at 3 PM
                        <span class="badge badge-primary badge-pill">x</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sleep well tonight
                        <span class="badge badge-primary badge-pill">x</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Keep coding 'till you're dead
                        <span class="badge badge-primary badge-pill">x</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Enjoy every moment you have
                        <span class="badge badge-primary badge-pill">x</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sleep well tonight
                        <span class="badge badge-primary badge-pill">x</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Chat</strong> Box</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right slideUp">
                            <li><a href="javascript:void(0);">Edit</a></li>
                            <li><a href="javascript:void(0);">Delete</a></li>
                            <li><a href="javascript:void(0);">Report</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="chat-widget">
                    <ul class="list-unstyled">
                        <li class="left">
                            <img src="{{asset('tenant-admin/images/xs/avatar3.jpg')}}" class="rounded-circle" alt="">
                            <ul class="list-unstyled chat_info">
                                <li><small>Frank 11:00AM</small></li>
                                <li><span class="message bg-blue">Hello, Michael</span></li>
                                <li><span class="message bg-blue">How are you!</span></li>
                            </ul>
                        </li>
                        <li class="right">
                            <ul class="list-unstyled chat_info">
                                <li><small>11:10AM</small></li>
                                <li><span class="message">Hello, Frank</span></li>
                            </ul>
                        </li>
                        <li class="right">
                            <ul class="list-unstyled chat_info">
                                <li><small>11:11AM</small></li>
                                <li><span class="message">I'm fine what about you?</span></li>
                            </ul>
                        </li>
                        <li class="left">
                            <img src="{{asset('tenant-admin/images/xs/avatar2.jpg')}}" class="rounded-circle" alt="">
                            <ul class="list-unstyled chat_info">
                                <li><small>Gary 11:13AM</small></li>
                                <li><span class="message bg-indigo">Hello, Michael and Frank</span></li>
                            </ul>
                        </li>
                        <li class="left">
                            <img src="{{asset('tenant-admin/images/xs/avatar5.jpg')}}" class="rounded-circle" alt="">
                            <ul class="list-unstyled chat_info">
                                <li><small>Hossein 11:14AM</small></li>
                                <li><span class="message bg-amber">Hello, team</span></li>
                                <li><span class="message bg-amber">Please let me know your requirements.</span></li>
                                <li><span class="message bg-amber">How would like to connect with us?</span></li>
                            </ul>
                        </li>
                        <li class="right">
                            <ul class="list-unstyled chat_info">
                                <li><small>11:15AM</small></li>
                                <li><span class="message">Hello, Hossein</span></li>
                                <li><span class="message">Meeting on conference room at 12:00PM</span></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">                                    
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">Tim Hank</a>
                            <a class="dropdown-item" href="javascript:void(0);">Hossein Shams</a>
                            <a class="dropdown-item" href="javascript:void(0);">John Smith</a>
                        </div>
                    </div>
                    <input type="text" class="form-control" placeholder="Enter text here..." aria-label="Text input with dropdown button">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="zmdi zmdi-mail-send"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="body carousel slide twitter feed" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item text-center active">
                        <div class="user">
                            <img src="{{asset('tenant-admin/images/xs/avatar1.jpg')}}" alt="avatar" />
                            <div class="h6 mt-2">@Hossein</div>
                        </div>                                    
                        <span><i class="zmdi zmdi-quote"></i> Lorem Ipsum is simply <a href="javascript:void(0);">@typesetting</a> industry. Lorem <a href="javascript:void(0);">@Ipsum</a> has been the industry's standard</span>
                        
                        <div class="d-flex bd-highlight text-center mt-4">
                            <div class="flex-fill bd-highlight">
                                <i class="zmdi zmdi-favorite"></i>
                                <p class="mb-0 text-muted">Like (5K)</p>
                            </div>
                            <div class="flex-fill bd-highlight">
                                <i class="zmdi zmdi-comment-text"></i>
                                <p class="mb-0 text-muted">Twitt (250)</p>
                            </div>
                        </div>
                    </div>
                        <div class="carousel-item text-center">
                        <div class="user">
                            <img src="{{asset('tenant-admin/images/xs/avatar2.jpg')}}" alt="avatar" />
                            <div class="h6 mt-2">@Frank</div>
                        </div>                                    
                        <span><i class="zmdi zmdi-quote"></i> Lorem Ipsum is simply <a href="javascript:void(0);">@typesetting</a> industry. Lorem <a href="javascript:void(0);">@Ipsum</a> has been the industry's standard</span>
                        
                        <div class="d-flex bd-highlight text-center mt-4">
                            <div class="flex-fill bd-highlight">
                                <i class="zmdi zmdi-favorite"></i>
                                <p class="mb-0 text-muted">Like (1K)</p>
                            </div>
                            <div class="flex-fill bd-highlight">
                                <i class="zmdi zmdi-comment-text"></i>
                                <p class="mb-0 text-muted">Twitt (612)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="body carousel slide facebook feed" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item text-center active">
                        <div class="user">
                            <img src="{{asset('tenant-admin/images/xs/avatar3.jpg')}}" alt="avatar" />
                            <div class="h6 mt-2">@Hossein</div>
                        </div>                                    
                        <span><i class="zmdi zmdi-quote"></i> Lorem Ipsum is simply <a href="javascript:void(0);">@typesetting</a> industry. Lorem <a href="javascript:void(0);">@Ipsum</a> has been the industry's standard</span>
                        
                        <div class="d-flex bd-highlight text-center mt-4">
                            <div class="flex-fill bd-highlight">
                                <i class="zmdi zmdi-favorite"></i>
                                <p class="mb-0 text-muted">Like (10K)</p>
                            </div>
                            <div class="flex-fill bd-highlight">
                                <i class="zmdi zmdi-comment-text"></i>
                                <p class="mb-0 text-muted">Comments (251)</p>
                            </div>
                        </div>
                    </div>
                        <div class="carousel-item text-center">
                        <div class="user">
                            <img src="{{asset('tenant-admin/images/xs/avatar4.jpg')}}" alt="avatar" />
                            <div class="h6 mt-2">@Frank</div>
                        </div>                                    
                        <span><i class="zmdi zmdi-quote"></i> Lorem Ipsum is simply <a href="javascript:void(0);">@typesetting</a> industry. Lorem <a href="javascript:void(0);">@Ipsum</a> has been the industry's standard</span>
                        
                        <div class="d-flex bd-highlight text-center mt-4">
                            <div class="flex-fill bd-highlight">
                                <i class="zmdi zmdi-favorite"></i>
                                <p class="mb-0 text-muted">Like (5K)</p>
                            </div>
                            <div class="flex-fill bd-highlight">
                                <i class="zmdi zmdi-comment-text"></i>
                                <p class="mb-0 text-muted">Comments (250)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="body carousel slide dribbble feed" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item text-center active">
                        <div class="user">
                            <img src="{{asset('tenant-admin/images/xs/avatar5.jpg')}}" alt="avatar" />
                            <div class="h6 mt-2">@Hossein</div>
                        </div>                                    
                        <span><i class="zmdi zmdi-quote"></i> Lorem Ipsum is simply <a href="javascript:void(0);">@typesetting</a> industry. Lorem <a href="javascript:void(0);">@Ipsum</a> has been the industry's standard</span>
                        
                        <div class="d-flex bd-highlight text-center mt-4">
                            <div class="flex-fill bd-highlight">
                                <i class="zmdi zmdi-favorite"></i>
                                <p class="mb-0 text-muted">Like (10K)</p>
                            </div>
                            <div class="flex-fill bd-highlight">
                                <i class="zmdi zmdi-comment-text"></i>
                                <p class="mb-0 text-muted">Comments (251)</p>
                            </div>
                        </div>
                    </div>
                        <div class="carousel-item text-center">
                        <div class="user">
                            <img src="{{asset('tenant-admin/images/xs/avatar6.jpg')}}" alt="avatar" />
                            <div class="h6 mt-2">@Frank</div>
                        </div>                                    
                        <span><i class="zmdi zmdi-quote"></i> Lorem Ipsum is simply <a href="javascript:void(0);">@typesetting</a> industry. Lorem <a href="javascript:void(0);">@Ipsum</a> has been the industry's standard</span>
                        
                        <div class="d-flex bd-highlight text-center mt-4">
                            <div class="flex-fill bd-highlight">
                                <i class="zmdi zmdi-favorite"></i>
                                <p class="mb-0 text-muted">Like (5K)</p>
                            </div>
                            <div class="flex-fill bd-highlight">
                                <i class="zmdi zmdi-comment-text"></i>
                                <p class="mb-0 text-muted">Comments (250)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<div class="row clearfix">
    <div class="col-lg-2 col-md-4 col-6">
        <div class="card info-box-2 hover-zoom-effect social-widget facebook-widget">
            <div class="icon"><i class="zmdi zmdi-facebook"></i></div>
            <div class="content">
                <div class="text">Like</div>
                <div class="number">123</div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-6">
        <div class="card info-box-2 hover-zoom-effect social-widget instagram-widget">
            <div class="icon"><i class="zmdi zmdi-instagram"></i></div>
            <div class="content">
                <div class="text">Followers</div>
                <div class="number">231</div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-6">
        <div class="card info-box-2 hover-zoom-effect social-widget twitter-widget">
            <div class="icon"><i class="zmdi zmdi-twitter"></i></div>
            <div class="content">
                <div class="text">Followers</div>
                <div class="number">31</div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-6">
        <div class="card info-box-2 hover-zoom-effect social-widget google-widget">
            <div class="icon"><i class="zmdi zmdi-google"></i></div>
            <div class="content">
                <div class="text">Like</div>
                <div class="number">254</div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-6">
        <div class="card info-box-2 hover-zoom-effect social-widget linkedin-widget">
            <div class="icon"><i class="zmdi zmdi-linkedin"></i></div>
            <div class="content">
                <div class="text">Followers</div>
                <div class="number">2510</div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-6">
        <div class="card info-box-2 hover-zoom-effect social-widget behance-widget">
            <div class="icon"><i class="zmdi zmdi-behance"></i></div>
            <div class="content">
                <div class="text">Project</div>
                <div class="number">121</div>
            </div>
        </div>
    </div>
</div>            
<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="card mcard_1">
            <div class="img">
                <img src="{{asset('tenant-admin/images/image-gallery/2.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="body">
                <div class="user">
                    <img src="{{asset('tenant-admin/images/sm/avatar1.jpg')}}" class="rounded-circle img-raised" alt="profile-image">
                    <h5 class="mt-3 mb-1">Eliana Smith</h5>
                    <span>Designer, Developer, Traveler</span>                                
                </div>
                <button class="btn btn-primary">FOLLOW</button>
                <div class="d-flex bd-highlight text-center mt-4">
                    <div class="flex-fill bd-highlight">
                        <h5 class="mb-0">128</h5>
                        <small>Article</small>
                    </div>
                    <div class="flex-fill bd-highlight">
                        <h5 class="mb-0">1,528</h5>
                        <small>Followers</small>
                    </div>
                    <div class="flex-fill bd-highlight">
                        <h5 class="mb-0">321</h5>
                        <small>Following</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card mcard_2">
            <div class="img">
                <img src="{{asset('tenant-admin/images/image-gallery/3.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="body">
                <div class="user">
                    <img src="{{asset('tenant-admin/images/sm/avatar4.jpg')}}" class="rounded-circle img-raised" alt="profile-image">
                    <div class="details">
                        <h6 class="mb-0">Eliana Smith</h6>
                        <small>44 Shirley Ave. West Chicago</small>
                    </div>
                </div>
                <span class="text-muted">Creative UI/UX designer from USA. Working this field since 2010. Completed 500+ UI projects.</span>
                <h6 class="mt-2"><a href="javascript:void(0);" title="">esmith.com</a></h6>
                <div class="d-flex bd-highlight mt-4">                                
                    <div class="flex-fill bd-highlight">
                        <h5 class="mb-0">128</h5>
                        <small>Project</small>
                    </div>
                    <div class="flex-fill bd-highlight">
                        <h5 class="mb-0">20</h5>
                        <small>Reviews</small>
                    </div>
                    <div class="flex-fill bd-highlight">
                        <h5 class="mb-0">321</h5>
                        <small>Following</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card mcard_3">
            <div class="header l-cyan">
                <h4 class="mt-4 mb-1">Michael Dorsey</h4>
                <span>UI/UX designer</span>
            </div>                        
            <div class="body">
                <div class="member-img">
                    <a href="profile.html"><img src="{{asset('tenant-admin/images/sm/avatar3.jpg')}}" class="rounded-circle img-raised" alt="profile-image"></a>
                </div>
                <ul class="social-links list-unstyled">
                    <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                    <li><a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                    <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                </ul>
                <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                <hr>
                <div class="row">
                    <div class="col-4">
                        <h5 class="mb-0">57</h5>
                        <small>Files</small>
                    </div>
                    <div class="col-4">
                        <h5 class="mb-0">12GB</h5>
                        <small>Used</small>
                    </div>
                    <div class="col-4">
                        <h5 class="mb-0">1,256$</h5>
                        <small>Spent</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="card small_mcard_1">
            <div class="user">
                <img src="{{asset('tenant-admin/images/sm/avatar1.jpg')}}" alt="profile-image">
                <div class="details">                                
                    <h6 class="mb-0 mt-2">Eliana Smith</h6>
                    <p class="mb-0"><small>UI/UX Designer</small></p>
                    <button class="btn btn-primary">FOLLOW</button>
                </div>
            </div>
            <div class="footer">
                <div class="progress-container progress-warning">
                    <span class="progress-badge">Satup your account</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            <span class="progress-value">60%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card small_mcard_1">
            <div class="user">
                <img src="{{asset('tenant-admin/images/sm/avatar2.jpg')}}" alt="profile-image">
                <div class="details">                                
                    <h6 class="mb-0 mt-2">Eliana Smith</h6>
                    <p class="mb-0"><small>Web Developer</small></p>
                    <button class="btn btn-primary">FOLLOW</button>
                </div>
            </div>
            <div class="footer">
                <div class="progress-container progress-success">
                    <span class="progress-badge">Satup your account</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                            <span class="progress-value">90%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card small_mcard_1">
            <div class="user">
                <img src="{{asset('tenant-admin/images/sm/avatar3.jpg')}}" alt="profile-image">
                <div class="details">                                
                    <h6 class="mb-0 mt-2">Eliana Smith</h6>
                    <p class="mb-0"><small>Angular</small></p>
                    <button class="btn btn-primary">FOLLOW</button>
                </div>
            </div>
            <div class="footer">
                <div class="progress-container progress-danger">
                    <span class="progress-badge">Satup your account</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 24%;">
                            <span class="progress-value">24%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Social</strong> Media</h2>
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
            <div class="table-responsive social_media_table">
                <table class="table table-hover c_table">
                    <thead>
                        <tr>
                            <th>Media</th>
                            <th>Name</th>
                            <th>Like</th>                                                                                
                            <th>Comments</th>
                            <th>Share</th>
                            <th>Members</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="social_icon linkedin"><i class="zmdi zmdi-linkedin"></i></span>
                            </td>
                            <td><span class="list-name">Linked In</span>
                                <span class="text-muted">Florida, United States</span>
                            </td>
                            <td>19K</td>
                            <td>14K</td>
                            <td>10K</td>
                            <td>
                                <span class="badge badge-success">2341</span>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="social_icon twitter-table"><i class="zmdi zmdi-twitter"></i></span>
                            </td>
                            <td><span class="list-name">Twitter</span>
                                <span class="text-muted">Arkansas, United States</span>
                            </td>
                            <td>7K</td>
                            <td>11K</td>
                            <td>21K</td>
                            <td>
                                <span class="badge badge-success">952</span>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="social_icon facebook"><i class="zmdi zmdi-facebook"></i></span>
                            </td>
                            <td><span class="list-name">Facebook</span>
                                <span class="text-muted">Illunois, United States</span>
                            </td>
                            <td>15K</td>
                            <td>18K</td>
                            <td>8K</td>
                            <td>
                                <span class="badge badge-success">6127</span>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="social_icon google"><i class="zmdi zmdi-google-plus"></i></span>
                            </td>
                            <td><span class="list-name">Google Plus</span>
                                <span class="text-muted">Arizona, United States</span>
                            </td>
                            <td>15K</td>
                            <td>18K</td>
                            <td>154</td>
                            <td>
                                <span class="badge badge-success">325</span>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="social_icon youtube"><i class="zmdi zmdi-youtube-play"></i></span>
                            </td>
                            <td><span class="list-name">YouTube</span>
                                <span class="text-muted">Alaska, United States</span>
                            </td>
                            <td>15K</td>
                            <td>18K</td>
                            <td>200</td>
                            <td>
                                <span class="badge badge-success">160</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>            
<div class="row clearfix">
    <div class="col-md-12 col-lg-6">
        <div class="card">
            <div class="header">
                <h2>Basic Carousel</h2>
            </div>
            <div class="body">
                <div id="demo1" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo1" data-slide-to="0" class="active"></li>
                        <li data-target="#demo1" data-slide-to="1" class=""></li>
                        <li data-target="#demo1" data-slide-to="2" class=""></li>
                    </ul>
    
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('tenant-admin/images/image-gallery/1.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('tenant-admin/images/image-gallery/2.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('tenant-admin/images/image-gallery/3.jpg')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-6">
        <div class="card">
            <div class="header">
                <h2>With Captions to Slides</h2>
            </div>
            <div class="body">
                <div id="demo3" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo3" data-slide-to="0" class="active"></li>
                        <li data-target="#demo3" data-slide-to="1" class=""></li>
                        <li data-target="#demo3" data-slide-to="2" class=""></li>
                    </ul>
    
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('tenant-admin/images/image-gallery/5.jpg')}}" class="img-fluid" alt="">
                            <div class="carousel-caption">
                                <h3>Chicago</h3>
                                <p>Thank you, Chicago!</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('tenant-admin/images/image-gallery/6.jpg')}}" class="img-fluid" alt="">
                            <div class="carousel-caption">
                                <h3>New York</h3>
                                <p>We love the Big Apple!</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('tenant-admin/images/image-gallery/12.jpg')}}" class="img-fluid" alt="">
                            <div class="carousel-caption">
                                <h3>Los Angeles</h3>
                                <p>We had such a great time in LA!</p>
                            </div>
                        </div>
                    </div>
    
                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#demo3" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
                    <a class="carousel-control-next" href="#demo3" data-slide="next"><span class="carousel-control-next-icon"></span></a>
                </div>
            </div>
        </div>
    </div>                
</div>
@stop
@section('page-script')
<script src="{{asset('tenant-admin/bundles/sparkline.bundle.js')}}"></script>
<script src="{{asset('tenant-admin/js/pages/charts/sparkline.js')}}"></script>
<script src="{{asset('tenant-admin/js/pages/todo-js.js')}}"></script>
@stop