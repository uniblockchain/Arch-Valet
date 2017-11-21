<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>TUCASA24.com | RESERVATION</title>

        <!-- CSS Files Loading -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600" />
        <link href="<?php echo theme_css('bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" >
        
        <link href="<?php echo theme_css('style.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo theme_css('media.css'); ?>" rel="stylesheet" type="text/css">        
        <link href="<?php echo theme_css('pro.css'); ?>" rel="stylesheet" type="text/css">       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker.css" />

        <link rel="stylesheet" type="text/css" href="<?php echo theme_css('jquery.sidr.light.css'); ?>">  
        <link rel="stylesheet" type="text/css" href="<?php echo theme_css('jquery.sidr.light.css'); ?>">
        
        
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        


<script src="<?php echo theme_js('jquery.min.js'); ?>"></script>
<script src="<?php echo theme_js('payment.js'); ?>"></script> 


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        



        
    </head>
    <body>
        <div class="container-fluid" style="background: #E3F5F7;">
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


            <div class="row reservation_body">
                <div class="container reservation_body">
                    <div class="col-xs-12 col-sm-8 col-md-9 reservation_navigation">
                        <div class="row">
                            <div class="list-group wizard-menu booking_step_menu">
                                <div class="list-group-item active step-1-menu bs_menu_item">
                                    <h4 class="list-group-item-heading menuheading1">1. Detalles de la reserva <img class="tippng" src="<?php echo theme_img('dirtip.png'); ?>"></h4>
                                </div>
                                <div href="#" class="list-group-item step-2-menu bs_menu_item">
                                    <h4 class="list-group-item-heading menuheading2">
                                        2. Datos de contacto 
                                        <img class="tippng tippng1w" src="<?php echo theme_img('dirtipwh.png'); ?>">
                                         <img class="tippng tippn2b" src="<?php echo theme_img('dirtip.png'); ?>">
                                    </h4>
                                  
                                </div>
                                <div href="#" class="list-group-item step-3-menu bs_menu_item">
                                    <h4 class="list-group-item-heading menuheading3">3. Datos de pago </h4>
                                </div>
                            </div>
                        </div>
                        <div class="row reserrvation_form_box">
                            
                            <!--                Load content in-->
                            <div class="well wizard-content main_rf_box step1box">
                                <div class="step-1">
                                    
                               <div class="row calendar_checkdate">
                                        <div class="col-xs-12 col-xm-12 col-md-12">
                                            <h2 class="rf_title_block">
                                                ¿Cuándo?
                                                <span class="rf_text_blue">*</span>
                                            </h2>
                                            <p class="rf_subtitle_block">
                                                Selecciona el día que empezamos:
                                            </p>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 datepicker_calendar_wrapper">
                                            <div style="overflow:hidden;">
                                              
                                                            <div id="datetimepicker12"></div>
                            
                                                <script type="text/javascript">
                                                    $(function () {
                                                        var dateNow = new Date();
                                                        $('#datetimepicker12').datetimepicker({
                                                            inline: true,
                                                            sideBySide: true,
                                                            stepping: 30,
                                                            format: 'DD-MM-YY HH:mm',
                                                            minDate: moment().startOf('day'),
                                                            defaultDate:moment(dateNow).hours(08).minutes(00),
                                                            disabledTimeIntervals: [ [ moment().hour(0), moment().hour(7).minutes(30) ], [ moment().hour(20).minutes(00), moment().hour(24) ] ]
                                                        });


                                                    $("#datetimepicker12").on("dp.change", function (e) {
                                                
                                                       var aaa = e.date;
                                                       var choosendate = e.date.format('DD/MM/YYYY');
                                                       var choosentime = e.date.format('HH:mm');

                                                       //$("#datetimepicker12").data("DateTimePicker").minDate(aaa.hours(08).minutes(00));
                                                       
                                                        $('#newdate').empty();
                                                        $('#newdate').append('<i class="fa fa-calendar-o sb_icons" aria-hidden="true"></i>'+choosendate);
                                                        $('#ChoosedDate').val(choosendate);
                                                        $('#ChoosedTime').val(choosentime);

                                                        $('#from').empty();
                                                        $('#from').append(choosentime);

                                                        var time1 = $('#from').text()
                                                        var time2 = $('#input-time').val();

                                                        var totaltime = formatTime(timestrToSec(time1) + timestrToSec(time2));

                                                        $('#to').empty();
                                                        $('#to').append(totaltime);


                                                    });



                                                    });
                                                </script>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    <hr>
                                    
                                    
                                    
                                    
                                    <div class="row hrs_needed_sec">
                                        <div class="col-md-12">
                                            <!-- add attribute data-action="" and data-method="" with path to file and form-method to submit form -->
                                            <h2 class="rf_title_block">
                                                ¿Cuántas horas necesitas?
                                                <span class="rf_text_blue">*</span>
                                            </h2>
                                            <p class="rf_subtitle_block">
                                                Si tienes dudas puedes utilizar nuestra
                                                <a href="javascript:void()" data-toggle="modal" data-target="#my_calculationform">calculadora.</a>
                                            </p>

                                            
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-offset-3">
                                                        <div class="input-group number-spinner">
                                                            <span class="input-group-btn">
                                                                <a class="btn btn-default sub_val btn-subtract" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></a>
                                                            </span>
                                                            <input type="text" class="form-control text-center main_val" value="2:00" id="input-time"  data-minutes="120" disabled="disabled" >

                                                            <span class="input-group-btn">
                                                                <a class="btn btn-default add_val btn-add" data-dir="up"><span class="glyphicon glyphicon-plus"></span></a>
                                                            </span>

                                                        </div>
                                                        <p class="time_info">Los servicios de 7 horas o más son realizados por 2 personas. (Ej.: 8 horas = 2 personas durante 4 horas)</p>
                                                        <div class="inc_pop_up"><a href="javascript:void()" data-toggle="modal" data-target="#our_service_include">¿Qué incluye el servicio?</a></div>
                                                    </div>
                                                </div>
                                               
                                                
                                            
                                        </div>
                                    </div>
                                        <hr>
                                    <div class="row clnpr_needed_sec">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <h2 class="rf_title_block">
                                                ¿Necesitas productos de limpieza? 
                                                <span class="rf_text_blue">*</span>
                                            </h2>
                                            <p class="rf_subtitle_block">
                                                Incluye productos líquidos y trapos, pero debes disponer de los 
                                                <a href="javascript:void()" data-toggle="modal" data-target="#clproducts_required">utensilios básicos de limpieza. </a>
                                            </p>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="row">
                                                        
                                                            <div class="col-xs-12 col-sm-6">
                                                                
                                                                <button type="button" id="yes" class="btn btn-primary btn-radio">
                                                                    <img src="<?php echo theme_img('cleaningprds.png'); ?>" class="img-responsive img-radio center-block">
                                                                    <span class="rdbtn_text"><strong>Si</strong><br> por 2€/día</span> 
                                                                </button>
                                                                <input type="checkbox" id="si" class="hidden">
                                                            </div>
                                                            <div class="col-xs-12 col-sm-6">
                                                                
                                                                <button type="button" id="no" class="btn btn-primary btn-radio">
                                                                    <img src="<?php echo theme_img('cleaningprdsntr.png'); ?>" class="img-responsive img-radio blimg center-block">
                                                                    <span class="rdbtn_text"><strong>No</strong><br>ya los tengo en casa</span> 
                                                                </button>
                                                                <input type="checkbox" id="nsi" class="hidden">
                                                            </div>
                                                </div>
                                        </div>
                                    </div>
                                        
                                    <hr>
                                    <div class="row howoften_services">
                                        <div class="col-xs-12 col-xm-12 col-md-12">
                                            <h2 class="rf_title_block">
                                                ¿Con qué frecuencia necesitas el servicio?
                                                <span class="rf_text_blue">*</span>
                                            </h2>
                                            <p class="rf_subtitle_block">
                                                Puedes cancelar o modificar tu servicio cuando quieras (hasta 18h antes).
                                            </p>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-4" >
                                                        <button type="button" class="btn btn-primary btn-radio chbx_btn" id="first">
                                                            <img src="<?php echo theme_img('cal.png'); ?>" class="img-responsive img-radio center-block">
                                                            <span class="rdbtn_text_cal"><strong id="service1">Solamente una vez</strong><br>9,95€/h</span>    
                                                        </button>
                                                        <input type="checkbox" id="onetime" class="hidden">
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-4" >

                                                        <button type="button" class="btn btn-primary btn-radio chbx_btn" id="second">
                                                            <img src="<?php echo theme_img('calrecur.png'); ?>" class="img-responsive img-radio blimg center-block">
                                                            <span class="rdbtn_text_cal"><strong id="service2">Cada semana </strong><br>9,95€/h </span>  
                                                        </button>
                                                        <input type="checkbox" id="onceaweek" class="hidden">
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-4">

                                                        <button type="button" class="btn btn-primary btn-radio chbx_btn" id="third">
                                                            <img src="<?php echo theme_img('calrecur.png'); ?>" class="img-responsive img-radio blimg center-block">
                                                            <span class="rdbtn_text_cal"><strong id="service3">Cada 2 semanas</strong><br>9,95€/h</span> 
                                                        </button>
                                                        <input type="checkbox" id="twice" class="hidden">
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    
                                    <hr>

                                    <hr>
                                    <p>* Campos obligatorios</p>
                                    <div class="pull-right">
                                        <button class="btn btn-primary" onclick="open_formm()">Siguiente</button>
                                    </div>
                                </div>
                            </div>
                            
                        

                       <form method="post" action="<?php echo site_url('reservation_process'); ?>" name="reservation_form" id="form-stripe_payments" accept-charset="utf-8">    
                            <div class="well wizard-content main_rf_box step2box" id="stripe-details-form">



                            <input type="hidden" id="TotalAmount" name="TotalAmount" value="22" />
                            <input type="hidden" id="ExtraAmount" name="ExtraAmount" value="0">
                            <input type="hidden" id="yesrequired" name="yesrequired" value="0">
                            <input type="hidden" id="ChoosedDate" name="ChoosedDate" value="">
                            <input type="hidden" id="ChoosedTime" name="ChoosedTime" value="8:00">
                            <input type="hidden" id="ChoosedService" name="ChoosedService" value="0">
                            <input type="hidden" id="TotalTime" name="TotalTime" value="2:00">

                                <div class="step-2">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-sm-12 form_detail">
                                                    <h3>Your details</h3>
                                                    <a href="<?php echo site_url('login'); ?>">Already a customer? Log in here.</a>
                                                </div>
                                            </div>
                                            <hr style="border:1px dotted #ccc;">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="contact_label">First Name *</label>
                                                        <input type="text" name="fname" id="fname" class="form-control detail-control " >
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="contact_label">Last Name *</label>
                                                        <input type="text" name="lname" id="lname" class="form-control detail-control " >
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="contact_label">Email *</label>
                                                        <input type="email" name="email" id="email" class="form-control detail-control " >
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="contact_label">Mobile *</label>
                                                        <input type="text" name="mobile" id="mobile" class="form-control detail-control" >
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="contact_label">Password *</label>
                                                        <input type="password" name="password" id="password" class="form-control detail-control" >
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="contact_label">Confirm Password *</label>
                                                        <input type="password" name="confirm_password" id="confirm_password" class="form-control detail-control" >
                                                    </div>
                                                </div>
                                            </div>
                                                
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <div class="address_panel">
                                                        <h4>Address of the property to be cleaned</h4>
                                                        <hr style="border:1px dotted #ccc;">
                                                    </div>
                                                        
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label class="contact_label">Address Line 1</label>
                                                                <input type="text" name="address_line1" id="address_line1" class="form-control detail-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label class="contact_label">Address Line 2</label>
                                                                <input type="text" name="address_line2" id="address_line2" class="form-control detail-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label class="contact_label">Postcode</label>
                                                                <input type="text" name="postal" id="postal" class="form-control detail-control post_code_control" value="D2" required>
                                                                <p class="help_box">The postcode cannot be changed once cleaners have been found, because we use it to find the nearest cleaners</p>
                                                            </div>
                                                        </div>
                                                            
                                                        <div class="col-xs-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label class="contact_label">Town</label>
                                                                <input type="text" name="town" id="town" class="form-control detail-control post_code_control town_control" value="Dublin">
                                                            </div>
                                                        </div>
                                                            
                                                    </div>
                                                </div>
                                            </div>
                                                
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <div class="address_panel">
                                                        <h4>Extra information about your clean</h4>
                                                        <hr style="border:1px dotted #ccc;">
                                                    </div>
                                                        
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12">
                                                            <div class="form-group">
                                                                <label class="contact_label">Booking notes for the cleaner</label>
                                                                <textarea class="form-control detail-control" rows="5" name="message" id="message" placeholder="Let us know if you have any specific requirements."></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12">
                                                            <label class="contact_label">
                                                                <input  type="checkbox">
                                                                I accept the terms and conditions.
                                                                <a target="_blank" href="#">(View terms)</a>
                                                            </label>
                                                        </div>
                                                            
                                                        <div class="col-xs-5 col-sm-6 col-md-6">
                                                            <div class="button_back">
                                                                <a onclick="back_tomain()"   class="btn btn-primary btn-prev">Â« AtrÃ¡s</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-7 col-sm-6 col-md-6">
                                                            <div class="pull-right wizard-nav">
                                                                <a class="btn btn-primary" onclick="proceed_form()">Proceed To Payment</a>
                                                            </div>
                                                        </div>
                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>                              
                         


                            
                            <div class="well wizard-content main_rf_box step3box" id="payment-stripe_payments">
                                <div class="step-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">



                                                <div class="reserve_payment">
                                                    <h4>Opciones de pago</h4>
                                                        <ul>
                                                            <li>
                                                                <input type="radio" id="payment" name="payment" style="" class="" checked="" value="credit_card">
                                                                <label for="payment" class="payment_label">Tarjeta de crÃ©dito / dÃ©bito</label>
                                                                <span class="credits">
                                                                    <span class="visa"><img src="<?php echo theme_img('visa_c.png'); ?>"></span> 
                                                                    <span class="mastercard"><img src="<?php echo theme_img('m_card.png'); ?>"></span></span>
                                                            </li>
                                                        </ul>
                                                        <div id="payment_div" class="col-xs-12 col-md-12">

                                                            <div class="col-xs-12 col-md-6">
                                                                <div class="form-group">
                                                                <input id="stripe_card_num" name="card_num" type="text" class="form-control r_control" value="" size="30"  placeholder="Card Number"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-md-2">
                                                                <div class="form-group">
        <?php
        
        $months = array('01'=>'01','02'=>'02','03'=>'03','04'=>'04','05'=>'05','06'=>'06','07'=>'07','08'=>'08','09'=>'09','10'=>'10','11'=>'11','12'=>'12');
        $y      = date('Y');
        $x      = $y+20;
        $years  = array();
        while($y < $x)
        {
            $years[$y] = substr($y, strlen($y)-2, 2);
            $y++;
        }
        echo form_dropdown('expiration_month', $months, '', 'id="stripe_expiration_month" class="form-control r_control select_control" placeholder="Expiration Month"');
        ?>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-md-2">
                                                                <div class="form-group">
        <?php
        echo form_dropdown('expiration_year', $years, '', 'id="stripe_expiration_year" class="form-control r_control select_control" placeholder="Expiration Year"');
        ?>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-md-2">
                                                                <div class="form-group">
                                                                <input class="form-control r_control" name="cvc_code" type="text" class="pmt_required textfield input" id="stripe_cvc_code" maxlength="4" value="" placeholder="CVC" />
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-md-12">
                                                                <div class=" form-group reserve_content">
                                                                    <p>RecibirÃ¡s un cargo de 1â‚¬ (que serÃ¡ devuelto) para verificar la tarjeta. El servicio no se cobrarÃ¡ hasta que estÃ© terminado. El proceso de pago puede tardar, por favor no actualices la pÃ¡gina.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-md-12">
                                                            <div class="payment_2">
                                                                <ul>
                                                                    <li>
                                                                        <input type="radio" name="payment" style="" class="" checked="" value="paypal">
                                                                        <label for="payment" class="payment_label">Efectivo</label>
                                                                    </li>
                                                                </ul>
                                                                <div class="payment_2_content form-group">
                                                                    <p>TambiÃ©n puedes pagar en efectivo directamente a la persona que venga. No hay cambio disponible.</p>
                                                                </div>
                                                                <div class="col-xs-5 col-sm-6 col-md-6">
                                                                    <div class="button_back">
                                                                        <a onclick="open_formm()" class="btn btn-primary">Â« AtrÃ¡s</a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-7 col-sm-6 col-md-6">
                                                                    <div class="pull-right wizard-nav">
                                                                    <input class="btn btn-primary" type="submit" value="Confirmar Compra">
                                                                        <!-- <button type="submit" class="btn btn-primary">Confirmar Compra</button> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>

