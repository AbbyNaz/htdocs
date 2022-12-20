<?php

include_once("../connections/connection.php");
$con = connection();

if(!isset($_POST["description"])){
    header("Location: gc___referral.php?abort=noDescription"); //cancel rejection because no reason
}else{
    $ref_id = $_GET['ref_id'];
    $desciption = $_POST["description"];
    $cancel_refferal = "UPDATE `refferals` SET ref_status='Cancelled', Cancel_Reason='$desciption' WHERE ref_id = '$ref_id'";
    $con->query($cancel_refferal) or die($con->error);
    header("Location: gc___referral.php?RejectionSuccess=true");
}

    
