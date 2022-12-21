<?php

include_once("../connections/connection.php");

$con = connection();

if($_POST['Days'] != null && $_POST['isChecked'] != null){
    if($_POST['isChecked'] == 'true'){
        $useAuto = 1;
    }else{
        $useAuto = 0;
    }

    $UpdateAutoBackup = "UPDATE autobackupdetails SET UseAuto ='$useAuto', Days = CAST($_POST[Days] AS INTEGER)";
    $isSuccess = mysqli_query($con, $UpdateAutoBackup);

    echo json_encode($useAuto);

}