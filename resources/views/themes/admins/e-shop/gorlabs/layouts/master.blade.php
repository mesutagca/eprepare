<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Gorlabs Course Prepare Theme</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'/>
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon"/>



    <!-- CSS Files -->
    <link rel="stylesheet" href="{{mix('themes/admins/e-shop/gorlabs/css/gorlabs.css')}}">
</head>
<body>
<div class="wrapper">
    <div class="main-header">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="blue">

            <a href="index.html" class="logo">
                <img src="{{asset('themes/admins/e-shop/gorlabs/img/logo2.png')}}" width="45" alt="navbar brand" class="navbar-brand"> <strong class="text-white ml-1">Gorlabs</strong>
            </a>
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
            </button>
            <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="icon-menu"></i>
                </button>
            </div>
        </div>
        <!-- End Logo Header -->

        <!-- Navbar Header -->
        <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

            <div class="container-fluid new-age">
                <div class="collapse" id="search-nav">
                    <form class="navbar-left navbar-form nav-search mr-md-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button type="submit" class="btn btn-search pr-1">
                                    <i class="fa fa-search search-icon"></i>
                                </button>
                            </div>
                            <label for="search"></label>
                            <input id="search" type="text" placeholder="Search ..." class="form-control">
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                    <li class="nav-item toggle-nav-search hidden-caret">
                        <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button"
                           aria-expanded="false" aria-controls="search-nav">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link dropdown-toggle" href="#" id="backup" role="button" title="Backup">
                            <i class="fa fa-database"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link dropdown-toggle" href="#" id="todo" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false" title="Todo">
                            <i class="fas fa-address-card"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-envelope"></i>
                        </a>
                        <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
                            <li>
                                <div class="dropdown-title d-flex justify-content-between align-items-center">
                                    Messages
                                    <a href="#" class="small">Mark all as read</a>
                                </div>
                            </li>
                            <li>
                                <div class="message-notif-scroll scrollbar-outer">
                                    <div class="notif-center">
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="{{asset('themes/admins/e-shop/gorlabs/img/profile2.jpg')}}" alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="subject">Jimmy Denis</span>
                                                <span class="block">
														How are you ?
													</span>
                                                <span class="time">5 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="{{asset('themes/admins/e-shop/gorlabs/img/profile2.jpg')}}" alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="subject">Chad</span>
                                                <span class="block">
														Ok, Thanks !
													</span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="{{asset('themes/admins/e-shop/gorlabs/img/profile2.jpg')}}" alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="subject">Jhon Doe</span>
                                                <span class="block">
														Ready for the meeting today...
													</span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="{{asset('themes/admins/e-shop/gorlabs/img/profile2.jpg')}}" alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="subject">Talha</span>
                                                <span class="block">
														Hi, Apa Kabar ?
													</span>
                                                <span class="time">17 minutes ago</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="see-all" href="javascript:void(0);">See all messages<i
                                        class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="notification">0</span>
                        </a>
                        <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                            <li>
                                <div class="dropdown-title">You have 4 new notification</div>
                            </li>
                            <li>
                                <div class="notif-scroll scrollbar-outer">
                                    <div class="notif-center">
                                        <a href="#">
                                            <div class="notif-icon notif-primary"><i class="fa fa-user-plus"></i></div>
                                            <div class="notif-content">
													<span class="block">
														New user registered
													</span>
                                                <span class="time">5 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-icon notif-success"><i class="fa fa-comment"></i></div>
                                            <div class="notif-content">
													<span class="block">
														Rahmad commented on Admin
													</span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="{{asset('themes/admins/e-shop/gorlabs/img/profile2.jpg')}}" alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
													<span class="block">
														Reza send messages to you
													</span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-icon notif-danger"><i class="fa fa-heart"></i></div>
                                            <div class="notif-content">
													<span class="block">
														Farrah liked Admin
													</span>
                                                <span class="time">17 minutes ago</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="see-all" href="javascript:void(0);">See all notifications<i
                                        class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                            <i class="fas fa-layer-group"></i>
                            <div class="visitor_messages_count hide">
                                <span class="notification visitor_messages">0</span>
                            </div>

                        </a>
                        <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                            <div class="quick-actions-header">
                                <span class="title mb-1">Quick Proccess</span>
                                <span class="subtitle op-8">Short Cuts</span>
                            </div>
                            <div class="quick-actions-scroll scrollbar-outer">
                                <div class="quick-actions-items">
                                    <div class="row m-0">
                                        <a class="col-6 col-md-4 p-0" href="#">
                                            <div class="quick-actions-item">
                                                <div class="avatar-item bg-danger rounded-circle">
                                                    <i class="far fa-calendar-alt"></i>
                                                </div>
                                                <span class="text">Calendar</span>
                                                <span class="notification">0</span>
                                            </div>
                                        </a>
                                        <a class="col-6 col-md-4 p-0" href="#">
                                            <div class="quick-actions-item">
                                                <div class="avatar-item bg-warning rounded-circle">
                                                    <i class="fas fa-envelope"></i>
                                                </div>
                                                <div class="visitor_messages_count hide">
                                                    <span class="text">Visitors</span>
                                                    <span class="notification visitor_messages">0</span>
                                                </div>

                                            </div>
                                        </a>
                                        <a class="col-6 col-md-4 p-0" href="#">
                                            <div class="quick-actions-item">
                                                <div class="avatar-item bg-info rounded-circle">
                                                    <i class="fas fa-file-excel"></i>
                                                </div>
                                                <span class="text">Reports</span>
                                                <span class="notification">0</span>
                                            </div>
                                        </a>
                                        <a class="col-6 col-md-4 p-0" href="#">
                                            <div class="quick-actions-item">
                                                <div class="avatar-item bg-success rounded-circle">
                                                    <i class="fas fa-envelope"></i>
                                                </div>
                                                <span class="text">Emails</span>
                                                <span class="notification">0</span>
                                            </div>
                                        </a>
                                        <a class="col-6 col-md-4 p-0" href="#">
                                            <div class="quick-actions-item">
                                                <div class="avatar-item bg-primary rounded-circle">
                                                    <i class="fas fa-file-invoice-dollar"></i>
                                                </div>
                                                <span class="text">Invoice</span>
                                                <span class="notification">0</span>
                                            </div>
                                        </a>
                                        <a class="col-6 col-md-4 p-0" href="#">
                                            <div class="quick-actions-item">
                                                <div class="avatar-item bg-secondary rounded-circle">
                                                    <i class="fas fa-credit-card"></i>
                                                </div>
                                                <span class="text">Payments</span>
                                                <span class="notification">0</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link quick-sidebar-toggler">
                            <i class="fa fa-th"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown submenu hidden-caret">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="flag-icon flag-icon-tr"></i>
                            Languages
                        </a>
                        <ul class="dropdown-menu">

                            <li class="nav-item p-1">
                                <a href="#" class="nav-link"
                                   style="color: #191919!important; font-weight: 500; font-size: 16px">
                                    <span class="flag-icon flag-icon-tr"></span>
                                    Türkçe
                                    <i class="fas fa-check" style="color:green"></i>
                                    <i class="fas fa-plus" style="color:#5f28fb"></i>

                                </a>
                            </li>
                            <li class="nav-item p-1">
                                <a href="#" class="nav-link"
                                   style="color: #191919!important; font-weight: 500; font-size: 16px">
                                    <span class="flag-icon flag-icon-en"></span>
                                    English
                                    <i class="fas fa-check" style="color:green"></i>
                                    <i class="fas fa-plus" style="color:#5f28fb"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown hidden-caret">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                            <div class="avatar-sm">
                                <img src="{{asset('themes/admins/e-shop/gorlabs/img/profile.jpg')}}" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-user animated fadeIn">
                            <div class="dropdown-user-scroll scrollbar-outer">
                                <li>
                                    <div class="user-box">
                                        <div class="avatar-lg">
                                            <img src="{{asset('themes/admins/e-shop/gorlabs/img/profile.jpg')}}" alt="image profile"
                                                 class="avatar-img  rounded-circle">
                                        </div>
                                        <div class="u-text">
                                            <h4>Auth User Name</h4>
                                            <p class="text-muted">auth-user@email.com</p><a href="#"
                                                                                            class="btn btn-xs btn-secondary btn-sm">View
                                                Profile</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">My Profile</a>
                                    <a class="dropdown-item" href="#">Go Web Site</a>
                                    <a class="dropdown-item" href="#">Inbox</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Account Setting</a>
                                    <div class="dropdown-divider"></div>
                                    <!-- @if(session()->has('impersonate'))
                                        <div class="pull-left">
                                            <a class="btn btn-warning btn-flat" href="#">
                                                Back Own
                                            </a>
                                        </div>
