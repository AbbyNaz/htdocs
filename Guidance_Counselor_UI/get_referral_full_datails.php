<?php
include_once("../connections/connection.php");

$con = connection();

if(isset($_GET['id']) && isset($_GET['studid'])){
    $id = $_GET['id'];
    $query = "SELECT r.*, u.id_number, u.first_name, u.last_name
            FROM refferals r 
            JOIN users u 
            ON r.reffered_user = u.user_id 
            WHERE ref_id = $id";

    $result = mysqli_query($con, $query);
    $referral = mysqli_fetch_assoc($result);

    echo json_encode($referral);
}



