<?php

include "../admin/dbconnect.php";

$id = $_GET['id'];
echo $id;

$sql = "DELETE FROM tbl_admin WHERE id=$id";

$result = mysqli_query($conn, $sql);

if ($result) {
    $_SESSION['delete'] = "<div class='success'>Admin deleted successfully</div>";
    header("location: " . SITEURL . "admin/manageadmin.php");
} else {
    $_SESSION['delete'] = "<div class='failed'>Failed to delete</div>";
    header("location: " . SITEURL . "admin/manageadmin.php");
}
