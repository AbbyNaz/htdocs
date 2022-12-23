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

?>
<?php
    include('includes/staff___header.php');
    include('includes/staff___left-menu-area.php');
    include('includes/staff___top-menu-area.php');
    include('includes/staff___mobile_menu.php');
?>



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
                                <li><a href="staff___dashboard.php">Home</a> <span class="bread-slash">/</span>
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
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
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
                                    <p><b>Staff ID</b><br />
                                        <?= $row['id_number'] ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                    <p><b>Full Name </b><br />
                                        <?= $row['first_name'] ?>
                                            <?= $row['last_name'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr">
                                    <p><b>Department</b><br />
                                        <?= $row['program'] ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                    <p><b>Position</b><br />
                                        <?= $row['level'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                    <ul id="myTabedu1" class="tab-review-design">

                        <!-- <li class="active"><a href="#description">Offense Monitoring</a></li> -->
                        <!-- <li class="active"><a href="#reviews"> Counseling Info</a></li> -->
                        <li class="active"><a href="#INFORMATION">Update Details</a></li>


                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <!-- <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="chat-discussion" style="height: auto">
                                            <div class="chat-message">

                                                <div class="message">
                                                    <a class="message-author" href="#"> Bullying </a>
                                                    <span class="message-date"> Mon / Jan 26 2015 - 12:00pm </span>
                                                    <span class="message-content">Nambully ng student</span>
                                                    <a class="btn btn-s btn-danger"><i></i> Sanction: 15hrs left </a>

                                                </div>
                                            </div>
                                            <div class="chat-message">

                                                <div class="message">
                                                    <a class="message-author" href="#"> Bullying </a>
                                                    <span class="message-date"> Mon / Jan 26 2015 - 12:00pm </span>
                                                    <span class="message-content">Nambully ng student
                                                    </span>

                                                    <a class="btn btn-s btn-danger"><i></i> Sanction: 15hrs left </a>

                                                </div>
                                            </div>
                                            <div class="chat-message">

                                                <div class="message">
                                                    <a class="message-author" href="#"> Jennifer sanchez </a>
                                                    <span class="message-date"> Mon Jan 26 2015 - 18:39:23 </span>
                                                    <span class="message-content">reffered student, for counseling
                                                    </span>
                                                    <div class="m-t-md mg-t-10">
                                                        <a class="btn btn-xs btn-default"><i></i> Set schedule </a>

                                                        <a class="btn btn-xs btn-default"><i></i> Done </a>
                                                    </div>
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
                                                <div class="profile-hdtc">
                                                    <img class="message-avatar" src="img/contact/1.jpg" alt="">
                                                </div>
                                                <div class="message">
                                                    <a class="message-author" href="#"> Michael Smith </a>
                                                    <span class="message-date"> Mon Jan 26 2015 - 18:39:23 </span>
                                                    <span class="message-content">reffered student, for counseling
                                                    </span>
                                                    <div class="m-t-md mg-t-10">
                                                        <a class="btn btn-xs btn-default"><i></i> Review </a>

                                                        <a class="btn btn-xs btn-default"><i></i> Archive </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-message">
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
                                            </div>
                                            <div class="chat-message">
                                                <div class="profile-hdtc">
                                                    <img class="message-avatar" src="img/contact/3.jpg" alt="">
                                                </div>
                                                <div class="message">
                                                    <a class="message-author" href="#"> Jennifer sanchez </a>
                                                    <span class="message-date"> Mon Jan 26 2015 - 18:39:23 </span>
                                                    <span class="message-content">reffered student, for counseling
                                                    </span>
                                                    <div class="m-t-md mg-t-10">
                                                        <a class="btn btn-xs btn-default"><i></i> Review </a>

                                                        <a class="btn btn-xs btn-default"><i></i> archive </a>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                             </div> -->
                    </div>
                    <div class="tab-content custom-product-edit" id="INFORMATION">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="review-content-section">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="First Name"
                                                        name="first_name" value="<?= $row['first_name'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Last Name"
                                                        name="last_name" value="<?= $row['last_name'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Middle Name"
                                                        name="middle_name" value="<?= $row['middle_name'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="date" class="form-control" placeholder="Date of Birth"
                                                        name="birthday" value="<?= $row['date_of_birth'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Position"
                                                        name="position" value="<?= $row['position'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">

                                                <div class="form-group">
                                                    <select class="form-control" name="gender">
                                                        <option value="" disabled>Select Gender</option>
                                                        <option <?=($row['gender']=="Male" || $row['gender']=="male") ?
                                                            "selected" : "" ?>>Male</option>
                                                        <option <?=($row['gender']=="Female" ||
                                                            $row['gender']=="female") ? "selected" : "" ?>>Female
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Address"
                                                        name="address" value="<?= $row['address'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <!-- <select id="country" class="form-control" onchange="disabledstate">
                                                                                <option value="" >Select City</option>
                                                                                <option value="0">San Fernando</option>
                                                                                <option value="1">Mabalacat</option>
                                                                                <option value="2">Angeles</option>
                                                                            </select> -->
                                                    <!-- <div id="0" class="group">
                                                                                <div class="form-group">
                                                                                    <select name="state" class="form-control">
                                                                                        <option value="none" selected="" disabled="">Select state</option>
                                                                                        <option value="0">San Luis</option>
                                                                                        <option value="1">San Simon</option>
                                                                                        <option value="2">Santa Ana</option>
                                                                                        <option value="3">Santa Rita</option>
                                                                                        <option value="4">Santo tomas</option>
                                                                                        <option value="5">Sasmuan</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div> -->
                                                    <!-- <div id="1" class="group">
                                                                                <div class="form-group">
                                                                                    <select name="state" class="form-control">
                                                                                        <option value="none" selected="" disabled="true">Select state</option>
                                                                                        <option value="0">Macabebe</option>
                                                                                        <option value="1">Magalang</option>
                                                                                        <option value="2">Masantol</option>
                                                                                        <option value="3">Mexico</option>
                                                                                        <option value="4">Minalin</option>
                                                                                        <option value="5">Porac</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div> -->
                                                    <!-- <div id="2" class="group">
                                                                                <div class="form-group">
                                                                                    <select name="state" class="form-control">
                                                                                        <option value="none" selected="" disabled="true">Select state</option>
                                                                                        <option value="0">Apalit</option>
                                                                                        <option value="1">Arayat</option>
                                                                                        <option value="2">Bacolor</option>
                                                                                        <option value="3">Candaba</option>
                                                                                        <option value="4">Floridablanca</option>
                                                                                        <option value="5">Guagua</option>
                                                                                        <option value="6">Lubao</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div> -->
                                                </div>
                                                <input type="tel" class="form-control" placeholder="Contact Number"
                                                    name="contact" value="<?= $row['contact'] ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="payment-adress mg-t-15">
                                                    <button type="submit" name="update_details"
                                                        class="btn btn-primary waves-effect waves-light mg-b-15">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
    include('includes/staff___scripts.php');
}
?>