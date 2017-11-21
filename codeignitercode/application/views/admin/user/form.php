<?php include(dirname(__DIR__).'/header.php'); ?>
<?php
if (isset($user)) {
    $path = admin_url('users/update/' . $user->id);
} else {
    $path = admin_url('users/save');
}

?>






<!-- Page container --> 
                        <div class="page-container">

<?php include(dirname(__DIR__).'/sidebar.php'); ?>



<!-- Page content --> 



                        <!-- Page content --> <div class="page-content"><!-- Page header --><div class="page-header"><div class="page-title"><h3>Dashboard <small>Welcome Admin. 12 hours since last visit</small></h3></div>
                        </div>
                        <!-- /page header -->
                        <!-- Breadcrumbs line -->
                        <div class="breadcrumb-line"><ul class="breadcrumb"><li><a href="<?php echo admin_url(); ?>">Home</a></li><li class="active">Dashboard</li></ul><div class="visible-xs breadcrumb-toggle"><a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a></div></div><!-- /breadcrumbs line --> 








       <form action="<?= $path; ?>" method="post" enctype="multipart/form-data" role="form"> 
           <div class="panel panel-default"> 
               <div class="panel-heading">
                   <h6 class="panel-title">
                   <i class="icon-user"></i>
                   <?php if (isset($user)) { echo "Edit Resident"; } else{ echo "Add Resident "; }  ?>
                   </h6>
               </div> 
               <div class="panel-body">
                   <div class="form-group">
                       <div class="row">
                           <div class="col-md-6">
                               <label>Name</label> 
                               <input type="text" name="name" class="form-control" value="<?php if(isset($user->name)){echo $user->name;}?>">
                               <?php echo form_error('name'); ?>
                           </div> 
                           <div class="col-md-6">
                               <label>Email</label> 
                               <input type="text" name="email" class="form-control" value="<?php if(isset($user->email)){echo $user->email;}?>">
                               <?php echo form_error('email'); ?>
                           </div>                                                    
                       </div>
                   </div>

                   <div class="form-group">
                       <div class="row">
                           <div class="col-md-6">
                               <label>Unit</label> 
                               <input type="text" name="unite_no" class="form-control" value="<?php if(isset($user->unite_no)){echo $user->unite_no;}?>">
                               <?php echo form_error('unite_no'); ?>
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
                               <?php echo form_error('password'); ?>
                           </div> 
                           <div class="col-md-6">
                               <label>Repeat Password</label> 
                               <input type="password" name="repeat_password" class="form-control" value="">
                               <?php echo form_error('repeat_password'); ?>
                           </div>
                                                                                                        
                       </div>
                           <?php
    if (isset($user->name)) { ?>
        <p>leave password fields blank if you dont want to change the password</p>
<?php    }
    ?>                         
                   </div>


                   <div class="form-actions text-right"> 
                        
                       <a href="<?php echo admin_url('users'); ?>" class="btn btn-danger">Cancel</a> 
                       <input type="submit" value="<?php if(isset($user->name)){ echo "Update Unit"; }else{  echo "Add Unit"; }  ?>" class="btn btn-primary"> 
                   </div>
               </div>
           </div>
       </form>







<?php include(dirname(__DIR__).'/footer.php'); ?>

