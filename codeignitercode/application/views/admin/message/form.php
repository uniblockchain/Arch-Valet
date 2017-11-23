<?php include(dirname(__DIR__).'/header.php'); ?>
<?php

    $path = admin_url('message/save');


?>






<!-- Page container --> 
                        <div class="page-container">

<?php include(dirname(__DIR__).'/sidebar.php'); ?>



<!-- Page content --> 



                        <!-- Page content --> <div class="page-content"><!-- Page header --><div class="page-header"><div class="page-title"><h3>Create Message <small>Welcome Admin</small></h3></div>
                        </div>
                        <!-- /page header -->
                        <!-- Breadcrumbs line -->
                        <div class="breadcrumb-line"><ul class="breadcrumb"><li><a href="<?php echo admin_url(); ?>">Home</a></li><li><a href="<?php echo admin_url('message'); ?>">Message</a></li><li class="active">Create Message</li></ul><div class="visible-xs breadcrumb-toggle"><a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a></div></div><!-- /breadcrumbs line --> 








       <form action="<?= $path; ?>" method="post" enctype="multipart/form-data" role="form"> 
           <div class="panel panel-default"> 
               <div class="panel-heading">
                   <h6 class="panel-title">
                   <i class="icon-bubbles3"></i>
                   Create Message
                   </h6>
               </div> 
               <div class="panel-body">
                  <div class="form-group">
                    <div class="row">
                       <div class="col-md-6">
                         <label>Choose Unit No.</label>
<select multiple="multiple" name="unite[]" style="width:370px">

        <optgroup label="Unites">
        <?php foreach($unites as $u){  ?>
            <option name="unite[]" value="<?php echo $u->unite_no; ?>"><?php echo $u->unite_no; ?></option>
      <?php } ?>        
        </optgroup>





 </select>
                      </div>
                    </div>
                </div>




                   <div class="form-group">
                       <div class="row">
                           <div class="col-md-6">
                               <label>Title:</label> 
                               <input type="text" name="title" class="form-control">
                               <?php echo form_error('title'); ?>
                           </div> 
                       </div>

                   </div>


                    <div class="form-group">
                        <label>Message:</label> 
                        <textarea  name="message" placeholder="Your message here..." class="form-control" ></textarea>
                          
                        
                        <?php echo form_error('message'); ?>
                    </div>




              <div class="form-group">
                   <div class="form-actions text-right"> 
                        
                       <a href="<?php echo admin_url('message'); ?>" class="btn btn-danger">Cancel</a> 
                       <input type="submit" value="Send" class="btn btn-primary"> 
                   </div>
              </div>
           </div>
       </form>







<?php include(dirname(__DIR__).'/footer.php'); ?>
<script type="text/javascript">
$("select").multiselect().multiselectfilter();
</script>

