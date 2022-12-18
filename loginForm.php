<?php session_start() ?>
<!DOCTYPE html>
<html>

<head>
    <!-- sample comment -->
    <title>Guidance and Counseling Office - Login Form</title>
    <link rel="shortcut icon" type="image/x-icon" href="./images/sti_logo.png">
    <link rel="stylesheet" type="text/css" href="loginForm_css/style2.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <img class="wave" src="loginForm_images/wave.png">
    <div class="container">
        <div class="img">
            <img src="loginForm_images/bg.svg">
        </div>
        <div class="login-content">
            <form class="user" action="codeLogin.php" method="POST">
                <img src="loginForm_images/sti_logo.png">
                <h2 class="title">Sign In</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input type="email" name="user_email" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" name="user_password" class="input">
                    </div>
                </div>
                <!-- <a href="#">Forgot Password?</a> -->
                <input type="submit" class="btn" name="login_btn" value="Login">
                <input type="submit" class="btn-cancel" name="cancel_btn" value="Cancel">

            </form>
        </div>
    </div>
    <script type="text/javascript" src="loginForm_js/main2.js"></script>
</body>

</html>