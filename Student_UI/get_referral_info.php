<?php

include_once("../connections/connection.php");

$con = connection();

$id = mysqli_real_escape_string($con, $_GET['ref_id']);

$ref_query = "SELECT r.* , u.id_number, u.first_name, u.last_name, u.program, u.level, u.position, u.department, u.dep_position
                FROM refferals r 
                JOIN users u 
                ON u.user_id = r.reffered_user 
                WHERE ref_id = '$id'";

$result = mysqli_query($con, $ref_query);
$referral = mysqli_fetch_assoc($result);

echo json_encode($referral);
