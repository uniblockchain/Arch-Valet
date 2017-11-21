<?php include('includes/header.php'); ?>





	    <div class="row login_page starr_profile_page">
		<div class="container">
		    <div class="row">
			<div class="col-md-5  toppad  pull-right col-md-offset-3 ">
			    
			    <br>
			    <p class=" text-info">May 05,2014,03:00 pm </p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
			
			    <div class="panel panel-info">
				<div class="panel-heading">
				    <h3 class="panel-title"><?php echo ucfirst($user_detail->name)?></h3>

				    <h3 style="font-size: 14px;float: right;margin-top: -16px;">
					<a href="<?php echo site_url('logout') ?>" >Logout</a>
				    </h3>
			
				    
				</div>
				<div class="panel-body">
				    <div class="row">
					<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="<?php echo $user_detail->image_path; ?>" class="img-circle img-responsive"> </div>

<p style="color:red">
<?php echo validation_errors() ?>
</p>
					<div class=" col-md-9 col-lg-9 "> 
					    <form method="post" action="<?php echo site_url('update_profile/'.$user_detail->id) ?>" enctype="multipart/form-data">
					    <table class="table table-user-information">
						<tbody>

							<tr>
							<td>Name:</td>
							<td><input type="text" name="full_name" value="<?php echo $user_detail->name; ?>"></td>
						    </tr>

						   <!--  <tr>
							<td>Department:</td>
							<td><input type="text" name="department"></td>
						    </tr> -->
						 
						 
							
						    <tr>
						    <!-- <tr>
							<td>Gender</td>
							<td>Female</td>
						    </tr> -->
						    <tr>
							<td>Home Address</td>
							<td><input type="text" name="address" value="<?php echo $user_detail->address; ?>"></td>
						    </tr>
						    <tr>
							<td>Zip Code</td>
							<td><input type="text" name="zip_code" value="<?php echo $user_detail->zip;?>"></td>
						    </tr>
						   
						   <tr>
						<td>Phone Number</td>
						<td><input type="text" name="phone" value="<?php echo $user_detail->contact_phone; ?>">(Landline)<br><br>
							<input type="text" name="mobile" value="<?php echo $user_detail->contact_mobile; ?>">(Mobile)
						</td>
						    
						</tr>

						<tr>
							<td>Upload Picture</td>
							<td><input type="file" name="user_image"></td>
						</tr>

						<tr>
							<td></td>
<td><button type="submit" class="editform_submit">Update</button></td>
						</tr>
						    
						</tbody>
					    </table>
					</form>

					</div>
				    </div>
				</div>

				    
			    </div>
			</div>
		    </div>
		</div>
	    </div>
	 </div>
	<!-- Footer -->




<?php include('includes/footer.php'); ?>