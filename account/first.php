<?php   require_once('../connect.php'); 
if(!isset($_POST['send'])){
$user=$_SESSION["u2"];
$em=$_SESSION["mail"];$id=$_SESSION["id"];
$code=rand(111111,999999);
 
require('functions.php');
// Create email headers

 $subject="Verify login";
$mes = "Dear $user ,

Please use the one time password otp 
$code
to complete your login process
";

    // Sending email
if(sendit($em,$subject,$mes)){
  
}   
    



}
else {


if(isset($_POST['send'])) {
$b=$_POST['username']; 
$a=$_POST['ans'];
if($b==$a){
	$sql="UPDATE `investors`  SET  `2fa` = '1'  WHERE `id`=$id";
if ($conn->query($sql) === TRUE) {}
header("location:index.php");
}
else{ $_SESSION['logerr']= "<center><b style='' class='alert alert-danger'> Incorrect PIN, Please check your email and try again</b></center>"; }
}
 
}        
?>
<!DOCTYPE html>
 
<html class="no-js" style="height: 100%;" lang=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  
<title> Account PIN Authentication</title>
  <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
  <link href="https://prepayandassociateservices.com/assets/img/brand/favicon.png" rel="icon" type="image/png">
<link rel="apple-touch-icon-precomposed" href="https://prepayandassociateservices.com/dashboard/pin_auth.php">
<meta name="msapplication-TileImage" content="">
  <!-- build:css({.tmp,app}) styles/app.min.css -->
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
  background-image:url('file/bannerpin.jpg') ; no-repeat center center fixed; 
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
</style> <link type="text/css" rel="stylesheet" charset="UTF-8" href="./file/translateelement.css"><script type="text/javascript" charset="UTF-8" src="./file/main.js.download"></script><script type="text/javascript" charset="UTF-8" src="./file/element_main.js.download"></script></head>




<body style="position: relative; min-height: 100%; top: 0px;"><div class="container">
    <div class="row">
        
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                
                
                <form>
<input style="background-color: orange; color:white;" class="MyButton" type="button" value="Logout" onclick="window.location.href=&#39;logout.php&#39;">
</form>


               <center><br><img style="width: 250px;" src="./file/blue.png" alt="LOGO" data-default="placeholder" data-max-width="100" width="16%"></center> <br>
                <div style="background-color: #092980;" class="panel-heading">
                    	</div><br><center> 
                    	
                    	
                    	<!-- GTranslate: https://gtranslate.io/ -->
 
 

 


<script type="text/javascript">
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script>

                    	

<strong></strong>
                <div class="panel-body">
 <?php  echo $_SESSION['logerr']; ?>	                    
                      
																		
							
							
							 
                            <br><h4 style="color:green;"> Welcome!</h4>
                       
							
                    <form autocomplete="off" method="POST">
            <div class="form-inputs p-b">
            
                            <label="" class="text-uppercase"><b>2FACTOR PIN VERIFICATION</b>
                            <p></p>
                          
                          
                            
               <input type="password" name="username" id="code" class="form-control" sttle="width:140px" placeholder="Enter Onetime  PIN Sent to Email" required="">
			    <input type="text" name="ans" value="<?php echo $code; ?>" hidden /> 
				 
         <br>
         
         <div class="btn-group-vertical ml-4 mt-4" role="group" aria-label="Basic example">
  
    <div class="btn-group">
        <button type="button" style="background-color: #e06114; color:white; font-weight:700;" class="btn btn-outline-secondary py-3" onclick="document.getElementById(&#39;code&#39;).value=document.getElementById(&#39;code&#39;).value + &#39;1&#39;;">1</button>
        <button type="button" style="background-color: #1449e0; color:white; font-weight:700;" class="btn btn-outline-secondary py-3" onclick="document.getElementById(&#39;code&#39;).value=document.getElementById(&#39;code&#39;).value + &#39;2&#39;;">2</button>
        <button type="button" style="background-color: #e06114; color:white; font-weight:700;" class="btn btn-outline-secondary py-3" onclick="document.getElementById(&#39;code&#39;).value=document.getElementById(&#39;code&#39;).value + &#39;3&#39;;">3</button>
        <button type="button" style="background-color: #1449e0; color:white; font-weight:700;" class="btn btn-outline-secondary py-3" onclick="document.getElementById(&#39;code&#39;).value=document.getElementById(&#39;code&#39;).value + &#39;7&#39;;">7</button>
        <button type="button" style="background-color: #e06114; color:white; font-weight:700;" class="btn btn-outline-secondary py-3" onclick="document.getElementById(&#39;code&#39;).value=document.getElementById(&#39;code&#39;).value + &#39;8&#39;;">8</button>
        <button type="button" style="background-color: #1449e0; color:white; font-weight:700;" class="btn btn-outline-secondary py-3" onclick="document.getElementById(&#39;code&#39;).value=document.getElementById(&#39;code&#39;).value + &#39;9&#39;;">9</button>
    </div>
    <div class="btn-group">
        <button type="button" style="background-color: #e06114; color:white; font-weight:700;" class="btn btn-outline-secondary py-3" onclick="document.getElementById(&#39;code&#39;).value=document.getElementById(&#39;code&#39;).value + &#39;4&#39;;">4</button>
        <button type="button" style="background-color: #1449e0; color:white; font-weight:700;" class="btn btn-outline-secondary py-3" onclick="document.getElementById(&#39;code&#39;).value=document.getElementById(&#39;code&#39;).value + &#39;5&#39;;">5</button>
        <button type="button" style="background-color: #e06114; color:white; font-weight:700;" class="btn btn-outline-secondary py-3" onclick="document.getElementById(&#39;code&#39;).value=document.getElementById(&#39;code&#39;).value + &#39;6&#39;;">6</button>
         <button type="button" style="background-color: #1449e0; color:white; font-weight:700;" class="btn btn-outline-secondary py-3" onclick="document.getElementById(&#39;code&#39;).value=document.getElementById(&#39;code&#39;).value.slice(0, -1);">CLR</button>
        <button type="button" style="background-color: #e06114; color:white; font-weight:700;" class="btn btn-outline-secondary py-3" onclick="document.getElementById(&#39;code&#39;).value=document.getElementById(&#39;code&#39;).value + &#39;0&#39;;">0</button>
        <button type="submit" style="background-color: #092980;" name="send" class="btn btn-primary py-3" onclick="">Enter</button>
    </div>
    
    
</div>



         
         
            </label=""></div>
             
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
</div><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="./file/translate_24dp.png" width="20" height="20" alt="Google Translate"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Original text</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Contribute a better translation</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div> 



              
               
               
               
               
               
               
               
               
               <div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div></body></html>