<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/university/html/courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 05:01:29 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: GLS University Admin ::</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
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
<!--<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat"><i class="zmdi zmdi-comments"></i></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity">Activity</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane slideRight active" id="setting">
            <div class="slim_scroll">                                
                <div class="card">
                    <h6>Skins</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple">
                            <div class="purple"></div>
                        </li>                   
                        <li data-theme="blue">
                            <div class="blue"></div>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>                    
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                        </li>
                        <li data-theme="blush" class="active">
                            <div class="blush"></div>                    
                        </li>
                    </ul>                    
                </div>
                <div class="card theme-light-dark">
                    <h6>Left Menu</h6>
                    <button class="t-light btn btn-default btn-simple btn-round">Light Menu</button>
                    <button class="t-dark btn btn-default btn-round">Dark Menu</button>
                    <button class="m_img_btn btn btn-primary btn-round btn-block">Sidebar Image</button>                    
                </div>
                <div class="card">
                    <h6>General Settings</h6>
                    <ul class="setting-list list-unstyled">
                        <li>
                            <div class="checkbox">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">Report Panel Usage</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox2" type="checkbox" checked="">
                                <label for="checkbox2">Email Redirect</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox3" type="checkbox" checked="">
                                <label for="checkbox3">Notifications</label>
                            </div>                        
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox4" type="checkbox" checked="">
                                <label for="checkbox4">Auto Updates</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox5" type="checkbox" checked="">
                                <label for="checkbox5">Offline</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <h6>Information Summary</h6>
                    <div class="row m-b-20">
                        <div class="col-7">                            
                            <small class="displayblock">MEMORY USAGE</small>
                            <h5 class="m-b-0 h6">512</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#00ced1">8,7,9,5,6,4,6,8</div>
                        </div>
                    </div>
                    <div class="row m-b-20">
                        <div class="col-7">                            
                            <small class="displayblock">CPU USAGE</small>
                            <h5 class="m-b-0 h6">90%</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#F15F79">6,5,8,2,6,4,6,4</div>
                        </div>
                    </div>
                    <div class="row m-b-20">
                        <div class="col-7">                            
                            <small class="displayblock">DAILY TRAFFIC</small>
                            <h5 class="m-b-0 h6">25 142</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#78b83e">7,5,8,7,4,2,6,5</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7">                            
                            <small class="displayblock">DISK USAGE</small>
                            <h5 class="m-b-0 h6">60.10%</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#457fca">7,5,2,5,6,7,6,4</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
        <div class="tab-pane right_chat stretchLeft" id="chat">
            <div class="slim_scroll">
                <div class="card">
                    <div class="search">                        
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h6>Recent</h6>
                    <ul class="list-unstyled">
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Sophia</span>
                                        <span class="message">There are many variations of passages of Lorem Ipsum available</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Grayson</span>
                                        <span class="message">All the Lorem Ipsum generators on the</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Isabella</span>
                                        <span class="message">Contrary to popular belief, Lorem Ipsum</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="me">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">John</span>
                                        <span class="message">It is a long established fact that a reader</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Alexander</span>
                                        <span class="message">Richard McClintock, a Latin professor</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>                        
                    </ul>
                </div>
                <div class="card">
                    <h6>Contacts</h6>
                    <ul class="list-unstyled">
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar10.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar6.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar7.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar8.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar9.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-pane slideLeft" id="activity">
            <div class="slim_scroll">
                <div class="card user_activity">
                    <h6>Recent Activity</h6>
                    <div class="streamline b-accent">
                        <div class="sl-item">
                            <img class="user rounded-circle" src="assets/images/xs/avatar4.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">Admin Birthday</h5>
                                <small>Jan 21 <a href="javascript:void(0);" class="text-info">Sophia</a>.</small>
                            </div>
                        </div>
                        <div class="sl-item">
                            <img class="user rounded-circle" src="assets/images/xs/avatar5.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">Add New Contact</h5>
                                <small>30min ago <a href="javascript:void(0);">Alexander</a>.</small>
                                <small><strong>P:</strong> +264-625-2323</small>
                                <small><strong>E:</strong> maryamamiri@gmail.com</small>
                            </div>
                        </div>
                        <div class="sl-item">
                            <img class="user rounded-circle" src="assets/images/xs/avatar6.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">Code Change</h5>
                                <small>Today <a href="javascript:void(0);">Grayson</a>.</small>
                                <small>The standard chunk of Lorem Ipsum used since the 1500s is reproduced</small>
                            </div>
                        </div>
                        <div class="sl-item">
                            <img class="user rounded-circle" src="assets/images/xs/avatar7.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">New Email</h5>
                                <small>45min ago <a href="javascript:void(0);" class="text-info">Fidel Tonn</a>.</small>
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="card">
                    <h6>Recent Attachments</h6>
                    <ul class="list-unstyled activity">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-collection-pdf l-blush"></i>                    
                                <div class="info">
                                    <h4>info_258.pdf</h4>                    
                                    <small>2MB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-collection-text l-amber"></i>                    
                                <div class="info">
                                    <h4>newdoc_214.doc</h4>                    
                                    <small>900KB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-image l-parpl"></i>                    
                                <div class="info">
                                    <h4>MG_4145.jpg</h4>                    
                                    <small>5.6MB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-image l-parpl"></i>                    
                                <div class="info">
                                    <h4>MG_4100.jpg</h4>                    
                                    <small>5MB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-collection-text l-amber"></i>                    
                                <div class="info">
                                    <h4>Reports_end.doc</h4>                    
                                    <small>780KB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-videocam l-turquoise"></i>                    
                                <div class="info">
                                    <h4>movie2018.MKV</h4>                    
                                    <small>750MB</small>
                                </div>
                            </a>
                        </li>                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>-->
