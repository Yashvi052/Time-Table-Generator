<?php

$connection = mysqli_connect("localhost", "root", "", "mca");

$query = mysqli_query($connection, "select * from tbl_student") or die(mysqli_error($connection));

$count = mysqli_num_rows($query);

echo "$count Records Found";
echo"<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Email</th>";
echo "<th>Action</th>";
echo "</tr>";
while ($row = mysqli_fetch_array($query)) {
    echo "<tr>";
    echo "<td>{$row['st_id']}</td>";
    echo "<td>{$row['st_name']}</td>";
    echo "<td>{$row['st_gender']}</td>";
    echo "<td>{$row['st_email']}</td>";
    echo "<td><a href='edit.php?eid={['st_id']}'>Edit</a> | <a href='delete.php?eid={['st_id']}'>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";

