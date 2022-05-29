<?php require_once('../connect.php');
if(empty($_COOKIE['username']))
{ } else{ } 
if(isset($_POST['send'])) {
$a=htmlspecialchars($_POST["myusername"]);
$b=$_POST["mypasswor"];	 
$myusername=stripslashes($a);
$mypassword=md5($b);
setcookie('username', $_POST['myusername'], time()+60*60*24*30, '/');
setcookie('password',$_POST['mypasswor'], time()+60*60*24*30, '/');
$query="SELECT * FROM admin WHERE username='$myusername' AND password='$b'";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$u2=$row["username"]; $sta=$row["status"];

$_SESSION["u2"]=$u2;
unset($_SESSION['ilog2']);
$_SESSION['ilog']=1;
header('location:index.php');

}} else{
    $_SESSION['ilog2']=2;
    unset($_SESSION['ilog']);
  } } 
  
 ?>
 <!DOCTYPE html>

<html class="no-js" style="height: 100%;" lang=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  
  <title> Admin Login | Banking Script 7.2+ PHP Version </title>
  <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<meta name="msapplication-TileImage" content="">
  <!-- build:css({.tmp,app}) styles/app.min.css -->
  <link href="file/bootstrap.css" rel="stylesheet" id="bootstrap-css">
<script src="file/bootstrap.js.download"></script>
<script src="file/jquery-1.js.download"></script>
<link href="file/css.css" rel="stylesheet"> 
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
  background:url('') ; no-repeat center center fixed; 
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
</style> <link type="text/css" rel="stylesheet" charset="UTF-8" href="file/translateelement.css"><script type="text/javascript" charset="UTF-8" src="file/main.js.download"></script><script type="text/javascript" charset="UTF-8" src="file/element_main.js.download"></script></head>




<body style="position: relative; min-height: 100%; top: 0px;"><div class="container">
    <div class="row">
        
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
               <center><br><img style="width: 250px;" src="file/blue.png" alt="LOGO" data-default="placeholder" data-max-width="100" width="16%"></center> <br>
                <div style="background-color: #092980;" class="panel-heading">
                    	</div><br><center> 
                    	
                    	
                    	<!-- GTranslate: https://gtranslate.io/ -->

         
<strong></strong>
                <div class="panel-body">
     <?php if(isset($_SESSION['ilog'])){
            echo "";
            } ?>
            <?php if(isset($_SESSION['ilog2'])){
            echo "<h6 style='background-color:orange;' class='alert alert-warning'><center>Incorrect username 
            or password,please <a href='login.php'>retry </a></center></h6>";
            } 
            
            ?>               
                                                                                  
                    <form autocomplete="off" method="POST">
            <div class="form-inputs p-b">
              <a style="color: black;"><b>USERNAME</b></a>
              <input style="margin-bottom: 20px;" type="text" name="myusername" class="form-control" placeholder="Enter Admin username" autofocus="" required="">
                            <input type="hidden" name="code" value="" &="">
                            
                            <label="" class="text-uppercase"><b>PASSWORD</b>
               <input type="password" name="mypasswor" class="form-control" placeholder="Enter Password" required="">
         <center><blockquoe><br>
             
              </blockquoe></center>
            </label=""></div>
        <center><button style="background-color: #092980;" name="send" class="btn btn-success btn-sm" type="submit">
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
</div><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="file/translate_24dp.png" width="20" height="20" alt="Google Translate"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Original text</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Contribute a better translation</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div> 



<div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div></body></html>