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
                    <li class="breadcrumb-item active">Reports</li>
                  </ul>
                </div>
            </div>

            <div class="container-fluid">
                <div class="page-title"> 
                    <h1 class="h3 display">Reports</h1>
                </div>

<!-- Page tabs --> 
                <div class="tabbable page-tabs" > 

<!-- Datatable with custom column filtering --> 
                    <div class="card card-default report">
                        <div class="card-body datatable-add-row">
                           <div class="form-group col-lg-10 pull-left">
                            <form action="<?php echo admin_url('report/report_by_date');?>" method="post" class="form-inline">
                              <div class="form-group">
                                <input type="text" name="from" placeholder="Choose From Date" class="mx-sm-3 form-control datepicker-reportdates">
                                <input type="text" name="to" placeholder="Choose To Date" class="mx-sm-3 form-control datepicker-reportdates">
                                <input type="submit" value="View report" class="mx-sm-3 btn btn-primary">
                              </div>
                            </form>
                          </div>

                          <div class="form-group col-lg-2 pull-left">
                            <div class="dropdown pull-right"> 
                              <a href="#" class="dropdown-toggle card-icon" data-toggle="dropdown">
                                <i class="fa fa-cog"></i> <b class="caret"></b>
                              </a>

                              <ul class="dropdown-menu icons-right dropdown-menu-right">
                                  <li class="dd-list-heading">GENERAL REPORTS</li>
                                 <li><a href="<?php echo admin_url('report/generatepdf/current/general'); ?>"><i class="fa fa-file-pdf-o"></i> Download .pdf</a></li>
                                 <li><a href="<?php echo admin_url('report/generatepdf/previous/general'); ?>"><i class="fa fa-file-pdf-o"></i> Download .pdf for previous month</a></li>
                                  <li><a href="javascript:void(0);" onclick="printContent('printable');"><i class="fa fa-print"></i> Print report</a></li>
                                   <li class="dd-list-heading">CAR IN REPORTS</li>
                                  <li><a href="<?php echo admin_url('report/generatepdf/current/carin'); ?>"><i class="fa fa-file-pdf-o"></i> Download .pdf</a></li>
                                 <li><a href="<?php echo admin_url('report/generatepdf/previous/carin'); ?>"><i class="fa fa-file-pdf-o"></i> Download .pdf for previous month</a></li>
                                  <li><a href="javascript:void(0);" onclick="printCarInContent('printcarin');"><i class="fa fa-print"></i> Print report</a></li>
                              </ul> 
                            </div>
                          </div>

                          <table class="table table-striped table-hover" >
                                <thead> 
                                    <tr> 
                                        <th>#</th> 
                                        <th>Unit No.</th> 
                                        <th>Make</th> 
                                        <th>Model</th> 
                                        <th>Date Requested</th>
                                        <th>Time Requested</th>
                                        <th>Ready Time</th>
                                        <th>Car In Date and Time</th>
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
                                        <?php if(!empty($u->car_in_timestamp)){ 
                                          echo date('M j, Y', $u->car_in_timestamp)."&nbsp; &nbsp;".date('h:i A', $u->car_in_timestamp); 
                                        } ?>   
                                        </td> 
                                        <td>
                                        <?php if($u->reqstatus == '1'){ ?>
                                            <span class="label label-info">Requested</span>
                                        <?php }if($u->reqstatus == '2'){ ?>
                                            <span class="label label-success">Request accepted</span>
                                        <?php }if($u->reqstatus == '3'){ ?>    
                                            <span class="label label-danger">Cancelled</span>
                                        <?php }if($u->reqstatus == '4'){ ?>
                                            <span class="label label-primary">Car Ready</span>
                                        <?php } if($u->reqstatus == '5'){ ?>
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


                          <div id="printable" style="display:none">
                          <table class="table table-striped table-hover" >
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
                                        <?php if($u->reqstatus == '1'){ ?>
                                            <span class="label label-info">Requested</span>
                                        <?php }if($u->reqstatus == '2'){ ?>
                                            <span class="label label-success">Request accepted</span>
                                        <?php }if($u->reqstatus == '3'){ ?>    
                                            <span class="label label-danger">Cancelled</span>
                                        <?php }if($u->reqstatus == '4'){ ?>
                                            <span class="label label-primary">Car Ready</span>
                                        <?php } if($u->reqstatus == '5'){ ?>
                                            <span class="label label-primary">Car Ready</span>
                                        <?php } ?>   
                                        </td>


                                    </tr> 
                                  
<?php $i++; } ?>

                                </tbody> 
                            </table> 
                        </div>

                            <div id="printcarin" style="display:none">
                             <table class="table table-striped table-hover" >
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




<?php include(dirname(__DIR__).'/footer.php'); ?>

<script>
function printContent(el){
    var printcontent = $('#printable').html();
    var restorepage = $('body').html();
    $('body').empty().html("<html><head><title></title></head><body>" +printcontent+ "</body>");
    window.print();
    $('body').html(restorepage);
}
function printCarInContent(el){
    var printcontent = $('#printcarin').html();
    var restorepage = $('body').html();
    $('body').empty().html("<html><head><title></title></head><body>" +printcontent+ "</body>");
    window.print();
    $('body').html(restorepage);
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
