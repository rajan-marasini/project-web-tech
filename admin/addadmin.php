<?php include "../admin/partials/header.php" ?>

<form action="" method="post" class="paddings innerWidth">
    <table>
        <tr>
            <td>Full Name</td>
            <td><input type="text" name="fullname" id="" placeholder="Full name"></td>
        </tr>
        <tr>
            <td>UserName</td>
            <td><input type="text" name="username" id="" placeholder="username"></td>

        </tr>

        <tr>
            <td>Password:

            </td>
            <td><input type="password" name="password" id="" placeholder="password"></td>
        </tr>

    </table>

    <input type="submit" value="Add admin" name="submit" class="btn-primary">
</form>

<?php include "../admin/partials/footer.php" ?>

<?php

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);



    $sql = "INSERT INTO tbl_admin (fullname, username, password)
        VALUES ('$fullname', '$username', '$password')
        ";

    $result = mysqli_query($conn, $sql);


    if ($result) {
        $_SESSION['add'] = "<div class='success'>Admin added successfully</div>";
        header("location:" . SITEURL . "admin/manageadmin.php");
    } else {
        $_SESSION['add'] = "<div class='failed'>Admin failed to add </div>";
        echo "failed to add admin";
    }
}


?>