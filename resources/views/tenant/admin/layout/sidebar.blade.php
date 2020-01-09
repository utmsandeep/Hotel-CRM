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
                        <h4>Michael</h4>
                        <small>Super Admin</small>
                    </div>
                </div>
            </li>            
            <li class="{{ Request::segment(1) === 'dashboard' ? 'active open' : null }}"><a href="{{route('dashboard.index')}}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li class="{{ Request::segment(1) === 'my-profile' ? 'active open' : null }}"><a href="{{route('profile.my-profile')}}"><i class="zmdi zmdi-account"></i><span>My Profile</span></a></li>
            <li class="{{ Request::segment(1) === 'app' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-apps"></i> <span>Messages</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'inbox' ? 'active' : null }}"><a href="{{route('app.inbox')}}">Inbox</a></li>
                    <!-- <li class="{{ Request::segment(2) === 'chat' ? 'active' : null }}"><a href="{{route('app.chat')}}">Chat</a></li>
                    <li class="{{ Request::segment(2) === 'calendar' ? 'active' : null }}"><a href="{{route('app.calendar')}}">Calendar</a></li>                                    
                    <li class="{{ Request::segment(2) === 'contact-list' ? 'active' : null }}"><a href="{{route('app.contact-list')}}">Contact list</a></li> -->
                </ul>
            </li>
            <li class="{{ Request::segment(1) === 'project' ? 'active open' : null }}">
                <a href="#Project" class="menu-toggle"><i class="zmdi zmdi-assignment"></i> <span>Hotels</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'project-list' ? 'active' : null }}"><a href="#">Hotel List</a></li>
                    <!-- <li class="{{ Request::segment(2) === 'taskboard' ? 'active' : null }}"><a href="{{route('project.taskboard')}}">Taskboard</a></li>
                    <li class="{{ Request::segment(2) === 'ticket-list' ? 'active' : null }}"><a href="{{route('project.ticket-list')}}">Ticket List</a></li>                                    
                    <li class="{{ Request::segment(2) === 'ticket-detail' ? 'active' : null }}"><a href="{{route('project.ticket-detail')}}">Ticket Detail</a></li> -->
                </ul>
            </li>
            <li class="{{ Request::segment(1) === 'file-manager' ? 'active open' : null }}">
                <a href="#FileManager" class="menu-toggle"><i class="zmdi zmdi-folder"></i> <span>File Manager</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'all' ? 'active' : null }}"><a href="#">All</a></li>
                   <!--  <li class="{{ Request::segment(2) === 'documents' ? 'active' : null }}"><a href="{{route('file-manager.documents')}}">Documents</a></li>
                    <li class="{{ Request::segment(2) === 'media' ? 'active' : null }}"><a href="{{route('file-manager.media')}}">Media</a></li>
                    <li class="{{ Request::segment(2) === 'image' ? 'active' : null }}"><a href="{{route('file-manager.image')}}">Images</a></li> -->
                </ul>
            </li>
            <!-- <li class="{{ Request::segment(1) === 'blog' ? 'active open' : null }}">
                <a href="#Blog" class="menu-toggle"><i class="zmdi zmdi-blogger"></i> <span>Blog</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'dashboard' ? 'active' : null }}"><a href="{{route('blog.dashboard')}}">Dashboard</a></li>
                    <li class="{{ Request::segment(2) === 'new-post' ? 'active' : null }}"><a href="{{route('blog.new-post')}}">Blog Post</a></li>
                    <li class="{{ Request::segment(2) === 'list' ? 'active' : null }}"><a href="{{route('blog.list')}}">List View</a></li>
                    <li class="{{ Request::segment(2) === 'grid' ? 'active' : null }}"><a href="{{route('blog.grid')}}">Grid View</a></li>
                    <li class="{{ Request::segment(2) === 'detail' ? 'active' : null }}"><a href="{{route('blog.detail')}}">Blog Details</a></li>
                </ul>
            </li> -->
            <li class="{{ Request::segment(1) === 'ecommerce' ? 'active open' : null }}">
                <a href="#Ecommerce" class="menu-toggle"><i class="zmdi zmdi-shopping-cart"></i> <span>Packages</span></a>
                <ul class="ml-menu">
                    <!-- <li class="{{ Request::segment(2) === 'dashboard' ? 'active' : null }}"><a href="{{route('ecommerce.dashboard')}}">Dashboard</a></li>
                    <li class="{{ Request::segment(2) === 'product' ? 'active' : null }}"><a href="{{route('ecommerce.product')}}">Product</a></li>
                    <li class="{{ Request::segment(2) === 'product-list' ? 'active' : null }}"><a href="{{route('ecommerce.product-list')}}">Product List</a></li>
                    <li class="{{ Request::segment(2) === 'product-detail' ? 'active' : null }}"><a href="{{route('ecommerce.product-detail')}}">Product Details</a></li> -->
                </ul>
            </li>
            <!-- <li class="{{ Request::segment(1) === 'components' ? 'active open' : null }}">
                <a href="#Components" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i> <span>Components</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'ui' ? 'active' : null }}"><a href="{{route('components.ui')}}">Aero UI KIT</a></li>
                    <li class="{{ Request::segment(2) === 'alerts' ? 'active' : null }}"><a href="{{route('components.alerts')}}">Alerts</a></li>
                    <li class="{{ Request::segment(2) === 'collapse' ? 'active' : null }}"><a href="{{route('components.collapse')}}">Collapse</a></li>
                    <li class="{{ Request::segment(2) === 'colors' ? 'active' : null }}"><a href="{{route('components.colors')}}">Colors</a></li>
                    <li class="{{ Request::segment(2) === 'dialogs' ? 'active' : null }}"><a href="{{route('components.dialogs')}}">Dialogs</a></li>
                    <li class="{{ Request::segment(2) === 'list' ? 'active' : null }}"><a href="{{route('components.list')}}">List Group</a></li>
                    <li class="{{ Request::segment(2) === 'media' ? 'active' : null }}"><a href="{{route('components.media')}}">Media Object</a></li>
                    <li class="{{ Request::segment(2) === 'modals' ? 'active' : null }}"><a href="{{route('components.modals')}}">Modals</a></li>
                    <li class="{{ Request::segment(2) === 'notifications' ? 'active' : null }}"><a href="{{route('components.notifications')}}">Notifications</a></li>
                    <li class="{{ Request::segment(2) === 'progressbars' ? 'active' : null }}"><a href="{{route('components.progressbars')}}">Progress Bars</a></li>
                    <li class="{{ Request::segment(2) === 'range' ? 'active' : null }}"><a href="{{route('components.range')}}">Range Sliders</a></li>
                    <li class="{{ Request::segment(2) === 'sortable' ? 'active' : null }}"><a href="{{route('components.sortable')}}">Sortable & Nestable</a></li>
                    <li class="{{ Request::segment(2) === 'tabs' ? 'active' : null }}"><a href="{{route('components.tabs')}}">Tabs</a></li>
                    <li class="{{ Request::segment(2) === 'waves' ? 'active' : null }}"><a href="{{route('components.waves')}}">Waves</a></li>
                </ul>
            </li> -->
           <!--  <li class="{{ Request::segment(1) === 'icons' ? 'active open' : null }}">
                <a href="#Icons" class="menu-toggle"><i class="zmdi zmdi-flower"></i> <span>Font Icons</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'material' ? 'active' : null }}"><a href="{{route('icons.material')}}">Material</a></li>
                    <li class="{{ Request::segment(2) === 'themify' ? 'active' : null }}"><a href="{{route('icons.themify')}}">Themify</a></li>
                    <li class="{{ Request::segment(2) === 'weather' ? 'active' : null }}"><a href="{{route('icons.weather')}}">Weather</a></li>
                </ul>
            </li> -->
           <!--  <li class="{{ Request::segment(1) === 'form' ? 'active open' : null }}">
                <a href="#Form" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Forms</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'basic' ? 'active' : null }}"><a href="{{route('form.basic')}}">Basic Form</a></li>
                    <li class="{{ Request::segment(2) === 'advanced' ? 'active' : null }}"><a href="{{route('form.advanced')}}">Advanced Form</a></li>
                    <li class="{{ Request::segment(2) === 'examples' ? 'active' : null }}"><a href="{{route('form.examples')}}">Form Examples</a></li>
                    <li class="{{ Request::segment(2) === 'validation' ? 'active' : null }}"><a href="{{route('form.validation')}}">Form Validation</a></li>
                    <li class="{{ Request::segment(2) === 'wizard' ? 'active' : null }}"><a href="{{route('form.wizard')}}">Form Wizard</a></li>
                    <li class="{{ Request::segment(2) === 'editors' ? 'active' : null }}"><a href="{{route('form.editors')}}">Editors</a></li>
                    <li class="{{ Request::segment(2) === 'upload' ? 'active' : null }}"><a href="{{route('form.upload')}}">File Upload</a></li>
                    <li class="{{ Request::segment(2) === 'summernote' ? 'active' : null }}"><a href="{{route('form.summernote')}}">Summernote</a></li>
                </ul>
            </li> -->
           <!--  <li class="{{ Request::segment(1) === 'tables' ? 'active open' : null }}">
                <a href="#Tables" class="menu-toggle"><i class="zmdi zmdi-grid"></i><span>Tables</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'normal' ? 'active' : null }}"><a href="{{route('tables.normal')}}">Normal Tables</a></li>
                    <li class="{{ Request::segment(2) === 'datatable' ? 'active' : null }}"><a href="{{route('tables.datatable')}}">Jquery Datatables</a></li>
                    <li class="{{ Request::segment(2) === 'editable' ? 'active' : null }}"><a href="{{route('tables.editable')}}">Editable Tables</a></li>
                    <li class="{{ Request::segment(2) === 'footable' ? 'active' : null }}"><a href="{{route('tables.footable')}}">Foo Tables</a></li>
                    <li class="{{ Request::segment(2) === 'color' ? 'active' : null }}"><a href="{{route('tables.color')}}">Tables Color</a></li>
                </ul>
            </li> -->
            <!-- <li class="{{ Request::segment(1) === 'chart' ? 'active open' : null }}">
                <a href="#Chart" class="menu-toggle"><i class="zmdi zmdi-chart"></i><span>Charts</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'echarts' ? 'active' : null }}"><a href="{{route('chart.echarts')}}">E Chart</a></li>
                    <li class="{{ Request::segment(2) === 'c3' ? 'active' : null }}"><a href="{{route('chart.c3')}}">C3 Chart</a></li>
                    <li class="{{ Request::segment(2) === 'morris' ? 'active' : null }}"><a href="{{route('chart.morris')}}">Morris</a></li>
                    <li class="{{ Request::segment(2) === 'flot' ? 'active' : null }}"><a href="{{route('chart.flot')}}">Flot</a></li>
                    <li class="{{ Request::segment(2) === 'chartjs' ? 'active' : null }}"><a href="{{route('chart.chartjs')}}">ChartJS</a></li>
                    <li class="{{ Request::segment(2) === 'sparkline' ? 'active' : null }}"><a href="{{route('chart.sparkline')}}">Sparkline</a></li>
                    <li class="{{ Request::segment(2) === 'knob' ? 'active' : null }}"><a href="{{route('chart.knob')}}">Jquery Knob</a></li>
                </ul>
            </li> -->
           <!--  <li class="{{ Request::segment(1) === 'widgets' ? 'active open' : null }}">
                <a href="#Widgets" class="menu-toggle"><i class="zmdi zmdi-delicious"></i><span>Widgets</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'app' ? 'active' : null }}"><a href="{{route('widgets.app')}}">Apps Widgets</a></li>
                    <li class="{{ Request::segment(2) === 'data' ? 'active' : null }}"><a href="{{route('widgets.data')}}">Data Widgets</a></li>
                </ul>
            </li> -->
            <!-- <li class="{{ Request::segment(1) === 'authentication' ? 'active open' : null }}">
                <a href="#Authentication" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Authentication</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'login' ? 'active' : null }}"><a href="{{route('authentication.login')}}">Sign In</a></li>
                    <li class="{{ Request::segment(2) === 'register' ? 'active' : null }}"><a href="{{route('authentication.register')}}">Sign Up</a></li>
                    <li class="{{ Request::segment(2) === 'lockscreen' ? 'active' : null }}"><a href="{{route('authentication.lockscreen')}}">Locked Screen</a></li>
                    <li class="{{ Request::segment(2) === 'forgot' ? 'active' : null }}"><a href="{{route('authentication.forgot')}}">Forgot Password</a></li>
                    <li class="{{ Request::segment(2) === 'page404' ? 'active' : null }}"><a href="{{route('authentication.page404')}}">Page 404</a></li>
                    <li class="{{ Request::segment(2) === 'page500' ? 'active' : null }}"><a href="{{route('authentication.page500')}}">Page 500</a></li>
                    <li class="{{ Request::segment(2) === 'offline' ? 'active' : null }}"><a href="{{route('authentication.offline')}}">Page Offline</a></li>
                </ul>
            </li> -->
            <li class="{{ Request::segment(1) === 'pages' ? 'active open open_top' : null }}">
                <a href="#Pages" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Hotel Pages</span></a>
                <ul class="ml-menu">
                   <!--  <li class="{{ Request::segment(2) === 'blank' ? 'active' : null }}"><a href="{{route('pages.blank')}}">Blank Page</a></li>
                    <li class="{{ Request::segment(2) === 'gallery' ? 'active' : null }}"><a href="{{route('pages.gallery')}}">Image Gallery</a></li>
                    <li class="{{ Request::segment(2) === 'invoices1' ? 'active' : null }}"><a href="{{route('pages.invoices1')}}">Invoices</a></li>
                    <li class="{{ Request::segment(2) === 'invoices2' ? 'active' : null }}"><a href="{{route('pages.invoices2')}}">Invoices List</a></li>
                    <li class="{{ Request::segment(2) === 'pricing' ? 'active' : null }}"><a href="{{route('pages.pricing')}}">Pricing</a></li>
                    <li class="{{ Request::segment(2) === 'profile' ? 'active' : null }}"><a href="{{route('pages.profile')}}">Profile</a></li>
                    <li class="{{ Request::segment(2) === 'search' ? 'active' : null }}"><a href="{{route('pages.search')}}">Search Results</a></li>
                    <li class="{{ Request::segment(2) === 'timeline' ? 'active' : null }}"><a href="{{route('pages.timeline')}}">Timeline</a></li> -->
                </ul>
            </li>
            <!-- <li class="{{ Request::segment(1) === 'map' ? 'active open open_top' : null }}">
                <a href="#Map" class="menu-toggle"><i class="zmdi zmdi-map"></i><span>Maps</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'yandex' ? 'active' : null }}"><a href="{{route('map.yandex')}}">YandexMap</a></li>
                    <li class="{{ Request::segment(2) === 'jvector' ? 'active' : null }}"><a href="{{route('map.jvector')}}">jVectorMap</a></li>
                </ul>
            </li> -->
        </ul>
    </div>
</aside>
