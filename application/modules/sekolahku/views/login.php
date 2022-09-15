<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrator | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <script type="text/javascript">
   const _BASE_URL = '<?php echo bantuan_url();?>', _CURRENT_URL = '<?=current_url();?>';
   </script>
   <script src="<?=base_url('assets/js/login.min.js?v=20210227');?>"></script>
   <script type="text/javascript">
   function login() {
      $('#submit, #user_name, #user_password').attr('disabled', 'disabled');
      var values = {
         user_name: $('#user_name').val(),
         user_password: $('#user_password').val()
      };
      _H.Loading( true );
      $.post(_BASE_URL + 'login/verify', values, function(response) {
         _H.Loading( false );
         var res = _H.StrToObject( response );
         _H.Notify(res.status, _H.Message(res.message));
         if (res.status == 'success') {
            window.location.href = <?php echo bantuan_url('admin'); ?>;
         } else {
            $('#user_name, #user_password').val('');
            if ( res.ip_banned ) {
               $('#submit, #user_name, #user_password').attr('disabled', 'disabled');
               $('#login-info').text('The login page has been blocked for 10 minutes');
               $('#login-info').addClass('text-danger');
            } else {
               $('#submit, #user_name, #user_password').removeAttr('disabled');
            }
         }
      });
   }
   </script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Administrator</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <?php if ($this->session->flashdata('user_loggedout')): ?>
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <?php echo $this->session->flashdata('user_loggedout'); ?>
      </div>
    <?php endif ?>

    <?php if ($this->session->flashdata('login_failed')): ?>
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <?php echo $this->session->flashdata('login_failed'); ?>
      </div>
    <?php endif ?>

    <!-- <?php echo form_open(bantuan_url('login/verify')); ?> -->
    <form>
      <div class="form-group has-feedback">
        <input <?=$ip_banned ? 'disabled="disabled"' : '';?> type="text" class="form-control" name="user_name" placeholder="Email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input <?=$ip_banned ? 'disabled="disabled"' : '';?> type="password" class="form-control" name="user_password" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <a href="#">I forgot my password</a><br>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button <?=$ip_banned ? 'disabled="disabled"' : '';?> onclick="login(); return false;" id="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/') ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/') ?>plugins/iCheck/icheck.min.js"></script>

</body>
</html>
