<?php
session_start();

include_once("../connections/connection.php");

if (!isset($_SESSION['UserEmail'])) {

    echo "<script>window.open('../loginForm.php','_self')</script>";
} else {

    $con = connection();

// adding slide

    if (isset($_POST['add_slide'])) {

        $slide_title = $_POST['slide_title'];
        $slide_picture = $_POST['slide_picture'];
        $slide_status = "Active";
        $slide_date = date("Y-m-d");
   
        $add_slide = "INSERT INTO slides ( `slide_title`, `slide_picture`, `slide_status`, `slide_date`) VALUES ('$slide_title','$slide_picture','$slide_status','$slide_date')";
        $query_run = $con->query($add_slide) or die($con->error);

        if ($query_run) {
            // echo "Saved";
            $_SESSION['status'] = "Slide Added";
            $_SESSION['status_code'] = "success";
            header('Location: gc___manages-slides.php');

            $current_date_time = date("Y-m-d H:i:s");
            $action_made = "Added a new slide";
            $IDNUMBER = "1001";
            $user_position = "Admin";
            $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
            $query_runs = $con->query($add_logs) or die($con->error);
        } else {

            $_SESSION['status'] = "Slide Not Added";
            $_SESSION['status_code'] = "error";
            header('Location: gc___manages-slides.php');

            $current_date_time = date("Y-m-d H:i:s");
            $action_made = "Error: Attempted to add a new slide";
            $IDNUMBER = "1001";
            $user_position = "Admin";
            $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
            $query_runs = $con->query($add_logs) or die($con->error);
        }

    }
    
// edit slide
    else if (isset($_POST['edit_slide']) && isset($_GET['id'])) {
        $slide_id = $_GET['id'];
        $slide_title = $_POST['edit_slide_title'];
        $slide_picture = $_POST['edit_slide_picture'];
        $slide_status = $_POST['edit_slide_status'];

        // if inactive change to active the start time will change to the active date
        if ($slide_status == 'Active') {
            $current_date = date("Y-m-d");
            $getSlide = "SELECT * FROM slides WHERE id = '$slide_id'";
            $results =  mysqli_query($con, $getSlide);
            $Slide = mysqli_fetch_assoc($results);

            if(strcmp($Slide['status'], 'Inactive') == 0){
                $update_slide = "UPDATE slides SET slide_title = '$slide_title' , slide_picture = '$slide_picture',
                                slide_status = '$slide_status', creation_date = '$current_date' WHERE id = '$slide_id'";
                $query_runs = $con->query($update_slide) or die($con->error);

            }else{
                $update_slide = "UPDATE slides SET slide_title = '$slide_title' , slide_picture = '$slide_picture', 
                                slide_status = '$slide_status' WHERE id = '$slide_id'";
                $query_runs = $con->query($update_slide) or die($con->error);
            }
        }else{
            $update_slide = "UPDATE slides SET slide_title = '$slide_title' , slide_picture = '$slide_picture', 
                                 slide_status = '$slide_status' WHERE id = '$slide_id'";
            $query_runs = $con->query($update_slide) or die($con->error);
        }
        
        

        if ($query_runs) {

            $_SESSION['status'] = "Slide Updated";
            $_SESSION['status_code'] = "success";
            header('Location: gc___manages-slides.php');

            $current_date_time = date("Y-m-d H:i:s");
            $action_made = "Updated a slide";
            $IDNUMBER = "1001";
            $user_position = "Admin";
            $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
            $query_runs = $con->query($add_logs) or die($con->error);
        } else {

            $_SESSION['status'] = "Slide Not Updated";
            $_SESSION['status_code'] = "error";
            header('Location: gc___manages-slides.php');

            $current_date_time = date("Y-m-d H:i:s");
            $action_made = "Error: Attempted to update a slide";
            $IDNUMBER = "1001";
            $user_position = "Admin";
            $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
            $query_runs = $con->query($add_logs) or die($con->error);
        }




// delete slide
    }else if (isset($_POST['delete_slide'])) {

        $slide_id = $_GET['id'];
        $slide_title = $_POST['delete_slide_title'];
        $slide_picture = $_POST['delete_slide_picture'];
        $slide_status = $_POST['delete_slide_status'];
   
        $delete_slide = "DELETE FROM slides WHERE id = $slide_id";
        $query_run = $con->query($delete_slide) or die($con->error);


        if ($query_run) {

            $_SESSION['status'] = "Slide Deleted";
            $_SESSION['status_code'] = "success";
            header('Location: gc___manages-slides.php');

            $current_date_time = date("Y-m-d H:i:s");
            $action_made = "Deleted a Slide";
            $IDNUMBER = "1001";
            $user_position = "Admin";
            $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
            $query_runs = $con->query($add_logs) or die($con->error);
        } else {

            $_SESSION['status'] = "Slide Not Deleted";
            $_SESSION['status_code'] = "error";
            header('Location: gc___manages-slides.php');

            $current_date_time = date("Y-m-d H:i:s");
            $action_made = "Error: Attempted to delete a slide";
            $IDNUMBER = "1001";
            $user_position = "Admin";
            $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
            $query_runs = $con->query($add_logs) or die($con->error);
        }
    }


}