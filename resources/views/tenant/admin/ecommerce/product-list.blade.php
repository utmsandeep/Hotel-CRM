@extends('tenant.admin.layout.master')
@section('title', 'Product List')
@section('parentPageTitle', 'eCommerce')
@section('page-style')
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/footable-bootstrap/css/footable.bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/footable-bootstrap/css/footable.standalone.min.css')}}">
@stop
@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-hover product_item_list c_table theme-color mb-0">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th data-breakpoints="sm xs">Detail</th>
                            <th data-breakpoints="xs">Amount</th>
                            <th data-breakpoints="xs md">Stock</th>
                            <th data-breakpoints="sm xs md">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="{{asset('tenant-admin/images/ecommerce/1.png')}}" width="48" alt="Product img"></td>
                            <td><h5>Simple Black Clock</h5></td>
                            <td><span class="text-muted">randomised words even slightly believable</span></td>
                            <td>$16.00</td>
                            <td><span class="col-green">In Stock</span></td>
                            <td>
                                <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="{{asset('tenant-admin/images/ecommerce/10.png')}}" width="48" alt="Product img"></td>
                            <td><h5>Brone Candle</h5></td>
                            <td><span class="text-muted">It is a long established  will be distracted</span></td>
                            <td>$15.00</td>
                            <td><span class="col-amber">Low Stock</span></td>
                            <td>
                                <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="{{asset('tenant-admin/images/ecommerce/11.png')}}" width="48" alt="Product img"></td>
                            <td><h5>Wood Simple Clock</h5></td>
                            <td><span class="text-muted">There passages of Lorem Ipsum available</span></td>
                            <td>$16.00</td>
                            <td><span class="col-amber">Low Stock</span></td>
                            <td>
                                <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="{{asset('tenant-admin/images/ecommerce/5.png')}}" width="48" alt="Product img"></td>
                            <td><h5>Unero Small Bag</h5></td>
                            <td><span class="text-muted">It is a long established fact that a distracted</span></td>
                            <td>$23.00</td>
                            <td><span class="col-red">Out Of Stock</span></td>
                            <td>
                                <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="{{asset('tenant-admin/images/ecommerce/6.png')}}" width="48" alt="Product img"></td>
                            <td><h5>Simple Black Clock</h5></td>
                            <td><span class="text-muted">Contrary to popular belief, simply random text</span></td>
                            <td>$16.00</td>
                            <td><span class="col-green">In Stock</span></td>
                            <td>
                                <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="{{asset('tenant-admin/images/ecommerce/2.png')}}" width="48" alt="Product img"></td>
                            <td><h5>Brone Lamp Glasses</h5></td>
                            <td><span class="text-muted">All the Lorem Ipsum generators on predefined chunks</span></td>
                            <td>$12.00</td>
                            <td><span class="col-green">In Stock</span></td>
                            <td>
                                <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="{{asset('tenant-admin/images/ecommerce/3.png')}}" width="48" alt="Product img"></td>
                            <td><h5>Simple Black Clock</h5></td>
                            <td><span class="text-muted">established fact that a be distracted</span></td>
                            <td>$22.00</td>
                            <td><span class="col-red">Out Of Stock</span></td>
                            <td>
                                <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                            </td>
                        </tr>        
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="body">                            
                <ul class="pagination pagination-primary m-b-0">
                    <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="zmdi zmdi-arrow-left"></i></a></li>
                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="zmdi zmdi-arrow-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('tenant-admin/bundles/footable.bundle.js')}}"></script>
<script src="{{asset('tenant-admin/js/pages/tables/footable.js')}}"></script>
@stop