<?php

session_start();
include_once("connections/connection.php");

if (isset($_SESSION['UserEmail'])) {
    $con = connection();

    $user_query = "SELECT id_number FROM users WHERE user_id = '$user_id'";
    $query_run = mysqli_query($con, $user_query);
    $row = mysqli_fetch_array($query_run);

    $current_date_time = date("Y-m-d H:i:s");
    $action_made = "Logged out";

    $_SESSION['UserNumber'];
    $_SESSION['UserPosition'];

    $IDNUMBER = $_SESSION['UserNumber'];
    $USERPOSITION = $_SESSION['UserPosition'];

    $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER','$USERPOSITION', '$action_made', '$current_date_time')";
    $query_runs = $con->query($add_logs) or die($con->error);

    unset($_SESSION['UserEmail']);
    unset($_SESSION['UserId']);
    unset($_SESSION['UserRole']);

    echo header("Location: homepage___index.php");
}

?>
