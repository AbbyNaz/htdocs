<?php
	 session_start();
	 $connection = mysqli_connect("localhost", "root" , "" , "content");

	if(isset($_POST['submit']))    
	{
		$STUD_LNAME = $_POST['STUD_LNAME'];
		$STUD_FNAME = $_POST['STUD_FNAME'];
		$STUD_LEVEL = $_POST['STUD_LEVEL'];
		$STUD_PROGRAM = $_POST['STUD_PROGRAM'];
		$REF_SOURCE = $_POST['REF_SOURCE'];
		// $STUD_ID = $_POST['STUD_ID'];
		$REF_DATE = $_POST['REF_DATE'];
		$REF_NATURE = $_POST['REF_NATURE'];
		$REF_REASON = $_POST['REF_REASON'];
		$REF_ACT = $_POST['REF_ACT'];
		$REF_REMARK = $_POST['REF_REMARK'];

		$query = "INSERT INTO referral_tbl(STUD_LNAME, STUD_FNAME, STUD_LEVEL, STUD_PROGRAM , REF_SOURCE, REF_DATE, REF_NATURE, REF_REASON, REF_ACT, REF_REMARK) 
        VALUES('$STUD_LNAME','$STUD_FNAME','$STUD_LEVEL', '$STUD_PROGRAM','$REF_SOURCE','$STUD_ID','$REF_DATE','$REF_NATURE','$REF_REASON','$REF_ACT','$REF_REMARK')";
		$query_run = mysqli_query($connection, $query);

		if ($query_run) {
			$_SESSION['success'] = "added";
			header('Location: stud___set_referral.php');  
		}
		 else{
		 	$_SESSION['status'] = "failed";
			header('Location: stud___set_referral.php');
		 }

	}


?>