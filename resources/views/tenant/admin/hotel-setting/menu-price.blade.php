@extends('tenant.admin.layout.master')
@section('title', 'Menu Price')
@section('parentPageTitle', 'Hotel Settings')
@section('page-style')
    <!-- <link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/> -->
    <link rel="stylesheet" href="{{asset('tenant-admin/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
    <link rel="stylesheet" href="{{asset('tenant-admin/plugins/dropify/css/dropify.min.css')}}"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

    <link rel="stylesheet" href="{{asset('tenant-admin/plugins/autocomplete/easy-autocomplete.themes.min.css')}}">
    <link rel="stylesheet" href="{{asset('tenant-admin/plugins/autocomplete/easy-autocomplete.themes.css')}}">
    <link rel="stylesheet" href="{{asset('tenant-admin/plugins/autocomplete/easy-autocomplete.min.css')}}">
    <link rel="stylesheet" href="{{asset('tenant-admin/plugins/autocomplete/easy-autocomplete.css')}}">



  <!--      <script src="{{asset('tenant-admin/plugins/autocomplete/easy-autocomplete.themes.min.css')}}"></script>
    <script src="{{asset('tenant-admin/plugins/autocomplete/easy-autocomplete.themes.css')}}"></script>
    <script src="{{asset('tenant-admin/plugins/autocomplete/easy-autocomplete.min.css')}}"></script>
    <script src="{{asset('tenant-admin/plugins/autocomplete/easy-autocomplete.css')}}"></script>
 -->




     <link rel="stylesheet" href="{{asset('tenant-admin/css/hotelsetting.css')}}"/>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
    .fourth {
   
    max-width: 25% !important;
    flex: 0 0 25%;
}
.multi-field {
    padding-top: 15px;
}
.custom-add {
    margin: 23px 0 14px 0 !important;
  
    background: #084d8e !important;
  
}

.ui-datepicker .ui-datepicker-header {
    
   
    background: #fff;
    color: #0c7ce6;
    border: 1px solid;
}
.ui-datepicker {
    
    border: 1px solid #c2def9 !important;
    border-radius:8px;
}

.ui-state-highlight, .ui-widget-content .ui-state-highlight{
    
    background: #fff !important;
    
    color: #0c7ce6 !important;
}


.ui-state-default, .ui-widget-content .ui-state-default {
   
    background: #c2def9b8;
    
    color: #0c7ce6;
    border: none;
    text-align: center;
    border-radius:5px;
}
.ui-widget-content {
   
    color: #0c7ce6;
}
.ui-datepicker .ui-datepicker-header {
   
    
    border: 1px solid #c2def9;
    border-radius: 7px;
    
}
a.ui-datepicker-prev.ui-corner-all:hover, a.ui-datepicker-next.ui-corner-all:hover {
    background: none;
    border: none;
}
    </style>
@stop
@section('content')
    <!-- Input -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">

            <form method="post" enctype="multipart/form-data" id="menupriceform" class="menu-price-form"  action="{{ route('tenant.admin.hotelSetting.prices' , ['hotel_code'=>$hotel_code]) }}">
                @csrf

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Menu</strong> Price Season</h2>
                            </div>
                            <div class="body">
                                @if(!empty($hotelsetting) && !is_null($hotelsetting->menu_price_season))
                                    <div class="multi-field-wrapper">
                                        <div class="multi-fields">
                                            @foreach(json_decode($hotelsetting->menu_price_season, true) as $item)
                                                <div class="row clearfix multi-field">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 fourth">
                                                        <div class="form-group">
                                                            <input  type="text" value="{{ $item['menu_name'] }}" name="menu_name[]" class="form-control menu_name" placeholder="Menu Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 fourth">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['price']}}" name="price[]" class="form-control" placeholder="Price Per Person" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-2 col-md-2 col-sm-2 fourth">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['res'] }}" name="res[]" class="form-control" placeholder="Non-Res" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 fourth">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['kids']}}" name="kids[]" class="form-control" placeholder="Kids Above 10" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-2 col-md-2 col-sm-2 fourth">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['start_date'] }}" name="start_date[]" class="form-control datepicker" placeholder="Start Date" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 fourth">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['end_date']}}" name="end_date[]" class="form-control datepicker" placeholder="End Date" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-2 col-md-2 col-sm-2 fourth">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['tax'] }}" name="tax[]" class="form-control" placeholder="Tax Included" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 fourth">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $item['override']}}" name="override[]" class="form-control" placeholder="Override" required>
                                                        </div>
                                                    </div>

                                                    <button type="button" class="custom-remove btn btn-raised btn-primary btn-round waves-effect m-l-20 remove-field">Remove</button>
                                                </div>
                                            @endforeach
                                        </div>
                                        <button type="button" class="custom-add btn btn-raised btn-primary btn-round waves-effect m-l-20 add-field">Add field</button>
                                    </div>
                                @else
                                    <div class="multi-field-wrapper">
                                        <div class="multi-fields">
                                            <div class="row clearfix multi-field">
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="menu_name[]" class="menu_name form-control" placeholder="Menu Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="price[]" class="form-control" placeholder="Price Per Person" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text"  name="res[]" class="form-control" placeholder="Non-Res" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text"  name="kids[]" class="form-control" placeholder="Kids Above 10" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text"  name="start_date[]" class="form-control datepicker" placeholder="Start Date" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="end_date[]" class="form-control datepicker" placeholder="End Date" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="tax[]" class="form-control" placeholder="Tax Included" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="override[]" class="form-control" placeholder="Override" required>
                                                    </div>
                                                </div>

                                                <button type="button" class="btn btn-raised btn-primary btn-round waves-effect m-l-20 remove-field">Remove</button>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-raised btn-primary btn-round waves-effect m-l-20 add-field">Add field</button>
                                    </div>
                                @endif
                            </div>
                            <div class="form-actions">
                                <div class="card-body">
                                    <button type="submit" class="form-submit btn btn-success">Save</button>
                                </div>
                            </div>
            </form>
        </div>
    </div>
