<?php $lang = $this->lang->lang(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>TUCASA24.com | HOMEPAGE</title>

        <!-- CSS Files Loading -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600" />
        <link href="<?php echo theme_css('bootstrap.min.css');  ?>" rel="stylesheet" type="text/css" >
        <link href="<?php echo theme_css('sstyle.css'); ?>" rel="stylesheet" type="text/css">
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
        <section class="menu-section">
            <div class="container">
                <div class="row">
                    <div class=" col-md-2 col-sm-3">
                        <div class="logo">
                            <a href="<?php echo site_url(); ?>">
                            <img class="img img-responsive" src="<?php echo theme_img('logo.png'); ?>" style="padding-top: 15px;">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-10 col-sm-9">
                        <div class="main-menu desktop_menu" id="main-menu ">
                            <nav class="navbar navbar-default" role="navigation">
                                <!--                                // Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header pull-right">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <!--                                 Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse navbar-ex1-collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                    <?php foreach($home_main_menu as $hmm){ ?>    
                                        <li><a href="<?php echo site_url() .'/'. $hmm->url; ?>"><?php echo $hmm->title; ?></a></li>
                                    <?php } ?>

                                    </ul>

                                </div>
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
        </section>


        <div class="lang">
           <ul>
               <li><?php echo anchor($this->lang->switch_uri('en'),'<img src="http://www.printableworldflags.com/icon-flags/24/United%20Kingdom.png"/>',array('style'=>'margin-right:5px;','class'=>'flag_link'));?>
                    
               </li>
               <li>
                   <?php echo anchor($this->lang->switch_uri('es'),'<img src="http://www.printableworldflags.com/icon-flags/24/Spain.png"/>',array('class'=>'flag_link'));?>
               </li>
           </ul>
        </div>


        <section class="slider_section">
            <video autoplay loop>
                <source src="<?php echo site_url('assets/video/home-cleaning.mp4'); ?>" type="video/mp4"></source>
            </video>
            <div class="caption">
                <h1>Encuentra la ayuda ideal</h1>
                <p>Contrata profesionales de limpieza con confirmación inmediata
                    Tú solo dinos dónde y cuándo y nosotros nos encargamos del resto</p>
                <a href="#" class="btn btn-success pink_btn">¡Pide tu primera Tucasa24 aquí!</a>
            </div>
        </section>


        <section class="home_step">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

<?php 
foreach($home_first_step as $f){ 

?>                       
                        <div class="col-sm-4 text-center">

          <?php if($this->session->userdata('admin_name')){ ?>
          <span><a href="<?php echo admin_url('post/edit/'.$f->post_id); ?>" target="_blank">Edit</a></span>
          <?php } ?>

                            <div class="home_detail">
                                <img src="<?php echo base_url('uploads/images/full/'.$f->image) ?>" class="img-responsive center-block" alt="">
                                <h4><?php echo $f->title; ?></h4>
                                <p><?php echo $f->description; ?></p>
                            </div>
                        </div>
<?php } ?>


                        <div class="col-sm-12">
                            <div class="service_detail">
                                <a href="#" class="btn-reservation" title="Reserva ahora">RESERVA AHORA</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-showcase">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-6">
                            <div class="home-showcase__lady">

                                <div class="home-showcase__lady__info">
                                    <h6><?php echo $home_showcase_category->excerpt; ?></h6>
                                </div>
                                <img title="Encantada de ser Tucasa24" src="<?php echo base_url('uploads/images/full/'.$home_showcase_category->image); ?>" alt="<?php echo $home_showcase_category->excerpt; ?>" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="home-showcase__main">
                                      <?php if($this->session->userdata('admin_name')){ ?>
          <span><a href="<?php echo admin_url('post/edit/'.$home_showcase_category->id); ?>" target="_blank">Edit</a></span>
          <?php } ?>

                                <h3><?php echo $home_showcase_category->title; ?></h3>
                                <p><?php echo $home_showcase_category->description; ?> </p>
                            </div>  
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

        <section class="home-reasons">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">



                        <div class="home-reasons__title text-center">
        <?php if($this->session->userdata('admin_name')){ ?>
          <span><a href="<?php echo admin_url('category/edit/'.$home_reasons_category->id); ?>" target="_blank">Edit</a></span>
        <?php } ?>
                            <h3><?php echo $home_reasons_category->title; ?></h3>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    
