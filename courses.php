<?php
session_start();
if (!isset($_SESSION['studentid'])) {
    header("location:sign-in.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/university/front/courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 05:04:26 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>:: GLS University :: Courses</title>
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
            <div class="inner-banner" style="background-image:url(assets/images/banner-courses.jpg)">
                <div class="container">
                    <h3 class="title">GLS <br><big>Our <strong>Courses</strong></big></h3>
                </div>
            </div>
        </section>

        <!-- Content Area -->
        <section class="main-section">
            <!-- Departments List -->
            <div class="our-best-courses best-courses-list section-70">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="courses-box">
                                <div class="courses-img img_hover_effect"><img src="assets/images/courses-img-1.jpg" alt="Magento Programmer"></div>
                                <div class="courses-cnt">
                                    <div class="courses-name">BCA</div>
                                    <ul class="list-unstyled">
                                        <li>
                                            <label>Fees:</label>
                                            <span>25000/-</span>
                                        </li>
                                        <!--<li>
                                        <label>Prof.:</label>
                                        <span>Chris Fox</span>
                                    </li>-->
                                        <li>
                                            <label>Time:</label>
                                            <span>3 Years</span>
                                        </li>
                                        <!--<li>
                                        <label>Students:</label>
                                        <span>65</span>
                                    </li>-->
                                    </ul>
                                    <!--<a class="btn btn-simple btn-round displayblock" href="javascript:void(0);">View More</a>-->
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="courses-box">
                                <div class="courses-img img_hover_effect"><img src="assets/images/courses-img-2.jpg" alt="Magento Programmer"></div>
                                <div class="courses-cnt">
                                    <div class="courses-name">MCA</div>
                                    <ul class="list-unstyled">
                                        <li>
                                            <label>Fees:</label>
                                            <span>50000/-</span>
                                        </li>
                                        <!--<li>
                                        <label>Prof.:</label>
                                        <span>Chris Fox</span>
                                    </li>-->
                                        <li>
                                            <label>Time:</label>
                                            <span>2 Years</span>
                                        </li>
                                        <!--<li>
                                        <label>Students:</label>
                                        <span>65</span>
                                    </li>-->
                                    </ul>
                                    <!--<a class="btn btn-simple btn-round displayblock" href="javascript:void(0);">View More</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="courses-box">
                                <div class="courses-img img_hover_effect"><img src="assets/images/courses-img-3.jpg" alt="Magento Programmer"></div>
                                <div class="courses-cnt">
                                    <div class="courses-name">BSCIT</div>
                                    <ul class="list-unstyled">
                                        <li>
                                            <label>Fees:</label>
                                            <span>25000/-</span>
                                        </li>
                                        <!--<li>
                                        <label>Prof.:</label>
                                        <span>Chris Fox</span>
                                    </li>-->
                                        <li>
                                            <label>Time:</label>
                                            <span>3 Years</span>
                                        </li>
                                        <!--<li>
                                        <label>Students:</label>
                                        <span>65</span>
                                    </li>-->
                                    </ul>
                                    <!--<a class="btn btn-simple btn-round displayblock" href="javascript:void(0);">View More</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="courses-box">
                                <div class="courses-img img_hover_effect"><img src="assets/images/courses-img-4.jpg" alt="Magento Programmer"></div>
                                <div class="courses-cnt">
                                    <div class="courses-name">MSCIT</div>
                                    <ul class="list-unstyled">
                                        <li>
                                            <label>Fees:</label>
                                            <span>50000/-</span>
                                        </li>
                                        <!--<li>
                                        <label>Prof.:</label>
                                        <span>Chris Fox</span>
                                    </li>-->
                                        <li>
                                            <label>Time:</label>
                                            <span>2 Years</span>
                                        </li>
                                        <!--<li>
                                        <label>Students:</label>
                                        <span>65</span>
                                    </li>-->
                                    </ul>
                                    <!--<a class="btn btn-simple btn-round displayblock" href="javascript:void(0);">View More</a>-->
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="courses-box">
                                <div class="courses-img img_hover_effect"><img src="assets/images/courses-img-5.jpg" alt="Magento Programmer"></div>
                                <div class="courses-cnt">
                                    <div class="courses-name">BCOM</div>
                                    <ul class="list-unstyled">
                                        <li>
                                            <label>Fees:</label>
                                            <span>25000/-</span>
                                        </li>
                                        <!--<li>
                                        <label>Prof.:</label>
                                        <span>Chris Fox</span>
                                    </li>-->
                                        <li>
                                            <label>Time:</label>
                                            <span>3 Years</span>
                                        </li>
                                        <!--<li>
                                        <label>Students:</label>
                                        <span>65</span>
                                    </li>-->
                                    </ul>
                                    <!--<a class="btn btn-simple btn-round displayblock" href="javascript:void(0);">View More</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="courses-box">
                                <div class="courses-img img_hover_effect"><img src="assets/images/courses-img-7.jpg" alt="Magento Programmer"></div>
                                <div class="courses-cnt">
                                    <div class="courses-name">MCOM</div>
                                    <ul class="list-unstyled">
                                        <li>
                                            <label>Fees:</label>
                                            <span>50000/-</span>
                                        </li>
                                        <!--<li>
                                        <label>Prof.:</label>
                                        <span>Chris Fox</span>
                                    </li>-->
                                        <li>
                                            <label>Time:</label>
                                            <span>2 Years</span>
                                        </li>
                                        <!--<li>
                                        <label>Students:</label>
                                        <span>65</span>
                                    </li>-->
                                    </ul>
                                    <!--<a class="btn btn-simple btn-round displayblock" href="javascript:void(0);">View More</a>-->
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
                        <h2><span>New </span>Course Start</h2>
                        <p>Description text here...</p>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-6 col-md-12">
                        <div class="common-cnt">
                            <div class="section-top">
                                <p>Magento<br>Programmer Course</p>
                            </div>
                            <p class="date"><span>Last Date: </span> 29-APRIL-2018</p>
                            <p class="address">Lorem Ipsum is simply dummy text of the printing and typesettig industry.</p>
                            <ul class="list-unstyled courses-detail clearfix">
                                <li>
                                    <label>Fees:</label>
                                    <span>$300.00</span>
                                </li>
                                <li>
                                    <label>Time:</label>
                                    <span>3months</span>
                                </li>
                                <li>
                                    <label>Prof.:</label>
                                    <span>Joge Lucky</span>
                                </li>
                                <li>
                                    <label>Students:</label>
                                    <span>78</span>
                                </li>
                            </ul>
                            <p><a class="btn btn-primary btn-lg btn-round">Register Now</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="box-img box-shadow img_hover_effect">
                            <img src="assets/images/new-course.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

            <!-- Blog -->
            <!--<div class="home-blog">
            <div class="container">
                <div class="row">
                    <div class="section-title col-12">
                        <h2><span>Latest </span>From Blog</h2>
                        <p>Description text here...</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-box">
                            <div class="blog-img img_hover_effect">
                                <img src="assets/images/blog-1.png" alt="">
                            </div>
                            <div class="blog-cnt">
                                <h5><a href="javascript:void(0);">How to handle your kids’ from Lorem ipsum dolor sit amet</a></h5>
                                <p>The great explorer of the truth, master builder of human happiness one rejects,dislikes[...]</p>
                            </div>
                            <div class="blog-info">
                                <span class="blog-date"><i class="zmdi zmdi-calendar"></i> 02 Feb 2018</span>
                                <span class="blog-comment"><i class="zmdi zmdi-comments"></i> Comment ( 25 )</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-box">
                            <div class="blog-img img_hover_effect">
                                <img src="assets/images/blog-2.png" alt="">
                            </div>
                            <div class="blog-cnt">
                                <h5><a href="javascript:void(0);">How to handle your kids’ from Lorem ipsum dolor sit amet</a></h5>
                                <p>The great explorer of the truth, master builder of human happiness one rejects, dislikes[...]</p>
                            </div>
                            <div class="blog-info">
                                <span class="blog-date"><i class="zmdi zmdi-calendar"></i> 02 Feb 2018</span>
                                <span class="blog-comment"><i class="zmdi zmdi-comments"></i> Comment ( 25 )</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 hidden-md-down">
                        <div class="blog-box">
                            <div class="blog-img img_hover_effect">
                                <img src="assets/images/blog-3.png" alt="">
                            </div>
                            <div class="blog-cnt">
                                <h5><a href="javascript:void(0);">How to handle your kids’ from Lorem ipsum dolor sit amet</a></h5>
                                <p>The great explorer of the truth, master builder of human happiness one rejects,dislikes[...]</p>
                            </div>
                            <div class="blog-info">
                                <span class="blog-date"><i class="zmdi zmdi-calendar"></i> 02 Feb 2018</span>
                                <span class="blog-comment"><i class="zmdi zmdi-comments"></i> Comment ( 25 )</span>
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
    </div>

    <!-- start screpting -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <!-- my js -->
    <script src="assets/js/app.js"></script>
</body>

<!-- Mirrored from thememakker.com/templates/oreo/university/front/courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 05:04:27 GMT -->

</html>