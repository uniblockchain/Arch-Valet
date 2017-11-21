<?php include('includes/header.php'); ?>

<div class="row login_page">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4">
            <div class="login_form">
                <h2>Password Reset</h2>
                <span class="success_msg"> <?php echo $this->session->flashdata('registered'); ?> </span>
                <p class="unsucces_msg"> <?php echo $this->session->flashdata('unsuccess'); ?> </p>

                <form method="post" action="<?php echo site_url('reset_password_process'); ?>">
                    <div class="form-group">
                        <label class="login_label">Email:</label>
                        <p class="errors_login"><?php echo form_error('email'); ?></p>
                        <input type="text" class="form-control login-control" name="email" placeholder="Enter Your Email">
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary login-btn">Login</button>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Footer -->

<?php include('includes/footer.php'); ?>