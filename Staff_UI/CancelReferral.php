<?php

session_start();

include_once("../connections/connection.php");

$con = connection();

$ref_id = $_GET['id'];

$reason = $_POST['description'];



if (isset($_GET['id'])) {
    $updlimit = "UPDATE refferals SET ref_status = 'Cancelled', Cancel_Reason = '$reason', Cancel_Date = NOW() WHERE ref_id ='$ref_id'" ;
    $con->query($updlimit) or die($con->error);
    header("Location: staff___set_referral.php?Success");
}else{
    header("Location: staff___set_referral.php?noID");
}