<?php

include "./dbconnect.php";
include "login-check.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../client/main.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="paddings innerWidth header">
        <nav class="flexCenter nav">
            <a href="<?php echo SITEURL; ?>/admin/">Home</a>
            <a href="<?php echo SITEURL; ?>/admin/manageadmin.php">Admins</a>
            <a href="">Hotels</a>
            <a href=""> Premium Hotels</a>
            <a href="<?php echo SITEURL ?>admin/clients.php"> Clients </a>
            <a href="<?php echo SITEURL ?>admin/message.php">Messages</a>
            <a href="<?php echo SITEURL ?>admin/logout.php"><button>Logout</button> </a>
        </nav>
    </header>