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
                    <li class="breadcrumb-item active">Request</li>
                  </ul>
                </div>
            </div>

            <div class="container-fluid">
                <div class="page-title"> 
                    <h1 class="h3 display">Request</h1>
                </div>

                <!-- Page tabs -->
              <div class="card tabbable page-tabs">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display"><i class="icon-users"></i> Vehicle Request</h2>
                </div>
                <div class="card-body datatable-add-row">
                  <table class="table table-striped table-hover">
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
                                           <a href="<?php echo admin_url('requests/ready/'.$u->id); ?>" class="btn btn-primary" type="button" onclick="return confirm('Are your sure want to ready ?')">Ready</a> 
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
              </div> 
            </div> 
        </div> <!-- /page tabs --> 

<?php include(dirname(__DIR__).'/footer.php'); ?>

