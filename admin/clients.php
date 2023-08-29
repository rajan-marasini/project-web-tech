<?php include "../admin/partials/header.php" ?>



<div class="paddings innerWidth message">

    <h1>Our clients</h1>

    <br>

    <?php
    if (isset($_SESSION['user-delete'])) {
        echo $_SESSION['user-delete'];
        echo "<br>";
        unset($_SESSION['user-delete']);
    }

    ?>

    <table>
        <tr>
            <th>SN</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Username</th>
            <th>Registered date</th>
            <th>Action</th>
        </tr>

        <?php

        $fullname = null;

        $sql = "SELECT * FROM tbl_users";

        $res = mysqli_query($conn, $sql);

        if ($res) {

            $count = mysqli_num_rows($res);

            if ($count > 0) {
                $sn = 1;
                while ($row = mysqli_fetch_assoc($res)) {

                    $id = $row['id'];
                    $fullname = $row['full name'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                    $username = $row['username'];
                    $regdate = $row['regdate'];
        ?>
                    <tr>
                        <td><?php echo $sn++ ?></td>
                        <td><?php echo $fullname ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $phone ?></td>
                        <td><?php echo $username ?></td>
                        <td><?php echo $regdate ?></td>
                        <td><a href="<?php echo SITEURL ?>admin/deleteclient.php?id=<?php echo $id ?>"><button class="btn-danger">Delete client</button></a></td>
                    </tr>
        <?php
                }
            } else {
                echo "no clients available";
            }
        }

        ?>

    </table>
</div>





<?php include "../admin/partials/footer.php" ?>