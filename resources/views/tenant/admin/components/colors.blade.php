@extends('tenant.admin.layout.master')
@section('title', 'Colors')
@section('parentPageTitle', 'UI')
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Material</strong> Design Colors</h2>
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
                    <p> Taken by Google's Material Design Color page which link is <a href="https://material.google.com/style/color.html#color-color-palette" target="_blank" title="Google's Material Design Color">material.google.com/style/color.html#color-color-palette</a> </p>
                <div class="clearfix row">
                    <div class="col-sm-4 col-md-3 col-lg-3">
                        <div class="demo-color-box m-b-10 bg-red">
                            <div class="color-name">RED</div>
                            <div class="color-code">#ee2558</div>
                            <div class="color-class-name">bg-red</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-3">
                        <div class="demo-color-box m-b-10 bg-pink">
                            <div class="color-name">PINK</div>
                            <div class="color-code">#ff4dab</div>
                            <div class="color-class-name">bg-pink</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-3">
                        <div class="demo-color-box m-b-10 bg-purple">
                            <div class="color-name">PURPLE</div>
                            <div class="color-code">#b588ff</div>
                            <div class="color-class-name">bg-purple</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-3">
                        <div class="demo-color-box m-b-10 bg-deep-purple">
                            <div class="color-name">DEEP PURPLE</div>
                            <div class="color-code">#673AB7</div>
                            <div class="color-class-name">bg-deep-purple</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-3">
                        <div class="demo-color-box m-b-10 bg-indigo">
                            <div class="color-name">INDIGO</div>
                            <div class="color-code">#9988ff</div>
                            <div class="color-class-name">bg-indigo</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-3">
                        <div class="demo-color-box m-b-10 bg-blue">
                            <div class="color-name">BLUE</div>
                            <div class="color-code">#46b6fe</div>
                            <div class="color-class-name">bg-blue</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-3">
                        <div class="demo-color-box m-b-10 bg-light-blue">
                            <div class="color-name">LIGHT BLUE</div>
                            <div class="color-code">#03A9F4</div>
                            <div class="color-class-name">bg-light-blue</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-3">
                        <div class="demo-color-box m-b-10 bg-cyan">
                            <div class="color-name">CYAN</div>
                            <div class="color-code">#5CC5CD</div>
                            <div class="color-class-name">bg-cyan</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-3">
                        <div class="demo-color-box m-b-10 bg-teal">
                            <div class="color-name">TEAL</div>
                            <div class="color-code">#009688</div>
                            <div class="color-class-name">bg-teal</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-3">
                        <div class="demo-color-box m-b-10 bg-green">
                            <div class="color-name">GREEN</div>
                            <div class="color-code">#04BE5B</div>
                            <div class="color-class-name">bg-green</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-3">
                        <div class="demo-color-box m-b-10 bg-light-green">
                            <div class="color-name">LIGHT GREEN</div>
                            <div class="color-code">#8BC34A</div>
                            <div class="color-class-name">bg-light-green</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-3">
                        <div class="demo-color-box m-b-10 bg-lime">
                            <div class="color-name">LIME</div>
                            <div class="color-code">#82c885</div>
                            <div class="color-class-name">bg-lime</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-3">
                        <div class="demo-color-box m-b-10 bg-yellow">
                            <div class="color-name">YELLOW</div>
                            <div class="color-code">#fdd932</div>
                            <div class="color-class-name">bg-yellow</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-3">
                        <div class="demo-color-box m-b-10 bg-amber">
                            <div class="color-name">AMBER</div>
                            <div class="color-code">#f9bd65</div>
                            <div class="color-class-name">bg-amber</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-3">
                        <div class="demo-color-box m-b-10 bg-orange">
                            <div class="color-name">ORANGE</div>
                            <div class="color-code">#FF9948</div>
                            <div class="color-class-name">bg-orange</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-3">
                        <div class="demo-color-box m-b-10 bg-deep-orange">
                            <div class="color-name">DEEP ORANGE</div>
                            <div class="color-code">#FF5722</div>
                            <div class="color-class-name">bg-deep-orange</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-3">
                        <div class="demo-color-box m-b-10 bg-brown">
                            <div class="color-name">BROWN</div>
                            <div class="color-code">#795548</div>
                            <div class="color-class-name">bg-brown</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-3">
                        <div class="demo-color-box m-b-10 bg-grey">
                            <div class="color-name">GREY</div>
                            <div class="color-code">#9E9E9E</div>
                            <div class="color-class-name">bg-grey</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-3">
                        <div class="demo-color-box m-b-10 bg-blue-grey">
                            <div class="color-name">BLUE GREY</div>
                            <div class="color-code">#607D8B</div>
                            <div class="color-class-name">bg-blue-grey</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-3">
                        <div class="demo-color-box m-b-10 bg-black">
                            <div class="color-name">BLACK</div>
                            <div class="color-code">#000000</div>
                            <div class="color-class-name">bg-black</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop