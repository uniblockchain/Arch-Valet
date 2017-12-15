
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
                                        <th>Date Requested</th>
                                        <th>Time Requested</th>
                                        <th>Ready Time</th>
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
										<td><?php echo $car_detail->made; ?></td> 
										<td><?php echo $car_detail->model; ?></td> 
                    <td>
                    <?php if(!empty($u->requested_timestamp)){ 
                      echo date('M j, Y', $u->requested_timestamp); 
                    } ?>    
                    </td> 
										<td>
										<?php if(!empty($u->requested_timestamp)){ 
											echo date('h:i A', $u->requested_timestamp); 
										} ?>   
										</td> 
										<td>
										<?php if(!empty($u->updated_date_time)){ 
											echo date('h:i A', $u->updated_date_time); 
										} ?>   
										</td>
										<td>
										<?php if($u->reqstatus == '0'){ ?>
											<span class="label label-info">Requested</span>
										<?php }if($u->reqstatus == '2'){ ?>
											<span class="label label-success">Request accepted</span>
										<?php }if($u->reqstatus == '3'){ ?>    
											<span class="label label-danger">Cancelled</span>
										<?php }if($u->reqstatus == '4'){ ?>
											<span class="label label-primary">Car Ready</span>
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
