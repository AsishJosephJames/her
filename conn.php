<?php
$host="localhost";
$user="root";
$pass="";
$db="her";

$conn = mysqli_connect("$host","$user","$pass","$db");
session_start();
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>