<?php
session_start();

include_once("../connections/connection.php");

if (!isset($_SESSION['UserEmail'])) {

    echo "<script>window.open('../loginForm.php','_self')</script>";
} else {

    $con = connection();

    if (isset($_POST['add_student'])) {

        $stud_id = $_POST['stud_id'];
        $first_name = $_POST['stud_first_name'];
        $middle_name = $_POST['stud_middle_name'];
        $last_name = $_POST['stud_last_name'];
        $address = $_POST['stud_address'];
        $contact = $_POST['stud_contact'];
        $program = $_POST['stud_program'];
        $level = $_POST['stud_level'];

        // $gender = $_POST['gender'];
        // $department = $_POST['department'];
        $email = strtolower(str_replace(' ', '', $last_name)) . "." . substr($stud_id, -6) . "@angeles.sti.edu.ph";
        $full_name = ucwords($first_name . " " . $last_name);
        $name_initial = explode(' ', $full_name);

        $initial = "";
        foreach ($name_initial as $n) {
            $initial .= $n[0];
        }

        $password = $initial . substr($stud_id, -6);
        $position = "Student";
        $status = "Active";
        $role = "3";

        try{
            $add_student = "INSERT INTO users (`id_number`, `last_name`, `first_name`, `middle_name`, `address`, `contact`, `program`, `level`, `position`, `status`, `email`, `password`, `role`) VALUES ('$stud_id','$last_name','$first_name','$middle_name','$address','$contact','$program','$level','$position','$status','$email','$password','$role')";
            $query_run = $con->query($add_student) or die($con->error);

        } catch (Exception $e) {
        }

        if ($query_run) {
            // echo "Saved";
            $_SESSION['status'] = "Profile Added";
            $_SESSION['status_code'] = "success";
            header('Location: gc___all-students.php');

            $current_date_time = date("Y-m-d H:i:s");
            $action_made = "Added a new student [ ID = " . $stud_id . "] " . $first_name . " " . $last_name . " to the students list";
            $IDNUMBER = "1001";
            $user_position = "Guidance";
            $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
            $query_runs = $con->query($add_logs) or die($con->error);
        } else {
            // echo "Not saved";
            // $error = mysqli_error($con);
            // echo "Error: " . $error;

            $_SESSION['status'] = "Profile Not Added: ". mysqli_error($con);
            $_SESSION['status_code'] = "error";
            header('Location: gc___all-students.php');

            $current_date_time = date("Y-m-d H:i:s");
            $action_made = "Error: Attempted to add a new student [ ID = " . $stud_id . "] " . $first_name . " " . $last_name . " to the students list";
            $IDNUMBER = "1001";
            $user_position = "Guidance";
            $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
            $query_runs = $con->query($add_logs) or die($con->error);
        }

    } else if (isset($_POST['edit_student'])) {
        $stud_id = $_POST['edit_stud_id'];
        $first_name = $_POST['edit_first_name'];
        $middle_name = $_POST['edit_middle_name'];
        $last_name = $_POST['edit_last_name'];
        $gender = $_POST['edit_gender'];
        $address = $_POST['edit_address'];
        $contact = $_POST['edit_contact'];
        $program = $_POST['edit_select_program'];
        $level = $_POST['edit_select_level'];

        // $gender = $_POST['gender'];
        // $department = $_POST['department'];
        $email = strtoupper(str_replace(' ', '', $last_name)) . "." . substr($stud_id, -6) . "@angeles.sti.edu.ph";
        $full_name = ucwords($first_name . " " . $last_name);
        $name_initial = explode(' ', $full_name);

        $initial = "";
        foreach ($name_initial as $n) {
            $initial .= $n[0];
        }

        $password = $initial . substr($stud_id, -6);
        $position = "Student";
        $status = "Active";
        $role = "3";

        $edit_student = "UPDATE users SET last_name = '$last_name', first_name = '$first_name', middle_name = '$middle_name', address = '$address', contact = '$contact', program = '$program', level = '$level' WHERE id_number ='$stud_id'";

        $query_run = $con->query($edit_student) or die($con->error);

        if ($query_run) {
            // echo "Saved";
            $_SESSION['status'] = "Profile Updated";
            $_SESSION['status_code'] = "success";
            header('Location: gc___all-students.php');

            $current_date_time = date("Y-m-d H:i:s");
            $action_made = "Updated the details of student [ ID = " . $stud_id . "] " . $first_name . " " . $last_name;
            $IDNUMBER = "1001";
            $user_position = "Guidance";
            $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
            $query_runs = $con->query($add_logs) or die($con->error);
        } else {
            // echo "Not saved";
            $_SESSION['status'] = "Profile does not exists";
            $_SESSION['status_code'] = "error";
            header('Location: gc___all-students.php');

            $current_date_time = date("Y-m-d H:i:s");
            $action_made = "Error: Attempted to update the details of student [ ID = " . $stud_id . "] " . $first_name . " " . $last_name;
            $IDNUMBER = "1001";
            $user_position = "Guidance";
            $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
            $query_runs = $con->query($add_logs) or die($con->error);
        }
    } else if (isset($_POST['delete_student'])) {
        $stud_id = $_POST['delete_stud_id'];
        $first_name = $_POST['delete_first_name'];
        $middle_name = $_POST['delete_middle_name'];
        $last_name = $_POST['delete_last_name'];
        $gender = $_POST['delete_gender'];
        $address = $_POST['delete_address'];
        $contact = $_POST['delete_contact'];
        $program = $_POST['delete_select_program'];
        $level = $_POST['delete_select_level'];

        $position = "Student";
        $status = "Active";
        $role = "3";

        $delete_student = "DELETE FROM users WHERE id_number = $stud_id";
        $query_run = $con->query($delete_student) or die($con->error);

        if ($query_run) {
            // echo "Saved";
            $_SESSION['status'] = "Student Deleted Successfully";
            $_SESSION['status_code'] = "success";
            header('Location: gc___all-students.php');

            $current_date_time = date("Y-m-d H:i:s");
            $action_made = "Deleted the student [ ID = " . $stud_id . "] " . $first_name . " " . $last_name . " in the students list";
            $IDNUMBER = "1001";
            $user_position = "Guidance";
            $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
            $query_runs = $con->query($add_logs) or die($con->error);
        } else {
            // echo "Not saved";
            $_SESSION['status'] = "Student is not deleted";
            $_SESSION['status_code'] = "error";
            header('Location: gc___all-students.php');

            $current_date_time = date("Y-m-d H:i:s");
            $action_made = "Error: Attempt to delete the student [ ID = " . $stud_id . "] " . $first_name . " " . $last_name . " in the students list";
            $IDNUMBER = "1001";
            $user_position = "Guidance";
            $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
            $query_runs = $con->query($add_logs) or die($con->error);
        }
    }
}