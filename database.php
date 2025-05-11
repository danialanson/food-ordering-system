<?php

$hostName = "db-instance.cb8mo4secept.us-east-1.rds.amazonaws.com";
$dbUser = "admin";
$dbPassword = "Bf7PC!u7";
$dbName = "login_register";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Something went wrong;");
}

?>