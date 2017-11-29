<?php include(dirname(__DIR__).'/header.php'); ?>
<?php
error_reporting(0);
if (isset($user)) {
    $path = admin_url('user_management/update/' . $user->id);
} else {
    $path = admin_url('user_management/save');
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
                    <li class="breadcrumb-item"><a href="<?php echo admin_url('user_management'); ?>">Admin</a></li>
                    <li class="breadcrumb-item active"> <?php if (isset($user)) { echo "Edit Admin"; } else{ echo "Add Admin "; }  ?></li>
                  </ul>
                </div>
            </div>

            <div class="container-fluid">
                <div class="page-title"> 
                    <h1 class="h3 display">  <?php if (isset($user)) { echo "Edit Admin"; } else{ echo "Add Admin "; }  ?></h1>
                </div>



       <form action="<?= $path; ?>" method="post" enctype="multipart/form-data" role="form"> 
           <div class="card card-default"> 
              <div class="card-body">
                   <div class="form-group">
                       <div class="row">
                           <div class="col-md-6">
                               <label>Name</label> 
                               <input type="text" name="name" class="form-control" value="<?php if(isset($user->name)){echo $user->name;}?>">
                               <?php echo form_error('name'); ?>
                           </div> 
						   <div class="col-md-6">
                               <label>Building Name</label> 
                               <input type="text" name="building_name" class="form-control" value="<?php if(isset($user->building_name)){echo $user->building_name;}?>">
                               <?php echo form_error('building_name'); ?>
                           </div>
                                                                              
                       </div>
                   </div>

                   <div class="form-group">
                       <div class="row">
							<div class="col-md-6">
                               <label>Email</label> 
                               <input type="text" name="email" class="form-control" value="<?php if(isset($user->email)){echo $user->email;}?>">
                               <?php echo form_error('email'); ?>
                           </div> 
                           <div class="col-md-6">
                               <label>Username</label> 
                               <input type="text" name="username" class="form-control" value="<?php if(isset($user->username)){echo $user->username;}?>">
                               <?php echo form_error('username'); ?>
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
                         <input type="submit" value="<?php if(isset($user->name)){ echo "Update Admin"; }else{  echo "Add Admin"; }  ?>" class="btn btn-primary"> 
                       <a href="<?php echo admin_url('user_management'); ?>" class="btn btn-danger">Cancel</a> 
                      
                   </div>
               </div>
           </div>
       </form>
</div>
<?php include(dirname(__DIR__).'/footer.php'); ?>












