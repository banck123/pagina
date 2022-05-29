					<div class="row">
					<div class="col-md-8 mb-8" style=" overflow: auto;">
			          <div class="card">
			            <div class="card-header">
			             Account Statement		              </div>
			             <table class="table table-hover">
    <thead>
      <tr><b></b>
            <th></th>
        <th>Date</th>
        <th>Ref. No</th>
        <th>Description</th>
        <th>Credit</th>
        <th>Debit</th>
        <th>Status</th>
     </b>
      </tr>
    </thead>
    <tbody>
			           
	
<?php	                                 
$query="SELECT * FROM logs WHERE client='$client' ORDER BY date DESC";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$m1= $row["description"]; $m2= $row["anount"]; $m3= $row["date"]; $m4= $row["status"];$bal= $row["balance"]; $m2= number_format("$m2").".00";  
$ref=md5($m3); 
$ref=substr($ref,0,8); 
if($m4=='completed'){ 
     $which="<span style='color:green;'>$$m2</span>"; $which2="";
$check="<span class='badge badge-success'>Credit</span>";	
$badge="badge-success";
$h="text-success";
$m2=" ".$m2;
$ar="up";
$ar2="style='color:green; font-size:20px;'";
}
else
{
    $which=""; $which2="<span style='color:red;'>$$m2</span>";
   
    $ar="down";
    $ar2="style='color:red; font-size:20px;'";

}

echo "

<tr>
<td><i class='fa fa-arrow-circle-$ar'  $ar2></i></td>
<td>$m3</td>
<td><b>#TRN$ref</b></td>
<td>$m1</td>
<td><b>$which</b></td>
<td><b>$which2</b></td>
<td><span class='badge badge-success' >Success</span></td>

</tr>

";
}}
 ?>
</tbody>
		                
	</table>
	</div>
	</div>
		<div class="col-md-4 mb-4" style='background:white;' style=" overflow: auto;">
		    
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

		    
		    </div></div>
	                       