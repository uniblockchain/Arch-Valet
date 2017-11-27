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

        <link href="<?php echo admin_css('bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo admin_css('londinium-theme.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo admin_css('styles.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo admin_css('icons.min.css'); ?>" rel="stylesheet" type="text/css">


        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
		
        <script type="text/javascript" src="<?php echo admin_js('jquery.min.js'); ?>"></script>
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
        <script type="text/javascript" src="<?php echo admin_js('bootstrap.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('application.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/multiselect/jquery.multiselect.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/multiselect/jquery.multiselect.filter.js"></script>


<script type="text/javascript">
    var date = $('#datepicker').datepicker({ dateFormat: 'dd-mm-yy' }).val();
</script>



    </head>
    <body class="sidebar-wide" >
        <!-- Navbar -->
        <div class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php  echo admin_url(); ?>"><h1 style='text-transform:capitalize;'><?php //echo config_item('site_name') ;?> 
				<?php  if($this->session->userdata('admin_role') == "superadmin") { 
					echo $this->session->userdata('admin_name'); 
				} else {
					echo $this->session->userdata('admin_building_name');  
				} ?></h1></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">
                    <span class="sr-only">Toggle navbar</span><i class="icon-grid3"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar">
                    <span class="sr-only">Toggle navigation</span><i class="icon-paragraph-justify2"></i>
                </button>
            </div>
            <ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
                <li class="dropdown">
                    <a href="<?php  echo admin_url('requests'); ?>"><i class="icon-bell"></i><span id="autorefresh1" class="label label-default"><?php echo count($all_requests); ?></span></a>

                </li>
               

            <li class="user dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?php echo admin_img('user.png'); ?>" alt="">
                    <span><?php echo $this->session->userdata('admin_name'); ?></span>
                    <i class="caret"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-right icons-right">
                    <li>
                        <a href="#">
                            <i class="icon-user">
                            </i> Profile</a>
                        </li>

                        <li><a href="<?php echo admin_url('login/logout'); ?>"><i class="icon-exit"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /navbar -->