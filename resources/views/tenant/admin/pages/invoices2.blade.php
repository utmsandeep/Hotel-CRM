@extends('tenant.admin.layout.master')
@section('title', 'Invoice V2')
@section('parentPageTitle', 'Pages')
@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="table-responsive">
            <table class="table table-hover c_table theme-color">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Item</th>
                        <th>Description</th>
                        <th>Functional Area</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td><strong><a href="javascript:void(0);">VBRK</a></strong></td>
                        <td>Billing Document: Header Data </td>
                        <td><a href="javascript:void(0);">SD - Billing</a></td>
                        <td>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-eye"></i></button>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-print"></i></button>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-email"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td><strong><a href="javascript:void(0);">BBAS</a></strong></td>
                        <td>Document Flow</td>
                        <td><a href="javascript:void(0);">SD - Basic Functions</a></td>
                        <td>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-eye"></i></button>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-print"></i></button>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-email"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td><strong><a href="javascript:void(0);">AKSS</a></strong></td>
                        <td>Document: Item Status</td>
                        <td><a href="javascript:void(0);">Logistics Execution - Transportation</a></td>
                        <td>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-eye"></i></button>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-print"></i></button>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-email"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td><strong><a href="javascript:void(0);">BKRT</a></strong></td>
                        <td>Customer Master <i>sales</i> Data</td>
                        <td><a href="javascript:void(0);">Logistics - Customer Master</a></td>
                        <td>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-eye"></i></button>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-print"></i></button>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-email"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>05</td>
                        <td><strong><a href="javascript:void(0);">VBRK</a></strong></td>
                        <td><i>sales</i> Order to BOM Link</td>
                        <td><a href="javascript:void(0);">SD - Material Maintenance</a></td>
                        <td>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-eye"></i></button>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-print"></i></button>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-email"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>06</td>
                        <td><strong><a href="javascript:void(0);">BBAS</a></strong></td>
                        <td>Organization Unit: Business Area Determination</td>
                        <td><a href="javascript:void(0);">SD - Basic Functions</a></td>
                        <td>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-eye"></i></button>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-print"></i></button>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-email"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>07</td>
                        <td><strong><a href="javascript:void(0);">AKSS</a></strong></td>
                        <td>Customer master credit management: Control area data</td>
                        <td><a href="javascript:void(0);">Logistics - Bills of Material</a></td>
                        <td>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-eye"></i></button>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-print"></i></button>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-email"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>08</td>
                        <td><strong><a href="javascript:void(0);">BKRT</a></strong></td>
                        <td>Packing: Handling Unit Item (Contents)</td>
                        <td><a href="javascript:void(0);">PP - Master Data</a></td>
                        <td>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-eye"></i></button>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-print"></i></button>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-email"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>09</td>
                        <td><strong><a href="javascript:void(0);">BKRT</a></strong></td>
                        <td>Customer Master <i>sales</i> Data</td>
                        <td><a href="javascript:void(0);">Logistics - Customer Master</a></td>
                        <td>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-eye"></i></button>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-print"></i></button>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-email"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td><strong><a href="javascript:void(0);">VBRK</a></strong></td>
                        <td><i>sales</i> Order to BOM Link</td>
                        <td><a href="javascript:void(0);">SD - Material Maintenance</a></td>
                        <td>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-eye"></i></button>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-print"></i></button>
                            <button class="btn btn-default btn-sm"><i class="zmdi zmdi-email"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
@stop