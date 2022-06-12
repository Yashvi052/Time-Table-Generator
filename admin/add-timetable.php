<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/university/html/add-courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 05:01:31 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: GLS University Admin ::</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Dropzone Css -->
    <link href="assets/plugins/dropzone/dropzone.css" rel="stylesheet">
    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
    <!-- Wait Me Css -->
    <link href="assets/plugins/waitme/waitMe.css" rel="stylesheet" />
    <!-- Bootstrap Select Css -->
    <link href="assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
    <style>
        .form-group .bootstrap-select.btn-group {
            margin-bottom: 9px;
        }

        .bootstrap-select.btn-group:not(.input-group-btn),
        .bootstrap-select.btn-group[class*="col-"] {
            margin-left: -22px;
        }
    </style>


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

    <?php
    $connection = mysqli_connect("localhost", "root", "", "student_automated_timetable_generator");
    if ($_POST) {
        $weekday = $_POST['week_day'];
        $departmentid = $_POST['timetable_department_id'];
        $starttime = $_POST['start_time'];
        $endtime = $_POST['end_time'];
        $semid = $_POST['sem_id'];
        $divid = $_POST['division_id'];
        $subjectid = $_POST['subject_id'];
        $subject = $_POST['subject'];
        $faculty_id = $_POST['faculty_id'];

        $q = mysqli_query($connection, "insert into tbl_timetable (week_day, timetable_department_id, start_time, end_time, semester_id, division_id, subject_id, subject, faculty_id) "
            . "values('{$weekday}','{$departmentid}','{$starttime}','{$endtime}','{$semid}','{$divid}','{$subjectid}','{$subject}','{$faculty_id}')")
            or die(mysqli_error($connection));

        if ($q) {
            echo "<script>alert('Record Added');</script>";
        }
    }
    ?>

    <!-- Main Content -->
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Add Time-Table

                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <!--<button class="btn btn-white btn-icon btn-round float-right m-l-10" type="button">
                        <i class="zmdi zmdi-plus"></i>
                    </button>-->
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="index.php"><i class="zmdi zmdi-home"></i> GLS</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Courses</a></li>
                        <li class="breadcrumb-item active">Add</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Timetable </strong> Information </h2>
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
                        <form method="post" id="myform">
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label>Week Day</label>
                                        <div class="form-group">
                                            <select class="form-control" name="week_day">
                                                <option value="Monday">Monday</option>
                                                <option value="Tuesday">Tuesday</option>
                                                <option value="Wednesday">Wednesday</option>
                                                <option value="Thursday">Thursday</option>
                                                <option value="Friday">Friday</option>
                                                <option value="Saturday">Saturday</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <label>Start Time</label>
                                        <div class="form-group">
                                            <input type="text" name="start_time" class="datetimepicker form-control" placeholder="Starts From" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <label>End Time</label>
                                        <div class="form-group">
                                            <input type="text" name="end_time" class="datetimepicker form-control" placeholder="Ends From" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <label>Department</label>
                                        <div class="form-group">
                                            <?php
                                            $q = mysqli_query($connection, "select * from tbl_department") or die(mysqli_error($connection));
                                            echo "<select name='timetable_department_id' class='form-control'>";
                                            while ($row1 = mysqli_fetch_array($q)) {
                                                if ($row1['department_id'] == $row['department_id']) {
                                                    $selected = "selected";
                                                } else {
                                                    $selected = "";
                                                }
                                                echo "<option value='{$row1['department_id']}' {$selected}>{$row1['department_name']}</option>";
                                            }
                                            echo "</select>";
                                            ?>
                                        </div>
                                    </div>
             
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <label>Semester</label>
                                        <div class="form-group">
                                            <?php
                                            $q = mysqli_query($connection, "select * from tbl_semester") or die(mysqli_error($connection));
                                            echo "<select name='sem_id' class='form-control'>";
                                            while ($row1 = mysqli_fetch_array($q)) {
                                                if ($row1['sem_id'] == $row['sem_id']) {
                                                    $selected = "selected";
                                                } else {
                                                    $selected = "";
                                                }
                                                echo "<option value='{$row1['sem_id']}' {$selected}>{$row1['sem_name']}</option>";
                                            }
                                            echo "</select>";
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <label>Division</label>
                                        <div class="form-group">

                                            <?php
                                            $q = mysqli_query($connection, "select * from tbl_division") or die(mysqli_error($connection));
                                            echo "<select name='division_id' class='form-control'>";
                                            while ($row1 = mysqli_fetch_array($q)) {
                                                if ($row1['division_id'] == $row['division_id']) {
                                                    $selected = "selected";
                                                } else {
                                                    $selected = "";
                                                }
                                                echo "<option value='{$row1['division_id']}' {$selected}>{$row1['division_name']}</option>";
                                            }
                                            echo "</select>";
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <label>Subject</label>
                                        <div class="form-group">

                                            <?php
                                            $q = mysqli_query($connection, "select * from tbl_subject") or die(mysqli_error($connection));
                                            echo "<select name='subject_id' class='form-control'>";
                                            while ($row1 = mysqli_fetch_array($q)) {
                                                if ($row1['subject_id'] == $row['subject_id']) {
                                                    $selected = "selected";
                                                } else {
                                                    $selected = "";
                                                }
                                                echo "<option value='{$row1['subject_id']}' {$selected}>{$row1['subject_name']}</option>";
                                            }
                                            echo "</select>";
                                            ?>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <label>Subject</label>
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control" placeholder="Subject Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <label>Faculty</label>
                                        <div class="form-group">
                                            <?php
                                            $q = mysqli_query($connection, "select * from tbl_faculty") or die(mysqli_error($connection));
                                            echo "<select name='faculty_id' class='form-control'>";
                                            while ($row1 = mysqli_fetch_array($q)) {
                                                if ($row1['faculty_id'] == $row['faculty_id']) {
                                                    $selected = "selected";
                                                } else {
                                                    $selected = "";
                                                }
                                                echo "<option value='{$row1['faculty_id']}' {$selected}>{$row1['faculty_name']}</option>";
                                            }
                                            echo "</select>";
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-raised waves-effect btn-round btn-primary">Submit</button>
                                        <button type="submit" class="btn btn-raised waves-effect btn-round">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
    <script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

    <script src="assets/plugins/autosize/autosize.js"></script> <!-- Autosize Plugin Js -->
    <script src="assets/plugins/momentjs/moment.js"></script> <!-- Moment Plugin Js -->
    <script src="assets/plugins/dropzone/dropzone.js"></script> <!-- Dropzone Plugin Js -->
    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <script src="assets/bundles/mainscripts.bundle.js"></script>
    <script src="assets/js/pages/forms/basic-form-elements.js"></script>

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

<!-- Mirrored from thememakker.com/templates/oreo/university/html/add-courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 05:01:31 GMT -->

</html>