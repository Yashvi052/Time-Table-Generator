<?php

require './connection.php';

$sql = "SELECT
    `tbl_student`.`student_id`
    , `tbl_student`.`student_name`
    , `tbl_student`.`student_gender`
    , `tbl_student`.`student_photo`
    , `tbl_student`.`student_mobileno`
    , `tbl_student`.`student_address`
    , `tbl_student`.`student_dob`
    , `tbl_student`.`student_email`
    , `tbl_student`.`student_password`
    , `tbl_department`.`department_name`
    , `tbl_semester`.`sem_name`
    , `tbl_division`.`division_name`
FROM
    `tbl_student`
    INNER JOIN `tbl_department` 
        ON (`tbl_student`.`student_department_id` = `tbl_department`.`department_id`)
    INNER JOIN `tbl_division` 
        ON (`tbl_student`.`student_div_id` = `tbl_division`.`division_id`)
    INNER JOIN `tbl_semester` 
        ON (`tbl_student`.`student_sem_id` = `tbl_semester`.`sem_id`)
ORDER BY `tbl_student`.`student_id` ASC;";
$query = mysqli_query($connection,$sql) or die(mysqli_error($connection));

echo "<table border='1'>";

echo "<tr>";

echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Category</th>";
//echo "<th>IsActive</th>";
//echo "<th>Insert Date</th>";

echo "</tr>";


while($row = mysqli_fetch_array($query)) {
    echo "<tr>";
    
    echo "<td>{$row['sub_category_id']}</td>";
    echo "<td>{$row['sub_category_name']}</td>";
    echo "<td>{$row['category_name']}</td>";
    //echo "<td>{$row['is_active']}</td>";
    //echo "<td>{$row['insert_date']}</td>";
    
    echo "</tr>";
}


echo "</table>";