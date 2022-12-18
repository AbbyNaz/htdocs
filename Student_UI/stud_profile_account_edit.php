<?php

session_start();

include_once("../connections/connection.php");

if (!isset($_SESSION['UserEmail'])) {

    echo "<script>window.open('../loginForm.php','_self')</script>";
} else {

    $con = connection();

    if (isset($_SESSION['UserId'])) {

        $id = $_SESSION['UserId'];
        $query = "SELECT * FROM users WHERE user_id = '$id'";
        $get_user = $con->query($query) or die($con->error);
        $row = $get_user->fetch_assoc();
    }

    if (isset($_POST['edit_account_submit'])) {

        $file = addslashes(file_get_contents($FILES["image"]["tmp_name"]));

        $email = $_POST['email'];
        $password = $_POST['password'];

        $add_query = "INSERT INTO 'users' ('user_image') VALUES ('$file')  WHERE user_id = '$id'";

        // $update_query = "UPDATE `users` SET `password` = '$password',  WHERE user_id = '$id'";

        // $con->query($update_query) or die($con->error);
        $con->query($add_query) or die($con->error);
        // header("Location: stud___profile.php");

        if ($add_query) {
            // echo "Saved";
            // $_SESSION['status'] = "Account Updated";
            // $_SESSION['status_code'] = "success";
            // header('Location: stud___profile.php');
            echo '<script type "text/javascript"> alert("Image Uploaded") </script>';


        } else {
            // echo "Not saved";
            // $_SESSION['status'] = "Account not updated";
            // $_SESSION['status_code'] = "error";
            // header('Location: stud___profile.php');

            echo '<script type "text/javascript"> alert("Image NOT Uploaded") </script>';

        }
    }
}

?>