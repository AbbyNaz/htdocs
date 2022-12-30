<?php

session_start();

include_once("../connections/connection.php");

if (!isset($_SESSION['UserEmail'])) {

    echo "<script>window.open('../loginForm.php','_self')</script>";
} else {

    $con = connection();

    if ($_SESSION['UserId']) {
        $id = $_SESSION['UserId'];
        $query = "SELECT * FROM users WHERE user_id = '$id'";
        $get_user = $con->query($query) or die($con->error);
        $row = $get_user->fetch_assoc();
    }

    // $app_history_query = "SELECT * FROM appointment_history LEFT JOIN appointments ON appointment_history.app_id = appointments.id WHERE appointments.ref_id = 12";
    $app_query = "SELECT * FROM appointment_history JOIN appointments ON appointment_history.app_id = appointments.id JOIN refferals ON refferals.ref_id = appointments.ref_id WHERE refferals.reffered_user = '$id'";
    $app_con = $con->query($app_query) or die($con->error);
    $app_row = $app_con->fetch_assoc();

    if ($app_row) {
        $referrer_id = $app_row['reffered_by'];
        $info = $app_row['info'];
        $date_accomplished = $app_row['date_accomplished'];
        $new_date = date("D M d, Y", strtotime($date_accomplished));

        $user_query = "SELECT * FROM users WHERE user_id = '$referrer_id'";
        $user_con = $con->query($user_query) or die($con->error);
        $user_row = $user_con->fetch_assoc();
    }


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

        $created_individual_date = date("Y-m-d H:i:s");


        $sql = "INSERT INTO inventory (SY, SEM, QUARTER, FIRST, MIDDLE, LAST, STUDNUMBER, YEARLEVEL, PROGRAMSECTION, NICKNAME, NATIONALITY, GENDER, CIVILSTATUS, RELIGION, DOB, MOBILE, EMAIL1, EMAIL2, HOMENUMBER, PRESENT, PERMANENT, PROVINCIAL, MARRIED_FIRST, MARRIED_LAST, SPOUSE_AGE, WORK_STATUS, OCCUPATION, MARRIED_CONTACT,  GUARDIAN_STATUS, GUARDIAN_NAME, GUARDIAN_ADDRESS, GUARDIAN_CONTACT, GUARDIAN_EMERGENCY, GUARDIAN_OTHERCONTACT, GUARDIAN_FATHERNAME, GUARDIAN_FATHERAGE, GUARDIAN_FATHERDOB, GUARDIAN_FATHERNATIONALITY, GUARDIAN_FATHERRELIGION, GUARDIAN_FATHEREDUCATIONAL, GUARDIAN_FATHEROCCUPATION, GUARDIAN_FATHERCONTACT, GUARDIAN_FATHERCOMPANY, GUARDIAN_FATHERINCOME, GUARDIAN_MOTHERNAME, GUARDIAN_MOTHERAGE, GUARDIAN_MOTHERDOB, GUARDIAN_MOTHERNATIONALITY, GUARDIAN_MOTHERRELIGION, GUARDIAN_MOTHEREDUCATIONAL, GUARDIAN_MOTHEROCCUPATION, GUARDIAN_MOTHERCONTACT, GUARDIAN_MOTHERCOMPANY, GUARDIAN_MOTHERINCOME, SO1_NAME, SO1_AGE, SO1_GENDER, SO1_PROGOCCUP, SO1_SCHCOMP, SO2_NAME, SO2_AGE, SO2_GENDER, SO2_PROGOCCUP, SO2_SCHCOMP, SO3_NAME, SO3_AGE, SO3_GENDER, SO3_PROGOCCUP, SO3_SCHCOMP, SPORTS, HOBBIES, TALENTS, SOCIO, SCHOOL_ORGANIZATION, WE1_COMPNAME, WE1_POSITION, WE1_DURATION, WE1_JOB, WE2_COMPNAME, WE2_POSITION, WE2_DURATION, WE2_JOB, WE3_COMPNAME, WE3_POSITION, WE3_DURATION, WE3_JOB, DATE_INCREATED) VALUES ('$sy','$sem','$quarter','$first_name','$middle_name','$last_name','$stud_id','$level','$program','$nickname','$nationality','$gender','$civilstatus','$religion','$dob','$mobile','$email1','$email2','$homenumber','$present','$permanent','$provincial','$married_first','$married_last','$married_age','$work_status','$occupation','$married_contact','$guardian_status','$guardian_name','$guardian_address','$guardian_contact','$guardian_emergency','$guardian_emergencyothercontact','$father_fullname','$father_age','$father_birthday','$father_nationality','$father_religion','$father_educational','$father_occupation','$father_contact','$father_company','$father_income','$mother_fullname','$mother_age','$mother_birthday','$mother_nationality','$mother_religion','$mother_educational','$mother_occupation','$mother_contact','$mother_company','$mother_income','$sibling_name_one','$sibling_age_one','$sibling_gender_one','$sibling_occupation_one','$sibling_company_one','$sibling_name_two','$sibling_age_two','$sibling_gender_two','$sibling_occupation_two','$sibling_company_two','$sibling_name_three','$sibling_age_three','$sibling_gender_three','$sibling_occupation_three','$sibling_company_three','$sports','$hobbies','$talents','$socio','$school_organization','$workexperience_name_one','$workexperience_position_one','$workexperience_duration_one','$workexperience_job_one','$workexperience_name_two','$workexperience_position_two','$workexperience_duration_two','$workexperience_job_two','$workexperience_name_three','$workexperience_position_three','$workexperience_duration_three','$workexperience_job_three','$created_individual_date')";
            $query = $con->query($sql) or die($con->error);

            $upt="UPDATE users SET inv_act= 1 WHERE user_id='$id'";
        
            $query2 = $con->query($upt) or die($con->error);

            if ($query) {

                $_SESSION['status'] = "Individual Inventory Added";
                $_SESSION['status_code'] = "success";
                header('Location: stud___profile.php');

                $current_date_time = date("Y-m-d H:i:s");
                $action_made = "Individual Inventory Added by [ ID = " . $stud_id. "] " . $first_name ." " . $last_name ;
                $stud_id = $_POST['studnumber'];
                $add_logs = "INSERT INTO logs (`user_id`, `action_made`, `date_created`) VALUES ('$stud_id', '$action_made', '$current_date_time')";
                $query_runs = $con->query($add_logs) or die($con->error);



                ?>
                    <!-- <script>
                      window.alert('Student Added Successfully. Thank you for filling up the form of inventory!');
                      window.location.href='stud___dashboard.php';


                        $_SESSION['status'] = "Individual Inventory Added";
                        $_SESSION['status_code'] = "success";
                        header('Location: gc___all-profile.php');

                        $current_date_time = date("Y-m-d H:i:s");
                        $action_made = "Individual Inventory Added by [ ID = " . $stud_id. "] " . $first_name ." " . $last_name . ;
                        $stud_id = $_POST['studnumber'];
                        $add_logs = "INSERT INTO logs (`user_id`, `action_made`, `date_created`) VALUES ('$stud_id', '$action_made', '$current_date_time')";
                        $query_runs = $con->query($add_logs) or die($con->error);
                   </script> -->
                <?php
            }
    }

