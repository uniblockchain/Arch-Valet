                        <!-- Sidebar -->
                        
                        <div  class="sidebar collapse"><div class="sidebar-content">
                       
                        <!-- Main navigation -->
                        <ul class="navigation">
                           <li class="<?php if($this->uri->segment('2')==''){ echo "active"; } ?>"><a href="<?php echo admin_url(); ?>"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
                           <li class="<?php if($this->uri->segment('2')=='users'){ echo "active"; } ?>"><a href="<?php echo admin_url('users'); ?>"><span>Residents Information</span> </a></li>
                           
                           <li class="<?php if($this->uri->segment('2')=='cars'){ echo "active"; } ?>"><a href="<?php echo admin_url('cars'); ?>"><span>Vehicle</span> </a></li>
                           
                           <li class="<?php if($this->uri->segment('2')=='visitors'){ echo "active"; } ?>"><a href="<?php echo admin_url('visitors'); ?>"><span>Guest Vehicle</span> </a></li>


                           <li id="" class="<?php if($this->uri->segment('2')=='requests'){ echo "active"; } ?>"><a href="<?php echo admin_url('requests'); ?>" ><span>Request </span> 
                                   <span id="autorefresh" class="label label-danger label-align">
                           
                           <?php echo count($all_requests); ?>
                              
                           </span></a></li>

<!-- <li class="<?php if($this->uri->segment('2')=='in'){ echo "active"; } ?>"><a href="<?php echo admin_url('in'); ?>"><span>Car In</span> </a></li> -->


<!-- <li class="<?php if($this->uri->segment('2')=='out'){ echo "active"; } ?>"><a href="<?php echo admin_url('out'); ?>"><span>Car Out</span> </a></li> -->


                           
                           <li class="<?php if($this->uri->segment('2')=='report'){ echo "active"; } ?>"><a href="<?php echo admin_url('report'); ?>"><span>Request Report</span> </a></li>


<li class="<?php if($this->uri->segment('2')=='message'){ echo "active"; } ?>"><a href="<?php echo admin_url('message'); ?>"><span>Message</span> </a></li>

<li class="<?php if($this->uri->segment('2')=='user_management'){ echo "active"; } ?>"><a href="<?php echo admin_url('user_management'); ?>"><span>Admin</span> </a></li>


                           
                        </ul>
                        <!-- /main navigation -->
                        </div>
                        </div>
                        <!-- /sidebar -->





