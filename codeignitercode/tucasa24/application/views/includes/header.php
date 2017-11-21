<?php  $lang = $this->lang->lang(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>TUCASA24.com</title>

        <!-- CSS Files Loading -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600" />
        <link href="<?php echo theme_css('bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" >
        
        <link href="<?php echo theme_css('style.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo theme_css('media.css'); ?>" rel="stylesheet" type="text/css">        
        <link href="<?php echo theme_css('pro.css'); ?>" rel="stylesheet" type="text/css">        


        <link rel="stylesheet" type="text/css" href="<?php echo theme_css('jquery.sidr.light.css'); ?>">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container-fluid">
            <div class="row innerpage_menu_section">
                <div class="container">
                    <div class=" col-md-2 col-sm-3">
                        <div class="logo">
                            <a href="<?php echo site_url(); ?>">
                            <img class="img img-responsive" src="<?php echo theme_img('logo.png'); ?>" style="padding-top: 15px;">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-10 col-sm-9">
                        <div class="main-menu desktop_menu" id="main-menu">
                            <nav class="navbar navbar-default menu_navigation" role="navigation">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header pull-right">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse navbar-ex1-collapse">
                                    <ul class="nav navbar-nav navbar-right innerpage_menu">    
                                    <?php foreach($home_main_menu as $hmm){ ?>    
                                        <li><a href="<?php echo site_url() .'/'. $hmm->url; ?>"><?php echo $hmm->title; ?></a></li>
                                    <?php } ?>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </nav>
                        </div>
                        <div class="menu">
                            <a id="simple-menu" href="#sidr">
                                <img src="<?php echo theme_img('menu.gif'); ?>" class="img-responsive">
                            </a>

                            <div id="sidr">
                                <!-- Your content -->
                                <ul>
                                    <li><a href="<?php echo site_url(); ?>">Homepage</a></li>
                                    <?php foreach($home_main_menu as $hmm){ ?>    
                                        <li><a href="<?php echo site_url() .'/'. $hmm->url; ?>"><?php echo $hmm->title; ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>


        <div class="lang">
           <ul>
               <li><?php echo anchor($this->lang->switch_uri('en'),'<img src="http://www.printableworldflags.com/icon-flags/24/United%20Kingdom.png"/>',array('style'=>'margin-right:5px;','class'=>'flag_link'));?>
                    
               </li>
               <li>
                   <?php echo anchor($this->lang->switch_uri('es'),'<img src="http://www.printableworldflags.com/icon-flags/24/Spain.png"/>',array('class'=>'flag_link'));?>
               </li>
           </ul>
        </div>
            
