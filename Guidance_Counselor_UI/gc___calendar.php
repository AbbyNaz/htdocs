<?php

session_start();

include_once("../connections/connection.php");

if (!isset($_SESSION['UserEmail'])) {

    echo "<script>window.open('../loginForm.php','_self')</script>";
} else {

    $con = connection();

    if(isset($_GET['ref_id'])) {
        $ref_id = $_GET['ref_id'];

        $ref_query = "SELECT * FROM refferals WHERE ref_id = '$ref_id'";
        $ref_con = $con->query($ref_query) or die($con->error);
        $row_ref = $ref_con->fetch_assoc();

        $ref_user = $row_ref['reffered_user'];
        $ref_reason = $row_ref['reason'];
        $ref_actions = $row_ref['actions'];
        $ref_remarks = $row_ref['remarks'];

        $user_query = "SELECT * FROM users WHERE user_id = '$ref_user'";
        $user_con = $con->query($user_query) or die($con->error);
        $row_user = $user_con->fetch_assoc();

        $id_number = $row_user['id_number'];
        $lName = $row_user['last_name'];
        $fName = $row_user['first_name'];
        $mName = $row_user['middle_name'];
        $program = $row_user['program'];
        $level = $row_user['level'];
        $position = $row_user['position'];

    }

    if (isset($_POST['add_appointment'])) {
        $date = $_POST['app_date'];
        $app_timeslot = $_POST['app_timeslot'];
        $app_type = $_POST['app_type'];
        
        $student_id = $_POST['student_id'];
        $app_subject = $_POST['app_subject'];
        $type = $_POST['type'];
        $app_info = $_POST['app_info'];
        $status = "In Review";
    
        $query = "INSERT INTO `appointments`(`timeslot`, `date`, `user_type`, `ref_id`, `id_number`, `subject`, `appointment_type`, `info`, `app_status`) " .
                    "VALUES ('$app_timeslot','$date','$app_type','$ref_id','$student_id','$app_subject','$type','$app_info','$status')";
        $get_app = $con->query($query) or die ($con->error);
        // $row_get_app = $get_app->fetch_assoc();
    
        if ($get_app) {
            $update_ref_status_query = "UPDATE `refferals` SET `ref_status`='$status' WHERE ref_id = '$ref_id'";
            $update_con = $con->query($update_ref_status_query) or die ($con->error);
            // $update_row = $update_con->fetch_assoc();
        }

        if ($update_con) {
            // echo "Saved";
            $_SESSION['status'] = "Appointment Added";
            $_SESSION['status_code'] = "success";
            header("Location: gc___all_appointment.php");
        } else {
            // echo "Not saved";
            $_SESSION['status'] = "Appointment Not Added";
            $_SESSION['status_code'] = "error";
            header("Location: gc___all_appointment.php");
        }
    }

    function build_calendar($month, $year) {
        
        $con = connection();

        // Create array containing abbreviations of days of week.
        $daysOfWeek = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');

        // What is the first day of the month in question?
        $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);

        // How many days does this month contain?
        $numberDays = date('t', $firstDayOfMonth);

        // Retrieve some information about the first day of the
        // month in question.
        $dateComponents = getdate($firstDayOfMonth);

        // What is the name of the month in question?
        $monthName = $dateComponents['month'];

        // What is the index value (0-6) of the first day of the
        // month in question.
        $dayOfWeek = $dateComponents['wday'];

        // Create the table tag opener and day headers

        $datetoday = date('Y-m-d');
        $calendar = "<table class='table table-bordered'>";
        $calendar .= "<center><h2>$monthName $year</h2><br>";

        $calendar .= "<a class='btn btn-m btn-primary' href='?month=" . date('m', mktime(0, 0, 0, $month - 1, 1, $year)) . "&year=" . date('Y', mktime(0, 0, 0, $month - 1, 1, $year)) . "'><</a> ";

        $calendar .= " <a href='gc___calendar.php' data-month='" . date('m') . "' data-year='" . date('Y') . "'></a> ";

        $calendar .= "<a href='?month=" . date('m', mktime(0, 0, 0, $month + 1, 1, $year)) . "&year=" . date('Y', mktime(0, 0, 0, $month + 1, 1, $year)) . "' class='btn btn-m btn-primary'>></a></center><br>";

        $calendar .= "<tr>";

        // Create the calendar headers
        foreach ($daysOfWeek as $day) {
            $calendar .= "<th  class='header'>$day</th>";
        }

        // Create the rest of the calendar
        // Initiate the day counter, starting with the 1st.
        $currentDay = 1;
        $calendar .= "</tr><tr>";

        // The variable $dayOfWeek is used to
        // ensure that the calendar
        // display consists of exactly 7 columns.

        if ($dayOfWeek > 0) {
            for ($k = 0; $k < $dayOfWeek; $k++) {
                $calendar .= "<td  class='empty'></td>";
            }
        }


        $month = str_pad($month, 2, "0", STR_PAD_LEFT);

        while ($currentDay <= $numberDays) {
            //Seventh column (Saturday) reached. Start a new row.
            if ($dayOfWeek == 7) {
                $dayOfWeek = 0;
                $calendar .= "</tr><tr>";
            }

            $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
            date_default_timezone_set('Asia/Manila');
            $date = "$year-$month-$currentDayRel";
            $dayname = strtolower(date('l', strtotime($date)));
            $eventNum = 0;
            $today = $date == date('Y-m-d') ? "today" : "";

            // this is for the no office hours in the calendar which is the saturday and sunday
            if ($dayname == 'saturday' || $dayname == 'sunday') {
                $calendar .= "<td class='$today'><h4>$currentDay</h4> <br>";
            }
            // this is for the already passed date that is not available for booking
            elseif ($date < date('Y-m-d')) {
                $calendar .= "<td class='$today'><h4>$currentDay</h4> <br>";
            }
            // elseif (in_array($date, $bookings)) {
            //     $calendar .= "<td><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'>Already Booked</button>";
            // } 
            else {

                // this is where in calendar mared na yung date if nakuha na lahat ng appointment timeslots
                $totalbookings = checkSlot($con, $date);
                // yung 18 dito is yung total timeslots sa isang date
                if ($totalbookings == 18) {
                    $calendar .= "<td class='$today'><h4>$currentDay</h4> <a href='#' class='btn btn-danger btn-xs'>Fully Booked</a>";
                } else {
                    $availableslots = 18 - $totalbookings;
                        $calendar .= "<td class='$today'>
                                    <h4>$currentDay</h4>
                                    
                                    <button data-toggle='modal' data-target='#ADD_APPOINTMENT' value='$date' class='bookingDate btn btn-success btn-xs'>
                                        Book
                                    </button>";
                }
            }


            $calendar .= "</td>";
            //Increment counters
            $currentDay++;
            $dayOfWeek++;
        }

        //Complete the row of the last week in month, if necessary
        if ($dayOfWeek != 7) {
            $remainingDays = 7 - $dayOfWeek;
            for ($l = 0; $l < $remainingDays; $l++) {
                $calendar .= "<td class='empty'></td>";
            }
        }

        $calendar .= "</tr>";
        $calendar .= "</table>";
        return $calendar;
    }


    function checkSlot($con, $date)
    {
        $stmt = $con->prepare("select * from appointments where date=?");
        $stmt->bind_param('s', $date);
        $totalbookings = 0;
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $totalbookings++;
                }
                $stmt->close();
            }
        }

        return $totalbookings;
    }

