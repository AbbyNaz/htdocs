<?php
session_start();

include_once("../connections/connection.php");

if (!isset($_SESSION['UserEmail'])) {

    echo "<script>window.open('../loginForm.php','_self')</script>";
} else {

    $con = connection();


    if (isset($_POST['add_announcement'])) {

        $announcement_title = $_POST['announcement_title'];
        $announcement_description = $_POST['announcement_description'];
        $announcement_duration = $_POST['announcement_duration'];
        $announcement_status = "Active";
   
        $add_announcement = "INSERT INTO announcements ( `title`, `description`,`duration`, `status`) VALUES ('$announcement_title','$announcement_description','$announcement_duration','$announcement_status')";
        $query_run = $con->query($add_announcement) or die($con->error);


        if ($query_run) {
            // echo "Saved";
            $_SESSION['status'] = "Announcement Added";
            $_SESSION['status_code'] = "success";
            header('Location: gc___manages-announcements.php');

            $current_date_time = date("Y-m-d H:i:s");
            $action_made = "Added a new announcement";
            $IDNUMBER = "1001";
            $user_position = "Admin";
            $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
            $query_runs = $con->query($add_logs) or die($con->error);
        } else {
            // echo "Not saved";
            // $error = mysqli_error($con);
            // echo "Error: " . $error;

            $_SESSION['status'] = "Announcement Not Added";
            $_SESSION['status_code'] = "error";
            header('Location: gc___manages-announcements.php');

            $current_date_time = date("Y-m-d H:i:s");
            $action_made = "Error: Attempted to add a new announcement";
            $IDNUMBER = "1001";
            $user_position = "Admin";
            $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
            $query_runs = $con->query($add_logs) or die($con->error);
        }

    }else if (isset($_POST['edit_announcement']) && isset($_GET['id'])) {
        $announcement_id = $_GET['id'];
        $announcement_title = $_POST['edit_title'];
        $announcement_description = $_POST['edit_description'];
        $announcement_duration = $_POST['edit_duration'];
        $announcement_status = $_POST['edit_status'];

        // if inactive change to active the start time will change to the active date
        if ($announcement_status == 'Active') {
            $current_date = date("Y-m-d");
            $getAnnouncement = "SELECT * FROM announcements WHERE id = '$announcement_id'";
            $results =  mysqli_query($con, $getAnnouncement);
            $Announcement = mysqli_fetch_assoc($results);

            if(strcmp($Announcement['status'], 'Inactive') == 0){
                $update_announcement = "UPDATE announcements SET title = '$announcement_title' , description = '$announcement_description',
                                duration = '$announcement_duration', status = '$announcement_status', creation_date = '$current_date' WHERE id = '$announcement_id'";
                $query_runs = $con->query($update_announcement) or die($con->error);

            }else{
                $update_announcement = "UPDATE announcements SET title = '$announcement_title' , description = '$announcement_description', 
                                duration = '$announcement_duration', status = '$announcement_status' WHERE id = '$announcement_id'";
                $query_runs = $con->query($update_announcement) or die($con->error);
            }
        }else{
            $update_announcement = "UPDATE announcements SET title = '$announcement_title' , description = '$announcement_description', 
                                duration = '$announcement_duration', status = '$announcement_status' WHERE id = '$announcement_id'";
            $query_runs = $con->query($update_announcement) or die($con->error);
        }
        
        

        if ($query_runs) {
            // echo "Saved";
            $_SESSION['status'] = "Announcement Updated";
            $_SESSION['status_code'] = "success";
            header('Location: gc___manages-announcements.php');

            $current_date_time = date("Y-m-d H:i:s");
            $action_made = "Updated an announcement";
            $IDNUMBER = "1001";
            $user_position = "Admin";
            $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
            $query_runs = $con->query($add_logs) or die($con->error);
        } else {
            // echo "Not saved";
            // $error = mysqli_error($con);
            // echo "Error: " . $error;

            $_SESSION['status'] = "Announcement Not Updated";
            $_SESSION['status_code'] = "error";
            header('Location: gc___manages-announcements.php');

            $current_date_time = date("Y-m-d H:i:s");
            $action_made = "Error: Attempted to update an announcement";
            $IDNUMBER = "1001";
            $user_position = "Admin";
            $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
            $query_runs = $con->query($add_logs) or die($con->error);
        }


    }else if (isset($_POST['delete_announcement'])) {

        $announcement_id = $_GET['id'];
        $announcement_title = $_POST['delete_title'];
        $announcement_description = $_POST['delete_description'];
        $announcement_status = $_POST['delete_status'];
   
        $delete_announcement = "DELETE FROM announcements WHERE ID = $announcement_id";
        $query_run = $con->query($delete_announcement) or die($con->error);


        if ($query_run) {
            // echo "Saved";
            $_SESSION['status'] = "Announcement Deleted";
            $_SESSION['status_code'] = "success";
            header('Location: gc___manages-announcements.php');

            $current_date_time = date("Y-m-d H:i:s");
            $action_made = "Deleted an announcement";
            $IDNUMBER = "1001";
            $user_position = "Admin";
            $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
            $query_runs = $con->query($add_logs) or die($con->error);
        } else {
            // echo "Not saved";
            // $error = mysqli_error($con);
            // echo "Error: " . $error;

            $_SESSION['status'] = "Announcement Not Deleted";
            $_SESSION['status_code'] = "error";
            header('Location: gc___manages-announcements.php');

            $current_date_time = date("Y-m-d H:i:s");
            $action_made = "Error: Attempted to delete an announcement";
            $IDNUMBER = "1001";
            $user_position = "Admin";
            $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
            $query_runs = $con->query($add_logs) or die($con->error);
        }
    }



























}