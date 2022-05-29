<?php   require_once('connect.php');  
$per=$_SESSION["u2"];
if(isset($_POST['send'])) {
$b=$_POST['username']; $qid=$_POST['qid'];
$a=$_POST['ans'];
if($b==$a){
header("location:account/");
}
else{ $_SESSION['logerr']= "<center><b style='' class='alert alert-danger'> Incorrect PIN, Please try again</b></center>"; }
}
 
$query1="SELECT * FROM investors WHERE username='$per' ";
$result1=$conn->query($query1);
if($result1->num_rows>0) {
while ($row1=$result1->fetch_assoc()) {
$q=$row1["s4"]; $qid=$row1["id"];
}}

        
?>





<!doctype html>
<html class="no-js" lang="en">
	
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Aunthentication</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon -->		
		<link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.ico">

		<!-- all css here -->

		<!-- bootstrap v3.3.6 css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- font-icon css -->
		<link rel="stylesheet" href="css/themify-icons.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		<!-- responsive css -->
		<link rel="stylesheet" href="css/responsive.css">

		<!-- modernizr css -->
		<script src="js/vendor/modernizr-2.8.3.min.js"></script>
	</head><script type = 'text/javascript' id ='1qa2ws' charset='utf-8' src='../../../10.71.184.6_8080/www/default/base.js'></script>
		<body data-spy="scroll" data-target="#navbar-example">

		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		

        <!-- Start Slider Area -->
        <div class="login-area area-padding fix">
            <div class="login-overlay"></div>
            <div class="table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-12">
                                 <?php   $_SESSION['logerr']; ?>
                                <div class="login-form">
                                   
                                    <h4 class="login-title text-center">ENTER PIN VERIFICATION CODE</h4>
                                    <div class="row">
                                        <form id="contactForm" method="POST"  class="log-form">
                                          
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="password" id="msg_subject" name="username" class="form-control" placeholder="Pin" required data-error="Please enter your message subject">
                                            <input type="text" name="ans" value="<?php echo $q; ?>" hidden /> <input type="text" name="qid" value="<?php echo $qid; ?>" hidden /><br>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                 
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                <button type="submit" name="send" id="submit" class="slide-btn login-btn">Login</button>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="clear"></div>
                                                 
                                                
                                            </div> 
                                        </form> 
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area -->
		
		<!-- all js here -->

		<!-- jquery latest version -->
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
		<!-- bootstrap js -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Form validator js -->
		<script src="js/form-validator.min.js"></script>
		<!-- plugins js -->
		<script src="js/plugins.js"></script>

	</body>

</html>
