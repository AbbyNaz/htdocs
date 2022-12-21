
<?php

include_once("../connections/connection.php");

$con = connection();

//Set the AutoBackup According to the Database
$BackupQuery = "SELECT * FROM autobackupdetails";
$QueryNow = $con->query($BackupQuery) or die ($con->error);
$rowBackup = $QueryNow->fetch_assoc();

echo json_encode($rowBackup);