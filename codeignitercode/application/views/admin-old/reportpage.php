
<!-- Page container --> 
				<div class="page-container">




<!-- Page tabs --> 
                <div class="tabbable page-tabs"> 

<!-- Datatable with custom column filtering --> 
                    <div class="panel panel-default"> 
                        <div class="panel-heading">
                            <h6 class="panel-title"><i class="icon-car"></i> Car request report</h6>
                        </div> 
                        <div class="datatable-add-row"> 
                            <table class="table"> 
                                <thead> 
                                    <tr> 
                                        <th>#</th> 
                                        <th>Unite No.</th> 
                                        <th>Parking Spot</th> 
                                        <th>Made</th> 
                                        <th>Model</th> 
                                        <th>Color</th>
                                        <th>Plate No.</th> 
                                        <th>Time</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr> 
                                </thead>

                                <tbody> 
<?php 
$i=1; foreach($report as $u){ 
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
                                        <td><?php echo date('h:i A', $u->requested_timestamp); ?></td> 
                                        <td><?php echo date('M j, Y', $u->requested_timestamp);  ?></td> 
                                        <td>
                                        <?php if($u->status == '0'){ ?>
<span class="label label-info">Requested</span>
                                        <?php }if($u->status == '2'){ ?>
<span class="label label-success">Request accepted</span>
                                        <?php }if($u->status == '3'){ ?>    
<span class="label label-danger">Request refused</span>
                                        <?php }if($u->status == '4'){ ?>
<span class="label label-primary">Car in</span>                                        
                                        <?php } ?>   
                                        </td>

                                  
                                    </tr> 
<?php $i++; } ?>
                                </tbody> 
                            </table> 
                        </div> 
                    </div> <!-- /datatable with custom column filtering --> 

</div> <!-- /third tab content --> 

</div> <!-- /page tabs --> 
