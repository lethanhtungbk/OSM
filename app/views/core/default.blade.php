<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.1.1
Version: 3.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" >
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Metronic | Page Layouts - Blank Page</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
        <link href="{{URL::asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{URL::asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{URL::asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{URL::asset('assets/global/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{URL::asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME STYLES -->
        <link href="{{URL::asset('assets/global/css/components.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{URL::asset('assets/global/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{URL::asset('assets/admin/layout/css/layout.css')}}" rel="stylesheet" type="text/css"/>
        <link id="style_color" href="{{URL::asset('assets/admin/layout/css/themes/default.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{URL::asset('assets/admin/layout/css/custom.css')}}" rel="stylesheet" type="text/css"/>
        <!-- END THEME STYLES -->
        <!-- CUSTOM STYLES -->
        @section('custom-style')
        @show
        <!-- CUSTOM STYLES -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
    <!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
    <!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
    <!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
    <!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
    <!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
    <!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
    <!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
    <!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
    <body class="page-header-fixed page-quick-sidebar-over-content page-header-fixed-mobile page-footer-fixed1">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.html">
                        <img src="{{asset('assets/admin/layout/img/logo.png')}}" alt="logo" class="logo-default"/>
                    </a>
                    <div class="menu-toggler sidebar-toggler hide">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-bell"></i>
                                <span class="badge badge-default">
                                    7 </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <p>
                                        You have 14 new notifications
                                    </p>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height: 250px;">
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-success">
                                                    <i class="fa fa-plus"></i>
                                                </span>
                                                New user registered. <span class="time">
                                                    Just now </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-danger">
                                                    <i class="fa fa-bolt"></i>
                                                </span>
                                                Server #12 overloaded. <span class="time">
                                                    15 mins </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-warning">
                                                    <i class="fa fa-bell-o"></i>
                                                </span>
                                                Server #2 not responding. <span class="time">
                                                    22 mins </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-info">
                                                    <i class="fa fa-bullhorn"></i>
                                                </span>
                                                Application error. <span class="time">
                                                    40 mins </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-danger">
                                                    <i class="fa fa-bolt"></i>
                                                </span>
                                                Database overloaded 68%. <span class="time">
                                                    2 hrs </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-danger">
                                                    <i class="fa fa-bolt"></i>
                                                </span>
                                                2 user IP blocked. <span class="time">
                                                    5 hrs </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-warning">
                                                    <i class="fa fa-bell-o"></i>
                                                </span>
                                                Storage Server #4 not responding. <span class="time">
                                                    45 mins </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-info">
                                                    <i class="fa fa-bullhorn"></i>
                                                </span>
                                                System Error. <span class="time">
                                                    55 mins </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-danger">
                                                    <i class="fa fa-bolt"></i>
                                                </span>
                                                Database overloaded 68%. <span class="time">
                                                    2 hrs </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="external">
                                    <a href="#">
                                        See all notifications <i class="m-icon-swapright"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END NOTIFICATION DROPDOWN -->
                        <!-- BEGIN INBOX DROPDOWN -->
                        <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-envelope-open"></i>
                                <span class="badge badge-default">
                                    4 </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <p>
                                        You have 12 new messages
                                    </p>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height: 250px;">
                                        <li>
                                            <a href="inbox.html?a=view">
                                                <span class="photo">
                                                    <img src="{{asset('assets/admin/layout/img/avatar2.jpg')}}" alt=""/>
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Lisa Wong </span>
                                                    <span class="time">
                                                        Just Now </span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="inbox.html?a=view">
                                                <span class="photo">
                                                    <img src="{{asset('assets/admin/layout/img/avatar3.jpg')}}" alt=""/>
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Richard Doe </span>
                                                    <span class="time">
                                                        16 mins </span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="inbox.html?a=view">
                                                <span class="photo">
                                                    <img src="{{asset('assets/admin/layout/img/avatar1.jpg')}}" alt=""/>
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Bob Nilson </span>
                                                    <span class="time">
                                                        2 hrs </span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="inbox.html?a=view">
                                                <span class="photo">
                                                    <img src="{{asset('assets/admin/layout/img/avatar2.jpg')}}" alt=""/>
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Lisa Wong </span>
                                                    <span class="time">
                                                        40 mins </span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed auctor 40% nibh congue nibh... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="inbox.html?a=view">
                                                <span class="photo">
                                                    <img src="{{asset('assets/admin/layout/img/avatar3.jpg')}}" alt=""/>
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Richard Doe </span>
                                                    <span class="time">
                                                        46 mins </span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="external">
                                    <a href="inbox.html">
                                        See all messages <i class="m-icon-swapright"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END INBOX DROPDOWN -->
                        <!-- BEGIN TODO DROPDOWN -->
                        <li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-calendar"></i>
                                <span class="badge badge-default">
                                    3 </span>
                            </a>
                            <ul class="dropdown-menu extended tasks">
                                <li>
                                    <p>
                                        You have 12 pending tasks
                                    </p>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height: 250px;">
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">
                                                        New release v1.2 </span>
                                                    <span class="percent">
                                                        30% </span>
                                                </span>
                                                <span class="progress">
                                                    <span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">
                                                            40% Complete </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">
                                                        Application deployment </span>
                                                    <span class="percent">
                                                        65% </span>
                                                </span>
                                                <span class="progress progress-striped">
                                                    <span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">
                                                            65% Complete </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">
                                                        Mobile app release </span>
                                                    <span class="percent">
                                                        98% </span>
                                                </span>
                                                <span class="progress">
                                                    <span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">
                                                            98% Complete </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">
                                                        Database migration </span>
                                                    <span class="percent">
                                                        10% </span>
                                                </span>
                                                <span class="progress progress-striped">
                                                    <span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">
                                                            10% Complete </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">
                                                        Web server upgrade </span>
                                                    <span class="percent">
                                                        58% </span>
                                                </span>
                                                <span class="progress progress-striped">
                                                    <span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">
                                                            58% Complete </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">
                                                        Mobile development </span>
                                                    <span class="percent">
                                                        85% </span>
                                                </span>
                                                <span class="progress progress-striped">
                                                    <span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">
                                                            85% Complete </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">
                                                        New UI release </span>
                                                    <span class="percent">
                                                        18% </span>
                                                </span>
                                                <span class="progress progress-striped">
                                                    <span style="width: 18%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">
                                                            18% Complete </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="external">
                                    <a href="#">
                                        See all tasks <i class="m-icon-swapright"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END TODO DROPDOWN -->
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <li class="dropdown dropdown-user">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle" src="{{asset('assets/admin/layout/img/avatar3_small.jpg')}}"/>
                                <span class="username">
                                    Bob </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="extra_profile.html">
                                        <i class="icon-user"></i> My Profile </a>
                                </li>
                                <li>
                                    <a href="page_calendar.html">
                                        <i class="icon-calendar"></i> My Calendar </a>
                                </li>
                                <li>
                                    <a href="inbox.html">
                                        <i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
                                            3 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
                                            7 </span>
                                    </a>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <a href="extra_lock.html">
                                        <i class="icon-lock"></i> Lock Screen </a>
                                </li>
                                <li>
                                    <a href="login.html">
                                        <i class="icon-key"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                        <li class="dropdown dropdown-quick-sidebar-toggler">
                            <a href="javascript:;" class="dropdown-toggle">
                                <i class="icon-logout"></i>
                            </a>
                        </li>
                        <!-- END QUICK SIDEBAR TOGGLER -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <div class="clearfix">
        </div>
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            @include('core.menu')
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                    <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    Widget settings form goes here
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn blue">Save changes</button>
                                    <button type="button" class="btn default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                    <!-- BEGIN STYLE CUSTOMIZER -->
                    <div class="theme-panel hidden-xs hidden-sm">
                        <div class="toggler">
                        </div>
                        <div class="toggler-close">
                        </div>
                        <div class="theme-options">
                            <div class="theme-option theme-colors clearfix">
                                <span>
                                    THEME COLOR </span>
                                <ul>
                                    <li class="color-default current tooltips" data-style="default" data-original-title="Default">
                                    </li>
                                    <li class="color-darkblue tooltips" data-style="darkblue" data-original-title="Dark Blue">
                                    </li>
                                    <li class="color-blue tooltips" data-style="blue" data-original-title="Blue">
                                    </li>
                                    <li class="color-grey tooltips" data-style="grey" data-original-title="Grey">
                                    </li>
                                    <li class="color-light tooltips" data-style="light" data-original-title="Light">
                                    </li>
                                    <li class="color-light2 tooltips" data-style="light2" data-html="true" data-original-title="Light 2">
                                    </li>
                                </ul>
                            </div>
                            <div class="theme-option">
                                <span>
                                    Layout </span>
                                <select class="layout-option form-control input-small">
                                    <option value="fluid" selected="selected">Fluid</option>
                                    <option value="boxed">Boxed</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span>
                                    Header </span>
                                <select class="page-header-option form-control input-small">
                                    <option value="fixed" selected="selected">Fixed</option>
                                    <option value="default">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span>
                                    Sidebar </span>
                                <select class="sidebar-option form-control input-small">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span>
                                    Sidebar Position </span>
                                <select class="sidebar-pos-option form-control input-small">
                                    <option value="left" selected="selected">Left</option>
                                    <option value="right">Right</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span>
                                    Footer </span>
                                <select class="page-footer-option form-control input-small">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- END STYLE CUSTOMIZER -->
                    <!-- BEGIN PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                            @include('core.content-title')
                            @include('core.breadcrumbs')
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN PAGE CONTENT-->
                    <div class="row">
                        <div class="col-md-12">
                            @yield('content')
                        </div>
                    </div>
                    <!-- END PAGE CONTENT-->
                </div>
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->

            <a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-close"></i></a>
            <div class="page-quick-sidebar-wrapper">
                <div class="page-quick-sidebar">            
                    <div class="nav-justified">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active">
                                <a href="#quick_sidebar_tab_1" data-toggle="tab">
                                    Users <span class="badge badge-danger">2</span>
                                </a>
                            </li>
                            <li>
                                <a href="#quick_sidebar_tab_2" data-toggle="tab">
                                    Alerts <span class="badge badge-success">7</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    More<i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li>
                                        <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                            <i class="icon-bell"></i> Alerts </a>
                                    </li>
                                    <li>
                                        <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                            <i class="icon-info"></i> Notifications </a>
                                    </li>
                                    <li>
                                        <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                            <i class="icon-speech"></i> Activities </a>
                                    </li>
                                    <li class="divider">
                                    </li>
                                    <li>
                                        <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                            <i class="icon-settings"></i> Settings </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                                <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                                    <h3 class="list-heading">Staff</h3>
                                    <ul class="media-list list-items">
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-success">8</span>
                                            </div>
                                            <img class="media-object" src="{{asset('assets/admin/layout/img/avatar3.jpg')}}" alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Bob Nilson</h4>
                                                <div class="media-heading-sub">
                                                    Project Manager
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="media-object" src="{{asset('assets/admin/layout/img/avatar1.jpg')}}" alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Nick Larson</h4>
                                                <div class="media-heading-sub">
                                                    Art Director
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-danger">3</span>
                                            </div>
                                            <img class="media-object" src="{{asset('assets/admin/layout/img/avatar4.jpg')}}" alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Deon Hubert</h4>
                                                <div class="media-heading-sub">
                                                    CTO
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="media-object" src="{{asset('assets/admin/layout/img/avatar2.jpg')}}" alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Ella Wong</h4>
                                                <div class="media-heading-sub">
                                                    CEO
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class="list-heading">Customers</h3>
                                    <ul class="media-list list-items">
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-warning">2</span>
                                            </div>
                                            <img class="media-object" src="{{asset('assets/admin/layout/img/avatar6.jpg')}}" alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Lara Kunis</h4>
                                                <div class="media-heading-sub">
                                                    CEO, Loop Inc
                                                </div>
                                                <div class="media-heading-small">
                                                    Last seen 03:10 AM
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="label label-sm label-success">new</span>
                                            </div>
                                            <img class="media-object" src="{{asset('assets/admin/layout/img/avatar7.jpg')}}" alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Ernie Kyllonen</h4>
                                                <div class="media-heading-sub">
                                                    Project Manager,<br>
                                                    SmartBizz PTL
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="media-object" src="{{asset('assets/admin/layout/img/avatar8.jpg')}}" alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Lisa Stone</h4>
                                                <div class="media-heading-sub">
                                                    CTO, Keort Inc
                                                </div>
                                                <div class="media-heading-small">
                                                    Last seen 13:10 PM
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-success">7</span>
                                            </div>
                                            <img class="media-object" src="{{asset('assets/admin/layout/img/avatar9.jpg')}}" alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Deon Portalatin</h4>
                                                <div class="media-heading-sub">
                                                    CFO, H&D LTD
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="media-object" src="{{asset('assets/admin/layout/img/avatar10.jpg')}}" alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Irina Savikova</h4>
                                                <div class="media-heading-sub">
                                                    CEO, Tizda Motors Inc
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-danger">4</span>
                                            </div>
                                            <img class="media-object" src="{{asset('assets/admin/layout/img/avatar11.jpg')}}" alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Maria Gomez</h4>
                                                <div class="media-heading-sub">
                                                    Manager, Infomatic Inc
                                                </div>
                                                <div class="media-heading-small">
                                                    Last seen 03:10 AM
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="page-quick-sidebar-item">
                                    <div class="page-quick-sidebar-chat-user">
                                        <div class="page-quick-sidebar-nav">
                                            <a href="javascript:;" class="page-quick-sidebar-back-to-list"><i class="icon-arrow-left"></i>Back</a>
                                        </div>
                                        <div class="page-quick-sidebar-chat-user-messages">
                                            <div class="post out">
                                                <img class="avatar" alt="" src="{{asset('assets/admin/layout/img/avatar3.jpg')}}"/>
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Bob Nilson</a>
                                                    <span class="datetime">20:15</span>
                                                    <span class="body">
                                                        When could you send me the report ? </span>
                                                </div>
                                            </div>
                                            <div class="post in">
                                                <img class="avatar" alt="" src="{{asset('assets/admin/layout/img/avatar2.jpg')}}"/>
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Ella Wong</a>
                                                    <span class="datetime">20:15</span>
                                                    <span class="body">
                                                        Its almost done. I will be sending it shortly </span>
                                                </div>
                                            </div>
                                            <div class="post out">
                                                <img class="avatar" alt="" src="{{asset('assets/admin/layout/img/avatar3.jpg')}}"/>
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Bob Nilson</a>
                                                    <span class="datetime">20:15</span>
                                                    <span class="body">
                                                        Alright. Thanks! :) </span>
                                                </div>
                                            </div>
                                            <div class="post in">
                                                <img class="avatar" alt="" src="{{asset('assets/admin/layout/img/avatar2.jpg')}}"/>
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Ella Wong</a>
                                                    <span class="datetime">20:16</span>
                                                    <span class="body">
                                                        You are most welcome. Sorry for the delay. </span>
                                                </div>
                                            </div>
                                            <div class="post out">
                                                <img class="avatar" alt="" src="{{asset('assets/admin/layout/img/avatar3.jpg')}}"/>
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Bob Nilson</a>
                                                    <span class="datetime">20:17</span>
                                                    <span class="body">
                                                        No probs. Just take your time :) </span>
                                                </div>
                                            </div>
                                            <div class="post in">
                                                <img class="avatar" alt="" src="{{asset('assets/admin/layout/img/avatar2.jpg')}}"/>
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Ella Wong</a>
                                                    <span class="datetime">20:40</span>
                                                    <span class="body">
                                                        Alright. I just emailed it to you. </span>
                                                </div>
                                            </div>
                                            <div class="post out">
                                                <img class="avatar" alt="" src="{{asset('assets/admin/layout/img/avatar3.jpg')}}"/>
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Bob Nilson</a>
                                                    <span class="datetime">20:17</span>
                                                    <span class="body">
                                                        Great! Thanks. Will check it right away. </span>
                                                </div>
                                            </div>
                                            <div class="post in">
                                                <img class="avatar" alt="" src="{{asset('assets/admin/layout/img/avatar2.jpg')}}"/>
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Ella Wong</a>
                                                    <span class="datetime">20:40</span>
                                                    <span class="body">
                                                        Please let me know if you have any comment. </span>
                                                </div>
                                            </div>
                                            <div class="post out">
                                                <img class="avatar" alt="" src="{{asset('assets/admin/layout/img/avatar3.jpg')}}"/>
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Bob Nilson</a>
                                                    <span class="datetime">20:17</span>
                                                    <span class="body">
                                                        Sure. I will check and buzz you if anything needs to be corrected. </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="page-quick-sidebar-chat-user-form">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Type a message here...">
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn blue"><i class="icon-paper-clip"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                                <div class="page-quick-sidebar-alerts-list">
                                    <h3 class="list-heading">General</h3>
                                    <ul class="feeds list-items">
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            You have 4 pending tasks. <span class="label label-sm label-warning ">
                                                                Take action <i class="fa fa-share"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    Just now
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bar-chart-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                Finance Report for year 2013 has been released.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        20 mins
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-danger">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            You have 5 pending membership that requires a quick review.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    24 mins
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            New order received with <span class="label label-sm label-success">
                                                                Reference Number: DR23923 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    30 mins
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            You have 5 pending membership that requires a quick review.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    24 mins
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            Web server hardware needs to be upgraded. <span class="label label-sm label-warning">
                                                                Overdue </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    2 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-default">
                                                                <i class="fa fa-briefcase"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                IPO Report for year 2013 has been released.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        20 mins
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="list-heading">System</h3>
                                    <ul class="feeds list-items">
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            You have 4 pending tasks. <span class="label label-sm label-warning ">
                                                                Take action <i class="fa fa-share"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    Just now
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-danger">
                                                                <i class="fa fa-bar-chart-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                Finance Report for year 2013 has been released.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        20 mins
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-default">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            You have 5 pending membership that requires a quick review.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    24 mins
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            New order received with <span class="label label-sm label-success">
                                                                Reference Number: DR23923 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    30 mins
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            You have 5 pending membership that requires a quick review.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    24 mins
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
                                                                Overdue </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    2 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-info">
                                                                <i class="fa fa-briefcase"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                IPO Report for year 2013 has been released.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        20 mins
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                                <div class="page-quick-sidebar-settings-list">
                                    <h3 class="list-heading">General Settings</h3>
                                    <ul class="list-items borderless">
                                        <li>
                                            Enable Notifications <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                        </li>
                                        <li>
                                            Allow Tracking <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                        </li>
                                        <li>
                                            Log Errors <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                        </li>
                                        <li>
                                            Auto Sumbit Issues <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                        </li>
                                        <li>
                                            Enable SMS Alerts <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                        </li>
                                    </ul>
                                    <h3 class="list-heading">System Settings</h3>
                                    <ul class="list-items borderless">
                                        <li>
                                            Security Level
                                            <select class="form-control input-inline input-sm input-small">
                                                <option value="1">Normal</option>
                                                <option value="2" selected>Medium</option>
                                                <option value="e">High</option>
                                            </select>
                                        </li>
                                        <li>
                                            Failed Email Attempts <input class="form-control input-inline input-sm input-small" value="5"/>
                                        </li>
                                        <li>
                                            Secondary SMTP Port <input class="form-control input-inline input-sm input-small" value="3560"/>
                                        </li>
                                        <li>
                                            Notify On System Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                        </li>
                                        <li>
                                            Notify On SMTP Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                        </li>
                                    </ul>
                                    <div class="inner-content">
                                        <button class="btn btn-success"><i class="icon-settings"></i> Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner">2014 &copy; Study Aboard.</div>
            <div class="page-footer-tools">
                <span class="go-top">
                    <i class="fa fa-angle-up"></i>
                </span>
            </div>
        </div>
        <!-- END FOOTER -->
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- BEGIN CORE PLUGINS -->
        <!--[if lt IE 9]>
        <script src="../../assets/global/plugins/respond.min.js"></script>
        <script src="../../assets/global/plugins/excanvas.min.js"></script> 
        <![endif]-->
        {{HTML::script('assets/global/plugins/jquery-1.11.0.min.js')}}
        {{HTML::script('assets/global/plugins/jquery-migrate-1.2.1.min.js')}}
        <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
        {{HTML::script('assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js')}}
        {{HTML::script('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}
        {{HTML::script('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}
        {{HTML::script('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}
        {{HTML::script('assets/global/plugins/jquery.blockui.min.js')}}
        {{HTML::script('assets/global/plugins/jquery.cokie.min.js')}}
        {{HTML::script('assets/global/plugins/uniform/jquery.uniform.min.js')}}
        {{HTML::script('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}
        <!-- END CORE PLUGINS -->
        {{HTML::script('assets/global/scripts/metronic.js')}}
        {{HTML::script('assets/admin/layout/scripts/layout.js')}}
        {{HTML::script('assets/admin/layout/scripts/quick-sidebar.js')}}
        @section('custom-plugin')
        @show
        <script>
            jQuery(document).ready(function() {
                Metronic.init(); // init metronic core components
                Layout.init(); // init current layout
                QuickSidebar.init() // init quick sidebar
                @section('custon-init')
                @show
            });
            @section('custom-script')   
            @show
        </script>        
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>