<?php

session_start();

include_once("../connections/connection.php");

$con = connection();

if(isset($_GET['id_number'])){
    $id = $_GET['id_number'];
}else{
    $id = $_SESSION['UserNumber'];
}

// Retrieve the user's profile picture file path from the database
$stmt = $con->prepare("SELECT profile_picture FROM users WHERE id_number = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($profile_picture);
$stmt->fetch();

// Send the appropriate HTTP headers for the image file type
$image_info = getimagesize($profile_picture);
$mime_type = $image_info['mime'];
header("Content-Type: $mime_type");

// Output the image file
readfile($profile_picture);