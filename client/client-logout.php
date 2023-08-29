<?php
include "../admin/dbconnect.php";
session_destroy();

session_start();

$_SESSION['logout'] = "<div class='success'>Log out successfully</div>";

header("location:" . SITEURL . "client/loginclient.php");
