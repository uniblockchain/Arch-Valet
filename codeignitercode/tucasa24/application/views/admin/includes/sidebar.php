
<div class="sidebar collapse">
    <div class="sidebar-content">
        <!-- User dropdown -->
        <div class="user-menu dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo site_url('uploads/logo/'.$logo->image); ?>" alt="">
                <div class="user-info"><?php echo $logo->site_title; ?><span><?php echo $logo->site_email; ?></span>
                </div>
            </a>
            <div class="popup dropdown-menu dropdown-menu-right"> 
                <div class="thumbnail"> 
                    <div class="thumb">
                        <img alt="" src="<?php echo site_url('uploads/logo/'.$logo->image); ?>">
                        <div class="thumb-options">
                            <span>
                                <a href="<?php echo admin_url('settings'); ?>" class="btn btn-icon btn-success">
                                    <i class="icon-pencil"></i>
                                </a>
                            </span>
                        </div> 
                    </div> 
                    <div class="caption text-center"> 
                        <h6><?php echo $logo->site_title; ?><small><?php echo $logo->site_email; ?></small></h6> 
                    </div> 
                </div> 
                <ul class="list-group">

                </ul>
            </div>
        </div>
        <!-- /user dropdown -->
        <!-- Main navigation -->
        <ul class="navigation">
            <li class="<?php if(!isset($title)){ echo "active"; } ?>">
                <a href="<?php echo site_url('en/admin'); ?>"><span>Dashboard</span> <i class="icon-screen2"></i></a>
            </li>

            <li class="<?php if($this->uri->segment('2')=='slider'){ echo "active"; } ?>">
                <a href="<?php echo admin_url('slider'); ?>"><span>Slider</span> <i class="icon-images"></i></a>
            </li>  


            <li class="<?php if($this->uri->segment('2')=='menu'){ echo "active"; } ?>">
                <a href="<?php echo admin_url('menu'); ?>"><span>Menu & Pages</span> <i class="icon-menu"></i></a>
            </li> 

            <li class="<?php if($this->uri->segment('2')=='category'){ echo "active"; } ?>">
                <a href="<?php echo admin_url('category'); ?>"><span>Category</span> <i class="icon-newspaper"></i></a>
            </li> 

            <li class="<?php if($this->uri->segment('2')=='post'){ echo "active"; } ?>">
                <a href="<?php echo admin_url('post'); ?>"><span>Post's</span> <i class="icon-newspaper"></i></a>
            </li> 






            <li>
                <a href="#" class="expand <?php if($this->uri->segment('2') == 'settings' || $this->uri->segment('2') == 'user_management'){ echo "level-opened"; } ?>"><span>Settings</span> <i class="icon-wrench"></i></a>
                <ul>
                    <li><a href="<?php echo admin_url('settings/profile'); ?>">Company Profile</a></li>
                    <li><a href="<?php echo admin_url('user_management'); ?>">User Management</a></li>
                    <li><a href="<?php echo admin_url('settings'); ?>">Site Settings</a></li>

                </ul>
            </li>


        </ul>
        <!-- /main navigation -->
    </div>
</div>
