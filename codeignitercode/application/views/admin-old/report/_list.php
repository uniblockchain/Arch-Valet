  <tr> 
	<td><?php echo $i; ?></td> 
	<td><?php echo $car_detail->unite_no; ?></td>
	<td><?php echo $car_detail->made; ?></td> 
	<td><?php echo $car_detail->model; ?></td> 
	<td>
	<?php if(!empty($u->requested_timestamp)){ ?>
	<?php echo date('h:i A', $u->requested_timestamp); ?>
	 <?php } ?>   
	</td> 
	<td>
	<?php if(!empty($u->requested_timestamp)){ ?>
	<?php echo date('M j, Y', $u->requested_timestamp);  ?>
	<?php } ?>    
	</td> 
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