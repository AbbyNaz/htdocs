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


    if (isset($_GET['appointment_id'])) {
        $cancel_id = $_GET['appointment_id'];
        if(isset($_GET['type']) && $_GET['type'] == "Online"){
            header("Location: gc___all_appointment.php?appID=$cancel_id");
        }else{
            $app_status = "for appointment";
            $cancel_appointment = "UPDATE `appointments` SET `app_status`='$app_status' WHERE id = '$cancel_id'";
            $con->query($cancel_appointment) or die($con->error);
            header("Location: gc___all_appointment.php");
        } 
    }

    if(isset($_POST['AddLink'])){
        $App_id = $_POST['AppID'];
        $app_status = "for appointment";
        $link = $_POST['meetlink'];
        $cancel_appointment = "UPDATE `appointments` SET `app_status`='$app_status', meeting_link = '$link' WHERE id = '$App_id'";
        $con->query($cancel_appointment) or die($con->error);
        header("Location: gc___all_appointment.php?".$link.$App_id);
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

<!-- Modal -->
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <div id="req-modal" class="modal modal-edu-general default-popup-PrimaryModal fade" data-backdrop="static" data-keyboard="false" role="dialog">
  <div class="modal-dialog" style="overflow-y: scroll; max-height:90%;  margin-top: 50px; margin-bottom:70px;" >
      <div class="modal-content">
        <div class="modal-header header-color-modal bg-color-1">
          <h4 class="modal-title">Add Meeting Link</h4>
          <div class="modal-close-area modal-close-df">
            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
          </div>
        </div>
        <div class="modal-body">
            <form action="gc___all_appointment.php" method="post">
            <div class="form-group-inner" id="STUD_ID">
              <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                  <label class="login2 pull-right pull-right-pro">Name</label>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                  <div class="input-group">
                    <input type="text" class="form-control" id="student_name" readonly />
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group-inner data-custon-pick" id="data_2">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-9">
                  <label class="login2 pull-right" style="font-weight: bold;">ID</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                  <input type="text" id="myid" class="form-control" readonly />
                </div>
              </div>
            </div>

            <div class="form-group-inner data-custon-pick" id="data_2">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-9">
                  <label class="login2 pull-right" style="font-weight: bold;">Position</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                  <input type="text" id="pos" class="form-control" readonly />
                </div>
              </div>
            </div>

            <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                      <label class="login2 pull-right pull-right-pro">Nature </label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                      <div class="bt-df-checkbox pull-left">
                          <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div class="i-checks pull-left">
                                      <label>
                                          <input id="Academic" type="checkbox" name="nature[]" value="Academic" disabled> <i></i> Academic </label>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div class="i-checks pull-left">
                                      <label>
                                          <input id="Career" type="checkbox" name="nature[]" value="Career" disabled> <i></i> Career </label>
                                  </div>
                              </div>
                            </div>
                          <div class="row"> 
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div class="i-checks pull-left">
                                      <label>
                                          <input id="Personal" type="checkbox" name="nature[]" value="Personal" disabled> <i></i> Personal </label>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div class="i-checks pull-left">
                                      <label>
                                          <input id="Crisis" type="checkbox" name="nature[]" value="Crisis" disabled> <i></i> Crisis </label>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right">Time From</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="form-select-list">
                  <select id="selectTimeslot" class="form-control custom-select-value" name="timeslot" disabled >
                    <option id="9:00-am" value="9:00 am">9:00 am</option>
                    <option id="10:00-am" value="10:00 am">10:00 am</option>
                    <option id="11:00-am" value="11:00 am">11:00 am</option>
                    <option id="1:00-pm" value="1:00 pm">1:00 pm</option>
                    <option id="2:00-pm" value="2:00 pm">2:00 pm</option>
                    <option id="3:00-pm" value="3:00 pm">3:00 pm</option>
                    <option id="4:00-pm" value="4:00 pm">4:00 pm</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right">Time To</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="form-select-list">
                  <select id="selectTimeslot-to" class="form-control custom-select-value" name="timeslot" disabled>

                    <option id="10:00-am" value="10:00 am">10:00 am</option>
                    <option id="11:00-am" value="11:00 am">11:00 am</option>
                    <option id="12:00-pm" value="12:00 pm">12:00 pm</option>
                    <option id="2:00-pm" value="2:00 pm">2:00 pm</option>
                    <option id="3:00-pm" value="3:00 pm">3:00 pm</option>
                    <option id="4:00-pm" value="4:00 pm">4:00 pm</option>
                    <option id="5:00-pm" value="5:00 pm">5:00 pm</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right">Reason</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="text" id="reason" class="form-control" placeholder="Enter Appointment Subject" readonly />
              </div>
            </div>
          </div>

          <div class="form-group-inner data-custon-pick" id="data_2">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-9">
                <label class="login2 pull-right" style="font-weight: bold;">Date</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="text" id="date-selected" class="form-control" readonly />
              </div>
            </div>
          </div>

          <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right">Type</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="form-select-list">
                  <select class="form-control custom-select-value" id="type" readonly>
                    <option>Online</option>
                  </select>
                </div>
              </div>
            </div>
          </div>



          <div class="form-group-inner" id="meeting">
            <div class="row">
              <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <label class="login2 pull-right pull-right-pro">Meeting Link</label>
              </div>
              <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="input-group">
                  <input name="meetlink" type="text" class="form-control" id="meetinglink" placeholder="Input Meeting Link">
                  <div class="input-group-btn">
                    <!-- <a href="gc___search-students.php"><button tabindex="-1" class="btn btn-primary btn-md" type="button" >Search</button></a> -->
                    <a href="https://teams.microsoft.com/_?lm=deeplink&lmsrc=NeutralHomePageWeb&cmpid=WebSignIn&culture=en-us&country=us#/scheduling-form/?opener=1&navCtx=navigateHybridContentRoute" style="cursor: pointer;" target="blank"><button tabindex="-1" id="search-meetinglink" class="btn btn-primary btn-md" type="button">Link</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>


            
          <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right">Information</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="text" id="information" class="form-control" placeholder="Enter Appointment Information" readonly/>
              </div>
            </div>
          </div>

        </div>
<!-- ADD APPOINTMENT -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
          <button type="submit" name="AddLink"  data-status="0" class="btn btn-primary btn-md">Add</button>
          <input type="hidden" name="AppID" id="appID" class="form-control"/>
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
                                                <th data-field="appoint_name">Name</th>
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
                                                <th data-field="appoint_cancel">Action</th>

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
                                                                    <a class="btn btn-danger" style="margin-left: 10px; color: white;" href="cancel_appointment.php?app_id=<?= $row['id'] ?>">Cancel</a>
                                                                    <!-- <a class="btn btn-success" style="margin-left: 10px; color: white;" href="gc___all_appointment.php?appointment_id=<?= $row['id'] ?>">Done</a> -->
                                                                </div>
                                                            <?php } elseif ($row['app_status'] == "in review" || $row['app_status'] == "In Review") { ?>
                                                                <div style="display: flex; justify-content: center;">
                                                                    <a class="btn btn-danger" style="margin-left: 10px; color: white;" href="cancel_appointment.php?app_id=<?= $row['id'] ?>">Cancel</a>
                                                                    <a class="btn btn-info" style="margin-left: 10px; color: white;" href="gc___all_appointment.php?appointment_id=<?= $row['id'] ?>&type=<?= $row['appointment_type'] ?>">For Appointment</a>
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
<script>
  $(document).ready(function() {
    var refId = null;

    $.urlParam = function(name){
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if(!results) return;
        return results[1] || 0;
    }

    AppID = $.urlParam('appID');
    if (AppID != null) {
        $.ajax({
              url: "get_Appointment.php",
              data: {AppID: AppID},
              success: function(data) {
                var Appointment = JSON.parse(data);

                var name = Appointment.name;
                var id = Appointment.id_number;
                var position = Appointment.position;
                var natures = Appointment.nature;
                var start = Appointment.timeslot;
                var end = Appointment.timeslot_end;
                var reason = Appointment.subject;
                var date = Appointment.date;
                var type = Appointment.appointment_type;
                var link = Appointment.meeting_link;
                var information = Appointment.info;

                console.log(natures);
                if (natures.includes("Academic")) {
                    $('#Academic').attr('checked', 'checked');
                }
                if (natures.includes("Career")) {
                    $('#Career').attr('checked', 'checked');
                }
                if (natures.includes("Personal")) {
                    $('#Personal').attr('checked', 'checked');
                }
                if (natures.includes("Crisis")) {
                    $('#Crisis').attr('checked', 'checked');
                }

                $('#student_name').val(name);
                $('#myid').val(id);
                $('#pos').val(position);
                $('#selectTimeslot').val(start);
                $('#selectTimeslot-to').val(end);
                $('#reason').val(reason);
                $('#date-selected').val(date);
                $('#information').val(information);
                
                $('#appID').val(AppID);
                $("#req-modal").modal("show");
              }
            });
            
    
      
    }
  });
  
</script>

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