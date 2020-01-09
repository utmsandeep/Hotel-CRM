@extends('tenant.admin.layout.master')
@section('title', 'Data')
@section('parentPageTitle', 'Widgets')
@section('content')
<div class="row clearfix">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card w_data_1">
            <div class="body">
                <div class="w_icon indigo"><i class="zmdi zmdi-settings"></i></div>
                <h4 class="mt-3">45.8k</h4>
                <span class="text-muted">Total Views</span>
                <div class="w_description text-success">
                    <i class="zmdi zmdi-trending-up"></i>
                    <span>175.5%</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card w_data_1">
            <div class="body">
                <div class="w_icon pink"><i class="zmdi zmdi-bug"></i></div>
                <h4 class="mt-3">12.1k</h4>
                <span class="text-muted">Bugs Fixed</span>
                <div class="w_description text-success">
                    <i class="zmdi zmdi-trending-up"></i>
                    <span>15.5%</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card w_data_1">
            <div class="body">
                <div class="w_icon orange"><i class="zmdi zmdi-shopping-cart"></i></div>
                <h4 class="mt-3">53.8k</h4>
                <span class="text-muted">Total Sales</span>
                <div class="w_description text-success">
                    <i class="zmdi zmdi-trending-up"></i>
                    <span>25.5%</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card w_data_1">
            <div class="body">
                <div class="w_icon green"><i class="zmdi zmdi-headset-mic"></i></div>
                <h4 class="mt-3">17.2k</h4>
                <span class="text-muted">Support Cost</span>
                <div class="w_description text-danger">
                    <i class="zmdi zmdi-trending-down"></i>
                    <span>25.5%</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card w_data_1">
            <div class="body">
                <div class="w_icon cyan"><i class="zmdi zmdi-ticket-star"></i></div>
                <h4 class="mt-3">01.8k</h4>
                <span class="text-muted">Submitted Tickers</span>
                <div class="w_description text-success">
                    <i class="zmdi zmdi-trending-up"></i>
                    <span>95.5%</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card w_data_1">
            <div class="body">
                <div class="w_icon dark"><i class="zmdi zmdi-card"></i></div>
                <h4 class="mt-3">50M</h4>
                <span class="text-muted">Cash Deposits</span>
                <div class="w_description text-success">
                    <i class="zmdi zmdi-trending-up"></i>
                    <span>15.5%</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card w_data_1">
            <div class="body">
                <div class="w_icon blue"><i class="zmdi zmdi-dns"></i></div>
                <h4 class="mt-3">89</h4>
                <span class="text-muted">Server Allocation</span>
                <div class="w_description text-danger">
                    <i class="zmdi zmdi-trending-down"></i>
                    <span>56.5%</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card w_data_1">
            <div class="body">
                <div class="w_icon blush"><i class="zmdi zmdi-headset-mic"></i></div>
                <h4 class="mt-3">17.2k</h4>
                <span class="text-muted">Support Cost</span>
                <div class="w_description text-danger">
                    <i class="zmdi zmdi-trending-down"></i>
                    <span>25.5%</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card widget_2 big_icon traffic">
            <div class="body">
                <h6>Traffic</h6>
                <h2>20 <small class="info">of 1Tb</small></h2>
                <small>4% higher than last month</small>
                <div class="progress">
                    <div class="progress-bar l-amber" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card widget_2 big_icon sales">
            <div class="body">
                <h6>Sales</h6>
                <h2>12% <small class="info">of 100</small></h2>
                <small>6% higher than last month</small>
                <div class="progress">
                    <div class="progress-bar l-blue" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card widget_2 big_icon email">
            <div class="body">
                <h6>Email</h6>
                <h2>39 <small class="info">of 100</small></h2>
                <small>Total Registered email</small>
                <div class="progress">
                    <div class="progress-bar l-purple" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100" style="width: 39%;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card widget_2 big_icon domains">
            <div class="body">
                <h6>Domains</h6>
                <h2>8 <small class="info">of 10</small></h2>
                <small>Total Registered Domain</small>
                <div class="progress">
                    <div class="progress-bar l-green" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-3 col-md-4 col-sm-6 col-6 text-center">
        <div class="card">
            <div class="body">                            
                <input type="text" class="knob" value="42" data-linecap="round" data-width="100" data-height="100" data-thickness="0.08" data-fgColor="#00adef" readonly>
                <p>Page View</p>
                <div class="d-flex bd-highlight text-center mt-4">
                    <div class="flex-fill bd-highlight">
                        <small class="text-muted">Direct</small>
                        <h5 class="mb-0">254</h5>
                    </div>
                    <div class="flex-fill bd-highlight">
                        <small class="text-muted">Discovery</small>
                        <h5 class="mb-0">254</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-6 text-center">
        <div class="card">
            <div class="body">                            
                <input type="text" class="knob" value="81" data-linecap="round" data-width="100" data-height="100" data-thickness="0.08" data-fgColor="#ee2558" readonly>
                <p>Storage</p>
                <div class="d-flex bd-highlight text-center mt-4">
                    <div class="flex-fill bd-highlight">
                        <small class="text-muted">Internal</small>
                        <h5 class="mb-0">34GB</h5>
                    </div>
                    <div class="flex-fill bd-highlight">
                        <small class="text-muted">External</small>
                        <h5 class="mb-0">531GB</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-6 text-center">
        <div class="card">
            <div class="body">                            
                <input type="text" class="knob" value="62" data-linecap="round" data-width="100" data-height="100" data-thickness="0.08" data-fgColor="#8f78db" readonly>
                <p>Performance</p>
                <div class="d-flex bd-highlight text-center mt-4">
                    <div class="flex-fill bd-highlight">
                        <small class="text-muted">Search views</small>
                        <h5 class="mb-0">25<small>(-23%)</small></h5>
                    </div>
                    <div class="flex-fill bd-highlight">
                        <small class="text-muted">Maps views</small>
                        <h5 class="mb-0">12<small>(+150%)</small></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-6 text-center">
        <div class="card">
            <div class="body">                            
                <input type="text" class="knob" value="38" data-linecap="round" data-width="100" data-height="100" data-thickness="0.08" data-fgColor="#f67a82" readonly>
                <p>Last Post</p>
                <div class="d-flex bd-highlight text-center mt-4">
                    <div class="flex-fill bd-highlight">
                        <small class="text-muted">Views</small>
                        <h5 class="mb-0">15K</h5>
                    </div>
                    <div class="flex-fill bd-highlight">
                        <small class="text-muted">Clicks</small>
                        <h5 class="mb-0">2K</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card info-box-2">
            <div class="body bg-red">
                <div class="icon col-12">
                    <div class="chart chart-pie">30, 35, 25, 8</div>
                </div>
                <div class="content col-12">
                    <div class="text">USAGE</div>
                    <div class="number">98%</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card info-box-2">
            <div class="body bg-green">
                <div class="icon col-12 m-t-10">
                    <div class="chart chart-bar">6,4,8,6,8,10,5,6,7,9,5</div>
                </div>
                <div class="content col-12">
                    <div class="text">IMPRESSIONS</div>
                    <div class="number">457 512</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card info-box-2">
            <div class="body bg-blue">
                <div class="icon col-12 m-t-5">
                    <span class="chart chart-line">9,4,6,5,6,4,7,3</span>
                </div>
                <div class="content col-12">
                    <div class="text">TOTAL SALES</div>
                    <div class="number">$125 543</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card info-box-2">
            <div class="body bg-amber">
                <div class="icon col-12 m-t-10">
                    <div class="chart chart-bar">4,6,-3,-1,2,-2,4,3,6,7,-2,3</div>
                </div>
                <div class="content col-12">
                    <div class="text">CURRENCY</div>
                    <div class="number">$1 063</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <ul class="row profile_state list-unstyled">
                <li class="col-lg-3 col-md-3 col-6">
                    <div class="body">
                        <i class="zmdi zmdi-eye col-amber"></i>
                        <h4>2,365</h4>
                        <span>Post View</span>
                    </div>
                </li>
                <li class="col-lg-3 col-md-3 col-6">
                    <div class="body">
                        <i class="zmdi zmdi-thumb-up col-blue"></i>
                        <h4>365</h4>
                        <span>Likes</span>
                    </div>
                </li>
                <li class="col-lg-3 col-md-3 col-6">
                    <div class="body">
                        <i class="zmdi zmdi-comment-text col-red"></i>
                        <h4>65</h4>
                        <span>Comments</span>
                    </div>
                </li>
                <li class="col-lg-3 col-md-3 col-6">
                    <div class="body">
                        <i class="zmdi zmdi-account text-success"></i>
                        <h4>2,055</h4>
                        <span>Profile Views</span>
                    </div>
                </li>                      
            </ul>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body xl-blue">
                <h4 class="m-t-0 m-b-0">2,048</h4>
                <p class="m-b-0">Total Leads</p>                            
                <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                data-offset="90" data-width="100%" data-height="40px" data-line-Width="2" data-line-Color="#ffffff"
                data-fill-Color="transparent"> 7,6,7,8,5,9,8,6,7 </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body xl-purple">
                <h4 class="m-t-0 m-b-0">521</h4>
                <p class="m-b-0 ">Total Connections</p>
                <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                data-offset="90" data-width="100%" data-height="42px" data-line-Width="2" data-line-Color="#ffffff"
                data-fill-Color="transparent"> 6,5,7,4,5,3,8,6,5 </div>
            </div>                        
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body xl-green">
                <h4 class="m-t-0 m-b-0">73</h4>
                <p class="m-b-0 ">Articles</p>
                <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                data-offset="90" data-width="100%" data-height="45px" data-line-Width="2" data-line-Color="#ffffff"
                data-fill-Color="transparent"> 8,7,7,5,5,4,8,7,5 </div>
            </div>                        
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body xl-pink">
                <h4 class="m-t-0 m-b-0">15</h4>
                <p class="m-b-0">Categories</p>
                <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                data-offset="90" data-width="100%" data-height="45px" data-line-Width="2" data-line-Color="#ffffff"
                data-fill-Color="transparent"> 7,6,7,8,5,9,8,6,7 </div>
            </div>                        
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body text-center">
                <div class="sparkline m-b-20" data-type="bar" data-width="97%" data-height="40px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#00ced1">1,2,2,3,3,4,4,5,5,6,6,5,5,4,4,3,3,2,2,1</div>
                <h3 class="m-b-0">457 512</h3>
                <small class="displayblock">47% Average <i class="zmdi zmdi-trending-up"></i></small>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body text-center">
                <div class="sparkline m-b-20" data-type="bar" data-width="97%" data-height="40px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#e4d354">1,2,2,3,3,4,4,5,5,6,6,5,5,4,4,3,3,2,2,1</div>
                <h3 class="m-b-0">236 512</h3>
                <small class="displayblock">13% Average <i class="zmdi zmdi-trending-down"></i></small>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body text-center">
                <div class="sparkline m-b-20" data-type="bar" data-width="97%" data-height="40px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#7cb5ec">1,2,3,4,5,4,3,2,1,2,3,4,5,6,7,8,7,6,5,4</div>
                <h3 class="m-b-0">236 512</h3>
                <small class="displayblock">47% Average <i class="zmdi zmdi-trending-up"></i></small>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body text-center">
                <div class="sparkline m-b-20" data-type="bar" data-width="97%" data-height="40px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#f15c80">8,7,6,5,4,3,2,2,3,4,5,6,7,8,7,6,5,4</div>
                <h3 class="m-b-0">236 512</h3>
                <small class="displayblock">47% Average <i class="zmdi zmdi-trending-up"></i></small>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="card tasks_report">
            <div class="header">
                <h2><strong>Total</strong> Revenue</h2>                        
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right slideUp">
                            <li><a href="javascript:void(0);">2019 Year</a></li>
                            <li><a href="javascript:void(0);">2016 Year</a></li>
                            <li><a href="javascript:void(0);">2015 Year</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body text-center">
                <h4 class="m-t-0">Total Sale</h4>
                <h6 class="m-b-20">2,45,124</h6>
                <input type="text" class="knob dial1" value="66" data-width="140" data-height="140" data-thickness="0.1" data-fgColor="#00ced1" readonly>
                <h6 class="m-t-30">Satisfaction Rate</h6>
                <small class="displayblock">47% Average <i class="zmdi zmdi-trending-up"></i></small>
                <div class="sparkline m-t-20" data-type="bar" data-width="97%" data-height="45px" data-bar-Width="2" data-bar-Spacing="8" data-bar-Color="#00ced1">3,2,6,5,9,8,7,8,4,5,1,2,9,5,1,3,5,7,4,6</div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="header">
                <h2><strong>Total</strong> Income</h2>                        
            </div>
            <div class="body">
                <h3 class="m-b-0">47,012</h3>
                <small class="displayblock">23% Average <i class="zmdi zmdi-trending-up"></i></small>
                <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(63, 81, 181)" data-highlight-Line-Color="#222"
                data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(63, 81, 181)" data-spot-Color="rgb(63, 81, 181, 0.7)"
                data-offset="90" data-width="100%" data-height="60px" data-line-Width="1" data-line-Color="rgb(63, 81, 181, 0.7)"
                data-fill-Color="rgba(221,94,137, 0.2)"> 1,2,3,1,4,3,6,4,4,1 </div>                        
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2><strong>Total</strong> Orders</h2>                        
            </div>
            <div class="body">
                <h3 class="m-b-0">512</h3>
                <small class="displayblock">18% Average <i class="zmdi zmdi-trending-down"></i></small>
                <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(63, 81, 181)" data-highlight-Line-Color="#222"
                data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(120, 184, 62)" data-spot-Color="rgb(63, 81, 181, 0.7)"
                data-offset="90" data-width="100%" data-height="60px" data-line-Width="1" data-line-Color="rgb(63, 81, 181, 0.7)"
                data-fill-Color="rgba(128,133,233, 0.2)"> 4,5,2,8,4,8,7,4,8,5</div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="header">
                <h2><strong>Total</strong> Visitor</h2>                        
            </div>
            <div class="body">
                <h3 class="m-b-0">1,612</h3>
                <small class="displayblock">13% Average <i class="zmdi zmdi-trending-up"></i></small>
                <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(63, 81, 181)" data-highlight-Line-Color="#222"
                data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(120, 184, 62)" data-spot-Color="rgb(63, 81, 181, 0.7)"
                data-offset="90" data-width="100%" data-height="60px" data-line-Width="1" data-line-Color="rgb(63, 81, 181, 0.7)"
                data-fill-Color="rgba(44,168,255, 0.2)">1,5,9,3,5,7,8,5,2,3,5,7</div>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2><strong>Total</strong> Active Users</h2>                        
            </div>
            <div class="body">
                <h3 class="m-b-0">721</h3>
                <small class="displayblock">17% Average <i class="zmdi zmdi-trending-up"></i></small>
                <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(63, 81, 181)" data-highlight-Line-Color="#222"
                data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(120, 184, 62)" data-spot-Color="rgb(63, 81, 181, 0.7)"
                data-offset="90" data-width="100%" data-height="60px" data-line-Width="1" data-line-Color="rgb(63, 81, 181, 0.7)"
                data-fill-Color="rgba(0,0,0, 0.2)">8,6,4,2,3,6,5,7,9,8,5,2</div>
            </div>
        </div>
    </div>                
</div>
@stop
@section('page-script')
<script src="{{asset('tenant-admin/bundles/countTo.bundle.js')}}"></script>
<script src="{{asset('tenant-admin/bundles/knob.bundle.js')}}"></script>
<script src="{{asset('tenant-admin/bundles/sparkline.bundle.js')}}"></script>
<script src="{{asset('tenant-admin/js/pages/widgets/infobox/infobox-1.js')}}"></script>
<script src="{{asset('tenant-admin/js/pages/charts/jquery-knob.js')}}"></script>
<script src="{{asset('tenant-admin/js/pages/charts/sparkline.js')}}"></script>
@stop