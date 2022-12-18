<?php

session_start();

include_once("../connections/connection.php");

  if (!isset($_SESSION['UserEmail'])) {

      echo "<script>window.open('../loginForm.php','_self')</script>";
  } else {

    $con = connection();
    
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
    }

    if(isset($_POST['reset_button'])) {

      $user_query = "SELECT * FROM users WHERE user_id = '$id'";
      $user_con = $con->query($user_query) or die($con->error);
      $user_row = $user_con->fetch_assoc();

      $first_name = $user_row['first_name'];
      $last_name = $user_row['last_name'];
      $id_number = $user_row['id_number'];

      // $email = strtoupper(str_replace(' ', '', $last_name)) . "." . substr($stud_id, -6) . "@angeles.sti.edu.ph";
      $full_name = ucwords($first_name . " " . $last_name);
      $name_initial = explode(' ', $full_name);

      $initial = "";
      foreach($name_initial as $n){
          $initial .= $n[0];
      }

      $password = $initial . substr($id_number, -6);

      $reset_query = "UPDATE users SET password='$password' WHERE user_id = '$id'";
      $reset_con = $con->query($reset_query) or die($con->error);

      if ($reset_con) {
        $_SESSION['status'] = "Password is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: gc___student_profile.php?id='.$id);
      } else {
        $_SESSION['status'] = "Password Update Failed";
        $_SESSION['status_code'] = "error";
        header('Location: gc___student_profile.php?id='.$id);
      }
    }

}
?>