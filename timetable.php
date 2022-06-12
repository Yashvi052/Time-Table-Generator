<?php
session_start();
if (!isset($_SESSION['studentid'])) {
    header("location:sign-in.php");
}
$connection = mysqli_connect("localhost", "root", "", "student_automated_timetable_generator");
$tbl_subject = mysqli_query($connection, "SELECT *From tbl_subject");
$tbl_semester = mysqli_query($connection, "SELECT *From tbl_semester");
$tbl_division = mysqli_query($connection, "SELECT *From tbl_division");
$tbl_department = mysqli_query($connection, "SELECT *From tbl_department");
$number_of_row = 0;
if (isset($_GET['subject_id']) && isset($_GET['sem_id']) && isset($_GET['division_id']) && isset($_GET['department_id']) && isset($_GET['week_day'])) {
    $tbl_timetable = mysqli_query($connection, "SELECT *From tbl_timetable where subject_id='{$_GET['subject_id']}'and semester_id='{$_GET['sem_id']}' and division_id='{$_GET['division_id']}' and week_day='{$_GET['week_day']}' and timetable_department_id='{$_GET['department_id']}'");
    $number_of_row = mysqli_num_rows($tbl_timetable);
} else {
    $number_of_row = 0;
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
    <style>
        label {
            font-weight: 600;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div class="wrapper">
    <?php
        include './main-header.php';
        ?>

        <!-- Content Area -->
        <div class="container" style="padding-bottom: 100px;">
            <h1 class="text-center"><?php echo isset($_GET['week_day']) ? $_GET['week_day'] : "" ?> Time Table </h1>
            <hr>
            <form method="GET" action="" id="employee_form" name="employee_form">
                <div class="row">
                    <div class="col-sm-3">
                        <label>Subject :</label>
                        <select class="form-control" name="subject_id" id="subject_id">
                            <option value="">Select Subject</option>
                            <?php
                            while ($data = mysqli_fetch_array($tbl_subject)) {
                                echo "<option value='{$data['subject_id']}'>{$data['subject_name']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label>Semester :</label>
                        <select class="form-control" name="sem_id" id="sem_id">
                            <option value="">Select Semester</option>
                            <?php
                            while ($data = mysqli_fetch_array($tbl_semester)) {
                                echo "<option value='{$data['sem_id']}'>{$data['sem_name']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label>Division :</label>
                        <select class="form-control" name="division_id" id="division_id">
                            <option value="">Select Division</option>
                            <?php
                            while ($data = mysqli_fetch_array($tbl_division)) {
                                echo "<option value='{$data['division_id']}'>{$data['division_name']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label>Department :</label>
                        <select class="form-control" name="department_id" id="department_id">
                            <option value="">Select Department</option>
                            <?php
                            while ($data = mysqli_fetch_array($tbl_department)) {
                                echo "<option value='{$data['department_id']}'>{$data['department_name']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label>Day :</label>
                        <select class="form-control" name="week_day" id="week_day">
                            <option value="">Select Day</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                        </select>
                    </div>
                </div>
                <div class="row" style="padding-top: 5px;">
                    <div class="col-sm-12">
                        <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>
            <?php
            if ($number_of_row > 0) {
            ?>
                <h2></h2>
                <table class="table" style="margin: 30px;">
                    <thead>
                        <tr>
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

        <!-- start footer -->
        <?php
        include './footer.php';
        ?>
    </div>
    <!-- start screpting -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <!-- my js -->
    <script src="assets/js/app.js"></script>

    <!-- Start Jquery Validation -->
    <script src="https://jqueryvalidation.org/files/lib/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
    <script>
        $(document).ready(function() {

            $("#employee_form").validate({
                rules: {
                    'subject_id': {
                        required: true,
                    },
                    'sem_id': {
                        required: true,
                    },
                    'division_id': {
                        required: true,
                    },
                    'department_id': {
                        required: true,
                    },
                    'week_day': {
                        required: true,
                    }
                },
                messages: {
                    subject_id: {
                        required: "Please Select Subject",
                    },
                    sem_id: {
                        required: "Please Select Semester",
                    },
                    division_id: {
                        required: "Please Select Division",
                    },
                    department_id: {
                        required: "Please Select Department",
                    },
                    'department_id': {
                        required: "Please Select Day",
                    }
                },
            });
        });
    </script>
</body>

<!-- Mirrored from thememakker.com/templates/oreo/university/front/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 05:04:28 GMT -->

</html>