@endif -->
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
                                    </a>
                                    <form id="logout-form" action="" method="POST" style="display: none">
                                        @csrf
                                    </form>
                                </li>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->
    </div>
    <!-- Sidebar -->
    <div class="sidebar sidebar-style-2" data-background-color="">
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <div class="user">
                    <div class="avatar-sm float-left mr-2">
                        <img src="{{asset('themes/admins/e-shop/gorlabs/img/profile.jpg')}}" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#administrator" aria-expanded="true">
                        <span>
                            Admin Admin
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                        </a>
                        <div class="clearfix"></div>

                        <div class="collapse in" id="administrator">
                            <ul class="nav">
                                <li>
                                    <a href="user/profile.html">
                                        <span class="link-collapse">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="link-collapse">Edit Profile</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-primary">
                    <li class="nav-item active">
                        <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                            <i class="fas fa-home"></i>
                            <p>Dashboards</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="dashboard">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="#">
                                        <span class="sub-item">Admin</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sub-item">Accounting</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sub-item">Production</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a data-toggle="collapse" href="#owner" class="collapsed" aria-expanded="false">
                            <i class="fas fa-home"></i>
                            <p>Owner</p>
                            <span class="caret"></span>
                        </a>

                        <div class="collapse" id="owner">
                            <ul class="nav nav-collapse">
                                <li class="nav-item">
                                    <a data-toggle="collapse" href="#themes">
                                        <p>Themes</p>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="themes">
                                        <ul class="nav nav-collapse">
                                            <li>
                                                <a href="themes/themes.html">
                                                    <span class="sub-item">Theme List</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="collapse" href="#modules">
                                        <p>Modules</p>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="modules">
                                        <ul class="nav nav-collapse">
                                            <li>
                                                <a href="#">
                                                    <span class="sub-item">Module List</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="collapse" href="#tools">
                                        <p>Tools</p>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="tools">
                                        <ul class="nav nav-collapse">
                                            <li>
                                                <a href="tool/route-list.html">
                                                    <span class="sub-item">Route List</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="sub-item">System Settings</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                        <h4 class="text-section">Administration</h4>
                    </li>
                    <!--Setup Start-->
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#setup">
                            <i class="fas fa-layer-group"></i>
                            <p>Setup</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="setup">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="setup/general.html">
                                        <span class="sub-item">General Setting</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="setup/meta-tags.html">
                                        <span class="sub-item">SEO Meta Tags</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="backup/index.html">
                                        <span class="sub-item">Backups</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sub-item">Black List</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--Setup End-->
                    <!--Globalization Start-->
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#globalization">
                            <i class="fas fa-layer-group"></i>
                            <p>Globalization</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="globalization">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="language/index.html">
                                        <span class="sub-item">Languages</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--Globalization End-->
                    <!--Users Start-->
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#users">
                            <i class="fas fa-th-list"></i>
                            <p>Users</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="users">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="user/index.html">
                                        <span class="sub-item">User Manager</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="role/index.html">
                                        <span class="sub-item">Role Manager</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="permission/index.html">
                                        <span class="sub-item">Permission Manager</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--Users End-->
                    <!--Categories Start-->
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#web-store">
                            <i class="fas fa-th-list"></i>
                            <p>Web Store</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="web-store">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="category/index.html">
                                        <span class="sub-item">Category Manager</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="product/index.html">
                                        <span class="sub-item">Product Manager</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sub-item">Reports</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--Users End-->
                    <!--Pages Start-->
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#pages">
                            <i class="fas fa-th-list"></i>
                            <p>Pages</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="pages">
                            <ul class="nav nav-collapse">
                                <li class="nav-item">
                                    <a data-toggle="collapse" href="#forms">
                                        <p>Forms</p>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="forms">
                                        <ul class="nav nav-collapse">
                                            <li>
                                                <a href="forms/forms.html">
                                                    <span class="sub-item">Forms</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="collapse" href="#charts">
                                        <p>Charts</p>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="charts">
                                        <ul class="nav nav-collapse">
                                            <li>
                                                <a href="charts/charts.html">
                                                    <span class="sub-item">Charts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="charts/sparkline.html">
                                                    <span class="sub-item">Sparkline</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="collapse" href="#components">
                                        <p>Components</p>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="components">
                                        <ul class="nav nav-collapse">
                                            <li><a href="components/avatars.html"><span class="sub-item">Avatars</span></a>
                                            </li>
                                            <li><a href="components/buttons.html"><span class="sub-item">Buttons</span></a>
                                            </li>
                                            <li><a href="components/flaticons.html"><span
                                                        class="sub-item">Flat Icons</span></a></li>
                                            <li><a href="components/font-awesome-icons.html"><span class="sub-item">Font Awesome</span></a>
                                            </li>
                                            <li><a href="components/gridsystem.html"><span
                                                        class="sub-item">Grid System</span></a></li>
                                            <li><a href="components/notifications.html"><span class="sub-item">Notifications</span></a>
                                            </li>
                                            <li><a href="components/panels.html"><span
                                                        class="sub-item">Panels</span></a></li>
                                            <li><a href="components/simple-line-icons.html"><span class="sub-item">Simple Line Icons</span></a>
                                            </li>
                                            <li><a href="components/sweetalert.html"><span
                                                        class="sub-item">Sweetalert</span></a></li>
                                            <li><a href="components/typography.html"><span
                                                        class="sub-item">Typography</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="collapse" href="#maps">
                                        <p>Maps</p>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="maps">
                                        <ul class="nav nav-collapse">
                                            <li><a href="maps/jqvmap.html"><span class="sub-item">JqVmap</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="collapse" href="#tables">
                                        <p>Tables</p>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="tables">
                                        <ul class="nav nav-collapse">
                                            <li><a href="tables/datatables.html"><span
                                                        class="sub-item">Data Tables</span></a></li>
                                            <li><a href="tables/tables.html"><span class="sub-item">Tables</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul class="nav nav-collapse">
                                <li><a href="blank.html"><span class="sub-item">Blank Page</span></a></li>
                                <li><a href="compact-sidebar.html"><span class="sub-item">Compact Sidebar</span></a>
                                </li>
                                <li><a href="static-sidebar.html"><span class="sub-item">Static Sidebar</span></a></li>
                                <li><a href="icon-menu.html"><span class="sub-item">Icon Menu</span></a></li>
                                <li><a href="overlay-sidebar.html"><span class="sub-item">Overlay Sidebar</span></a>
                                </li>
                                <li><a href="sidebar-style-1.html"><span class="sub-item">Sidebar Style 1</span></a>
                                </li>
                                <li><a href="starter-template.html"><span class="sub-item">Starter Template</span></a>
                                </li>
                                <li><a href="widgets.html"><span class="sub-item">Widgets</span></a></li>
                            </ul>

                        </div>

                    </li>

                    <!--Pages End-->
                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar -->
    <div class="main-panel">
        <div class="content">
@yield('content')
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.themekita.com">
                                ThemeKita
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Help
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright ml-auto">
                    2018, made with <i class="fa fa-heart heart text-danger"></i> by <a
                        href="https://www.themekita.com">ThemeKita</a>
                </div>
            </div>
        </footer>
    </div>

</div>

<script src="{{mix('themes/admins/e-shop/gorlabs/js/gorlabs.js')}}"></script>

<script>
    WebFont.load({
        google: {"families": ["Lato:300,400,700,900"]},
        custom: {
            "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
            urls: ['themes/admins/e-shop/gorlabs/css/fonts.css']
        },
        active: function () {
            sessionStorage.fonts = true;
        }
    });

</script>
@yield('page-level-scripts')
</body>
</html>
