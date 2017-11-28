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
                    <li class="breadcrumb-item active">Vehicle Information</li>
                  </ul>
                </div>
            </div>

            <div class="container-fluid">
                <div class="page-title"> 
                    <h1 class="h3 display">Vehicle Information</h1>
                </div>

                <a href="<?php echo admin_url('cars/add_new'); ?>" class="btn btn-primary add_new" type="button"><i class="icon-plus"></i>Add New</a> 

                <!-- Page tabs -->
              <div class="card tabbable page-tabs">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display"><i class="icon-users"></i> Vehicle Information</h2>
                </div>
                <div class="card-body datatable-add-row">
                  <table class="table table-striped table-hover">
                                <thead> 
                                    <tr> 
                                        <th>#</th> 
                                        <th>Unit No.</th> 
										<th>Vehicle</th>
                                        <th>Make</th> 
                                        <th>Model</th> 
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
										<td>
										<?php 
										if($u->type == 'truck' || $u->type == 'suv')
											echo '<img src="https://png.icons8.com/'.$u->type.'/win8/50/'.$u->color.'">';
										else if($u->type == 'van')
											echo '<img src="https://png.icons8.com/shuttle/win8/50/'.$u->color.'">';
										else if($u->type == 'sydain')
											echo '<img src="https://png.icons8.com/sedan/win8/50/'.$u->color.'">';
										?>
										</td>
                                        <td><?php echo $u->made; ?></td> 
                                        <td><?php echo $u->model; ?></td> 
                                        <td><?php echo $u->parking_spot; ?></td>  
                                        <td><?php echo $u->plate_number; ?></td>
                                        <td><?php echo $u->note; ?></td>
                                        <td>
                                           <a href="<?php echo admin_url('cars/edit/'.$u->car_id); ?>" class="btn btn-primary" type="button">Edit</a> 
                                           <a href="<?php echo admin_url('cars/delete/'.$u->car_id); ?>" class="btn btn-danger" type="button" onclick="return confirm('Are your sure want to delete ?')">Delete</a> 
                                        </td>
                                    </tr> 
<?php $i++; } ?>
                                </tbody> 
                  </table>
                </div>
              </div> 
            </div> 
        </div> <!-- /page tabs --> 

<?php include(dirname(__DIR__).'/footer.php'); ?>