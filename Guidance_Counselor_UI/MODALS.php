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
    <link rel="shortcut icon" type="image/x-icon" href="img/sti_angeles_logo.ico">
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
<!-- ADWDW -->

<!--------------------------------------- THIS IS THE BUTTON FOR THE REFERRAL DETAILS MODAL --------------------------------------------->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#NOTIF_REFERRAL">
        View Referral
    </button><br>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#NOTIF_REJECTED_REFERRAL">
        View Rejected Referral
    </button><br>




<!--------------------------------------- THIS IS THE BUTTON FOR THE APPOINTMENT DETAILS MODAL --------------------------------------------->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#NOTIF_STUD_APPOINTMENT">
        View Student Appointment
    </button><br>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#NOTIF_STAFF_APPOINTMENT">
        View Staff Appointment
    </button><br>




    <!--------------------------------------- THIS IS THE BUTTON FOR THE OFFENSE DETAILS MODAL --------------------------------------------->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#NOTIF_OFFENSE">
        View Offense
    </button><br>












<!--------------------------------------- THIS IS THE MODAL FORM FOR THE REFERRAL DETAILS MODAL --------------------------------------------->

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div id="NOTIF_REFERRAL" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header header-color-modal bg-color-1">
                        <h4 class="modal-title">Referral Notification Details</h4>
                        <div class="modal-close-area modal-close-df">
                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                        </div>
                    </div>

                    <form action="#" method="POST">
                        <div class="modal-body">

                        <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Date and Time</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Referral From</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Student ID</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Student Name</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STAFF_ID" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Program</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STAFF_ID" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Nature</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Reason</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Action/s</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Remarks</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <input type="hidden" name="studentid" id="stud_id">
                            <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Close</button>
                            <button type="submit" name="add_refferal" class="btn btn-primary btn-md">Set Appointment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>






    <!--------------------------------------- THIS IS THE MODAL FORM FOR THE REJECTED REFERRAL DETAILS MODAL --------------------------------------------->

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div id="NOTIF_REJECTED_REFERRAL" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header header-color-modal bg-color-1">
                        <h4 class="modal-title">Referral Rejection Details</h4>
                        <div class="modal-close-area modal-close-df">
                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                        </div>
                    </div>

                    <form action="#" method="POST">
                        <div class="modal-body">

                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Rejection Reason</label>
                                        </div>
                                        <div class="form-group res-mg-t-15 col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <textarea name="description" readonly class="form-control"
                                            placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Rejection Date and Time</label>
                                        </div>
                                        <div class="form-group res-mg-t-15 col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" readonly class="form-control" 
                                            name="description" placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                </div>

                            <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Created Date/Time</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Referral From</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Student ID</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Student Name</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STAFF_ID" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Program</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STAFF_ID" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Nature</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Reason</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Action/s</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Remarks</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <input type="hidden" name="studentid" id="stud_id">
                            <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Close</button>
                            <button type="submit" name="add_refferal" class="btn btn-primary btn-md">Set Appointment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>











<!--------------------------------------- THIS IS THE MODAL FORM FOR THE APPOINTMENT DETAILS MODAL FOR STUDENT APPOINTMENT--------------------------------------------->

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div id="NOTIF_STUD_APPOINTMENT" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header header-color-modal bg-color-1">
                        <h4 class="modal-title">Appointment Notification Details</h4>
                        <div class="modal-close-area modal-close-df">
                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                        </div>
                    </div>

                    <form action="#" method="POST">
                        <div class="modal-body">

                        <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Date and Time</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Student ID</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Student Name</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STAFF_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Program </label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STAFF_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Level</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STAFF_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Nature</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Time From</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Time To</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Reason</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right"> Type</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Information</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <input type="hidden" name="studentid" id="stud_id">
                            <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Close</button>
                            <button type="submit" name="add_refferal" class="btn btn-primary btn-md">Set Appointment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>





<!--------------------------------------- THIS IS THE MODAL FORM FOR THE APPOINTMENT DETAILS MODAL FOR STAFF APPOINTMENT--------------------------------------------->

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div id="NOTIF_STAFF_APPOINTMENT" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header header-color-modal bg-color-1">
                        <h4 class="modal-title">Appointment Notification Details</h4>
                        <div class="modal-close-area modal-close-df">
                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                        </div>
                    </div>

                    <form action="#" method="POST">
                        <div class="modal-body">

                        <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Date and Time</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Staff ID</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Staff Name</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STAFF_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Department</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STAFF_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Position</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STAFF_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Nature</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Time From</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Time To</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Reason</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Type</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Information</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <input type="hidden" name="studentid" id="stud_id">
                            <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Close</button>
                            <button type="submit" name="add_refferal" class="btn btn-primary btn-md">Set Appointment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>






