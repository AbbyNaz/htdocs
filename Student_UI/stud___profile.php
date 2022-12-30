<?php

session_start();

include_once("../connections/connection.php");

if (!isset($_SESSION['UserEmail'])) {

    echo "<script>window.open('../loginForm.php','_self')</script>";
} else {

    $con = connection();

    if (isset($_SESSION['UserId'])) {

        $id = $_SESSION['UserId'];
        $query = "SELECT * FROM users WHERE user_id = '$id'";
        $get_user = $con->query($query) or die($con->error);
        $row = $get_user->fetch_assoc();
    }

    if (isset($_POST['update_details'])) {
        // $user_id = $row['user_id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $middle_name = $_POST['middle_name'];
        $birthday = $_POST['birthday'];
        $position = $_POST['position'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $contact = $_POST['contact'];

        $update_query = "UPDATE `users` SET `first_name` = '$first_name', `last_name` = '$last_name', `middle_name` = '$middle_name', `date_of_birth` = '$birthday', " .
            "`position` = '$position', `address` = '$address', `gender` = '$gender', `contact` = '$contact' WHERE user_id = '$id'";
        $con->query($update_query) or die($con->error);
        header("Location: stud___profile.php");
    }

    // if (isset($_POST['upload_img'])) {
    //     $file = $_FILES['image']['name'];

    //     $addimg_query = "INSERT INTO `users`(`user_image`) VALUES ('$file')  WHERE user_id = '$id'";
    //     $con->query($addimg_query) or die($con->error);
    //     // $res = mysqli_query($con, $addimg_query);

    //     if ($addimg_query){
    //         move_uploaded_file($_FILES['image']['tmp_name'], "$file");
    //     }
    // }
?>

<?php

    include('includes/stud___header.php');
    include('includes/stud___left-menu-area.php');
    include('includes/stud___top-menu-area.php');
    include('includes/stud___mobile_menu.php');
?>

<style type="text/css">
    * {
        box-sizing: border-box;
    }

    #inventory-form-container {
        
    }

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
        min-height: 2850px;
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
        /* width: 360px;
        top: 150px; */
        margin: 0 auto;
        border-radius: 8px;
        overflow: hidden; 
    }

    .accordion-item {
        position: relative;
        background=color: #FFFFFF;
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
        tramsition: all linear 0.5s;
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
                                <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">My Profile</span>
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
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="profile-info-inner">
                    <div class="profile-img">
                        <?php if ($row['profile_picture'] != null) { ?>
                                <img src="show_profile_picture.php" alt="profile_picture" />
                        <?php } else { ?>
                                <img src="img/profile/prof2.png" alt="profile_picture" />
                        <?php } ?>

                    </div>
                    <!-- PROFILE PICTURE SAMPLE -->
                                            <div class="profile-img">
                                                <form action="process_profile_picture.php" method="POST" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-left: 30px;">
                                                                    <input type="file" name="profile_picture" class="form-control">
                                                                </div>
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                    <button type="submit" name="SaveImage" class="btn btn-primary btn-md">Save Image</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </form>
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
                                    <p><b>Program</b><br /><?= $row['program'] ?></p>
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

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                    <ul id="myTabedu1" class="tab-review-design">

                        <li class="active"><a href="#offense_monitoring">Offense Monitoring</a></li>
                        <!-- <li><a href="#account_info"> Edit Acount Information</a></li> -->
                        <!-- <li><a href="#reviews"> Counseling Info</a></li> -->
                        <li><a href="#individual_inventory">Inventory Form</a></li>

                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="offense_monitoring">
                            
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="chat-discussion" style="height: auto">
                                            <div class="chat-message bordered">
                                                <div class="message">
                                                <?php
                                                    $om = "SELECT * FROM offense_monitoring WHERE student_id = '" . $row['id_number'] . "'  AND status = 'Active' ORDER BY id DESC LIMIT 5";
                                                    $getdata = $con->query($om) or die($con->error);
                                                    $offense = $getdata->fetch_assoc();

                                                    if ($offense == 0) {
                                                ?>
                                                            <p>There was no offense at this time!</p>
                                                        <?php
                                                    } else {
                                                        do {
                                                        ?>
                                                

                                                                    
                                                            <a class="message-author" href="#"><?php echo $offense['offense_type']; ?></a>
                                                                <span class="message-date"><?php echo $offense['date_created']; ?></span>
                                                                <span class="message-content"><?php echo $offense['description']; ?></span>
                                                            <a class="btn btn-s btn-danger"><i></i> Sanction: <?php echo $offense['sanction']; ?></a>
                                                                    

                                                            <?php

                                                                } while ($offense = $getdata->fetch_assoc());
                                                            }
                                                            ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                                <!-- <div class="product-tab-list tab-pane fade" id="account_info">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="devit-card-custom">

                                                            <form action="#" method="POST" enctype="multipart/form-data">

                                                             <div class="form-group">
                                                                <label> Email </label>
                                                                <input type="text" id="edit_email" name="edit_email" class="form-control" value = "<?= $row['email'] ?>" placeholder="Email" readonly> 
                                                            </div>

                                                            <div class="form-group">
                                                            <label>Change Password </label>

                                                                <input type="password" id="edit_password" name="edit_password"class="form-control" placeholder="Password">
                                                            </div>
                                                           
                                                            <div class="form-group">
                                                            <label>Change Profile Image</label>

                                                                <input type="file" id="image" name="image"class="form-control" placeholder="Profile Image">
                                                            </div>

                                                            <input type="submit" id="upload_img" value =" Update Account Details" name="upload_img" class="btn btn-primary btn-md">


                                                            <a href="#" id="edit_account_submit" name="edit_account_submit"class="btn btn-primary waves-effect waves-light">Update Account Details</a>

                                                            </form>   
            
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                        <!-- <div class="product-tab-list tab-pane fade" id="reviews">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="chat-discussion" style="height: auto">
                                            <div class="chat-message">

                                                 <?php
                                                        $om = "SELECT * FROM offense_monitoring WHERE student_id = '" . $row['id_number'] . "' ORDER BY id DESC LIMIT 5";
                                                        $getdata = $con->query($om) or die($con->error);
                                                        $offense = $getdata->fetch_assoc();

                                                        if ($offense == 0) {
                                                 ?>
                                                            <p>There was no counseling at this time!</p>
                                                        <?php
                                                                } else {
                                                                    do {
                                                        ?> 
                                                

                                                                    
                                                        <div class="profile-hdtc">
                                                            <img class="message-avatar" src="img/contact/2.png" alt="">
                                                        </div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> juan dela cruz </a>
                                                            <span class="message-date"> Mon Jan 26 2015 - 18:39:23 </span>
                                                            <span class="message-content">reffered student, for counseling
                                                            </span>
                                                            <div class="m-t-md mg-t-10">
                                                                <a class="btn btn-xs btn-default"><i></i> Review </a>

                                                                <a class="btn btn-xs btn-default"><i></i> Archive </a>
                                                            </div>
                                                        </div>
                                                                    
                                                       <?php

                                                                } while ($offense = $getdata->fetch_assoc());
                                                            }
                                                       ?> 

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <div class="product-tab-list tab-pane fade" id="individual_inventory">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <!-- INDIVIDUAL INVENTORY FORM -->
                                                <div id="inventory-form-cointainer">
                                                    <div class="container">
                                                        <header>Individual Inventory Form</header>
                                                        <form action="updateregister.php" method="post" id="student-form">
                                            

                                                    <?php
                                                        $inventorydata = "SELECT * FROM inventory WHERE STUDNUMBER = " . $row['id_number'];
                                                        $get_data = $con->query($inventorydata) or die($con->error);
                                                        $row = $get_data->fetch_assoc();

                                                        if ($row == 0) {
                                                    ?>
                                                                <br><br>
                                                                <p>Please fill-up the form of individual inventory for student.<br><br><a href="student_profile.php">Click here to fill-up form</a></p>
                                                                <br><br>
                                                            <?php
                                                                    } else {
                                                                        do {
                                                            ?>
                                                            <div class="form first">
                                                                <input type="hidden" name="inventorycode" value="<?php echo $row['ID']; ?>">
                                                                <div class="accordion">
                                                                    <!-- PERSONAL DETAILS -->
                                                                    <details class="accordion-item">
                                                                        <summary>School details <span class="marker"></span></summary>
                                                                        <div class="accordion-content">
                                                                            <div class="fields">
                                                                                <div class="input-field">
                                                                                    <label>School Year (S.Y.)</label>
                                                                                    <select id="date-dropdown" name="sy" required>
                                                                                        <option selected><?php echo $row['SY']; ?></option>
                                                                                    </select>
                                                                                </div>

                                                                                <div class="input-field">
                                                                                    <label>Tertiary (Semester)</label>
                                                                                    <select name="sem" required>
                                                                                        <option selected><?php echo $row['SEM']; ?></option>
                                                                                        <option disabled>Select Semester</option>
                                                                                        <option>1st semester</option>
                                                                                        <option>2nd semester</option>
                                                                                        <option>Summer</option>
                                                                                    </select>
                                                                                </div>

                                                                                <div class="input-field">
                                                                                    <label>Picture</label>
                                                                                    <input type="file" style="padding-top: 8px;" name="files[]" class="form-control" accept="image/*"
                                                                                             required />
                                                                                </div>

                                                                                <!-- <div class="input-field">
                                                                                    <label>Senior High (Quarter)</label>
                                                                                    <select name="quarter" required>
                                                                                        <option selected><?php echo $row['QUARTER']; ?></option>
                                                                                        <option disabled>Select Quarter</option>
                                                                                        <option>1st Quarter</option>
                                                                                        <option>2nd Quarter</option>
                                                                                        <option>3rd Quarter</option>
                                                                                        <option>4th Quarter</option>
                                                                                        <option>Summer</option>
                                                                                    </select>
                                                                                </div> -->

                                                                                <div>
                                                                                    <fieldset>
                                                                                        <legend><span class="title">Personal Details</span></legend>
                                                                                        <div class="details_personal">
                                                                                            <div class="fields">
                                                                                                <div class="input-field">
                                                                                                    <label>First Name</label>
                                                                                                    <input type="text" name="fname" placeholder="Enter your first name" value="<?php echo $row['FIRST']; ?>" required>
                                                                                                </div>

                                                                                                <div class="input-field">
                                                                                                    <label>Middle Name</label>
                                                                                                    <input type="text" name="mname" placeholder="Enter your middle name" value="<?php echo $row['MIDDLE']; ?>">
                                                                                                </div>

                                                                                                <div class="input-field">
                                                                                                    <label>Last Name</label>
                                                                                                    <input type="text" name="lname" placeholder="Enter your last name" value="<?php echo $row['LAST']; ?>" required>
                                                                                                </div>

                                                                                                <div class="input-field">
                                                                                                    <label>Student Number</label>
                                                                                                    <input type="number" name="studnumber" placeholder="Enter your Student Number" value="<?php echo $row['STUDNUMBER']; ?>" readonly>
                                                                                                </div>

                                                                                                <div class="input-field">
                                                                                                    <label>Year Level</label>
                                                                                                    <select name="yearlevel" required>
                                                                                                        <option selected><?php echo $row['YEARLEVEL']; ?></option>
                                                                                                        <option disabled>Select Year Level</option>
                                                                                                        <option>Grade 11</option>
                                                                                                        <option>Grade 12</option>
                                                                                                        <option>First Year</option>
                                                                                                        <option>Second Year</option>
                                                                                                        <option>Third Year</option>
                                                                                                        <option>Fourth Year</option>
                                                                                                    </select>
                                                                                                </div>

                                                                                                <div class="input-field">
                                                                                                    <label>Program and Section</label>
                                                                                                    <input type="text" name="programsection" placeholder="Enter your Program and Section" value="<?php echo $row['PROGRAMSECTION']; ?>" required>
                                                                                                </div>

                                                                                                <div class="input-field">
                                                                                                    <label>Nickname</label>
                                                                                                    <input type="text" name="nickname" placeholder="Enter your Nickname" value="<?php echo $row['NICKNAME']; ?>" required>
                                                                                                </div>

                                                                                                <div class="input-field">
                                                                                                    <label>Nationality</label>
                                                                                                    <input type="text" name="nationality" placeholder="Enter your nationality" value="<?php echo $row['NATIONALITY']; ?>" required>
                                                                                                </div>

                                                                                                <div class="input-field">
                                                                                                    <label>Gender</label>
                                                                                                    <select name="gender" required>
                                                                                                        <option selected><?php echo $row['GENDER']; ?></option>
                                                                                                        <option disabled>Select gender</option>
                                                                                                        <option>Male</option>
                                                                                                        <option>Female</option>

                                                                                                    </select>
                                                                                                </div>

                                                                                                <div class="input-field">
                                                                                                    <label>Civil Status</label>
                                                                                                    <input type="text" name="status" placeholder="Enter your status" value="<?php echo $row['CIVILSTATUS']; ?>" required>
                                                                                                </div>

                                                                                                <div class="input-field">
                                                                                                    <label>Religion</label>
                                                                                                    <input type="text" name="religion" placeholder="Enter your religion" value="<?php echo $row['RELIGION']; ?>" required>
                                                                                                </div>

                                                                                                <div class="input-field">
                                                                                                    <label>Date of Birth</label>
                                                                                                    <input type="date" name="dob" placeholder="Enter birth date" value="<?php echo $row['DOB']; ?>" required>
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
                                                                                        <input type="number" name="mobile" placeholder="Enter mobile number" value="<?php echo $row['MOBILE']; ?>" required>
                                                                                    </div>

                                                                                    <div class="input-field">
                                                                                        <label>Email Address 1</label>
                                                                                        <input type="text" name="email1" placeholder="Enter your email" value="<?php echo $row['EMAIL1']; ?>" required>
                                                                                    </div>

                                                                                    <div class="input-field">
                                                                                        <label>Email Address 2</label>
                                                                                        <input type="text" name="email2" placeholder="Enter your email" value="<?php echo $row['EMAIL2']; ?>">
                                                                                    </div>

                                                                                    <!-- <div class="input-field">
                                                                                        <label>Home Number</label>
                                                                                        <input type="number" name="homenumber" placeholder="Enter mobile number" value="<?php echo $row['HOMENUMBER']; ?>">
                                                                                    </div> -->

                                                                                    <div class="input-field">
                                                                                        <label>Present Address</label>
                                                                                        <input type="text" name="present" placeholder="Enter Present Address" value="<?php echo $row['PRESENT']; ?>" required>
                                                                                    </div>
                                                                                    <div class="input-field">
                                                                                        <label>Permanent Address</label>
                                                                                        <input type="text" name="permanent" placeholder="Enter Permanent Address" value="<?php echo $row['PERMANENT']; ?>" required>
                                                                                    </div>
                                                                                    <div class="input-field">
                                                                                        <label>Provicial Address</label>
                                                                                        <input type="text" name="provincial" placeholder="Enter Present Address" value="<?php echo $row['PROVINCIAL']; ?>">
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
                                                                                        <input type="text" name="married_first" placeholder="Enter first name of spouse" value="<?php echo $row['MARRIED_FIRST']; ?>">
                                                                                    </div>

                                                                                    <div class="input-field">
                                                                                        <label>Last name</label>
                                                                                        <input type="text" name="married_last" placeholder="Enter last name of spouse" value="<?php echo $row['MARRIED_LAST']; ?>">
                                                                                    </div>

                                                                                    <div class="input-field">
                                                                                        <label>Age</label>
                                                                                        <input type="number" name="married_age" placeholder="Enter age of spouse" value="<?php echo $row['SPOUSE_AGE']; ?>">
                                                                                    </div>

                                                                                    <div class="input-field">
                                                                                        <label>Working: </label>
                                                                                        <select name="work_status">
                                                                                            <option selected><?php echo $row['WORK_STATUS']; ?></option>
                                                                                            <option disabled>Select if spouse is working</option>
                                                                                            <option>Yes</option>
                                                                                            <option>No</option>
                                                                                        </select>
                                                                                    </div>

                                                                                    <div class="input-field">
                                                                                        <label>Occupation</label>
                                                                                        <input type="text" name="occupation" placeholder="Enter occupation of spouse" value="<?php echo $row['OCCUPATION']; ?>">
                                                                                    </div>

                                                                                    <div class="input-field">
                                                                                        <label>Contact Number</label>
                                                                                        <input type="number" name="married_contact" placeholder="Enter contact number" value="<?php echo $row['MARRIED_CONTACT']; ?>">
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
                                                                                            <select name="guardian_status" required>
                                                                                                <option selected><?php echo $row['GUARDIAN_STATUS']; ?></option>
                                                                                                <option disabled>Select Status of Parent/s</option>
                                                                                                <option>Married</option>
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
                                                                                            <input type="text" name="guardian_name" placeholder="Enter name of Guardian/s" value="<?php echo $row['GUARDIAN_NAME']; ?>">
                                                                                        </div>

                                                                                        <div class="input-field">
                                                                                            <label>Address of Parent/s or Guardian/s</label>
                                                                                            <input type="text" name="guardian_address" placeholder="Enter Address of Guardian/s" value="<?php echo $row['GUARDIAN_ADDRESS']; ?>">
                                                                                        </div>

                                                                                        <div class="input-field">
                                                                                            <label>Contact Number of Guardian/s</label>
                                                                                            <input type="number" name="guardian_contact" placeholder="Enter contact number of Guardian/s" value="<?php echo $row['GUARDIAN_CONTACT']; ?>">
                                                                                        </div>

                                                                                        <div class="input-field">
                                                                                            <label>In case of emergency, please name:</label>
                                                                                            <input type="text" name="guardian_emergency" placeholder="Enter Name" value="<?php echo $row['GUARDIAN_EMERGENCY']; ?>">
                                                                                        </div>

                                                                                        <div class="input-field">
                                                                                            <label>n case of emergency, please contact:</label>
                                                                                            <input type="number" name="guardian_emergencyothercontact" placeholder="Enter contact number"  value="<?php echo $row['GUARDIAN_OTHERCONTACT']; ?>">
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
                                                                                                    <input type="text" name="father_fullname" placeholder="Enter Father Name" style="width: 100%; padding: 5px;" value="<?php echo $row['GUARDIAN_FATHERNAME']; ?>">
                                                                                                </td>
                                                                                                <td class="table_Contents">
                                                                                                    <input type="text" name="mother_fullname" placeholder="Enter Mother Name" style="width: 100%; padding: 5px;" value="<?php echo $row['GUARDIAN_MOTHERNAME']; ?>">
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="table_Contents" style="width: 200px">Age</td>
                                                                                                <td class="table_Contents">
                                                                                                    <input type="text" name="father_age" placeholder="Enter Father Age" style="width: 100%; padding: 5px;" value="<?php echo $row['GUARDIAN_FATHERAGE']; ?>">
                                                                                                </td>
                                                                                                <td class="table_Contents">
                                                                                                    <input type="text" name="mother_age" placeholder="Enter Mother Age" style="width: 100%; padding: 5px;" value="<?php echo $row['GUARDIAN_MOTHERAGE']; ?>">
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="table_Contents" style="width: 200px">Birthday</td>
                                                                                                <td class="table_Contents">
                                                                                                    <input type="text" name="father_birthday" placeholder="Enter Father Birthday" style="width: 100%; padding: 5px;" value="<?php echo $row['GUARDIAN_FATHERDOB']; ?>">
                                                                                                </td>
                                                                                                <td class="table_Contents">
                                                                                                    <input type="text" name="mother_birthday" placeholder="Enter Mother Birthday" style="width: 100%; padding: 5px;" value="<?php echo $row['GUARDIAN_MOTHERDOB']; ?>">
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="table_Contents" style="width: 200px">Nationality</td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="father_nationality" placeholder="Enter Father Nationality" style="width: 100%; padding: 5px;" value="<?php echo $row['GUARDIAN_FATHERNATIONALITY']; ?>">
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="mother_nationality" placeholder="Enter Mother Nationality" style="width: 100%; padding: 5px;" value="<?php echo $row['GUARDIAN_MOTHERNATIONALITY']; ?>">
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class=" table_Contents" style="width: 200px">Religion</td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="father_religion" placeholder="Enter Father Religion" style="width: 100%; padding: 5px;" value="<?php echo $row['GUARDIAN_FATHERRELIGION']; ?>">
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="mother_religion" placeholder="Enter Mother Religion" style="width: 100%; padding: 5px;" value="<?php echo $row['GUARDIAN_MOTHERRELIGION']; ?>">
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class=" table_Contents" style="width: 200px">Educational Attainment</td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="father_educational" placeholder="Enter Father Educational" style="width: 100%; padding: 5px;" value="<?php echo $row['GUARDIAN_FATHEREDUCATIONAL']; ?>">
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="mother_educational" placeholder="Enter Mother Educational" style="width: 100%; padding: 5px;" value="<?php echo $row['GUARDIAN_MOTHEREDUCATIONAL']; ?>">
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class=" table_Contents" style="width: 200px">Occupation</td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="father_occupation" placeholder="Enter Father Occupation" style="width: 100%; padding: 5px;" value="<?php echo $row['GUARDIAN_FATHEROCCUPATION']; ?>">
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="mother_occupation" placeholder="Enter Mother Occupation" style="width: 100%; padding: 5px;" value="<?php echo $row['GUARDIAN_MOTHEROCCUPATION']; ?>">
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class=" table_Contents" style="width: 200px">Contact Number</td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="father_contact" placeholder="Enter Father Contact" style="width: 100%; padding: 5px;" value="<?php echo $row['GUARDIAN_FATHERCONTACT']; ?>">
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="mother_contact" placeholder="Enter Mother Contact" style="width: 100%; padding: 5px;" value="<?php echo $row['GUARDIAN_MOTHERCONTACT']; ?>">
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class=" table_Contents" style="width: 200px">Company</td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="father_company" placeholder="Enter Company Name" style="width: 100%; padding: 5px;" value="<?php echo $row['GUARDIAN_FATHERCOMPANY']; ?>">
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="mother_company" placeholder="Enter Company Name" style="width: 100%; padding: 5px;" value="<?php echo $row['GUARDIAN_MOTHERCOMPANY']; ?>">
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class=" table_Contents" style="width: 200px">Monthly Income</td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="father_income" placeholder="Enter Father Income" style="width: 100%; padding: 5px;" value="<?php echo $row['GUARDIAN_FATHERINCOME']; ?>">
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="mother_income" placeholder="Enter Mother Income" style="width: 100%; padding: 5px;" value="<?php echo $row['GUARDIAN_MOTHERINCOME']; ?>">
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
                                                                                                    <input type="text" name="sibling_name_one" placeholder="" style="width: 150px; padding: 5px;" value="<?php echo $row['SO1_NAME']; ?>">
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_age_one" placeholder="" style="width: 30px; text-align: center; padding: 3px;" value="<?php echo $row['SO1_AGE']; ?>">
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_gender_one" placeholder="" style="width: 60px; text-align: center; padding: 3px;" value="<?php echo $row['SO1_GENDER']; ?>">
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_occupation_one" placeholder="" style="width: 150px; text-align: center; padding: 3px;" value="<?php echo $row['SO1_PROGOCCUP']; ?>">
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_company_one" placeholder="" style="width: 150px; text-align: center; padding: 3px;" value="<?php echo $row['SO1_SCHCOMP']; ?>">
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_name_two" placeholder="" style="width: 150px; padding: 5px;" value="<?php echo $row['SO2_NAME']; ?>">
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_age_two" placeholder="" style="width: 30px; text-align: center; padding: 3px;" value="<?php echo $row['SO2_AGE']; ?>">
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_gender_two" placeholder="" style="width: 60px; text-align: center; padding: 3px;" value="<?php echo $row['SO2_GENDER']; ?>">
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_occupation_two" placeholder="" style="width: 150px; text-align: center; padding: 3px;" value="<?php echo $row['SO2_PROGOCCUP']; ?>">
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_company_two" placeholder="" style="width: 150px; text-align: center; padding: 3px;" value="<?php echo $row['SO2_SCHCOMP']; ?>">
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_name_three" placeholder="" style="width: 150px; padding: 5px;" value="<?php echo $row['SO3_NAME']; ?>">
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_age_three" placeholder="" style="width: 30px; text-align: center; padding: 3px;" value="<?php echo $row['SO3_AGE']; ?>">
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_gender_three" placeholder="" style="width: 60px; text-align: center; padding: 3px;" value="<?php echo $row['SO3_GENDER']; ?>">
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_occupation_three" placeholder="" style="width: 150px; text-align: center; padding: 3px;" value="<?php echo $row['SO3_PROGOCCUP']; ?>">
                                                                                                </td>
                                                                                                <td class=" table_Contents">
                                                                                                    <input type="text" name="sibling_company_three" placeholder="" style="width: 150px; text-align: center; padding: 3px;" value="<?php echo $row['SO3_SCHCOMP']; ?>">
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
                                                                                            <input type="text" name="sports" placeholder="Enter sports" value="<?php echo $row['SPORTS']; ?>">
                                                                                        </div>
                                                                                
                                                                                        <div class="input-field">
                                                                                            <label>Hobbies</label>
                                                                                            <input type="text" name="hobbies" placeholder="Enter hobbies" value="<?php echo $row['HOBBIES']; ?>">
                                                                                        </div>
                                                                                
                                                                                        <div class="input-field">
                                                                                            <label>Talents</label>
                                                                                            <input type="text" name="talents" placeholder="Enter talents" value="<?php echo $row['TALENTS']; ?>">
                                                                                        </div>
                                                                                
                                                                                        <div class="input-field">
                                                                                            <label>Socio-civic</label>
                                                                                            <input type="text" name="socio" placeholder="Enter Socio-civic" value="<?php echo $row['SOCIO']; ?>">
                                                                                        </div>
                                                                                
                                                                                        <div class="input-field">
                                                                                            <label>School Organizations</label>
                                                                                            <input type="text" name="school_organization" placeholder="Enter School Organizations" value="<?php echo $row['SCHOOL_ORGANIZATION']; ?>">
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
                                                                                            <input type="text" name="workexperience_name_one" placeholder="" style="width: 180px; text-align: center; padding: 3px;" value="<?php echo $row['WE1_COMPNAME']; ?>">
                                                                                        </td>
                                                                                        <td class=" table_Contents">
                                                                                            <input type="text" name="workexperience_position_one" placeholder="" style="width: 150px; text-align: center; padding: 3px;" value="<?php echo $row['WE1_POSITION']; ?>">
                                                                                        </td>
                                                                                        <td class=" table_Contents">
                                                                                            <input type="text" name="workexperience_duration_one" placeholder="" style="width: 100px; text-align: center; padding: 3px;" value="<?php echo $row['WE1_DURATION']; ?>">
                                                                                        </td>
                                                                                        <td class=" table_Contents">
                                                                                            <input type="text" name="workexperience_job_one" placeholder="" style="width: 160px; text-align: center; padding: 3px;" value="<?php echo $row['WE1_JOB']; ?>">
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class=" table_Contents">
                                                                                            <input type="text" name="workexperience_name_two" placeholder="" style="width: 180px; text-align: center; padding: 3px;" value="<?php echo $row['WE2_COMPNAME']; ?>">
                                                                                        </td>
                                                                                        <td class=" table_Contents">
                                                                                            <input type="text" name="workexperience_position_two" placeholder="" style="width: 150px; text-align: center; padding: 3px;" value="<?php echo $row['WE2_POSITION']; ?>">
                                                                                        </td>
                                                                                        <td class=" table_Contents">
                                                                                            <input type="text" name="workexperience_duration_two" placeholder="" style="width: 100px; text-align: center; padding: 3px;" value="<?php echo $row['WE2_DURATION']; ?>">
                                                                                        </td>
                                                                                        <td class=" table_Contents">
                                                                                            <input type="text" name="workexperience_job_two" placeholder="" style="width: 160px; text-align: center; padding: 3px;" value="<?php echo $row['WE2_JOB']; ?>">
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class=" table_Contents">
                                                                                            <input type="text" name="workexperience_name_three" placeholder="" style="width: 180px; text-align: center; padding: 3px;" value="<?php echo $row['WE3_COMPNAME']; ?>">
                                                                                        </td>
                                                                                        <td class=" table_Contents">
                                                                                            <input type="text" name="workexperience_position_three" placeholder="" style="width: 150px; text-align: center; padding: 3px;" value="<?php echo $row['WE3_POSITION']; ?>">
                                                                                        </td>
                                                                                        <td class=" table_Contents">
                                                                                            <input type="text" name="workexperience_duration_three" placeholder="" style="width: 100px; text-align: center; padding: 3px;" value="<?php echo $row['WE3_DURATION']; ?>">
                                                                                        </td>
                                                                                        <td class=" table_Contents">
                                                                                            <input type="text" name="workexperience_job_three" placeholder="" style="width: 160px; text-align: center; padding: 3px;" value="<?php echo $row['WE3_JOB']; ?>">
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
                                                                <button type="submit" name="updateregister" class="btn btn-primary btn-md"><span class="btnText">Update</span>
                                                                    <i class="uil uil-navigator"></i></button>
                                                            </div>

                                                            <?php

        } while ($row = $get_data->fetch_assoc());
    }
                                                            ?>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- INDIVIDUAL INVENTORY FORM END -->
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
</div>


<?php
    // include('includes/stud___footer.php');
    include('includes/stud___scripts.php');
?>

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