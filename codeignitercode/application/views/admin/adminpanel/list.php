<?php include(dirname(__DIR__).'/header.php'); ?>
<!-- Page container --> 
    <div class="page-container">
        <?php include(dirname(__DIR__).'/sidebar.php'); ?>
        <!-- Page content --> 
        <div class="page-content">
            <!-- Page header -->
            <div class="breadcrumb-holder">
                <div class="container-fluid">
                  <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo admin_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item active">Admin</li>
                  </ul>
                </div>
            </div>

            <div class="container-fluid">
                <div class="page-title"> 
                    <h1 class="h3 display">Admin</h1>
                </div>

                <a href="<?php echo admin_url('user_management/add_new'); ?>" class="btn btn-primary add_new" type="button"><i class="icon-plus"></i>Add Admin</a> 

                <!-- Page tabs -->
              <div class="card tabbable page-tabs">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display"><i class="icon-users"></i> Admin</h2>
                </div>
                <div class="card-body datatable-add-row">
                  <table class="table table-striped table-hover"> 
                                <thead> 
                                    <tr> 
                                        <th>#</th> 
                                        <th>Name</th> 
										<th>Building Name</th>
                                        <th>Username</th> 
                                        <th>Email</th> 
                                        
                                        <th>Action</th>

                                    </tr> 
                                </thead>

                                <tbody> 
<?php $i=1; foreach($users as $u){ ?>
                                    <tr> 
                                        <td><?php echo $i; ?></td> 
                                        <td><?php echo $u->name; ?></td> 
                                        <td><?php echo $u->building_name; ?></td> 
                                        <td><?php echo $u->username; ?></td> 
                                        <td><?php echo $u->email; ?></td> 
                                       



                                        <td>

                                           <a href="<?=admin_url('user_management/edit/'.$u->id);?>" class="btn btn-primary" type="button">Edit</a> 
                                           <a href="<?=admin_url('user_management/delete/'.$u->id);?>" class="btn btn-danger" type="button" onclick="return confirm('Are your sure want to delete ?')">Delete</a> 

   



                                        </td>
                                    </tr> 
<?php $i++; } ?>
                                </tbody> 
                            </table> 
                        </div> 
                    </div> <!-- /datatable with custom column filtering --> 

</div> <!-- /third tab content --> 
</div> 
</div> <!-- /page tabs --> 

<?php include(dirname(__DIR__).'/footer.php'); ?>







