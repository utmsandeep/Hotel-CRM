@extends('tenant.admin.layout.master')
@section('title', 'Blog Grid')
@section('parentPageTitle', 'Blog')
@section('content')
<div class="row">
    <div class="col-lg-6 col-md-12">
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
        </div>
    </div> 
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="blogitem mb-5">
                <div class="blogitem-image">
                    <a href="{{route('blog.detail')}}"><img src="{{asset('tenant-admin/images/image-gallery/1.jpg')}}" alt="blog image"></a>
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
                    <a href="{{route('blog.detail')}}"><img src="{{asset('tenant-admin/images/image-gallery/10.jpg')}}" alt="blog image"></a>
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
                    <a href="{{route('blog.detail')}}"><img src="{{asset('tenant-admin/images/image-gallery/2.jpg')}}" alt="blog image"></a>
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
    </div>
</div>
@stop