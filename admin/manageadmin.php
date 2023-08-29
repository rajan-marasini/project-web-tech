<?php include("./partials/header.php");

?>

<section class="paddings innerWidth">
    <div class="manage">
        <h2>Admins: </h2>

        <br>

        <?php
        if (isset($_SESSION['add'])) {
            echo $_SESSION['add'];
            echo "<br>";
            unset($_SESSION['add']);
        }

        if (isset($_SESSION['delete'])) {
            echo $_SESSION['delete'];
            echo "<br>";
            unset($_SESSION['delete']);
        }
        if (isset($_SESSION['update'])) {
            echo $_SESSION['update'];
            echo "<br>";
            unset($_SESSION['update']);
        }

        ?>
        <br>
        <a href="<?php echo SITEURL ?>admin/addadmin.php"><button class="btn-primary">Add Admin</button></a>

        <table>
            <tr>
                <th>SN</th>
                <th>FullName</th>
                <th>Username</th>
                <th>Action</th>
            </tr>


            <?php

            $sql = "SELECT * FROM tbl_admin";

            $result = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($result);

            if ($count > 0) {
                $sn = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $fullname = $row['fullname'];
                    $username = $row['username'];

            ?>
                    <tr>
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo $row['fullname']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td>
                            <a href="<?php echo SITEURL; ?>admin/updateadmin.php?id=<?php echo $id ?>"><button class="btn-secondary">Update admin</button></a>
                            <a href="<?php echo SITEURL; ?>admin/deleteadmin.php?id=<?php echo $id ?>"><button class="btn-danger">Delete admin</button></a>
                        </td>
                    </tr>
            <?php


                }
            } else {
                echo "no admin available";
            }

            ?>
        </table>
    </div>
</section>

<?php


include "./partials/footer.php";
?>