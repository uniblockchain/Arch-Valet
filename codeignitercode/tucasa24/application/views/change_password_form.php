<?php include('includes/header.php'); ?>

<div class="row login_page">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4">
            <div class="login_form">
                <h2>Change password</h2>
                <span class="success_msg"> <?php echo $this->session->flashdata('registered'); ?> </span>
                <p class="unsucces_msg"> <?php echo $this->session->flashdata('unsuccess'); ?> </p>


                <form method="post" action="<?php echo site_url('change_confirm_password/'.$user_details->token); ?>">
                    <div class="form-group">
                        <label class="login_label">Enter New Password :</label>
                        <p class="errors_login"><?php echo form_error('newpassword'); ?></p>

                        <input type="password" class="form-control login-control" name="newpassword" placeholder="New Passowrd">
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary login-btn">Submit</button>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Footer -->

<?php include('includes/footer.php'); ?>