<?php

include_once("../connections/connection.php");

$con = connection();

// Check if an ID was passed in the AJAX request
if (isset($_GET['AppID'])) {

        $id = mysqli_real_escape_string($con, $_GET['AppID']);

        $App_query = "SELECT a.*, u.position FROM appointments a JOIN users u ON a.id_number = u.id_number WHERE id = '$id'";

        $result = mysqli_query($con, $App_query);
        $Appointment = mysqli_fetch_assoc($result);

        echo json_encode($Appointment);
}


