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
        // $slide_picture = $_POST['slide_picture'];
        $slide_status = "Active";

        define('BACKUP_FOLDER', 'C:'.DIRECTORY_SEPARATOR.'xampp2'.DIRECTORY_SEPARATOR.'htdocs'.DIRECTORY_SEPARATOR.'images');

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

                header("Location: gc___manages-slides.php?ERROR");
                exit;
            }

            // Update the user's profile picture in the database
            $stmt = $con->prepare("INSERT INTO slides ( `slide_title`, `slide_picture`, `slide_status`) VALUES (?,?,?)");
            $stmt->bind_param("sss",$slide_title, $target_file, $slide_status);
            $stmt->execute();

            if ($con->affected_rows > 0) {
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
        }else{
            header("Location: gc___manages-slides.php?NOIMAGE");
            exit;
        }
    }
    
// edit slide
    else if (isset($_POST['edit_slide']) && isset($_GET['id'])) {
        $slide_id = $_GET['id'];
        $slide_title = $_POST['slide_edit_title'];
        // $slide_picture = $_POST['edit_slide_picture'];
        $slide_status = $_POST['slide_edit_status'];

        define('BACKUP_FOLDER', 'C:'.DIRECTORY_SEPARATOR.'xampp2'.DIRECTORY_SEPARATOR.'htdocs'.DIRECTORY_SEPARATOR.'images');

        if(isset($_FILES['slide_picture']) && is_uploaded_file($_FILES['slide_picture']['tmp_name'])){
            // Save the uploaded image file to a designated folder on the server
            $target_dir = BACKUP_FOLDER;
            $target_file = $target_dir . basename($_FILES["slide_picture"]["name"]);
            move_uploaded_file($_FILES["slide_picture"]["tmp_name"], $target_file);

            // Validate the uploaded file
            $image_info = getimagesize($target_file);
            if (!$image_info) {
                // Not an image file, delete the uploaded file and show an error message
                unlink($target_file);

                header("Location: gc___manages-slides.php?ERROR");
                exit;
            }

            // Update the user's profile picture in the database
            $stmt = $con->prepare("UPDATE slides SET slide_title = ? , slide_picture = ?, slide_status = ? WHERE id = ?");
            $stmt->bind_param("sssi",$slide_title, $target_file, $slide_status, $slide_id);
            $stmt->execute();

            if ($con->affected_rows > 0) {
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
        }else{
            // Update the user's profile picture in the database
            $stmt = $con->prepare("UPDATE slides SET slide_title = ? , slide_status = ? WHERE id = ?");
            $stmt->bind_param("ssi",$slide_title, $slide_status, $slide_id);
            $stmt->execute();

            if ($con->affected_rows > 0) {
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