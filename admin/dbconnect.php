<?php

session_start();

define("SITEURL", "http://localhost/pro/");

$server = "localhost";
$user = "root";
$pass = "";
$db_name = "hotelms";

$conn = mysqli_connect($server, $user, $pass, $db_name);

if (!$conn) {
    echo "connection failed";
    die();
}
