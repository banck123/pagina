          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="btn btn-sm btn-success">Total Account</h5>
                      <span class=""><?php
$sqlk="SELECT * FROM investors  ";
$resultk=mysqli_query($conk,$sqlk);
$rowcount=mysqli_num_rows($resultk);
if($rowcount==""){ echo "0";} else{
echo $rowcount ; }
  ?>
</span>
                    </div>
                    
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"> 
                    <span class="text-nowrap"><?php echo " AS at ". date("M, d, Y"); ?></span>
                  </span></p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="btn btn-sm btn-danger">Tickets</h5>
                      <span class=""><span><?php
$sqlk="SELECT * FROM logs ";
$resultk=mysqli_query($conk,$sqlk);
$rowcount=mysqli_num_rows($resultk);
if($rowcount==""){ echo "0";} else{
echo $rowcount ; }
  ?>

              
                    </span></span></div>
                    
                  </div>
                 <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"> 
                    <span class="text-nowrap"><?php echo " AS at ". date("M, d, Y"); ?></span>
                  </span></p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="btn btn-sm btn-warning">Total Credits</h5>
                      <span class="">$<?php  
									$queryv="SELECT SUM(anount) AS rtv FROM logs WHERE   status ='completed' ";
$resultv=$conn->query($queryv);
if($resultv->num_rows>0) {
while ($rowv=$resultv->fetch_assoc()) {
$rtv=$rowv["rtv"];
echo number_format($rtv);
}} else { echo "0.00"; }



?>
</span>
                    </div>
                     
                  </div>
                   <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"> 
                    <span class="text-nowrap">Total Debit: $<?php  
									$queryv="SELECT SUM(anount) AS rtv FROM logs WHERE   status ='debited' ";
$resultv=$conn->query($queryv);
if($resultv->num_rows>0) {
while ($rowv=$resultv->fetch_assoc()) {
$rtv=$rowv["rtv"];
echo number_format($rtv);
}} else { echo "0.00"; }



?>
                    </span>
                  </span></p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="btn btn-sm btn-info">Account Access IP</h5>
                      
                    </div>
                     
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-nowrap">
                        
                           <i class="fas fa-desktop" style="font-size:28px;color:black"></i>
                       <?php  echo $_SERVER['SERVER_ADDR']; ?>                       
                        
                    </span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        <hr>
        <div class="col">
          <div class="card shadow" >
            <div class="card-header border-0">
              <h3 class="mb-0"><a href="?users"   class="btn btn-danger">ALL CUSTOMER ACCOUNT</a></h3>
            </div>
          
           <div class="card-body">
 
              <div class="table-responsive">
	<table class="table ">
 
	                                    <tr>
	               
										<td>Photo</td>	
										<td>User</td>  	
										<td>Pass</td> 
										<td>pincode</td>
										<td>Actions</td>
	                                    <td>Photo</td>	 
	                                    <td>Remove</td>	 
	                                    </tr>	 
	                                    	 
											
											
	                                    
<?php require_once('../connect.php');
$query="SELECT * FROM investors ORDER BY id DESC";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$aid= $row["userid"]; $aus= $row["username"]; $aps= $row["password"];$id= $row["id"];$loan= $row["loan"];$lneed= $row["lneed"];
$ast= $row["status"]; $asts= $row["status"];  $ada= $row["misc"]; $q1= $row["bitcoin"];$accn= $row["accn"]; $pino= $row["s4"]; 
$q2= $row["ico"]; $q3= $row["referral"]; $imi= $row["email"];
 $aem= $row["email"];  $awa= $row["phone"]; $pix=$row["pix"]; $pin=$row["pin"]; $cur=$row["currency"];
 $loc=$row["loc"]; $lid=$row["id"];
 if($loan==1){  $loan="";} else { $loan=''; }
 $vvx="<a href='del.php?ui=$aid'><button class='badge-danger'>Delete</button></a>";
  if($ast=='N'){ $ast=""; }
  if($asts=='P'){ $dia="<i class='text-success'>Active</i>- <a href='inacti.php?ui=$id'><button class='badge-warning'>Deactivate</button></a>"; }
    if($asts=='N'){ $dia="<i class='text-warning'>InActive</i>- <a href='acti.php?ui=$id'><button class='badge-success'>Activate</button></a>"; }
  if($ast=='P'){ $ast=""; }
  if($ast=='B'){ $ast=""; }
  if($ast=='S'){ $ast=""; }
  
  if($asts=='S'){ $oth=""; } else{
      
  }
 if($asts=='N'){ $viv=""; }
 if($asts=='P'){ 
      $viv="";
  }
  if($asts=='B'){ }
 else { 
   
  }
  $sqlmm="SELECT * FROM investors WHERE referral='$aus'";

if ($resultmm=mysqli_query($conn,$sqlmm))
  {
  $rowcountmm=mysqli_num_rows($resultmm);
  $refe= "<span class='btn btn-warning'>".$rowcountmm."</span>"; }

  
$act="";

if($loc==0){
    $lo="<a href='?unlock&ui=$lid'   class='badge-success' ><i class='fa fa-close'></i> Unlock Transfers</a>";
    
}
else {
    $lo="<a href='?lock&ui=$lid'    class='badge-danger'><i class='fa fa-check'></i> Lock Transfers</a>";
}
?>
 <?php
	                $queryv="SELECT SUM(anount) AS rtv FROM logs WHERE  client = '$aus' AND  status ='completed' ";
$resultv=$conn->query($queryv);
if($resultv->num_rows>0) {
while ($rowv=$resultv->fetch_assoc()) {
$rtv=$rowv["rtv"];

}} else { echo "0.00"; }


$queryvz="SELECT SUM(anount) AS rtvz FROM logs WHERE  client = '$aus' AND  status ='debited' ";
$resultvz=$conn->query($queryvz);
if($resultvz->num_rows>0) {
while ($rowvz=$resultvz->fetch_assoc()) {
$rtvz=$rowvz["rtvz"];

}} else { echo "0.00"; }
$awamoney=$rtv-$rtvz;  
	                ?>
<?php

  echo "<tr>
  <td><img src='uploads/$pix'  style='width:60px;'><br>Acc No:<b>$accn</b> <br>$loan</td> 
  <td> <b>$aus</b><a href='?edi&name=$id' style='color:red;' >
  <i class='fas fa-pencil'></i><b> Edit</b></a></td>
  <td><span >$aps</span></td>   
  <td><span >$pino</span></td>
  <td>
  <strong style='color:green;'>Wallet: $cur $awamoney </strong>   $dia 
   $lo  <br>
   <a href='?ach&name=$aus' class='badge-info'><i class='fa fa-credit-card'></i> Account History</a>
 
  <a href='?topupn&name=$aus&cur=$cur&awa=$awa&rs=$lid&imi=$imi&aid=$accn'><button type='submit' class='badge-info'>Topup Account</button>  </a>
   <a href='?debitn&name=$aus&cur=$cur&awa=$awa&rs=$lid&imi=$imi&aid=$accn'><button type='submit' class='badge-warning'>Debit Account</button>  </a>
  </td>


  
   <td>
   <form method='post' action='upload.php?ui=$aid' enctype='multipart/form-data' >
   
  <input type='file' name='fileToUpload' id='fileToUpload' >
  <br>
     <button type='submit'>Change Photo</button>
   
   </form></td>
   <td> $vvx</td>
   </tr>";
}}
  ?>
  </table>

</div></div></div></div>