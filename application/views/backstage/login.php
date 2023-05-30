<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>網頁專案-後台登入</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"> -->
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/bootstrap.min.css"); ?>">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/font-awesome.min.css"); ?>">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/owl.carousel.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/owl.theme.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/owl.transitions.css"); ?>">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/animate.css");?>">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/normalize.css");?>">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/main.css");?>">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/morrisjs/morris.css");?>">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/scrollbar/jquery.mCustomScrollbar.min.css");?>">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/metisMenu/metisMenu.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/metisMenu/metisMenu-vertical.css");?>">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/calendar/fullcalendar.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/calendar/fullcalendar.print.min.css");?>">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/form/all-type-forms.css");?>">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/style.css");?>">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/responsive.css");?>">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url("/public/kiaalap-master/js/vendor/modernizr-2.8.3.min.js");?>"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
        <h1 class="JhengHei" style="color:red;"><?php echo (empty($message) == true ? "" : $message);?></h1>
				<h3 class="JhengHei">網頁專案</h3>
				<p class="JhengHei">您方便快速管理小幫手</p>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="<?php echo site_url("/backstage/casesone/login");?>" id="loginForm" method="POST">
                            <div class="form-group">
                                <label class="control-label" for="account">帳號</label>
                                <input type="text" placeholder="請輸入帳號" required="" value="" name="account" id="account" class="form-control">
                                <!-- <span class="help-block small">Your unique username to app</span> -->
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">密碼</label>
                                <input type="password" placeholder="請輸入密碼" required="" value="" name="password" id="password" class="form-control">
                                <!-- <span class="help-block small">Yur strong password</span> -->
                            </div>
                            <!-- <div class="checkbox login-checkbox">
                                <label><input type="checkbox" class="i-checks"> Remember me </label>
                                <p class="help-block small">(if this is a private computer)</p>
                            </div> -->
                            <button class="btn btn-success btn-block loginbtn">登入</button>
                            <!-- <a class="btn btn-default btn-block" href="#">Register</a> -->
                        </form>
                    </div>
                </div>
			</div>
			<!-- <div class="text-center login-footer">
				<p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
			</div> -->
		</div>   
    </div>
</body>
</html>