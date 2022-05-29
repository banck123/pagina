 <div class="row">
        <div class="col-xl-8 mb-5 mb-xl-0">
          <div class="card shadow">
            
            <div class="card-body">
              <!-- Chart -->
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
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col"> 
                    
                    
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
             <div class="card shadowcard shadow">
								<div class="card-body">
									<div class="profile-picture profile-picture-lg bg-gradient bg-primary mt-5">
										<img src="../admin/uploads/<?php echo $pix; ?>" width="130" height="130">									</div>
									 
									<h3><?php echo $ada; ?></h3>
									
									<a class="btn btn-secondary waves-effect waves-light" href="?profile">View Profile</a>
								</div>
									<div class="card shadow">
								<div class="card-body">
									 
									 
									<?php	                                 
$query="SELECT * FROM logs WHERE client='$client' ORDER BY id DESC LIMIT 2";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$m1= $row["description"]; $m2= $row["anount"]; $m3= $row["date"]; $m4= $row["status"];
if($m4=='completed'){
$check="<span class='badge badge-success'>Credited</span>";	
$badge="badge-success";
$h="text-success";
$m2="".$m2;
}
else
{
$check="<span class='badge badge-danger'>Debited</span>";	
$badge="badge-danger";
$h="text-danger";
$m2="".$m2;
}
 $rand=rand(111111111111,999999999999);
echo "Your account was $check with $cur $m2<hr>";
}}
 ?>
									
																		
									
									
									
								</div>
							</div>	
							</div>
            </div>
          </div>
        </div>
      </div>
	  <hr>