<?php

session_start();

$connection = new mysqli("localhost", "root", "", "student_automated_timetable_generator");

if ($_POST) {
    //$name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $selectquery = mysqli_query($connection, "select * from tbl_faculty where faculty_email='{$email}' and faculty_password='{$password}'") or die(mysqli_error($connection));
    $count = mysqli_num_rows($selectquery);
    $row = mysqli_fetch_array($selectquery);

    if ($count > 0) {
        $_SESSION['faculty_id'] = $row['faculty_id'];
        $_SESSION['faculty_name'] = $row['faculty_names'];

        header("location:index.php");
    } else {
        echo "<script>alert('Email and Password Not Match.')</script>";
    }
}



?>
<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/university/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 05:00:57 GMT -->

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
                <a class="navbar-brand" href="javascript:void(0);" title="" target="_blank">GLS</br>Faculty LOGIN</a>
                <button class="navbar-toggler" type="button">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="page-header">
        <div class="page-header-image" style=" background-image:url(assets/images/ll.jpg)"></div>
        <div class="container">
            <div class="col-md-12 content-center">
                <div class="card-plain">
                    <form class="form" method="post" action="#" id="myform">
                        <div class="header">
                            <div class="logo-container">
                                <img src="assets/images/logo.svg" alt="">
                            </div>
                            <h5>Log in</h5>
                        </div>
                        <div class="content">
                            <div class="input-group">
                                <input type="text" name="email" class="form-control" placeholder="Enter Your Email" required />
                                <span class="input-group-addon">
                                    <i class="zmdi zmdi-account-circle"></i>
                                </span>
                            </div>
                            <div class="input-group">
                                <input type="password" name="password" placeholder="Password" class="form-control" required />
                                <span class="input-group-addon">
                                    <i class="zmdi zmdi-lock"></i>
                                </span>
                            </div>
                        </div>
                        <div class="footer text-center">
                            <input type="submit" value="Login" class="btn btn-primary btn-round btn-lg btn-block waves-effect waves-light">
                            <h5><a href="forgot-password.php" class="link">Forgot Password?</a></h5>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

    <script>
        $(".navbar-toggler").on('click', function() {
            $("html").toggleClass("nav-open");
        });
        //=============================================================================
        $('.form-control').on("focus", function() {
            $(this).parent('.input-group').addClass("input-group-focus");
        }).on("blur", function() {
            $(this).parent(".input-group").removeClass("input-group-focus");
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

<!-- Mirrored from thememakker.com/templates/oreo/university/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 05:01:00 GMT -->

</html>