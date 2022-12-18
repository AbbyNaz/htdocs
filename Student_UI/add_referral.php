<?php 

session_start();

include_once("../connections/connection.php");

if(!isset($_SESSION['UserEmail'])){
        
    echo "<script>window.open('../loginForm.php','_self')</script>";
    
} else {

  	$con = connection();

	if (isset($_POST['add_refferal'])) {

		$UserId = $_SESSION['UserId'];
		$uid = $_POST['studentid'];

		$get_student = "SELECT * FROM users WHERE user_id = '$uid'";
		$find_id = $con->query($get_student) or die ($con->error);
		$stud_id = $find_id->fetch_assoc();

		if ($stud_id > 0) {
		$reffered_user = $stud_id['user_id'];
		$source = "Student";
		$reffered_by = $_POST['reffered_by'];
		$reffered_date = date("Y-m-d H:i:s");
		// $current_date_time = date("Y-m-d H:i:s");
		$nature = $_POST['nature'];
		$reason = $_POST['description']; 
		$actions = $_POST['actions'];
		$remarks = $_POST['remarks'];
		$status = "Pending";

			$mynature = '';
		foreach($nature as $item){
				// echo $item;
				$mynature = "$mynature $item,";

				$add_query2 = "INSERT INTO `refferals_nature` (`reffered_user2`,`source2`, `reffered_by2`, `reffered_date2`, `nature2`, `reason2`, `actions2`, `remarks2`, `ref_status2`) ".
				"VALUES ('$reffered_user','$source','$UserId','$reffered_date','$item','$reason','$actions','$remarks','$status')";
				// $query_run2 = mysqli_query($con, $add_query2);
				$con->query($add_query2) or die ($con->error);

		// header("Location: stud___set_referral.php");
		}

		$add_query = "INSERT INTO `refferals` (`reffered_user`,`source`, `reffered_by`, `reffered_date`, `nature`, `reason`, `actions`, `remarks`, `ref_status`) ".
		    "VALUES ('$reffered_user','$source','$UserId','$reffered_date','$mynature','$reason','$actions','$remarks','$status')";

			$con->query($add_query) or die ($con->error);
			$_SESSION['status'] = "Inserted Successfully";
			$_SESSION['status_code'] = "success";
			header("Location: stud___set_referral.php");

			$user_query = "SELECT id_number FROM users WHERE user_id = '$uid'";
			$query_run = mysqli_query($con, $user_query);
			$row = mysqli_fetch_array($query_run);
		
			$current_date_time = date("Y-m-d H:i:s");
			$action_made = "Added a new referral [ ID = " . $reffered_user. "] " . $first_name ." " . $last_name . " to the referral list";
		
			$_SESSION['UserNumber'];
		
			$IDNUMBER = $_SESSION['UserNumber'];

			$user_position = "Student";
		
			$add_logs = "INSERT INTO logs (`user_id`,`user`, `action_made`, `date_created`) VALUES ('$IDNUMBER','$user_position' , '$action_made', '$current_date_time')";
			$query_runs = $con->query($add_logs) or die($con->error);

		} else {
		    // echo "Student/Staff is not existed.";

			$_SESSION['status'] = "Error in Referring a Student or Staff";
				$_SESSION['status_code'] = "error";
				header("Location: stud___set_referral.php");
		}

	}

}