<?php
include_once("../connections/connection.php");

$con = connection();

$result = mysqli_query($con, $refer_query);
$referral = mysqli_fetch_assoc($result);

echo json_encode($referral);