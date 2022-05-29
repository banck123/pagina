  <?php
  if(isset($_POST["update"])){
  $credit=$_POST["credit"];
  $la=$_POST["la"];

 
$sql="UPDATE `investors`  SET `lamount` = '$credit', `lneed` = '$la', `lstatus` = 'P'  WHERE id=$lid ";
if ($conn->query($sql) === TRUE) {
   
 echo "<div class='alert alert-success'>LOAN APPLICATION SUCCESSFUL!</div>";

} else{ echo "<div class='alert alert-danger'>Error occured!</div>"; }
  
  }  
  ?>
  
  
  
  <?php	                                 
$query="SELECT * FROM investors WHERE id='$lid'  AND loan=1 AND lstatus !='P'";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
    
    ?>
  
  <form id="contactForm" method="POST"  class="log-form">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="text" id="name" class="form-control" name="la" placeholder="Loan amount" required >
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
 <select   class="form-control" name="credit" style="color:blue;" >
<option value="50">$3,000 loan credit allowed</option>
<option value="100">$6,000 loan credit allowed</option>
<option value="150">$10,000 loan credit allowed</option>
<option value="200">$30,000 loan credit allowed</option>


     </select>
     
     <button type="submit" name="update" id="submit" class="slide-btn login-btn">Apply for Loan</button>
     
 </div>
 </form>
  <?php  } } ?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 	<div class="row">
					<div class="col-md-12 mb-12" style=" overflow: auto;">
			          <div class="card">
			            <div class="card-header">
			            loan         </div>
			             <table class="table table-hover">
    <thead>
      <tr> 
        <th>To deposit</th>
        <th>Amount requested</th>
         
     </b>
      </tr>
    </thead>
    <tbody>
 
<?php	                                 
$query="SELECT * FROM investors WHERE id='$lid'";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
 $loan= $row["loan"]; $lamount= $row["lamount"];  $lneed= $row["lneed"];  $lstatus= $row["lstatus"];  


echo "
<tr>
<td>$$lamount</td>
<td>$$lneed</td>
</tr>

";
}}
 ?>
</tbody>
		                
	</table>
	</div>
	</div>
	 </div>
	        </div>                