@extends('tenant.admin.layout.master')
@section('title', 'Lead')
@section('parentPageTitle', 'Lead')
@section('create-new')

@stop

@section('page-style')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    h3.name-h {
    font-size: 21px;
    font-weight: 400;
}
h3.name-h span {
    font-size: 12px;
    padding-left: 10px;
}
.details-inner table tr td span {
    font-size: 14px;
}
tr.tabdiv td.al-rgt {
    color: #777;
    text-align: right;
}
tr.tabdiv td {
    padding: 7px 35px;
}
h4.hide-btn {
    margin: 0;
}
.hide-details {
    margin-top: 35px;
}
h4.hide-btn span {
    color: #458ac5;
    font-size: 12px;
    text-transform: uppercase;
    padding-right: 10px;
}
.to-be-collapse {
    display: none;
}
.rot{
    transform: rotateX(180deg);
}
td.icon span {
    font-size: 25px;
    color: #ddd;
}
td.icon {
    padding: 0 15px 0 5px;
}
.chat-text p {
    margin: 0;
    color: #000;
    font-size: 14px;
}
.chat-details span {
    color: #a2a2a2;
    font-size: 11px;
}
span.ago i {
    padding-right: 4px;
}
.chat-box table tr td {
   
    padding-bottom: 15px;
    padding-top: 15px;
}
.chat-box table tr {
   border-bottom: 1px solid #e3edf6;
}
td.chat {
    position: relative;
}
span.edit-delete {
    position: absolute;
    top: 10px;
    right: 0;
}
span.edit i {
    color: #0c7ce6;
}
span.edit-delete span i {
    border: 1px solid;
    border-radius: 50%;
    font-size: 13px;
    width: 25px;
    height: 25px;
    line-height: 25px;
    text-align: center;
}
span.edit i {
    margin-right: 10px;
}
span.edit-delete {
    display: none;
}
.chat-box table tr:hover .edit-delete {
    display: block;
}
h5.notes-h {
    margin: 11px 0;
    font-size: 17px;
    font-weight: 700;
    color: #000;
}
.chat-box table {
    width: 100%;
}
.chat-box {
    width: 50%;
}
.chat-type-inner .text-area {
    width: 100%;
    border: 13px solid #;
    border: 11px solid #e3edf6;
}
.chat-type {
    margin-top: 15px;
}
.text-area textarea {
    width: 100%;
    border: unset;
}
.text-area textarea {
    width: 100%;
    border: unset;
    height: 29px;
}
.edit-text {
    background: #e3edf6;
    padding: 11px;
    overflow: hidden;
}
.al-l span {
    font-size: 12px;
    color: #a2a2a2;
    padding-right: 7px;
}
.al-r {
    text-align: right;
}
.edit-text .save {
    font-size: 12px;
    padding: 5px 16px;
    border: 1px solid #ddd;
    background: #42a2eb;
    color: #fff;
}
.edit-text .cancel {
    font-size: 12px;
    border: 1px solid #ddd;
    padding: 5px 16px;
}
/*.edit-text div {
    width: 50%;
    float: left;
}*/
.text-area textarea:focus {
    outline: unset;
}
.edit-text {
    display: none;
}
.delete-ic{
  cursor: pointer;
}

.fullname .dropdown-menu.show {
    min-height: 40px !important;
    overflow: unset !important;
}
.fullname.bootstrap-select>.dropdown-toggle:after {
    right: 4px;
}
.fullname.dropup .dropdown-menu {
    
    bottom: 0%;
}
.fullname .dropdown-menu{
  top:0;
}

.fullname button.btn.dropdown-toggle.btn-simple {
    display: none;
}
.fullname .dropdown-menu {
    display: none;
}
.fullname{
  padding: 10px 6px;
    border-radius: 5px;

}
@media screen and (max-width:767px){
  .chat-box {
    width: 100%;
}
}
</style>

@stop

