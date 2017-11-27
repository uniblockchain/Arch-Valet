 <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <div class="sidenav-header-inner text-center"><img src="<?php echo admin_img('user.png'); ?>" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5 text-uppercase">Welcome <?php echo $this->session->userdata('admin_name'); ?></h2>
            <span class="text-uppercase">
              <?php  if($this->session->userdata('admin_role') == "superadmin") { 
                  echo $this->session->userdata('admin_name'); 
              } else {
                  echo $this->session->userdata('admin_building_name');  
              } ?>
            </span>
          </div>
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>A</strong><strong class="text-primary">V</strong></a></div>
        </div>
        <div class="main-menu">
                        <ul id="side-main-menu" class="side-menu list-unstyled">
                           <li class="<?php if($this->uri->segment('2')==''){ echo "active"; } ?>"><a href="<?php echo admin_url(); ?>"><i class="icon-meter"></i><span>Dashboard</span></a></li>
                           <li class="<?php if($this->uri->segment('2')=='users'){ echo "active"; } ?>"><a href="<?php echo admin_url('users'); ?>"><i class="icon-home"></i><span>Residents Information</span> </a></li>
                           
                           <li class="<?php if($this->uri->segment('2')=='cars'){ echo "active"; } ?>"><a href="<?php echo admin_url('cars'); ?>"><i class="icon-car"></i><span>Vehicle</span> </a></li>
                           
                           <li class="<?php if($this->uri->segment('2')=='visitors'){ echo "active"; } ?>"><a href="<?php echo admin_url('visitors'); ?>"><i class="icon-car"></i><span>Guest Vehicle</span> </a></li>


                           <li id="" class="<?php if($this->uri->segment('2')=='requests'){ echo "active"; } ?>"><a href="<?php echo admin_url('requests'); ?>" ><i class="icon-pencil"></i><span>Request </span>
                              <div id="autorefresh" class="badge badge-info"><?php echo count($all_requests); ?></div>
                              </a></li>

<!-- <li class="<?php if($this->uri->segment('2')=='in'){ echo "active"; } ?>"><a href="<?php echo admin_url('in'); ?>"><span>Car In</span> </a></li> -->


<!-- <li class="<?php if($this->uri->segment('2')=='out'){ echo "active"; } ?>"><a href="<?php echo admin_url('out'); ?>"><span>Car Out</span> </a></li> -->


                           
                           <li class="<?php if($this->uri->segment('2')=='report'){ echo "active"; } ?>"><a href="<?php echo admin_url('report'); ?>"><i class="icon-file-download"></i><span>Request Report</span> </a></li>


<li class="<?php if($this->uri->segment('2')=='message'){ echo "active"; } ?>"><a href="<?php echo admin_url('message'); ?>"><i class="icon-mail"></i><span>Message</span> </a></li>
<?php if($this->session->userdata('admin_role') == "superadmin") { ?>
<li class="<?php if($this->uri->segment('2')=='user_management'){ echo "active"; } ?>"><a href="<?php echo admin_url('user_management'); ?>"><i class="icon-users"></i><span>Admin</span> </a></li>
<?php } ?>


                           
                        </ul>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li class="active"><a href="index.html"> <i class="icon-home"></i><span>Home</span></a></li>
            <li> <a href="forms.html"><i class="icon-form"></i><span>Forms</span></a></li>
            <li> <a href="charts.html"><i class="icon-presentation"></i><span>Charts</span></a></li>
            <li> <a href="tables.html"> <i class="icon-grid"> </i><span>Tables  </span></a></li>
            <li> <a href="login.html"> <i class="icon-interface-windows"></i><span>Login page                        </span></a></li>
            <li> <a href="#"> <i class="icon-mail"></i><span>Demo</span>
                <div class="badge badge-warning">6 New</div></a></li>
          </ul>
        </div>
      </div>
    </nav>



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





