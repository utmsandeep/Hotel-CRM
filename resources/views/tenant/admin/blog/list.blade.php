@extends('tenant.admin.layout.master')
@section('title', 'Blog List')
@section('parentPageTitle', 'Blog')
@section('content')
<div class="row">
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="blogitem mb-5">
                <div class="blogitem-image">
                    <a href="{{route('blog.detail')}}"><img src="{{asset('tenant-admin/images/image-gallery/5.jpg')}}" alt="blog image"></a>
                    <span class="blogitem-date">Monday, December 15, 2018</span>
                </div>
                <div class="blogitem-content">
                    <div class="blogitem-header">
                        <div class="blogitem-meta">
                            <span><i class="zmdi zmdi-account"></i>By <a href="javascript:void(0);">Michael</a></span>
                            <span><i class="zmdi zmdi-comments"></i><a href="{{route('blog.detail')}}">Comments(3)</a></span>
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
                    <h5><a href="{{route('blog.detail')}}">The Most Advance Business Plan</a></h5>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem
                        of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                    <a href="{{route('blog.detail')}}" class="btn btn-info">Read More</a>
                </div>
            </div>
            <div class="blogitem mb-5">
                <div class="blogitem-image">
                    <a href="{{route('blog.detail')}}"><img src="{{asset('tenant-admin/images/image-gallery/7.jpg')}}" alt="blog image"></a>
                    <span class="blogitem-date">Monday, December 15, 2018</span>
                </div>
                <div class="blogitem-content">
                    <div class="blogitem-header">
                        <div class="blogitem-meta">
                            <span><i class="zmdi zmdi-account"></i>By <a href="javascript:void(0);">Michael</a></span>
                            <span><i class="zmdi zmdi-comments"></i><a href="{{route('blog.detail')}}">Comments(3)</a></span>
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
                    <h5><a href="{{route('blog.detail')}}">WTCR from 2018: new rules, more cars, more races</a></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incdidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullaco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="{{route('blog.detail')}}" class="btn btn-info">Read More</a>
                </div>
            </div>
            <div class="blogitem mb-5">
                <div class="blogitem-image">
                    <a href="{{route('blog.detail')}}"><img src="{{asset('tenant-admin/images/image-gallery/8.jpg')}}" alt="blog image"></a>
                    <span class="blogitem-date">Monday, December 15, 2018</span>
                </div>
                <div class="blogitem-content">
                    <div class="blogitem-header">
                        <div class="blogitem-meta">
                            <span><i class="zmdi zmdi-account"></i>By <a href="javascript:void(0);">Michael</a></span>
                            <span><i class="zmdi zmdi-comments"></i><a href="{{route('blog.detail')}}">Comments(13)</a></span>
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
                    <h5><a href="{{route('blog.detail')}}">All photographs are accurate. None of them is the truth</a></h5>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                        making it over 2000 years old. Richard McClintock.</p>
                    <a href="{{route('blog.detail')}}" class="btn btn-info">Read More</a>
                </div>
            </div>
            <div class="blogitem">
                <div class="blogitem-image">
                    <a href="{{route('blog.detail')}}"><img src="{{asset('tenant-admin/images/image-gallery/14.jpg')}}" alt="blog image"></a>
                    <span class="blogitem-date">Monday, December 15, 2018</span>
                </div>
                <div class="blogitem-content">
                    <div class="blogitem-header">
                        <div class="blogitem-meta">
                            <span><i class="zmdi zmdi-account"></i>By <a href="javascript:void(0);">Michael</a></span>
                            <span><i class="zmdi zmdi-comments"></i><a href="{{route('blog.detail')}}">Comments(13)</a></span>
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
                    <h5><a href="{{route('blog.detail')}}">All photographs are accurate. None of them is the truth</a></h5>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                        making it over 2000 years old. Richard McClintock.</p>
                    <a href="{{route('blog.detail')}}" class="btn btn-info">Read More</a>
                </div>
            </div>
        </div>
        <div class="card">
            <ul class="pagination pagination-primary">
                <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
            </ul>
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
                            <a href="#{{route('blog.detail')}}">Development Progress Conference</a>
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