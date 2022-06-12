<?php
session_start();
if (!isset($_SESSION['studentid'])) {
    header("location:sign-in.php");
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from thememakker.com/templates/oreo/university/front/teachers.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 05:04:29 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>:: GLS University :: Teachers</title>
    <link rel="icon" href="favicon.ico">
    <!-- start linking -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body>
    <div class="wrapper">
    <?php
        include './main-header.php';
        ?>
        <!-- start hero -->
        <section id="hero">
            <div class="inner-banner" style="background-image:url(assets/images/banner-teachers.jpg)">
                <div class="container">
                    <h3 class="title">Our <br><big>Best <strong> Teachers</strong></big></h3>
                </div>
            </div>
        </section>
        <!-- Content Area -->
        <section class="main-section our-team-page">
            <!-- Our Team -->
            <div class="our-team section-65-100">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="section-title left col-lg-5">
                            <h2><span>Meet </span>Our Teachers</h2>
                            <!--<p>Description text here...</p>-->
                        </div>
                        <!--<div class="section-title right col-lg-7">
                            <p><span class="color-212121">GLS University </span> The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure.</p>
                        </div>-->
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="team-box text-center">
                                <div class="professor-pic"><img src="assets/images/team-member-09.png" alt="Pro. Jack"></div>
                                <div class="team-info">
                                    <h4>Pro. Heta <span>Professor</span></h4>
                                    <ul class="clearfix">
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="team-box text-center">
                                <div class="professor-pic"><img src="assets/images/team-member-01.png" alt="Pro. John"></div>
                                <div class="team-info">
                                    <h4>Pro. Ankit <span>Professor</span></h4>
                                    <ul class="clearfix">
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="team-box text-center">
                                <div class="professor-pic"><img src="assets/images/team-member-02.png" alt="Pro. Amelia"></div>
                                <div class="team-info">
                                    <h4>Pro. Nirav <span>Professor</span></h4>
                                    <ul class="clearfix">
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="team-box text-center">
                                <div class="professor-pic"><img src="assets/images/team-member-06.png" alt="Pro. Charlie"></div>
                                <div class="team-info">
                                    <h4>Pro. Rahil<span>Professor</span></h4>
                                    <ul class="clearfix">
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="team-box text-center">
                                <div class="professor-pic"><img src="assets/images/team-member-07.png" alt="Pro. John"></div>
                                <div class="team-info">
                                    <h4>Pro. Bharti <span>Professor</span></h4>
                                    <ul class="clearfix">
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upcoming Event -->
            <!--<div class="upcoming-event inner-event xl-darkblack section-65-100">
            <div class="container">
                <div class="row">
                    <div class="section-title col-12">
                        <h2><span>About </span> Our Staf</h2>
                        <p>Description text here...</p>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-6 col-md-12">
                        <div class="common-cnt">
                            <div class="section-top">
                                <p>Lorem Ipsum is simply<br> dummy text of the printing</p>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout. The point of using Lorem
                                Ipsum is that it has a more-or-less normal etters, as opposed
                                to using 'Content here, content here English.
                            </p>
                            <div class="staf-info m-b-10">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <span class="counter timer" data-from="0" data-to="652" data-speed="2500" data-fresh-interval="700">152</span>
                                        <p>CERTIFIED TEACHERS</p>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <span class="counter timer" data-from="0" data-to="7652" data-speed="2500" data-fresh-interval="700">7652</span>
                                        <p>CLASSES COMPLETE</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="box-img box-shadow img_hover_effect">
                            <img src="assets/images/our-staf-img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

            <!-- Our Team -->
            <!--<div class="our-team">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="team-box text-center">
                                <div class="professor-pic"><img src="assets/images/team-member-09.png" alt="Pro. John"></div>
                                <div class="team-info">
                                    <h4>Pro. John <span>Dentist</span></h4>
                                    <ul class="clearfix">
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="team-box text-center">
                                <div class="professor-pic"><img src="assets/images/team-member-10.png" alt="Pro. Amelia"></div>
                                <div class="team-info">
                                    <h4>Pro. Amelia <span>Gynecologist</span></h4>
                                    <ul class="clearfix">
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="team-box text-center">
                                <div class="professor-pic"><img src="assets/images/team-member-11.png" alt="Pro. Jack"></div>
                                <div class="team-info">
                                    <h4>Pro. Jack <span>Audiology</span></h4>
                                    <ul class="clearfix">
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-google-plus"></i></a></li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="team-box text-center">
                                <div class="professor-pic"><img src="assets/images/team-member-12.png" alt="Pro. Charlie"></div>
                                <div class="team-info">
                                    <h4>Pro. Charlie<span>Dentist</span></h4>
                                    <ul class="clearfix">
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
        </section>

        <!-- start footer -->
        <?php
        include './footer.php';
        ?>
        <!--<footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form clearfix">
                        <div class="float-left">
                            <h4 class="m-t-0 m-b-0">Subscribe our Newsletter</h4>
                        </div>
                        <div class="float-right clearfix">
                            <div class="form-group m-b-0 float-left">
                                <input type="text" value="" placeholder="Enter your Email for Subscribe" class="form-control">
                            </div>
                            <div class="float-left">
                                <button class="btn btn-primary btn-round btn-block margin-0">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="fcard about">
                        <h5 class="title">About University</h5>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.</p>
                        <div class="social">
                            <a href="javascript:void(0);"><i class="zmdi zmdi-facebook m-r-10"></i></a>
                            <a href="javascript:void(0);"><i class="zmdi zmdi-twitter m-r-10"></i></a>
                            <a href="javascript:void(0);"><i class="zmdi zmdi-instagram m-r-10"></i></a>
                            <a href="javascript:void(0);"><i class="zmdi zmdi-linkedin-box m-r-10"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="fcard links">
                        <h5 class="title">Usefull Links</h5>
                        <div class="row">
                            <div class="col-6">
                                <ul class="list-unstyled">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="teachers.html">Teacher</a></li>
                                    <li><a href="event.html">Events</a></li>
                                    <li><a href="galary.html">Gallery</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="list-unstyled">
                                    <li><a href="javascript:void(0);">Documentation</a></li>
                                    <li><a href="javascript:void(0);">Forums</a></li>
                                    <li><a href="javascript:void(0);">Language Packs</a></li>
                                    <li><a href="javascript:void(0);">Release Status</a></li>
                                    <li><a href="javascript:void(0);">Forums</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="fcard contact links">
                        <h5 class="title">Contact Details</h5>
                        <ul class="list-unstyled">
                            <li><i class="zmdi zmdi-pin"></i>Park Drive, Varick Str NY 10012, USA</li>
                            <li><i class="zmdi zmdi-email"></i>Getwell@university.com</li>
                            <li><i class="zmdi zmdi-phone"></i>(123) 0200 12345 & 7890</li>
                            <li><i class="zmdi zmdi-time"></i>Mon-Friday: 9:30 to 17:30</li>
                            <li><i class="zmdi zmdi-time"></i>Sat-Sunday: 10:00 to 15:30</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <small>Copyright &copy; 2018 Oreo Theme by <a href="http://thememakker.com/" target="_blank">ThemeMakker</a>
                        </small>
                    </div>
                    <div class="col-lg-6 col-md-6 text-right">
                        <div class="up"><a href="#header"><i class="zmdi zmdi-caret-up-circle"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>-->
    </div>
    <!-- start screpting -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <!-- my js -->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/countTo.js"></script>
</body>

<!-- Mirrored from thememakker.com/templates/oreo/university/front/teachers.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 05:04:31 GMT -->

</html>