<?php

session_start();

include_once("../connections/connection.php");

$con = connection();

// Retrieve the user's profile picture file path from the database
$stmt = $con->prepare("SELECT slide_picture FROM slides WHERE id = ?");
$stmt->bind_param("i", $_GET['SID']);
$stmt->execute();
$stmt->bind_result($article_picture);
$stmt->fetch();

// Send the appropriate HTTP headers for the image file type
$image_info = getimagesize($article_picture);
$mime_type = $image_info['mime'];
header("Content-Type: $mime_type");

// Output the image file
readfile($article_picture);