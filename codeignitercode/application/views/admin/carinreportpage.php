
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
                                        <th>Unit No.</th> 
                                        <th>Make</th> 
                                        <th>Model</th> 
                                        <th>Car In Date and Time</th>
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
										<td><?php echo $car_detail->made; ?></td> 
										<td><?php echo $car_detail->model; ?></td> 
                                        <td>
                                        <?php if(!empty($u->car_in_timestamp)){ 
                                          echo date('M j, Y', $u->car_in_timestamp)."&nbsp; &nbsp;".date('h:i A', $u->car_in_timestamp); 
                                        } ?>   
                                        </td> 

									</tr> 
                                  
<?php $i++; } ?>
                                </tbody> 
                            </table> 
                        </div> 
                    </div> <!-- /datatable with custom column filtering --> 

</div> <!-- /third tab content --> 

</div> <!-- /page tabs --> 
