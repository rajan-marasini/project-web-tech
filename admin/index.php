<?php include "./partials/header.php"; ?>

<div class="paddings innerWidth flexColStart dashboard">

    <?php
    if (isset($_SESSION['login'])) {
        echo $_SESSION['login'];
        echo "<br>";
        unset($_SESSION['login']);
    }

    ?>

    <h1>Dashboard</h1>

    <div class="flexCenter main-db">
        <div class="paddings box">
            <span>
                <?php

                $sql1 = "SELECT * FROM tbl_admin";

                $res1 = mysqli_query($conn, $sql1);

                $count1 = mysqli_num_rows($res1);

                echo $count1;

                ?>
            </span><span>Admins</span>
        </div>
        <div class="paddings box">
            <span>9</span><span>Hotels</span>
        </div>
        <div class="paddings box">
            <span>14</span><span>Premium Hotels</span>
        </div>
        <div class="paddings box">
            <span>
                <?php

                $sql4 = "SELECT * FROM tbl_message";

                $res4 = mysqli_query($conn, $sql4);

                $count4 = mysqli_num_rows($res4);

                echo $count4;

                ?>
            </span><span>Messages</span>
        </div>
        <div class="paddings box">
            <span>
                <?php

                $sql5 = "SELECT * FROM tbl_users";

                $res5 = mysqli_query($conn, $sql5);

                $count5 = mysqli_num_rows($res5);

                echo $count5;

                ?>
            </span><span>Clients</span>
        </div>

    </div>
</div>

<?php include "./partials/footer.php"; ?>