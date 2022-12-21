<?php
session_start();

include_once("Notify.php");

include_once("../connections/connection.php");
$con = connection();

if(!isset($_POST["description"])){
    header("Location: gc___referral.php?abort=noDescription"); //cancel rejection because no reason
}else{
    $currentDate = date('Y-m-d');

    // Rejection query
    $ref_id = $_GET['ref_id'];
    $desciption = $_POST["description"];
    $cancel_refferal = "UPDATE `refferals` SET ref_status='Cancelled', Cancel_Reason='$desciption', Cancel_Date ='$currentDate' WHERE ref_id = '$ref_id'";
    $isSuccess = mysqli_query($con, $cancel_refferal);

    if($isSuccess){
        $type = 'Rejection';

        $notified = Notify($type, $ref_id);
        
        if($notified){
            header("Location: gc___referral.php?RejectionSuccess=true");
        }

    }
    
}

    
