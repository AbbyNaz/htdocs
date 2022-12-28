<?php

include_once("../connections/connection.php");

$con = connection();

$date = $_GET['date'];
$userid = $_GET['userid'];

if (!isset($_GET['date']))
    return;

$queryUser = "SELECT position, first_name, last_name, id_number FROM users WHERE user_id='$userid'";
$userdt = mysqli_query($con, $queryUser);
$user = mysqli_fetch_assoc($userdt);


$query = "SELECT timeslot, timeslot_end FROM appointments WHERE date = DATE('$date') AND app_status = 'for appointment'";
$results = mysqli_query($con, $query);

$appointments = array();
while ($row = mysqli_fetch_assoc($results)) {
    $appointments[] = $row;
}

// echo json_encode($appointments);

echo json_encode([
    "appointments" => $appointments,
    "position" => $user['position'],
    "name" => $user['first_name']." ".$user['last_name'],
    "stud_id" => $user['id_number']
]);