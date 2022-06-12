<?php
session_start();
$connection = new mysqli("localhost", "root", "", "student_automated_timetable_generator");
if (!isset($_SESSION['faculty_id'])) {
    header("location:login.php");
}
?>
<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/university/html/students.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 05:01:25 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: GLS University Admin ::</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Favicon-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
</head>

<body class="theme-blush">
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
    <section class="content home">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2>Dashboard
                    </h2>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 text-right">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="index.php"><i class="zmdi zmdi-home"></i> GLS</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="card student-list">
                <div class="header">
                    <h2><strong>New</strong> </h2>

                </div>
                <div class="body">
                    <div class="table-responsive">
                        <?php
                        $tbl_timetable = mysqli_query($connection, "SELECT *From tbl_timetable where faculty_id='{$_SESSION['faculty_id']}'");
                        $number_of_row = mysqli_num_rows($tbl_timetable);
                        ?>
                        <?php
                        if ($number_of_row > 0) {
                        ?>
                            <h2></h2>
                            <table class="table table-hover m-b-0">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Start Time</th>
                                        <th>Start End</th>
                                        <th>Subject</th>
                                        <th>Faculty</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($data = mysqli_fetch_array($tbl_timetable)) {
                                        $faculty = "SELECT *from tbl_faculty where faculty_id={$data['faculty_id']}";
                                        $q = mysqli_query($connection, $faculty);
                                        $f = mysqli_fetch_assoc($q)
                                    ?>
                                        <tr>
                                            <td><?php echo $data['week_day'] ?></td>
                                            <td><?php echo $data['start_time'] ?></td>
                                            <td><?php echo $data['end_time'] ?></td>
                                            <td><?php echo $data['subject'] ?></td>
                                            <td><?php echo $f['faculty_name'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                            <?php
                        } else {
                            if (isset($_GET['subject_id']) && isset($_GET['sem_id']) && isset($_GET['division_id']) && isset($_GET['department_id'])) {

                            ?>
                                <center>
                                    <h3>No Record Found</h3>
                                </center>
                            <?php
                            } else {
                            ?>
                                <center>
                                    <h3>Filter Data</h3>
                                </center>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script> <!-- Bootstrap JS and jQuery v3.2.1 -->
    <script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

    <script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
</body>

<!-- Mirrored from thememakker.com/templates/oreo/university/html/students.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 05:01:25 GMT -->

</html>