@extends('tenant.admin.layout.master')
@section('title', 'My Profile')
@section('content')
<div class="row clearfix">
    <div class="col-xl-4 col-lg-12 col-md-12">
        <div class="card mcard_3">
            <div class="body">
                <a href="javascript:void(0);"><img src="{{asset('tenant-admin/images/profile_av.jpg')}}" class="rounded-circle" alt="profile-image"></a>
                <h4 class="m-t-10">WrapTheme</h4>
                <div class="row">
                    <div class="col-12 mb-4">
                        <ul class="social-links list-unstyled">
                            <li><a href="https://www.facebook.com/thememakkerteam" title="facebook" ><i class="zmdi zmdi-facebook-box"></i></a></li>
                            <li><a href="https://twitter.com/thememakker" title="twitter"><i class="zmdi zmdi-twitter-box"></i></a></li>
                            <li><a href="https://www.instagram.com/thememakker/" title="instagram"><i class="zmdi zmdi-instagram"></i></a></li>
                        </ul>
                        <a href="https://themeforest.net/user/wrraptheme/portfolio" class="btn btn-danger">Our Portfolio</a>
                        <a href="https://thememakker.com/" class="btn btn-success">More Template</a>
                    </div>
                    <div class="col-4">        
                        <small>Experience</small>
                        <h5>6+ Year</h5>
                    </div>
                    <div class="col-4">        
                        <small>Hourly Rate</small>
                        <h5>18$</h5>
                    </div>
                    <div class="col-4">        
                        <small>Team</small>
                        <h5>25+</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="body">
                <small class="text-muted">Reviews: </small>
                <p>
                    <i class="text-warning zmdi zmdi-star"></i>
                    <i class="text-warning zmdi zmdi-star"></i>
                    <i class="text-warning zmdi zmdi-star"></i>
                    <i class="text-warning zmdi zmdi-star"></i>
                    <i class="text-warning zmdi zmdi-star-half"></i>
                </p>
                <hr>
                <small class="text-muted">Email address: </small>
                <p>wraptheme@gmail.com</p>
                <hr>
                <span>We offer development services in Angular, Laravel, WordPress, React and many other platforms.</span>
                <hr>
                <ul class="list-unstyled">
                    <li>
                        <div>Angular</div>
                        <div class="progress m-b-20">
                            <div class="progress-bar l-blush" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%"> <span class="sr-only">56% Complete</span> </div>
                        </div>
                    </li>
                    <li>
                        <div>Laravel</div>
                        <div class="progress m-b-20">
                            <div class="progress-bar l-purple " role="progressbar" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100" style="width: 91%"> <span class="sr-only">87% Complete</span> </div>
                        </div>
                    </li>
                    <li>
                        <div>Photoshop</div>
                        <div class="progress m-b-20">
                            <div class="progress-bar l-blue " role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%"> <span class="sr-only">62% Complete</span> </div>
                        </div>
                    </li>
                    <li>
                        <div>Wordpress</div>
                        <div class="progress m-b-20">
                            <div class="progress-bar l-green " role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100" style="width: 63%"> <span class="sr-only">87% Complete</span> </div>
                        </div>
                    </li>
                    <li>
                        <div>FrontEnd</div>
                        <div class="progress m-b-20">
                            <div class="progress-bar l-amber" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%"> <span class="sr-only">32% Complete</span> </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>                    
    </div>
    <div class="col-xl-8 col-lg-12 col-md-12">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        <a href="https://themeforest.net/item/lucid-angular-7-admin-template/23294743">
                            <img class="img-fluid img-thumbnail" src="http://www.wrraptheme.com//templates/preview/lucid-angular.png" alt="">
                        </a>
                        <h5 class="mt-3">Lucid - Angular 8 Admin Template</h5>
                        <p>Lucid Angular Admin Template is a popular open source WebApp Angular template for Angular admin dashboards and admin panels.</p>
                        <div class="d-flex justify-content-between">
                            <a href="https://themeforest.net/item/lucid-angular-7-admin-template/23294743" class="btn btn-info">Preview</a>
                            <a href="https://themeforest.net/item/lucid-angular-7-admin-template/23294743" class="btn btn-danger">Download Now</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <a href="https://themeforest.net/item/compass-the-ultimate-bootstrap-4-admin-dashboard/21202530">
                            <img class="img-fluid img-thumbnail" src="http://www.wrraptheme.com//templates/preview/compass.png" alt="">
                        </a>
                        <h5 class="mt-3">Compass Bundle -Bootstrap 4 Admin for Hospital RealEstate eCommerce</h5>
                        <p>Compass Admin is Material Design premium admin dashboard theme. It’s builded on popular Twitter Bootstrap4 framework.</p>
                        <div class="d-flex justify-content-between">
                            <a href="http://www.wrraptheme.com/templates/compass/marketing/" class="btn btn-info">Preview</a>
                            <a href="https://themeforest.net/item/compass-the-ultimate-bootstrap-4-admin-dashboard/21202530" class="btn btn-danger">Download Now</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <a href="https://themeforest.net/item/lucid-hospital-powerful-bootstrap-4-hospital-admin-template/22397928">
                            <img class="img-fluid img-thumbnail" src="http://www.wrraptheme.com//templates/preview/lucid-hospital.png" alt="">
                        </a>
                        <h5 class="mt-3">Lucid - Hospital Management Admin Dashboard Template</h5>
                        <p>It is really appropriate template for Doctors, Dentists, Hospitals, Health clinics, Surgeons and medical organization.</p>
                        <div class="d-flex justify-content-between">
                            <a href="http://www.wrraptheme.com/templates/lucid/hospital/marketing/" class="btn btn-info">Preview</a>
                            <a href="https://themeforest.net/item/lucid-hospital-powerful-bootstrap-4-hospital-admin-template/22397928" class="btn btn-danger">Download Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        <a href="https://themeforest.net/item/nexa-bootstrap4-material-design-premium-admin-dashboard/21122489">
                            <img class="img-fluid img-thumbnail" src="http://www.wrraptheme.com//templates/preview/nexa.png" alt="">
                        </a>
                        <h5 class="mt-3">Nexa - Bootstrap4 Material Design Premium Admin Dashboard</h5>
                        <p>Nexa Admin is Material Design premium admin dashboard theme. It’s builded on popular Twitter Bootstrap 4 framework.</p>
                        <div class="d-flex justify-content-between">
                            <a href="http://www.wrraptheme.com/templates/nexa/marketing/" class="btn btn-info">Preview</a>
                            <a href="https://themeforest.net/item/nexa-bootstrap4-material-design-premium-admin-dashboard/21122489" class="btn btn-danger">Download Now</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <a href="https://themeforest.net/item/hexabit-bootstrap-4x-admin-template-ui-kit/22611789">
                            <img class="img-fluid img-thumbnail" src="http://www.wrraptheme.com//templates/preview/hexabit.png" alt="">
                        </a>
                        <h5 class="mt-3">HexaBit - Bootstrap 4x Admin Template ui kit</h5>
                        <p>Easy and elegant interface which gives you an outstanding experience. Take a stab at HexaBit demos and find it out by yourself.</p>
                        <div class="d-flex justify-content-between">
                            <a href="https://themeforest.net/item/hexabit-bootstrap-4x-admin-template-ui-kit/22611789" class="btn btn-info">Preview</a>
                            <a href="https://themeforest.net/item/hexabit-bootstrap-4x-admin-template-ui-kit/22611789" class="btn btn-danger">Download Now</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <a href="https://themeforest.net/item/lucid-hr-and-project-management-admin-template/22308861">
                            <img class="img-fluid img-thumbnail" src="http://www.wrraptheme.com//templates/preview/lucid-hr.png" alt="">
                        </a>
                        <h5 class="mt-3">Lucid - HR and Project Management Admin Template</h5>
                        <p>It comes with extensive profiles for candidates, agents, teams of agents, jobs, professionals & companies.</p>
                        <div class="d-flex justify-content-between">
                            <a href="https://themeforest.net/item/lucid-hr-and-project-management-admin-template/22308861" class="btn btn-info">Preview</a>
                            <a href="https://themeforest.net/item/lucid-hr-and-project-management-admin-template/22308861" class="btn btn-danger">Download Now</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <a href="https://themeforest.net/item/square-the-ultimate-bootstrap-4-angular-5-admin-dashboard-ui-kit/21322297">
                            <img class="img-fluid img-thumbnail" src="http://www.wrraptheme.com//templates/preview/square.png" alt="">
                        </a>
                        <h5 class="mt-3">sQuare - Bootstrap 4 Admin Dashboard Template</h5>
                        <p>sQuare Admin is Material Design premium admin dashboard theme. It’s builded on popular Twitter Bootstrap4 framework.</p>
                        <div class="d-flex justify-content-between">
                            <a href="http://www.wrraptheme.com/templates/square/landing/" class="btn btn-info">Preview</a>
                            <a href="https://themeforest.net/item/square-the-ultimate-bootstrap-4-angular-5-admin-dashboard-ui-kit/21322297" class="btn btn-danger">Download Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop