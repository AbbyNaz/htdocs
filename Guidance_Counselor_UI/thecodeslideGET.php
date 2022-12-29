<?php

include_once("../connections/connection.php");

$con = connection();

if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($con, $_GET['id']);

    $getSlide = "SELECT * FROM slides WHERE id = '$id'";
    $results =  mysqli_query($con, $getSlide);
    $Slides = mysqli_fetch_assoc($results);
      
    echo json_encode($Slides);
}