<!--------------------------------------- THIS IS THE MODAL FORM FOR THE APPOINTMENT DETAILS MODAL FOR STAFF APPOINTMENT--------------------------------------------->

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div id="NOTIF_OFFENSE" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header header-color-modal bg-color-1">
                        <h4 class="modal-title">Offense Notification Details</h4>
                        <div class="modal-close-area modal-close-df">
                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                        </div>
                    </div>

                    <form action="#" method="POST">
                        <div class="modal-body">

                        <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Date and Time</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Student ID</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Student Name</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STAFF_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Program </label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STAFF_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Level</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STAFF_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Offense Type</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Description</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Sanction</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Sanction Info</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <input type="hidden" name="studentid" id="stud_id">
                            <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>










    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div id="Add_New_Offense" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-1">
              <h4 class="modal-title">Add New Student with Offense</h4>
              <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
              </div>
            </div>

            <form action="" method="post">
              <div class="modal-body">
                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Search</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" placeholder="Search Student Profile" name="searchstudent" id="searchstudent" />
                    </div>
                  </div>
                </div>
                <br>
                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Student ID</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" placeholder="Enter Student ID" name="id_number" id="id_number" readonly />
                    </div>
                  </div>
                </div>
                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Last Name</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" placeholder="Enter Student Last Name" name="l_name" id="l_name" readonly />
                    </div>
                  </div>
                </div>
                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">First Name</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" placeholder="Enter Student First Name" name="f_name" id="f_name" readonly />
                    </div>
                  </div>
                </div>

                <div class="form-group-inner" id="MAJOR_OFFENSE">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right pull-right-pro">Offense Type</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <div class="form-select-list">
                        <select  id="SelectMajorOffense" class="form-control custom-select-value" name="offense_type">
                          <option selected disabled>Choose Offense Type</option>
                          <option value="Minor Offense">Minor Offense</option>
                          <option value="Major Offense A">Major Offense A</option>
                          <option value="Major Offense B">Major Offense B</option>
                          <option value="Major Offense C">Major Offense C</option>
                          <option value="Major Offense D">Major Offense D</option>

                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Description</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" placeholder="Enter Offense Description" name="description" />
                    </div>
                  </div>
                </div>

                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Sanction</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" name="sanction" placeholder="Enter Saction" />
                    </div>
                  </div>
                </div>
                <div class="form-group-inner data-custon-pick data-custom-mg" id="data_5">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right" style="font-weight: bold;">Sanction Info</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <div class="input-daterange input-group" id="datepicker">
                        <input type="text" class="form-control" name="start_date" id="start_date" value="<?= date("m-d-Y") ?>" />
                        <span class="input-group-addon">to</span>
                        <input type="text" class="form-control" name="end_date" id="end_date" value="<?= date("m-d-Y") ?>" />
                      </div>
                    </div>
                  </div>
                </div>
           
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
                <button type="submit" name="add_offense" class="btn btn-primary btn-md">Submit</button>
              </div>
            </form>

          </div>
        </div>
      </div>

    </div>




            
            <!--------------------------------------- THIS IS THE MODAL FORM FOR THE REFERRAL DETAILS MODAL --------------------------------------------->
            
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div id="NOTIF_REFERRAL" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header header-color-modal bg-color-1">
                                    <h4 class="modal-title">Referral Notification Details</h4>
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                </div>
            
                                <form action="#" method="POST">
                                    <div class="modal-body">
            
                                    <div class="form-group-inner" id="STUD_ID">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <label class="login2 pull-right">Date and Time</label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                                    <input type="text" readonly class="form-control"
                                                        placeholder="Enter Student Name" id="stud_name" />
                                                </div>
                                            </div>
                                        </div>
            
            
                                        <!---------------------- DITO NAME NUNG NAGREFER ------------------------->
                                        <div class="form-group-inner" id="STUD_ID">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <label class="login2 pull-right">Referral From</label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                                    <input type="text" readonly class="form-control"
                                                        placeholder="Enter Student Name" id="stud_name" />
                                                </div>
                                            </div>
                                        </div>
            
                                        <!---------------------- DITO DETAILS NUNG NIREFER NA STUDENT ------------------------->
            
                                        <div class="form-group-inner" id="STUD_ID">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <label class="login2 pull-right"> ID</label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                                    <input type="text" readonly class="form-control"
                                                        placeholder="Enter Student Name" id="stud_name" />
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="form-group-inner" id="STUD_ID">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <label class="login2 pull-right"> Name</label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                                    <input type="text" readonly class="form-control"
                                                        placeholder="Enter Student Name" id="stud_name" />
                                                </div>
                                            </div>
                                        </div>
            
                                    </div>
            
                                    <div class="modal-footer">
                                        <input type="hidden" name="studentid" id="stud_id">
                                        <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Close</button>
                                        <button type="submit" name="reject_refferal" class="btn btn-primary btn-md">Reject</button>
                                        <button type="submit" name="set_refferal" class="btn btn-primary btn-md">Set Appointment</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            
                </div>
            
            
            <!--------------------------------------- THIS IS THE MODAL FORM FOR THE APPOINTMENT DETAILS MODAL FOR STUDENT APPOINTMENT--------------------------------------------->
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div id="NOTIF_APPOINTMENT" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header header-color-modal bg-color-1">
                                    <h4 class="modal-title">Appointment Notification Details</h4>
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                </div>
            
                                <form action="#" method="POST">
                                    <div class="modal-body">
            
                                    <div class="form-group-inner" id="STUD_ID">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <label class="login2 pull-right">Date and Time</label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                                    <input type="text" readonly class="form-control"
                                                        placeholder="Enter Student Name" id="stud_name" />
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="form-group-inner" id="STUD_ID">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <label class="login2 pull-right">ID</label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                                    <input type="text" readonly class="form-control"
                                                        placeholder="Enter Student Name" id="stud_name" />
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="form-group-inner" id="STUD_ID">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <label class="login2 pull-right">Name</label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                                    <input type="text" readonly class="form-control"
                                                        placeholder="Enter Student Name" id="stud_name" />
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <label class="login2 pull-right">Appointment Time</label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                                    <input type="text" readonly class="form-control"
                                                        placeholder="Enter Student Name" id="stud_name" />
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <label class="login2 pull-right">Description</label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                                    <input type="text" readonly class="form-control"
                                                        placeholder="Enter Student Name" id="stud_name" />
                                                </div>
                                            </div>
                                        </div>
            
                                    </div>
            
                                    <div class="modal-footer">
                                        <input type="hidden" name="studentid" id="stud_id">
                                        <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Close</button>
                                        <button type="submit" name="Cancel_Appointment" class="btn btn-primary btn-md">Cancel Appointment</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            
                </div>





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