?>

    <?php
    include('includes/stud___header.php');
    ?>
    <style type="text/css">
          * {
        box-sizing: border-box;
    }

    /* #inventory-form-container 
    {
        
    } */

    .container {
        position: relative;
        max-width: 900px;
        width: 100%;
        border-radius: 6px;
        padding: 30px;
        margin: 0 15px;
        background-color: #fff;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

    .container header {
        position: relative;
        font-size: 20px;
        font-weight: 600;
        color: #333;
    }

    .container header::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: -2px;
        height: 3px;
        width: 27px;
        border-radius: 8px;
        background-color: #4070f4;
    }

    .container form {
        position: relative;
        margin-top: 16px;
        /* min-height: 2850px; */
        background-color: #fff;
        overflow: hidden;
    }

    .container form .form {
        /* position: absolute; */
        background-color: #fff;
        transition: 0.3s ease;
    }

    .container form .form.second {
        opacity: 0;
        pointer-events: none;
        transform: translateX(100%);
    }

    form.secActive .form.second {
        opacity: 1;
        pointer-events: auto;
        transform: translateX(0);
    }

    form.secActive .form.first {
        opacity: 0;
        pointer-events: none;
        transform: translateX(-100%);
    }

    .container form .title {
        display: block;
        margin-bottom: 8px;
        font-size: 16px;
        font-weight: 500;
        margin: 14px 0;
        color: rgb(142, 32, 32);
    }

    .container form .fields {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    form .fields .input-field {
        display: flex;
        width: calc(100% / 3 - 15px);
        flex-direction: column;
        margin: 4px 0;
    }

    .input-field label {
        font-size: 12px;
        font-weight: 500;
        color: #2e2e2e;
    }

    .input-field input,
    select {
        outline: none;
        font-size: 14px;
        font-weight: 400;
        color: #333;
        border-radius: 5px;
        border: 1px solid #aaa;
        padding: 0 15px;
        height: 42px;
        margin: 8px 0;
    }

    .input-field input :focus,
    .input-field select:focus {
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.13);
    }

    .input-field select,
    .input-field input[type="date"] {
        color: #707070;
    }

    .input-field input[type="date"]:valid {
        color: #333;
    }

    .container form button,
    .backBtn {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 45px;
        max-width: 200px;
        width: 100%;
        border: none;
        outline: none;
        color: #fff;
        border-radius: 5px;
        margin: 25px 0;
        background-color: #4070f4;
        transition: all 0.3s linear;
        cursor: pointer;
    }
    .marker{
        position: absolute;
        top: calc(50% - 6px);
        right: 24px;
    }
    .marker:before, .marker:after{
        content: '';
        position: absolute;
        height: 12px;
        width: 2px;
        top: 0;
        left: 0;
        background-color: #313233;
        transform: rotate(90deg);
    }

    .container form .btnText {
        font-size: 14px;
        font-weight: 400;
    }

    form button:hover {
        background-color: #265df2;
    }

    form button i,
    form .backBtn i {
        margin: 0 6px;
    }

    form .backBtn i {
        transform: rotate(180deg);
    }

    form .buttons {
        display: flex;
        align-items: center;
    }

    form .buttons button,
    .backBtn {
        margin-right: 14px;
    }

    fieldset {
        padding: 0 15px 10px 15px;
        border-width: 4px;
        border-radius: 7px;
        border-color: grey;
    }

    legend {
        padding: 5px;
    }

    #q1-textarea,
    #q2-textarea,
    #q3-textarea,
    #q4-textarea,
    #q5-textarea {
        display: none;
    }

    textarea {
        resize: none;
        border: rgb(171, 170, 170) 2px solid;
        padding: 10px;
    }

    fieldset.health fieldset,
    fieldset.problems fieldset {
        padding: 10px 15px 10px 15px;
        margin-bottom: 15px;
        border-width: 2px;
        border-radius: 7px;
        border-color: grey;
    }

    fieldset.problems fieldset.options div,
    fieldset.problems fieldset.relationships div {
        margin-top: 20px;
    }

    fieldset.problems fieldset.options label,
    fieldset.problems fieldset.relationships label {
        margin-left: 10px;
        margin-bottom: 2px;
    }



    /* =============================TABLESTYLES===============================*/

    .tbl-style {
        border-style: solid;
        border-width: 0px;
        border-radius: 5px;
    }

    .table_Header {
        text-align: center;
        border-style: solid;
        border-width: 1px;
        font-size: 12px;
        font-weight: 500;
        color: #2e2e2e;
        border-radius: 5px;
        border: 1px solid #aaa;
        padding: 0 15px;
        height: 42px;
        margin: 8px 0;
    }

    .table_Contents {
        border-style: solid;
        border-width: 1px;
        font-size: 12px;
        font-weight: 500;
        color: #2e2e2e;
        border-radius: 5px;
        border: 1px solid #aaa;
        padding: 0 15px;
        height: 42px;
        margin: 8px 0;
    }

    .table_inputbox1 {
        size: 50;
        background-color: transparent;
        outline: none;
        width: 200px;
    }

    .accordion {
        position: relative;
        margin: 0 auto;
        border-radius: 8px;
        overflow: hidden; 
    }

    .accordion-item {
        position: relative;
        background-color: #FFFFFF;
        /* background-color: red; */
        border-bottom: 2px solid #eaeaea;
    }

    .accordion-item:before {
        content: '';
        position: absolute;
        height: 2px;
        width: 0;
        background: linear-gradient(90deg, #fd79a8, #74b9ff);
        top: 48px;
        left: 0;
        transition: all linear 0.5s;
    }

    .accordion-item[open]:before{
        width: 100%;
    }

    .accordion-item summary {
        cursor: pointer;
        position: relative;
        height: 48px;
        padding: 12px 24px;
        transition: all linear 0.5s;
    }

    .accordion-item[open] summary{
        padding: 12px 32px;
    }

    .accordion-item summary::marker {
        font-size: 0;
    }

    .marker {
        position: absolute;
        top: calc(50% - 6px);
        right: 24px;
    }

    .marker:before, .marker:after {
        content: '';
        position: absolute;
        height: 12px;
        width: 2px;
        top: 0;
        left: 0;
        background-color: #313233;
        transform: rotate(90deg);
        transition: all linear 0.5s;
    }

    .accordion-item:not([open]) .marker:after {
        transform: rotate(0deg);
    }

    .accordion-content{
        font-size: 14px;
        /* height: 0; */
        background-color: #dfe6e9;
        transition: all linear 0.5s;
        color: red;
    }

    .accordion-content p {
        padding: 12px 24px;
    }

    .accordion-item:not[open] .accordion-content {
        height: 86px;
        transition: all linear 0.5s;
    }
    
    

    @media (max-width: 750px) {
        .container form {
            overflow-y: scroll;
        }

        .container form::-webkit-scrollbar {
            display: none;
        }

        form .fields .input-field {
            width: calc(100% / 2 - 15px);
        }
    }

    @media (max-width: 550px) {
        form .fields .input-field {
            width: 100%;
        }
    }
    </style>

    <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div id="RESET_PASSWORD" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header header-color-modal bg-color-1">
                        <h4 class="modal-title">Reset Password</h4>
                        <div class="modal-close-area modal-close-df">
                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                        </div>
                    </div>

                    <form action="reset_password.php?id=<?= $id ?>" method="POST">
                        <div class="modal-body">
                            <div class="form-group-inner">
                                <div class="row">
                                <p style="font-size: 15px">Are you sure do you want to reset <span style="font-weight: bold"><?= $row['email'] ?></span>'s password?</p>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
                            <button type="submit" name="reset_button" class="btn btn-primary btn-md">Confirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->

    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list single-page-breadcome">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcome-heading">

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="breadcome-menu">
                                    <li><a href="stud___dashboard.php">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Student Profile</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="profile-info-inner">
                        <div class="profile-img">
                            <img src="img/profile/1.jpg" alt="" />
                        </div>
                        <div class="profile-details-hr">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr">
                                        <p><b>Student ID</b><br /> <?= $row['id_number'] ?></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                        <p><b>Full Name </b><br /> <?= $row['first_name'] ?> <?= $row['last_name'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr">
                                        <p><b>Program</b><br /> <?= $row['program'] ?></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                        <p><b>Level</b><br /> <?= $row['level'] ?></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12"> 
                    <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#INDIVIDUAL_INVENTORY"><small>Inventory Form</small></a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="INDIVIDUAL_INVENTORY">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row">
                                                <div class="col-lg-12">

                                                     <!-- INDIVIDUAL INVENTORY FORM -->
                                                <div id="inventory-form-cointainer">
                                                    <div class="container">
                                                        <header>Individual Inventory Form</header>
                                                        <form action="#" method="POST" id="student-form">
                                                            <div class="form first">
                                                                <div class="accordion">
                                                                    <!-- PERSONAL DETAILS -->
                                                                    <details class="accordion-item">
                                                                        <summary>School details <span class="marker"></span></summary>
                                                                        <div class="accordion-content">
                                                                            <div class="fields" style="margin-left: 20px;">
                                                                                <div class="input-field">
                                                                                    <label>School Year (S.Y.)</label>
                                                                                    <select id="date-dropdown" name="sy" required></select>
                                                                                </div>

                                                                                <div class="input-field">
                                                                                    <label>Semester</label>
                                                                                    <select name="sem" required>
                                                                                        <option disabled>Select Semester</option>
                                                                                        <option selected>1st semester</option>
                                                                                        <option>2nd semester</option>
                                                                                        <option>Summer</option>
                                                                                    </select>
                                                                                </div>

                                                                                <div class="input-field">
                                                                                    <label>Picture</label>
                                                                                    <input type="file" style="padding-top: 8px;" id="profile" name="profile"></select>
                                                                                </div>

                                                                                <div>
                                                                                    <fieldset>
                                                                                        <legend><span class="title">Personal Details</span></legend>
                                                                                        <div class="details_personal">
                                                                                            <div class="fields">
                                                                                                <div class="input-field">
                                                                                                    <label>First Name</label>
                                                                                                    <input type="text" name="fname" placeholder="Enter your first name" value="<?php echo $row['first_name']; ?>" readonly>
                                                                                                </div>

                                                                                                <div class="input-field">
                                                                                                    <label>Middle Name</label>
                                                                                                    <input type="text" name="mname" placeholder="Enter your middle name" value="<?php echo $row['middle_name']; ?>" readonly>
                                                                                                </div>

                                                                                                <div class="input-field">
                                                                                                    <label>Last Name</label>
                                                                                                    <input type="text" name="lname" placeholder="Enter your last name" value="<?php echo $row['last_name']; ?>" readonly>
                                                                                                </div>

                                                                                                <div class="input-field">
                                                                                                    <label>Student Number</label>
                                                                                                    <input type="number" name="studnumber" placeholder="Enter your Student Number" value="<?php echo $row['id_number']; ?>" readonly>
                                                                                                </div>

                                                                                               
                                                                                                <div class="input-field">
                                                                                                    <label>Year Level</label>
                                                                                                    <input type="level" name="level" placeholder="Year Level" value="<?php echo $row['level']; ?>" readonly>

                                                                                                </div>

                                                                                                <div class="input-field">
                                                                                                    <label>Program</label>
                                                                                                    <input type="text" name="programsection" placeholder="Enter your Program and Section" value="<?php echo $row['program']; ?>" readonly>
                                                                                                </div>

                                                                                                <div class="input-field">
                                                                                                    <label>Nickname</label>
                                                                                                    <input type="text" name="nickname" placeholder="Enter your Nickname"required>
                                                                                                </div>

                                                                                                <div class="input-field">
                                                                                                    <label>Nationality</label>
                                                                                                    <input type="text" name="nationality" placeholder="Enter your nationality"  required>
                                                                                                </div>

                                                                                                <div class="input-field">
                                                                                                    <label>Gender</label>
                                                                                                    <select name="gender" required>
                                                                                                        <option disabled selected>Select gender</option>
                                                                                                        <option>Male</option>
                                                                                                        <option>Female</option>

                                                                                                    </select>
                                                                                                </div>

                                                                                                <div class="input-field">
                                                                                                    <label>Civil Status</label>
                                                                                                    <input type="text" name="status" placeholder="Enter your status" required>
                                                                                                </div>

                                                                                                <div class="input-field">
                                                                                                    <label>Religion</label>
                                                                                                    <input type="text" name="religion" placeholder="Enter your religion" required>
                                                                                                </div>

                                                                                                <div class="input-field">
                                                                                                    <label>Date of Birth</label>
                                                                                                    <input type="date" name="dob" placeholder="Enter birth date" required>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </details>

                                                                    <details class="accordion-item">
                                                                        <summary>Contact Information <span class="marker"></span> </summary>
                                                                        <div class="accordion-content">
                                                                            <fieldset>
                                                                                <legend><span class="title">Contact Information</span></legend>
                                                                                <div class="details_address">

                                                                                <div class="fields">

                                                                                    <div class="input-field">
                                                                                        <label>Mobile Number</label>
                                                                                        <input type="number" name="mobile" placeholder="Enter mobile number" value="<?php echo $row['contact']; ?>" >
                                                                                    </div>

                                                                                    <div class="input-field">
                                                                                        <label>Email Address 1</label>
                                                                                        <input type="text" name="email1" placeholder="Enter your email" value="<?php echo $row['email']; ?>">
                                                                                    </div>

                                                                                    <div class="input-field">
                                                                                        <label>Email Address 2</label>
                                                                                        <input type="text" name="email2" placeholder="Enter your email" >
                                                                                    </div>

                                                                                    <!-- <div class="input-field">
                                                                                        <label>Home Number</label>
                                                                                        <input type="number" name="homenumber" placeholder="Enter mobile number" >
                                                                                    </div> -->

                                                                                    <div class="input-field">
                                                                                        <label>Present Address</label>
                                                                                        <input type="text" name="present" placeholder="Enter Present Address" >
                                                                                    </div>
                                                                                    <div class="input-field">
                                                                                        <label>Permanent Address</label>
                                                                                        <input type="text" name="permanent" placeholder="Enter Permanent Address" >
                                                                                    </div>
                                                                                    <div class="input-field">
                                                                                        <label>Provicial Address</label>
                                                                                        <input type="text" name="provincial" placeholder="Enter Present Address" >
                                                                                    </div>
                                                                                </div>
                                                                            </fieldset>
                                                                        </div>
                                                                        
                                                                    </details>

                                                                    <details class="accordion-item">
                                                                        <summary>For married Students <span class="marker"></span></summary>
                                                                        <div class="accordion-content">
                                                                            <div class="details_married" style="padding: 10px;">
                                                                                <span class="title">For married students only</span>
                                                                                <div class="fields">

                                                                                    <div class="input-field">
                                                                                        <label>First name</label>
                                                                                        <input type="text" name="married_first" placeholder="Enter first name of spouse" >
                                                                                    </div>

                                                                                    <div class="input-field">
                                                                                        <label>Last name</label>
                                                                                        <input type="text" name="married_last" placeholder="Enter last name of spouse" >
                                                                                    </div>

                                                                                    <div class="input-field">
                                                                                        <label>Age</label>
                                                                                        <input type="number" name="married_age" placeholder="Enter age of spouse" >
                                                                                    </div>

                                                                                    <div class="input-field">
                                                                                        <label>Working: </label>
                                                                                        <select name="work_status">
                                                                                            <option disabled>Select if spouse is working</option>
                                                                                            <option>Yes</option>
                                                                                            <option selected>No</option>
                                                                                        </select>
                                                                                    </div>

                                                                                    <div class="input-field">
                                                                                        <label>Occupation</label>
                                                                                        <input type="text" name="occupation" placeholder="Enter occupation of spouse" >
                                                                                    </div>

                                                                                    <div class="input-field">
                                                                                        <label>Contact Number</label>
                                                                                        <input type="number" name="married_contact" placeholder="Enter contact number" >
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </details>
                                                                    
                                                                    <!----------------------------Family Background---------------------------->
                                                                    <details class="accordion-item">
                                                                        <summary>Family Background <span class="marker"></span></summary>
                                                                        <div class="accordion-content">
                                                                            <fieldset>
                                                                                <legend><span class="title">Family Background</span></legend>
                                                                                <div class="details_familybackground">
                                                                                    <div class="fields">

                                                                                        <div class="input-field">
                                                                                            <label>Status of Parent/s</label>
                                                                                            <select name="guardian_status">
                                                                                                <option disabled>Select Status of Parent/s</option>
                                                                                                <option selected>Married</option>
                                                                                                <option>Living Together</option>
                                                                                                <option>Single Parent</option>
                                                                                                <option>Separated</option>
                                                                                                <option>Divorced/Annulled</option>
                                                                                                <option>Widowed/Widower</option>
                                                                                                <option>Remarried</option>
                                                                                            </select>
                                                                                        </div>

                                                                                        <div class="input-field">
                                                                                            <label>Name of Guardian/s</label>
                                                                                            <input type="text" name="guardian_name" placeholder="Enter name of Guardian/s" >
                                                                                        </div>

                                                                                        <div class="input-field">
                                                                                            <label>Address of Parent/s or Guardian/s</label>
                                                                                            <input type="text" name="guardian_address" placeholder="Enter Address of Guardian/s" >
                                                                                        </div>

                                                                                        <div class="input-field">
                                                                                            <label>Contact Number of Guardian/s</label>
                                                                                            <input type="number" name="guardian_contact" placeholder="Enter contact number of Guardian/s" >
                                                                                        </div>

                                                                                        <div class="input-field">
                                                                                            <label>In case of emergency, please name:</label>
                                                                                            <input type="text" name="guardian_emergency" placeholder="Enter Name" >
                                                                                        </div>

                                                                                        <div class="input-field">
                                                                                            <label>n case of emergency, please contact:</label>
                                                                                            <input type="number" name="guardian_emergencyothercontact" placeholder="Enter contact number" >
                                                                                        </div>


                                                                                        <table style="width: 100%">
                                                                                            <tr>
                                                                                                <th class="table_Contents" style="border: none;"></th>
                                                                                                <th class="table_Header">Father</th>
                                                                                                <th class="table_Header">Mother</th>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="table_Contents">Name</td>
                                                                                                <td class="table_Contents">
                                                                                                    <input type="text" name="father_fullname" placeholder="Enter Father Name" style="width: 100%; padding: 5px;" >
                                                                                                </td>
                                                                                                <td class="table_Contents">
                                                                                                    <input type="text" name="mother_fullname" placeholder="Enter Mother Name" style="width: 100%; padding: 5px;" >
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="table_Contents" style="width: 200px">Age</td>
                                                                                                <td class="table_Contents">
                                                                                                    <input type="text" name="father_age" placeholder="Enter Father Age" style="width: 100%; padding: 5px;" >
                                                                                                </td>
                                                                                                <td class="table_Contents">
                                                                                                    <input type="text" name="mother_age" placeholder="Enter Mother Age" style="width: 100%; padding: 5px;" >
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="table_Contents" style="width: 200px">Birthday</td>
                                                                                                <td class="table_Contents">
                                                                                                    <input type="text" name="father_birthday" placeholder="Enter Father Birthday" style="width: 100%; padding: 5px;" >
                                                                                                </td>
                                                                                                <td class="table_Contents">
                                                                                                    <input type="text" name="mother_birthday" placeholder="Enter Mother Birthday" style="width: 100%; padding: 5px;" >
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="table_Contents" style="width: 200px">Nationality</td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="father_nationality" placeholder="Enter Father Nationality" style="width: 100%; padding: 5px;" >
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="mother_nationality" placeholder="Enter Mother Nationality" style="width: 100%; padding: 5px;" >
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class=" table_Contents" style="width: 200px">Religion</td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="father_religion" placeholder="Enter Father Religion" style="width: 100%; padding: 5px;" >
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="mother_religion" placeholder="Enter Mother Religion" style="width: 100%; padding: 5px;" >
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class=" table_Contents" style="width: 200px">Educational Attainment</td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="father_educational" placeholder="Enter Father Educational" style="width: 100%; padding: 5px;" >
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="mother_educational" placeholder="Enter Mother Educational" style="width: 100%; padding: 5px;" >
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class=" table_Contents" style="width: 200px">Occupation</td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="father_occupation" placeholder="Enter Father Occupation" style="width: 100%; padding: 5px;" >
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="mother_occupation" placeholder="Enter Mother Occupation" style="width: 100%; padding: 5px;" >
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class=" table_Contents" style="width: 200px">Contact Number</td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="father_contact" placeholder="Enter Father Contact" style="width: 100%; padding: 5px;" >
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="mother_contact" placeholder="Enter Mother Contact" style="width: 100%; padding: 5px;" >
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class=" table_Contents" style="width: 200px">Company</td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="father_company" placeholder="Enter Company Name" style="width: 100%; padding: 5px;" >
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="mother_company" placeholder="Enter Company Name" style="width: 100%; padding: 5px;" >
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class=" table_Contents" style="width: 200px">Monthly Income</td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="father_income" placeholder="Enter Father Income" style="width: 100%; padding: 5px;" >
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="mother_income" placeholder="Enter Mother Income" style="width: 100%; padding: 5px;" >
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>

                                                                                        <span class="title">Sibling Order:</span>
                                                                                        <table class="tbl-style" style="width: 100%">
                                                                                            <tr>
                                                                                                <th class="table_Header" style="width: 186px">Name</th>
                                                                                                <th class="table_Header">Age</th>
                                                                                                <th class="table_Header">Gender</th>
                                                                                                <th class="table_Header">Program/Occupation</th>
                                                                                                <th class="table_Header">School/Company</th>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_name_one" placeholder="" style="width: 190px; padding: 5px;" >
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_age_one" placeholder="" style="width: 40px; text-align: center; padding: 3px;" >
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_gender_one" placeholder="" style="width: 70px; text-align: center; padding: 3px;" >
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_occupation_one" placeholder="" style="width: 150px; text-align: center; padding: 3px;" >
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_company_one" placeholder="" style="width: 200px; text-align: center; padding: 3px;" >
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_name_two" placeholder="" style="width: 190px; padding: 5px;" >
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_age_two" placeholder="" style="width: 40px; text-align: center; padding: 3px;" >
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_gender_two" placeholder="" style="width: 70px; text-align: center; padding: 3px;" >
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_occupation_two" placeholder="" style="width: 150px; text-align: center; padding: 3px;" >
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_company_two" placeholder="" style="width: 200px; text-align: center; padding: 3px;">
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_name_three" placeholder="" style="width: 190px; padding: 5px;" >
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_age_three" placeholder="" style="width: 40px; text-align: center; padding: 3px;" >
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_gender_three" placeholder="" style="width: 70px; text-align: center; padding: 3px;" >
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_occupation_three" placeholder="" style="width: 150px; text-align: center; padding: 3px;" >
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_company_three" placeholder="" style="width: 200px; text-align: center; padding: 3px;" >
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </fieldset>
                                                                        </div>
                                                                    </details>

                                                                    <!----------------------------Interest and Recreational ---------------------------->
                                                                    <details class="accordion-item">
                                                                        <summary>Interests and Recreational Activities <span class="marker"></span></summary>
                                                                        <div class="accordion-content">
                                                                            <fieldset>
                                                                                <legend><span class="title">Interests and Recreational Activities</span></legend>
                                                                                <div>
                                                                                    <div class="fields">
                    
                                                                                        <div class="input-field">
                                                                                            <label>Sports</label>
                                                                                            <input type="text" name="sports" placeholder="Enter sports" >
                                                                                        </div>
                                                                                
                                                                                        <div class="input-field">
                                                                                            <label>Hobbies</label>
                                                                                            <input type="text" name="hobbies" placeholder="Enter hobbies" >
                                                                                        </div>
                                                                                
                                                                                        <div class="input-field">
                                                                                            <label>Talents</label>
                                                                                            <input type="text" name="talents" placeholder="Enter talents" >
                                                                                        </div>
                                                                                
                                                                                        <div class="input-field">
                                                                                            <label>Socio-civic</label>
                                                                                            <input type="text" name="socio" placeholder="Enter Socio-civic" >
                                                                                        </div>
                                                                                
                                                                                        <div class="input-field">
                                                                                            <label>School Organizations</label>
                                                                                            <input type="text" name="school_organization" placeholder="Enter School Organizations" >
                                                                                        </div>
                                                                        
                                                                                    </div>
                                                                                </div>
                                                                            </fieldset>
                                                                        </div>
                                                                    </details>

                                                                    <details class="accordion-item">
                                                                        <summary>Work Experience <span class="marker"></span></summary>
                                                                        <div class="accordion-content">
                                                                        <fieldset>
                                                                            <legend><span class="title">Work Experience</span></legend>
                                                                            <div class="details_workexperience">
                                                                                <table class="tbl-style" style="width: 100%">
                                                                                    <tr>
                                                                                        <th class="table_Header">Company</th>
                                                                                        <th class="table_Header">Position</th>
                                                                                        <th class="table_Header">Duration</th>
                                                                                        <th class="table_Header">Job Description</th>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class=" table_Contents">
                                                                                            <input type="text" name="workexperience_name_one" placeholder="" style="width: 200px; text-align: center; padding: 3px;" >
                                                                                        </td>
                                                                                        <td class=" table_Contents">
                                                                                            <input type="text" name="workexperience_position_one" placeholder="" style="width: 170px; text-align: center; padding: 3px;" >
                                                                                        </td>
                                                                                        <td class=" table_Contents">
                                                                                            <input type="text" name="workexperience_duration_one" placeholder="" style="width: 100px; text-align: center; padding: 3px;" >
                                                                                        </td>
                                                                                        <td class=" table_Contents">
                                                                                            <input type="text" name="workexperience_job_one" placeholder="" style="width: 200px; text-align: center; padding: 3px;" >
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class=" table_Contents">
                                                                                            <input type="text" name="workexperience_name_two" placeholder="" style="width: 200px; text-align: center; padding: 3px;" >
                                                                                        </td>
                                                                                        <td class=" table_Contents">
                                                                                            <input type="text" name="workexperience_position_two" placeholder="" style="width: 170px; text-align: center; padding: 3px;" >
                                                                                        </td>
                                                                                        <td class=" table_Contents">
                                                                                            <input type="text" name="workexperience_duration_two" placeholder="" style="width: 100px; text-align: center; padding: 3px;" >
                                                                                        </td>
                                                                                        <td class=" table_Contents">
                                                                                            <input type="text" name="workexperience_job_two" placeholder="" style="width: 200px; text-align: center; padding: 3px;" >
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class=" table_Contents">
                                                                                            <input type="text" name="workexperience_name_three" placeholder="" style="width: 200px; text-align: center; padding: 3px;" >
                                                                                        </td>
                                                                                        <td class=" table_Contents">
                                                                                            <input type="text" name="workexperience_position_three" placeholder="" style="width: 170px; text-align: center; padding: 3px;" >
                                                                                        </td>
                                                                                        <td class=" table_Contents">
                                                                                            <input type="text" name="workexperience_duration_three" placeholder="" style="width: 100px; text-align: center; padding: 3px;" >
                                                                                        </td>
                                                                                        <td class=" table_Contents">
                                                                                            <input type="text" name="workexperience_job_three" placeholder="" style="width: 200px; text-align: center; padding: 3px;" >
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </div>
                                                                        </fieldset>
                                                                        </div>
                                                                    </details>
                                                                    <!--
                                                                    <details class="accordion-item">
                                                                        <summary>Health <span class="marker"></span></summary>
                                                                        <div class="accordion-content">
                                                                            <fieldset class="health">
                                                                                <legend><span class="title">Health</span></legend>
                                                                                <div class="details_Health">

                                                                                    <fieldset>
                                                                                        <legend>Have you ever been hospitalized?</legend>
                                                                                        <label><input type="radio" name="q1-yes-no" id="q1-yes" onclick="enableQ1()"> Yes</label>
                                                                                        <label><input type="radio" name="q1-yes-no" id="q1-no" onclick="disableQ1()"> No</label>
                                                                                        <div id="q1-textarea">
                                                                                            <legend id="text-desc">state when/reason:</legend>
                                                                                            <textarea name="" id="q1" cols="90" rows="5"></textarea>
                                                                                        </div>
                                                                                    </fieldset>

                                                                                    <fieldset>
                                                                                        <legend>Have you ever had an operation?</legend>
                                                                                        <label><input type="radio" name="q2-yes-no" id="q2-yes" onclick="enableQ2()"> Yes</label>
                                                                                        <label><input type="radio" name="q2-yes-no" id="q2-no" onclick="disableQ2()"> No</label>
                                                                                        <div id="q2-textarea">
                                                                                            <legend id="text-desc">state when/reason:</legend>
                                                                                            <textarea name="" id="q2" cols="90" rows="5"></textarea>
                                                                                        </div>
                                                                                    </fieldset>

                                                                                    <fieldset>
                                                                                        <legend>Do you currently suffer from any illness/condition?</legend>
                                                                                        <label><input type="radio" name="q3-yes-no" id="q3-yes" onclick="enableQ3()"> Yes</label>
                                                                                        <label><input type="radio" name="q3-yes-no" id="q3-no" onclick="disableQ3()"> No</label>
                                                                                        <div id="q3-textarea">
                                                                                            <legend id="text-desc">state illness:</legend>
                                                                                            <textarea name="" id="q3" cols="90" rows="5"></textarea>
                                                                                        </div>
                                                                                    </fieldset>

                                                                                    <fieldset>
                                                                                        <legend>Do you take prescription drugs?</legend>
                                                                                        <label><input type="radio" name="q4-yes-no" id="q4-yes" onclick="enableQ4()"> Yes</label>
                                                                                        <label><input type="radio" name="q4-yes-no" id="q4-no" onclick="disableQ4()"> No</label>
                                                                                        <div id="q4-textarea">
                                                                                            <legend id="text-desc">drug name/purpose:</legend>
                                                                                            <textarea name="" id="q4" cols="90" rows="5"></textarea>
                                                                                        </div>
                                                                                    </fieldset>

                                                                                    <fieldset>
                                                                                        <legend>Have you submitted a medical certificate/assessment report?</legend>
                                                                                        <label><input type="radio" name="q5-yes-no" id="q5-yes" onclick="enableQ5()"> Yes</label>
                                                                                        <label><input type="radio" name="q5-yes-no" id="q5-no" onclick="disableQ5()"> No</label>
                                                                                        <div id="q5-textarea">
                                                                                            <legend id="text-desc">state illness:</legend>
                                                                                            <textarea name="" id="q5" cols="90" rows="5"></textarea>
                                                                                        </div>
                                                                                    </fieldset>

                                                                                    <fieldset>
                                                                                        <legend>Common illness in the family:</legend>
                                                                                        <textarea name="" id="" cols="90" rows="2"></textarea>
                                                                                    </fieldset>

                                                                                    <fieldset>
                                                                                        <legend>When did you see a doctor?:</legend>
                                                                                        <textarea name="" id="" cols="90" rows="2"></textarea>
                                                                                        <legend>Reason for the visit:</legend>
                                                                                        <textarea name="" id="" cols="90" rows="2"></textarea>
                                                                                    </fieldset>
                                                                                </div>
                                                                            </fieldset>
                                                                        </div>
                                                                    </details>

                                                                    <details class="accordion-item">
                                                                        <summary>Check any of the PROBLEMS below that currently concerns you:<span class="marker"></span></summary>
                                                                        <div class="accordion-content">
                                                                            <fieldset class="problems">
                                                                                <legend><span class="title">Check any of the PROBLEMS below that currently concerns you:</span></legend>
                                                                                <div class="details_Problems">

                                                                                    <fieldset class="options">
                                                                                        <div>
                                                                                            <input type="checkbox"><label>Fear</label>
                                                                                        </div>
                                                                                        <div>
                                                                                            <input type="checkbox"><label>Communication</label>
                                                                                        </div>
                                                                                        <div>
                                                                                            <input type="checkbox"><label>Shyness</label>
                                                                                        </div>
                                                                                        <div>
                                                                                            <input type="checkbox"><label>Loneliness</label>
                                                                                        </div>
                                                                                        <div>
                                                                                            <input type="checkbox"><label>Stress</label>
                                                                                        </div>
                                                                                        <div>
                                                                                            <input type="checkbox"><label>Anger</label>
                                                                                        </div>
                                                                                        <div>
                                                                                            <input type="checkbox"><label>Self-confidence</label>
                                                                                        </div>
                                                                                        <div>
                                                                                            <input type="checkbox"><label>Career</label>
                                                                                        </div>
                                                                                        <div>
                                                                                            <input type="checkbox"><label>Financial</label>
                                                                                        </div>
                                                                                        <div>
                                                                                            <input type="checkbox"><label>Others:</label>
                                                                                            <input type="text">
                                                                                        </div>

                                                                                    </fieldset>

                                                                                    <fieldset class="relationships">
                                                                                        <legend>Relationship/s with:</legend>
                                                                                        <div>
                                                                                            <input type="checkbox"><label>Father</label>
                                                                                        </div>
                                                                                        <div>
                                                                                            <input type="checkbox"><label>Mother</label>
                                                                                        </div>
                                                                                        <div>
                                                                                            <input type="checkbox"><label>Siblings</label>
                                                                                        </div>
                                                                                        <div>
                                                                                            <input type="checkbox"><label>Teachers</label>
                                                                                        </div>
                                                                                        <div>
                                                                                            <input type="checkbox"><label>Others:</label>
                                                                                            <input type="text">
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </div>
                                                                            </fieldset>
                                                                        </div>
                                                                    </details> -->
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="buttons">
                                                                <button type="submit" name="addregister" class="btn btn-primary btn-md">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- INDIVIDUAL INVENTORY FORM END --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>

<script>
    let dateDropdown = document.getElementById('date-dropdown');

    let currentYear = new Date().getFullYear();
    let earliestYear = 2010;

    while (currentYear >= earliestYear) {
      let dateOption = document.createElement('option');
      dateOption.text = currentYear;
      dateOption.value = currentYear;
      dateDropdown.add(dateOption);
      currentYear -= 1;
    }
</script>

<?php
    include('includes/stud___scripts.php');
?>