</div>

  </form>
                           
                            
                        </div>
                    </div>

                    <div class="col-xs-hidden col-sm-4 col-md-3 res_page_sidebar">
                        <h2 class="res_page_stitle">Tu reserva</h2>
                        <ul class="booking_time_detail">
                            <li id="newdate"><i class="fa fa-calendar-o sb_icons" aria-hidden="true"></i></li>
                            <li><i class="fa fa-clock-o sb_icons" aria-hidden="true"></i><span id="from"> 8:00 </span>-<span id="to">10:00</span> h</li>
                            <li id="appendservice"><i class="fa fa-calendar-check-o sb_icons" aria-hidden="true"></i>solamente una vez</li>
                        </ul>
                        <ul class="booking_time_cost">
                            <li><span class="flft">Duración</span><span class="fryt" id="duration">2:00 horas</span></li>
                            <li><span class="flft">Precio</span><span class="fryt">11€ / h</span></li>
                            <li id="products"><span class="flft">Productos</span><span class="fryt"><strong>+2 € día</strong></span></li>

                        </ul>
                        <div class="row bk_total_block">
                            <span class="total_amt flft textStyle">Total</span>
                            <span class="price_amt fryt textStyle" id="totalAmount">22 €</span><span></span>


                        </div>

                        <div class="booking-process__secure">

                            <div class="secure-container">

                                <img src="https://clintu.es/includes/templates/images/booking/secure-seals.png" class="cards">



                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>

        <div id="my_calculationform" class="modal fade" role="dialog">
            <div class="modal-dialog reservemodal">

                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close closemodal" data-dismiss="modal">&times;</button>
                    <div class="modal-header md_head">
                        <h2 class="modal-title">Calculadora orientativa</h2>
                        <p class="modalHeaderSub">Si no tienes claro cuantas horas necesitas te ayudamos:</p>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="row anothorow">
                                    <div class="col-md-2 col-sm-2 col-xs-2 minus"><span class="glyphicon glyphicon-minus"></span></div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 betweenword"><b>3</b> Habitaciones</div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 plus"><span class="glyphicon glyphicon-plus"></div>
                                </div>
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="row anothorow">
                                    <div class="col-md-2 col-sm-2 col-xs-2 minus"><span class="glyphicon glyphicon-minus"></span></div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 betweenword"><b>3</b> Baños</div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 plus"><span class="glyphicon glyphicon-plus"></span></div>
                                </div>
                            </div> 

                        </div>

                        <div class="row checklists">
                            <div class="col-md-6 col-sm-6 col-xs-12 checklistcol">
                                <input type="checkbox"> Horno y microondas ( 1h)
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 checklistcol">
                                <input type="checkbox"> Interior nevera ( 1h)
                            </div>

                        </div>

                        <div class="row checklists">
                            <div class="col-md-6 col-sm-6 col-xs-12 checklistcol">
                                <input type="checkbox"> Interior cristales ( 1h)
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 checklistcol">
                                <input type="checkbox"> Armarios ( 1h)
                            </div>

                        </div>

                        <div class="row anotherSelectlist">
                            <div class="col-md-3"></div>
                            <div class="col-md-6 anotherSelectlistCol">
                                <div class="row plancharow">
                                    <div class="col-md-2 col-sm-2 col-xs-2 minus"><span class="glyphicon glyphicon-minus"></span></div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 betweenword"><b>0:00</b> h de plancha</div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 plus"><span class="glyphicon glyphicon-plus"></div>

                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>

                    </div>

                    <div class="row tiemporow">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p class="tiempo">Tiempo recomendado para mantenimiento</p>
                            <p class="tiempo2">7:00 horas</p>
                        </div>
                    </div>

                    <div class="row">
                        <button class="reserve_btn">RESERVA AHORA</button>
                    </div>
                </div>

            </div>
        </div>

        <div id="our_service_include" class="modal fade" role="dialog">
            <div class="modal-dialog reservemodal">

                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close closemodal" data-dismiss="modal">&times;</button>

                    <div class="modal-body inc_mod_bdy">
                        <div class="row incs_servs">
                            <div class="col-md-4 col-sm-4 col-xs-12 inc_ser">
                                <h3 class="mod_title"> Cocina y baños </h3>
                                <p>Dedica tus horas a limpiar a fondo la cocina o el baño. Puedes pedirlo directamente en el momento del servicio.</p>
                            </div> 
                            <div class="col-md-4 col-sm-4 col-xs-12 inc_ser">
                                <h3 class="mod_title"> Suelos y polvo </h3>
                                <p>Barrer o aspirar y fregar el suelo de todas las estancias y quitar el polvo de los muebles, aparatos electrónicos u otras superfícies.</p>
                            </div> 
                            <div class="col-md-4 col-sm-4 col-xs-12 inc_ser">
                                <h3 class="mod_title"> Plancha </h3>
                                <p>Si lo prefieres, puedes dedicar tus horas a plancha. Calcula unas 6-8 prendas por hora, siempre que no haya sábanas, manteles, ...</p>
                            </div> 


                        </div>
                        <div class="row includes_wrapper_det">
                                <div class="col-md-12 inc_tabs_table">
                                    <!-- Nav tabs -->
                                    <div class="card">
                                        <ul class="nav nav-tabs inc_tabs" role="tablist">
                                            <li role="presentation" class="active inc_li"><a href="#1c" aria-controls="1" role="tab" data-toggle="tab">Cocina</a></li>
                                            <li role="presentation" class="inc_li"><a href="#2c" aria-controls="2" role="tab" data-toggle="tab">Salón Comedor</a></li>
                                            <li role="presentation" class="inc_li"><a href="#3c" aria-controls="3" role="tab" data-toggle="tab">Dormitorio</a></li>
                                            <li role="presentation" class="inc_li"><a href="#4c" aria-controls="4" role="tab" data-toggle="tab">Baño</a></li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content inc_tab_content_det">
                                            <div role="tabpanel" class="tab-pane active" id="1c">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 inc_tab_detailbox_det">
                                                        <p>Limpiar cubiertas del extractor, poner o vaciar lavaplatos y fregar platos pendientes, limpiar la grifería, limpiar las superficies y el microondas, limpiar fogones o vitrocerámica, vaciar basura, barrer / aspirar y fregar el suelo.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="2c">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 inc_tab_detailbox_det">
                                                        <p>Limpieza polvo del mobiliario, colocar bien el sofá y cojines, quitar polvo de los cuadros y otros elementos decorativos, limpieza exterior de muebles y armarios, limpieza de superficies, tirar basuras, barrer / aspirar y fregar el suelo.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="3c">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 inc_tab_detailbox_det">
                                                        <p>Ventilar, hacer la cama, doblar ropa, limpiar muebles, vaciar papeleras, quitar el polvo de las superficies, barrer/aspirar y fregar el suelo.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="4c">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 inc_tab_detailbox_det">
                                                        <p>Limpiar las superficies, limpiar espejos, limpieza azulejos, desinfección y limpieza del baño, limpiar grifos, limpieza del Inodoro y Bidé, barrer/aspirar y fregar el suelo.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <h3 class="mod_title">¿Qué no incluye?</h3>
                                <p>Hay servicios que no se hacen, como limpieza de tapicerías, limpieza de cristales en zonas con riesgo de caer (exteriores en pisos altos), limpieza de cortinas, limpiar o arreglar el jardín, tratamientos de zonas con hongos o material peligroso o exterminación de insectos.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        <div id="clproducts_required" class="modal fade" role="dialog">
            <div class="modal-dialog reservemodal">

                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close closemodal" data-dismiss="modal">&times;</button>
                    <div class="modal-header md_head">
                        <h2 class="modal-title">Utensilios básicos de limpieza</h2>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <h3 class="pphtitle">¿Qué deberias tener en casa para poder realizar el servicio?</h3>
                                <ul class="pplisting">
                                    <li>Aspirador o escoba y recogedor</li>
                                    <li>Fregona y cubo</li>
                                    <li>Cepillo de baño y guantes</li>
                                    <li>Trapos o gamuzas</li>
                                </ul>
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <h3 class="pphtitle">La persona lleva los productos líquidos por sólo 2€/día</h3>
                                <ul class="pplisting">
                                    <li>Limpiador suelos</li>
                                    <li>Limpiacristales</li>
                                    <li>Limpiamaderas</li>
                                    <li>Limpiador baño</li>
                                    <li>Quitagrasas</li>
                                    <li>Antical</li>
                                </ul>
                            </div> 

                        </div>

                        <div class="row">
                            <p><strong>No se puede incluir:</strong> productos para el lavavajillas, productos de limpieza para alfombras o tapicería, insecticidas, ambientadores o productos específicos para mascotas.</p>
                        </div>

                    </div>

                </div>

            </div>
        </div>


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
                                    <h2>¿Eres profesional de la limpieza?</h2>
                                    <p>Envia tu solicitud para unirte a Aliada.</p>
                                    <a title="¡Únete a Aliada!" class="btn track-work-as-aliada" data-area="Footer" href="/seraliada">¡Únete a Aliada!</a>
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
                                <span>2016 Aliada. Todos los derechos reservados.</span>
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



        
        <script src="<?php echo theme_js('bootstrap.min.js'); ?>"></script>
        <script src="<?php echo theme_js('moment.js'); ?>"></script>
        
        <script src="<?php echo theme_js('scripts.js'); ?>"></script>
        <script src="<?php echo theme_js('custom.js'); ?>"></script>
        <script src="<?php echo theme_js('jquery.sidr.js'); ?>"></script>
        <script src="<?php echo theme_js('jquery-ui-min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo theme_js('bootstrap-datetimepicker.min.js'); ?>"/></script>




 <script>
              

                var today = new Date();
                var dd = today.getDate();
                var mm = today.getMonth()+1; //January is 0!

                var yyyy = today.getFullYear();
                if(dd<10){
                    dd='0'+dd
                } 
                if(mm<10){
                    mm='0'+mm
                } 
                var today = dd+'/'+mm+'/'+yyyy;
                $('#newdate').empty();
                $('#newdate').append('<i class="fa fa-calendar-o sb_icons" aria-hidden="true"></i>'+today);
                $('#ChoosedDate').val(today);
                $(function () {
                    $("#products").hide();
                    $('#yes').click(function(e) {
                        $("#products").show();
                        $('#yesrequired').val(2);

                        var ttlamthidden = $('#TotalAmount').val();
                        var gtotal = parseFloat(ttlamthidden);
                        var extra = $('#yesrequired').val();
                        var lateradded = gtotal+parseFloat(extra);
                    
                    
                    $('#TotalAmount').val(gtotal);
                    $('#totalAmount').empty();
                    $('#totalAmount').append(lateradded+' €');


                    });

                    $('#no').click(function(e) {
                        $("#products").hide();
                         

                        var ttlamthidden = $('#TotalAmount').val();
                        var gtotal = parseFloat(ttlamthidden);
                        var extra = $('#yesrequired').val();
                        var lateradded = gtotal-parseFloat(extra);
                        
                        $('#yesrequired').val(0);
                       
                    $('#TotalAmount').val(gtotal);
                    $('#totalAmount').empty();
                    $('#totalAmount').append(gtotal+' €');

                    });


                });



             

                   
                   
                   
              
           $(document ).ready(function() {
               
               $( "#datepicker" ).datepicker();
               
                   $('.step2box').hide();
                   $('.step3box').hide();
                   
                 
                   
            });                              
                            
                            </script>
        <script>
            $(document).ready(function() {
                $('#simple-menu').sidr({
                    side: 'right' 
                });
                $(function () {
                    $('.btn-radio').click(function(e) {
                        $('.btn-radio').not(this).removeClass('active')
                        .siblings('input').prop('checked',false)
                        .siblings('.img-radio').css('opacity','0.5');
                        $(this).addClass('active')
                        .siblings('input').prop('checked',true)
                        .siblings('.img-radio').css('opacity','1');
                    });
                });
            });
        </script>
        <script>




            function timestrToSec(timestr) {
              var parts = timestr.split(":");
              return (parts[0] * 3600) +
                     (parts[1] * 60)
            }

            function pad(num) {
              if(num < 10) {
                return "0" + num;
              } else {
                return "" + num;
              }
            }

            function formatTime(seconds) {
              return [pad(Math.floor(seconds/3600)%60),
                      pad(Math.floor(seconds/60)%60),
                      
                      ].join(":");
            }






            $(document).on('scroll',function(){
                if($(this).scrollTop() > 150){
                    $('.innerpage_menu_section').addClass('sticky');
                }else{
                    $('.innerpage_menu_section').removeClass('sticky');
                }
            })
            
            
            $(function() {
                var $input = $('#input-time');
                var mainVal = document.getElementById("input-time").value;
                var currentTime = parseInt($input.data('minutes'));
                

                $('.btn-add').on('click', function(){
                    newval = document.getElementById("input-time").value;
                    if(newval == '10:00')
                    return false;
                    changeTime(30);
                    
                    var time1 = $('#from').text()
                    var time2 = $('#input-time').val();

                    var totaltime = formatTime(timestrToSec(time1) + timestrToSec(time2));

                $('#to').empty();
                $('#to').append(totaltime);

                $('#duration').empty();
                $('#duration').append(time2+ ' horas');

                
                    var twoHour = time2.split(":");
                    var hour = parseFloat(twoHour[0]);
                    var min = parseFloat(twoHour[1]);
                    var actmin = hour*60+min-120;
                    var ttlamt1 = actmin*0.1658333333333333;
                    var ttlamt = ttlamt1+22;
                    var roundedttl = ttlamt.toFixed(2);

                    $('#TotalAmount').val(roundedttl);
                    var extra = $('#yesrequired').val();

                    var grandtotal = parseFloat(roundedttl)+parseFloat(extra);

                    $('#totalAmount').empty();
                    $('#totalAmount').append(grandtotal+' €');
                    $('#TotalTime').val(time2);


                });



                $('.btn-subtract').on('click', function(){
                    newval = document.getElementById("input-time").value;
                    if(newval == '2:00')
                    return false;
                    changeTime(-30);  

                    var time1 = $('#from').text()
                    var time2 = $('#input-time').val();

                    var totaltime = formatTime(timestrToSec(time1) + timestrToSec(time2));

                    $('#to').empty();
                    $('#to').append(totaltime);

                    $('#duration').empty();
                    $('#duration').append(time2+ ' horas');


                    var twoHour = time2.split(":");
                    var hour = parseFloat(twoHour[0]);
                    var min = parseFloat(twoHour[1]);

                    var actmin = hour*60+min-120;
                    var ttlamt1 = actmin*0.1658333333333333;
                    var ttlamt = ttlamt1+22;
                    var roundedttl = ttlamt.toFixed(2);

                    
                    if(time2 == '2:00'){
                        roundedttl = 22;
                    }

                    $('#TotalAmount').val(roundedttl);
                    var extra = $('#yesrequired').val();

                    var grandtotal = parseFloat(roundedttl)+parseFloat(extra);


                    $('#totalAmount').empty();
                    $('#totalAmount').append(grandtotal+' €');
                    $('#TotalTime').val(time2);

                });
                
                
                
                function changeTime(mins){
                    var currentTime = parseInt($input.data('minutes')),
                    
                    newTime = currentTime + mins, 
                    minutes = (newTime % 60).toString(),
                    hours = (Math.floor(newTime / 60)).toString();
                    
                    if (minutes.length === 0){
                        minutes = "00";
                    }
                    else if(minutes.length === 1){
                        minutes = "0" + minutes;
                    }
                    $input.data('minutes', newTime).val(hours + ":" + minutes);
                    
                }
            });
            
            
        </script>






    </body>
</html>
