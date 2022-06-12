<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$connection = new mysqli("localhost", "root", "", "student_automated_timetable_generator");

if ($_POST) {
    $email = $_POST['email'];

    $selectquery = mysqli_query($connection, "select * from tbl_faculty where faculty_email='{$email}'") or die(mysqli_error($connection));
    $count = mysqli_num_rows($selectquery);
    $row = mysqli_fetch_array($selectquery);

    if ($count > 0) {

        //echo $row['st_password'];

        //Import PHPMailer classes into the global namespace
        //These must be at the top of your script, not inside a function


        //Load Composer's autoloader
        require 'vendor/autoload.php';

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'phpmysql.project10@gmail.com';                     //SMTP username
            $mail->Password   = 'project@123';                               //SMTP password
            $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('phpmysql.project10@gmail.com', 'Project');
            $mail->addAddress($email, $email);     //Add a recipient

            //Attachments

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Forgot Password';
            $mail->Body    = "Hi $email your passowrd is {$row['faculty_password']}";
            $mail->AltBody = "Hi $email your passowrd is {$row['faculty_password']}";

            $mail->send();
            echo 'Your Password has been sent on your Email ID.';
        } catch (Exception $e) {
            echo 'Email could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    } else {
        echo "<script>alert('Email Not Found');</script>";
    }
}


?>
﻿
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
                    <li class="nav-item">
                        <a class="nav-link btn btn-white btn-round" href="login.php">SIGN IN</a>
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
                    <form class="form" method="post" action="#" id="myform">
                        <div class="header">
                            <div class="logo-container">
                                <img src="assets/images/logo.svg" alt="">
                            </div>
                            <h5>Forgot Password?</h5>
                            <span>Enter your e-mail address below to reset your password.</span>
                        </div>
                        <div class="content">
                            <div class="input-group">
                                <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                                <span class="input-group-addon">
                                    <i class="zmdi zmdi-email"></i>
                                </span>
                            </div>
                        </div>
                        <div class="footer text-center">
                            <input type="submit" class="btn btn-primary btn-round btn-lg btn-block waves-effect waves-light">

                            <!--<h5><a href="javascript:void(0);" class="link">Need Help?</a></h5>-->
                        </div>
                    </form>
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
        $(".navbar-toggler").on('click', function() {
            $("html").toggleClass("nav-open");
        });
    </script>

    <script type="text/javascript" src="mytools/jquery-3.6.0.js"></script>

    <script type="text/javascript" src="mytools/jquery.validate.js"></script>
    <script>
        $(document).ready(function() {
            $("#myform").validate();
        });
    </script>
    <style>
        .error {
            color: red;
        }
    </style>

</body>

<!-- Mirrored from thememakker.com/templates/oreo/university/html/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 05:01:22 GMT -->

</html>