<?php 
foreach($home_reasons_category_posts as $hrcp){ 
?>
                    <div class="col-sm-6 col-md-3">

        <?php if($this->session->userdata('admin_name')){ ?>
          <span><a href="<?php echo admin_url('post/edit/'.$hrcp->post_id); ?>" target="_blank">Edit</a></span>
        <?php } ?>

                        <div class="home-reasons__reason">
                            <img alt="<?php echo $hrcp->title; ?>" class="image aliada-lady-icon" src="<?php echo base_url('uploads/images/full/'.$hrcp->image); ?>">
                            <h4><?php echo $hrcp->title; ?></h4>
                            <p><?php echo $hrcp->description; ?></p>
                        </div>
                    </div>
<?php } ?>
                    
                </div>
            </div>
        </section>

        <?php if($this->session->userdata('admin_name')){ ?>
          <span><a href="<?php echo admin_url('post/edit/'.$tucasa_warrenty->id); ?>" target="_blank">Edit</a></span>
        <?php } ?>
        <section class="aliada-warranty" style="background-image: url(<?php echo base_url('uploads/images/full/'.$tucasa_warrenty->background_image) ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="aliada-warranty__inner">
                            <img alt="<?php echo $tucasa_warrenty->title; ?>" class="image warranty-seal" src="<?php echo base_url('uploads/images/full/'.$tucasa_warrenty->image); ?>">
                            <h3><?php echo $tucasa_warrenty->title; ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="aliadas-services text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
        <?php if($this->session->userdata('admin_name')){ ?>
          <span><a href="<?php echo admin_url('category/edit/'.$tucasa_service->id); ?>" target="_blank">Edit</a></span>
        <?php } ?>
                        <div class="aliadas-services__title">
                            <h3><?php echo $tucasa_service->title; ?></h3>
                        </div>
                    </div>
                </div>

                <div class="row">

