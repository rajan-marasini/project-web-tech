<?php
include "../admin/dbconnect.php";

$id = $_GET['id'];
$sql = " DELETE from tbl_message where id=$id ";
$result = mysqli_query($conn, $sql);

if ($result) {
    $_SESSION['delete'] = "<div class='success'>Message deleted successfully</div>";
    header("location: " . SITEURL . "admin/message.php");
} else {
    $_SESSION['delete'] = "<div class='failed'>Message deleted successfully</div>";
    header("location: " . SITEURL . "admin/message.php");
}
