@extends('tenant.admin.layout.master')
@section('title', 'Invoices')
@section('parentPageTitle', 'Pages')
@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <h5><strong>Order ID: </strong> #123456</h5>
                <div class="row">                                
                    <div class="col-md-6 col-sm-6">
                        <address>
                            <strong>ThemeMakker Inc.</strong><br>
                            795 Folsom Ave, Suite 546 San Francisco, CA 54656<br>
                            <abbr title="Phone">P:</abbr> (123) 456-34636
                        </address>
                    </div>
                    <div class="col-md-6 col-sm-6 text-right">
                        <p class="mb-0"><strong>Order Date: </strong> Dec 02, 2019</p>
                        <p class="mb-0"><strong>Order Status: </strong> <span class="badge badge-success">Success</span></p>                                    
                    </div>
                </div>
            </div>                            
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover c_table theme-color">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th width="60px">Item</th>
                                    <th></th>
                                    <th class="hidden-sm-down">Description</th>
                                    <th>Quantity</th>
                                    <th class="hidden-sm-down">Unit Cost</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img src="{{asset('tenant-admin/images/ecommerce/1.png')}}" width="40" alt="Product img"></td>
                                    <td>Simple Black Clock</td>
                                    <td class="hidden-sm-down">Lorem ipsum dolor sit amet.</td>
                                    <td>1</td>
                                    <td class="hidden-sm-down">$380</td>
                                    <td>$380</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img src="{{asset('tenant-admin/images/ecommerce/2.png')}}" width="40" alt="Product img"></td>
                                    <td>Brone Candle</td>
                                    <td class="hidden-sm-down">There are many variations of passages of Lorem Ipsum</td>
                                    <td>5</td>
                                    <td class="hidden-sm-down">$50</td>
                                    <td>$250</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><img src="{{asset('tenant-admin/images/ecommerce/3.png')}}" width="40" alt="Product img"></td>
                                    <td>Wood Simple Clock</td>
                                    <td class="hidden-sm-down">Lorem ipsum dolor sit amet.</td>
                                    <td>2</td>
                                    <td class="hidden-sm-down">$500</td>
                                    <td>$1000</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><img src="{{asset('tenant-admin/images/ecommerce/4.png')}}" width="40" alt="Product img"></td>
                                    <td>Unero Small Bag</td>
                                    <td class="hidden-sm-down">Contrary to popular belief, Lorem Ipsum is not simply random text</td>
                                    <td>3</td>
                                    <td class="hidden-sm-down">$300</td>
                                    <td>$900</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="body">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Note</h5>
                        <p>Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <ul class="list-unstyled">
                            <li><strong>Sub-Total:-</strong> 2930.00</li>
                            <li class="text-danger"><strong>Discout:-</strong> 12.9%</li>
                            <li><strong>VAT:-</strong> 12.9%</li>
                        </ul>                                    
                        <h3 class="mb-0 text-success">USD 2930.00</h3>
                        <a href="javascript:void(0);" class="btn btn-info"><i class="zmdi zmdi-print"></i></a>
                        <a href="javascript:void(0);" class="btn btn-primary">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
