<?php
session_start();
if (!isset($_SESSION['studentid'])) {
    header("location:sign-in.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/university/front/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 05:04:42 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>:: GLS University :: Contact</title>
    <link rel="icon" href="favicon.ico">
    <!-- start linking -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body>

    <!--<div id="loading" class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/loader.svg" width="48" height="48" alt="Oreo"></div>
        <p>Please wait...</p>
    </div>
</div>-->

    <div class="wrapper">
        <?php
        include './main-header.php';
        ?>

        <!-- start hero -->
        <section id="hero">
            <div class="inner-banner" style="background-image:url(assets/images/banner-contactus.jpg)">
                <div class="container">
                    <h3 class="title">GLS <br><big>Contact <strong> Us</strong></big></h3>
                </div>
            </div>
        </section>

        <!-- Content Area -->
        <section class="main-section">

            <!-- Contact Section -->
            <div class="contact-section">
                <div class="container">
                    <!--<div class="row">
                    <div class="section-title col-12">
                        <h2><span>Get Touch </span>With Us</h2>
                        <p>Description text here...</p>
                    </div>
                </div>-->
                    <div class="row">
                        <!--          <div class="col-lg-8 col-md-12">
                        <div class="contact-form">
                            <div class="row">
                                <div class="col-sm-12 appoitntment-title">Make an Inquiry</div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Phone">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-sm-12 textarea">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Your Message.."></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button class="btn btn-primary btn-round">Submit</button>
                                </div>
                            </div>
                        </div>
                -->
                    </div>
                    <div class="col-lg-12 col-md-12" style="color: #ffffff !important">
                        <div class="contact-sidebar" style="color: #ffffff !important">
                            <h4>Quick Contact</h4>
                            <p style="color: #ffffff !important">If you have any questions simply use the following contact details.</p>
                            <ul class="list-unstyled add-grp">
                                <li>
                                    <i class="zmdi zmdi-pin" style="color: #ffffff !important"></i>
                                    <p style="color: #ffffff !important">Near Law Garden</p>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-phone" style="color: #ffffff !important"></i>
                                    <p style="color: #ffffff !important">+91 79 26440532,</p>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-email" style="color: #ffffff !important"></i>
                                    <p style="color: #ffffff !important">info@glsuniversity.ac.in</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- Contact Map -->
    <div class="map-main">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.936257941878!2d72.55693051428256!3d23.026112521975406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84f07cf71307%3A0x804503470ffe80ea!2sGLS%20(Gujarat%20Law%20Society)%20University!5e0!3m2!1sen!2sin!4v1646125836453!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <!-- Our Partner -->
    <!--<div class="our-partner">
            <div class="container">
                <div class="row">
                    <div class="section-title col-12">
                        <h2><span>Our </span>Partners</h2>
                        <p>Description text here...</p>
                    </div>
                </div>
                <div class="row out-partner-logo">
                    <div class="col-lg-2 col-md-4 col-sm-6"><a href="javascript:void(0);"><img src="assets/images/partner-logo-1.png" alt=""></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6"><a href="javascript:void(0);"><img src="assets/images/partner-logo-2.png" alt=""></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6"><a href="javascript:void(0);"><img src="assets/images/partner-logo-3.png" alt=""></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6"><a href="javascript:void(0);"><img src="assets/images/partner-logo-4.png" alt=""></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6"><a href="javascript:void(0);"><img src="assets/images/partner-logo-1.png" alt=""></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6"><a href="javascript:void(0);"><img src="assets/images/partner-logo-5.png" alt=""></a></div>
                </div>
            </div>
        </div>-->

    </section>

    <!-- start footer -->
    <?php
    include './footer.php';
    ?>
    </div>

    <!-- start screpting -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <!-- my js -->
    <script src="assets/js/app.js"></script>
</body>

<!-- Mirrored from thememakker.com/templates/oreo/university/front/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 05:04:44 GMT -->

</html>