<?php
session_start();

include_once("../connections/connection.php");

if (!isset($_SESSION['UserEmail'])) {

    echo "<script>window.open('../loginForm.php','_self')</script>";
} else {


    $con = connection();

    $id = $_SESSION['id_number'];

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

    <?php include('includes/gc___left-menu-area.php') ?>
    <?php include('includes/gc___top-menu-area.php') ?>
    <?php include('includes/gc___mobile_menu.php') ?>

    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcome-heading">
                                    <!-- i remove the search bar because there is already a search bar in the table area -->
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="breadcome-menu">
                                    <li><a href="gc___dashboard.php">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Notifications Table</span>
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
                                <h1>Notifications<span class="table-project-n"></span> Table</h1>
                            </div>
                        </div>
                        <div class="hpanel">
                           
                            <div class="panel-body">
                               
                                <div class="table-responsive ib-tb">
                                    <table class="table table-hover table-mailbox">
                                        <tbody>
                                            <?php
                                              $unreadCount = 0;

                                              $query = "SELECT n.*, u.first_name, u.last_name, u.profile_picture
                                                        FROM notifications n
                                                        JOIN users u
                                                        ON n.from_user = u.id_number
                                                        WHERE n.to_user = '$id'
                                                        AND (n.Type = 'Appointment' OR n.Type = 'Referral' OR n.Type = 'Reminder')
                                                        ORDER BY isRead ASC"; //CREate join para makuha name ng user
                                              $connect_query = mysqli_query($con, $query);

                                              while ($notification = mysqli_fetch_assoc($connect_query)) {
                                                $notif_id = $notification["id"];
                                                $from = $notification["from_user"];
                                                $DateTime = $notification["notif_date"];
                                                $infoID = $notification["info_ID"];
                                                $type = $notification["Type"];
                                                $isRead = $notification["isRead"];
                                                $name = $notification["first_name"]." ".$notification["last_name"];
                                                
                                                $description = "You have new notification";
                                                                    
                                                // ICON TYPE & DESCRIPTION
                                                switch ($type) {
                                                //GAWA NG CODE NA MAGSESEND NG NOTIF IF YUNG NAKUHANG APPOINTMENT IS CURRENT DATE NA
                                                case "Reminder": //reminder for appointments
                                                    $description = "You have an appointment with ".$name." today";
                                                    break;

                                                case "Appointment":
                                                    $description = $name." request an appointment";
                                                    break;

                                                case "Referral":
                                                    $description = $name." send you a new referral";
                                                    break;
                                                }

                                                if($isRead == 0){
                                                  $unread = 'unread';
                                                  $unreadCount += 1;
                                                }else{
                                                  $unread = '';
                                                }
                                                
                                                $notifDate = date('l, F j', strtotime($DateTime));
                                                $notiftime = date('H:i:s', strtotime($DateTime));



                                            ?>

                                            <tr class="<?= $unread ?>"  onclick="showModal(this)" data-notif = "<?= $notif_id ?>" data-id = "<?= $infoID ?>" data-type="<?= $type ?>">
                                                <td class="">
                                                    <div class="checkbox">
                                                        <input type="checkbox" checked>
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td><a href="#"><?= $type ?></a></td>
                                                <td><a href="#"><?= $name ?></a></td>
                                                <td><a href="#"><?= $description ?></a></td>
                                                <td class="text-right mail-date"><a href="#"><?= $notifDate ?></a></td>
                                                <td class="text-right mail-date"><a href="#"><?= $notiftime ?></a></td>
                                            </tr>

                                            <?php
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel-footer ib-ml-ft">
                                <i class="fa fa-eye"> </i> <?= $unreadCount ?> unread
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Static Table End -->

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

                    <form id="ReferralForm" action="../Guidance_Counselor_UI/gc___referral.php" method="POST">
                        <div class="modal-body">

                            <!---------------------- DITO NAME NUNG NAGREFER ------------------------->
                            <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Referral From</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input id="From-User" type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <!---------------------- DITO DETAILS NUNG NIREFER NA STUDENT ------------------------->

                            <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Student ID</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input id="Stud-ID" type="text" readonly class="form-control"
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
                                        <input id="Stud-Name" type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right"> Reason for Referral</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input id="Reason" type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                                <button type="submit" class="btn btn-primary btn-md">View Referral Details</button>
                                <button type="button" id="RejectButton" onclick="showRefModal(this)" class="btn btn-danger btn-md" data-ref-id="" >Reject</button>
                                <button id="setAppBtn" onclick="setRefAppointment(this)" data-ref-id="" class="btn btn-success btn-md">Set Appointment</button>
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

                    <form id="AppNotificationForm" action="../Guidance_Counselor_UI/gc___all_appointment.php" method="POST">
                        <div class="modal-body">


                            <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">User Type</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input id="User-Type" type="text" readonly class="form-control"
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
                                        <input id="User-ID" type="text" readonly class="form-control"
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
                                        <input id="User-Name"  type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Appointment Type</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input id="Appointment-Type" type="text" readonly class="form-control"
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
                                        <input id="Appointment-Time" type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="modal-footer">
                            
                            <button type="submit" class="btn btn-primary btn-md">View Appointments</button>
                            <button id="CancelAppointment" onclick="cancelAppointment(this)" data-AppID="" class="btn btn-success btn-md">Cancel Appointment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
function setRefAppointment(button){
    var refID = $(button).data('ref-id');

    $('#ReferralForm').attr("action", "../Guidance_Counselor_UI/gc___dashboard.php?ref_id="+refID+"");
}

function cancelAppointment(button){
    var AppID = $(button).data('AppID');
    
    $('#AppNotificationForm').attr("action", "../Guidance_Counselor_UI/cancel_appointment.php?app_id="+AppID+"");
}

function showRefModal(button){
    var refID = $(button).data('ref-id');

    $('#RejectForm').attr("action", "RefRejectQuery.php?ref_id="+refID+"");

    $('#REJECTION_FORM').modal('show');
}

function showModal(tr){
    
    // Get the notification ID from the clicked element
    var id = $(tr).data('id');
    var type = $(tr).data('type');
    var notif_id = $(tr).data('notif');

    // Send an AJAX request to the server with the ID
    $.ajax({
        
        url: '../Guidance_Counselor_UI/notifications.php',
        data: {id: id,
                type : type,
                notif_id : notif_id
                },
        success: function(data) {
            // Show the modal form
            switch (type) {
                case 'Appointment':
                case 'Reminder':
                    var Appointment = JSON.parse(data);
                    var name = Appointment.name;
                    var id_number = Appointment.id_number;
                    var user_type = Appointment.user_type;
                    var Appointment_time = Appointment.date +' ('+Appointment.timeslot+' - '+Appointment.timeslot_end+')';
                    var Appointment_type = Appointment.appointment_type;
                    
                    $('#CancelAppointment').data('AppID', id);
                    

                    $('#User-Type').val(user_type);
                    $('#User-ID').val(id_number);
                    $('#User-Name').val(name);
                    $('#Appointment-Type').val(Appointment_type);
                    $('#Appointment-Time').val(Appointment_time);
                    $('#NOTIF_APPOINTMENT').modal('show');
                    break;
                case 'Referral':
                    var Referral = JSON.parse(data);
                    var from = Referral.referrer_fname+" "+Referral.referrer_lname;
                    var stud_id = Referral.Student_ID;
                    var stud_name = Referral.Student_fname+" "+Referral.Student_lname;
                    var reason = Referral.reason;

                    
                    $('#setAppointment').attr("href", "../Guidance_Counselor_UI/gc___dashboard.php?ref_id="+Referral.ref_id+"");
                    $('#RejectButton').data('ref-id', id);
                    $('#setAppBtn').data('ref-id', id);

                    $('#From-User').val(from);
                    $('#Stud-ID').val(stud_id);
                    $('#Stud-Name').val(stud_name);
                    $('#Reason').val(reason);
                    $('#NOTIF_REFERRAL').modal('show');
                    break;
            }
            
        }
    });
}
    </script>


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