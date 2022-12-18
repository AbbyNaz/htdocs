<?php
    session_start();

    include_once("connections/connection.php");

    $con = connection();

    if (isset($_POST['addregister'])) {

        $sy = trim($_POST['sy']);
        $sem = trim($_POST['sem']);
        $quarter = trim($_POST['quarter']);
        $stud_id = trim($_POST['studnumber']);
        $last_name = trim($_POST['lname']);
        $first_name = trim($_POST['fname']);
        $middle_name = trim($_POST['mname']);
        $nickname = trim($_POST['nickname']);
        $nationality = trim($_POST['nationality']);
        $gender = trim($_POST['gender']);
        $civilstatus = trim($_POST['status']);
        $religion = trim($_POST['religion']);
        $dob = trim($_POST['dob']);

        $program = trim($_POST['programsection']);
        $level = trim($_POST['yearlevel']);
        $position = "Student";
        $status = "Active";
        $email = trim($_POST['username']);
        $password = trim($_POST['create']);
        $retype = trim($_POST['retype']);
        $role = "3";

        $mobile = trim($_POST['mobile']);
        $email1 = trim($_POST['email1']);
        $email2 = trim($_POST['email2']);
        $homenumber = trim($_POST['homenumber']);
        $present = trim($_POST['present']);
        $permanent = trim($_POST['permanent']);
        $provincial = trim($_POST['provincial']);
        $married_first = trim($_POST['married_first']);
        $married_last = trim($_POST['married_last']);
        $married_age = trim($_POST['married_age']);
        $work_status = trim($_POST['work_status']);
        $occupation = trim($_POST['occupation']);
        $married_contact = trim($_POST['married_contact']);

        $guardian_status =trim($_POST['guardian_status']);
        $guardian_name =trim($_POST['guardian_name']);
        $guardian_address =trim($_POST['guardian_address']);
        $guardian_contact =trim($_POST['guardian_contact']);
        $guardian_emergency =trim($_POST['guardian_emergency']);
        $guardian_emergencyothercontact =trim($_POST['guardian_emergencyothercontact']);

        $father_fullname = trim($_POST['father_fullname']);
        $father_age = trim($_POST['father_age']);
        $father_birthday = trim($_POST['father_birthday']);
        $father_nationality = trim($_POST['father_nationality']);
        $father_religion = trim($_POST['father_religion']);
        $father_educational = trim($_POST['father_educational']);
        $father_occupation = trim($_POST['father_occupation']);
        $father_contact = trim($_POST['father_contact']);
        $father_company = trim($_POST['father_company']);
        $father_income = trim($_POST['father_income']);

        $mother_fullname = trim($_POST['mother_fullname']);
        $mother_age = trim($_POST['mother_age']);
        $mother_birthday = trim($_POST['mother_birthday']);
        $mother_nationality = trim($_POST['mother_nationality']);
        $mother_religion = trim($_POST['mother_religion']);
        $mother_educational = trim($_POST['mother_educational']);
        $mother_occupation = trim($_POST['mother_occupation']);
        $mother_contact = trim($_POST['mother_contact']);
        $mother_company = trim($_POST['mother_company']);
        $mother_income = trim($_POST['mother_income']);

        $sibling_name_one = trim($_POST['sibling_name_one']);
        $sibling_age_one = trim($_POST['sibling_age_one']);
        $sibling_gender_one = trim($_POST['sibling_gender_one']);
        $sibling_occupation_one = trim($_POST['sibling_occupation_one']);
        $sibling_company_one = trim($_POST['sibling_company_one']);
        $sibling_name_two = trim($_POST['sibling_name_two']);
        $sibling_age_two = trim($_POST['sibling_age_two']);
        $sibling_gender_two = trim($_POST['sibling_gender_two']);
        $sibling_occupation_two = trim($_POST['sibling_occupation_two']);
        $sibling_company_two = trim($_POST['sibling_company_two']);
        $sibling_name_three = trim($_POST['sibling_name_three']);
        $sibling_age_three = trim($_POST['sibling_age_three']);
        $sibling_gender_three = trim($_POST['sibling_gender_three']);
        $sibling_occupation_three = trim($_POST['sibling_occupation_three']);
        $sibling_company_three = trim($_POST['sibling_company_three']);

        $sports = trim($_POST['sports']);
        $hobbies = trim($_POST['hobbies']);
        $talents = trim($_POST['talents']);
        $socio = trim($_POST['socio']);
        $school_organization = trim($_POST['school_organization']);

        $workexperience_name_one = trim($_POST['workexperience_name_one']);
        $workexperience_position_one = trim($_POST['workexperience_position_one']);
        $workexperience_duration_one = trim($_POST['workexperience_duration_one']);
        $workexperience_job_one = trim($_POST['workexperience_job_one']);
        $workexperience_name_two = trim($_POST['workexperience_name_two']);
        $workexperience_position_two = trim($_POST['workexperience_position_two']);
        $workexperience_duration_two = trim($_POST['workexperience_duration_two']);
        $workexperience_job_two = trim($_POST['workexperience_job_two']);
        $workexperience_name_three = trim($_POST['workexperience_name_three']);
        $workexperience_position_three = trim($_POST['workexperience_position_three']);
        $workexperience_duration_three = trim($_POST['workexperience_duration_three']);
        $workexperience_job_three = trim($_POST['workexperience_job_three']);


        if ($password == $retype) {
            $sql = "INSERT INTO inventory (SY, SEM, QUARTER, FIRST, MIDDLE, LAST, STUDNUMBER, YEARLEVEL, PROGRAMSECTION, NICKNAME, NATIONALITY, GENDER, CIVILSTATUS, RELIGION, DOB, MOBILE, EMAIL1, EMAIL2, HOMENUMBER, PRESENT, PERMANENT, PROVINCIAL, MARRIED_FIRST, MARRIED_LAST, SPOUSE_AGE, WORK_STATUS, OCCUPATION, MARRIED_CONTACT,  GUARDIAN_STATUS, GUARDIAN_NAME, GUARDIAN_ADDRESS, GUARDIAN_CONTACT, GUARDIAN_EMERGENCY, GUARDIAN_OTHERCONTACT, GUARDIAN_FATHERNAME, GUARDIAN_FATHERAGE, GUARDIAN_FATHERDOB, GUARDIAN_FATHERNATIONALITY, GUARDIAN_FATHERRELIGION, GUARDIAN_FATHEREDUCATIONAL, GUARDIAN_FATHEROCCUPATION, GUARDIAN_FATHERCONTACT, GUARDIAN_FATHERCOMPANY, GUARDIAN_FATHERINCOME, GUARDIAN_MOTHERNAME, GUARDIAN_MOTHERAGE, GUARDIAN_MOTHERDOB, GUARDIAN_MOTHERNATIONALITY, GUARDIAN_MOTHERRELIGION, GUARDIAN_MOTHEREDUCATIONAL, GUARDIAN_MOTHEROCCUPATION, GUARDIAN_MOTHERCONTACT, GUARDIAN_MOTHERCOMPANY, GUARDIAN_MOTHERINCOME, SO1_NAME, SO1_AGE, SO1_GENDER, SO1_PROGOCCUP, SO1_SCHCOMP, SO2_NAME, SO2_AGE, SO2_GENDER, SO2_PROGOCCUP, SO2_SCHCOMP, SO3_NAME, SO3_AGE, SO3_GENDER, SO3_PROGOCCUP, SO3_SCHCOMP, SPORTS, HOBBIES, TALENTS, SOCIO, SCHOOL_ORGANIZATION, WE1_COMPNAME, WE1_POSITION, WE1_DURATION, WE1_JOB, WE2_COMPNAME, WE2_POSITION, WE2_DURATION, WE2_JOB, WE3_COMPNAME, WE3_POSITION, WE3_DURATION, WE3_JOB) VALUES ('$sy','$sem','$quarter','$first_name','$middle_name','$last_name','$stud_id','$level','$program','$nickname','$nationality','$gender','$civilstatus','$religion','$dob','$mobile','$email1','$email2','$homenumber','$present','$permanent','$provincial','$married_first','$married_last','$married_age','$work_status','$occupation','$married_contact','$guardian_status','$guardian_name','$guardian_address','$guardian_contact','$guardian_emergency','$guardian_emergencyothercontact','$father_fullname','$father_age','$father_birthday','$father_nationality','$father_religion','$father_educational','$father_occupation','$father_contact','$father_company','$father_income','$mother_fullname','$mother_age','$mother_birthday','$mother_nationality','$mother_religion','$mother_educational','$mother_occupation','$mother_contact','$mother_company','$mother_income','$sibling_name_one','$sibling_age_one','$sibling_gender_one','$sibling_occupation_one','$sibling_company_one','$sibling_name_two','$sibling_age_two','$sibling_gender_two','$sibling_occupation_two','$sibling_company_two','$sibling_name_three','$sibling_age_three','$sibling_gender_three','$sibling_occupation_three','$sibling_company_three','$sports','$hobbies','$talents','$socio','$school_organization','$workexperience_name_one','$workexperience_position_one','$workexperience_duration_one','$workexperience_job_one','$workexperience_name_two','$workexperience_position_two','$workexperience_duration_two','$workexperience_job_two','$workexperience_name_three','$workexperience_position_three','$workexperience_duration_three','$workexperience_job_three')";
            $query = $con->query($sql) or die($con->error);

            $add_student = "INSERT INTO users (`id_number`, `last_name`, `first_name`, `middle_name`, `address`, `contact`, `program`, `level`, `position`, `status`, `email`, `password`, `role`) VALUES ('$stud_id','$last_name','$first_name','$middle_name','$present','$mobile','$program','$level','$position','$status','$email','$password','$role')";
            $query_run = $con->query($add_student) or die($con->error);

            if ($query_run) {
                ?>
                    <script>
                      window.alert('Student Added Successfully. Please proceed to login!');
                      window.location.href='homepage___index.php';
                   </script>
                <?php
            } else {
                $_SESSION['status'] = "Student Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: individual_inventory_form.php');
            }
        }
        else{
            ?>
                    <script>
                      window.alert('Password mismatched. Please try again!');
                      window.location.href='individual_inventory_form.php';
                   </script>
            <?php
        }
    }
?>

  <?php
    include('includes/homepage___scripts.php');
  ?>