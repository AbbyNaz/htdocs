<?php

session_start();

include_once("../connections/connection.php");

if(!isset($_SESSION['UserEmail'])){
        
  echo "<script>window.open('../loginForm.php','_self')</script>";
  
}else{

      $con = connection();
      $ref_id = $_GET['id'];

      $refferal = "SELECT * FROM users LEFT JOIN refferals ON refferals.reffered_user = users.user_id WHERE refferals.ref_id = '$ref_id'";
      $get_referral = $con->query($refferal) or die ($con->error);
      $row = $get_referral->fetch_assoc();

      $s_id = $row['ref_id'];
      
      $referred_user = "SELECT * from refferals WHERE ref_id = '$s_id'";
      $get_referred_user = $con->query($referred_user) or die ($con->error);
      $row_referred_user = $get_referred_user->fetch_assoc();

  if(isset($_POST['update_referral'])) {

    if ($row_referred_user > 0) {
      $source = $_POST['source'];
      // $reffered_by = $_POST['referred_by'];
      $reffered_date = $_POST['reffered_date'];
      $nature = $_POST['nature'];
      $reason = $_POST['reason'];
      $actions = $_POST['actions'];
      $remarks = $_POST['remarks'];
      // $status = "$_POST['ref_status']";
      $status = "Pending";
    
      $update_query = "UPDATE `refferals` SET `source`='$source',`reffered_date`='$reffered_date', ".
                "`nature`='$nature',`reason`='$reason',`actions`='$actions',`remarks`='$remarks',`ref_status`='$status' WHERE ref_id = '$ref_id'";
      $con->query($update_query) or die ($con->error);
      header("Location: stud___set_referral.php");

    } else {
      echo "Student is not existing.";
    }
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
                                    <form role="search" class="sr-input-func">
                                        <input type="text" placeholder="Search..." class="search-int form-control">
                                        <a href="#"><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Edit Referral</span>
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

    <!-- Static Table Start -->
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Edit Referral</h1>
                            </div>
                        </div>
                        <form action="" method="POST">
                          <div class="modal-body">
                            <input type="hidden" name="edit_ref_id" id="ref_id" value="<?php echo $s_id; ?>">
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Student ID</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <h5 style="margin-top: 12px; margin-left: 15px;"><?php echo $row['id_number']; ?></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Full Name</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <h5 style="margin-top: 12px; margin-left: 15px;"><?php echo $row['first_name'] ?> <?php echo $row['last_name']; ?></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Level</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <h5 style="margin-top: 12px; margin-left: 15px;"><?php echo $row['level'] ?></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Program</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <h5 style="margin-top: 12px; margin-left: 15px;"><?php echo $row['program'] ?></h5>
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
                                            <select class="form-control custom-select-value" value="<?php echo $row['source'] ?>" name="source" required>
                                                <option value="" disabled>Select Source</option>
                                                <option <?= ($row['source'] == "Guidance Counselor") ? "selected" : "" ?>>Guidance Counselor</option>
                                                <option <?= ($row['source'] == "Faculty") ? "selected" : "" ?>>Faculty</option>
                                                <option <?= ($row['source'] == "Staff") ? "selected" : "" ?>>Staff</option>
                                                <option <?= ($row['source'] == "Classmate/s") ? "selected" : "" ?>>Classmate/s</option>
                                                <option <?= ($row['source'] == "Parent/Guardian") ? "selected" : "" ?>>Parent/Guardian</option>
                                                <option <?= ($row['source'] == "Others") ? "selected" : "" ?>>Others</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Referred By</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" name="referred_by" class="form-control" value="<?php echo $row['reffered_by'] ?>" placeholder="Enter Name" required/>
                                    </div>
                                </div>
                            </div> -->

                            <div class="form-group-inner data-custon-pick" id="data_2">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-9">
                                        <label class="login2 pull-right" style="font-weight: bold;">Date</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <div class="input-group ">
                                            <!-- <span class="input-group-addon"><i class="fa fa-calendar"></i></span> -->
                                            <input type="date" name="reffered_date" class="form-control" value="<?php echo $row['reffered_date'] ?>" required>
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
                                                <option value="" disabled>Select Nature</option>
                                                <option <?= ($row['nature'] == "Academic") ? "selected" : "" ?>>Academic</option>
                                                <option <?= ($row['nature'] == "Career") ? "selected" : "" ?>>Career</option>
                                                <option <?= ($row['nature'] == "Personal") ? "selected" : "" ?>>Personal</option>
                                                <option <?= ($row['nature'] == "Crisis") ? "selected" : "" ?>>Crisis</option>
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
                                        <input type="text" name="reason" class="form-control" value="<?php echo $row['reason'] ?>" placeholder="Enter Reason for Referral" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Action/s</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" name="actions" class="form-control" value="<?php echo $row['actions'] ?>" placeholder="Action/s Taken before Referral" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Remarks</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" name="remarks" class="form-control" value="<?php echo $row['remarks'] ?>" placeholder="Enter Remarks"/>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label name="REFF_STATUS" class="login2 pull-right">Status</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <div class="form-select-list">
                                            <select class="form-control custom-select-value" name="ref_status" required>
                                                <option value="" disabled>Select Status</option>
                                                <option <?= ($row['ref_status'] == "Pending") ? "selected" : "" ?>>Pending</option>
                                                <option <?= ($row['ref_status'] == "Cancelled") ? "selected" : "" ?>>Cancelled</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button> -->
                            <button type="submit" name="update_referral" class="btn btn-primary btn-md">Update</button>
                        </div>
                    </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Static Table End -->
    <?php include('includes/stud___footer.php')   ?>
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