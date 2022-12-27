<?php

session_start();

include_once("../connections/connection.php");

if (!isset($_SESSION['UserEmail'])) {

    echo "<script>window.open('../loginForm.php','_self')</script>";
} else {

    $con = connection();

    $id_number = $_SESSION['UserNumber'];

    if ($id_number != null) {
        
        $query = "SELECT * FROM users WHERE id_number = '$id_number'";
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
        $query_run = $con->query($update_query) or die($con->error);
        // header("Location: gc___staff_profile.php?id=$id");

        $_SESSION['status'] = "Profile Updated";
        $_SESSION['status_code'] = "success";
        header("Location: gc___staff_profile.php?id=$id");


        // if ($query_run) {
        //     // echo "Saved";
        //     $_SESSION['status'] = "Profile Updated";
        //     $_SESSION['status_code'] = "success";
        //     header("Location: gc___staff_profile.php?id=$id");

        // } else {
        //     // echo "Not saved";
        //     $_SESSION['status'] = "Profile Not Updated";
        //     $_SESSION['status_code'] = "error";
        //     header("Location: gc___staff_profile.php?id=$id");

        // }

    }
    
?>

    <?php
    include('includes/gc___header.php');
    include('includes/gc___left-menu-area.php');
    include('includes/gc___top-menu-area.php');
    include('includes/gc___mobile_menu.php');
    ?>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">  
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
    </div>

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
                                    <li><span class="bread-blod">Staff Profile</span>
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
                                <img src="img/users/1.jpg" alt="profile_picture" />
                            <?php } ?>
                        </div>

                        <!-- PROFILE PICTURE SAMPLE -->
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

                        <div class="profile-details-hr">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr">
                                        <p><b>Name</b><br /> <?= $row['first_name'] ?> <?= $row['last_name'] ?></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                        <p><b>Position</b><br /> <?= $row['dep_position'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr">
                                        <p><b>Email ID</b><br /> <?= $row['email'] ?></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                        <p><b>Contact Number</b><br /> <?= $row['contact'] ?></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                        <ul id="myTabedu1" class="tab-review-design">
                            <!-- <li class="active"><a href="#description"><small>Referral</small></a></li> -->
                            <!-- <li><a href="#reviews"><small>History</small></a></li> -->
                            <!-- <li><a href="#INFORMATION"><small>Reset Password</small></a></li> -->
                            <li class="active"><a href="#UPDATE"><small>Update Details</small></a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <!-- <div class="product-tab-list tab-pane fade active in" id="description">
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
                                                            <a class="btn btn-xs btn-default"><i></i> Set schedule </a>

                                                            <a class="btn btn-xs btn-default"><i></i> Done </a>
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
                                                            <a class="btn btn-xs btn-default"><i></i> Set schedule </a>

                                                            <a class="btn btn-xs btn-default"><i></i> Done </a>
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
                                                            <a class="btn btn-xs btn-default"><i></i> Set schedule </a>

                                                            <a class="btn btn-xs btn-default"><i></i> Done </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            <!-- </div> -->
                            <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <div class="form-group" style="text-align: center; margin-top: 30px; margin-bottom: 70px">
                                                        <p style="font-size: 15px">Reset <span style="font-weight: bold"><?= $row['email'] ?></span>'s password?</p>
                                                    </div>

                                                    <!-- <div class="form-group">
                                                        <label>Email</label>
                                                        <input name="email" type="text" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Password</label>
                                                        <input type="text" class="form-control" placeholder="Password">
                                                    </div> -->

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="payment-adress mg-t-15">
                                                        <!-- <button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15">Submit</button> -->
                                                        <button type="button" class="btn btn-primary waves-effect waves-light mg-b-15" data-toggle="modal" data-target="#RESET_PASSWORD">Reset Password</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                </div>
                            </div> -->
                            <!-- <div class="product-tab-list tab-pane fade" id="UPDATE"> -->
                            <div id="UPDATE" class="tab-content custom-product-edit">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <form action="" method="post">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="First Name" name="first_name" value="<?= $row['first_name'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="<?= $row['last_name'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Middle Name" name="middle_name" value="<?= $row['middle_name'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="date" class="form-control" placeholder="Date of Birth" name="birthday" value="<?= $row['date_of_birth'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Position" name="position" value="<?= $row['position'] ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">

                                                        <div class="form-group">
                                                            <select class="form-control" name="gender">
                                                                <option value="" disabled>Select Gender</option>
                                                                <option <?= ($row['gender'] == "Male" || $row['gender'] == "male") ? "selected" : "" ?>>Male</option>
                                                                <option <?= ($row['gender'] == "Female" || $row['gender'] == "female") ? "selected" : "" ?>>Female</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Address" name="address" value="<?= $row['address'] ?>">
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
                                                        <input type="tel" class="form-control" placeholder="Contact Number" name="contact" value="<?= $row['contact'] ?>">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress mg-t-15">
                                                            <button type="submit" name="update_details" class="btn btn-primary waves-effect waves-light mg-b-15">Submit</button>
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
    include('includes/gc___scripts.php');
}
?>