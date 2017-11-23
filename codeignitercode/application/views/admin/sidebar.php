                        <!-- Sidebar -->
                        
                        <div  class="sidebar collapse"><div class="sidebar-content">
                       
                        <!-- Main navigation -->
                        <ul class="navigation">
                           <li class="<?php if($this->uri->segment('2')==''){ echo "active"; } ?>"><a href="<?php echo admin_url(); ?>"><i class="icon-meter"></i><span>Dashboard</span></a></li>
                           <li class="<?php if($this->uri->segment('2')=='users'){ echo "active"; } ?>"><a href="<?php echo admin_url('users'); ?>"><i class="icon-home"></i><span>Residents Information</span> </a></li>
                           
                           <li class="<?php if($this->uri->segment('2')=='cars'){ echo "active"; } ?>"><a href="<?php echo admin_url('cars'); ?>"><i class="icon-car"></i><span>Vehicle</span> </a></li>
                           
                           <li class="<?php if($this->uri->segment('2')=='visitors'){ echo "active"; } ?>"><a href="<?php echo admin_url('visitors'); ?>"><i class="icon-car"></i><span>Guest Vehicle</span> </a></li>


                           <li id="" class="<?php if($this->uri->segment('2')=='requests'){ echo "active"; } ?>"><a href="<?php echo admin_url('requests'); ?>" ><i class="icon-pencil"></i><span>Request </span> 
                                   <span id="autorefresh" class="label label-danger label-align">
                           
                           <?php echo count($all_requests); ?>
                              
                           </span></a></li>

<!-- <li class="<?php if($this->uri->segment('2')=='in'){ echo "active"; } ?>"><a href="<?php echo admin_url('in'); ?>"><span>Car In</span> </a></li> -->


<!-- <li class="<?php if($this->uri->segment('2')=='out'){ echo "active"; } ?>"><a href="<?php echo admin_url('out'); ?>"><span>Car Out</span> </a></li> -->


                           
                           <li class="<?php if($this->uri->segment('2')=='report'){ echo "active"; } ?>"><a href="<?php echo admin_url('report'); ?>"><i class="icon-file-download"></i><span>Request Report</span> </a></li>


<li class="<?php if($this->uri->segment('2')=='message'){ echo "active"; } ?>"><a href="<?php echo admin_url('message'); ?>"><i class="icon-bubbles"></i><span>Message</span> </a></li>
<?php if($this->session->userdata('admin_role') == "superadmin") { ?>
<li class="<?php if($this->uri->segment('2')=='user_management'){ echo "active"; } ?>"><a href="<?php echo admin_url('user_management'); ?>"><i class="icon-users"></i><span>Admin</span> </a></li>
<?php } ?>


                           
                        </ul>
                        <!-- /main navigation -->
                        </div>
                        </div>
                        <!-- /sidebar -->





