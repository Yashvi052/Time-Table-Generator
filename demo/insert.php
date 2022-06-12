<?php
include 'connection.php';


$subject_name=$_POST["subject_name"];
$day_id=$_POST["day_id"];
$time_id=$_POST["time_id"];

$query = mysqli_query($connect,"select * from tbl_schedule where day_id='{$day_id}' and time_id='{$time_id}'")or die(mysqli_error($connect));

$count = mysqli_num_rows($query);

if($count>0)
{
    echo "<script>
        window.location='index.php';
    alert('Day And Time Already Selected');
    </script>";
}
else{
    
    $query = mysqli_query($connect,"INSERT INTO `tbl_schedule`(`subject_name`, `day_id`, `time_id`) VALUES ('{$subject_name}','{$day_id}','{$time_id}')")or die(mysqli_error($connect));
    
    
       echo "<script>
        window.location='index.php';
    alert('Your Record Added');
    </script>";
}




?>