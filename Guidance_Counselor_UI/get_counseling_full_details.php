<?php
include_once("../connections/connection.php");

$con = connection();

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT a.*, u.program, u.level
                FROM appointment_history a
                JOIN users u
                ON a.id_number = u.id_number
                WHERE a.app_id = $id";

    $result = mysqli_query($con, $query);
    $Appointment = mysqli_fetch_assoc($result);

    echo json_encode($Appointment);
}
