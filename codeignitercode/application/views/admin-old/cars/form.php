<?php include(dirname(__DIR__).'/header.php'); ?>
<?php
if (isset($car)) {
    $path = admin_url('cars/update/' . $car->id);
} else {
    $path = admin_url('cars/save');
}

?>






<!-- Page container --> 
                        <div class="page-container">

<?php include(dirname(__DIR__).'/sidebar.php'); ?>



<!-- Page content --> 



                        <!-- Page content --> <div class="page-content"><!-- Page header --><div class="page-header"><div class="page-title"><h3><?php if(isset($car)){ echo "Edit Vehicle"; }else{  echo "Add Vehicle"; }  ?> <small>Welcome Admin. <!--12 hours since last visit --> </small></h3></div>
                        </div>
                        <!-- /page header -->
                        <!-- Breadcrumbs line -->
                        <div class="breadcrumb-line"><ul class="breadcrumb"><li><a href="<?php echo admin_url(); ?>">Home</a></li><li><a href="<?php echo admin_url('cars'); ?>">Vehicle</a></li><li class="active"><?php if(isset($car)){ echo "Edit Vehicle"; }else{  echo "Add Vehicle"; }  ?></li></ul><div class="visible-xs breadcrumb-toggle"><a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a></div></div><!-- /breadcrumbs line --> 








       <form action="<?= $path; ?>" method="post" enctype="multipart/form-data" role="form"> 
           <div class="panel panel-default"> 
               <div class="panel-heading">
                   <h6 class="panel-title">
                   <i class="icon-car"></i>
                   <?php if(isset($car)){ echo "Edit Vehicle"; }else{  echo "Add Vehicle"; }  ?>
                   </h6>
               </div> 
               <div class="panel-body">
                  <div class="form-group">
                    <div class="row">
                       <div class="col-md-4">
                         <label>Choose Unit No.</label>
                               <select data-placeholder="Choose unit no." class="my_select_opt select-search" tabindex="2" name="unite_no"> 
                                  <?php foreach($unites as $u){  ?> 
                                   <option value="<?php echo $u->unite_no; ?>" <?php if(isset($car)){ if($car->unite_no == $u->unite_no){ echo "selected"; } }  ?>><?php  echo $u->unite_no; ?></option>
                                  <?php } ?>
                               </select> 
                      </div>
					  <div class="col-md-4">
                         <label>Vehicle Type</label>
						   <select data-placeholder="Choose Vehicle Type" class="my_select_opt select-search car_type_change" tabindex="2" name="type"> 
							   <option value="truck" data-icon="truck" <?php if(isset($car)){ if($car->type == "truck"){ echo "selected"; } }  ?>>TRUCK</option>
							   <option value="van" data-icon="shuttle" <?php if(isset($car)){ if($car->type == "van"){ echo "selected"; } }  ?>>VAN</option>
							   <option value="sydain" data-icon="sedan" <?php if(isset($car)){ if($car->type == "sydain"){ echo "selected"; } }  ?>>SYDAIN</option>
							   <option value="suv" data-icon="suv" <?php if(isset($car)){ if($car->type == "suv"){ echo "selected"; } }  ?>>SUV</option>
						   </select> 
                      </div> 
					  <div class="col-md-4 car_icon">
						<img src="https://png.icons8.com/truck/win8/50/333333">
					  </div>					   

                    </div>
                </div>




                   <div class="form-group">
                       <div class="row">
                           <div class="col-md-4">
                               <label>Make</label> 
                               <input type="text" name="made" class="form-control" value="<?php if(isset($car->made)){echo $car->made;}?>">
                               <?php echo form_error('made'); ?>
                           </div> 
                           <div class="col-md-4">
                               <label>Model</label> 
                               <input type="text" name="model" class="form-control" value="<?php if(isset($car->model)){echo $car->model;}?>">
                               <?php echo form_error('model'); ?>
                           </div>

                           <div class="col-md-4">
                               <label>Color</label> 
                               <input type="text" readonly name="color" class="form-control jscolor car_color_change" value="<?php if(isset($car->color)){echo $car->color;}?>">
                               <?php echo form_error('color'); ?>
                           </div>
                       </div>
                   </div>

                   <div class="form-group">
                       <div class="row">

                           <div class="col-md-4">
                               <label>Plate No.</label> 
                               <input type="text" name="plate_number" class="form-control" value="<?php if(isset($car->plate_number)){echo $car->plate_number;}?>">
                           </div>  


                           <div class="col-md-4">
                               <label>Parking Spot</label> 
                               <input type="text" name="parking_spot" class="form-control" value="<?php if(isset($car->parking_spot)){echo $car->parking_spot;}?>">
                           </div> 


                           <div class="col-md-4">
                               <label>Note</label> 
                               <input type="text" name="note" class="form-control" value="<?php if(isset($car->note)){echo $car->note;}?>">
                           </div> 

                       </div>                       
                   </div>


              <div class="form-group">
                   <div class="form-actions text-right"> 
                        
                       <a href="<?php echo admin_url('cars'); ?>" class="btn btn-danger">Cancel</a> 
                       <input type="submit" value="<?php if(isset($car)){ echo "Update Vehicle"; }else{  echo "Add Vehicle"; }  ?>" class="btn btn-primary"> 
                   </div>
              </div>
           </div>
       </form>




<script>
$(function(){
	$('.car_icon').html('<img src="https://png.icons8.com/'+$('.car_type_change').find('option:selected').attr('data-icon')+'/win8/50/'+($('.car_color_change').val() == undefined ? '333333' : $('.car_color_change').val() )+'">');
	
	$('.car_color_change').on('change',function(){
		$('.car_icon').html('<img src="https://png.icons8.com/'+$('.car_type_change').find('option:selected').attr('data-icon')+'/win8/50/'+$(this).val()+'">');
	});	
	$('.car_type_change').on('change',function(){
		$('.car_icon').html('<img src="https://png.icons8.com/'+$(this).find('option:selected').attr('data-icon')+'/win8/50/333333">');
	});
});
</script>


<?php include(dirname(__DIR__).'/footer.php'); ?>

