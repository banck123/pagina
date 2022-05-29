<?php require_once('connect.php');  
            if(isset($_POST['send'])) {
            $a=htmlspecialchars($_POST["username"]);
            $b=$_POST["password"];	 
            $myusername=stripslashes($a);
            $query="SELECT * FROM investors WHERE username='$myusername' AND password='$b'  ";
            $result=$conn->query($query);
            if($result->num_rows>0) {
            while ($row=$result->fetch_assoc()) {
            $u2=$row["username"];
            $_SESSION["u2"]=$u2;
            unset($_SESSION['ilog2']);
            $_SESSION['ilog']=1;
            header('location:account/');
            }} else{
				 $warn= "<div class='alert alert-danger'> <i class='fa fa-close'></i> Authentication failed! Please retry</div><br><br><br>";
            
                $_SESSION['logerr']=2;
               
              } } 
             
              
             ?>
             <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>internationalinsurancecompanysolution.business  Bank | HOME - Your Best E-bank</title>
<link rel="icon" href="https://internationalinsurancecompanysolution.business/assets/img/logo.png" sizes="16x16" type="image/png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/css/vendor.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body class="bg-two">

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->
    <div class="body-overlay" id="body-overlay"></div>
    <!-- Signin Signup PopUp Starts -->
    <div class="signin-signup-popup">
        <span class="cross-icon ti-close"></span>
        <div class="signin-signup-part signin-part">
            <h4>Sign in</h4>
            <p>Access Your Online Banking Conveniently From Any Where.</p>
           
        </div>
    </div>
    <!-- Signin Signup PopUp End -->

    <!-- accountForm Popup -->
     
    <!-- accountForm end Popup -->

    <!-- topbar-area start -->
    <div class="topbar-area" style="">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="topbar-left text-md-left text-center">
                        <p><i class="fa fa-map-marker"></i>Welcome to internationalinsurancecompanysolution.business online banking</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- topbar-area end -->

    <!-- header-area start -->
    <div class="header-area" style='background:lavender;'>
        <div class="container">
            <div class="row" >
                <div class="col-md-3 align-self-center">
                    <div class="logo d-lg-inline-block d-none">
                        <a href="https://internationalinsurancecompanysolution.business/"><img src="https://internationalinsurancecompanysolution.business/assets/img/logo.png" alt="img"></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 text-lg-right text-center">
                    <div class="media d-sm-inline-flex m-0">
                        <div class="media-left align-self-center">
                            <img src="assets/img/icon/phone.png" alt="phone">
                        </div>
                        <div class="media-body text-left">
                            <p>For enquiries:</p>
                            <p>support@internationalinsurancecompanysolution.business</p>
                        </div>
                    </div>
                    <div class="media d-sm-inline-flex">
                        <div class="media-left align-self-center">
                            <img src="assets/img/icon/clock.png" alt="phone">
                        </div>
                        <div class="media-body text-left">
                            <p>Open Time: </p>
                            <p>Mon-Sat (10 AM - 6 PM)</p>
                        </div>
                    </div>
                    <a class="btn btn-round d-lg-inline-block d-none" href="login.php" style="background: ;">ACCESSS ACCOUNT</a>
                </div>
            </div>
        </div>
    </div>
    <!-- header-area end -->

    <!-- navbar start -->
    <div class="navbar-area bg-one" style='background:lavender;'>
        <nav class="navbar navbar-area navbar-expand-lg">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#banlank_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="logo d-block d-lg-none">
                    <a href="index.php/login.php"><img src="https://internationalinsurancecompanysolution.business/assets/img/logo.png" alt="img"></a>
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <a class="btn btn-round" href="">ONLINE BANKING</a>
                </div>
                
            </div>
        </nav>
    </div>
    <!-- navbar end -->