<?php include "../admin/dbconnect.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BookMyTrip Sign Up</title>
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

        #full_name,
        #password,
        #email,
        #phone_number,
        #username {
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

        .password input {
            margin-bottom: 0;
        }

        #submit {
            background-color: #e50914;
        }

        .failed {
            color: red;
        }
    </style>
</head>

<body>
    <img src="images/netflixlogo.jpg" alt="" class="logopng" />
    <div class="container">

        <?php
        if (isset($_SESSION['signup'])) {
            echo $_SESSION['signup'];
            echo "<br>";
            unset($_SESSION['signup']);
        }

        ?>

        <h1>Sign Up</h1>
        <form action="" method="post">
            <div class="input-box">
                <input type="text" id="full_name" required name="fullname" />
                <label for="full_name" class="floating-label">Full Name</label>
            </div>
            <div class="input-box">
                <input type="email" id="email" required name="email" />
                <label for="email" class="floating-label">Email</label>
            </div>
            <div class="input-box">
                <input type="tel" id="phone_number" required name="phone" />
                <label for="phone_number" class="floating-label">Phone Number</label>
            </div>
            <div class="input-box">
                <input type="text" id="username" required name="username" />
                <label for="user_name" class="floating-label">Username</label>
            </div>
            <div class="input-box password">
                <input type="password" id="password" required name="password" />
                <label for="password" class="floating-label">Create Password</label>
            </div>
            <div><input type="submit" value="Sign Up" id="submit" name="submit" /></div>
        </form>
        <div class="signup">
            <span>Already have an account?
                <a href="<?php echo SITEURL ?>client/loginclient.php">Sign In</a></span>
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
</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);


    $check_username = "SELECT * FROM tbl_users WHERE `username`='$username'";

    $result = mysqli_query($conn, $check_username);

    $username_count = mysqli_num_rows($result);

    $check_user = "SELECT * FROM tbl_users WHERE `email`='$email' or `phone`='$phone' and `full name` ='$fullname'";

    $exist_user = mysqli_query($conn, $check_user);

    $num_of_user = mysqli_num_rows($exist_user);

    if ($username_count > 0) {
        $_SESSION['signup'] = "<div class='failed'>Username already taken...</div>";
        echo "
        <script>
            window.location.href = 'http://localhost/pro/client/signup.php'
        </script>
        ";
    } elseif ($num_of_user > 0) {
        $_SESSION['signup'] = "<div class='failed'>User Already Exist...</div>";
        echo "
        <script>
            window.location.href = 'http://localhost/pro/client/signup.php'
        </script>
        ";
    } else {

        $sql = "INSERT INTO tbl_users(`full name`, `email`, `phone`, `username`, `password`)
        VALUES('$fullname', '$email', '$phone', '$username', '$password');
     ";

        $res = mysqli_query($conn, $sql);

        if ($res) {
            $_SESSION['signup'] = "<div class='success'>Successfully Registered. Please login to continue...</div>";
            echo "
        <script>
            window.location.href = 'http://localhost/pro/client/loginclient.php'
        </script>
        ";
        } else {
            $_SESSION['signup'] = "<div class='failed'>Failed to register. Please try again later...</div>";
            echo "
        <script>
            window.location.href = 'http://localhost/pro/client/signup.php'
        </script>
        ";
        }
    }
}

?>