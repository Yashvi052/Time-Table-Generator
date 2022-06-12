<?php
session_start();
if (!isset($_SESSION['studentid'])) {
    header("location:sign-in.php");
}



?>
<!doctype html>
<html class="no-js " lang="en">


<!-- Mirrored from thememakker.com/templates/oreo/university/front/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 05:04:15 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>:: GLS University :: Home</title>
    <link rel="icon" href="favicon.ico"> <!-- start linking -->
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
            <div class="slider" style="background-image:url(assets/images/slider1.jpg)">
                <div class="container">
                    <div class="slider_text">
                        <h3 class="title"><span>Welcome to</span> <br> GLS <strong>University</strong></h3>
                        <!--<p class="sub-title">Contrary to popular belief, Lorem Ipsum is not simply random text.</p><br>
                            <button class="btn btn-primary btn-round">View More</button>-->
                    </div>
                    <!--<div class="slider_form">
                            <div class="row">
                                <p class="col-12">Choose Your Course</p>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group"> <input type="text" value="" placeholder="Enter Name" class="form-control m-b-15">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-6">
                                    <div class="form-group"> <input type="text" value="" placeholder="Enter Email" class="form-control m-b-15">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-6">
                                    <div class="form-group"> <input type="text" value="" placeholder="Enter Phone" class="form-control m-b-15">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-6">
                                    <select class="form-control m-b-15">
                                        <option selected="selected">Choose Faculty</option>
                                        <option>Marc Parcival</option>
                                        <option>Alen Bailey</option>
                                        <option>Basil Andrew</option>
                                        <option>Giles Franklin</option>
                                        <option>Edgar Denzil</option>
                                        <option>Garfield Feris</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6 col-6">
                                    <div class="form-group">
                                        <input type="text" value="" placeholder="Date Of Birth" class="form-control m-b-15">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <button class="btn btn-primary btn-round btn-block m-t-0 m-b-0">Submit</button>
                                </div>
                            </div>
                        </div>-->
                </div>
            </div>
        </section>




        <!-- Home Our Team -->
        <div class="our-team">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="section-title left col-lg-5">
                        <h2><span>Meet </span>Our Team</h2>
                        <!--<p>Description text here...</p>-->
                    </div>
                    <!--<div class="section-title right col-lg-7">
                                <p><span class="color-212121">GLS University </span> The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure.</p>
                            </div>-->
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="team-box text-center">
                            <div class="professor-pic"><img src="assets/images/Bhavya.jpg" alt="Bhavya"></div>
                            <div class="team-info">
                                <h4>Bhavya <span>Student</span></h4>
                                <ul class="clearfix">
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                </ul>
                                <!--<a class="btn btn-simple btn-primary btn-round" href="teacher-detail.php">View More</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="team-box text-center">
                            <div class="professor-pic"><img src="assets/images/Yashvi.png" alt="Yashvi"></div>
                            <div class="team-info">
                                <h4>Yashvi <span>Student</span></h4>
                                <ul class="clearfix">
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                </ul>
                                <!--<a class="btn btn-simple btn-primary btn-round" href="javascript:void(0);">View More</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="team-box text-center">
                            <div class="professor-pic"><img src="assets/images/Nisarg.jpeg" alt="Nisarg"></div>
                            <div class="team-info">
                                <h4>Nisarg <span>Student</span></h4>
                                <ul class="clearfix">
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                </ul>
                                <!--<a class="btn btn-simple btn-primary btn-round" href="javascript:void(0);">View More</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- start footer -->
        <?php
        include './footer.php';
        ?>

    </div>

    <!-- start screpting -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <!-- my js -->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/countTo.js"></script>
</body>

<!-- Mirrored from thememakker.com/templates/oreo/university/front/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 05:04:22 GMT -->

</html>