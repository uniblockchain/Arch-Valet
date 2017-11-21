<?php include('includes/header.php'); ?>





<div class="row login_page">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
            <div class="login_form">
                <h2>Register</h2>


                <form method="post" action="<?php echo site_url('do_register'); ?>">
                    <div class="form-group">
                        <label class="login_label">Full Name :</label>
                        <span class="errors"><?php echo form_error('f_name'); ?></span>
                        <input type="text" class="form-control login-control" name="f_name" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <label class="login_label">Username :</label>
                        <span class="errors"><?php echo form_error('username'); ?></span>
                        <input type="text" class="form-control login-control" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label class="login_label">Email Address:</label>
                        <span class="errors"><?php echo form_error('email'); ?></span>
                        <input type="email" class="form-control login-control" name="email" placeholder="Email Address">
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label class="login_label">Address</label>
                            <span class="errors"><?php echo form_error('address'); ?></span>
                            <input type="text" class="form-control login-control" name="address" placeholder="Address">
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label class="login_label">ZIP Code</label>
                            <span class="errors"><?php echo form_error('zip_code'); ?></span>
                            <input type="text" class="form-control login-control" name="zip_code" placeholder="Zip Code">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label class="login_label"> Contact No (Mobile)</label>
                            <span class="errors"><?php echo form_error('contact_mobile'); ?></span>
                            <input type="text" class="form-control login-control" name="contact_mobile" placeholder="Mobile No">
                        </div>
                          <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label class="login_label"> Contact No (Phone)</label>
                            <input type="text" class="form-control login-control" name="contact_phone" placeholder="Phone No">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label class="login_label">Password:</label>
                            <span class="errors"><?php echo form_error('password'); ?></span>
                            <input type="password" class="form-control login-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label class="login_label">Confirm Password:</label>
                            <span class="errors"><?php echo form_error('c_password'); ?></span>
                            <input type="password" class="form-control login-control" name="c_password" placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary login-btn">Register</button>
                    </div>
                    <div class="form_group login_link">
                        <h3>Already have an account ? <a href="<?php echo site_url('login'); ?>">Login</a></h3>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Footer -->


<?php include('includes/footer.php'); ?>


