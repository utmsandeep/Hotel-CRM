@extends('tenant.admin.layout.master')
@section('title', 'Detail')
@section('parentPageTitle', 'Blog')
@section('content')
<div class="row clearfix">
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="blogitem mb-5">
                <div class="blogitem-image">
                    <a href="javascript:void(0);"><img src="{{asset('tenant-admin/images/image-gallery/5.jpg')}}" alt="blog image"></a>
                    <span class="blogitem-date">Monday, December 15, 2018</span>
                </div>
                <div class="blogitem-content">
                    <div class="blogitem-header">
                        <div class="blogitem-meta">
                            <span><i class="zmdi zmdi-account"></i>By <a href="javascript:void(0);">Michael</a></span>
                            <span><i class="zmdi zmdi-comments"></i><a href="javascript:void(0);">Comments(3)</a></span>
                        </div>
                        <div class="blogitem-share">
                            <ul class="list-unstyled mb-0">
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook-box"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter-box"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-linkedin-box"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <h5><a href="javascript:void(0);">The Most Advance Business Plan</a></h5>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem
                        of letters, as opposed to using 'Content here, content here', making it look like readable English. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                    <blockquote class="blockquote">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Aliquam vulputate tortor nec commodo ultricies lectus nisl facilisis enim trpis.</p>
                        <footer>by <a href="javascript:void(0);">ThemeMakker</a></footer>
                    </blockquote>
                    <p>The point of using Lorem of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incdidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullaco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaeca cupidatat non proident.</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2><strong>Comments</strong> (2)</h2>
            </div>
            <div class="">
                <ul class="comment-reply list-unstyled">
                    <li>
                        <div class="icon-box"><img class="img-fluid img-thumbnail" src="{{asset('tenant-admin/images/sm/avatar2.jpg')}}" alt="Awesome Image"></div>
                        <div class="text-box">
                            <h5>Kareem Todd</h5>
                            <span class="comment-date">Wednesday, October 17, 2018 at 4:00PM.</span>
                            <a href="javascript:void(0);" class="replybutton"><i class="zmdi zmdi-mail-reply-all"></i> Reply</a>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon-box"><img class="img-fluid img-thumbnail" src="{{asset('tenant-admin/images/sm/avatar1.jpg')}}" alt="Awesome Image"></div>
                        <div class="text-box">
                            <h5>Stillnot david</h5>
                            <span class="comment-date">Wednesday, October 17, 2018 at 4:00PM.</span>
                            <a href="javascript:void(0);" class="replybutton"><i class="zmdi zmdi-mail-reply-all"></i> Reply</a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                        </div>
                    </li>
                </ul>                                        
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2><strong>Leave</strong> a Comment</h2>
            </div>
            <div class="">
                <small>Your email address will not be published. Required fields are marked*</small>
                <form class="row comment-form mt-2">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                        </div>
                        <button type="submit" class="btn btn btn-primary">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="body search">
                <div class="input-group mb-0">
                    <input type="text" class="form-control" placeholder="Search...">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2"><i class="zmdi zmdi-search"></i></span>
                    </div>
                </div>
            </div>
        </div>                    
        <div class="card">
            <div class="header">
                <h2><strong>Categories</strong></h2>                        
            </div>
            <div class="body">
                <ul class="list-unstyled mb-0 widget-categories">
                    <li><a href="javascript:void(0);">Business Report</a></li>
                    <li><a href="javascript:void(0);">Business Growth</a></li>
                    <li><a href="javascript:void(0);">Business Strategy</a></li>
                    <li><a href="javascript:void(0);">Financial Advise</a></li>
                    <li><a href="javascript:void(0);">Creative Idea</a></li>
                    <li><a href="javascript:void(0);">Marketing</a></li>
                </ul>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2><strong>Recent</strong> Posts</h2>
            </div>
            <div class="body">
                <ul class="list-unstyled mb-0 widget-recentpost">
                    <li>
                        <a href="{{route('blog.detail')}}"><img src="{{asset('tenant-admin/images/image-gallery/1.jpg')}}" alt="blog thumbnail"></a>
                        <div class="recentpost-content">
                            <a href="{{route('blog.detail')}}">Fundamental analysis services</a>
                            <span>August 01, 2018</span>
                        </div>
                    </li>
                    <li>
                        <a href="{{route('blog.detail')}}"><img src="{{asset('tenant-admin/images/image-gallery/2.jpg')}}" alt="blog thumbnail"></a>
                        <div class="recentpost-content">
                            <a href="{{route('blog.detail')}}">Steps to a successful Business</a>
                            <span>November 01, 2018</span>
                        </div>
                    </li>
                    <li>
                        <a href="{{route('blog.detail')}}"><img src="{{asset('tenant-admin/images/image-gallery/3.jpg')}}" alt="blog thumbnail"></a>
                        <div class="recentpost-content">
                            <a href="{{route('blog.detail')}}">Development Progress Conference</a>
                            <span>December 01, 2018</span>
                        </div>
                    </li>
                    <li>
                        <a href="{{route('blog.detail')}}"><img src="{{asset('tenant-admin/images/image-gallery/12.jpg')}}" alt="blog thumbnail"></a>
                        <div class="recentpost-content">
                            <a href="{{route('blog.detail')}}">Steps to a successful Business</a>
                            <span>December 15, 2018</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="header">
                <h2><strong>Tag</strong> Clouds</h2>                        
            </div>
            <div class="body">
                <ul class="list-unstyled mb-0 tag-clouds">
                    <li><a href="javascript:void(0);" class="tag badge badge-default">Design</a></li>
                    <li><a href="javascript:void(0);" class="tag badge badge-success">Project</a></li>
                    <li><a href="javascript:void(0);" class="tag badge badge-info">Creative UX</a></li>
                    <li><a href="javascript:void(0);" class="tag badge badge-success">Wordpress</a></li>
                    <li><a href="javascript:void(0);" class="tag badge badge-warning">HTML5</a></li>
                </ul>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2><strong>Instagram</strong> Post</h2>                        
            </div>
            <div class="body">
                <ul class="list-unstyled mb-0 instagram-plugin">
                    <li><a href="javascript:void(0);"><img src="{{asset('tenant-admin/images/blog/05-img.jpg')}}" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="{{asset('tenant-admin/images/blog/06-img.jpg')}}" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="{{asset('tenant-admin/images/blog/07-img.jpg')}}" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="{{asset('tenant-admin/images/blog/08-img.jpg')}}" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="{{asset('tenant-admin/images/blog/09-img.jpg')}}" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="{{asset('tenant-admin/images/blog/10-img.jpg')}}" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="{{asset('tenant-admin/images/blog/11-img.jpg')}}" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="{{asset('tenant-admin/images/blog/12-img.jpg')}}" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="{{asset('tenant-admin/images/blog/13-img.jpg')}}" alt="image description"></a></li>
                </ul>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2><strong>Email</strong> Newsletter</h2>
            </div>
            <div class="body newsletter">                            
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter Email">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2"><i class="zmdi zmdi-mail-send"></i></span>
                    </div>
                </div>
                <small>Get our products/news earlier than others, let’s get in touch.</small>
            </div>
        </div>
    </div>
</div>
@stop