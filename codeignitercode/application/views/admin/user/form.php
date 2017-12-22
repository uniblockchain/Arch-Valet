<?php include(dirname(__DIR__).'/header.php'); ?>
<?php
if (isset($user->add_edit) && $user->add_edit == "edit") {
    $path = admin_url('users/update/' . $user->id);
} else {
    $path = admin_url('users/save');
}

?>






<!-- Page container --> 
                        <div class="page-container">

<?php include(dirname(__DIR__).'/sidebar.php'); ?>



<!-- Page content --> 



            <div class="breadcrumb-holder">
                <div class="container-fluid">
                  <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo admin_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo admin_url('users'); ?>">Residents Information</a></li>
                    <li class="breadcrumb-item active"><?php if (isset($user->add_edit) && $user->add_edit == "edit") { echo "Edit Resident"; } else{ echo "Add Resident "; }  ?></li>
                  </ul>
                </div>
            </div>

            <div class="container-fluid">
                <div class="page-title"> 
                    <h1 class="h3 display"><?php if (isset($user->add_edit) && $user->add_edit == "edit") { echo "Edit Resident"; } else{ echo "Add Resident "; }  ?></h1>
                </div>

             <form action="<?= $path; ?>" method="post" enctype="multipart/form-data" role="form"> 
                 <div class="card card-default"> 
                     <div class="card-body">
                         <div class="form-group">
                             <div class="row">
                                 <div class="col-md-6">
                                     <label>Name</label> 
                                     <input type="text" name="name" class="form-control" value="<?php if(isset($user->name)){echo $user->name;}?>">
                                     <span class="validation-error"><?php echo form_error('name'); ?></span>
                                 </div> 
                                 <div class="col-md-6">
                                     <label>Email</label> 
                                     <input type="text" name="email" class="form-control" value="<?php if(isset($user->email)){echo $user->email;}?>">
                                      <span class="validation-error"><?php echo form_error('email'); ?></span>
                                 </div>                                                    
                             </div>
                         </div>

                         <div class="form-group">
                             <div class="row">
                                 <div class="col-md-6">
                                     <label>Unit</label> 
                                     <input type="text" name="unite_no" class="form-control" value="<?php if(isset($user->unite_no)){echo $user->unite_no;}?>">
                                      <span class="validation-error"><?php echo form_error('unite_no'); ?></span>
                                 </div>  

                                 <div class="col-md-6">
                                     <label>Phone</label> 
                                     <input type="text" name="contact_no" class="form-control" value="<?php if(isset($user->contact_no)){echo $user->contact_no;}?>">
                                 </div>  

                             </div>                       
                         </div>


                         <div class="form-group">
                             <div class="row">
                                 <div class="col-md-6">
                                     <label>Password</label> 
                                     <input type="password" name="password" class="form-control" value="">
                                      <span class="validation-error"><?php echo form_error('password'); ?></span>
                                 </div> 
                                 <div class="col-md-6">
                                     <label>Repeat Password</label> 
                                     <input type="password" name="repeat_password" class="form-control" value="">
                                      <span class="validation-error"><?php echo form_error('repeat_password'); ?></span>
                                 </div>
                                                                                                              
                             </div>
                                 <?php
          if (isset($user->add_edit) && $user->add_edit == "edit") { ?>
              <p>leave password fields blank if you dont want to change the password</p>
      <?php    }
          ?>                         
                         </div>


                         <div class="form-actions text-right"> 
                             <input type="submit" value="<?php if(isset($user->add_edit) && $user->add_edit == "edit"){ echo "Update Unit"; }else{  echo "Add Unit"; }  ?>" class="btn btn-primary">
                             <a href="<?php echo admin_url('users'); ?>" class="btn btn-danger">Cancel</a> 
                         </div>
                     </div>
                 </div>
             </form>
            </div>







<?php include(dirname(__DIR__).'/footer.php'); ?>

