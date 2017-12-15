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
                    <li class="breadcrumb-item active">Shuttle Service</li>
                  </ul>
                </div>
            </div>

            <div class="container-fluid">
                <div class="page-title"> 
                    <h1 class="h3 display">Shuttle Service</h1>
                </div>
                <form action="<?php echo admin_url('shuttle/settings'); ?>" method="post" enctype="multipart/form-data" role="form"> 
                 <div class="card card-default"> 
                     <div class="card-body">
                        <?php if($this->session->flashdata('message')){
                            echo "<div class='alert alert-success'>".$this->session->flashdata('message')."</div>";
                        } ?>
                         <div class="form-group">
                             <div class="row">
                                 <div class="col-md-1">
                                    <input type="checkbox" name="enabled" data-size="small" data-toggle="toggle" data-on="Enabled" data-onstyle="primary" data-offstyle="secondary" data-off="Disabled">
                                </div>
                                <div class="col-md-4">
                                    <select multiple="multiple" name="weekdays[]" class="form-control" style="width:370px">
                                        <optgroup label="Week days">
                                        <option name="weekdays[]" value="sunday">Sunday</option>
                                        <option name="weekdays[]" value="monday">Monday</option>
                                        <option name="weekdays[]" value="tuesday">Tuesday</option>
                                        <option name="weekdays[]" value="wednesday">Wednesday</option>
                                        <option name="weekdays[]" value="thursday">Thursday</option>
                                        <option name="weekdays[]" value="friday">Friday</option>
                                        <option name="weekdays[]" value="saturday">Saturday</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                     <input type="text" name="from" class="form-control" placeholder="Shuttle service start time">
                                 </div> 
                                 <div class="col-md-3">
                                     <input type="text" name="to" class="form-control" placeholder="Shuttle service end time">
                                 </div>
                                 <div class="form-actions text-right"> 
                                     <input type="submit" value="Save" class="btn btn-primary">
                                 </div>                                                 
                             </div>
                         </div>
                     </div>
                 </div>
             </form>


<!-- Page tabs --> 
                <div class="tabbable page-tabs" id="printable"> 

<!-- Datatable with custom column filtering --> 
                    <div class="card card-default report"> 
                        <div class="card-header">
                           <div class="form-group col-sm-8 pull-left">
                            <form action="<?php echo admin_url('shuttle/shuttle_by_date');?>" method="post" class="form-inline">
                              <div class="form-group">
                                <input type="text" name="from" placeholder="Choose From Date" class="mx-sm-3 form-control datepicker-reportdates">
                                <input type="text" name="to" placeholder="Choose To Date" class="mx-sm-3 form-control datepicker-reportdates">
                              </div>
                              <div class="form-group">
                                <input type="submit" value="View shuttle report" class="mx-sm-3 btn btn-primary">
                              </div>
                            </form>
                          </div>

                          <div class="form-group col-sm-4 pull-left">
                            <div class="dropdown pull-right"> 
                              <a href="#" class="dropdown-toggle card-icon" data-toggle="dropdown">
                                <i class="fa fa-cog"></i> <b class="caret"></b>
                              </a>

                              <ul class="dropdown-menu icons-right dropdown-menu-right">
                                 <li><a href="<?php echo admin_url('shuttle/generatepdf/current'); ?>"><i class="fa fa-file-pdf-o"></i> Download .pdf</a></li>
                                 <li><a href="<?php echo admin_url('shuttle/generatepdf/previous'); ?>"><i class="fa fa-file-pdf-o"></i> Download .pdf for previous month</a></li>
                                  <li><a href="javascript:void(0);" onclick="printContent('printable');"><i class="fa fa-print"></i> Print shuttle report</a></li>
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
$("select").multiselect().multiselectfilter();
</script>