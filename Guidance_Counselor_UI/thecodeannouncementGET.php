<?php

include_once("../connections/connection.php");

$con = connection();

if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($con, $_GET['id']);

    $getAnnouncement = "SELECT * FROM announcements WHERE id = '$id'";
    $results =  mysqli_query($con, $getAnnouncement);
    $Announcements = mysqli_fetch_assoc($results);
      
    echo json_encode($Announcements);
}