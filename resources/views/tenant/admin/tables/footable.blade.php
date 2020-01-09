@extends('tenant.admin.layout.master')
@section('title', 'Footable')
@section('parentPageTitle', 'Tables')
@section('page-style')
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/footable-bootstrap/css/footable.bootstrap.min.css')}}"/>
<link rel="stylesheet" href="{{asset('tenant-admin/plugins/footable-bootstrap/css/footable.standalone.min.css')}}"/>
@stop
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-striped m-b-0">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th data-breakpoints="xs">Last Name</th>
                                <th data-breakpoints="xs">Job Title</th>
                                <th data-breakpoints="xs">BOB</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td><span class="tag tag-danger"> Suspended</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Garrett</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td><span class="tag tag-danger"> Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Cox</td>
                                <td>Author</td>
                                <td>San</td>
                                <td>66</td>
                                <td><span class="tag tag-default">Disabled</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Kelly</td>
                                <td>Brielle</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td><span class="tag tag-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td><span class="tag tag-success"> Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Brielle</td>
                                <td>Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td><span class="tag tag-default">Disabled</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San</td>
                                <td>59</td>
                                <td><span class="tag tag-danger">Suspended</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Specialist</td>
                                <td>Tokyo</td>
                                <td>55</td>
                                <td><span class="tag tag-success"> Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Colleen Hurst</td>
                                <td>Javascript Developer</td>
                                <td>San</td>
                                <td>39</td>
                                <td><span class="tag tag-default">Disabled</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>Software</td>
                                <td>Edinburgh</td>
                                <td>23</td>
                                <td><span class="tag tag-danger">Suspended</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Jena Gaines</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>30</td>
                                <td><span class="tag tag-success"> Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Flynn</td>
                                <td>Support Lead</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td><span class="tag tag-default">Disabled</span>
                            </td>
                            </tr>
                            <tr>
                                <td>Charde Marshall</td>
                                <td>Regional Director</td>
                                <td>San</td>
                                <td>36</td>
                                <td><span class="tag tag-danger">Suspended</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Haley Kennedy</td>
                                <td>Senior Marketing Designer</td>
                                <td>London</td>
                                <td>43</td>
                                <td><span class="tag tag-success"> Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Tatyana Fitzpatrick</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>19</td>
                                <td><span class="tag tag-default">Disabled</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Michael Silva</td>
                                <td>Marketing Designer</td>
                                <td>London</td>
                                <td>66</td>
                                <td><span class="tag tag-danger">Suspended</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Paul Byrd</td>
                                <td>(CFO)</td>
                                <td>New York</td>
                                <td>64</td>
                                <td><span class="tag tag-success"> Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Gloria Little</td>
                                <td>Systems Administrator</td>
                                <td>New York</td>
                                <td>59</td>
                                <td><span class="tag tag-default">Disabled</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Bradley Greer</td>
                                <td>Software</td>
                                <td>London</td>
                                <td>41</td>
                                <td><span class="tag tag-danger">Suspended</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('tenant-admin/bundles/footable.bundle.js')}}"></script>
<script src="{{asset('tenant-admin/js/pages/tables/footable.js')}}"></script>
@stop