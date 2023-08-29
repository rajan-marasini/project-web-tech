<?php include "../admin/dbconnect.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BookMyTrip</title>
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

        .logopng {
            height: 7rem;
            position: relative;
            left: -30rem;
        }

        .container {
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

        .helpsection {
            color: #999;
            font-size: 13px;
        }

        .remember {
            display: flex;
            justify-content: space-between;
            margin-bottom: 35px;
        }

        .signup a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        .signup {
            margin-bottom: 15px;
            font-size: 15px;
        }

        .learnmore {
            text-decoration: none;
            color: rgb(73, 73, 214);
        }

        footer {
            display: flex;
            background-color: rgba(0, 0, 0, 0.4);
            min-width: 70vw;
            min-height: 10vh;
            padding: 50px 8rem;
            flex-direction: column;
        }

        footer a {
            color: #999;
            text-decoration: none;
            display: block;
        }

        footer a:hover {
            text-decoration: underline;
        }

        footer ul {
            position: relative;
            list-style: none;
            display: grid;
            grid-template-columns: repeat(4, 200px);
            left: -40px;
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
    <div class="container">
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
        if (isset($_SESSION['signup'])) {
            echo $_SESSION['signup'];
            echo "<br>";
            unset($_SESSION['signup']);
        }

        ?>
        <h1>Sign In</h1>
        <form action="" method="post">
            <div class="input-box">
                <input type="text" id="username" required name="username" autocomplete="off" />
                <label for="username" class="floating-label">Email or Username</label>
            </div>
            <div class="input-box password">
                <input type="password" id="password" name="password" required />
                <label for="password" class="floating-label">Password</label>
                <p class="togglePassword">Show</p>
            </div>

            <div><input type="submit" value="Sign In" id="submit" name="submit" /></div>
        </form>
        <div class="helpsection">
            <div class="remember">
                <div>
                    <input type="checkbox" name="" id="" />Remember
                </div>
                <p>Need help?</p>
            </div>
            <div class="signup">
                <span>New to <b>BookMyTrip</b> ?</span>
                <a href="<?php echo SITEURL ?>client/signup.php">Sign up now</a>
            </div>
            <span>This page is protected by Google reCAPTCHA to ensure you're
                not a bot.</span>
            <a href="learnmore.html" class="learnmore">Learn more</a>
        </div>
    </div>
    <footer>
        <a href="questions.html">Questions? Contact us.</a>
        <ul>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="helpcenter.html">Help Center</a></li>
            <li><a href="termsofuse.html">Terms of Use</a></li>
            <li>
                <a href="privacycookie.html">PrivacyCookie Preferences</a>
            </li>
            <li><a href="corporateinfo.html">Corporate Information</a></li>
        </ul>
    </footer>

    <script>
        const togglePassword = document.querySelector(".togglePassword");
        const password = document.querySelector("#password");
        togglePassword.addEventListener("click", () => {
            if ((password.type = password.type === "password")) {
                password.type = "text";
                togglePassword.textContent = "Hide";
            } else {
                password.type = "password";
                togglePassword.textContent = "Show";
            }
        });
    </script>
</body>

</html>


<?php

if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $password = md5($_POST['password']);


    $sql = "SELECT * FROM tbl_users WHERE username='$user' OR email = '$user' and password = '$password'";

    $res = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($res);

    if ($count > 0) {

        $row = mysqli_fetch_assoc($res);

        $user = $row['username'];


        $_SESSION['client'] = $user;

        echo "
        <script>
            window.location.href = 'http://localhost/pro/client/index.php'
        </script>
        ";
    } else {
        $_SESSION['login'] = "<div class='failed'>Email or Username and Password not matched</div>";
        echo "
        <script>
            window.location.href = 'http://localhost/pro/client/loginclient.php'
        </script>
        ";
    }
}

?>