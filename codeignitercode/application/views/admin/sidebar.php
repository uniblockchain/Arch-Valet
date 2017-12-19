 <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <div class="sidenav-header-inner text-center"><img src="<?php echo admin_img('logo_admin.png'); ?>" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5 text-uppercase">Welcome <?php echo $this->session->userdata('admin_name'); ?></h2>
            <span class="text-uppercase">
              <?php  if($this->session->userdata('admin_role') == "superadmin") { 
                  echo $this->session->userdata('admin_name'); 
              } else {
                  echo $this->session->userdata('admin_building_name');  
              } ?>
            </span>
          </div>
          <div class="sidenav-header-logo"><a href="<?php echo admin_url(''); ?>" class="brand-small text-center"> <strong>A</strong><strong class="text-primary">V</strong></a></div>
        </div>
        <div class="main-menu">
                        <ul id="side-main-menu" class="side-menu list-unstyled">
                           <li class="<?php if($this->uri->segment('2')==''){ echo "active"; } ?>"><a href="<?php echo admin_url(); ?>"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                           <li class="<?php if($this->uri->segment('2')=='users'){ echo "active"; } ?>"><a href="<?php echo admin_url('users'); ?>"><i class="fa fa-users"></i><span>Residents Information</span> </a></li>
                           
                           <li class="<?php if($this->uri->segment('2')=='cars'){ echo "active"; } ?>"><a href="<?php echo admin_url('cars'); ?>"><i class="fa fa-car"></i><span>Vehicle</span> </a></li>
                           
                           <li class="<?php if($this->uri->segment('2')=='visitors'){ echo "active"; } ?>"><a href="<?php echo admin_url('visitors'); ?>"><i class="fa fa-car"></i><span>Guest Vehicle</span> </a></li>

                            <li class="<?php if($this->uri->segment('2')=='shuttle'){ echo "active"; } ?>"><a href="<?php echo admin_url('shuttle'); ?>"><i class="fa fa-car"></i><span>Shuttle Service</span> </a></li>

                           <li id="" class="<?php if($this->uri->segment('2')=='requests'){ echo "active"; } ?>"><a href="<?php echo admin_url('requests'); ?>" ><i class="fa fa-pencil"></i><span>Request </span>
                              <div id="autorefresh" class="badge badge-info"><?php echo count($all_requests); ?></div>
                              </a></li>

<!-- <li class="<?php if($this->uri->segment('2')=='in'){ echo "active"; } ?>"><a href="<?php echo admin_url('in'); ?>"><span>Car In</span> </a></li> -->


<!-- <li class="<?php if($this->uri->segment('2')=='out'){ echo "active"; } ?>"><a href="<?php echo admin_url('out'); ?>"><span>Car Out</span> </a></li> -->


                           <li class="<?php if($this->uri->segment('2')=='out'){ echo "active"; } ?>"><a href="<?php echo admin_url('out'); ?>"><i class="fa fa-file-text"></i><span>Car Out</span> </a></li>

                           <li class="<?php if($this->uri->segment('2')=='report'){ echo "active"; } ?>"><a href="<?php echo admin_url('report'); ?>"><i class="fa fa-file-text"></i><span>Report</span> </a></li>


<li class="<?php if($this->uri->segment('2')=='message'){ echo "active"; } ?>"><a href="<?php echo admin_url('message'); ?>"><i class="fa fa-comments"></i><span>Message</span> </a></li>
<?php if($this->session->userdata('admin_role') == "superadmin") { ?>
<li class="<?php if($this->uri->segment('2')=='user_management'){ echo "active"; } ?>"><a href="<?php echo admin_url('user_management'); ?>"><i class="fa fa-users"></i><span>Admin</span> </a></li>
<?php } ?>


                           
                        </ul>
        </div>
      </div>
    </nav>