?>
    <!-- <?php session_start() ?> -->
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
        <!-- style CSS
        ============================================ -->
        <link rel="stylesheet" href="style.css">
        <!-- responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr JS
        ============================================ -->

        <!-- this is for the tables -->
        <!-- modals CSS
            ============================================ -->
        <link rel="stylesheet" href="css/modals.css">
        <!-- x-editor CSS
    		============================================ -->
        <link rel="stylesheet" href="css/editor/select2.css">
        <link rel="stylesheet" href="css/editor/datetimepicker.css">
        <link rel="stylesheet" href="css/editor/bootstrap-editable.css">
        <link rel="stylesheet" href="css/editor/x-editor-style.css">

        <!-- dropzone CSS
		============================================ -->
        <link rel="stylesheet" href="css/dropzone/dropzone.css">

        <!-- this is for the profile -->
        <!-- forms CSS
		============================================ -->
        <link rel="stylesheet" href="css/form/all-type-forms.css">

        <!-- modal CSS
		============================================ -->
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" > -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

        <style>
            @media only screen and (max-width: 760px),
            (min-device-width: 802px) and (max-device-width: 1020px) {

                /* Force table to not be like tables anymore */
                table,
                thead,
                tbody,
                th,
                td,
                tr {
                    display: block;

                }

                .empty {
                    display: none;
                }

                /* Hide table headers (but not display: none;, for accessibility) */
                th {
                    position: absolute;
                    top: -9999px;
                    left: -9999px;
                }

                tr {
                    border: 1px solid #ccc;
                }

                td {
                    /* Behave  like a "row" */
                    border: none;
                    border-bottom: 1px solid #eee;
                    position: relative;
                    padding-left: 50%;
                }



                /*
                Label the data
            */
                td:nth-of-type(1):before {
                    content: "Sunday";
                }

                td:nth-of-type(2):before {
                    content: "Monday";
                }

                td:nth-of-type(3):before {
                    content: "Tuesday";
                }

                td:nth-of-type(4):before {
                    content: "Wednesday";
                }

                td:nth-of-type(5):before {
                    content: "Thursday";
                }

                td:nth-of-type(6):before {
                    content: "Friday";
                }

                td:nth-of-type(7):before {
                    content: "Saturday";
                }


            }

            .today {
                background: yellow;
            }
        </style>
    </head>

    <body>

        <?php
        include('includes/gc___left-menu-area.php');
        include('includes/gc___top-menu-area.php');
        include('includes/gc___mobile_menu.php');
        ?>


        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="breadcome-heading">

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="breadcome-menu">
                                        <li><a href="gc___dashboard.php">Home</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">Calendar</span>
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

        <!----------------------------------------- THIS IS THE MODAL FORM OF REFERRAL FORM ---------------------------------------------->
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div id="ADD_APPOINTMENT" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header header-color-modal bg-color-1">
                            <h4 class="modal-title">Add Appointment</h4>
                            <div class="modal-close-area modal-close-df">
                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                            </div>
                        </div>

                        <form action="" method="post">
                            <div class="modal-body">
                                
                                <div class="form-group-inner">
                                    <div class=" row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Date</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                <input type="date" name="app_date" class="form-control" id="app_date" readonly />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Time Slot</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <div class="form-select-list">
                                                <select class="form-control custom-select-value" id="time_slot" name="app_timeslot" onchange="timeSlot(this.value)">
                                                    <option disabled selected>Select Time Slot</option>
                                                    <option value="9:00 am" >9:00 am</option>
                                                    <option value="10:00 am">10:00 am</option>
                                                    <option value="11:00 am">11:00 am</option>
                                                    <option value="1:00 pm">1:00 pm</option>
                                                    <option value="2:00 pm">2:00 pm</option>
                                                    <option value="3:00 pm">3:00 pm</option>
                                                    <option value="4:00 pm">4:00 pm</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php if(!isset($_GET['ref_id'])) { ?>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <label class="login2 pull-right">User Type</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <div class="form-select-list">
                                                    <select id="select_usertype" class="form-control custom-select-value" name="app_type" onchange="changeDropdown(this.value);">
                                                        <option disabled selected>Select User Type</option>
                                                        <option value="Student">Student</option>
                                                        <option value="Staff">Staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } else {
                                    $selected_stud = ($position == "student") || ($position == "Student") ? "selected" : "";
                                    $selected_staff = ($position != "student") || ($position != "Student") ? "selected" : "";
                                ?>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <label class="login2 pull-right">User Type</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <div class="form-select-list">
                                                    <select id="select_usertype" class="form-control custom-select-value" name="app_type" onchange="changeDropdown(this.value);">
                                                        <option disabled>Select User Type</option>
                                                        <option value="Student" <?php $selected_stud ?> >Student</option>
                                                        <option value="Staff" <?php $selected_staff ?> >Staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                                <!-- <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                            <label class="login2 pull-right pull-right-pro">Student ID</label>
                                        </div>
                                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                            <div class="input-group">
                                                <?php if (isset($_GET['ref_id'])) { ?>
                                                    <input type="text" class="form-control" placeholder="Search Student" value="<?= $user_id_number ?>" readonly />
                                                    <input type="hidden" class="form-control" placeholder="Search Student" name="id_number" value="<?= $user_id_number ?>" />
                                                <?php } else {  ?>
                                                    <input type="text" class="form-control" placeholder="Search Student ID" name="id_number" required />
                                                <?php } ?>
                                            
                                            </div>
                                        </div>
                                    </div> -->

                                <div class="form-group-inner" id="STUD_ID">
                                    <div class="row">
                                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Search</label>
                                      </div>
                                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Search Student Profile" name="searchstudent" id="searchstudent" />
                                      </div>
                                    </div>
                                </div>

                                <div class="form-group-inner" id="STUD_NAME" style="display: none;">
                                    <div class=" row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Student Name</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                            <input type="hidden" readonly class="form-control" name="student_id" id="stud_code" />
                                            <input type="text" readonly class="form-control" placeholder="Enter Student Name" id="stud_name" />
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group-inner" id="STUD_PROGRAM" style="display: none;">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Program</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" readonly class="form-control" placeholder="Student Program" id="stud_program" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group-inner" id="STUD_LEVEL" style="display: none;">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Level</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" readonly class="form-control" placeholder="Student Level" id="stud_level" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner" id="STAFF_ID" style="display: none;">
                                    <div class="row">
                                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Search</label>
                                      </div>
                                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Search Staff Profile" name="searchstaff" id="searchstaff" />
                                      </div>
                                    </div>
                                </div>

                                <div class="form-group-inner" id="STAFF_NAME" style="display: none;">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Staff Name</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="hidden" readonly class="form-control" name="student_id" id="staff_code" />
                                            <input type="text" readonly class="form-control" placeholder="Enter Staff Name" name="staff_name" id="staff_name" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner" id="STAFF_DEPARTMENT" style="display: none;">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right"> Department</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" readonly class="form-control" placeholder="Enter Staff Dept" name="staff_department" id="staff_department" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner" id="STAFF_POSITION" style="display: none;">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Position</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" readonly class="form-control" placeholder="Staff Position" name="staff_position" id="staff_position" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Subject</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" placeholder="Enter Appointment Subject" name="app_subject" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <label class="login2 pull-right pull-right-pro"><span class="basic-ds-n">Type</span></label>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-9 col-xs-9">
                                            <div class=" bt-df-checkbox">
                                                <label for="APPOINT_OP1" style="margin-right: 15px;">
                                                    <input class="pull-left radio-checked" type="radio" value="Walk-in" id="APPOINT_OP1" name="type" checked >
                                                    Walk-In
                                                </label>

                                                <label for="APPOINT_OP2">
                                                    <input class="pull-left radio-checked" type="radio" value="Online" id="APPOINT_OP2" name="type">
                                                    Online
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php if (!isset($_GET['ref_id'])) { ?>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <label class="login2 pull-right">Information</label>
                                            </div>
                                            <div class="form-group res-mg-t-15 col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <textarea placeholder="Description of Appointment" name="app_info" required ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <label class="login2 pull-right">Information</label>
                                            </div>
                                            <div class="form-group res-mg-t-15 col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <textarea name="app_info" readonly ><?= $ref_reason ?>, <?= $ref_actions ?>, <?= $ref_remarks ?></textarea>
                                                <!-- <textarea style="display: none;" placeholder="Description of Appointment" name="info"><?= $reason ?>, <?= $actions ?>, <?= $remarks ?></textarea> -->
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
                                    <button type="submit" name="add_appointment" class="btn btn-primary btn-md">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <div class="calender-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="calender-inner">
                            <!-- <?= $ref_id ?> -->
                            <?php
                            $dateComponents = getdate();
                            if (isset($_GET['month']) && isset($_GET['year'])) {
                                $month = $_GET['month'];
                                $year = $_GET['year'];
                            } else {
                                $month = $dateComponents['mon'];
                                $year = $dateComponents['year'];
                            }
                            echo build_calendar($month, $year);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".bookingDate").click(function(){
                    // alert($(this).val());
                    var date = $(this).val();
                    // var date = moment($(this).val()).format('DD/MM/YYYY');
                    console.log(date);
                    localStorage.setItem("appointment_date", date);
                    document.getElementById("app_date").value = date;
                });
            });
            </script>
            <script>
                function studentId(val) {
                    var search = document.getElementById("search_id").href = "gc___search-students.php?id_number=" + val;
                    console.log(search);
                }
                function timeSlot(val) {
                    var time = document.getElementById("time_slot").value;
                    if (time != val){
                        localStorage.setItem("appointment_time", "9:00 am");
                    } else {
                        localStorage.setItem("appointment_time", time);
                    }
                }
            </script>

        <script type="text/javascript">
                $(document).ready(function(){
                    $('#searchstudent').keyup(function(){
                        var search = $(this).val();
                        if (search !='')
                        {
                            jQuery.ajax({
                              type: "POST",
                              url: 'get_specific_studentprofile.php',
                              data: {search : search},

                              success: function (response) {
                                console.log(response);
                                userData = jQuery.parseJSON(response)
                                $('#stud_id').val(userData[0].id);
                                $('#stud_code').val(userData[0].id_number);
                                $('#stud_name').val(userData[0].first_name + " " + userData[0].last_name);
                                $('#stud_program').val(userData[0].program);
                                $('#stud_level').val(userData[0].level);
                              }
                              
                            });
                        }
                    });
                });


                $(document).ready(function(){
                    $('#searchstaff').keyup(function(){
                        var search = $(this).val();
                        if (search !='')
                        {
                            jQuery.ajax({
                              type: "POST",
                              url: 'get_specific_studentprofile.php',
                              data: {search : search},

                              success: function (response) {
                                console.log(response);
                                userData = jQuery.parseJSON(response)
                                $('#stud_id').val(userData[0].id);
                                $('#staff_code').val(userData[0].id_number);
                                $('#staff_name').val(userData[0].first_name + " " + userData[0].last_name);
                                $('#staff_department').val(userData[0].department);
                                $('#staff_position').val(userData[0].position);
                              }
                              
                            });
                        }
                    });
                });
        </script>

        <script>
            function changeDropdown() {
                var state = document.getElementById("select_usertype").value;
                // alert(state);
                if (state == "Student") {
                    document.getElementById("STUD_ID").style.display = "block";
                    document.getElementById("STUD_NAME").style.display = "block";
                    document.getElementById("STUD_PROGRAM").style.display = "block";
                    document.getElementById("STUD_LEVEL").style.display = "block";

                    document.getElementById("STAFF_ID").style.display = "none";
                    document.getElementById("STAFF_NAME").style.display = "none";
                    document.getElementById("STAFF_DEPARTMENT").style.display = "none";
                    document.getElementById("STAFF_POSITION").style.display = "none";
                    localStorage.setItem("appointment_type", state);

                } else if (state == "Staff") {
                    document.getElementById("STUD_ID").style.display = "none";
                    document.getElementById("STUD_NAME").style.display = "none";
                    document.getElementById("STUD_PROGRAM").style.display = "none";
                    document.getElementById("STUD_LEVEL").style.display = "none";

                    document.getElementById("STAFF_ID").style.display = "block";
                    document.getElementById("STAFF_NAME").style.display = "block";
                    document.getElementById("STAFF_DEPARTMENT").style.display = "block";
                    document.getElementById("STAFF_POSITION").style.display = "block";
                    localStorage.setItem("appointment_type", state);

                } else {
                    document.getElementById("STUD_ID").style.display = "none";
                    document.getElementById("STUD_NAME").style.display = "none";
                    document.getElementById("STUD_PROGRAM").style.display = "none";
                    document.getElementById("STUD_LEVEL").style.display = "none";

                    document.getElementById("STAFF_ID").style.display = "none";
                    document.getElementById("STAFF_NAME").style.display = "none";
                    document.getElementById("STAFF_DEPARTMENT").style.display = "none";
                    document.getElementById("STAFF_POSITION").style.display = "none";
                    localStorage.setItem("appointment_type", state);
                }
            }
        </script>

        <!-- jquery
    
		============================================ -->
        <script src="js/form.js"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <!-- bootstrap JS
		============================================ -->
        <script src="js/bootstrap.min.js"></script>
        <!-- wow JS
		============================================ -->
        <script src="js/wow.min.js"></script>
        <!-- price-slider JS
		============================================ -->
        <script src="js/jquery-price-slider.js"></script>
        <!-- meanmenu JS
		============================================ -->
        <script src="js/jquery.meanmenu.js"></script>
        <!-- owl.carousel JS
		============================================ -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- sticky JS
		============================================ -->
        <script src="js/jquery.sticky.js"></script>
        <!-- scrollUp JS
		============================================ -->
        <script src="js/jquery.scrollUp.min.js"></script>
        <!-- mCustomScrollbar JS
		============================================ -->
        <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
        <!-- metisMenu JS
		============================================ -->
        <script src="js/metisMenu/metisMenu.min.js"></script>
        <script src="js/metisMenu/metisMenu-active.js"></script>
        <!-- datapicker JS
		============================================ -->
        <script src="js/datapicker/bootstrap-datepicker.js"></script>
        <script src="js/datapicker/datepicker-active.js"></script>
        <!-- morrisjs JS
		============================================ -->
        <script src="js/sparkline/jquery.sparkline.min.js"></script>
        <script src="js/sparkline/jquery.charts-sparkline.js"></script>
        <!-- calendar JS
		============================================ -->
        <script src="js/calendar/moment.min.js"></script>
        <script src="js/calendar/fullcalendar.min.js"></script>
        <script src="js/calendar/fullcalendar-active.js"></script>
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
        <!-- tab JS
		============================================ -->
        <script src="js/tab.js"></script>
        <!-- plugins JS
		============================================ -->
        <script src="js/plugins.js"></script>
        <!-- main JS
		============================================ -->
        <script src="js/main.js"></script>
        <!-- tawk chat JS
		============================================ -->
        <script src="js/tawk-chat.js"></script>
    </body>

    </html>
<?php

}
?>