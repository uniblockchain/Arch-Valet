<?php include('includes/header.php'); ?>

<div class="row login_page">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4">
            <div class="login_form">
                <h2>Login</h2>


                <span class="success_msg"> <?php echo $this->session->flashdata('registered'); ?> </span>
                <?php if($this->session->flashdata('success')) { ?>
                <span class="success_msg"> <?php echo $this->session->flashdata('success'); ?> </span>
                <?php } ?>
                <p class="unsucces_msg"> <?php echo $this->session->flashdata('unsuccess'); ?> </p>

                <form method="post" action="<?php echo site_url('login_process'); ?>">
                    <div class="form-group">
                        <label class="login_label">Username :</label>
                        <p class="errors_login"><?php echo form_error('username'); ?></p>
                        <input type="text" class="form-control login-control" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label class="login_label">Password :</label>
                        <p class="errors_login"><?php echo form_error('password'); ?></p>

                        <input type="password" class="form-control login-control" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary login-btn">Login</button>
                    </div>
                    <div class="form_group login_link">
                        <h4><a href="<?php echo site_url('reset_password') ?>">Forget Password ?</a></h4>
                        <h3>Don’t have an account? <a href="<?php echo site_url('register'); ?>">Register</a></h3>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Footer -->

<?php include('includes/footer.php'); ?>