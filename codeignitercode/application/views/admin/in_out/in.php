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
                    <li class="breadcrumb-item active">Car In</li>
                  </ul>
                </div>
            </div>

            <div class="container-fluid">
                <div class="page-title"> 
                    <h1 class="h3 display">Car In</h1>
                </div> 

                <!-- Page tabs -->
              <div class="card tabbable page-tabs">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display"><i class="icon-users"></i> Car In</h2>
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
                                        <th>Time</th>
                                        <th>Date</th>
                                        
                                    </tr> 
                                </thead>

                                <tbody> 
<?php 
$i=1; foreach($requests as $u){ 
$car_detail = $this->db->get_where('tbl_cars', array('id'=>$u->car_id))->row();

?>
                                    <tr> 
                                        <td><?php echo $i; ?></td> 
                                        <td><?php echo $car_detail->unite_no; ?></td> 
                                        <td><?php echo $car_detail->parking_spot; ?></td> 
                                        <td><?php echo $car_detail->made; ?></td> 
                                        <td><?php echo $car_detail->model; ?></td> 
                                        <td><?php echo $car_detail->color; ?></td> 
                                        <td><?php echo $car_detail->plate_number; ?></td>
                                        <td><?php echo date('h:i A', $u->updated_date_time); ?></td> 
                                        <td><?php echo date('M j, Y', $u->updated_date_time);  ?></td> 
                                  
                                    </tr> 
<?php $i++; } ?>
                                </tbody> 
                  </table>
                </div>
              </div> 
            </div> 
        </div> <!-- /page tabs --> 

<?php include(dirname(__DIR__).'/footer.php'); ?>