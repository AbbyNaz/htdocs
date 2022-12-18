<?php
session_start();

include_once("../connections/connection.php");

if (!isset($_SESSION['UserEmail'])) {

    echo "<script>window.open('../loginForm.php','_self')</script>";
} else {

    $con = connection();

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
        <!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="style.css">
        <!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr JS
		============================================ -->

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>

        <?php include('includes/gc___mobile_menu.php')  ?>

        <!-- <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    </div>
                </div>
            </div>
        </div> -->

        <!----------------------------------------- THIS IS THE MODAL FORM OF REFERRAL FORM ---------------------------------------------->
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div id="ADD_APPOINTMENT" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header header-color-modal bg-color-1">
                            <h4 class="modal-title">Add Appointment</h4>
                            <div class="modal-close-area modal-close-df">
                                <a class="close" data-dismiss="modal" href=""><i class="fa fa-close"></i></a>
                            </div>
                        </div>

                        <form action="thecodeappointment.php" method="post">
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

                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">User Type</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <div class="form-select-list">
                                                <select id="select_usertype" class="form-control custom-select-value" name="app_type" onchange="changeDropdown(this.value);">
                                                    <option disabled >Select User Type</option>
                                                    <option value="Student" selected>Student</option>
                                                    <option value="Staff">Staff</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner" id="STUD_ID">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                            <label class="login2 pull-right pull-right-pro">Student ID</label>
                                        </div>
                                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="s_id" name="student_id" onchange="studentId(this.value)" placeholder="Search Student">
                                                <div class="input-group-btn">
                                                    <!-- <a href="gc___search-students.php"><button tabindex="-1" class="btn btn-primary btn-md" type="button" >Search</button></a> -->
                                                    <a href="#" id="search_id"><button tabindex="-1" class="btn btn-primary btn-md" type="button" >Search</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group-inner" id="STUD_NAME" style="display: none;">
                                    <div class=" row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Student Name</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                            <input type="text" id="s_name" name="student_name" class="form-control" placeholder="Enter Student Name" readonly />
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group-inner" id="STUD_PROGRAM" style="display: none;">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Program</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" id="s_program" name="program" class="form-control" placeholder="Student Program" readonly />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group-inner" id="STUD_LEVEL" style="display: none;">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Level</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" id="s_level" name="level" class="form-control" placeholder="Student Level" readonly />
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group-inner" id="STAFF_ID" style="display: none;">
                                    <div class=" row">
                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                            <label class="login2 pull-right pull-right-pro">Staff ID</label>
                                        </div>
                                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search Staff">
                                                <div class="input-group-btn">
                                                    <a href="gc___search-staff.php"><button tabindex="-1" class="btn btn-primary btn-md" type="button">Search</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group-inner" id="STAFF_NAME" style="display: none;">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Staff Name</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" readonly class="form-control" placeholder="Enter Staff Name" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner" id="STAFF_DEPARTMENT" style="display: none;">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Department</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" readonly class="form-control" placeholder="Enter Staff Dept" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner" id="STAFF_POSITION" style="display: none;">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Position</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" readonly class="form-control" placeholder="Staff Position" />
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
                                                    <input class="pull-left radio-checked" type="radio" value="Online" id="APPOINT_OP2" name="type" >
                                                    Online
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Information</label>
                                        </div>
                                        <div class="form-group res-mg-t-15 col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <textarea placeholder="Description of Appointment" name="app_info" required></textarea>
                                        </div>
                                    </div>
                                </div>

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

        

        <!-- Static Table Start -->
        

        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                            <a href="gc___calendar.php"><button class="btn btn-primary" style="margin-bottom: 20px">Back</button></a>
                                <div class="main-sparkline13-hd">
                                    <h1>Search <span class="table-project-n"> Students</span></h1>
                                </div>
                            </div>


                            <div class="sparkline13-graph">

                                <div class="datatable-dashv1-list custom-datatable-overright">
                                </div>

                                <div id="toolbar">
                                    <div class="card-header py-3">
                                        <h5 class="m-0 font-weight-bold text-primary">

                                            <!-- <div id="">

                                                <select id="level" name="level">
                                                    <option value="" disabled="" selected="">Level</option>
                                                    <option value="G11">G11</option>
                                                    <option value="G12">G12</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                                <select id="level" name="level">
                                                    <option value="" disabled="" selected="">Programm/Track</option>
                                                    <option value="BSIT">BSIT</option>
                                                    <option value="CCTECH">CCTECH</option>
                                                    <option value="MAWD">MAWD</option>
                                                    <option value="CUART">CUART</option>
                                                    <option value="HUMSS">HUMSS</option>
                                                    <option value="CpE">CpE</option>
                                                </select>
                                                <button class="btn btn-primary" name="filter">Filter</button>
                                                <button class="btn btn-success" name="reset">Reset</button>
                                            </div> -->
                                            <div>
                                                <!-- <div class="form-group-inner">

                                                    <div class=" row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right">Level</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select id="selectLevel" class="form-control custom-select-value" name="account">
                                                                    <option value="" disabled="" selected="">Select Level</option>
                                                                    <option value="shs">Senior High School</option>
                                                                    <option value="tertiary">Tertiary</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->

                                                <div class="form-group-inner" style="display: none;">

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right">Track</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select id="selectLevel" class="form-control custom-select-value" name="account">
                                                                    <option value="" disabled="" selected="">Level</option>
                                                                    <option value="ABM">ABM</option>
                                                                    <option value="CCTECH">CCTECH</option>
                                                                    <option value="STEM">STEM</option>
                                                                    <option value="CULART">CULART</option>
                                                                    <option value="DIGIART">DIGIART</option>
                                                                    <option value="HUMMSS">HUMMSS</option>
                                                                    <option value="MAWD">MAWD</option>
                                                                    <option value="STEM">STEM</option>
                                                                    <option value="TOPER">TOPER</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner" style="display: none;">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right">SHS-Level</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select id="selectLevel" class="form-control custom-select-value" name="account">
                                                                    <option value="" disabled="" selected="">Level</option>
                                                                    <option value="shs">Grade 11</option>
                                                                    <option value="tertiary">Grade 12</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner" style="display: none;">

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right">Program</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select id="selectLevel" class="form-control custom-select-value" name="account">
                                                                    <option value="" disabled="" selected="">Level</option>
                                                                    <option value="BSIT">BSIT</option>
                                                                    <option value="BMMA">BMMA</option>
                                                                    <option value="BSBA">BSBA</option>
                                                                    <option value="BSHM">BSHM</option>
                                                                    <option value="BSTM">BSTM</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner" style="display: none;">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right">Tertiary-Level</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select id="selectLevel" class="form-control custom-select-value" name="account">
                                                                    <option value="" disabled="" selected="">Level</option>
                                                                    <option value="1yr">1st Year</option>
                                                                    <option value="2yr">2nd Year</option>
                                                                    <option value="3yr">3rd Year</option>
                                                                    <option value="4yr">4th Year</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </h5>

                                    </div>

                                </div>

                                <table id="table" class="table table-striped table-bordered table-hover" data-toggle=""  data-pagination="true" data-search="false" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <!-- <th data-field="state" data-checkbox="true"></th> -->
                                            <th>Student ID</th>
                                            <th>Last Name</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Program</th>
                                            <th>Level</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php
                                        if(isset($_GET['id_number'])) {
                                            $id = $_GET['id_number'];
                                        }

                                        // echo basename($_SERVER['REQUEST_URI']);

                                        $query = "SELECT * FROM users WHERE id_number LIKE '$id%'";
                                        $query_run = mysqli_query($con, $query);

                                        if (mysqli_num_rows($query_run) > 0) {
                                            foreach ($query_run as $row) {
                                        ?>

                                                <tr onclick="getRow(this)" data-toggle="modal" data-target="#ADD_APPOINTMENT">
                                                    <!-- <td></td> -->
                                                    <td><?= $row['id_number'] ?></td>
                                                    <td><?= $row['last_name'] ?></td>
                                                    <td><?= $row['first_name'] ?></td>
                                                    <td><?= $row['middle_name'] ?></td>
                                                    <td><?= $row['program'] ?></td>
                                                    <td><?= $row['level'] ?></td>
                                                </tr>

                                            <?php

                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="4">No Record Found</td>
                                            </tr>

                                        <?php
                                        }
                                        ?>


                                    </tbody>
                                </table>
                                <!-- <br>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ADD_APPOINTMENT">
                                    Confirm
                                </button> -->
                                <!-- <p>Row Index: <span id="index"></span></p>  -->
                                <!-- <a href="gc___calendar.php?id_number=<?= $id ?>"><button type="submit" name="add_student" class="btn btn-primary btn-md">Confirm</button></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Static Table End -->

        <?php
        include('includes/gc___scripts.php');
        ?>

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

<script>
    var getDate = localStorage.getItem("appointment_date");
    // var date = new Date(getDate);
    var date = new Date(getDate).toISOString().slice(0, 10);
    console.log(date);
    document.getElementById("app_date").value = date;
    document.getElementById("time_slot").value = localStorage.getItem("appointment_time");
    document.getElementById("select_usertype").value = localStorage.getItem("appointment_type");
    
</script>
<script>
    function getRow(x) {
        // var a = document.getElementById('index').textContent = x.rowIndex;
        var a =  x.rowIndex;
        var b = document.getElementById("table").rows[a].cells[0].innerHTML;
        var s_id = document.getElementById("s_id").value = b;
        if(s_id == b) {
            var lName = document.getElementById("table").rows[a].cells[1].innerHTML
            var fName = document.getElementById("table").rows[a].cells[2].innerHTML
            var mName = document.getElementById("table").rows[a].cells[3].innerHTML
            var program = document.getElementById("table").rows[a].cells[4].innerHTML
            var level = document.getElementById("table").rows[a].cells[5].innerHTML
            document.getElementById("s_name").value = lName + ", " + fName + " " + mName;
            document.getElementById("s_program").value = program;
            document.getElementById("s_level").value = level;
            // console.log(program + level);
        }
    }
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

            document.getElementById("FACULTY_ID").style.display = "none";
            document.getElementById("FACULTY_NAME").style.display = "none";

        } else if (state == "Staff") {
            document.getElementById("STUD_ID").style.display = "none";
            document.getElementById("STUD_NAME").style.display = "none";
            document.getElementById("STUD_PROGRAM").style.display = "none";
            document.getElementById("STUD_LEVEL").style.display = "none";

            document.getElementById("STAFF_ID").style.display = "block";
            document.getElementById("STAFF_NAME").style.display = "block";

            document.getElementById("FACULTY_ID").style.display = "none";
            document.getElementById("FACULTY_NAME").style.display = "none";

        } else if (state == "Faculty") {
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

<!-- <?php
        require 'connection.php';
        if (isset($_POST['filter'])) {
            $level = $_POST['level'];

            $query = mysqli_query($connection, "SELECT * FROM `users` WHERE `level`='$level'") or die(mysqli_error());
            while ($fetch = mysqli_fetch_array($query)) {
                echo "<tr><td>" . $fetch['last_name'] . "</td><td>" . $fetch['level'] . "</td></tr>";
            }
        } else if (isset($_POST['reset'])) {
            $query = mysqli_query($connection, "SELECT * FROM `users`") or die(mysqli_error());
            while ($fetch = mysqli_fetch_array($query)) {
                echo "<tr><td>" . $fetch['last_name'] . "</td><td>" . $fetch['level'] . "</td></tr>";
            }
        } else {
            $query = mysqli_query($connection, "SELECT * FROM `users`") or die(mysqli_error());
            while ($fetch = mysqli_fetch_array($query)) {
                echo "<tr><td>" . $fetch['last_name'] . "</td><td>" . $fetch['level'] . "</td></tr>";
            }
        }
        ?> -->