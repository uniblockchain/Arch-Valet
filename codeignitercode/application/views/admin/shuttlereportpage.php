
<!-- Page container --> 
				<div class="page-container">




<!-- Page tabs --> 
                <div class="tabbable page-tabs"> 

<!-- Datatable with custom column filtering --> 
                    <div class="panel panel-default"> 
                        <div class="panel-heading">
                            <h6 class="panel-title"><i class="icon-car"></i> Shuttle Service report</h6>
                        </div> 
                        <div class="datatable-add-row"> 
                            <table class="table"> 
                                 <thead> 
                                    <tr> 
                                        <th>#</th> 
                                        <th>Unit No.</th> 
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Location</th>
                                        <th>Action</th>
                                    </tr> 
                                </thead>

                                <tbody> 
                                    <?php
                                    $i=1; foreach($shuttle as $u){ 
                                    ?>

                                    <tr> 
                                        <td><?php echo $i; ?></td> 
                                        <td><?php echo $u->unite_no; ?></td>
                                        <td><?php echo date('M j, Y', strtotime($u->reservedate));  ?></td>
                                        <td><?php echo date('h:i A', strtotime($u->timereserved));  ?></td>
                                        <td><?php echo $u->location; ?></td>
                                        <td>
                                        <?php if($u->shuttlestatus == '0'){ ?>
                                            <span><button class="btn btn-danger">Cancel</button></span>
                                        <?php }if($u->shuttlestatus == '1'){ ?>
                                            <span class="label label-danger text-danger">Cancelled</span>
                                        <?php }if($u->shuttlestatus == '2'){ ?>    
                                            <span class="label label-success text-success">Completed</span>
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
