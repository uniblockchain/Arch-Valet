<?php include('includes/header.php'); ?>



            <div class="row login_page starr_profile_page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
                            
                            <br>
                            <p class=" text-info">May 05,2014,03:00 pm </p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
                        
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo ucfirst($user_detail->name)?></h3>
                                    <h3 style="font-size: 14px;float: right;margin-top: -16px;">
                                        <a href="<?php echo site_url('edit_profile'); ?>" >Edit Profile</a> | <a href="<?php echo site_url('logout') ?>" >Logout</a>
                                    </h3>
                         
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="<?php echo $user_detail->image_path; ?>" class="img-circle img-responsive"> </div>

                                        <div class=" col-md-9 col-lg-9 "> 
                                            <table class="table table-user-information">
                                                <tbody>
                                                    <?php if($this->session->flashdata('success')) { ?>
                                                 <p class="form_success_msg"><?php echo $this->session->flashdata('success'); ?></p>
                                                 <?php } ?>
                                                    <tr>
                                                        <td>Joined Date:</td>
                                                        <td><?php echo date('m/d/y',$user_detail->created) ?></td>
                                                    </tr>
                                               
                                                        
                                                    <tr>
                                                    <tr>
                                                        <td>Gender</td>
                                                        <td>Female</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Home Address</td>
                                                        <td><?php echo $user_detail->address; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Zip Code</td>
                                                        <td><?php echo $user_detail->zip;?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td><a href="mailto:mercedes@gmail.com"><?php echo $user_detail->email; ?></a></td>
                                                    </tr>
                                                <td>Phone Number</td>
                                                <td><?php echo $user_detail->contact_phone; ?>(Landline)<br><br><?php echo $user_detail->contact_mobile;?>(Mobile)
                                                </td>
                                                    
                                                </tr>
                                                    
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>

                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        <!-- Footer -->

<?php include('includes/footer.php'); ?>