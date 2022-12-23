<?php

if (!isset($_SESSION)) {
    session_start();
}
 
include_once("connections/connection.php");

//for AutoBackUp
include_once("./Guidance_Counselor_UI/backup_function_AUTO.php");

$con = connection();

if (isset($_POST['login_btn'])) {
    $login_email = $_POST['user_email'];
    $login_password = $_POST['user_password'];
    $current_date_time = date("Y-m-d H:i:s");

    $query = "SELECT * FROM users WHERE email = '$login_email' AND password = '$login_password'";
    $query_run = mysqli_query($con, $query);
    $row=mysqli_fetch_array($query_run);

    if($row['role'] == 1){
        $_SESSION['UserEmail'] = $row['email'];
        $_SESSION['UserId'] = $row['user_id'];
        $_SESSION['UserRole'] = $row['role'];
        $_SESSION['UserPosition'] = $row['position'];
        $_SESSION['UserNumber'] = $row['id_number'];
       
        header('Location: ./Guidance_Counselor_UI/gc___dashboard.php');

        $action_made = "Logged in the system";
        $USERPOSITION = $_SESSION['UserPosition'];
        $IDNUMBER = $_SESSION['UserNumber'];
        $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER','$USERPOSITION', '$action_made', '$current_date_time')";
        $query_run = $con->query($add_logs) or die($con->error);

        // CheckAutoBackup
        $BackupQuery = "SELECT * FROM autobackupdetails";
        $QueryNow = $con->query($BackupQuery) or die ($con->error);
        $rowBackup = $QueryNow->fetch_assoc();

        if($rowBackup['UseAuto'] == 1){
            AutoBackUpDB($rowBackup['Days']);
        }

    }elseif($row["role"] == 2){
        $_SESSION['UserEmail'] = $row['email'];
        $_SESSION['UserId'] = $row['user_id'];
        $_SESSION['UserRole'] = $row['role'];
        $_SESSION['UserNumber'] = $row['id_number'];
        $_SESSION['UserPosition'] = $row['position'];


        header('Location: ./Staff_UI/staff___dashboard.php');

        $action_made = "Logged in the system";
        $USERPOSITION = $_SESSION['UserPosition'];
        $IDNUMBER = $_SESSION['UserNumber'];
        $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER','$USERPOSITION', '$action_made', '$current_date_time')";
        $query_run = $con->query($add_logs) or die($con->error);
    }elseif($row["role"] == 3){
        $_SESSION['Stud_id'] = $row['id_number'];

        if($row["inv_act"] == 0){
            $_SESSION['UserEmail'] = $row['email'];
            $_SESSION['UserId'] = $row['user_id'];
            $_SESSION['UserRole'] = $row['role'];
            

            header('Location: ./Student_UI/student_profile.php');

        } else {
            $_SESSION['UserEmail'] = $row['email'];
            $_SESSION['UserId'] = $row['user_id'];
            $_SESSION['UserRole'] = $row['role'];
            header('Location: ./Student_UI/stud___dashboard.php?'.$_SESSION['Stud_id'].'');
        }
        $action_made = "Logged in the system";
        $USERPOSITION = $_SESSION['UserPosition'];
        $IDNUMBER = $_SESSION['UserNumber'];
        $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER','$USERPOSITION', '$action_made', '$current_date_time')";
        $query_run = $con->query($add_logs) or die($con->error);

    }elseif($row["role"] == 4){
        $_SESSION['UserEmail'] = $row['email'];
        $_SESSION['UserId'] = $row['user_id'];
        $_SESSION['UserRole'] = $row['role'];
        $_SESSION['UserNumber'] = $row['id_number'];
        $_SESSION['UserPosition'] = $row['position'];
 

        header('Location: ./Guidance_Counselor_UI/gc___dashboard.php');

        $action_made = "Logged in the system";
        $IDNUMBER = $_SESSION['UserNumber'];
        $USERPOSITION = $_SESSION['UserPosition'];
        $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER','$USERPOSITION', '$action_made', '$current_date_time')";
        $query_run = $con->query($add_logs) or die($con->error);
    }
    
    else {
        $_SESSION['status'] = 'Email Address / Password is Invalid';
        header('Location: loginForm.php');
    }

    
}

if (isset($_POST['cancel_btn'])) {
    header('Location: homepage___index.php');
}
?>