@stop
@section('page-script')
    <script src="{{asset('tenant-admin/plugins/momentjs/moment.js')}}"></script>
    <script src="{{asset('tenant-admin/plugins/autocomplete/jquery.easy-autocomplete.js')}}"></script>
    <script src="{{asset('tenant-admin/plugins/autocomplete/jquery.easy-autocomplete.min.js')}}"></script>
 
    
    


    <!-- <script src="{{asset('tenant-admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script> -->
    <script src="{{asset('tenant-admin/js/pages/forms/basic-form-elements.js')}}"></script>
    <script src="{{asset('tenant-admin/plugins/dropify/js/dropify.min.js')}}"></script>
    <script src="{{asset('tenant-admin/js/pages/forms/dropify.js')}}"></script>
    <!-- <script src ="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script> -->
    <script src ="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
    <script src = "https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
        var counter = 1;
        $('.multi-field-wrapper').each(function() {
            counter++;
            var $wrapper = $('.multi-fields', this);
            $(".add-field", $(this)).click(function(e) {
                $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('');
               
            });
            $('.multi-field .remove-field', $wrapper).click(function() {
                if ($('.multi-field', $wrapper).length > 1)
                    $(this).parent('.multi-field').remove();
            });
        });

        jQuery(document).on('keyup' , '.changeable' , function(){
            console.log($(this).parent().next('div div .total'));
        });

        //  $( function() {
        //     $( ".datepicker" ).datepicker();
        // } );
        $('body').on('focus', '.datepicker', function() {
 $(this).removeClass('hasDatepicker').datepicker();
});





          // $( document ).ready(function(){
             
          //   $("#menupriceform").validate();
            // $("[name='menu_name[]']").each(function(){
            //     $(this).rules("add", {
            //     required: true,
                
            //     messages: {
            //         required: "This field is required"
            //     }
            //     });   
            // });

            //   var form = $('#menupriceform')
            //   $('.form-submit').on('click', function(e){
                  
                 
            //     //   $(form).validate({
            //     //       rules:{
            //     //           'menu_name[]': 'required',

            //     //       },
            //     //       message:{
            //     //         'menu_name[]': 'Enter your name'
                          

            //     //       }
            //     //   })


                  // $(".menu_name").each(function(e){
                     

                  //     console.log(this)
                    
                  //     $(this).rules('add',{
                  //         required:true,
                  //         messages: {
                  //             required: 'Name is required',
                  //         }
                  //     })
                  // })

                 

                  // if($('#menupriceform').validate().form()) {
                  //       console.log("validates");
                  //       $(this).submit();
                  //   } else {
                  //       console.log("does not validate");
                  //   }

                


              // })
        




    
var options = {

    url: "{{asset('tenant-admin/plugins/autocomplete/people.json')}}",
//     url: function(path){
// return cont;
// },
getValue: "name",
    // template: {
    //     type: "description",
    //     fields: {
    //         description: "email"
    //     }
    // },

    list: {
        match: {
            enabled: true
        }
    },
};
$(".menu_name").easyAutocomplete(options);



    </script>
@stop