<!-- Chat-launcher -->
<!--<div class="chat-launcher"></div>-->
<!--<div class="chat-wrapper">
    <div class="card">
        <div class="header">
            <ul class="list-unstyled team-info margin-0">
                <li class="m-r-15"><h2>Pro. Team</h2></li>
                <li>
                    <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                </li>
                <li>
                    <img src="assets/images/xs/avatar3.jpg" alt="Avatar">
                </li>
                <li>
                    <img src="assets/images/xs/avatar4.jpg" alt="Avatar">
                </li>
                <li>
                    <img src="assets/images/xs/avatar6.jpg" alt="Avatar">
                </li>
                <li>
                    <a href="javascript:void(0);" title="Add Member"><i class="zmdi zmdi-plus-circle"></i></a>
                </li>
            </ul>                       
        </div>
        <div class="body">
            <div class="chat-widget">
            <ul class="chat-scroll-list clearfix">
                <li class="left float-left">
                    <img src="assets/images/xs/avatar3.jpg" class="rounded-circle" alt="">
                    <div class="chat-info">
                        <a class="name" href="javascript:void(0);">Alexander</a>
                        <span class="datetime">6:12</span>                            
                        <span class="message">Hello, John </span>
                    </div>
                </li>
                <li class="right">
                    <div class="chat-info"><span class="datetime">6:15</span> <span class="message">Hi, Alexander<br> How are you!</span> </div>
                </li>
                <li class="right">
                    <div class="chat-info"><span class="datetime">6:16</span> <span class="message">There are many variations of passages of Lorem Ipsum available</span> </div>
                </li>
                <li class="left float-left"> <img src="assets/images/xs/avatar2.jpg" class="rounded-circle" alt="">
                    <div class="chat-info"> <a class="name" href="javascript:void(0);">Elizabeth</a> <span class="datetime">6:25</span> <span class="message">Hi, Alexander,<br> John <br> What are you doing?</span> </div>
                </li>
                <li class="left float-left"> <img src="assets/images/xs/avatar1.jpg" class="rounded-circle" alt="">
                    <div class="chat-info"> <a class="name" href="javascript:void(0);">Michael</a> <span class="datetime">6:28</span> <span class="message">I would love to join the team.</span> </div>
                </li>
                    <li class="right">
                    <div class="chat-info"><span class="datetime">7:02</span> <span class="message">Hello, <br>Michael</span> </div>
                </li>
            </ul>
            </div>
            <div class="input-group p-t-15">
                <input type="text" class="form-control" placeholder="Enter text here...">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-mail-send"></i>
                </span>
            </div>
        </div>
    </div>
</div>-->

