<?php
include "../admin/dbconnect.php";
session_destroy();

session_start();

$_SESSION['logout'] = "<div class='success'>Successfully logged out</div>";

header("location:" . SITEURL . "admin/login.php");
