<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>後台登入</title>
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
  <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/animate.css"); ?>">
  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/normalize.css"); ?>">
  <!-- main CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/main.css"); ?>">
  <!-- morrisjs CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/morrisjs/morris.css"); ?>">
  <!-- mCustomScrollbar CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/scrollbar/jquery.mCustomScrollbar.min.css"); ?>">
  <!-- metisMenu CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/metisMenu/metisMenu.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/metisMenu/metisMenu-vertical.css"); ?>">
  <!-- calendar CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/calendar/fullcalendar.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/calendar/fullcalendar.print.min.css"); ?>">
  <!-- forms CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/form/all-type-forms.css"); ?>">
  <!-- style CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/style.css"); ?>">
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/responsive.css"); ?>">
</head>

<body>
  
  <?php echo $this->session->flashdata('message'); ?>
  <div class="error-pagewrap">
    <div class="error-page-int">
      <div class="text-center m-b-md custom-login">
        <h1 class="JhengHei" style="color:red;"><?php echo (empty($message) == true ? "" : $message); ?></h1>
        <h3 class="JhengHei"></h3>
        <p class="JhengHei">您方便快速管理網頁小幫手</p>
      </div>
      <div class="content-error">
        <div class="hpanel">
          <div class="panel-body">
            <div class="form-group">
              <label class="control-label" for="email">信箱</label>
              <input type="email" placeholder="請輸入信箱" required name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
              <label class="control-label" for="password">密碼</label>
              <input type="password" placeholder="請輸入密碼" required name="password" id="password" class="form-control">
            </div>
            <button class="btn btn-success btn-block loginbtn" id="login">登入</button>
          </div>
        </div>
      </div>
      <div class="text-center login-footer">
        <p>Copyright © 2018. All rights reserved. Template by <a href="">Quick Web</a></p>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url("public/kiaalap-master/js/vendor/jquery-1.12.4.min.js"); ?>"></script>
  <script>
    $('#login').click(function() {
        let email = $('#email').val();
        let password = $('#password').val();
        let validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        let data = {};


        if(email == '')
        {
          alert('please enter a email.');
          return;
        }

        if(!email.match(validRegex))
        {
          alert('invalid email.');
          return;
        }

        if(password == '')
        {
          alert('please enter a password.');
          return;
        }

        data['email'] = email;
        data['password'] = password;

        $.ajax({
            method: 'POST',
            url: '<?php echo base_url("/backstage/login"); ?>',
            contentType: "application/json;charset=utf-8",
            dataType: "json",
            data: JSON.stringify(data),
            success: function(response) {
              if(response.status === 200)
              {
                alert('sign in successfully.');
                location.href = '../backstage';
              }
            },
            error: function(error, ajaxOptions, thrownError) {
              console.log(error.status);
              console.log(error);
              alert('error.')
            }
        });
    });
  </script>
</body>

</html>