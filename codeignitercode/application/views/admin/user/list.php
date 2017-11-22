<?php include(dirname(__DIR__).'/header.php'); ?>


<!-- Page container --> 
				<div class="page-container">



<?php include(dirname(__DIR__).'/sidebar.php'); ?>


<!-- Page content -->



                    	<!-- Page content --> 
                        <div class="page-content">
                        <!-- Page header -->
                        <div class="page-header"><div class="page-title"><h3>Residents Information <small>Welcome Admin</small></h3></div>
                        </div>
                        <!-- /page header -->
                        <!-- Breadcrumbs line -->
                        <div class="breadcrumb-line"><ul class="breadcrumb"><li><a href="<?php echo admin_url(); ?>">Home</a></li><li class="active">Residents Information</li></ul><div class="visible-xs breadcrumb-toggle"><a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a></div></div><!-- /breadcrumbs line --> 


<a href="<?php echo admin_url('users/add_new'); ?>" class="btn btn-success add_new" type="button"><i class="icon-plus"></i>Add New</a> 


<!-- Page tabs --> 
                <div class="tabbable page-tabs"> 

<!-- Datatable with custom column filtering --> 
                    <div class="panel panel-default"> 
                        <div class="panel-heading">
                            <h6 class="panel-title"><i class="icon-users"></i> Residents</h6>
                        </div> 
                        <div class="datatable-add-row"> 
                            <table class="table"> 
                                <thead> 
                                    <tr> 
                                        <th>#</th> 
                                        <th>Unit No.</th> 
                                        <th>Full Name</th> 
                                        <th>Email</th> 
                                        <th>Contact Number</th> 

                                        <th>Action</th>

                                    </tr> 
                                </thead>

                                <tbody> 
<?php $i=1; foreach($users as $u){ ?>
                                    <tr> 
                                        <td><?php echo $i; ?></td> 
                                        <td><?php echo $u->unite_no; ?></td> 
                                        <td><?php echo $u->name; ?></td> 
                                        <td><?php echo $u->email; ?></td> 
                                        <td><?php echo $u->contact_no; ?></td> 



                                        <td>

                                           <a href="<?php echo admin_url('users/edit/'.$u->id); ?>" class="btn btn-success" type="button">Edit</a> 
                                           <a href="<?php echo admin_url('users/delete/'.$u->id); ?>" class="btn btn-danger" type="button" onclick="return confirm('Are your sure want to delete ?')">Delete</a> 

   



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