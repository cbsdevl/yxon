<?php
$servername = "localhost";
// REPLACE with your Database name
$dbname = "yxon_sys";
// REPLACE with Database user
$username = "root";
// REPLACE with Database user password
$password = "";
// Create connection
$dbconnection = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($dbconnection->connect_error) {
    die("Connection failed: " . $dbconnection->connect_error);
} 
?>
