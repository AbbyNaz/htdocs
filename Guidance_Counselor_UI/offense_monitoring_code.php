<?php
session_start();

include_once("../connections/connection.php");

if (!isset($_SESSION['UserEmail'])) {

    echo "<script>window.open('../loginForm.php','_self')</script>";
} 
else {

    $con = connection();

    if (isset($_POST['delete_offense'])) {
        $student_id = $_POST['delete_student_id'];
        $stud_name = $_POST['delete_stud_name'];
        $offensetype = $_POST['delete_offense_type'];
        $offensedescription = $_POST['delete_offense_description'];
        $sanction = $_POST['delete_sanction'];
        $start_date = $_POST['delete_start_date'];
        $end_date = $_POST['delete_end_date'];
        $offensestatus = $_POST['delete_offense_status'];

        $delete_offense = "DELETE FROM offense_monitoring WHERE student_id = $student_id";
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