<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo config_item('site_name'); ?> || Admin Panel</title>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/multiselect/jquery.multiselect.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/multiselect/jquery.multiselect.filter.css" />
        <link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" />

        <!-- <link href="<?php echo admin_css('bootstrap.min.css'); ?>" rel="stylesheet" type="text/css"> -->
        <!-- <link href="<?php echo admin_css('londinium-theme.min.css'); ?>" rel="stylesheet" type="text/css"> -->
        <link href="<?php echo admin_css('styles.min.css'); ?>" rel="stylesheet" type="text/css">
        <!-- <link href="<?php echo admin_css('icons.min.css'); ?>" rel="stylesheet" type="text/css"> -->

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendor/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo admin_css('fontastic.css'); ?>">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <link rel="stylesheet" href="<?php echo admin_css('grasp_mobile_progress_circle-1.0.0.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
        <link rel="stylesheet" href="<?php echo admin_css('style.red.css'); ?>" id="theme-stylesheet">
        <link rel="stylesheet" href="<?php echo admin_css('custom.css'); ?>">


        <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css"> -->
		

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <!--   <script type="text/javascript" src="<?php echo admin_js('jquery.min.js'); ?>"></script> -->
        <script type="text/javascript" src="<?php echo admin_js('jquery-ui.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('jscolor.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/charts/sparkline.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/forms/uniform.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/forms/select2.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/forms/inputmask.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/forms/autosize.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/forms/inputlimit.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/forms/listbox.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/forms/multiselect.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/forms/validate.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/forms/tags.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/forms/switch.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/forms/uploader/plupload.full.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/forms/uploader/plupload.queue.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/forms/wysihtml5/wysihtml5.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/forms/wysihtml5/toolbar.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/interface/daterangepicker.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/interface/fancybox.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/interface/moment.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/interface/jgrowl.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/interface/datatables.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/interface/colorpicker.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/interface/fullcalendar.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/interface/timepicker.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/interface/collapsible.min.js'); ?>"></script>
        <!-- <script type="text/javascript" src="<?php echo admin_js('bootstrap.min.js'); ?>"></script> -->
        

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/multiselect/jquery.multiselect.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/multiselect/jquery.multiselect.filter.js"></script>

         <!-- Javascript files-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"> </script>
        <script src="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery.cookie/jquery.cookie.js"> </script>
        <script src="<?php echo admin_js('grasp_mobile_progress_circle-1.0.0.min.js'); ?>"></script>
        <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery-validation/jquery.validate.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
        <script src="<?php echo admin_js('charts-home.js'); ?>"></script>
        <script src="<?php echo admin_js('front.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('application.js'); ?>"></script>
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script type="text/javascript">
    var date = $('#datepicker').datepicker({ dateFormat: 'dd-mm-yy' }).val();
</script>



    </head>
    <body>
    <div class="page home-page">
        <!-- navbar-->
        <header class="header">
            <nav class="navbar">
                <div class="container-fluid">
                    <div class="navbar-holder d-flex align-items-center justify-content-between">
                        <div class="navbar-header">
                            <a id="toggle-btn" href="#" class="menu-btn">
                                <i class="fa fa-bars"> </i>
                            </a>
                        </div>

                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                            <li class="nav-item dropdown"> <a href="<?php  echo admin_url('requests'); ?>" class="nav-link"><i class="fa fa-bell"></i><span id="autorefresh1" class="badge badge-info"><strong><?php echo count($all_requests); ?></strong></span></a>
                            <li class="nav-item"><a href="<?php echo admin_url('#'); ?>" class="nav-link logout">Profile<i class="fa fa-user"></i></a></li>
                            <li class="nav-item"><a href="<?php echo admin_url('login/logout'); ?>" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
      </header>