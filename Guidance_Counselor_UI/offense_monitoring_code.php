<?php
session_start();

include_once("../connections/connection.php");

if (!isset($_SESSION['UserEmail'])) {

    echo "<script>window.open('../loginForm.php','_self')</script>";
} 
else {

    $con = connection();

    if (isset($_POST['delete_offense']) && !empty($_GET['info'])) {

        $offenseID = $_GET['info'];
        $delete_offense = "DELETE FROM offense_monitoring WHERE id = $offenseID";
        $query_run = $con->query($delete_offense) or die($con->error);

        if ($query_run) {
            // echo "Saved";
            $_SESSION['status'] = "Offense Deleted Successfully";
            $_SESSION['status_code'] = "success";
            header('Location: gc___offense_monitoring.php');
        } else {
            // echo "Not saved";
            $_SESSION['status'] = "Student is not deleted";
            $_SESSION['status_code'] = "error";
            header('Location: gc___offense_monitoring.php');
        }
    }

}