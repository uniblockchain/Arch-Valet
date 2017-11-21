<?php include(dirname(__DIR__).'/header.php'); ?>


<!-- Page container --> 
				<div class="page-container">



<?php include(dirname(__DIR__).'/sidebar.php'); ?>


<!-- Page content -->



                    	<!-- Page content --> 
                        <div class="page-content">
                        <!-- Page header -->
                        <div class="page-header"><div class="page-title"><h3>Dashboard <small>Welcome Admin. 12 hours since last visit</small></h3></div>
                        </div>
                        <!-- /page header -->
                        <!-- Breadcrumbs line -->
                        <div class="breadcrumb-line"><ul class="breadcrumb"><li><a href="<?php echo admin_url(); ?>">Home</a></li><li class="active">Dashboard</li></ul><div class="visible-xs breadcrumb-toggle"><a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a></div></div><!-- /breadcrumbs line --> 


<a href="<?php echo admin_url('cars/add_new'); ?>" class="btn btn-success add_new" type="button"><i class="icon-plus"></i>Add New</a> 


<!-- Page tabs --> 
                <div class="tabbable page-tabs"> 

<!-- Datatable with custom column filtering --> 
                    <div class="panel panel-default"> 
                        <div class="panel-heading">
                            <h6 class="panel-title"><i class="icon-car"></i> Vehicle</h6>
                        </div> 
                        <div class="datatable-add-row"> 
                            <table class="table"> 
                                <thead> 
                                    <tr> 
                                        <th>#</th> 
                                        <th>Unit No.</th> 
                                        <th>Make</th> 
                                        <th>Model</th> 
                                        <th>Color</th> 
                                        <th>Parking Spot</th>
                                        <th>Plate No.</th>
                                        <th>Notes</th>
                                        <th>Action</th>
                                    </tr> 
                                </thead>

                                <tbody> 
<?php $i=1; foreach($cars as $u){ ?>
                                    <tr> 
                                        <td><?php echo $i; ?></td> 
                                        <td><?php echo $u->unite_no; ?></td> 
                                        <td><?php echo $u->made; ?></td> 
                                        <td><?php echo $u->model; ?></td> 
                                        <td><?php echo $u->color; ?></td>
                                        <td><?php echo $u->parking_spot; ?></td>  
                                        <td><?php echo $u->plate_number; ?></td>
                                        <td><?php echo $u->note; ?></td>
                                        <td>
                                           <a href="<?php echo admin_url('cars/edit/'.$u->id); ?>" class="btn btn-success" type="button">Edit</a> 
                                           <a href="<?php echo admin_url('cars/delete/'.$u->id); ?>" class="btn btn-danger" type="button" onclick="return confirm('Are your sure want to delete ?')">Delete</a> 
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