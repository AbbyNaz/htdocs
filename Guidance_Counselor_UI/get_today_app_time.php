<?php

include_once("../connections/connection.php");

$con = connection();

$date = $_GET['date'];

if (!isset($_GET['date']))
    return;

$query = "SELECT timeslot, timeslot_end FROM appointments WHERE date = DATE('$date') AND app_status = 'for appointment'";
$results = mysqli_query($con, $query);

$appointments = array();
while ($row = mysqli_fetch_assoc($results)) {
    $appointments[] = $row;
}

echo json_encode($appointments);
//   