<?php include(dirname(__DIR__).'/header.php'); ?>
<?php

    $path = admin_url('message/save');


?>

<!-- Page container --> 
                        <div class="page-container">

<?php include(dirname(__DIR__).'/sidebar.php'); ?>



<!-- Page content --> 



            <div class="breadcrumb-holder">
                <div class="container-fluid">
                  <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo admin_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo admin_url('message'); ?>">Message</a></li>
                    <li class="breadcrumb-item active">Create Message</li>
                  </ul>
                </div>
            </div>

            <div class="container-fluid">
                <div class="page-title"> 
                    <h1 class="h3 display">Create Message</h1>
                </div>

             <form action="<?= $path; ?>" method="post" enctype="multipart/form-data" role="form"> 
                 <div class="card card-default"> 
                     <div class="card-body">
                        <div class="form-group">
                          <div class="row">
                             <div class="col-md-12">
                               <label>Choose Unit No.</label>
                                <select multiple="multiple" name="unite[]" style="width:370px;">
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
                              <textarea rows="5" name="message" placeholder="Your message here..." class="form-control"></textarea>
                                
                              
                              <?php echo form_error('message'); ?>
                          </div>




                    <div class="form-group">
                         <div class="form-actions text-right"> 
                              <input type="submit" value="Send" class="btn btn-primary"> 
                             <a href="<?php echo admin_url('message'); ?>" class="btn btn-danger">Cancel</a> 
                             
                         </div>
                    </div>
                 </div>
             </form>
          </div>
        </div>






<?php include(dirname(__DIR__).'/footer.php'); ?>
<script type="text/javascript">
$("select").multiselect().multiselectfilter();
</script>

