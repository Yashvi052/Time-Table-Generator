<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/university/html/events.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 05:01:22 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: GLS University Admin ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar.min.css">
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">
</head>
<body class="theme-blush">
<!-- Page Loader -->
<!--<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/logo.svg" width="48" height="48" alt="Oreo"></div>
        <p>Please wait...</p>        
    </div>
</div>-->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- Top Bar -->
<?php
include './topbar.php';
?>
<!-- Left Sidebar -->
<?php
include './leftsidebar.php';
?>
<!-- Right Sidebar -->

<!-- Chat-launcher -->
<!--<div class="chat-launcher"></div>-->


<!--<section class="content page-calendar">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Calendar
               %
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.php"><i class="zmdi zmdi-home"></i> GLS</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">App</a></li>
                    <li class="breadcrumb-item active">Calendar</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">        
        <div class="row">
            <div class="col-md-12 col-lg-4 col-xl-4">
                <div class="card">
                    <div class="header">
                        <h2><strong>Repeating</strong> Event</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>                        
                    </div>
                    <div class="body">
                        <button type="button" class="btn btn-round btn-block waves-effect mb-4" data-toggle="modal" data-target="#addevent">Add Events</button>
                        <div class="event-name b-lightred row">
                            <div class="col-2 text-center">
                                <h4>09<span>Dec</span><span>2017</span></h4>
                            </div>
                            <div class="col-10">
                                <h6>Repeating Event</h6>
                                <p>It is a long established fact that a reader will be distracted</p>
                                <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                            </div>
                        </div>
                        <div class="event-name b-greensea row">
                            <div class="col-2 text-center">
                                <h4>16<span>Dec</span><span>2017</span></h4>
                            </div>
                            <div class="col-10">
                                <h6>Repeating Event</h6>
                                <p>It is a long established fact that a reader will be distracted</p>
                                <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                            </div>
                        </div>
                        <div class="event-name b-primary row">
                            <div class="col-2 text-center">
                                <h4>11<span>Dec</span><span>2017</span></h4>
                            </div>
                            <div class="col-10">
                                <h6>Conference</h6>
                                <p>It is a long established fact that a reader will be distracted</p>
                                <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Activity</strong></h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>                        
                    </div>
                    <div class="body">                                                    
                        <div class="event-name b-primary row">
                            <div class="col-2 text-center">
                                <h4>13<span>Dec</span><span>2017</span></h4>
                            </div>
                            <div class="col-10">
                                <h6>Birthday</h6>
                                <p>It is a long established fact that a reader will be distracted</p>
                                <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-8 col-xl-8">
                <div class="card">
                    <div class="body">
                        <button class="btn btn-primary btn-sm btn-round waves-effect" id="change-view-today">today</button>
                        <button class="btn btn-default btn-sm btn-simple btn-round waves-effect" id="change-view-day" >Day</button>
                        <button class="btn btn-default btn-sm btn-simple btn-round waves-effect" id="change-view-week">Week</button>
                        <button class="btn btn-default btn-sm btn-simple btn-round waves-effect" id="change-view-month">Month</button>
                        <div id="calendar" class="m-t-15"></div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</section>-->
<!-- Default Size -->
<!--<div class="modal fade" id="addevent" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Add Event</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="form-line">
                        <input type="number" class="form-control" placeholder="Event Date">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" class="form-control" placeholder="Event Title">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <textarea class="form-control no-resize" placeholder="Event Description..."></textarea>
                    </div>
                </div>       
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-round waves-effect">Add</button>
                <button type="button" class="btn btn-simple btn-round waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>-->
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/bundles/fullcalendarscripts.bundle.js"></script><!--/ calender javascripts --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/calendar/calendar.js"></script>
</body>

<!-- Mirrored from thememakker.com/templates/oreo/university/html/events.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 05:01:22 GMT -->
</html>
