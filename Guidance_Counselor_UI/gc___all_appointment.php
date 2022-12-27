<?php

session_start();

include_once("../connections/connection.php");

if (!isset($_SESSION['UserEmail'])) {
    echo "<script>window.open('../loginForm.php','_self')</script>";
} else {

    $con = connection();
    // AND appointments.app_status NOT LIKE 'Cancelled%'
    $query = "SELECT * FROM users LEFT JOIN appointments ON appointments.id_number = users.id_number WHERE appointments.id IS NOT NULL ORDER BY date ASC";
    $get_app = $con->query($query) or die($con->error);
    $row = $get_app->fetch_assoc();

    // For Cancel button
    // if (isset($_GET['cancel_id'])) {
    //     $cancel_id = $_GET['cancel_id'];
    //     $app_status = "Cancelled";
    //     $cancel_appointment = "UPDATE `appointments` SET `app_status`='$app_status' WHERE id = '$cancel_id'";
    //     $con->query($cancel_appointment) or die($con->error);
    //     header("Location: cancel_appointment.php?app_id=$cancel_id");
    // }

    if (isset($_GET['cancel_id'])) {
        $cancel_id = $_GET['cancel_id'];
          $getappdata = "SELECT * FROM `appointments` where `id` ='$cancel_id'";
         $get_info = $con->query($getappdata) or die($con->error);
         $app_row =  $get_info->fetch_assoc();
 
         $ref_id = $app_row['ref_id'];
         $userid =  $app_row['id_number'];
         $reason =  $app_row['reason'];
         $app_status =  "Cancelled";
         $date_accomplished = date("Y-m-d");
 
         $updlimit = "UPDATE `users` SET `limit_app`=0 WHERE id_number='$userid'" ;
         $con->query($updlimit) or die($con->error);
 
         if ($ref_id > 0){
 
             $upd = "UPDATE `refferals` SET `ref_status`='Cancelled referral' WHERE ref_id='$ref_id'";
             $con->query($upd) or die($con->error);
 
             $query = "INSERT INTO `appointment_history`(`app_id`, `reason`, `status`, `date_accomplished`,`id_number`) VALUES ('$cancel_id','$reason','$app_status','$date_accomplished','$userid')";
             $con->query($query) or die($con->error);
 
             }
         else{
             $query = "INSERT INTO `appointment_history`(`app_id`, `reason`, `status`, `date_accomplished`,`id_number`) VALUES ('$cancel_id','$reason','$app_status','$date_accomplished','$userid')";
             $con->query($query) or die($con->error);
 
                        }
 
              header("Location: cancel_appointment.php?app_id=$cancel_id");
 
         
         }

    if (isset($_GET['appointment_id'])) {
        $cancel_id = $_GET['appointment_id'];
        $app_status = "for appointment";
        $cancel_appointment = "UPDATE `appointments` SET `app_status`='$app_status' WHERE id = '$cancel_id'";
        $con->query($cancel_appointment) or die($con->error);
        header("Location: gc___all_appointment.php");
    }

    // For Done/Success button
    if (isset($_GET['success_id'])) {
        $success_id = $_GET['success_id'];
        $app_status = "Done";
        $success_appointment = "UPDATE `appointments` SET `app_status`='$app_status' WHERE id = '$success_id'";
        $app_status_row = $con->query($success_appointment) or die($con->error);

        if ($app_status_row > 0) {

            // Get Information in appointments to save in appointment History
            $info_query = "SELECT * FROM appointments WHERE id = '$success_id'";
            $get_info = $con->query($info_query) or die($con->error);
            $app_row =  $get_info->fetch_assoc();

            $ref_id = $app_row['ref_id'];

            // Change referral status to Done after pushing to appointments table
            if ($app_row > 0) {
                $app_status = "Pending Feedback";
                $ref_query = "UPDATE refferals SET ref_status = '$app_status' WHERE ref_id = '$ref_id'";
                $con->query($ref_query) or die($con->error);

                $reason = $app_row['info'];
                $date_accomplished = date("Y-m-d");

                $query = "INSERT INTO `appointment_history`(`app_id`, `reason`, `status`, `date_accomplished`) VALUES ('$success_id','$reason','$app_status','$date_accomplished')";
                $con->query($query) or die($con->error);
                header("Location: gc___all_appointment.php");
            }
        } else {
            header("Location: 404.php");
        }
    }


    if (isset($_GET['feedback_id'])) {
        $app_id = $_GET['feedback_id'];

        $app_query = "SELECT * FROM users LEFT JOIN appointments ON appointments.id_number = users.id_number WHERE appointments.id = '$app_id' ORDER BY appointments.date DESC";
        $app_details = $con->query($app_query) or die($con->error);
        $app_row =  $app_details->fetch_assoc();

        $_SESSION['AppId'] = $app_id;
    }

    // $fb_query = "SELECT * FROM `feedback`";
    // $fb_con = $con->query($fb_query) or die ($con->error);
    // $fb_row =  $fb_con->fetch_assoc();





?>



    <!doctype html>
    <html class="no-js" lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Guidance and Counseling - STI College Angeles</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- logo angeles_sti
        ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/sti_logo.png">
        <!-- Google Fonts
		============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- normalize CSS
		============================================ -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- meanmenu icon CSS
		============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="css/main.css">
        <!-- educate icon CSS
		============================================ -->
        <link rel="stylesheet" href="css/educate-custon-icon.css">
        <!-- morrisjs CSS
		============================================ -->
        <link rel="stylesheet" href="css/morrisjs/morris.css">
        <!-- mCustomScrollbar CSS
		============================================ -->
        <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
        <!-- metisMenu CSS
		============================================ -->
        <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
        <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
        <!-- calendar CSS
		============================================ -->
        <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
        <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
        <!-- datapicker CSS
		============================================ -->
        <link rel="stylesheet" href="./css/datapicker/datepicker3.css">
        <!-- x-editor CSS
		============================================ -->
        <link rel="stylesheet" href="css/editor/select2.css">
        <link rel="stylesheet" href="css/editor/datetimepicker.css">
        <link rel="stylesheet" href="css/editor/bootstrap-editable.css">
        <link rel="stylesheet" href="css/editor/x-editor-style.css">
        <!-- normalize CSS
		============================================ -->
        <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
        <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
        <!-- modals CSS
		============================================ -->
        <link rel="stylesheet" href="./css/modals.css">
        <!-- forms CSS
		============================================ -->
        <link rel="stylesheet" href="css/form/all-type-forms.css">
        <!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="style.css">
        <!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr JS
		============================================ -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <style>
            input[type="radio"] {
                margin-left: 10px 0;
            }
        </style>
    </head>

    <body>

        <?php include('includes/gc___left-menu-area.php') ?>
        <?php include('includes/gc___top-menu-area.php') ?>
        <?php include('includes/gc___mobile_menu.php')  ?>


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
                                        <li><span class="bread-blod">All Appointment Schedule</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if (isset($_GET['feedback_id'])) { ?>
            <!-- Add new Referral -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div id="ADD_FEEDBACK" class="modal modal-edu-general default-popup-PrimaryModal show" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header header-color-modal bg-color-1">
                                <h4 class="modal-title">Add Feedback</h4>
                                <div class="modal-close-area modal-close-df">
                                    <a class="close" data-dismiss="modal" href="gc___all_appointment.php"><i class="fa fa-close"></i></a>
                                </div>
                            </div>
                            <!-- <input type="text" value="<?php echo $id = $_GET['feedback_id']; ?>" /> -->


                            <form action="appointment_feedback.php" method="POST">
                                <!-- <form action="" method="POST"> -->
                                <div class="modal-body">
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <label class="login2 pull-right">Full Name</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <h5 style="margin-top: 12px; margin-left: 15px; text-align: left;"><?= $app_row['first_name'] ?> <?= $app_row['last_name'] ?></h5>
                                                <input type="hidden" class="form-control" name="stud_name" placeholder="Enter Full Name" value="<?= $app_row['first_name'] ?> <?= $app_row['last_name'] ?>" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <label class="login2 pull-right">Program</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <h5 style="margin-top: 12px; margin-left: 15px; text-align: left;"><?= $app_row['program'] ?></h5>
                                                <input type="hidden" class="form-control" name="program" placeholder="Program" value="<?= $app_row['program'] ?>" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <label class="login2 pull-right">Level/Section</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <h5 style="margin-top: 12px; margin-left: 15px; text-align: left;"><?= $app_row['level'] ?></h5>
                                                <input type="hidden" class="form-control" name="section" placeholder="Enter Level / Section" value="<?= $app_row['level'] ?>" required />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Start If the appointment comes from Referral get ref_date otherwise no value -->
                                    <!-- <?php if ($app_row['ref_id'] != 0) { ?>
                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Referral Date</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="date" class="form-control" name="ref_date" value="<?php echo $date_row['refferal_date'] ?>" disabled />
                                        </div>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Referral Date</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="date" class="form-control" name="ref_date" value="" disabled />
                                        </div>
                                    </div>
                                </div>
                            <?php } ?> -->
                                    <!-- End If the appointment comes from Referral get ref_date otherwise no value -->

                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <label class="login2 pull-right">Session Date</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <h5 style="margin-top: 12px; margin-left: 15px; text-align: left;"><?= $app_row['date'] ?></h5>
                                                <input type="hidden" class="form-control" name="session_date" value="<?= $app_row['date'] ?>" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <label class="login2 pull-right">Action Taken</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" name="action_taken" placeholder="Action/s Taken" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <label class="login2 pull-right">Remarks</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" name="remarks" placeholder="Remarks" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <div style="display: flex; justify-content: end;">
                                        <a class="btn " style="background-color: #fff; color: #337ab7; border: 1px solid #337ab7; margin-right: 10px;" href="gc___all_appointment.php">Cancel</a>
                                        <button type="submit" name="add_feedback" class="btn btn-primary btn-md">Submit</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1> Appointment<span class="table-project-n"> Schedule</span> Table</h1>
                                </div>

                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <!-- <select class="form-control dt-tb">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select> -->

                                        <div class="card-header py-3">
                                            <h5 class="m-0 font-weight-bold text-primary">
                                                <!-- Guidance Counselor -->
                                                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ADD_APPOINTMENT">
                                                Add New Appointment
                                            </button> -->

                                            </h5>
                                        </div>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="appoint_stud_name">Student Name</th>
                                                <th data-field="appoint_reason">Nature</th>
                                                <!-- <th data-field="appoint_nature">Nature</th> -->
                                                <th data-field="appoint_ref_reason">Information</th>
                                                <!-- <th data-field="appoint_concern">Concern</th> -->
                                                <th data-field="appoint_date">Date</th>
                                                <th data-field="appoint_time">Time</th>
                                                <th data-field="appoint_type">Type</th>
                                                <th data-field="appoint_link">Meeting Link</th>
                                                <th data-field="appoint_status">Status</th>
                                                <!-- <th data-field="appoint_edit">Edit</th> -->
                                                <th data-field="appoint_cancel"></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- If no Data to display display null -->
                                            <?php if ($row == 0) {
                                                echo null;
                                            } else {
                                                do { ?>
                                                    <tr>

                                                        <td><?php echo $row['first_name'] ?> <?php echo $row['last_name'] ?></td>
                                                        <td><?php echo $row['subject'] ?></td>
                                                        <!-- <td><?php echo $row['nature'] ?></td> -->
                                                        <td><?php echo $row['info'] ?></td>
                                                        <!-- <td>Concern</td> -->
                                                        <td><?php echo $row['date'] ?></td>
                                                        <td><?php echo $row['timeslot'] ?></td>
                                                        <td><?php echo $row['appointment_type'] ?></td>
                                                        <td><?php echo $row['meeting_link'] ?></td>
                                                        <td><?php echo $row['app_status'] ?></td>
                                                        <!-- <td>
                                            <span class="btn btn-xs <?php if ($row['app_status'] == "in review" || $row['app_status'] == "In Review") {
                                                                        echo "btn-primary";
                                                                    } elseif ($row['app_status'] == "completed" || $row['app_status'] == "Completed") {
                                                                        echo "btn-success";
                                                                    } elseif ($row['app_status'] == "cancelled" || $row['app_status'] == "Cancelled") {
                                                                        echo "btn-danger";
                                                                    } elseif ($row['app_status'] == "done" || $row['app_status'] == "Done") {
                                                                        echo "btn-warning";
                                                                    } else {
                                                                        echo "btn-primary";
                                                                    } ?>"><?php if ($row['app_status'] == "done" || $row['app_status'] == "Done") {
                                                            echo "Pending Feedback";
                                                        } else {
                                                            echo $row['app_status'];
                                                        }
                                                        ?></span>
                                            </td> -->
                                                        <td>

                                                            <?php if ($row['app_status'] == "done" || $row['app_status'] == "Done") { ?>
                                                                <!-- <div style="display: <?php if ($app_row == "done" || $app_row == "Done") {
                                                                                                echo "none";
                                                                                            } else {
                                                                                                echo "flex";
                                                                                            } ?>; justify-content: center; text-align: center;"> -->
                                                                <div style="justify-content: center; text-align: center;">
                                                                    <a class="btn btn-primary" style="margin-left: 10px; color: white;" href="gc___all_appointment.php?feedback_id=<?= $row['id'] ?>">Add Feedback</a>
                                                                </div>
                                                            <?php } elseif ($row['app_status'] == "for appointment" || $row['app_status'] == "For Appointment") { ?>
                                                                <div style="display: flex; justify-content: center;">
                                                                    <a class="btn btn-danger" style="margin-left: 10px; color: white;" href="gc___all_appointment.php?cancel_id=<?= $row['id'] ?>">Cancel</a>
                                                                    <!-- <a class="btn btn-success" style="margin-left: 10px; color: white;" href="gc___all_appointment.php?appointment_id=<?= $row['id'] ?>">Done</a> -->
                                                                </div>
                                                            <?php } elseif ($row['app_status'] == "in review" || $row['app_status'] == "In Review") { ?>
                                                                <div style="display: flex; justify-content: center;">
                                                                    <a class="btn btn-danger" style="margin-left: 10px; color: white;" href="gc___all_appointment.php?cancel_id=<?= $row['id'] ?>">Cancel</a>
                                                                    <a class="btn btn-info" style="margin-left: 10px; color: white;" href="gc___all_appointment.php?appointment_id=<?= $row['id'] ?>">For Appointment</a>
                                                                    <!-- <a class="btn btn-success" style="margin-left: 10px; color: white;" href="gc___all_appointment.php?success_id=<?= $row['id'] ?>">Done</a> -->
                                                                </div>
                                                            <?php } elseif ($row['app_status'] == "cancelled" || $row['app_status'] == "Cancelled") {
                                                                echo null;
                                                            } else {
                                                                echo "<p style='text-align: center;' >Done Feedback</p>";
                                                            } ?>
                                                        </td>

                                                    </tr>
                                            <?php } while ($row = $get_app->fetch_assoc());
                                            } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->

        </div>


        <?php include('includes/gc___scripts.php'); ?>

        <script>
            function changeDropdown() {
                var state = document.getElementById("mySelect").value;
                // alert(state);
                if (state == "student") {
                    document.getElementById("STUD_ID").style.display = "block";
                    document.getElementById("STUD_NAME").style.display = "block";
                    document.getElementById("STUD_PROGRAM").style.display = "block";
                    document.getElementById("STUD_LEVEL").style.display = "block";

                    document.getElementById("STAFF_ID").style.display = "none";
                    document.getElementById("STAFF_NAME").style.display = "none";

                    document.getElementById("FACULTY_ID").style.display = "none";
                    document.getElementById("FACULTY_NAME").style.display = "none";

                } else if (state == "staff") {
                    document.getElementById("STUD_ID").style.display = "none";
                    document.getElementById("STUD_NAME").style.display = "none";
                    document.getElementById("STUD_PROGRAM").style.display = "none";
                    document.getElementById("STUD_LEVEL").style.display = "none";

                    document.getElementById("STAFF_ID").style.display = "block";
                    document.getElementById("STAFF_NAME").style.display = "block";

                    document.getElementById("FACULTY_ID").style.display = "none";
                    document.getElementById("FACULTY_NAME").style.display = "none";

                } else if (state == "faculty") {
                    document.getElementById("STUD_ID").style.display = "none";
                    document.getElementById("STUD_NAME").style.display = "none";
                    document.getElementById("STUD_PROGRAM").style.display = "none";
                    document.getElementById("STUD_LEVEL").style.display = "none";

                    document.getElementById("STAFF_ID").style.display = "none";
                    document.getElementById("STAFF_NAME").style.display = "none";

                    document.getElementById("FACULTY_ID").style.display = "block";
                    document.getElementById("FACULTY_NAME").style.display = "block";

                } else {
                    document.getElementById("STUD_ID").style.display = "none";
                    document.getElementById("STUD_NAME").style.display = "none";
                    document.getElementById("STUD_PROGRAM").style.display = "none";
                    document.getElementById("STUD_LEVEL").style.display = "none";

                    document.getElementById("STAFF_ID").style.display = "none";
                    document.getElementById("STAFF_NAME").style.display = "none";

                    document.getElementById("FACULTY_ID").style.display = "none";
                    document.getElementById("FACULTY_NAME").style.display = "none";


                }
            }
        </script>

        <!-- data table JS
		============================================ -->
        <script src="js/data-table/bootstrap-table.js"></script>
        <script src="js/data-table/tableExport.js"></script>
        <script src="js/data-table/data-table-active.js"></script>
        <script src="js/data-table/bootstrap-table-editable.js"></script>
        <script src="js/data-table/bootstrap-editable.js"></script>
        <script src="js/data-table/bootstrap-table-resizable.js"></script>
        <script src="js/data-table/colResizable-1.5.source.js"></script>
        <script src="js/data-table/bootstrap-table-export.js"></script>
        <!--  editable JS
		============================================ -->
        <script src="js/editable/jquery.mockjax.js"></script>
        <script src="js/editable/mock-active.js"></script>
        <script src="js/editable/select2.js"></script>
        <script src="js/editable/moment.min.js"></script>
        <script src="js/editable/bootstrap-datetimepicker.js"></script>
        <script src="js/editable/bootstrap-editable.js"></script>
        <script src="js/editable/xediable-active.js"></script>
        <!-- Chart JS
		============================================ -->
        <script src="js/chart/jquery.peity.min.js"></script>
        <script src="js/peity/peity-active.js"></script>
        <!-- icheck JS
		============================================ -->
        <script src="js/icheck/icheck.min.js"></script>
        <script src="js/icheck/icheck-active.js"></script>


    </body>

    </html>

<?php } ?>