<!-- Main Content -->
<!--<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>All Courses
                
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-white btn-icon btn-round float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.php"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Courses</a></li>
                    <li class="breadcrumb-item active">All</li>
                </ul>                
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="body">
                        <img src="assets/images/image1.jpg" alt=""  class="img-fluid rounded m-b-20">
                        <h6>Magento Programmer Course</h6>
                        <div class="table-responsive">
                            <table class="table table-hover m-t-20">
                                <tbody>
                                    <tr>
                                        <td>Year</td>
                                        <td>MCA Sem2</td>
                                    </tr>
                                    <tr>
                                        <td>Fees</td>
                                        <td><strong class="col-blush">$315.60</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Prof NAME</td>
                                        <td><strong>Will Smith</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Students</td>
                                        <td><strong class="col-green">115</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="courses-info.php" class="btn btn-block btn-raised btn-default btn-simple btn-round waves-effect" role="button">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="body">
                        <img src="assets/images/image2.jpg" alt=""  class="img-fluid rounded m-b-20">
                        <h6>Angular Programmer Course</h6>
                        <div class="table-responsive">
                            <table class="table table-hover m-t-20">
                                <tbody>
                                    <tr>
                                        <td>Year</td>
                                        <td>MCA Sem5</td>
                                    </tr>
                                    <tr>
                                        <td>Fees</td>
                                        <td><strong class="col-blush">$458.60</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Prof NAME</td>
                                        <td><strong>Gary Camara</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Students</td>
                                        <td><strong class="col-green">49</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="courses-info.php" class="btn btn-block btn-raised btn-default btn-simple btn-round waves-effect" role="button">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="body">
                        <img src="assets/images/image3.jpg" alt=""  class="img-fluid rounded m-b-20">
                        <h6>Account Management Course</h6>
                        <div class="table-responsive">
                            <table class="table table-hover m-t-20">
                                <tbody>
                                    <tr>
                                        <td>Year</td>
                                        <td>MBA Sem2</td>
                                    </tr>
                                    <tr>
                                        <td>Fees</td>
                                        <td><strong class="col-blush">$278.60</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Prof NAME</td>
                                        <td><strong>Frank Camly</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Students</td>
                                        <td><strong class="col-green">80</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="courses-info.php class="btn btn-block btn-raised btn-default btn-simple btn-round waves-effect" role="button">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="body">
                        <img src="assets/images/image4.jpg" alt=""  class="img-fluid rounded m-b-20">
                        <h6>UI UX Design Course</h6>
                        <div class="table-responsive">
                            <table class="table table-hover m-t-20">
                                <tbody>
                                    <tr>
                                        <td>Year</td>
                                        <td>BCA Sem2</td>
                                    </tr>
                                    <tr>
                                        <td>Fees</td>
                                        <td><strong class="col-blush">$105.60</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Prof NAME</td>
                                        <td><strong>Hossein Shams</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Students</td>
                                        <td><strong class="col-green">60</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="courses-info.php" class="btn btn-block btn-raised btn-default btn-simple btn-round waves-effect" role="button">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="body">
                        <img src="assets/images/image5.jpg" alt=""  class="img-fluid rounded m-b-20">
                        <h6>Angular Programmer Course</h6>
                        <div class="table-responsive">
                            <table class="table table-hover m-t-20">
                                <tbody>
                                    <tr>
                                        <td>Year</td>
                                        <td>MCA Sem5</td>
                                    </tr>
                                    <tr>
                                        <td>Fees</td>
                                        <td><strong class="col-blush">$458.60</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Prof NAME</td>
                                        <td><strong>Maryam Amiri</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Students</td>
                                        <td><strong class="col-green">71</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="courses-info.php" class="btn btn-block btn-raised btn-default btn-simple btn-round waves-effect" role="button">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="body">
                        <img src="assets/images/image6.jpg" alt=""  class="img-fluid rounded m-b-20">
                        <h6>Account Management Course</h6>
                        <div class="table-responsive">
                            <table class="table table-hover m-t-20">
                                <tbody>
                                    <tr>
                                        <td>Year</td>
                                        <td>MBA Sem2</td>
                                    </tr>
                                    <tr>
                                        <td>Fees</td>
                                        <td><strong class="col-blush">$278.60</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Prof NAME</td>
                                        <td><strong>Fidel Tonn</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Students</td>
                                        <td><strong class="col-green">80</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="courses-info.php" class="btn btn-block btn-raised btn-default btn-simple btn-round waves-effect" role="button">Read more</a>
                    </div>
                </div>
            </div>            
            <div class="col-sm-12 text-center">
                <a href="javascript:void(0);" class="btn btn-raised waves-effect btn-round btn-primary" role="button">Load more</a>
            </div>
        </div>
    </div>
</section>-->
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-5 col-sm-12">
                <h2>Courses
                
                </h2>
            </div>
            <div class="col-lg-5 col-md-7 col-sm-12">                
                <!--<button class="btn btn-white btn-icon btn-round float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>-->
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.php"><i class="zmdi zmdi-home"></i> GLS</a></li>
                    <li class="breadcrumb-item"><a href="courses.php">Courses</a></li>
                    <li class="breadcrumb-item active">All</li>
                </ul>                
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">                
                <div class="card">
                    <div class="header">
                        <h2><strong>All</strong> Courses List</h2>
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
                    <div class="body table-responsive">
                        <table class='table table-hover m-b-0'>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>                            
                            <tbody>
                            <?php
                                    
                                    $connection = mysqli_connect("localhost", "root", "", "student_automated_timetable_generator");
                                    
                                    //Delete Start
                                    if(isset($_GET['did'])){
                                        $q =  mysqli_query($connection, "delete from tbl_subject where subject_id='{$_GET['did']}'") or die(mysqli_error($connection));
                                            if($q){
                                                echo "<script>alert('Record Deleted');</script>";
                                            }
                                    }
                                    
                                    //Delete End
                                    
                                    $q = mysqli_query($connection, "select * from tbl_subject") or die(mysqli_error($connection));
                                    
                                    $count = mysqli_num_rows($q);
                                    
                                    echo "$count Records Found";
                                    
                                    
                                    while($data = mysqli_fetch_array($q)){
                                        echo "<tr>";
                                        echo "<td>{$data['subject_id']}</td>";
                                        echo "<td>{$data['subject_name']}</td>";                                        
                                        echo "<td><a href='courses-edit.php?eid={$data['subject_id']}'>Edit</a> | <a href='courses-list.php?did={$data['subject_id']}'>Delete</a></td>";
                                        echo "</tr>";
                                                                                                                        
                                    }
                                    ?>    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script>
</body>

<!-- Mirrored from thememakker.com/templates/oreo/university/html/courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 05:01:31 GMT -->
</html>

