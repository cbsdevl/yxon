<?php
include '../dbconnect.php';
$queryuploaded = mysqli_num_rows(mysqli_query($dbconnection, "SELECT * FROM upload"));
$queryusers = mysqli_num_rows(mysqli_query($dbconnection, "SELECT * FROM workers"));echo $query

?>