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
                    <li class="breadcrumb-item active">Car Out</li>
                  </ul>
                </div>
            </div>

            <div class="container-fluid">
                <div class="page-title"> 
                    <h1 class="h3 display">Car Out Report</h1>
                </div>

                <!-- Page tabs -->
              <div class="card tabbable page-tabs">
                <div class="card-body datatable-add-row">
                  <table class="table table-striped table-hover">
                                <thead> 
                                    <tr> 
                                        <th>#</th> 
                                        <th>Unit No.</th> 
                                        <th>Make</th> 
                                        <th>Model</th> 
                                        <th>Plate No.</th> 
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
                                        <td><?php echo $car_detail->made; ?></td> 
                                        <td><?php echo $car_detail->model; ?></td> 
                                        <td><?php echo $car_detail->plate_number; ?></td>
                                        <td>
                                        <?php if($u->reqstatus == '5'){ ?>
                                           <a href="<?php echo admin_url('out/in/'.$u->id); ?>" class="btn btn-primary" type="button" >Car In</a>
                                        <?php } ?> 

                                           


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

