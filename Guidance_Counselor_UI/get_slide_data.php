<?php

include_once("../connections/connection.php");

$con = connection();

// Check if an ID was passed in the AJAX request
if (isset($_GET['id'])) {

        $id = mysqli_real_escape_string($con, $_GET['id']);

        $slide_query = "SELECT * FROM slides WHERE id = '$id'";

        $result = mysqli_query($con, $slide_query);
        $slide = mysqli_fetch_assoc($result);

        echo json_encode($slide);
}
