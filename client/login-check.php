<?php
if (!isset($_SESSION['client'])) {

    $_SESSION['no-login-message'] = "<div class='failed'>Enter username and password</div>";
    header("location:" . SITEURL . "client/loginclient.php");
}
