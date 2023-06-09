<!doctype html>
<html class="no-js" lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>後台管理</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- favicon
    ============================================ -->
<!-- <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url("public/kiaalap-master/img/favicon.ico"); ?>"> -->
<!-- Google Fonts
    ============================================ -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
<!-- Bootstrap CSS
    ============================================ -->
<link rel="stylesheet" href="<?php echo base_url("public/kiaalap-master/css/bootstrap.min.css"); ?>">
<!-- Bootstrap CSS
    ============================================ -->
<link rel="stylesheet" href="<?php echo base_url("public/kiaalap-master/css/font-awesome.min.css"); ?>">
<!-- owl.carousel CSS
    ============================================ -->
<link rel="stylesheet" href="<?php echo base_url("public/kiaalap-master/css/owl.carousel.css"); ?>">
<link rel="stylesheet" href="<?php echo base_url("public/kiaalap-master/css/owl.theme.css"); ?>">
<link rel="stylesheet" href="<?php echo base_url("public/kiaalap-master/css/owl.transitions.css"); ?>">
<!-- animate CSS
    ============================================ -->
<link rel="stylesheet" href="<?php echo base_url("public/kiaalap-master/css/animate.css"); ?>">
<!-- normalize CSS
    ============================================ -->
<link rel="stylesheet" href="<?php echo base_url("public/kiaalap-master/css/normalize.css"); ?>">
<!-- meanmenu icon CSS
    ============================================ -->
<link rel="stylesheet" href="<?php echo base_url("public/kiaalap-master/css/meanmenu.min.css"); ?>">
<!-- main CSS
    ============================================ -->
<link rel="stylesheet" href="<?php echo base_url("public/kiaalap-master/css/main.css"); ?>">
<!-- educate icon CSS
    ============================================ -->
<link rel="stylesheet" href="<?php echo base_url("public/kiaalap-master/css/educate-custon-icon.css"); ?>">
<!-- morrisjs CSS
    ============================================ -->
<link rel="stylesheet" href="<?php echo base_url("public/kiaalap-master/css/morrisjs/morris.css"); ?>">
<!-- mCustomScrollbar CSS
    ============================================ -->
<link rel="stylesheet" href="<?php echo base_url("public/kiaalap-master/css/scrollbar/jquery.mCustomScrollbar.min.css"); ?>">
<!-- metisMenu CSS
    ============================================ -->
<link rel="stylesheet" href="<?php echo base_url("public/kiaalap-master/css/metisMenu/metisMenu.min.css"); ?>">
<link rel="stylesheet" href="<?php echo base_url("public/kiaalap-master/css/metisMenu/metisMenu-vertical.css"); ?>">
<!-- calendar CSS
    ============================================ -->
<link rel="stylesheet" href="<?php echo base_url("public/kiaalap-master/css/calendar/fullcalendar.min.css"); ?>">
<link rel="stylesheet" href="<?php echo base_url("public/kiaalap-master/css/calendar/fullcalendar.print.min.css"); ?>">
<!-- style CSS
    ============================================ -->
<link rel="stylesheet" href="<?php echo base_url("public/kiaalap-master/style.css"); ?>">
<!-- responsive CSS
    ============================================ -->
<link rel="stylesheet" href="<?php echo base_url("public/kiaalap-master/css/responsive.css"); ?>">
<!-- modernizr JS
    ============================================ -->
<script src="<?php echo base_url("public/kiaalap-master/js/vendor/modernizr-2.8.3.min.js"); ?>"></script>
</head>
<body>
<!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Start Left menu area -->
<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="<?php echo base_url("backstage"); ?>">
                <!-- <img class="main-logo" src="<?php echo base_url("public/kiaalap-master/img/logo/logo.png"); ?>" alt="" /> -->
                <h1 style="font-family:Microsoft YaHei">後台管理</h1>
            </a>
            <!-- <strong><a href="index.html"><img src="<?php echo base_url("public/kiaalap-master/img/logo/logosn.png"); ?>" alt="" /></a></strong> -->
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">
                        <a class="has-arrow" href="" aria-expanded="false">
                            <span class="educate-icon educate-course icon-wrap"></span> 
                            <span class="mini-click-non">最新消息</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a href="<?php echo base_url("/backstage/news"); ?>"><span class="mini-sub-pro">消息列表</span></a></li>
                        </ul>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a href="<?php echo base_url("/backstage/news/addition"); ?>"><span class="mini-sub-pro">新增消息</span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>

<!-- End Left menu area -->
<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="backstage">
                        <h1 style="font-family:Microsoft YaHei">網頁專案</h1>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-6 col-md-0 col-sm-1 col-xs-12">
                                    <div class="menu-switcher-pro">
                                        <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                            <i class="educate-icon educate-nav"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            <li class="nav-item" style="float: none;">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                    <!-- <img src="<?php echo base_url("public/kiaalap-master/img/product/pro4.jpg");?>" alt="" /> -->
                                                    <span class="admin-name"><?php echo $manufacturer->name; ?></span>
                                                    <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                </a>
                                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                    <li>
                                                        <a href="<?php echo base_url(); ?>">
                                                            <span class="edu-icon edu-home-admin author-log-ic"></span>前台畫面
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url("/backstage/logout"); ?>">
                                                            <span class="edu-icon edu-home-admin author-log-ic"></span>登出
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                    <li>
                                        <a data-toggle="collapse" data-target="#demopro" href="#">
                                            最新消息<span class="admin-project-icon edu-icon edu-down-arrow"></span>
                                        </a>
                                        <ul id="demopro" class="collapse dropdown-header-top">
                                            <li>
                                                <a href="<?php echo base_url("/backstage/news"); ?>">消息列表</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url("/backstage/news/addition"); ?>">新增消息</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu end -->
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list">
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
