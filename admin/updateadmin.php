<?php include "./partials/header.php"; ?>

<?php

$id = $_GET['id'];

$sql = "SELECT * FROM tbl_admin WHERE id=$id";

$result = mysqli_query($conn, $sql);

if ($result) {
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $row = mysqli_fetch_assoc($result);

        $fullname = $row['fullname'];
        $username = $row['username'];
    } else {
        header("location:" . SITEURL . "admin/manageadmin.php");
    }
}

?>


<div class="padding innerWidth">

    <form action="" method="post" class="paddings innerWidth">
        <h1>Update Admin:</h1>
        <br>
        <?php
        if (isset($_SESSION['update'])) {
            echo $_SESSION['update'];
        }

        ?>
        <br>
        <table>
            <tr>
                <td>FullName:</td>
                <td><input type="text" name="fullname" id="" placeholder="fullname" value="<?php echo $fullname ?>"></td>
            </tr>

            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" id="" placeholder="username" value="<?php echo $username ?>"></td>
            </tr>


            <tr>
                <td><input type="hidden" name="id" value="<?php echo $id ?>"></td>
                <td>
                    <input type="submit" value="Update Admin" class="btn-primary" name="submit">
                </td>
            </tr>
        </table>
    </form>
</div>


<?php

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];

    $sql1 = "UPDATE tbl_admin SET 
    fullname = '$fullname',
    username = '$username'
     WHERE id=$id";

    $res = mysqli_query($conn, $sql1);

    if ($res) {
        $_SESSION['update'] = "<div class='success'>Admin successfully updated</div>";
        header("location:" . SITEURL . "admin/manageadmin.php");
    } else {
        $_SESSION['update'] = "<div class='failed'>Admin Failed to update</div>";
        header("location:" . SITEURL . "admin/manageadmin.php");
    }
}


?>


<?php include "./partials/footer.php" ?>