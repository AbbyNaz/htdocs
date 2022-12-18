<?php

session_start();

include_once("../connections/connection.php");

if(!isset($_SESSION['UserEmail'])){
        
  echo "<script>window.open('../loginForm.php','_self')</script>";
  
}else{

    $con = connection();

    if(isset($_SESSION['AppId'])) {
      $app_id = $_SESSION['AppId'];
    }

  if(isset($_POST['add_feedback'])) {
    $stud_name = $_POST['stud_name'];
    $program = $_POST['program'];
    $section = $_POST['section'];
    $session_date = $_POST['session_date'];
    $action_taken = $_POST['action_taken'];
    $remarks = $_POST['remarks'];
    $feedback_date = date("Y-m-d");
    $update_app_status = "Completed";

    $query = "INSERT INTO `feedback`(`student_name`, `program`, `section`, `app_id`, `session_date`, `feedback_date`, `action_taken`, `remarks`) ".
            "VALUES ('$stud_name','$program','$section','$app_id','$session_date','$feedback_date','$action_taken','$remarks')";
    $fb_row = $con->query($query) or die ($con->error);

    if($fb_row > 0) {
      // Update appointment_history Status to Completed
      $history_query = "UPDATE `appointment_history` SET `status` = '$update_app_status' WHERE app_id = '$app_id'";
      $history_row = $con->query($history_query) or die ($con->error);
    }

    if($fb_row > 0) {
      // Update appointments Status to Completed
      $app_status_query = "UPDATE `appointments` SET `app_status` = '$update_app_status' WHERE id = $app_id";
      $app_status_con = $con->query($app_status_query) or die ($con->error);
    }

    if($app_status_con > 0) {
      // Update referrals status with an appointment
      $app_query = "SELECT ref_id FROM appointments WHERE id = $app_id ";
      $app_con = $con->query($app_query) or die ($con->error);
      $app_row = $app_con->fetch_assoc();
      
      $ref_id = $app_row['ref_id'];

      $ref_query = "UPDATE refferals SET ref_status = '$update_app_status' WHERE ref_id = '$ref_id'";
      $con->query($ref_query) or die ($con->error);
      header("Location: gc___all_appointment.php");
    } 

  } else {
    header("Location: 404.php");
  }
}