<!--
  Name: Con - Admin Dashboard with Material Design
  Version: 2.0.0
  Author: nK
  Website: http://nkdev.info
  Support: http://nk.ticksy.com
  Purchase: http://themeforest.net/item/con-material-admin-dashboard-template/10621512?ref=nKdev
  License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
  Copyright 2015.
-->
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="lt-ie7"> <![endif]-->
<!--[if IE 7]>     <html class="lt-ie8"> <![endif]-->
<!--[if IE 8]>     <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="rtl">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Con - Admin Dashboard with Material Design</title>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="{{ URL::asset('http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900') }}" rel='stylesheet' type='text/css'>

  <link rel="icon" type="image/png" href="{{ URL::asset('assets/_con/images/icon.png') }}">

  <!-- nanoScroller -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/nanoScroller/nanoscroller.css') }}" />


  <!-- FontAwesome -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/font-awesome/css/font-awesome.min.css') }} " />

  <!-- Material Design Icons -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/material-design-icons/css/material-design-icons.min.css') }}" />

  <!-- IonIcons -->
  <link rel="stylesheet" type="text/css"href="{{ URL::asset('assets/ionicons/css/ionicons.min.css')}}" />

  <!-- WeatherIcons -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/weatherIcons/css/weather-icons.min.css') }}" />

  <!-- Google Prettify -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/google-code-prettify/prettify.css') }}" />

  <!-- Main -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/_con/css/_con-indigo.min.css') }}" />

  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/pikaday/pikaday.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/angularjs-dataTables/plugins/bootstrap/datatables.bootstrap.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/angularjs-dataTables/plugins/bootstrap/datatables.bootstrap-min.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/dropzone/dropzone.min.css') }}" />
  
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/markitup/skins/_con/style.css') }}" />
  
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/markitup/sets/default/style.css') }}" />
  


  <!--[if lt IE 9]>

    <script src="assets/html5shiv/html5shiv.min.js"></script>
  <![endif]-->
</head>

<body>


  <!--
  Top Navbar
    Options:
      .navbar-dark - dark color scheme
      .navbar-static - static navbar
      .navbar-under - under sidebar
-->
  <nav class="navbar-top">
    <div class="nav-wrapper">

      <!-- Sidebar toggle -->
      <a href="#" class="yay-toggle">
        <div class="burg1"></div>
        <div class="burg2"></div>
        <div class="burg3"></div>
      </a>
      <!-- Sidebar toggle -->

      <!-- Logo -->
      <a href="#!" class="brand-logo">
        <img src="http://localhost/debono/public/img/logo.png">
      </a>
      <!-- /Logo -->

      <!-- Menu -->
      <ul>
        <li><a href="#!" class="search-bar-toggle"><i class="mdi-action-search"></i></a>
        </li>
        <li class="user">
          <a class="dropdown-button" href="#!" data-activates="user-dropdown">
            <img src="http://localhost/debono/public/assets/_con/images/smile.jpg" alt="Ahmed Omer" class="circle">Ahmed Omer<i class="mdi-navigation-expand-more right"></i>
          </a>

          <ul id="user-dropdown" class="dropdown-content">
            <li><a href="page-profile.html"><i class="fa fa-user"></i> Profile</a>
            </li>
            <li><a href="mail-inbox.html"><i class="fa fa-envelope"></i> Messages <span class="badge new">2</span></a>
            </li>
            <li><a href="#!"><i class="fa fa-cogs"></i> Settings</a>
            </li>
            <li class="divider"></li>
            <li><a href="page-sign-in.html"><i class="fa fa-sign-out"></i> Logout</a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- /Menu -->

    </div>
  </nav>
  <!-- /Top Navbar -->


  <!--
  Yay Sidebar
  Options [you can use all of theme classnames]:
    .yay-hide-to-small         - no hide menu, just set it small with big icons
    .yay-static                - stop using fixed sidebar (will scroll with content)
    .yay-gestures              - to show and hide menu using gesture swipes
    .yay-light                 - light color scheme
    .yay-hide-on-content-click - hide menu on content click

  Effects [you can use one of these classnames]:
    .yay-overlay  - overlay content
    .yay-push     - push content to right
    .yay-shrink   - shrink content width
-->
