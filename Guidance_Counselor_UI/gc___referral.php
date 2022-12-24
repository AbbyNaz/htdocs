<?php

session_start();



include_once("../connections/connection.php");

if(!isset($_SESSION['UserEmail'])) {

    echo "<script>window.open('../loginForm.php','_self')</script>";
} else {

    $con = connection();
    $refferal = "SELECT * FROM users LEFT JOIN refferals ON refferals.reffered_user = users.user_id WHERE refferals.ref_id IS NOT NULL ORDER BY refferals.reffered_date DESC";
    $get_referral = $con->query($refferal) or die($con->error);
    $row = $get_referral->fetch_assoc();

    
    

    //Change to JavaScript
    // // For Cancelled button 
    // if (isset($_GET['id'])) {
    //     $ref_id = $_GET['id'];
    //     $status = "Cancelled";
    //     $cancel_refferal = "UPDATE `refferals` SET `ref_status`='$status' WHERE ref_id = '$ref_id'";
    //     $con->query($cancel_refferal) or die($con->error);
    //     header("Location: gc___referral.php");
    // }

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
                                        <!-- <form role="search" class="sr-input-func">
                                        <input type="text" placeholder="Search..." class="search-int form-control">
                                        <a href="#"><i class="fa fa-search"></i></a>
                                    </form> -->
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

        <!----------------------------------------- THIS IS THE MODAL FORM FOR SEARCHING STUDENT ---------------------------------------------->
        <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div id="REJECTION_FORM" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header header-color-modal bg-color-1">
                            <h4 class="modal-title">Rejection Form </h4>
                            <div class="modal-close-area modal-close-df">
                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                            </div>
                        </div>

                        <form action="#" method="POST">
                            <div class="modal-body">
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

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
                                <button type="submit" name="add_refferal" class="btn btn-primary btn-md">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div> -->

        <!-- Add new Referral -->
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div id="ADD_REFERRAL" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header header-color-modal bg-color-1">
                            <h4 class="modal-title">Add New Referral</h4>
                            <div class="modal-close-area modal-close-df">
                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                            </div>
                        </div>

                        <form action="" method="POST">
                            <div class="modal-body">
                                <!-- <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Student ID</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" name="student_id" class="form-control" placeholder="Enter Student ID" required/>
                                    </div>
                                </div>
                            </div> -->
                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Last Name</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">First Name</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Level</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" name="level" placeholder="Enter Level" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right" name="REFF_SOURCE">Source</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <div class="form-select-list">
                                                <select class="form-control custom-select-value" name="source" required>
                                                    <option value="" selected disabled hidden>Select Source</option>
                                                    <option>Guidance Counselor</option>
                                                    <option>Faculty</option>
                                                    <option>Staff</option>
                                                    <option>Classmate/s</option>
                                                    <option>Parent/Guardian</option>
                                                    <option>Others</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Referred By</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="reffered_by" class="form-control" placeholder="Enter Name" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner data-custon-pick" id="data_2">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-9">
                                            <label class="login2 pull-right" style="font-weight: bold;">Date</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <div class="input-group ">
                                                <!-- <span class="input-group-addon"><i class="fa fa-calendar"></i></span> -->
                                                <input type="date" name="reffered_date" class="form-control" value="<?php echo date('d/m/Y'); ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label name="REFF_REASON" class="login2 pull-right">Nature</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <div class="form-select-list">
                                                <select class="form-control custom-select-value" name="nature" required>
                                                    <option value="" selected disabled hidden>Select Nature</option>
                                                    <option>Academic</option>
                                                    <option>Career</option>
                                                    <option>Personal</option>
                                                    <option>Crisis</option>
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
                                            <input type="text" name="reason" class="form-control" placeholder="Enter Reason for Referral" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Action/s</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="actions" class="form-control" placeholder="Action/s Taken before Referral" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Remarks</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="remarks" class="form-control" placeholder="Enter Remarks" />
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
                                <button type="submit" name="add_refferal" class="btn btn-primary btn-md">Submit</button>
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
                                    <!-- <div id="toolbar">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ADD_REFERRAL">
                                        Add New
                                    </button><br>
                                </div> -->
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>

                                            <tr>
                                                <th data-field="name" data-editable="false">Student ID</th>
                                                <th data-field="L_email" data-editable="false">First Name</th>
                                                <th data-field="F_email" data-editable="false">Last Name</th>
                                                <th data-field="phone" data-editable="false">Source</th>
                                                <th data-field="complete" data-editable="false">Referred By</th>
                                                <th data-field="task" data-editable="false">Date</th>
                                                <th data-field="date" data-editable="false">Nature</th>
                                                <th data-field="price" data-editable="false">Reason</th>
                                                <th data-field="pric" data-editable="false">Action Taken</th>
                                                <th data-field="pri" data-editable="false">Remarks</th>
                                                <th data-field="status">Status</th>
                                                <th data-field="actions">Actions</th>
                                                <!-- <th data-field="appointment">Set Appoinment</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <!-- If no Data to display display null -->
                                            <?php if ($row == 0) {
                                                echo null;
                                            } else {
                                                do { ?>
                                                <?php
                                                    $reffered_by = $row['reffered_by'];
                                                    $refferedBy_query = "SELECT * FROM users WHERE user_id = '$reffered_by'";
                                                    $get_refferedBy = $con->query($refferedBy_query) or die($con->error);
                                                    $row_reffered = $get_refferedBy->fetch_assoc();
                                                ?>
                                                    <tr>
                                                        <td><b><?php echo $row['id_number'] ?></b></td>
                                                        <td><?php echo $row['first_name'] ?></td>
                                                        <td><?php echo $row['last_name'] ?></td>
                                                        <td><?php echo $row['source'] ?></td>
                                                        <!-- <td><?php echo $row['reffered_by'] ?></td> -->
                                                        <td><?php echo $row_reffered['first_name'] ?> <?php echo $row_reffered['last_name'] ?></td>
                                                        <td><?php echo $row['reffered_date'] ?></td>
                                                        <td><?php echo $row['nature'] ?></td>
                                                        <td><?php echo $row['reason'] ?></td>
                                                        <td><?php echo $row['actions'] ?></td>
                                                        <td><?php echo $row['remarks'] ?></td>
                                                        <td><?php echo $row['ref_status'] ?></td>

                                                        <!-- <td>
                                                            <p class="btn btn-xs <?php if ($row['ref_status'] == "For Approval" || $row['ref_status'] == "for approval") {
                                                                                            echo "btn-warning";
                                                                                        } elseif ($row['ref_status'] == "Cancelled" || $row['ref_status'] == "cancelled") {
                                                                                            echo "btn-danger";
                                                                                        } elseif ($row['ref_status'] == "In Review" || $row['ref_status'] == "in review") {
                                                                                            echo "btn-primary";
                                                                                        } elseif ($row['ref_status'] == "Done" || $row['ref_status'] == "done") {
                                                                                            echo "btn-info";
                                                                                        } elseif ($row['ref_status'] == "Pending Feedback" || $row['ref_status'] == "pending feedback") {
                                                                                            echo "btn-warning";
                                                                                        } elseif ($row['ref_status'] == "Completed" || $row['ref_status'] == "completed") {
                                                                                            echo "btn-success";
                                                                                        } else {
                                                                                            echo "btn-secondary";
                                                                                        } ?>"><?php echo $row['ref_status'] ?></p>
                                                        </td> -->
                                                        <td>
                                                            <?php if ($row['ref_status'] == "For Approval" || $row['ref_status'] == "for approval" || $row['ref_status'] == "Pending" || $row['ref_status'] == "pending") {
                                                                echo "<div style='display: flex; text-align: center; align-items: center;'>" ?>
                                                                <!-- <a class="btn btn-primary" style="color: white; padding: 5px 8px; border: 1px solid #337ab7; margin: auto;" href="edit_refferal.php?id=<?= $row['ref_id'] ?>"><i class="fa fa-pencil"></i></a> -->
                                                                <!-- <a class="btn btn-danger" style="color: white;" href="gc___referral.php?id=<?= $row['ref_id'] ?>">Reject</a> -->

                                                                <button onclick="showRefModal(this)" class="btn btn-danger" data-toggle="modal" data-ref-id ="<?= $row['ref_id'] ?>">Reject</button>

                                                                <a class="btn btn-success" style="margin-left: 10px; color: white;" href="gc___dashboard.php?ref_id=<?= $row['ref_id'] ?>">Set Appointment</a>
                                                            <?php "</div>";
                                                            } else echo null; ?>

                                                            <!-- <div style="display: flex;"> -->
                                                            <!-- <a class="btn btn-primary" style="color: white; padding: 5px 8px; border: 1px solid #337ab7; margin: auto;" href="edit_refferal.php?id=<?= $row['ref_id'] ?>"><i class="fa fa-pencil"></i></a> -->
                                                            <!-- <a class="btn btn-danger" style="margin-left: 10px; color: white;" href="gc___referral.php?id=<?= $row['ref_id'] ?>">Reject</a>
                                                    <a class="btn btn-success" style="margin-left: 10px; color: white;" 
                                                    href="gc___calendar.php?ref_id=<?= $row['ref_id'] ?>&firstName=<?= $row['first_name'] ?>&lastName=<?= $row['last_name'] ?>">Set Appointment</a>
                                                </div> -->
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

        <!-- REJECTION FORM -->
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div id="REJECTION_FORM" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header header-color-modal bg-color-1">
                            <h4 class="modal-title">Rejection Form </h4>
                            <div class="modal-close-area modal-close-df">
                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                            </div>
                        </div>

                        <form id="RejectForm" action="" method="POST">
                            <div class="modal-body">
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

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
                                <button type="submit" name="add_refferal" class="btn btn-primary btn-md">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <script type="text/javascript">

            function showRefModal(button){
                var refID = $(button).data('ref-id');

                $('#RejectForm').attr("action", "RefRejectQuery.php?ref_id="+refID+"");

                $('#REJECTION_FORM').modal('show');
            }

            

            // $(document).on("click", "#set_app", () => {
            //   $.ajax({
            //     url: "ref_update_status.php",
            //     type: "POST",
            //     dataType: "json",
            //     data: {
            //       refid: $row['ref_id'],
            //       userid: $row['referred_user'],
            //     },
            //     xhrFields: {
            //       withCredentials: true,
            //     },
            //     crossDomain: true,
            //     success: (data) => {

            //       location.reload();

            //     }
            //   });
            // });


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

<?php } ?>