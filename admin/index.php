<?php
session_start();
$connection = new mysqli("localhost", "root", "", "student_automated_timetable_generator");
if (!isset($_SESSION['adminid'])) {
    header("location:sign-in1.php");
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
                    <h2><strong>New</strong> Admission List </h2>

                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-hover m-b-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Number</th>
                                    <th>Department</th>
                                    <th>Sem</th>
                                    <th>Division</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $q = mysqli_query($connection, "SELECT
                                `tbl_student`.`student_id`
                                , `tbl_student`.`student_name`
                                , `tbl_student`.`student_gender`
                                , `tbl_student`.`student_photo`
                                , `tbl_student`.`student_address`
                                , `tbl_student`.`student_mobileno`
                                , `tbl_student`.`student_dob`
                                , `tbl_student`.`student_email`
                                , `tbl_department`.`department_name`
                                , `tbl_semester`.`sem_name`
                                , `tbl_division`.`division_name`
                            FROM
                                `tbl_department`
                                INNER JOIN `tbl_student` 
                                    ON (`tbl_department`.`department_id` = `tbl_student`.`student_department_id`)
                                INNER JOIN `tbl_semester` 
                                    ON (`tbl_semester`.`sem_id` = `tbl_student`.`student_sem_id`)
                                INNER JOIN `tbl_division` 
                                    ON (`tbl_division`.`division_id` = `tbl_student`.`student_div_id`)
                            ORDER BY `tbl_student`.`student_id` ASC;") or die(mysqli_error($connection));
                                $i = 0;
                                while ($data = mysqli_fetch_array($q)) {
                                    $i++;
                                    echo "<tr>";
                                    echo "<td>{$i}</td>";
                                    echo "<td><img class='rounded' style='width:225px' src='{$data['student_photo']}'></td>";
                                    echo "<td>{$data['student_name']}</td>";
                                    echo "<td>{$data['student_address']}</td>";
                                    echo "<td>{$data['student_mobileno']}</td>";
                                    echo "<td>{$data['department_name']}</td>";
                                    echo "<td>{$data['sem_name']}</td>";
                                    echo "<td>{$data['division_name']}</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
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