<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="{{route('dashboard.index')}}"><img src="{{ asset('tenant-admin/images/logo.svg') }}" width="25" alt="Aero"><span class="m-l-10">Aero</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="#"><img src="{{ asset('tenant-admin/images/profile_av.jpg') }}" alt="User"></a></div>
                    <div class="detail">
                        <h4>{{ auth('admin')->user()->firstname }}</h4>
                        <small>{{ auth('admin')->user()->adminRole->name }}</small>
                    </div>
                </div>
            </li>
           
            
            @if(!isset($hotel_code))
            <li class="{{ Request::segment(1) === 'dashboard' ? 'active open' : null }}"><a href="{{route('dashboard.index')}}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>

            <li class="{{ Request::segment(1) === 'my-profile' ? 'active open' : null }}"><a href="{{route('tenant.admin.profile.index')}}"><i class="zmdi zmdi-account"></i><span>My Profile</span></a></li>

            @if(auth('admin')->user()->role == 4)
            <li class="{{ Request::segment(2) === 'staff' || Request::segment(2) === 'roles' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-apps"></i> <span>Staff & Roles</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(3) === 'staff-list' ? 'active' : null }}"><a href="{{route('tenant.admin.staff.index')}}">Staff</a></li>
                </ul>
            </li>
            <li class="{{ Request::segment(2) === 'hotels' ? 'active open' : null }}">
                <a href="#Project" class="menu-toggle"><i class="zmdi zmdi-assignment"></i> <span>Hotels</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(3) === 'hotel-list' ? 'active' : null }}"><a href="{{ route('tenant.admin.hotel.list') }}">Hotel List</a></li>
                    <li class="{{ Request::segment(3) === 'contract-index' ? 'active' : null }}"><a href="{{ route('tenant.admin.hotel.contract.index') }}">Hotel Contracts</a></li>
                </ul>
            </li>
            <li class="{{ Request::segment(1) === 'contract-content' ? 'active open' : null }}">
                <a href="{{route('tenant.admin.hotel.contract.content.store')}}"><i class="zmdi zmdi-account"></i><span>Contract Content</span>
                </a>
            </li>
            <li class="{{ Request::segment(1) === 'pages' ? 'active open open_top' : null }}">
                <a href="#Pages" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Hotel Pages</span></a>
                <ul class="ml-menu">
                </ul>
            </li>
            
            @endif

            <!-- <li class="{{ Request::segment(1) === 'app' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-apps"></i> <span>Messages</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'inbox' ? 'active' : null }}"><a href="{{route('app.inbox')}}">Inbox</a></li>
                </ul>
            </li> -->
            @endif

            @if(isset($hotel_code))
            <li class="{{ Request::segment(4) === 'hotel-setting' ? 'active open' : null }}">
                <a href="#Project" class="menu-toggle"><i class="zmdi zmdi-assignment"></i> <span>Hotel Settings</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(5) === 'upload-logo' ? 'active' : null }}"><a href="{{ route('tenant.admin.hotelSetting.upload' , ['hotel_code'=>$hotel_code]) }}">Hotel Pictures</a></li>
                    <li class="{{ Request::segment(5) === 'policy' ? 'active' : null }}"><a href="{{ route('tenant.admin.hotelSetting.policy' ,  ['hotel_code'=>$hotel_code]) }}">Policies</a></li>
                    <li class="{{ Request::segment(5) === 'seating-style' ? 'active' : null }}"><a href="{{ route('tenant.admin.hotelSetting.style' ,  ['hotel_code'=>$hotel_code]) }}">Seating Style</a></li>
                    <li class="{{ Request::segment(5) === 'room-type' ? 'active' : null }}"><a href="{{ route('tenant.admin.hotelSetting.type' ,  ['hotel_code'=>$hotel_code]) }}">Types of Rooms</a></li>
                    <li class="{{ Request::segment(5) === 'event-booker' ? 'active' : null }}"><a href="{{ route('tenant.admin.hotelSetting.eventbookerview' ,  ['hotel_code'=>$hotel_code]) }}">Event Booker Type</a></li>
                    <li class="{{ Request::segment(5) === 'event-view' ? 'active' : null }}"><a href="{{ route('tenant.admin.hotelSetting.eventview' ,  ['hotel_code'=>$hotel_code]) }}">Event Type</a></li>

                    <!-- <li class="{{ Request::segment(5) === 'profile-pic' ? 'active' : null }}"><a href="{{ route('tenant.admin.hotelSetting.picture' , ['hotel_code'=>$hotel_code]) }}">Hotel Profile Picture</a></li> -->
                    <li class="{{ Request::segment(5) === 'hotel-near' ? 'active' : null }}"><a href="{{ route('tenant.admin.hotelSetting.nearby' , ['hotel_code'=>$hotel_code]) }}">Hotel Near By</a></li>
                    <!-- <li class="{{ Request::segment(5) === 'cancel-policy' ? 'active' : null }}"><a href="{{ route('tenant.admin.hotelSetting.cancel' , ['hotel_code'=>$hotel_code]) }}">Cancellation Policy</a></li>
                    <li class="{{ Request::segment(5) === 'no-show-policy' ? 'active' : null }}"><a href="{{ route('tenant.admin.hotelSetting.none' , ['hotel_code'=>$hotel_code]) }}">No Show Policy</a></li>
                    <li class="{{ Request::segment(5) === 'kids-policy' ? 'active' : null }}"><a href="{{ route('tenant.admin.hotelSetting.kids' , ['hotel_code'=>$hotel_code]) }}">Kids Policy</a></li>
                    <li class="{{ Request::segment(5) === 'resident-policy' ? 'active' : null }}"><a href="{{ route('tenant.admin.hotelSetting.resident' , ['hotel_code'=>$hotel_code]) }}">Non-Residential Policy</a></li>
                    <li class="{{ Request::segment(5) === 'beverages-policy' ? 'active' : null }}"><a href="{{ route('tenant.admin.hotelSetting.beverages' , ['hotel_code'=>$hotel_code]) }}">Beverages Policy</a></li> -->
                    <li class="{{ Request::segment(5) === 'banquet-list' ? 'active' : null }}"><a href="{{ route('tenant.admin.hotelSetting.listing' , ['hotel_code'=>$hotel_code]) }}">Banquet Listing</a></li>
                    <li class="{{ Request::segment(5) === 'import-hotel-settings' ? 'active' : null }}"><a href="{{ route('tenant.admin.hotelSetting.importHotelSettings' , ['hotel_code'=>$hotel_code]) }}">Import Settings</a></li>
                    <li class="{{ Request::segment(5) === 'applicable-taxes' ? 'active' : null }}"><a href="{{ route('tenant.admin.hotelSetting.showtaxes' ,  ['hotel_code'=>$hotel_code]) }}">Applicable Taxes</a></li>

                    <li class="{{ Request::segment(5) === 'menu-list' ? 'active' : null }}"><a href="{{ route('tenant.admin.hotelSetting.showlist' ,  ['hotel_code'=>$hotel_code]) }}">Menu List</a></li>
                    <li class="{{ Request::segment(5) === 'menu-type' ? 'active' : null }}"><a href="{{ route('tenant.admin.hotelSetting.showmenu' ,  ['hotel_code'=>$hotel_code]) }}">Menu Types</a></li>
                    <li class="{{ Request::segment(5) === 'menu-price' ? 'active' : null }}"><a href="{{ route('tenant.admin.hotelSetting.pricemenu' ,  ['hotel_code'=>$hotel_code]) }}">Menu Price Season</a></li>
                    <li class="{{ Request::segment(5) === 'account-detail' ? 'active' : null }}"><a href="{{ route('tenant.admin.hotelSetting.showdetail' ,  ['hotel_code'=>$hotel_code]) }}">Bank Account Detail</a></li>

                </ul>
            </li>
             <li class="{{ Request::segment(4) === 'lead' ? 'active open' : null }}"><a href="{{route('tenant.admin.lead.listing', ['hotel_code'=>$hotel_code])}}"><i class="zmdi zmdi-account"></i><span>Leads</span></a></li>
            <li class="{{ Request::segment(4) === 'proposal' ? 'active open' : null }}"><a href="{{route('tenant.admin.perposal.listing', ['hotel_code'=>$hotel_code])}}"><i class="zmdi zmdi-account"></i><span>Proposals</span></a></li>
            @endif
           
           

            <!-- <li class="{{ Request::segment(1) === 'file-manager' ? 'active open' : null }}">
                <a href="#FileManager" class="menu-toggle"><i class="zmdi zmdi-folder"></i> <span>File Manager</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'all' ? 'active' : null }}"><a href="#">All</a></li>
                </ul>
            </li>

            <li class="{{ Request::segment(1) === 'ecommerce' ? 'active open' : null }}">
                <a href="#Ecommerce" class="menu-toggle"><i class="zmdi zmdi-shopping-cart"></i> <span>Packages</span></a>
                <ul class="ml-menu">
                    
                </ul>
            </li> -->

            

            <li class=""><a href="{{route('tenant.admin.logout.submit')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="zmdi zmdi-account"></i><span>LogOut</span></a>
            </li>
            <form id="logout-form" action="{{route('tenant.admin.logout.submit')}}" method="POST" style="display: none;">
            @csrf
            </form>
        </ul>

    </div>
</aside>
