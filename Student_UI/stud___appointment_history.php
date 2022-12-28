<?php

session_start();

include_once("../connections/connection.php");

if (!isset($_SESSION['UserEmail'])) {
    echo "<script>window.open('../loginForm.php','_self')</script>";
} else {

    $con = connection();

    $user_id = $_SESSION['UserId'];
    
    $user_query = "SELECT * FROM users WHERE user_id = '$user_id'";
    $get_user = $con->query($user_query) or die($con->error);
    $rowuser = $get_user->fetch_assoc();

    $userid = $rowuser['id_number'];

    // AND appointments.app_status NOT LIKE 'Cancelled%'

  
    $query = "SELECT * FROM appointment_history WHERE id_number = $userid ORDER BY date_accomplished DESC";
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

    // if (isset($_GET['appointment_id'])) {
    //     $cancel_id = $_GET['appointment_id'];
    //     $app_status = "for appointment";
    //     $cancel_appointment = "UPDATE `appointments` SET `app_status`='$app_status' WHERE id = '$cancel_id'";
    //     $con->query($cancel_appointment) or die($con->error);
    //     header("Location: gc___all_appointment.php");
    }

    // For Done/Success button
    // if (isset($_GET['success_id'])) {
    //     $success_id = $_GET['success_id'];
    //     $app_status = "Done";
    //     $success_appointment = "UPDATE `appointments` SET `app_status`='$app_status' WHERE id = '$success_id'";
    //     $app_status_row = $con->query($success_appointment) or die($con->error);

    //     if ($app_status_row > 0) {

    //         // Get Information in appointments to save in appointment History
    //         $info_query = "SELECT * FROM appointments WHERE id = '$success_id'";
    //         $get_info = $con->query($info_query) or die($con->error);
    //         $app_row =  $get_info->fetch_assoc();

    //         $ref_id = $app_row['ref_id'];

    //         // Change referral status to Done after pushing to appointments table
    //         if ($app_row > 0) {
    //             $app_status = "Pending Feedback";
    //             $ref_query = "UPDATE refferals SET ref_status = '$app_status' WHERE ref_id = '$ref_id'";
    //             $con->query($ref_query) or die($con->error);

    //             $reason = $app_row['info'];
    //             $date_accomplished = date("Y-m-d");

    //             $query = "INSERT INTO `appointment_history`(`app_id`, `reason`, `status`, `date_accomplished`) VALUES ('$success_id','$reason','$app_status','$date_accomplished')";
    //             $con->query($query) or die($con->error);
    //             header("Location: gc___all_appointment.php");
    //         }
    //     } else {
    //         header("Location: 404.php");
    //     }
    // }


    // if (isset($_GET['feedback_id'])) {
    //     $app_id = $_GET['feedback_id'];

    //     $app_query = "SELECT * FROM users LEFT JOIN appointments ON appointments.id_number = users.id_number WHERE appointments.id = '$app_id'";
    //     $app_details = $con->query($app_query) or die($con->error);
    //     $app_row =  $app_details->fetch_assoc();

    //     $_SESSION['AppId'] = $app_id;
    // }

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

        <?php include('includes/stud___left-menu-area.php') ?>
        <?php include('includes/stud___top-menu-area.php') ?>
        <?php include('includes/stud___mobile_menu.php')  ?>


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

       

        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1> Appointment<span class="table-project-n"> History</h1>
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
                                                <th data-field="appoint_reason">Nature</th>
                                                <th data-field="appoint_ref_reason">Information</th>
                                                <th data-field="appoint_date">Date and Time</th> <!--dito yung date and time nung mismong appointment-->
                                                <th data-field="appoint_type">Type</th>
                                                <th data-field="appoint_link">Meeting Link</th>
                                                <th data-field="appoint_cancel">Reason for Canceling</th>
                                                <th data-field="appoint_date_accomplished">Date_accomplished</th><!-- dito yung natapos na, either kelan nacancel or natapos appointment-->
                                                <th data-field="appoint_status">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- If no Data to display display null -->
                                            <?php if ($row == 0) {
                                                echo null;
                                            } else {
                                                do { ?>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><?php echo $row['cancel_reason'] ?></td>
                                                        <td><?php echo $row['updated_at'] ?></td>
                                                        <td><?php echo $row['status'] ?></td>
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


        <?php include('includes/stud___scripts.php'); ?>

        <script>
           
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

<?php  ?>