@section('content')
 <div class="lead-page">
      <div class="lead-container">
        <div class="lead-row">
          <!-- name and details -->
          <div class="name-and-detail">
            <div class="name-section">
              <h3 class="name-h">
                {{ $lead->group_contact }}
              </h3>
            </div>
            <div class="details-section">
              <div class="details-inner">
                <table>
                  <tr class="tabdiv">
                    <td class="al-rgt"><span>Lead Owner</span></td>
                    <td><span>
                    <form id="assign-form" method="post" action="{{ route('tenant.admin.lead.assign.changeLeadOwner' , ['hotel_code' => $hotel_code , 'lead_id'=>$lead->id]) }}">
                      @csrf
                      <select name="admin_id" class="fullname" id="fullname">
                        @foreach($hotel->hotelAdmins as $key => $admins)

                         <option @if($lead->leadOwners->first()->admin->id == $admins->admin->id) selected @endif value="{{ $admins->admin->id }}">{{ $admins->admin->firstname }} {{ $admins->admin->lastname }}</option>

                        @endforeach
                        <!-- <option value="1">{{ $lead->leadOwners->first()->admin->firstname }} {{ $lead->leadOwners->first()->admin->lastname }}</option>
                        <option value="2">Second name</option>
                        <option value="3">Third</option> -->
                      </select>
                      </form>
                    </span></td>
                  </tr>
                  
                  @foreach($request_data->user_details as $key => $value)
                    <tr class="tabdiv">
                      <td class="al-rgt"><span>{{ ucfirst(str_replace('_' , ' ' , $key)) }}</span></td>
                      <td><span>{{ $value }}</span></td>
                    </tr>
                  @endforeach
                  
                </table>
              </div>

              <div class="best-time"></div>
            </div>

            <!-- <div class="hide-details">
              <div class="hide-details-inner">
                <h4 class="hide-btn">
                  <span>Show details</span
                  ><span><i class="fa fa-angle-down colla-pse"></i></span>
                </h4>
                <div class="to-be-collapse">
                  to be show on hide
                </div>
              </div>
            </div> -->

                <!-- notes section  -->
                <div class="notes-section" id="notes">
                  <div class="notes-section-inner">
                    <div class="notes-head">
                      <h5 class="notes-h">Notes</h5>
                      <div class="chat-box-cont">
                        <div class="chat-box">
                          <table>
                            @if($lead->leadConversations)
                              @foreach($lead->leadConversations as $key => $conversation)
                                <tr>
                                  <td class="icon">
                                    <span
                                      ><i class="fa fa-user-circle" aria-hidden="true"></i
                                    ></span>
                                  </td>
                                  <td class="chat">
                                    <div class="chat-text">
                                      <p>{{ $conversation->text }}</p>
                                    </div>
                                    <div class="chat-details">
                                      <span class="lead-name"
                                        >Lead - <a href="javascript:void(0);">{{ $lead->group_contact }}</a></span
                                      >
                                      <span class="dot">.</span>
                                    <!--   <span><a href="#">Add Notes</a></span> -->
                                      <span class="dot">.</span>
                                      <span class="ago">
                                        <i class="fa fa-clock-o"></i>{{ $conversation->created_at }}<!-- 17 hrs. ago -->
                                      </span>
                                      <span class="by">by</span>
                                      <span class="person">{{ $conversation->admin->firstname }} {{ $conversation->admin->lastname }}</span>
                                      @if($conversation->admin_id == auth('admin')->user()->id)
                                        <span class="edit-delete">
                                          <span class="edit"
                                            ><i class="fa fa-pencil" aria-hidden="true"></i
                                          ></span>
                                          <span class="delete delete-ic" href="{{ route('tenant.admin.lead.deleteConversation' , ['hotel_code'=>$hotel_code , 'lead_id'=>$lead->id , 'conversation_id'=>$conversation->id])}}"
                                            ><i class="fa fa-trash"  aria-hidden="true"></i
                                          ></span>
                                        </span>
                                        <div class="chat-type" style="display:none;">
                                        <form method="post" class=".update-form" action="{{ route('tenant.admin.lead.updateConversation' , ['hotel_code'=>$hotel_code , 'lead_id'=>$lead->id , 'conversation_id'=>$conversation->id])}}">
                                          @csrf
                                          <input type="hidden" name="_method" value="put">                              
                                          <div class="chat-type-inner">
                                            <div class="text-area">
                                              <textarea name="text"  class="chat-text-area" placeholder="Add a note..." style="height: 50px;">{{ $conversation->text }}</textarea>
                                            </div>
                                            <div class="edit-text" style="display: block;">
                                              <div class="al-l">
                                              </div>
                                              <div class="al-r">
                                                <span><button type="button" class="cancel cancel-update">Cancel</button></span>
                                                <span><button type="submit" class="save">Save</button></span>
                                              </div>
                                            </div>
                                          </div>
                                        </form>
                                      </div>
                                      @endif
                                    </div>
                                  </td>
                                </tr>
                              @endforeach
                            @endif

                           <!--  <tr>
                              <td class="icon">
                                <span
                                  ><i class="fa fa-user-circle" aria-hidden="true"></i
                                ></span>
                              </td>
                              <td class="chat">
                                <div class="chat-text">
                                  <p>Lorem ipsum dummy text</p>
                                </div>
                                <div class="chat-details">
                                  <span class="lead-name"
                                    >Lead - <a href="#">Christopher</a></span
                                  >
                                  <span class="dot">.</span>
                                  <span><a href="#">Add Notes</a></span>
                                  <span class="dot">.</span>
                                  <span class="ago">
                                    <i class="fa fa-clock-o"></i>17 hrs. ago
                                  </span>
                                  <span class="by">by</span>
                                  <span class="person">John</span>
                                  <span class="edit-delete">
                                    <span class="edit"
                                      ><i class="fa fa-pencil" aria-hidden="true"></i
                                    ></span>
                                    <span class="delete"
                                      ><i class="fa fa-trash" aria-hidden="true"></i
                                    ></span>
                                  </span>
                                </div>
                              </td>
                            </tr>

                            <tr>
                              <td class="icon">
                                <span
                                  ><i class="fa fa-user-circle" aria-hidden="true"></i
                                ></span>
                              </td>
                              <td class="chat">
                                <div class="chat-text">
                                  <p>Lorem ipsum dummy text</p>
                                </div>
                                <div class="chat-details">
                                  <span class="lead-name"
                                    >Lead - <a href="#">Christopher</a></span
                                  >
                                  <span class="dot">.</span>
                                  <span><a href="#">Add Notes</a></span>
                                  <span class="dot">.</span>
                                  <span class="ago">
                                    <i class="fa fa-clock-o"></i>17 hrs. ago
                                  </span>
                                  <span class="by">by</span>
                                  <span class="person">Allen</span>
                                  <span class="edit-delete">
                                    <span class="edit"
                                      ><i class="fa fa-pencil" aria-hidden="true"></i
                                    ></span>
                                    <span class="delete"
                                      ><i class="fa fa-trash" aria-hidden="true"></i
                                    ></span>
                                  </span>
                                </div>
                              </td>
                            </tr> -->
                          </table>

                          <div class="chat-type">
                            <form method="post" id="store-form" action="{{ route('tenant.admin.lead.storeConversation' , ['hotel_code'=>$hotel_code , 'lead_id'=>$lead->id]) }}">
                              @csrf
                              <div class="chat-type-inner">
                                <div class="text-area">
                                  <textarea name="text" id="text" class="chat-text-area" placeholder="Add a note..."></textarea>
                                </div>
                                <div class="edit-text">
                                  <div class="al-l">
                                   <!--  <span
                                      ><i class="fa fa-paperclip" aria-hidden="true"></i> Attatch
                                      file</span
                                    >
                                    <span>Add a title</span> -->
                                  </div>
                                  <div class="al-r">
                                    <span><button type="button"  class="cancel">Cancel</button></span>
                                    <span><button type="submit" class="save">Save</button></span>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- notes section end here -->



          </div>
        </div>
      </div>
      <!-- name and details -->
      <form id="delete-form" method="post" action="">
        @csrf
        <input type="hidden" name="_method" value="delete">
      </form>
    </div>

        
