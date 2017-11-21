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



<div class="alert alert-success fade in block"> <button type="button" class="close" data-dismiss="alert">×</button> <i class="icon-info"></i>

You have <?php echo count($all_requests); ?> Vehicle request 

</div>




<!-- Page tabs --> 
                <div class="tabbable page-tabs"> 

<!-- Datatable with custom column filtering --> 
                    <div class="panel panel-default"> 
                        <div class="panel-heading">
                            <h6 class="panel-title"><i class="icon-car"></i> Vehicle Requests</h6>
                        </div> 
                        <div class="datatable-add-row"> 
                            <table class="table"> 
                                <thead> 
                                    <tr> 
                                        <th>#</th> 
                                        <th>Unit No.</th> 
                                        <th>Parking Spot</th> 
                                        <th>Made</th> 
                                        <th>Model</th> 
                                        <th>Color</th>
                                        <th>Plate No.</th> 
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Action</th>
                                    </tr> 
                                </thead>

                                <tbody> 
<?php 
$i=1; foreach($requests as $u){ 
$car_detail = $this->db->get_where('tbl_cars', array('id'=>$u->car_id))->row();

?>
                                    <tr> 
                                        <td><?php echo $i; ?></td> 
                                        <td><?php if($car_detail->visitor == '1'){ echo 'Ticket No: ' .$car_detail->ticket_no; }else{ echo $car_detail->unite_no;  } ?></td> 
                                        <td><?php echo $car_detail->parking_spot; ?></td> 
                                        <td><?php echo $car_detail->made; ?></td> 
                                        <td><?php echo $car_detail->model; ?></td> 
                                        <td><?php echo $car_detail->color; ?></td> 
                                        <td><?php echo $car_detail->plate_number; ?></td>
                                        <td><?php echo date('l M j', $u->request_timestamp); ?></td> 
                                        <td><?php echo date('h:i A', $u->request_timestamp); ?></td> 
                                        <td>
                                        <?php if($u->status == '1'){ ?>
                                           <a href="<?php echo admin_url('requests/ready/'.$u->id); ?>" class="btn btn-success" type="button" onclick="return confirm('Are your sure want to ready ?')">Ready</a> 
                                           <a href="<?php echo admin_url('requests/cancel/'.$u->id); ?>" class="btn btn-danger" type="button" onclick="return confirm('Are your sure want to cancel ?')">Cancel</a> 
                                        <?php } ?>
                                        <?php if($u->status == '2'){ ?>
<span class="label label-success">Car is ready </span>

                                         <?php } if($u->status == '3'){ ?>   

<span class="label label-danger">Request canceled </span>
                                          
                                         <?php 
                                            }                            
                                         ?>

                                           


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

