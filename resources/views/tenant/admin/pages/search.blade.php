@extends('tenant.admin.layout.master')
@section('title', 'Search Results')
@section('parentPageTitle', 'Pages')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="body">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="zmdi zmdi-search"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search...">
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover mb-0 c_table search_page">
                <tbody>
                    <tr>
                        <td class="max_ellipsis">
                            <h5 class="title"><a href="javascript:void(0);">6 Amazing Reason To Choose Vuejs For Web App Development</a></h5>
                            <a class="link" href="javascript:void(0);">https://thememakker.com/6-amazing-reason-to-choose-vuejs-for-web-app-development/</a>
                            <span class="details">From more than two decades, JavaScript has been encouraging businesses to design interactive web interfaces for their customers.</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="max_ellipsis">
                            <h5 class="title"><a href="javascript:void(0);">Why Ignoring Website Redesign Will Cost You Sales?</a></h5>
                            <a class="link" href="javascript:void(0);">https://thememakker.com/why-ignoring-website-redesign-will-cost-you-sales/</a>
                            <span class="details">A website, is an impression of your organization. With just a click of a mouse or a tap of a finger, an impression of your organization is instantly framed in a visitor’s mind.</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="max_ellipsis">
                            <h5 class="title"><a href="javascript:void(0);">How User Experience (UX) is important for eCommerce?</a></h5>
                            <a class="link" href="javascript:void(0);">https://thememakker.com/how-user-experience-ux-is-important-for-ecommerce/</a>
                            <span class="details">When you walk somewhere high street store expecting to find a specific product, but it’s not available in your size or your color, and you can’t find any suitable alternatives.</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="max_ellipsis">
                            <h5 class="title"><a href="javascript:void(0);">Buzzer – Ultimate Bootstrap 4 Admin and Ui Kit</a></h5>
                            <a class="link" href="javascript:void(0);">https://thememakker.com/template/buzzer-ultimate-bootstrap-4-admin-and-ui-kit/</a>
                            <span class="details">We’ve created this admin panel for everyone who wants to create any templates based on our ready components. Our mission is to deliver a user-friendly.</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="max_ellipsis">
                            <h5 class="title"><a href="javascript:void(0);">InfiniO – Bootstrap 4 Admin Dashboard</a></h5>
                            <a class="link" href="javascript:void(0);">https://thememakker.com/template/infinio-bootstrap-4-admin-dashboard/</a>
                            <span class="details">10+ Dashboard, 100+ Integrated Plugins, 300+ Pages, Light and Dark Menu, The Multistep Form, Timeline view, Summermnote Editor, Image Cropping Tool, Easy to access Menu Styles.</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-md-12">
        <ul class="pagination pagination-primary m-t-20">
            <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
        </ul>
    </div>
</div>
@stop