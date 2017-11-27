<?php include(dirname(__DIR__).'/header.php'); ?>


<!-- Page container --> 
                <div class="page-container">



<?php include(dirname(__DIR__).'/sidebar.php'); ?>


<!-- Page content -->



                        <!-- Page content --> 
                        <div class="page-content">
                        <!-- Page header -->
                        <div class="page-header"><div class="page-title"><h3>Dashboard <small>Welcome Admin. 12 hours since last visit</small></h3></div>
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
            <li><a href="<?php echo admin_url('report/generet_report_by_date/'.$printdate); ?>"><i class="icon-file-pdf"></i> View .pdf</a></li>
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
                                           <input type="text" name="date" class="form-control datepicker">
                                       </div>
                                       <div class="col-md-2">
                                           <input type="submit" value="View report" class="btn btn-primary"> 
                                       </div>
                                   </div>
                                </form>   
                               </div> 
                            


                        </div> 
                        <div class="datatable-add-row" > 
                            <table class="table" id="example"> 
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