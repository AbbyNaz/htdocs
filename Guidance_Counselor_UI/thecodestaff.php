<?php
session_start();

include_once("../connections/connection.php");

if (!isset($_SESSION['UserEmail'])) { 

echo "<script>window.open('../loginForm.php','_self')</script>";

} else {

$con = connection();

//this is for registering the staff profile in the database
if (isset($_POST['add_staff'])) {

    $staff_id = $_POST['staff_id'];
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $department = $_POST['department'];
    $position = $_POST['position'];

    ($_POST['position'] != null) ? $position = $_POST['position'] : $position = null;
    // ($_POST['academic_position']) ? $position = $_POST['academic_position'] : $position = $_POST['admin_position'];

    $email = strtolower(str_replace(' ', '', $last_name)) . "." . substr($staff_id, -6) . "@angeles.sti.edu.ph";
    $full_name = ucwords($first_name . " " . $last_name);
    $name_initial = explode(' ', $full_name);

        $initial = "";
        foreach($name_initial as $n){
            $initial .= $n[0];
        }

    // $position = $_POST['academic_position'] || $_POST['admin_position'];
    $password = $initial . substr($staff_id, -6);
    $status = "Active";
    $role = "2";

    // $image = $_FILES['image']['name'];
    // $temp_name = $_FILES['image']['tmp_name'];
    // move_uploaded_file($temp_name, "img/student/$image");

    $add_staff = "INSERT INTO users (`id_number`, `last_name`, `first_name`, `middle_name`, `address`, `contact`, `department`, " .
        "`position`, `status`, `email`, `password`, `role`) " .
        "VALUES ('$staff_id','$last_name','$first_name','$middle_name','$address','$contact','$department', " .
        "'$position','$status','$email','$password','$role')";
    $query_run = $con->query($add_staff) or die($con->error);

    if ($query_run) {
        // echo "Saved";
        $_SESSION['status'] = "Profile Added";
        $_SESSION['status_code'] = "success";
        header('Location: gc___all-staff.php');
    } else {
        // echo "Not saved";
        $_SESSION['status'] = "Profile Not Added";
        $_SESSION['status_code'] = "error";
        header('Location: gc___all-staff.php');
    }
}
// else{
//     $staff_id = $_POST['edit_staff_id'];
//     $first_name = $_POST['edit_first_name'];
//     $middle_name = $_POST['edit_middle_name'];
//     $last_name = $_POST['edit_last_name'];
//     $address = $_POST['edit_address'];
//     $contact = $_POST['edit_contact'];
//     $department = $_POST['edit_select_department'];
//     $position = $_POST['edit_select_position'];
    
//     // $gender = $_POST['gender'];
//     // $department = $_POST['department'];
//     $email = strtoupper(str_replace(' ', '', $last_name)) . "." . substr($staff_id, -6) . "@angeles.sti.edu.ph";
//     $full_name = ucwords($first_name . " " . $last_name);
//     $name_initial = explode(' ', $full_name);

//         $initial = "";
//         foreach($name_initial as $n){
//             $initial .= $n[0];
//         }

//     $password = $initial . substr($staff_id, -6);
//     $position = "Staff";
//     $status = "Active";
//     $role = "2";

//     $edit_staff = "UPDATE users SET last_name = '$last_name', first_name = '$first_name', middle_name = '$middle_name', address = '$address', contact = '$contact', department = '$department', position = '$position' WHERE id_number ='$staff_id'";

//     $query_run = $con->query($edit_staff) or die($con->error);

//     if ($query_run) {
//         // echo "Saved";
//         $_SESSION['status'] = "Profile Updated";
//         $_SESSION['status_code'] = "success";
//         header('Location: gc___all-staff.php');
//     } else {
//         // echo "Not saved";
//         $_SESSION['status'] = "Profile does not exists";
//         $_SESSION['status_code'] = "error";
//         header('Location: gc___all-staff.php');
//     }
// }



if (isset($_POST['register_gc_staff-btn'])) {

    $Gcstaff_id = $_POST['gcstaff_id'];
    $Gcstaff_fname = $_POST['gcstaff_fname'];
    $Gcstaff_lname = $_POST['gcstaff_lname'];
    $Gcstaff_mname = $_POST['gcstaff_mname'];
    $Gcstaff_address = $_POST['gcstaff_address'];
    $Gcstaff_contact = $_POST['gcstaff_contact'];
    // $staff_position = $_POST['staff_position'];
    // $user_role = $_POST['usertype'];


    $query = "INSERT INTO users_tbl (GC_ID, GC_FNAME, GC_LNAME, GC_MNAME, GC_ADDRESS, GC_CONTACT)
    VALUES ('$Gcstaff_id','$Gcstaff_fname','$Gcstaff_lname', '$Gcstaff_mname', '$Gcstaff_address', '$Gcstaff_contact')";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        // echo "Saved";
        $_SESSION['status'] = "Profile Added";
        $_SESSION['status_code'] = "success";
        header('Location: gc___main-all-gc.php');
    } else {
        // echo "Not saved";
        $_SESSION['status'] = "Profile Not Added";
        $_SESSION['status_code'] = "error";
        header('Location: gc___main-all-gc.php');
    }
}
else{
    $staff_id = $_POST['edit_staff_id'];
    $first_name = $_POST['edit_first_name'];
    $middle_name = $_POST['edit_middle_name'];
    $last_name = $_POST['edit_last_name'];
    $address = $_POST['edit_address'];
    $contact = $_POST['edit_contact'];
    $department = $_POST['edit_select_department'];
    $position = $_POST['edit_select_position'];
    
    // $gender = $_POST['gender'];
    // $department = $_POST['department'];
    $email = strtoupper(str_replace(' ', '', $last_name)) . "." . substr($staff_id, -6) . "@angeles.sti.edu.ph";
    $full_name = ucwords($first_name . " " . $last_name);
    $name_initial = explode(' ', $full_name);

        $initial = "";
        foreach($name_initial as $n){
            $initial .= $n[0];
        }

    $password = $initial . substr($staff_id, -6);
    $position = "Staff";
    $status = "Active";
    $role = "2";

    $edit_staff = "UPDATE users SET last_name = '$last_name', first_name = '$first_name', middle_name = '$middle_name', address = '$address', contact = '$contact', department = '$department', position = '$position' WHERE id_number ='$staff_id'";

    $query_run = $con->query($edit_staff) or die($con->error);

    if ($query_run) {
        // echo "Saved";
        $_SESSION['status'] = "Profile Updated";
        $_SESSION['status_code'] = "success";
        header('Location: gc___all-staff.php');
    } else {
        // echo "Not saved";
        $_SESSION['status'] = "Profile does not exists";
        $_SESSION['status_code'] = "error";
        header('Location: gc___all-staff.php');
    }
}

        

}
?>