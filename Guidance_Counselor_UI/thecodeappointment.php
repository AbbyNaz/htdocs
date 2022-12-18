<?php
session_start();

include_once("../connections/connection.php");

if (!isset($_SESSION['UserEmail'])) {

echo "<script>window.open('../loginForm.php','_self')</script>";

} else {

$con = connection();

if (isset($_POST['add_appointment'])) {
  $date = $_POST['app_date'];
  $app_timeslot = $_POST['app_timeslot'];
  $app_type = $_POST['app_type'];
  $student_id = $_POST['student_id'];
  // $student_name = $_POST['student_name'];
  // $program = $_POST['program'];
  // $level = $_POST['level'];
  $app_subject = $_POST['app_subject'];
  $type = $_POST['type'];
  $app_info = $_POST['app_info'];
  $status = "In Review";

  echo $query = "INSERT INTO `appointments`(`timeslot`, `date`, `user_type`, `id_number`, `subject`, `appointment_type`, `info`, `app_status`) " .
              "VALUES ('$app_timeslot','$date','$app_type','$student_id','$app_subject','$type','$app_info','$status')";
  $get_app = $con->query($query) or die ($con->error);
  // $row = $get_app->fetch_assoc();

  if ($get_app) {
    // echo "Saved";
    $_SESSION['status'] = "Appointment Added";
    $_SESSION['status_code'] = "success";
    header("Location: gc___all_appointment.php");

      // $current_date_time = date("Y-m-d H:i:s");
      // $action_made = "Add an appointment to". $student_id;
      // $IDNUMBER = $row['id_number'];
      // $add_logs = "INSERT INTO logs (`user_id`, `action_made`, `date_created`) VALUES ('$IDNUMBER', '$action_made', '$current_date_time')";
      // $query_run = $con->query($add_logs) or die($con->error);

  } else {
      // echo "Not saved";
      $_SESSION['status'] = "Appointment Not Added";
      $_SESSION['status_code'] = "error";
      header("Location: gc___all_appointment.php");
      // $current_date_time = date("Y-m-d H:i:s");
      // $action_made = "Attempt to add an appointment to" . $student_id;
      // $IDNUMBER = $row['id_number'];
      // $add_logs = "INSERT INTO logs (`user_id`, `action_made`, `date_created`) VALUES ('$IDNUMBER', '$action_made', '$current_date_time')";
      // $query_run = $con->query($add_logs) or die($con->error);
  }
}

}

?>