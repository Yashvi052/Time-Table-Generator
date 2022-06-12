<?php
session_start();

$connection = new mysqli("localhost", "root", "", "student_automated_timetable_generator");
//Login Condition
if(!isset($_SESSION['admin_id']))
{
    header("location:");
}

if($_POST)
{
    $opass = $_POST['opass'];
    $npass = $_POST['npass'];
    $cpass = $_POST['cpass'];
    
    //Fetch Old Password FROM DB
    
    $oldpasswordquery = mysqli_query($connection, "select admin_password from tbl_admin where admin_id='{$_SESSION['adminid']}'") or die(mysqli_error($connection));
    $oldpasswordfromdb = mysqli_fetch_array($oldpasswordquery);
    //Old Password Condition
    if($oldpasswordfromdb['admin_password'] == $opass)
    {
       //New and Confirm Password Condition 
       if($npass == $cpass)
       {
         //Old and New Password Must be Different  
         if($opass == $npass)
         {
             echo "<script>alert('Old and New Password Must be Different');</script>";
         } else 
         {
             $updateq = mysqli_query($connection, "update tbl_admin set admin_password='{$npass}' where admin_id='{$_SESSION['adminid']}'") or die(mysqli_error($connection));
             if($updateq)
             {
               echo "<script>alert('Password Changed');</script>";  
             }
                 
             }
             
             }  
       else 
       {
           echo "<script>alert('New and Confirm Password must be same');</script>";
       }
       
    } else 
    {
        echo "<script>alert('Old Password Not Match');</script>";
    }
    }

?>
<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/university/html/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 05:01:22 GMT -->
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: GLS University Admin ::</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/authentication.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
    
    
    
</head>

<body class="theme-blush authentication sidebar-collapse">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-transparent">
    <div class="container">        
        <div class="navbar-translate n_logo">
            <a class="navbar-brand" href="javascript:void(0);" title="" target="_blank">GLS</a>
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);">Search Result</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Follow us on Twitter" href="javascript:void(0);" target="_blank">
                        <i class="zmdi zmdi-twitter"></i>
                        <p class="d-lg-none d-xl-none">Twitter</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Like us on Facebook" href="javascript:void(0);" target="_blank">
                        <i class="zmdi zmdi-facebook"></i>
                        <p class="d-lg-none d-xl-none">Facebook</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Follow us on Instagram" href="javascript:void(0);" target="_blank">                        
                        <i class="zmdi zmdi-instagram"></i>
                        <p class="d-lg-none d-xl-none">Instagram</p>
                    </a>
                </li>-->                
                <li class="nav-item">
                    <a class="nav-link btn btn-white btn-round" href="sign-in1.php">SIGN IN</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="page-header">
    <div class="page-header-image" style="background-image:url(assets/images/ll.jpg)"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form method="post" id="myform">
                    <div class="header">
                        <div class="logo-container">
                            <img src="assets/images/logo.svg" alt="">
                        </div>
                        <h5>Change Password?</h5>
                        <span>Enter your old password below to reset your password.</span>
                    </div>
                    <div class="content">
                        <div class="input-group">
                            <input type="password" name="opass" class="form-control" placeholder="Old Password" required="true" required />
                            
                        </div>
                    </div>
                    <div class="content">
                        <div class="input-group">
                            <input type="password" name="npass" class="form-control" placeholder="New Password" required="true" required />
                            
                        </div>
                    </div>
                    <div class="content">
                        <div class="input-group">
                            <input type="password" name="cpass" class="form-control" placeholder="Confirm Password" required="true" required />
                            
                        </div>
                    </div>
                    <!--<div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="cpass" class="form-control" placeholder="Confirm Password" required="true" required />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Ph">
                                </div>
                            </div>-->
                            <!--<div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="npass" class="form-control" placeholder="New Password" required="true" required />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="cpass" class="form-control" placeholder="Confirm Password" required="true" required />
                                </div>
                            </div>-->
                            <div class="footer text-center">
                        <input type="submit" name="submit" class="btn btn-primary btn-round btn-lg btn-block waves-effect waves-light"  >
                      
                        <!--<h5><a href="javascript:void(0);" class="link">Need Help?</a></h5>-->
                    </div>
                            <!--<div class="col-sm-12">
                                <button type="submit" class="btn btn-raised btn-round btn-primary">Submit</button>
                                <button type="submit" class="btn btn-raised btn-round">Cancel</button>
                            </div>-->
                        </div>                        
                    </div>
                
            </div>
        </div>
    </div>
    <!--<footer class="footer">
        <div class="container">
            <nav>
                <ul>
                    <li><a href="http://thememakker.com/contact/" target="_blank">Contact Us</a></li>
                    <li><a href="http://thememakker.com/about/" target="_blank">About Us</a></li>
                    <li><a href="javascript:void(0);">FAQ</a></li>
                </ul>
            </nav>
            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>,
                <span>Designed by <a href="http://thememakker.com/" target="_blank">ThemeMakker</a></span>
            </div>
        </div>
    </footer>-->
</div>

<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script>
   $(".navbar-toggler").on('click',function() {
    $("html").toggleClass("nav-open");
});
</script>

<script type="text/javascript" src="mytools/jquery-3.6.0.js"></script>

<script type="text/javascript" src="mytools/jquery.validate.js"></script>
        <script>
            $(document).ready(function(){
                $("#myform").validate();
            });
        </script>
        <style>
            .error{
                color:red;
            }
        </style>

</body>

<!-- Mirrored from thememakker.com/templates/oreo/university/html/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 05:01:22 GMT -->
</html>