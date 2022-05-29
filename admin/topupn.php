<script type="text/javascript">

        function isNumberKey(evt, obj) {

            var charCode = (evt.which) ? evt.which : event.keyCode
            var value = obj.value;
            var dotcontains = value.indexOf(".") != -1;
            if (dotcontains)
                if (charCode == 46) return false;
            if (charCode == 46) return true;
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }



    </script>
	<h1>TOPUP ACCOUNT</h1>
<?php   require('functions.php'); 
 if(isset($_POST['topp'])){
      $imi=$_POST['imi'];
$rs=$_POST['rs'];
 $wallet=$_POST['wallet'];
 $aid=$_POST['aid'];
 $name=$_POST['name']; 
 $top=$_POST['top']; 
 $tt=$top+$wallet;  
 $des=$_POST['des'];
$cur=$_POST['cur']; 
$date=$_POST['date']; 
$date=$date.date(" - h:i:s a");
$query="UPDATE investors SET phone=$tt WHERE id=$rs ";
$result=$conn->query($query);
if($result==TRUE) {
$ip= $_SERVER["REMOTE_ADDR"];
$sql="INSERT INTO logs(client,Description,anount,date,status,currency,balance)
 VALUES('$name','$des','$top','$date','completed','$cur','$tt')";
if($conn->query($sql)==TRUE){
    
    
    
    
    
    
    
    
    
//send mail
//process email begin
    
 $subject = 'Transaction Alert [CREDIT: $'.$top.']';
$to = $imi;
// Create email headers
$mes = "<html>
</body>
<img src='https://hopesinsurance.com/assets/images/logo.png' style='background:; width:30%; height:200px; margin-right:auto; margin-left:auto;'>
<br>
<h2><b>Dear $name ,</b></h2>

<h4><b> hopesinsurance Transaction Notification - Rep_today </b></h4>

Please see below details of the transaction on your account:
<br>
<table border='1'>
<tr>
<td>ACCOUNT NUMBER </td>
<td>******$aid</td>
</tr>
<br>
<tr>
<td>AMOUNT</td>
<td>$$top</td>
</tr>
<br>
<tr>
<td>DESCRIPTION</td>
<td>$des</td>
</tr>
<tr>
<td>DATED</td>
<td>$date</td>
</tr>



</table>

</table>
<TD height='2' style='LINE-HEIGHT: 2.5;
	MARGIN: 0px; FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif;
	MAX-WIDTH: 600px; COLOR: black; FONT-SIZE: 12px'> <b>Remember:</b> Zirat Bank would NEVER call, SMS or e-mail requesting for your card details, PIN, token codes, mobile/internet banking login details or other account related information. Please DO NOT respond to such messages.

You can reach our 24/7 contact center guDirect on the details below, livechat with us at www.hopesinsurance.com or click the Facebook and Twitter buttons below to engage us on social media.

Thank you for Banking with us.

   
    
	</TD></TR>
	</TBODY></TABLE></P></BODY></HTML>";

    // Sending email
if(sendit($to,$subject,$mes)){
  
}    
    
    
    
    
    
    
    
    
    
	} 
 header('Refresh: 3; url=index.php');
echo "Transfer Successfully Done";
}  
}
?>	
	
	
	
	
	
	
	
	<form method='post' action=''  >
 <?php
if(isset($_GET['name'])){ $aus=$_GET['name'];   $awa=$_GET['awa']; $rs=$_GET['rs']; $cur=$_GET['cur'];}
else { $aus=""; $cur="";  $awa="0"; $rs=0; }
?> 
   <input type='text' name='top' style='widht:50%; border:1px solid black; color:red; background:lavender' 
   onkeypress='return isNumberKey(event,this)' placeholder='Amount' required><br><br>
   <input type='text' name='des' placeholder='Description' required> <br><br>
   <input type='text' name='wallet' value='<?php echo $awa ; ?>' hidden>  
   <input type='text' name='imi' value='<?php $imi=$_GET['imi']; echo $imi; ?>'  hidden>
   <input type='text' name='name' value='<?php echo $aus ; ?>'  hidden> 
    <input type='text' name='aid' value='<?php echo $_GET['aid'] ; ?>'  hidden> 
   <input type='text' name='cur' value='<?php echo $aus ; ?>'  hidden>  <input type='text' name='rs' value='<?php echo $rs ; ?>'  hidden> 
      <input type='date' name='date' value='21-10-2019' required  ><br><br>
     <button type='submit' name='topp' class='btn btn-info'>Top up Account</button>
  </form><br><br><hr>
  
  
  					<div class="row">
			        <div class="col-md-12 mb-5">
			          <div class="card">
			            <div class="card-header">
			             Account Statement		              </div>
			            <div class="card-table table-responsive">
			              <table class="table table-hover align-middle">
			                <thead class="thead-light">
			                  <tr>
			                    <th width="25%">Date / Time </th>
					              <th width="12%">Credit / Debit </th>
					              <th width="25%">Description</th>
					              <th width="15%">Amount</th>
					              <th width="16%">Action </th>
					              <th width="7%">&nbsp;</th>
				              </tr>
		                    </thead>
<tbody>
<?php	                                 
$query="SELECT * FROM logs WHERE client='$aus' ORDER BY id DESC";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$m1= $row["description"]; $m2= $row["anount"]; $m3= $row["date"]; $m4= $row["status"];
if($m4=='completed'){
$check="<span class='badge badge-success'>Credit</span>";	
$badge="badge-success";
$h="text-success";
$m2="+ ".$m2;
}
else
{
$check="<span class='badge badge-danger'>Debit</span> ";	
$badge="badge-danger";
$h="text-danger";
$m2="- ".$m2;
}
 $rand=rand(111111111111,999999999999);



echo "<tr>
<td>$m3</td>
<td> $check</td>
<td>$m1		          
</td>
<td>                        
<h4 class='$badge'>$cur $m2</h4>	
</td>
<td>$m4		
</td>
<td>
</td>
</tr>";
}}
 ?>
</tbody>
		                  </table>
		                </div>
		              </div>
		          </div>
		        </div>
					
		  	
	                       