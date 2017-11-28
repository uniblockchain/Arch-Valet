<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo admin_css('fontastic.css'); ?>">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="<?php echo admin_css('grasp_mobile_progress_circle-1.0.0.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="<?php echo admin_css('style.red.css'); ?>" id="theme-stylesheet">
    <link rel="stylesheet" href="<?php echo admin_css('custom.css'); ?>">

  </head>
  <body>
    <div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><img src="<?php echo admin_img('logo_admin.png'); ?>"></div>
            <div class="logo text-uppercase"><span>Admin</span><strong class="text-primary">Login</strong></div>
            <form action="<?=admin_url('login/process');?>" role="form" method="post">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" name="username">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password">
              </div>
              <div class="form-actions">
                <div class="text-left">
                    <div class="">
                        <label style="float: left;"><input type="checkbox" class="styled">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right"><i class="icon-menu2"></i> Sign in</button>
                </div>
            </div>
              <!-- This should be submit button but I replaced it with <a> for demo purposes-->
            </form>
          </div>         
        </div>
      </div>
    </div>

    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"> </script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo admin_js('grasp_mobile_progress_circle-1.0.0.min.js'); ?>"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo admin_js('front.js'); ?>"></script>
  </body>
</html>