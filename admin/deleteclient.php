<?php

include "../admin/dbconnect.php";

$id = $_GET['id'];

$sql = "DELETE FROM tbl_users where id= $id";

$res = mysqli_query($conn, $sql);

if ($res) {
    $_SESSION['user-delete'] = "<div class='success'>client deleted successfully</div>";
    header("location:" . SITEURL . "admin/clients.php");
} else {
    $_SESSION['user-delete'] = "<div class='success'>Failed to delete client</div>";
    header("location:" . SITEURL . "admin/clients.php");
}
