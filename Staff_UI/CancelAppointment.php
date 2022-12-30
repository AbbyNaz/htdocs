<?php

session_start();

include_once("../connections/connection.php");

$con = connection();

$app_id = $_GET['id'];

if (isset($_GET['id'])) {
    $selectAppointment = "SELECT * FROM appointments WHERE id='$app_id'";
    $Appointmentdata = $con->query($selectAppointment) or die($con->error);
    $Appointment = $Appointmentdata->fetch_assoc();

    $timeslot = $Appointment['timeslot'];
      $timeslot_end = $Appointment['timeslot_end'];
      $date = $Appointment['date'];
      $user_type = $Appointment['user_type'];
      $ref_id = $Appointment['ref_id'];
      $id_number = $Appointment['id_number'];
      $name = $Appointment['name'];
      $nature = $Appointment['nature'];
      $subject = $Appointment['subject'];
      $appointment_type = $Appointment['appointment_type'];
      $info = $Appointment['info'];
      $updated_at = $Appointment['updated_at'];
      $meeting_link = $Appointment['meeting_link'];
      $app_by = $Appointment['app_by'];

      $cancel_reason = $_POST['reason'];

      $updlimit = "UPDATE `users` SET `limit_app`=0 WHERE id_number='$id_number'" ;
      $con->query($updlimit) or die($con->error);

      $app_status = 'Cancelled';
        
    $query = "INSERT INTO appointment_history (timeslot,timeslot_end,date,user_type,ref_id,id_number,name,nature,subject,appointment_type,info,app_status,updated_at,meeting_link,app_by,app_id,cancel_reason) 
                  VALUES('$timeslot','$timeslot_end','$date','$user_type','$ref_id','$id_number','$name','$nature','$subject',
                          '$appointment_type','$info','$app_status','$updated_at','$meeting_link','$app_by','$app_id','$cancel_reason')";
    $con->query($query) or die($con->error);

    $delapp ="DELETE FROM `appointments` where id = '$app_id'";
    $con->query($delapp) or die ($con->error);

    header("Location: staff___set_appointment.php?Success");

}else{
    header("Location: staff___set_appointment.php?noID");
}