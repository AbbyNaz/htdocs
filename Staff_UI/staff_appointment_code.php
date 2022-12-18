<?php
	 session_start();
	 $connection = mysqli_connect("localhost", "root" , "" , "content");

	if(isset($_POST['submit_staff_appointment']))    
	{
		$app_subj = $_POST['app_subj'];
		$app_reason = $_POST['app_reason'];
		$app_concern = $_POST['app_concern'];
		$app_date = $_POST['app_date'];
		$app_time = $_POST['app_time'];
		$app_type = $_POST['app_type'];
		$app_link = $_POST['app_link'];
		$app_status = $_POST['app_status'];
		$query = "INSERT INTO appointment_tbl(APP_SUBJ, APP_REASON, APP_CONCERN,APP_DATE,APP_TIME,APP_TYPE,APP_LINK,APP_STATUS) 
        VALUES('$app_subj','$app_reason', '$app_concern','$app_date','$app_date','$app_time','$app_type','$app_link','$app_status')";
		$query_run = mysqli_query($connection, $query);

		if ($query_run) {
			$_SESSION['success'] = "added";
			header('Location:staff___set_appointment.php');  
		}
		 else{ 
		 	$_SESSION['status'] = "failed";
			header('Location: staff___set_appointment.php');
		 }

	}
?>