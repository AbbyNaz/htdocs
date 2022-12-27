<?php
include_once("../connections/connection.php");

$con = connection();

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $query = "SELECT o.*, u.id_number, u.first_name, u.last_name
                FROM offense_monitoring o 
                JOIN users u 
                ON o.student_id = u.id_number 
                WHERE o.id = $id";

    $result = mysqli_query($con, $query);
    $Offense = mysqli_fetch_assoc($result);

    echo json_encode($Offense);
}

