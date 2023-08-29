<?php include "./dbconnect.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:100,regular,italic,500,700);

        body {
            background-color: #333;
            color: white;
            margin: 0;
            box-sizing: border-box;
            display: grid;
            place-items: center;
            min-height: 100vh;
            font-family: "Roboto", sans-serif;
        }

        .loginform {
            display: flex;
            flex-direction: column;
            min-height: 500px;
            width: 400px;
            background-color: rgba(0, 0, 0, 0.4);
            border: 1px solid darkslategray;
            border-radius: 10px;
            position: relative;
            padding: 2rem;
            margin-top: 1rem;
            margin-bottom: 10rem;
        }

        .input-box {
            position: relative;
            display: flex;
            flex-direction: column;
            margin: 0 auto;
            margin-bottom: 20px;
            width: 100%;
            height: 40px;
        }

        #username,
        #password {
            width: 95%;
            height: 50px;
            color: white;
            background-color: darkslategrey;
            border: none;
            position: relative;
            outline: none;
            border: none;
            border-radius: 5px;
            padding: 20px 0px 2px 20px;
            font-size: 20px;
        }

        .floating-label {
            position: absolute;
            top: 8px;
            left: 20px;
            font-size: 20px;
            color: #aaa;
            transition: all 0.2s ease-in-out;
        }

        input:focus~.floating-label,
        input:valid~.floating-label {
            top: 3px;
            font-size: 13px;
        }

        .input-box p {
            position: absolute;
            right: 0px;
            top: -17px;
            bottom: 0px;
            background-color: #333;
            height: 77%;
            width: 70px;
            cursor: pointer;
            text-align: center;
            border-radius: 0px 7px 7px 0px;
            padding: 15px 0px 0px 0px;
        }

        #submit {
            width: 100%;
            height: 40px;
            border: none;
            outline: none;
            color: white;
            font-family: inherit;
            font-size: 20px;
            background-color: red;
            border-radius: 5px;
            margin-top: 3rem;
            margin-bottom: 0.5rem;
        }

        .success {
            color: lightgreen;
        }

        .failed {
            color: red;
        }
    </style>
</head>

<body>

    <div class="loginform">
        <h1>Sign In</h1>
        <?php

        if (isset($_SESSION['login'])) {
            echo $_SESSION['login'];
            echo "<br>";
            unset($_SESSION['login']);
        }
        if (isset($_SESSION['no-login-message'])) {
            echo $_SESSION['no-login-message'];
            echo "<br>";
            unset($_SESSION['no-login-message']);
        }
        if (isset($_SESSION['logout'])) {
            echo $_SESSION['logout'];
            echo "<br>";
            unset($_SESSION['logout']);
        }

        ?>
        <form action="" method="post">
            <div class="input-box">
                <input type="text" id="username" name="username" required />
                <label for="username" class="floating-label">Email or Username</label>
            </div>
            <div class="input-box password">
                <input type="password" id="password" name="password" required />
                <label for="password" class="floating-label">Password</label>
            </div>
            <div><input type="submit" value="Sign In" id="submit" name="submit" /></div>
        </form>

    </div>
</body>

</html>


<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);


    $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

    $res = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($res);

    if ($count > 0) {
        $_SESSION['user'] = $username;
        $_SESSION['login'] = "<div class='success'>Successfully Logged in</div>";
        header("location:" . SITEURL . "admin/");
    } else {
        $_SESSION['login'] = "<div class='failed'>Email or password not matched</div>";
        header("location:" . SITEURL . "admin/login.php");
    }
}

?>