@stop

@section('page-script')
<script>
    $( document ).ready(function() {
    $('.hide-btn').click(function(){
        $(this).siblings('div').toggle();
        $(this).children('span').find('.colla-pse').toggleClass("rot")
    })

    $('.chat-text-area').on('focus', function(){
      $(this).css('height', '50px')
      $(this).parent().siblings('div').css('display', 'block')
    })

    $(document).on('submit' , "#store-form" , function(e){
      if(jQuery.trim(jQuery('#text').val()) == '')
      {
        e.preventDefault();
      }
    });

    $(document).on('click' , '.delete-ic' , function(){
    if(confirm("Are you sure ?")){
      var form = $("#delete-form").attr('action' , $(this).attr('href'));
      $(form).submit();
    }
    });

    $(document).on('click' , '.edit' , function(e){
        $(this).parent().next('div').show();
    });
    $(document).on('click' , '.cancel-update' , function(e){
        $(this).parents('.chat-type').hide();
    });
$("html, body").animate({ 
      scrollTop : $('#notes').offset().top
     }, 1000);



     $('#fullname').on('change', function() {
      var user = $(this).children(':selected').text()
      if(confirm(`do you really want to assign this lead to ${user}.`)){
        $("#assign-form").submit();
      }
    });
    
});
 
    
    
  //$("html, body").animate({ scrollTop: $(document).height() }, 1000);

  
</script>


@stop