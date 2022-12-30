<?php
session_start();

include_once("../connections/connection.php");

$con = connection();

define('BACKUP_FOLDER', 'C:'.DIRECTORY_SEPARATOR.'xampp'.DIRECTORY_SEPARATOR.'htdocs'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'slides');

if(isset($_FILES['slide_picture'])){
    // Save the uploaded image file to a designated folder on the server
    $target_dir = BACKUP_FOLDER;
    $target_file = $target_dir . basename($_FILES["slide_picture"]["name"]);
    move_uploaded_file($_FILES["slide_picture"]["tmp_name"], $target_file);

    // Validate the uploaded file
    $image_info = getimagesize($target_file);
    if (!$image_info) {
        // Not an image file, delete the uploaded file and show an error message
        unlink($target_file);

        header("Location: gc___staff_profile.php?ERROR");
        exit;
    }

    // Update the user's profile picture in the database
    $stmt = $con->prepare("UPDATE slides SET slide_picture = ? WHERE id = ?");
    $stmt->bind_param("si", $target_file, $_SESSION['UserNumber']);
    $stmt->execute();

    // Redirect the user back to their profile page
    header("Location: gc___staff_profile.php?SUCCESS");
    exit;
}else{
    header("Location: gc___staff_profile.php?NOIMAGE");
    exit;
}