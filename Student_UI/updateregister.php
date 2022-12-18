<?php
    session_start();

    include_once("../connections/connection.php");

    $con = connection();

    if (isset($_POST['updateregister'])) {

        $inventorycode = trim($_POST['inventorycode']);
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
        
        $sql = "UPDATE `inventory` SET `SY`='$sy',`SEM`='$sem',`QUARTER`='$quarter',`FIRST`='$first_name',`MIDDLE`='$middle_name',`LAST`='$last_name',`YEARLEVEL`='$level',`PROGRAMSECTION`='$program',`NICKNAME`='$nickname',`NATIONALITY`='$nationality',`GENDER`='$gender',`CIVILSTATUS`='$civilstatus',`RELIGION`='$religion',`DOB`='$dob',`MOBILE`='$mobile',`EMAIL1`='$email1',`EMAIL2`='$email2',`HOMENUMBER`='$homenumber',`PRESENT`='$present',`PERMANENT`='$permanent',`PROVINCIAL`='$provincial',`MARRIED_FIRST`='$married_first',`MARRIED_LAST`='$married_last',`SPOUSE_AGE`='$married_age',`WORK_STATUS`='$work_status',`OCCUPATION`='$occupation',`MARRIED_CONTACT`='$married_contact',`GUARDIAN_STATUS`='$guardian_status',`GUARDIAN_NAME`='$guardian_name',`GUARDIAN_ADDRESS`='$guardian_address',`GUARDIAN_CONTACT`='$guardian_contact',`GUARDIAN_EMERGENCY`='$guardian_emergency',`GUARDIAN_OTHERCONTACT`='$guardian_emergencyothercontact',`GUARDIAN_FATHERNAME`='father_fullname',`GUARDIAN_FATHERAGE`='$father_age',`GUARDIAN_FATHERDOB`='$father_birthday',`GUARDIAN_FATHERNATIONALITY`='$father_nationality',`GUARDIAN_FATHERRELIGION`='$father_religion',`GUARDIAN_FATHEREDUCATIONAL`='$father_educational',`GUARDIAN_FATHEROCCUPATION`='$father_occupation',`GUARDIAN_FATHERCONTACT`='$father_contact',`GUARDIAN_FATHERCOMPANY`='$father_company',`GUARDIAN_FATHERINCOME`='$father_income',`GUARDIAN_MOTHERNAME`='$mother_fullname',`GUARDIAN_MOTHERAGE`='$mother_age',`GUARDIAN_MOTHERDOB`='$mother_birthday',`GUARDIAN_MOTHERNATIONALITY`='$mother_nationality',`GUARDIAN_MOTHERRELIGION`='$mother_religion',`GUARDIAN_MOTHEREDUCATIONAL`='$mother_educational',`GUARDIAN_MOTHEROCCUPATION`='$mother_occupation',`GUARDIAN_MOTHERCONTACT`='$mother_contact',`GUARDIAN_MOTHERCOMPANY`='$mother_company',`GUARDIAN_MOTHERINCOME`='$mother_income',`SO1_NAME`='$sibling_name_one',`SO1_AGE`='$sibling_age_one',`SO1_GENDER`='$sibling_gender_one',`SO1_PROGOCCUP`='$sibling_occupation_one',`SO1_SCHCOMP`='$sibling_company_one',`SO2_NAME`='$sibling_name_two',`SO2_AGE`='$sibling_age_two',`SO2_GENDER`='$sibling_gender_two',`SO2_PROGOCCUP`='$sibling_occupation_two',`SO2_SCHCOMP`='$sibling_company_two',`SO3_NAME`='$sibling_name_three',`SO3_AGE`='$sibling_age_three',`SO3_GENDER`='$sibling_gender_three',`SO3_PROGOCCUP`='$sibling_occupation_three',`SO3_SCHCOMP`='$sibling_company_three',`SPORTS`='$sports',`HOBBIES`='$hobbies',`TALENTS`='$talents',`SOCIO`='$socio',`SCHOOL_ORGANIZATION`='$school_organization',`WE1_COMPNAME`='$workexperience_name_one',`WE1_POSITION`='$workexperience_position_one',`WE1_DURATION`='$workexperience_duration_one',`WE1_JOB`='$workexperience_job_one',`WE2_COMPNAME`='$workexperience_name_two',`WE2_POSITION`='$workexperience_position_two',`WE2_DURATION`='$workexperience_duration_two',`WE2_JOB`='$workexperience_job_two',`WE3_COMPNAME`='$workexperience_name_three',`WE3_POSITION`='$workexperience_position_three',`WE3_DURATION`='$workexperience_duration_three',`WE3_JOB`='$workexperience_job_three' WHERE ID = '$inventorycode'";
        $query = $con->query($sql) or die($con->error);

        if ($query) {
            ?>
                <script>
                    window.alert('Student Updated Successfully.');
                    window.location.href='../Student_UI/stud___profile.php';
                </script>
            <?php
        }
    }
?>