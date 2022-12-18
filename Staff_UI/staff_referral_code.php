<?php
	 session_start();
	 $connection = mysqli_connect('localhost', 'root' , '' , 'content');

	if(isset($_POST['submit_staff_referral']))    
	{
		$stud_lname = $_POST['stud_lname'];
		$stud_fname = $_POST['stud_fname'];
		$stud_level = $_POST['stud_level'];
		$stud_program = $_POST['stud_program'];
		$ref_source = $_POST['ref_source'];
		$ref_date = $_POST['ref_date'];
		$ref_nature = $_POST['ref_nature'];
		$ref_reason = $_POST['ref_reason'];
        $ref_act = $_POST['ref_act'];
		$ref_remark = $_POST['ref_remark'];

		$query = "INSERT INTO referral_tbl(STUD_LNAME, STUD_FNAME, STUD_LEVEL, STUD_PROGRAM , REF_SOURCE, REF_DATE, REF_NATURE, REF_REASON, REF_ACT, REF_REMARK) 
        VALUES('$stud_lname','$stud_fname','$stud_level', '$stud_program','$ref_source','$ref_date','$ref_nature','$ref_reason','$ref_act','$ref_remark')";
		$query_run = mysqli_query($connection, $query);

		if ($query_run) {
			$_SESSION['success'] = "added";
			header('Location:staff___set_referral.php');  
		}
		 else{
		 	$_SESSION['status'] = "failed";
			header('Location: staff___set_referral.php');
		 }

	}


?>