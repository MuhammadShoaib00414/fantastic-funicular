<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Dashboard Modern | Materialize - Material Design Admin Template</title>
    <link rel="apple-touch-icon" href="/app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="/app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/animate-css/animate.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/chartist-js/chartist.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/chartist-js/chartist-plugin-tooltip.css">
    <!-- END: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" href="/app-assets/vendors/select2/select2.min.css" type="text/css">
    <link rel="stylesheet" href="/app-assets/vendors/select2/select2-materialize.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/pages/page-users.min.css">

    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/themes/horizontal-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/themes/horizontal-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/layouts/style-horizontal.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/pages/dashboard-modern.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/pages/intro.min.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/custom/custom.css">
  

  <!-- <link rel="stylesheet" href="{{ mix('/css/app.css') }}"> -->
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">


  
      @include('layouts.sidebar-menu')
    

  {{-- Content Wrapper. Contains page content --}}
  <div class="content-wrapper">
    {{-- Main content --}}
    
    <!-- Content Header (Page header) -->
      <!-- BEGIN: Header-->
      <header class="page-topbar" id="header">
      <div class="navbar navbar-fixed"> 
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-light-blue-cyan">
          <div class="nav-wrapper">
            <ul class="left">
              <li>
                <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="/dashboard"><img src="/app-assets/images/logo/materialize-logo.png" alt="materialize logo"><span class="logo-text hide-on-med-and-down">All You User(Promoter)</span></a></h1>
              </li>
            </ul>
            <div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">search</i>
              <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Explore All You" data-search="template-list">
              <ul class="search-list collection display-none"></ul>
            </div>
            <ul class="navbar-list right">
              <li class="dropdown-language"><a class="waves-effect waves-block waves-light translation-button" href="javascript:void(0);" data-target="translation-dropdown"><span class="flag-icon flag-icon-gb"></span></a></li>
              <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
              <li class="hide-on-large-only"><a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search         </i></a></li>
              <li><a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown"><i class="material-icons">notifications_none<small class="notification-badge orange accent-3">5</small></i></a></li>
              <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="/app-assets/images/avatar/avatar-7.png" alt="avatar"><i></i></span></a></li>
              <li><a class="waves-effect waves-block waves-light sidenav-trigger" href="#" data-target="slide-out-right"><i class="material-icons">format_indent_increase</i></a></li>
            </ul>
            <!-- translation-button-->
            <ul class="dropdown-content" id="translation-dropdown">
              <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="en"><i class="flag-icon flag-icon-gb"></i> English</a></li>
              <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a></li>
              <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></li>
              <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a></li>
            </ul>
            <!-- notifications-dropdown-->
            <ul class="dropdown-content" id="notifications-dropdown">
              <li>
                <h6>NOTIFICATIONS<span class="new badge">5</span></h6>
              </li>
              <li class="divider"></li>
              <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
              </li>
              <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
              </li>
              <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
              </li>
              <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
              </li>
              <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
              </li>
            </ul>
            <!-- profile-dropdown-->
            <ul class="dropdown-content" id="profile-dropdown">
              <li><a class="grey-text text-darken-1" href="#"><i class="material-icons">person_outline</i> User list</a></li>
              <li><a class="grey-text text-darken-1" href="/profile"><i class="material-icons">chat_bubble_outline</i> User Edit</a></li>
              <li><a class="grey-text text-darken-1" href="#"><i class="material-icons">help_outline</i> Help</a></li>
              <li class="divider"></li>
              <li><a class="grey-text text-darken-1" href="#"><i class="material-icons">lock_outline</i> Lock</a></li>
              <li><a class="grey-text text-darken-1" href="/logout"><i class="material-icons">keyboard_tab</i> Logout</a></li>
            </ul>
          </div>
          <nav class="display-none search-sm">
            <div class="nav-wrapper">
              <form id="navbarForm">
                <div class="input-field search-input-sm">
                  <input class="search-box-sm" type="search" required="" id="search" placeholder="Explore Materialize" data-search="template-list">
                  <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>
                  <ul class="search-list collection search-list-sm display-none"></ul>
                </div>
              </form>
            </div>
          </nav>
        </nav>
        <!-- BEGIN: Horizontal nav start-->
        <nav class="white hide-on-med-and-down" id="horizontal-nav">
          <div class="nav-wrapper">
            <ul class="left hide-on-med-and-down" id="ul-horizontal-nav" data-menu="menu-navigation">
              <li><a  href="/dashboard" data-target="DashboardDropdown"><i class="material-icons">dashboard</i><span><span class="dropdown-title" data-i18n="Dashboard">Dashboard</span></span></a>
                
              </li>
              <li><a class="dropdown-menu" href="Javascript:void(0)" data-target="TemplatesDropdown"><i class="material-icons">dvr</i><span><span class="dropdown-title" data-i18n="Templates">Orders</span></span></a>
            
              </li>
              <li><a class="dropdown-menu" href="Javascript:void(0)" data-target="AppsDropdown"><i class="material-icons">mail_outline</i><span><span class="dropdown-title" data-i18n="Apps">Audition</span></span></a>
                
              </li>
              <li><a class="dropdown-menu" href="Javascript:void(0)" data-target="PageDropdown"><i class="material-icons">content_paste</i><span><span class="dropdown-title" data-i18n="Pages">Products</span></span></a>
                
              </li>
              <li><a class="dropdown-menu" href="Javascript:void(0)" data-target="Cards"><i class="material-icons">cast</i><span><span class="dropdown-title" data-i18n="Cards">Toolbox</span></span></a>
               
              </li>
              <li><a class="dropdown-menu" href="Javascript:void(0)" data-target="CssDropdown"><i class="material-icons">invert_colors</i><span><span class="dropdown-title" data-i18n="CSS">Events</span></span></a>

              </li>
              <li><a class="dropdown-menu" href="Javascript:void(0)" data-target="BasicUIDropdown"><i class="material-icons">photo_filter</i><span><span class="dropdown-title" data-i18n="Basic UI">Notification</span></span></a>
               
              </li>
              <li><a class="dropdown-menu" href="Javascript:void(0)" data-target="AdvancedUIDropdown"><i class="material-icons">settings_brightness</i><span><span class="dropdown-title" data-i18n="Advanced UI">Settings</span></span></a>
               
              </li>
             
              
             
            </ul>
          </div>
          <!-- END: Horizontal nav start-->
        </nav>
      </div>
    </header>
    <!-- END: Header-->
    <ul class="display-none" id="default-search-main">
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">FILES</h6></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="/app-assets/images/icon/pdf-image.png" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Two new item submitted</span><small class="grey-text">Marketing Manager</small></div>
            </div>
            <div class="status"><small class="grey-text">17kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="/app-assets/images/icon/doc-image.png" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">52 Doc file Generator</span><small class="grey-text">FontEnd Developer</small></div>
            </div>
            <div class="status"><small class="grey-text">550kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="/app-assets/images/icon/xls-image.png" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">25 Xls File Uploaded</span><small class="grey-text">Digital Marketing Manager</small></div>
            </div>
            <div class="status"><small class="grey-text">20kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="/app-assets/images/icon/jpg-image.png" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
            </div>
            <div class="status"><small class="grey-text">37kb</small></div>
          </div></a></li>
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">MEMBERS</h6></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="/app-assets/images/avatar/avatar-7.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">John Doe</span><small class="grey-text">UI designer</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="/app-assets/images/avatar/avatar-8.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Michal Clark</span><small class="grey-text">FontEnd Developer</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="/app-assets/images/avatar/avatar-10.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Milena Gibson</span><small class="grey-text">Digital Marketing</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="/app-assets/images/avatar/avatar-12.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
            </div>
          </div></a></li>
    </ul>
    <ul class="display-none" id="page-search-title">
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">PAGES</h6></a></li>
    </ul>
    <ul class="display-none" id="search-not-found">
      <li class="auto-suggestion"><a class="collection-item display-flex align-items-center" href="#"><span class="material-icons">error_outline</span><span class="member-info">No results found.</span></a></li>
    </ul>

    <!-- /.content-header -->

    <!-- Main content -->
    <router-view></router-view>

    <vue-progress-bar></vue-progress-bar>

    {{-- /.content --}}
  </div>
  {{-- /.content-wrapper --}}

  {{-- Main Footer --}}
  
