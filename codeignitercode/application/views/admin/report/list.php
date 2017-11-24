<?php include(dirname(__DIR__).'/header.php'); ?>


<!-- Page container --> 
				<div class="page-container">



<?php include(dirname(__DIR__).'/sidebar.php'); ?>


<!-- Page content -->



                    	<!-- Page content --> 
                        <div class="page-content">
                        <!-- Page header -->
                        <div class="page-header"><div class="page-title"><h3>Request Report <small>Welcome Admin. <!--12 hours since last visit--></small></h3></div>
                        </div>
                        <!-- /page header -->
                        <!-- Breadcrumbs line -->
                        <div class="breadcrumb-line"><ul class="breadcrumb"><li><a href="<?php echo admin_url(); ?>">Home</a></li><li class="active">Request Report</li></ul><div class="visible-xs breadcrumb-toggle"><a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a></div></div><!-- /breadcrumbs line --> 







<!-- Page tabs --> 
                <div class="tabbable page-tabs" id="printable"> 

<!-- Datatable with custom column filtering --> 
                    <div class="panel panel-default"> 
                        <div class="panel-heading">
                            <h6 class="panel-title"><i class="icon-car"></i>Request report</h6>




<div class="dropdown pull-right"> 
    <a href="#" class="dropdown-toggle panel-icon" data-toggle="dropdown"> <i class="icon-cog3"></i> <b class="caret"></b> </a>    <ul class="dropdown-menu icons-right dropdown-menu-right" style="display: none;">
             <li><a href="<?php echo admin_url('report/generatepdf/current'); ?>"><i class="icon-file-pdf"></i> Download .pdf</a></li>
			 <li><a href="<?php echo admin_url('report/generatepdf/previous'); ?>"><i class="icon-file-pdf"></i> Download .pdf for previous month</a></li>
            <li><a href="javascript:void(0);" onclick="printContent('printable');"><i class="icon-print2"></i> Print report</a></li>
           
        </ul> 
</div>
<br/><div class="clearfix"></div>

                            
                               <div class="form-group">
                               <form action="<?php echo admin_url('report/report_by_date');?>" method="post">
                                   <div class="row">
                                       <div class="col-md-2" style="margin-top: 10px;margin-left: 35px;margin-right: -90px;">
                                           <label>Choose Date</label>
                                       </div>
                                       <div class="col-md-2">
                                           <input type="text" name="date" class="form-control datepicker-reportdates">
                                       </div>
                                       <div class="col-md-2">
                                           <input type="submit" value="View report" class="btn btn-primary"> 
                                       </div>
                                   </div>
                                </form>   
                               </div> 
                            


                        </div> 
                        <div class="" > 
                            <table class="table" id="table"> 
                                <thead> 
                                    <tr> 
                                        <th>#</th> 
                                        <th>Unit No.</th> 
                                        <th>Make</th> 
                                        <th>Model</th> 
                                        <th>Time</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr> 
                                </thead>

                                <tbody> 


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
$(document).ready(function() {
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
});

</script>
