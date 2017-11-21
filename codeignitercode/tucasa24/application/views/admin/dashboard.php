
        <!-- Default info blocks -->
        <ul class="info-blocks">



                        <li class="bg-primary">
                            <div class="top-info">
                                <a href="<?php echo admin_url('post'); ?>">Posts</a>
                            </div>
                            <a href="<?php echo admin_url('post'); ?>"><i class="icon-pencil3"></i></a>
                            <span id="total_visitor_cars" class="bottom-info bg-danger">Manage Posts</span>
                        </li>

                        <li class="bg-info">
                            <div class="top-info">
                                <a href="<?php echo admin_url('category'); ?>">Categories</a>
                            </div>
                            <a href="<?php echo admin_url('category'); ?>"><i class="icon-notebook"></i></a>
                            <span id="total_car_out" class="bottom-info bg-primary">Manage Categories</span>
                        </li>
                        <li class="bg-warning">
                            <div class="top-info">
                                <a href="<?php echo admin_url('menu'); ?>">Menu & Pages</a>
                            </div>
                            <a href="<?php echo admin_url('menu'); ?>"><i class="icon-menu2"></i></a>
                            <span class="bottom-info bg-primary">Manage Menu & Pages</span>
                        </li>




            <li class="bg-success">
                <div class="top-info">
                    <a href="#">Site Setting</a>
                   
                </div>
                <a href="<?php echo admin_url('settings'); ?>"><i class="icon-wrench"></i></a>
                <span class="bottom-info bg-primary">Last Update : <?php echo gmdate("Y-m-d", $logo->last_access); ?></span>
            </li>


            <li class="bg-danger">
                <div class="top-info">
                    <a href="<?php echo admin_url('settings/profile'); ?>">Company Profile</a>
                   
                </div>
                <a href="<?php echo admin_url('settings/profile'); ?>"><i class="icon-profile"></i></a>
                <span class="bottom-info bg-primary">Last Update : <?php echo gmdate("Y-m-d", $profile->last_access); ?></span>
            </li>







        </ul>

