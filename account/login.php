<?php require_once('../connect.php');  
            if(isset($_POST['sends'])) {
            $a=htmlspecialchars($_POST["username"]);
            $b=$_POST["pas"];	 
            
            $query="SELECT * FROM investors WHERE accn='$a' AND password='$b'  OR username='$a' AND password='$b'";
            $result=$conn->query($query);
            if($result->num_rows>0) {
            while ($row=$result->fetch_assoc()) {
            $u2=$row["username"];  $fa=$row["2fa"]; $status=$row["status"];   $em=$row["email"]; $id=$row["id"]; $qid=$row["id"];         
                
   if($status=="P") {
	   if($fa==1){
		   
		   
		   
		               
//insert last login    
$ip=$_SERVER['REMOTE_ADDR'];
$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip)); 
$co= $ipdat->geoplugin_countryName; 
$sta= $ipdat->geoplugin_city ; 
$location=$sta.",".$co;
$at=date("d/m/Y  h:i:sa");
$sql="UPDATE `investors`  SET `ip` = '$ip',`location` = '$location',`attime` = '$at'  WHERE `id`=$qid";
if ($conn->query($sql) === TRUE) {
   header("location:account/");

} 


 $u2=$row["username"];
 
            $_SESSION["u2"]=$u2;
            unset($_SESSION['ilog2']);
            $_SESSION['ilog']=1;
            header('location:first.php');
			}
			else { 
			    		               
//insert last login    
$ip=$_SERVER['REMOTE_ADDR'];
$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip)); 
$co= $ipdat->geoplugin_countryName; 
$sta= $ipdat->geoplugin_city ; 
$location=$sta.",".$co;
$at=date("d/m/Y  h:i:sa");
$sql="UPDATE `investors`  SET `ip` = '$ip',`location` = '$location',`attime` = '$at'  WHERE `id`=$qid";
if ($conn->query($sql) === TRUE) {
   header("location:account/");

} 
$_SESSION["mail"]=$em; $_SESSION["id"]=$id;  
$_SESSION["u2"]=$u2; 
header('location:first.php'); }
			}
			else { echo "<div style='color:white; background:orange; height:100px;'><h4>THIS ACCOUNT IS DEACTIVATED , PLS CONTACT BANK FOR VERIFICATION</h4><div>"; }             
     }} else{
				 $warn= "<div class='alert alert-danger'> <i class='fa fa-close'></i> Authentication failed! Please retry</div><br><br><br>".$conn->error;
            
                $_SESSION['logerr']=2;
               
              } } 
  
             ?>
			 <!DOCTYPE html>

<html class="no-js" style="height: 100%;" lang=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  
  <title> Account Login  </title>
   
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
  
  <link href="./file/bootstrap.css" rel="stylesheet" id="bootstrap-css">
<script src="./file/bootstrap.js.download"></script>
<script src="./file/jquery-1.js.download"></script>
<link href="./file/css.css" rel="stylesheet"> 
<!------ Include the above in your HEAD tag ---------->
<style>
  body {
    font-family: 'Nunito', sans-serif;
    font-size: 14px;
    line-height: 1.28571429;
    color: 
    #000;
}  
   body { 
  background:url('file/bannerfront.jpg') ; no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.panel-default {
    opacity: 0.9;
    margin-top: 70px;
}

.btn-sm, .btn-xs {
    padding: 5px 40%;
    font-size: 15px;
    line-height: 1.5;
    border-radius: 3px;
}

.form-group.last { margin-bottom:0px; } 
    
.btn-success {
    color: 
#fff;
background-color:
#187718;
border-color:
    #187718;
}
 .alert-danger {

    color: #fff;
    background-color: #e30909;
    border-color: #eed3d7;

}
</style></head>




<body style="position: relative; min-height: 100%; top: 0px;"><div class="container">
    <div class="row">
        
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
               <center><br><img style="width: 250px;" src="./file/blue.png" alt="LOGO" data-default="placeholder" data-max-width="100" width="16%"></center> <br>
                <div style="background-color: #092980;" class="panel-heading">
                    	</div><br><center> 
                    	
                    	
                    	<!-- GTranslate: https://gtranslate.io/ -->

<style type="text/css">
<!--
a.gflag {vertical-align:middle;font-size:16px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/16.png);}
a.gflag img {border:0;}
a.gflag:hover {background-image:url(//gtranslate.net/flags/16a.png);}
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}
-->
</style>

<br> 
 




         
<strong></strong>
                <div class="panel-body">
                    <?php echo  $warn; ?>  
                                                                                  
                    <form autocomplete="off" method="POST">
            <div class="form-inputs p-b">
              <a style="color: black;"><b>ACCOUNT NUMBER/USERNAME</b></a>
              <input style="margin-bottom: 20px;" type="text" name="username" class="form-control" placeholder="Enter Online Banking Account Number." autofocus="" required="">
                           
                            
                            <label="" class="text-uppercase"><b>ACCOUNT PASSWORD</b>
               <input type="password" name="pas" class="form-control" placeholder="Enter Online Banking Password" required="">
         <center><blockquoe><br>
                 <p><a href="register.php">Sign up for Internet Banking</a></p>
              </blockquoe></center>
            </label=""></div>
        <center><button style="background-color: #092980;" name="sends" class="btn btn-success btn-sm" type="submit">
            <div align="center">Proceed</div>
            </button></center>
            <div class="divider">
              
            </div>
          
            <p class="text-center"><b></b>
            </p> <p class="text-center">The World in your Finger Tips</p>
          </form>
                </div>
                <div style="background-color: #092980;" class="panel-footer">
                    </div>
            </center></div>
        </div>
    </div>
</div>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/619e11746885f60a50bd510f/1fl8n8d77';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->