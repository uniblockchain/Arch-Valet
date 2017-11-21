<?php include('includes/header.php'); ?>

            <div class="row page_title">
<?php if($this->session->userdata('admin_name')){ ?>
          <span><a href="<?php echo admin_url('category/edit/'.$how_it_works_category->id); ?>" target="_blank">Edit</a></span>
<?php } ?>            
                <h1><?php echo $how_it_works_category->title; ?></h1>

            </div>

            <div class="row breadcrumb-bar">
                <div class="container">
                    <div class="col-xs-12 col-sm-7 page_chain">
                        <?php echo strtoupper(lang('home')); ?> <span class="br_arrow">></span> <?php echo $how_it_works_category->title; ?> 

                    </div>
                    <div class="col-xs-12 col-sm-5 social_links">
                        COMPARTIR EN  <a href="#" title=""><i class="fa fa-facebook sm_icon" aria-hidden="true"></i></a> <a href="#" title=""><i class="fa fa-twitter sm_icon" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="row how_we_work">
                <div class="container">

<?php foreach($how_it_works_posts as $hiwp){ ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 hww_box">
<?php if($this->session->userdata('admin_name')){ ?>
          <span><a href="<?php echo admin_url('category/edit/'.$hiwp->post_id); ?>" target="_blank">Edit</a></span>
<?php } ?> 

                        <div class="row hww_title_bar">
                            <img src="<?php echo base_url('uploads/images/full/'.$hiwp->image); ?>" class="img-responsive hww_icon"> <h2 class="hww_title"><?php echo $hiwp->title; ?></h2>
                        </div>
                        <div class="row hww_detail">
                            <p><?php echo strip_tags($hiwp->description); ?></p>
                        </div>
                    </div>
<?php } ?>

                </div>
            </div>

            <div class="row doubt_calc_div">
                <div class="container">
                    <div class="col-sm-12 col-xs-12 col-md-10  col-md-offset-1 doubt_info_box">
<?php if($this->session->userdata('admin_name')){ ?>
          <span><a href="<?php echo admin_url('post/edit/'.$you_have_doubts->id); ?>" target="_blank">Edit</a></span>
<?php } ?> 

                        <p><?php echo $you_have_doubts->description; ?></p>
                    </div>
                    <div class="col-xs-12 btn_wrapper">
                        <a href="#" class="btn-reservation" title="Reserva ahora">RESERVA AHORA</a>
                    </div>
                </div>
            </div>

            <div class="row what_includes">
                <div class="container">
                    
                    <div class="text-center inc_maintitles">
<?php if($this->session->userdata('admin_name')){ ?>
          <span><a href="<?php echo admin_url('category/edit/'.$what_includes_category->id); ?>" target="_blank">Edit</a></span>
<?php } ?> 

                        <h2 class="bicolor_heading"><strong><?php echo $what_includes_category->title; ?></strong></h2>
                        <h3 class="bc_heading_subtitile"><?php echo $what_includes_category->description; ?></h3>
                    </div>

<?php foreach($what_includes_posts as $wip){ ?>                   


                    <div class="col-xs-12 col-sm-4 includes_list">
<?php if($this->session->userdata('admin_name')){ ?>
          <span><a href="<?php echo admin_url('post/edit/'.$wip->post_id); ?>" target="_blank">Edit</a></span>
<?php } ?> 

                        <img src="<?php echo base_url('uploads/images/full/'.$wip->image); ?>" class="img-responsive center-block inc_icons">
                        <h2 class="inc_title"><?php echo $wip->title; ?></h2>
                        <p><?php echo strip_tags($wip->description); ?></p>
                    </div>
<?php } ?>                   


                </div>
            </div>

            <div class="row includes_wrapper">
                <div class="container">
                    <div class="col-md-12 inc_tab_table">
                        <!-- Nav tabs -->
                        <div class="card">
                            <ul class="nav nav-tabs inc_tabs" role="tablist">
<?php $i=1; foreach($what_includes_services as $wis){ ?>
<?php if($this->session->userdata('admin_name')){ ?>
          <span><a href="<?php echo admin_url('post/edit/'.$wis->post_id); ?>" target="_blank">Edit</a></span>
<?php } ?> 

                                <li role="presentation" class="<?php if($i == '1'){  echo "active"; } ?> inc_li"><a href="#<?php echo $i; ?>c" aria-controls="<?php echo $i; ?>" role="tab" data-toggle="tab"><?php echo $wis->title; ?></a></li>
<?php $i++; } ?>                                


                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content inc_tab_content">

<?php $i=1; foreach($what_includes_services as $wisp){  ?>
                                <div role="tabpanel" class="tab-pane <?php if($i==1){  echo "active"; } ?>" id="<?php echo $i; ?>c">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 inc_tab_imgbox" style="background-image: url('<?php echo base_url('uploads/images/full/'.$wisp->image); ?>');">
                                        </div>
                                        <div class="col-xs-12 col-sm-6 inc_tab_infobox">
                                            <h2><?php echo $wisp->title; ?></h2>
                                            <?php echo $wisp->description; ?>
                                        </div>
                                    </div>
                                </div>
<?php $i++; } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 not_included">
<?php if($this->session->userdata('admin_name')){ ?>
          <span><a href="<?php echo admin_url('post/edit/'.$what_not_includes_post->id); ?>" target="_blank">Edit</a></span>
<?php } ?> 

                        <p><strong><?php echo $what_not_includes_post->title; ?></strong> <?php echo strip_tags($what_not_includes_post->description); ?></p>
                    </div>
                </div>
            </div>

            <div class="row reserve_in_min">
                <div class="container">
                    <h2 class="bicolor_heading"><strong>Reserva</strong> en un minuto</h2>
                    <div class="col-sm-4 col-xs-12 res_mun_box">
                        <div class="numbering"><strong>1</strong></div> 
                        <p class="res_inmin_detail">Indica cuántas horas necesitas y en qué fecha</p>
                    </div>
                    <div class="col-sm-4 col-xs-12 res_mun_box">
                        <div class="numbering"><strong>2</strong></div> 
                        <p class="res_inmin_detail">Te confirmamos el servicio por e-mail</p>
                    </div>
                    <div class="col-sm-4 col-xs-12 res_mun_box">
                        <div class="numbering"><strong>3</strong></div> 
                        <p class="res_inmin_detail">La persona asignada estará en tu casa a la hora acordada</p>
                    </div>
                    <div class="col-xs-12 btn_wrapper">
                        <a href="#" class="btn-reservation" title="Reserva ahora">Reserva ahora</a>
                    </div>
                </div>
            </div>

            <div class="row foot_bar">
<?php if($this->session->userdata('admin_name')){ ?>
          <span><a href="<?php echo admin_url('post/edit/'.$available_area->id); ?>" target="_blank">Edit</a></span>
<?php } ?> 

                <?php echo $available_area->description; ?>
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
        
        
<?php include('includes/footer.php'); ?>