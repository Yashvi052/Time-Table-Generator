<?php
session_start();
if (!isset($_SESSION['studentid'])) {
    header("location:sign-in.php");
}
?>
<!doctype html>
<html class="no-js " lang="en">


<!-- Mirrored from thememakker.com/templates/oreo/university/front/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 05:04:28 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>:: GLS University :: Events</title>
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
            <div class="inner-banner" style="background-image:url(assets/images/banner-event.jpg)">
                <div class="container">
                    <h3 class="title">Layout<br><big><strong>Event</strong></big></h3>
                </div>
            </div>
        </section>

        <!-- Content Area -->
        <section class="main-section">
            <!-- Event -->
            <div class="event-section section-65-50">
                <div class="container">
                    <div class="row clearfix">
                        <ul class="list-unstyled event-list col-12">
                            <li class="event-box">
                                <div class="event-img">
                                    <img src="assets/images/event-01.jpg" alt="">
                                </div>
                                <div class="event-dep">
                                    <ul class="list-unstyled clearfix event-time-date">
                                        <li class="float-left"><i class="zmdi zmdi-time"></i> <span>9.00 am - 5.00 pm</span></li>
                                        <li class="float-left"><i class="zmdi zmdi-pin"></i> <span>Bosundhora city </span></li>
                                        <li class="float-left"><i class="zmdi zmdi-calendar"></i> <span>07 Oct, 2017</span></li>
                                    </ul>
                                    <h2 class="event-name">Lorem ipsusicing elit,Duis aute irure dolor in repre Ibiend archi.</h2>
                                    <p>Lorem ipsum labore et dolore magna aliqua. Ut enim ad minim venexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat [...]</p>
                                    
                                </div>
                            </li>
                            <li class="event-box">
                                <div class="event-img">
                                    <img src="assets/images/event-02.jpg" alt="">
                                </div>
                                <div class="event-dep">
                                    <ul class="list-unstyled clearfix event-time-date">
                                        <li class="float-left"><i class="zmdi zmdi-time"></i> <span>9.00 am - 5.00 pm</span></li>
                                        <li class="float-left"><i class="zmdi zmdi-pin"></i> <span>Bosundhora city </span></li>
                                        <li class="float-left"><i class="zmdi zmdi-calendar"></i> <span>07 Oct, 2017</span></li>
                                    </ul>
                                    <h2 class="event-name">Lorem ipsusicing elit,Duis aute irure dolor in repre Ibiend archi.</h2>
                                    <p>Lorem ipsum labore et dolore magna aliqua. Ut enim ad minim venexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat [...]</p>
                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- FAQs -->
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

<!-- Mirrored from thememakker.com/templates/oreo/university/front/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 05:04:28 GMT -->

</html>