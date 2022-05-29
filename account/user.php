
					<div class="row">
					
					
					<div class="col-md-8 mb-8" style='background:white;' style=" overflow: auto;">
		    
		    <table class="table table-hover">
    
    <tbody> 
		  
		 <tr>  <td><b>You logged in from IP :</b> </td><td style='color:green;'><?php echo $ip; ?></td>
		   </tr>
		   <tr>
		   <td><b>You logged in from : </b></td><td style='color:green;'><?php echo $location; ?></td>
		   </tr>
		   <tr>
		   <td><b>logged in at : </b></td><td style='color:green;'><?php echo $at; ?></td>
		   </tr>
		   <tr>
		   <td><b>Account Name : </b></td><td style='color:blue;'><?php echo $ada; ?></td>
		   </tr>
		   <tr>
		   <td><b>Account Number :</b> </td><td style='color:blue;'><?php echo $accn; ?></td>
		   </tr>
		   <tr>
		   <td><b>Phone Number :</b> </td><td style='color:blue;'><?php echo $ph; ?></td>
		   </tr>
		   <tr>
		   <td><b>Email :</b> </td><td style='color:blue;'><?php echo $aem; ?></td>
		   </tr>
		   <tr>
		   <td><b>Date of Birth : </b></td><td style='color:blue;'><?php echo $dob; ?></td>
		   </tr>
		   <tr>
		   <td><b>Address : </b></td><td style='color:blue;'><?php echo $address; ?></td>
		   </tr>
		   <tr>
		   <td><b>Username : </b></td><td style='color:blue;'><?php echo $client; ?></td>
		   </tr>
		   <tr>
		   <td><b>Account Balance :</b> </td><td><h3 style='color:red;'><?php echo number_format("$awa").".00"; ?></h3></td>
		    </tr>
		    <tr>
		        <td></td><td>  <a class="badge badge-info" href="?transfer">Money transfer</a></td>
		    </tr>
		   </tbody>
		   </table>

		    
		    </div>
					  
					  
					  
					  
					  
					  
					<div class="col-sm-12 col-md-6 col-xl-4 mb-4" style='background:white;'>
							<div class="card card-md bg-primary bg-gradient text-center">
								<div class="card-body" style='background:white;'>
									<div class="profile-picture profile-picture-lg bg-gradient bg-primary mt-5">
										<img src="../admin/uploads/<?php echo $pix; ?>" width="170" height="170">									</div>
									<p class="mt-5 mb-4"><h4>Welcome!</h4></p><br>
									<h3><?php echo $ada; ?></h3>
									
									<a class="btn btn-secondary waves-effect waves-light" href="?profile">View Profile</a>
								</div>
							</div>
					  </div>
						
						
						 
						
						
                          
                         
					</div>
					
		 