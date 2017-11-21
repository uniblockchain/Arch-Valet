<html>
    <head>
        <title>Order</title>
    </head>
    <body>

     
        
        <div>
            <p>Hi <?php echo $user_details->name; ?>, </p>
            <b> Username: </b><?php echo $user_details->username; ?>
            <p>Password reset for <a href="<?php echo site_url('home'); ?>">Tucasa24</a></p>
            <p>Please click <a href="<?php echo site_url('update_password/'.$user_details->token_no);?>">link </a> to change your password.</p>
<br>
            <p>Kind Rega$user_details->token
             E-JAM Support
        </div>
    </body>
</html>