</div>
{{-- ./wrapper --}}

@auth
<script>
    window.user = @json(auth()->user())
</script>
@endauth<footer class="page-footer footer footer-static footer-dark gradient-45deg-light-blue-cyan gradient-shadow navbar-border navbar-shadow">
      <div class="footer-copyright">
        <div class="container" style="text-align: center;"><span>&copy; 2021<a href="https://maniwebify.com/">
        Design and Developed by <a href="https://maniwebify.com/"><strong>ManiWebify Software</strong></a>
        </span></div>
      </div>
    </footer>


    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="/app-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="/app-assets/vendors/chartjs/chart.min.js"></script>
    <script src="/app-assets/vendors/chartist-js/chartist.min.js"></script>
    <script src="/app-assets/vendors/chartist-js/chartist-plugin-tooltip.js"></script>
    <script src="/app-assets/vendors/chartist-js/chartist-plugin-fill-donut.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="/app-assets/js/plugins.min.js"></script>
    <script src="/app-assets/js/search.min.js"></script>
    <script src="/app-assets/js/custom/custom-script.min.js"></script>
    <script src="/app-assets/js/scripts/customizer.min.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="/app-assets/js/scripts/dashboard-modern.js"></script>
    <script src="/app-assets/js/scripts/intro.min.js"></script>
  <script src="{{ mix('/js/app.js') }}"></script>
  <script src="/app-assets/js/scripts/dashboard-ecommerce.min.js"></script>
  <script src="/app-assets/vendors/chartjs/chart.min.js"></script>
  <script src="/app-assets/js/vendors.min.js"></script>
  <script src="/app-assets/js/scripts/page-users.min.js"></script>
  <script src="/app-assets/vendors/select2/select2.full.min.js"></script>





</body>
</html>
