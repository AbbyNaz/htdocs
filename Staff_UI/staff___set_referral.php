<?php

session_start();

include_once("../connections/connection.php");

if (!isset($_SESSION['UserEmail'])) {

    echo "<script>window.open('../loginForm.php','_self')</script>";
} else {

    $con = connection();

    if (isset($_SESSION['UserId'])) {
        $UserId = $_SESSION['UserId'];
        $UserEmail = $_SESSION['UserEmail'];
        $refferal = "SELECT * FROM users LEFT JOIN refferals ON refferals.reffered_user = users.user_id WHERE refferals.reffered_by = '$UserId' AND refferals.ref_status NOT LIKE 'Cancelled%'  ORDER BY users.last_name ASC";
        $get_referral = $con->query($refferal) or die($con->error);
        $row = $get_referral->fetch_assoc();

        $referred_user = "SELECT * from refferals WHERE reffered_by = '$UserId'";
        $get_referred_user = $con->query($referred_user) or die($con->error);
        $row_referred_user = $get_referred_user->fetch_assoc();
    }

    

    // For Cancelled button
    if (isset($_GET['id'])) {
        $ref_id = $_GET['id'];
        $status = "Cancelled";
        $cancel_refferal = "UPDATE `refferals` SET `ref_status`='$status' WHERE ref_id = '$ref_id'";
        $con->query($cancel_refferal) or die($con->error);
        echo header("Location: staff___set_referral.php");
    }

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
    <?php include('includes/staff___left-menu-area.php') ?>
    <?php include('includes/staff___top-menu-area.php') ?>
    <?php include('includes/staff___mobile_menu.php') ?>


    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list single-page-breadcome">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcome-heading">
                                    <form role="search" class="sr-input-func">

                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Referral Table</span>
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

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div id="ADD_REFERRAL" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header header-color-modal bg-color-1">
                        <h4 class="modal-title">Refer a Student / Staff</h4>
                        <div class="modal-close-area modal-close-df">
                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                        </div>
                    </div>

                    <form id="ReferralForm" action="add_referral.php" method="POST">
                        <div class="modal-body">
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">User Type</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <div class="form-select-list">
                                            <select id="mySelect" class="form-control custom-select-value"
                                                name="account" onchange="changeDropdown(this.value);">
                                                <option selected disabled>Select the user's position you wanted to
                                                    refer... </option>
                                                <option value="student">Student</option>
                                                <!-- <<option value="staff">Staff</option> -->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Student ID</label>
                                    </div>
                                    <div class="col-lg-6 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Enter Student ID" />
                                    </div>
                                </div>
                            </div> -->

                            <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Search</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Search Student Profile"
                                            name="searchstudent" id="searchstudent" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STUD_NAME" style="display: none;">
                                <div class=" row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Student Name</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>

                                </div>
                            </div>
                            <div class="form-group-inner" id="STUD_PROGRAM" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Program</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" readonly class="form-control" placeholder="Student Program"
                                            id="stud_program" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner" id="STUD_LEVEL" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Level</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" readonly class="form-control" placeholder="Student Level"
                                            id="stud_level" />
                                    </div>
                                </div>
                            </div>


                            <div class="form-group-inner" id="STAFF_ID" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Search</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Search Staff Profile"
                                            name="searchstaff" id="searchstaff" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STAFF_NAME" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Staff Name</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" readonly class="form-control" placeholder="Enter Staff Name"
                                            id="staff_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STAFF_DEPARTMENT" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right"> Department</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Staff Department" id="staff_department" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STAFF_POSITION" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Position</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" readonly class="form-control" placeholder="Staff Position"
                                            id="staff_position" />
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
                                                            <input type="checkbox" name="nature[]" value="Academic">
                                                            <i></i> Academic </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="i-checks pull-left">
                                                        <label>
                                                            <input type="checkbox" name="nature[]" value="Career">
                                                            <i></i> Career </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="i-checks pull-left">
                                                        <label>
                                                            <input type="checkbox" name="nature[]" value="Personal">
                                                            <i></i> Personal </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="i-checks pull-left">
                                                        <label>
                                                            <input type="checkbox" name="nature[]" value="Crisis">
                                                            <i></i> Crisis </label>
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
                                        <label class="login2 pull-right">Reason</label>
                                    </div>
                                    <div class="form-group res-mg-t-15 col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <textarea name="description" placeholder="Description"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Action/s</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" name="actions" class="form-control"
                                            placeholder="Action/s Taken before Referral" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Remarks</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" name="remarks" class="form-control"
                                            placeholder="Enter Remarks" />
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <input type="hidden" name="studentid" id="stud_id">
                            <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
                            <button type="submit" name="add_refferal" class="btn btn-primary btn-md">Add
                                Referral</button>
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
                            <div class="main-sparkline13-hd">
                                <h1>Referral<span class="table-project-n"> Table</span> </h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#ADD_REFERRAL">
                                        Add New
                                    </button><br>

                                </div>
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                    data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true"
                                    data-key-events="true" data-show-toggle="true" data-resizable="true"
                                    data-cookie="true" data-cookie-id-table="saveId" data-show-export="true"
                                    data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>

                                        <tr>
                                            <th data-field="name" data-editable="false">Student ID</th>
                                            <th data-field="L_email" data-editable="false">First Name</th>
                                            <th data-field="F_email" data-editable="false">Last Name</th>
                                            <!-- <th data-field="phone" data-editable="false">Source</th>
                                                <th data-field="complete" data-editable="false">Referred By</th>
                                                <th data-field="task" data-editable="false">Date</th> -->
                                            <th data-field="date" data-editable="false">Nature</th>
                                            <th data-field="price" data-editable="false">Reason</th>
                                            <th data-field="pric" data-editable="false">Action Taken</th>
                                            <th data-field="pri" data-editable="false">Remarks</th>
                                            <th data-field="status">Status</th>
                                            <th data-field="cancel">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <!-- If no Data to display display null -->
                                        <?php if ($row == 0) {
        echo null;
    } else {
        do { ?>

                                        <tr>
                                            <td><b>
                                                    <?php echo $row['id_number'] ?>
                                                </b></td>
                                            <td>
                                                <?php echo $row['first_name'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['last_name'] ?>
                                            </td>
                                            <!-- <td><?php echo $row['source'] ?></td>
                                                        <td><?php echo $row['reffered_by'] ?></td>
                                                        <td><?php echo $row['reffered_date'] ?></td> -->
                                            <td>
                                                <?php echo $row['nature'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['reason'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['actions'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['remarks'] ?>
                                            </td>

                                            <td>
                                                <?php
            if ($row['ref_status'] == "pending" || $row['ref_status'] == "Pending") {
                                                            ?>
                                                <small style="background-color: gray; color: white; padding: 3px;">
                                                    Pending
                                                </small>
                                                <?php
            } elseif ($row['ref_status'] == "For Approval" || $row['ref_status'] == "for approval") {
                                                                    ?>
                                                <small style="background-color: orange; color: white; padding: 3px;">
                                                    For Approval
                                                </small>
                                                <?php
            } elseif ($row['ref_status'] == "Cancelled" || $row['ref_status'] == "cancelled") {
                                                                    ?>
                                                <small style="background-color: darkred; color: white; padding: 3px;">
                                                    Cancelled
                                                </small>
                                                <?php
            } elseif ($row['ref_status'] == "Disapproved" || $row['ref_status'] == "disapproved") {
                                                                    ?>
                                                <small style="background-color: maroon; color: white; padding: 3px;">
                                                    Disapproved
                                                </small>
                                                <?php
            } else {
                                                                    ?>
                                                <small style="background-color: green; color: white; padding: 3px;">
                                                    <?php echo $row['ref_status']; ?>
                                                </small>
                                                <?php
            }
                                                                    ?>
                                            </td>
                                            <td>
                                                
                                                    <a href="edit_refferal.php?id=<?= $row['ref_id'] ?>"><button title="Edit Referral" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>

                                                    <a class="btn btn-danger" style="margin-left: 10px; color: white;"
                                                        href="staff___set_referral.php?id=<?= $row['ref_id'] ?>">Cancel</a>
                                             
                                            </td>
                                        </tr>
                                        <?php } while ($row = $get_referral->fetch_assoc());
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
                document.getElementById("STAFF_DEPARTMENT").style.display = "none";
                document.getElementById("STAFF_POSITION").style.display = "none";

            } else if (state == "staff") {
                document.getElementById("STUD_ID").style.display = "none";
                document.getElementById("STUD_NAME").style.display = "none";
                document.getElementById("STUD_PROGRAM").style.display = "none";
                document.getElementById("STUD_LEVEL").style.display = "none";

                document.getElementById("STAFF_ID").style.display = "block";
                document.getElementById("STAFF_NAME").style.display = "block";
                document.getElementById("STAFF_DEPARTMENT").style.display = "block";
                document.getElementById("STAFF_POSITION").style.display = "block";

            } else {
                document.getElementById("STUD_ID").style.display = "none";
                document.getElementById("STUD_NAME").style.display = "none";
                document.getElementById("STUD_PROGRAM").style.display = "none";
                document.getElementById("STUD_LEVEL").style.display = "none";

                document.getElementById("STAFF_ID").style.display = "none";
                document.getElementById("STAFF_NAME").style.display = "none";
                document.getElementById("STAFF_DEPARTMENT").style.display = "none";
                document.getElementById("STAFF_POSITION").style.display = "none";

            }
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#searchstudent').keyup(function () {
                var search = $(this).val();
                if (search != '') {
                    jQuery.ajax({
                        type: "POST",
                        url: 'get_specific_studentprofile.php',
                        data: { search: search },

                        success: function (response) {
                            console.log(response);
                            userData = jQuery.parseJSON(response);

                            $('#ReferralForm').attr("action", "add_referral.php?id="+userData[0].id+"");

                            $('#stud_id').val(userData[0].id);
                            $('#stud_name').val(userData[0].first_name + " " + userData[0].last_name);
                            $('#stud_program').val(userData[0].program);
                            $('#stud_level').val(userData[0].level);
                        }

                    });
                }
            });
        });


        $(document).ready(function () {
            $('#searchstaff').keyup(function () {
                var search = $(this).val();
                if (search != '') {
                    jQuery.ajax({
                        type: "POST",
                        url: 'get_specific_studentprofile.php',
                        data: { search: search },

                        success: function (response) {
                            console.log(response);
                            userData = jQuery.parseJSON(response)
                            $('#stud_id').val(userData[0].id);
                            $('#staff_name').val(userData[0].first_name + " " + userData[0].last_name);
                            $('#staff_department').val(userData[0].department);
                            $('#staff_position').val(userData[0].position);
                        }

                    });
                }
            });
        });
    </script>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
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

<?php } ?>