<?php foreach($tucasa_service_posts as $tsp){ ?>
                    <div class="col-sm-3">

        <?php if($this->session->userdata('admin_name')){ ?>
          <span><a href="<?php echo admin_url('post/edit/'.$tsp->post_id); ?>" target="_blank">Edit</a></span>
        <?php } ?>

                        <div class="aliadas-services__service">
                            <img alt="<?php echo $tsp->title; ?>" class="image bed-icon img-responsive" src="<?php echo base_url('uploads/images/full/'.$tsp->image); ?>">
                            <h5><?php echo $tsp->title; ?></h5>
                        </div>
                    </div>
<?php } ?>
                    
                </div>
            </div>
        </section>

        <section class="booknow">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>¿Listo para programar tu visita?</h3>
                        <a title="¡Pide tu primera Tucasa24 aquí!" class="btn btn-success track-create-service" data-area="Safe payment" id="new_user_service" href="/servicio/inicial">¡Pide tu primera Tucasa24 aquí!</a>

                        <div class="booknow__cards">
                            <div class="booknow__cards_list">
                                <img alt="" class="image lock-gray-icon" src="https://d1fnn4c7qqjz6e.cloudfront.net/assets/lock-gray-icon.74698dc3.svg">
                                <img alt="" class="image visacard-icon" src="https://d1fnn4c7qqjz6e.cloudfront.net/assets/visacard-icon.5cac6290.svg">
                                <img alt="" class="image mastercard-icon" src="https://d1fnn4c7qqjz6e.cloudfront.net/assets/mastercard-icon.58f957c7.svg">
                                <img alt="" class="image amex-icon" src="https://d1fnn4c7qqjz6e.cloudfront.net/assets/amex-icon.5fb8c04e.svg">
                            </div>
                            <p>Paga en línea de forma segura.</p>
                            <p>Sin dinero en efectivo, sin problemas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="home-hero-office">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="home-hero__inner">
                            <h3>Limpieza única para oficinas únicas</h3>
                            <h2>
                                <span>¡Tú solo dinos dónde y cuándo y nosotros nos encargamos de dejar tu</span>
                                <span>lugar de trabajo listo para ti!</span>
                            </h2>
                            <a title="¡Pide tu primera Tucasa24 aquí!" class="btn btn-success home-hero-book-cta" data-area="Tucasa24 for offices banner" id="new_user_service" href="/servicio/inicial">¡Pide tu primera Tucasa24 aquí!</a>

                        </div>
                    </div>
                </div>
            </div>
            <!--            <div class="home-hero-office"></div>-->
        </section>

        <section class="user-comments">
            <div class="container">
                <div class="row"></div>
                <div class="user-comments">
                    <?php foreach($tucasa_testimonials as $tt){  ?>
                    <div class="col-sm-6 col-xs-12">

        <?php if($this->session->userdata('admin_name')){ ?>
          <span><a href="<?php echo admin_url('post/edit/'.$tt->post_id); ?>" target="_blank">Edit</a></span>
        <?php } ?>


                        <p>“<?php echo strip_tags($tt->description); ?>”</p>
                        <div class="user-comments__info">
                            <img alt="<?php echo $tt->title; ?>" class="image natalia-feilu-foto-icon img-responsive" src="<?php echo base_url('uploads/images/full/'.$tt->image); ?>">
                            <h3><?php echo $tt->title; ?></h3>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <footer class="main-footer">
            <div class="container">
                <div class="main-footer__top">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="main-footer__top-section">
                                <div class="logo">
                                    <a href="#">
                                        <h3>tucasa24.com</h3>
                                    </a>
                                </div>
                                <div class="call-us">
                                    <div class="call-us__hours">
                                        <p id="contact-info-aliada">
                                            ¿Necesitas ayuda? Escríbenos a:
                                        </p>
                                        <a href="#"><span class="icon-mail-envelope"></span>
                                            info@tucasa24.com
                                        </a><p>
                                            <a target="_blank" href="#"><img alt="" src="https://d1fnn4c7qqjz6e.cloudfront.net/assets/facebook-messenger.1a68d49b.svg">
                                                Deja tu Mensaje en Facebook
                                            </a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="main-footer__top-section">
                                <div class="main-footer__recruitment-cta">
                                    <h2>Quieres formar parle del equpo de serncio del hojar de Tucasa24 ?</h2>
                                    <a title="¡Únete a Tucasa24!" class="btn track-work-as-aliada" data-area="Footer" href="/seraliada">clic aqui</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="main-footer__bottom">
                        <div class="col-sm-6">
                            >                    <div class="main-footer__legal">
                                <div class="main-footer__legal__links">
                                    <a title="Términos y Condiciones" href="/terminos">Términos y Condiciones</a>
                                    <a title="Política de Privacidad" href="/privacidad">Política de Privacidad</a>
                                </div>
                                <span>2016 TUCASA24. Todos los derechos reservados.</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="main-footer__social">
                                <a title="Mixpanel" href="https://mixpanel.com/"><img alt="Mobile Analytics" src="//cdn.mxpnl.com/site_media/images/partner/badge_light.png">
                                </a><a target="_blank" href="https://facebook.com/"><img class="image facebook-icon" alt="Facebook" src="https://d1fnn4c7qqjz6e.cloudfront.net/assets/facebook-icon.adace7c2.svg">
                                </a><a target="_blank" href="https://twitter.com/"><img class="image twitter-icon" alt="Twitter" src="https://d1fnn4c7qqjz6e.cloudfront.net/assets/twitter-icon.93f17e4a.svg">
                                </a><a target="_blank" href="https://instagram.com/"><img class="image instagram-icon" alt="instagram" src="https://d1fnn4c7qqjz6e.cloudfront.net/assets/instagram-icon.83abcd5f.svg">
                                </a><a target="_blank" href="https://www.youtube.com/"><img class="image youtube-icon" alt="YouTube" src="https://d1fnn4c7qqjz6e.cloudfront.net/assets/youtube-icon.13ec8c20.svg">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- jQuery Files Loading -->
        <script src="<?php echo theme_js('jquery.min.js'); ?>"></script>
        <script src="<?php echo theme_js('bootstrap.min.js'); ?>"></script>
        <script src="<?php echo theme_js('scripts.js'); ?>"></script>
        <script src="<?php echo theme_js('jquery.sidr.js'); ?>"></script>
        <script>
            $(document).ready(function() {
                $('#simple-menu').sidr({
                    side: 'right' 
                });
            });
        </script>
        <script>
            $(document).on('scroll',function(){
                if($(this).scrollTop() > 150){
                    $('.menu-section').addClass('sticky');
                }else{
                    $('.menu-section').removeClass('sticky');
                }
            })
        </script>

    </body>
</html>
