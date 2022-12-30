<?php
session_start();

include_once("../connections/connection.php");

if (!isset($_SESSION['UserEmail'])) {

    echo "<script>window.open('../loginForm.php','_self')</script>";
} else {

    $con = connection();

    if (isset($_POST['add_staff'])) {

        $staff_id = $_POST['staff_id'];
        $first_name = $_POST['staff_first_name'];
        $middle_name = $_POST['staff_middle_name'];
        $last_name = $_POST['staff_last_name'];
        $address = $_POST['staff_address'];
        $contact = $_POST['staff_contact'];
        $department = $_POST['staff_department'];

        if($department == "Academics"){
            $dep_position = $_POST['staff_dep_position1'];
        }else if($department == "Administrative"){
            $dep_position = $_POST['staff_dep_position2'];
        }
        

        // $gender = $_POST['gender'];
        // $department = $_POST['department'];
        $email = strtolower(str_replace(' ', '', $last_name)) . "." . substr($staff_id, -6) . "@angeles.sti.edu.ph";
        $full_name = ucwords($first_name . " " . $last_name);
        $name_initial = explode(' ', $full_name);

        $initial = "";
        foreach ($name_initial as $n) {
            $initial .= $n[0];
        }

        $password = $initial . substr($staff_id, -6);
        $position = "Staff";
        $status = "Active";
        $role = "2";


        try{
            $add_staff = "INSERT INTO users (`id_number`, `last_name`, `first_name`, `middle_name`, `address`, `contact`, `department`, `dep_position`, `position`,`status`, `email`, `password`, `role`) 
            VALUES ('$staff_id','$last_name','$first_name','$middle_name','$address','$contact','$department','$dep_position', '$position','$status','$email','$password','$role')";
            $query_run = $con->query($add_staff) or die($con->error);
        } catch (Exception $e) {
        }
        if ($query_run) {
            // echo "Saved";
            $_SESSION['status'] = "Profile Added";
            $_SESSION['status_code'] = "success";
            header('Location: gc___all-staff.php');

            $current_date_time = date("Y-m-d H:i:s");
            $action_made = "Added a new staff [ ID = " . $staff_id . "] " . $first_name . " " . $last_name . " to the staff list";
            $IDNUMBER = "1001";
            $user_position = "Admin";
            $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
            $query_runs = $con->query($add_logs) or die($con->error);
        } else {
            // echo "Not saved";
            $_SESSION['status'] = "Profile Not Added: " . mysqli_error($con);
            $_SESSION['status_code'] = "error";
            header('Location: gc___all-staff.php');

            $current_date_time = date("Y-m-d H:i:s");
            $action_made = "Error: Attempted to add a new staff [ ID = " . $staff_id . "] " . $first_name . " " . $last_name . " to the staff list";
            $IDNUMBER = "1001";
            $user_position = "Admin";
            $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
            $query_runs = $con->query($add_logs) or die($con->error);
        }


    } else if (isset($_POST['edit_staff'])) {
        $staff_id = $_POST['edit_staff_id'];
        $first_name = $_POST['edit_staff_first_name'];
        $middle_name = $_POST['edit_staff_middle_name'];
        $last_name = $_POST['edit_staff_last_name'];
        $address = $_POST['edit_staff_address'];
        $contact = $_POST['edit_staff_contact'];
        $department = $_POST['edit_staff_department'];
        

        if($department == "Academics"){
            $dep_position = $_POST['edit_staff_positionAC'];
        }else if($department == "Administrative"){
            $dep_position = $_POST['edit_staff_positionAD'];
        }


        // $gender = $_POST['gender'];
        // $department = $_POST['department'];
        $email = strtoupper(str_replace(' ', '', $last_name)) . "." . substr($staff_id, -6) . "@angeles.sti.edu.ph";
        $full_name = ucwords($first_name . " " . $last_name);
        $name_initial = explode(' ', $full_name);

        $initial = "";
        foreach ($name_initial as $n) {
            $initial .= $n[0];
        }

        $password = $initial . substr($staff_id, -6);
        $position = "Staff";
        $status = "Active";
        $role = "2";

        $edit_staff = "UPDATE users SET last_name = '$last_name', first_name = '$first_name', middle_name = '$middle_name', address = '$address', contact = '$contact', department = '$department', dep_position = '$dep_position' WHERE id_number ='$staff_id'";

        $query_run = $con->query($edit_staff) or die($con->error);

        if ($query_run) {

            $_SESSION['status'] = "Profile Updated";
            $_SESSION['status_code'] = "success";
            header('Location: gc___all-staff.php');

            $current_date_time = date("Y-m-d H:i:s");
            $action_made = "Updated the details of staff [ ID = " . $staff_id . "] " . $first_name . " " . $last_name;
            $IDNUMBER = "1001";
            $user_position = "Admin";
            $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
            $query_runs = $con->query($add_logs) or die($con->error);
        } else {
            // echo "Not saved";
            $_SESSION['status'] = "Profile does not exists";
            $_SESSION['status_code'] = "error";
            header('Location: gc___all-staff.php');

            $current_date_time = date("Y-m-d H:i:s");
            $action_made = "Error: Attempted to update the details of staff [ ID = " . $staff_id . "] " . $first_name . " " . $last_name;
            $IDNUMBER = "1001";
            $user_position = "Admin";
            $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
            $query_runs = $con->query($add_logs) or die($con->error);
        }
    }
    
    
    
    else if (isset($_POST['delete_staff'])) {
        $staff_id = $_POST['delete_staff_id'];
        $first_name = $_POST['delete_staff_first_name'];
        $middle_name = $_POST['delete_staff_middle_name'];
        $last_name = $_POST['delete_staff_last_name'];
        $address = $_POST['delete_staff_address'];
        $contact = $_POST['delete_staff_contact'];
        $department = $_POST['delete_staff_department'];
        $dep_position = $_POST['delete_staff_position'];

        $position = "Staff";
        $status = "Active";
        $role = "2";

        $delete_staff = "DELETE FROM users WHERE id_number = $staff_id";
        $query_run = $con->query($delete_staff) or die($con->error);

        if ($query_run) {
            // echo "Saved";
            $_SESSION['status'] = "Staff Deleted Successfully";
            $_SESSION['status_code'] = "success";
            header('Location: gc___all-staff.php');

            $current_date_time = date("Y-m-d H:i:s");
            $action_made = "Deleted the staff [ ID = " . $staff_id . "] " . $first_name . " " . $last_name . " in the staff list";
            $IDNUMBER = "1001";
            $user_position = "Admin";
            $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
            $query_runs = $con->query($add_logs) or die($con->error);
        } else {
            // echo "Not saved";
            $_SESSION['status'] = "Staff is not deleted";
            $_SESSION['status_code'] = "error";
            header('Location: gc___all-staff.php');

            $current_date_time = date("Y-m-d H:i:s");
            $action_made = "Error: Attempt to delete the staff [ ID = " . $staff_id . "] " . $first_name . " " . $last_name . " in the staff list";
            $IDNUMBER = "1001";
            $user_position = "Admin";
            $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
            $query_runs = $con->query($add_logs) or die($con->error);
        }
    }


}