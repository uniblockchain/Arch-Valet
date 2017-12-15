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
                    <li class="breadcrumb-item active">Report</li>
                  </ul>
                </div>
            </div>

            <div class="container-fluid">
                <div class="page-title"> 
                    <h1 class="h3 display">Report</h1>
                </div>

<!-- Page tabs --> 
                <div class="tabbable page-tabs" id="printable"> 

<!-- Datatable with custom column filtering --> 
                    <div class="card card-default report"> 
                        <div class="card-header">
                           <div class="form-group col-sm-8 pull-left">
                            <form action="<?php echo admin_url('report/report_by_date');?>" method="post" class="form-inline">
                              <div class="form-group">
                                <input type="text" name="from" placeholder="Choose From Date" class="mx-sm-3 form-control datepicker-reportdates">
                                <input type="text" name="to" placeholder="Choose To Date" class="mx-sm-3 form-control datepicker-reportdates">
                              </div>
                              <div class="form-group">
                                <input type="submit" value="View report" class="mx-sm-3 btn btn-primary">
                              </div>
                            </form>
                          </div>

                          <div class="form-group col-sm-4 pull-left">
                            <div class="dropdown pull-right"> 
                              <a href="#" class="dropdown-toggle card-icon" data-toggle="dropdown">
                                <i class="fa fa-cog"></i> <b class="caret"></b>
                              </a>

                              <ul class="dropdown-menu icons-right dropdown-menu-right">
                                 <li><a href="<?php echo admin_url('report/generatepdf/current'); ?>"><i class="fa fa-file-pdf-o"></i> Download .pdf</a></li>
                                 <li><a href="<?php echo admin_url('report/generatepdf/previous'); ?>"><i class="fa fa-file-pdf-o"></i> Download .pdf for previous month</a></li>
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
</div> 
</div> <!-- /page tabs --> 

<?php include(dirname(__DIR__).'/footer.php'); ?>

<script>
function printContent(el){
    var restorepage = $('#printable').html();
    var printcontent = $('#' + el).clone();
    $('#printable').empty().html(printcontent);
    window.print();
    $('#printable').html(restorepage);
}
</script>

<script type="text/javascript">
/* $(document).ready(function() {
    //datatables
    $('#table').DataTable({ 
		 // "bDestroy": true,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo admin_url('report/report_page')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],
    });
});  */

</script>
