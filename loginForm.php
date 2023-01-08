<?php session_start();
include_once("connections/connection.php");

$con = connection();

if (isset($_COOKIE['logged_in'])){

    $id_number = $_COOKIE['logged_in'];
    // header('Location: ./Guidance_Counselor_UI/gc___dashboard.php?'.$id_number);

    
    $query = "SELECT * FROM users WHERE id_number = $id_number";
    $query_run = mysqli_query($con, $query);
    $row= mysqli_fetch_assoc($query_run);

    $_SESSION['UserEmail'] = $row['email'];
    $_SESSION['UserId'] = $row['user_id'];
    $_SESSION['UserRole'] = $row['role'];
    $_SESSION['UserPosition'] = $row['position'];
    $_SESSION['UserNumber'] = $row['id_number'];
    $_SESSION['Stud_id'] = $row['id_number'];

    if ($row['role'] == 1) {
        header('Location: ./Guidance_Counselor_UI/gc___dashboard.php?'.$id_number);
    } elseif ($row["role"] == 2) {
        header('Location: ./Staff_UI/staff___dashboard.php?'.$id_number);
    } elseif ($row["role"] == 3) {
        header('Location: ./Student_UI/stud___dashboard.php?'.$id_number);
    } elseif ($row["role"] == 4) {
        header('Location: ./Guidance_Counselor_UI/gc___dashboard.php?'.$id_number);
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Guidance and Counseling Office - Login Form</title>
    <link rel="shortcut icon" type="image/x-icon" href="./images/sti_logo.png">
    <link rel="stylesheet" type="text/css" href="loginForm_css/style2.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <img class="wave" src="loginForm_images/image.png">
    <div class="container">
        <div class="img">
            <img src="loginForm_images/work.svg">
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