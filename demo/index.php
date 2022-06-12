<?php
include 'connection.php';
error_reporting(0);
?>

<html>

<head>
    <title>Time Table</title>
</head>

<body>

    <h3>Time Table Schedule</h3>
    <form method="post" action="insert.php">

        <input type="text" name="subject_name" placeholder="Enter Subject Name">
        <br /><br />
        <select type="text" name="day_id" required>
            <option value="">-Select Day-</option>
            <?php
            $queryday1 = mysqli_query($connect, "select * from tbl_day order by day_id asc");

            while ($rowday1 = mysqli_fetch_array($queryday1)) {

            ?>
                <option value="<?php echo $rowday1["day_id"]; ?>"><?php echo $rowday1["day_name"]; ?></option>
            <?php } ?>
        </select>
        <br /><br />

        <select type="text" name="time_id" required>
            <option value="">-Select Time-</option>
            <?php
            $querytime1 = mysqli_query($connect, "select * from tbl_time order by time_id asc");

            while ($rowtime1 = mysqli_fetch_array($querytime1)) {

            ?>
                <option value="<?php echo $rowtime1["time_id"]; ?>"><?php echo $rowtime1["time_details"]; ?></option>
            <?php } ?>
        </select>
        <br /><br />

        <input type="submit" value="submit">

    </form>

    <table border="1px">
        <thead>

            <th>Time/Day</th>
            <?php
            $queryday = mysqli_query($connect, "select * from tbl_day order by day_id asc");

            while ($rowday = mysqli_fetch_array($queryday)) {

            ?>
                <th><?php echo $rowday["day_name"]; ?></th>
            <?php } ?>
        </thead>
        <tbody>
            <?php
            $querytime = mysqli_query($connect, "select * from tbl_time order by time_id asc");

            while ($rowtime = mysqli_fetch_array($querytime)) {
                $time_id =    $rowtime["time_id"];
            ?>
                <tr>
                    <td><?php echo $rowtime["time_details"]; ?></td>

                    <?php
                    $querymon = mysqli_query($connect, "select * from tbl_schedule where time_id='{$time_id}' and day_id='1'");
                    $rowmon = mysqli_fetch_array($querymon);
                    ?>
                    <td><?php echo $rowmon["subject_name"]; ?></td>


                    <?php
                    $querytue = mysqli_query($connect, "select * from tbl_schedule where time_id='{$time_id}' and day_id='2'");
                    $rowtue = mysqli_fetch_array($querytue);
                    ?>
                    <td><?php echo $rowtue["subject_name"]; ?></td>


                    <?php
                    $querywed = mysqli_query($connect, "select * from tbl_schedule where time_id='{$time_id}' and day_id='3'");
                    $rowwed = mysqli_fetch_array($querywed);
                    ?>
                    <td><?php echo $rowwed["subject_name"]; ?></td>


                    <?php
                    $querythu = mysqli_query($connect, "select * from tbl_schedule where time_id='{$time_id}' and day_id='4'");
                    $rowthu = mysqli_fetch_array($querythu);
                    ?>
                    <td><?php echo $rowthu["subject_name"]; ?></td>

                    <?php
                    $queryfri = mysqli_query($connect, "select * from tbl_schedule where time_id='{$time_id}' and day_id='5'");
                    $rowfri = mysqli_fetch_array($queryfri);
                    ?>
                    <td><?php echo $rowfri["subject_name"]; ?></td>


                    <?php
                    $querysat = mysqli_query($connect, "select * from tbl_schedule where time_id='{$time_id}' and day_id='6'");
                    $rowsat = mysqli_fetch_array($querysat);
                    ?>
                    <td><?php echo $rowsat["subject_name"]; ?></td>

                </tr>
            <?php } ?>

        </tbody>
    </table>


</body>

</html>