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
                    <li class="breadcrumb-item active">Request Report</li>
                  </ul>
                </div>
            </div>

            <div class="container-fluid">
                <div class="page-title"> 
                    <h1 class="h3 display">Request Report</h1>
                </div>

<!-- Page tabs --> 
                <div class="tabbable page-tabs" id="printable"> 

<!-- Datatable with custom column filtering --> 
                    <div class="card card-default report"> 
                        <div class="card-header">
                           <div class="form-group col-sm-6 pull-left">
                              <form action="<?php echo admin_url('report/report_by_date');?>" method="post" class="form-inline">
                              <div class="form-group">
                                <input type="text" name="date" placeholder="Choose Date" class="mx-sm-3 form-control datepicker-reportdates">
                              </div>
                              <div class="form-group">
                                <input type="submit" value="View report" class="mx-sm-3 btn btn-primary">
                              </div>
                            </form>
                          </div>
                          <div class="form-group col-sm-6 pull-left">
                            <div class="dropdown pull-right"> 
                              <a href="#" class="dropdown-toggle card-icon" data-toggle="dropdown">
                                <i class="fa fa-cog"></i> <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu icons-right dropdown-menu-right">
                                  <li><a href="<?php echo admin_url('report/generet_report_by_date/'.$printdate); ?>"><i class="fa fa-file-pdf-o"></i> View .pdf</a></li>
                                  <li><a href="javascript:void(0);" onclick="printContent('printable');"><i class="fa fa-print"></i> Print report</a></li>
                              </ul> 
                              </div>
                          </div>  
                        </div>

                        <div class="card-body datatable-add-row">
                          <table class="table table-striped table-hover">
                                <thead> 
                                    <tr> 
                                        <th>#</th> 
                                        <th>Unit No.</th> 
                                        <th>Make</th> 
                                        <th>Model</th> 
                                        <th>Requested Time</th>
                                        <th>Requested Date</th>
                                        <th>Ready Time</th>
                                        <th>Ready Date</th>
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
											echo date('h:i A', $u->requested_timestamp); 
										} ?>   
										</td> 
										<td>
										<?php if(!empty($u->requested_timestamp)){ 
											echo date('M j, Y', $u->requested_timestamp); 
										} ?>    
										</td> 
										<td>
										<?php if(!empty($u->updated_date_time)){ 
											echo date('h:i A', $u->updated_date_time); 
										} ?>   
										</td>
										<td>
										<?php if(!empty($u->updated_date_time)){ 
											echo date('M j, Y', $u->updated_date_time); 
										} ?>    
										</td> 
										<td>
										<?php if($u->reqstatus == '0'){ ?>
											<span class="label label-info">Requested</span>
										<?php }if($u->reqstatus == '2'){ ?>
											<span class="label label-success">Request accepted</span>
										<?php }if($u->reqstatus == '3'){ ?>    
											<span class="label label-danger">Request refused</span>
										<?php }if($u->reqstatus == '4'){ ?>
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
</div> 
</div> <!-- /page tabs --> 

<?php include(dirname(__DIR__).'/footer.php'); ?>

<script>
function printContent(el){
    var restorepage = $('body').html();
    var printcontent = $('#' + el).clone();
    $('body').empty().html(printcontent);
    window.print();
    $('body').html(restorepage);
}
</script>