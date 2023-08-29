<?php include "./partials/header.php"; ?>



<section class="paddings innerWidth message">
    <h1>Messgaes:</h1>

    <br>

    <?php

    if (isset($_SESSION['delete'])) {
        echo $_SESSION['delete'];
        echo "<br/>";
        unset($_SESSION['delete']);
    }

    ?>

    <table>
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
        <?php
        $sql = "select * from tbl_message";

        $result = mysqli_query($conn, $sql);

        if ($result) {

            $count = mysqli_num_rows($result);
            if ($count > 0) {
                $sn = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $message = $row['message'];

        ?>
                    <tr>
                        <td><?php echo $sn++ ?></td>
                        <td><?php echo $name ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $message ?></td>
                        <td><a href="<?php echo SITEURL ?>admin/deletemessage.php?id=<?php echo $id; ?>"><button class="btn-danger">Delete Message</button></a></td>
                    </tr>
        <?php
                }
            }
        }


        ?>


    </table>
</section>


<?php include "./partials/footer.php" ?>