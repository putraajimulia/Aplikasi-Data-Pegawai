<!DOCTYPE html>
<html>
  <head>
 <style type="text/css">
 {
font-family: 'Open Sans';
font-size:100%;
margin: 0;
padding: 0;
}
body {
background:#326799;
}
input:focus {
outline: none;
}
form {
background:#fcfcfc;
border-radius:10px;
padding:20px;
padding-top:40px;
width:300px;
margin:0 auto;
margin-top: 50px;
box-shadow:0px 15px 30px #40403d;
}
h2 {
text-align:center;
font-size:1.0em;
font-weight:700;
color:#c7ccd0;
margin-bottom:24px;
}
h2:hover{
font-size:1.3em;
}
input {
width:250px;
background:#c7ccd0;
border:0;
padding:20px;
border-radius:10px;
margin-bottom: 15px;
}
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
color: white;
font-style: italic;
}
::-moz-placeholder { /* Firefox 19+ */
color: white;
font-style: italic;
}
:-ms-input-placeholder { /* IE 10+ */
color: white;
font-style: italic;
}
:-moz-placeholder { /* Firefox 18- */
color: white;
font-style: italic;
}
.btn {
width: 290px;
padding:20px;
border-radius:10px;
border:0;
background:#326799;
font-size:1.2em;
color:#fff;
box-shadow:0px 3px 0px #0b4072;
cursor: pointer;
}
.btn:active {
top:3px;
box-shadow:none;
outline: none;
}
</style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
       </div>

      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">
        
        </p>

        <form action="<?php echo base_url('Auth/login'); ?>" method="post">

            <h2>

          Selamat Datang <br>
          Silahkan Masuk Untuk memulai.
        </h2>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Username" name="username">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <!-- <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
            </div> -->
            <div class="col-xs-offset-8 col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
          </div>
        </form>

        <!-- <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
            Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
            Google+</a>
        </div> -->
        <!-- /.social-auth-links -->

        <!-- <a href="#">I forgot my password</a><br>
        <a href="register.html" class="text-center">Register a new membership</a> -->

      </div>
      <!-- /.login-box-body -->
      <?php
        echo show_err_msg($this->session->flashdata('error_msg'));
      ?>
    </div>
    

    <!-- /.login-box -->

    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <!-- <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script> -->
    <!-- <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
  
  </script> -->
  </body>
</html>
