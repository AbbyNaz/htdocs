<?php

session_start();

include_once("../connections/connection.php");

include_once("Notify.php");

if (!isset($_SESSION['UserEmail'])) {

  echo "<script>window.open('../loginForm.php','_self')</script>";
} else {

  $con = connection();

  
  $Active_offense = "UPDATE offense_monitoring
                      SET status = 'Active', sanction_info = 
                                CASE
                                    WHEN DATEDIFF(end_date, CURDATE()) > 1 THEN CONCAT(DATEDIFF(end_date, CURDATE()), ' days')
                                    WHEN DATEDIFF(end_date, CURDATE()) = 1 THEN CONCAT(DATEDIFF(end_date, CURDATE()), ' day')
                                END
                      WHERE start_date <= CURDATE() AND end_date >= CURDATE()";
  $con->query($Active_offense) or die($con->error);
                    
  $Inactive_offense = "UPDATE offense_monitoring
                        SET status = 'Inactive',
                            sanction_info =
                                CASE
                                    WHEN start_date > CURDATE() THEN 'Not Started'
                                    WHEN end_date < CURDATE() THEN 'Sanction Ended'
                                END
                        WHERE start_date > CURDATE() OR end_date < CURDATE();";
  $con->query($Inactive_offense) or die($con->error);


  $offense = "SELECT * FROM offense_monitoring";
  $get_offense = $con->query($offense) or die($con->error);
  $row = $get_offense->fetch_assoc();

  if (isset($_POST['add_offense'])) {

    if (empty($_POST['id_number']) && empty($_POST['f_name']) && empty($_POST['l_name'])) {
      $_SESSION['status'] = "Offense Not Added";
      $_SESSION['status_code'] = "error";
      header('Location: gc___offense_monitoring.php');
    } else {
      $id_number = $_POST['id_number'];
      $f_name = $_POST['f_name'];
      $l_name = $_POST['l_name'];

      $user_validation_query = "SELECT * FROM users WHERE id_number = '$id_number' AND first_name LIKE '%$f_name%' AND last_name LIKE '%$l_name%'";
      $user_validation_run = $con->query($user_validation_query) or die($con->error);
      $row_user = $user_validation_run->fetch_assoc();

      if ($row_user) {
        $stud_id = $row_user['id_number'];
        $stud_name = $row_user['first_name'] . " " . $row_user['last_name'];
      }

      $offense_type = $_POST['offense_type'];
      $description = $_POST['description'];
      $dateToday = date("Y-m-d");
      $sanction = $_POST['sanction'];

      $s_date = $_POST['start_date'];
      $e_date = $_POST['end_date'];

      date_default_timezone_set('Asia/Manila');
      $date_start = strtotime($s_date);
      $date_end = strtotime($e_date);

      $start_date = date("Y-m-d", $date_start);
      $end_date = date("Y-m-d", $date_end);

      $offense_query = "INSERT INTO `offense_monitoring` (`student_id`,`stud_name`, `offense_type`, `description`, `date_created`, `sanction`, `start_date`, `end_date`) " .
        "VALUES ('$stud_id','$stud_name','$offense_type','$description','$dateToday','$sanction','$start_date','$end_date')";
      $query_run = $con->query($offense_query) or die($con->error);

      if ($query_run) {
        // echo "Saved";
        $_SESSION['status'] = "Offense Added";
        $_SESSION['status_code'] = "success";
        header('Location: gc___offense_monitoring.php');

        //Notify_user
        $getOffenseID = "SELECT id FROM offense_monitoring WHERE student_id = '$stud_id' AND end_date = '$end_date'";
        $QueryID = mysqli_query($con, $getOffenseID);
        $OffenseID = mysqli_fetch_assoc($QueryID);
        Notify('Offense', $OffenseID['id']);

        $current_date_time = date("Y-m-d H:i:s");
        $action_made = "Added a new offense on [ ID = " . $stud_id . "] " . $f_name . " " . $l_name . " to the offense list";
        $IDNUMBER = "1001";
        $user_position = "Admin";
        $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
        $query_runs = $con->query($add_logs) or die($con->error);

        

      } else {
        // echo "Not saved";
        $_SESSION['status'] = "Offense Not Added";
        $_SESSION['status_code'] = "error";
        header('Location: gc___offense_monitoring.php');

        $current_date_time = date("Y-m-d H:i:s");
        $action_made = "Error: Attempted to add a new offense on [ ID = " . $stud_id . "] " . $f_name . " " . $l_name . " to the offense list";
        $IDNUMBER = "1001";
            $user_position = "Admin";
            $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
            $query_runs = $con->query($add_logs) or die($con->error);

      }
    }
  } elseif (isset($_POST['update_offense'])) {
    $id = $_POST['id'];
    $offense_type = $_POST['edit_offense_type'];
    $description = $_POST['edit_offensedescription'];
    $dateToday = date("Y-m-d");
    $sanction = $_POST['sanction'];

    $s_date = $_POST['start_date'];
    $e_date = $_POST['end_date'];

    date_default_timezone_set('Asia/Manila');
    $date_start = strtotime($s_date);
    $date_end = strtotime($e_date);

    $start_date = date("Y-m-d", $date_start);
    $end_date = date("Y-m-d", $date_end);

    

    $offense_query = "UPDATE offense_monitoring SET offense_type = '$offense_type', description = '$description', sanction = '$sanction', start_date = '$start_date', end_date = '$end_date' WHERE id ='$id'";
    $query_run = $con->query($offense_query) or die($con->error);

    if ($query_run) {
      // echo "Saved";
      $_SESSION['status'] = "Offense Update Successfully";
      $_SESSION['status_code'] = "success";
      header('Location: gc___offense_monitoring.php');

      $current_date_time = date("Y-m-d H:i:s");
      $action_made = "Updated the offense of [ ID = " . $stud_id . "] " . $f_name . " " . $l_name;
      $IDNUMBER = "1001";
      $user_position = "Admin";
      $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
      $query_runs = $con->query($add_logs) or die($con->error);
      // echo "Not saved";
    } 
    else{
         $_SESSION['status'] = "Offense Not Updated Successfully";
      $_SESSION['status_code'] = "error";
      header('Location: gc___offense_monitoring.php');

      $current_date_time = date("Y-m-d H:i:s");
      $action_made = "Error: Attemptedt to update the offense of [ ID = " . $stud_id . "] " . $f_name . " " . $l_name ;
      $IDNUMBER = "1001";
            $user_position = "Admin";
            $add_logs = "INSERT INTO logs (`user_id`,`user`,  `action_made`, `date_created`) VALUES ('$IDNUMBER',' $user_position', '$action_made', '$current_date_time')";
            $query_runs = $con->query($add_logs) or die($con->error);
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
                    <li><span class="bread-blod">Offense Monitoring</span>
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

    <!-- ADD STUDENT OFFENSE -->
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
                <!-- <div class="form-group-inner" id ="OFFENSE_TYPE">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right pull-right-pro">Offense Type</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <div class="form-select-list">
                        <select id="SelectOffenseType" class="form-control custom-select-value" name="offense_type">
                          <option value="" disabled>Offense Type</option>
                          <option> Minor </option>
                          <option>Major</option>
                          <option></option>
                          <option>Offense D</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div> -->

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
                <!-- <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right pull-right-pro">Status</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <div class="form-select-list">
                        <select class="form-control custom-select-value" name="status">
                          <option>Active</option>
                          <option>Completed</option>
                          <option>Cancelled</option>
                          <option>Paused</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div> -->
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


    <!-- Static Table Start -->
    <div class="data-table-area mg-b-15">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline13-list">
              <div class="sparkline13-hd">
                <div class="main-sparkline13-hd">
                  <h1>Offense <span class="table-project-n">Monitoring</span> Table</h1>
                </div>
              </div>
              <div class="sparkline13-graph">
                <div class="datatable-dashv1-list custom-datatable-overright">
                  <div id="toolbar">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Add_New_Offense">
                      Add New
                    </button>
                  </div>
                  <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                    <thead>
                      <tr>
                        <th data-field="name">Student ID</th>
                        <th data-field="email">Name of Student</th>
                        <th data-field="phone">Offense Type</th>
                        <th data-field="complete">Offense Description</th>
                        <th data-field="task">Start Date</th>
                        <th data-field="taska">End Date</th>
                        <th data-field="date">Sanction</th>
                        <th data-field="price">Sanction Info</th>
                        <th data-field="status">Status</th>
                        <th data-field="action">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if ($row == 0) {
                        echo null;
                      } else {
                        do { ?>
                          <tr>
                            <td><b><?php echo $row['student_id'] ?></b></td>
                            <td><?php echo $row['stud_name'] ?></td>
                            <td><?php echo $row['offense_type'] ?></td>
                            <td><?php echo $row['description'] ?></td>
                            <td><?php echo date("F d, Y", strtotime($row['start_date'])) ?></td>
                            <td><?php echo date("F d, Y", strtotime($row['end_date'])) ?></td>
                            <td><?php echo $row['sanction'] ?></td>
                            <td><?php echo $row['sanction_info'] ?></td>
                            <td><?php echo $row['status'] ?></td>
                            <td>
                              <div style="display: flex; justify-content: center;">

                                <!-- <button id="showEditStaffModal" class="btn btn-warning" style="margin-left: 10px; margin-right: 20px; color: white;" data-toggle="modal" data-target="#Edit_Offense" data-id="<?= $row['id'] ?>">Edit</button> -->

                                <button title="Edit" class="pd-setting-ed" data-toggle="modal" data-target="#Edit_Offense" data-id="<?= $row['id'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                <button title="Delete" class="pd-setting-ed" data-toggle="modal" data-target="#Delete_Offense" data-id="<?= $row['id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></button>

                              </div>
                            </td>
                          </tr>

                      <?php } while ($row = $get_offense->fetch_assoc());
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


    <!-- MODAL FOR EDITING -->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div id="Edit_Offense" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-1">
              <h4 class="modal-title">Edit Offense</h4>
              <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
              </div>
            </div>

            <form action="" method="post">
              <div class="modal-body">
                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Student ID</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" placeholder="Enter Student ID" name="student_id" id="student_id" readonly />
                    </div>
                  </div>
                </div>
                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Student Name</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" placeholder="Enter Student Name" name="stud_name" id="stud_name" readonly />
                    </div>
                  </div>
                </div>
                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right pull-right-pro">Offense Type</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <div class="form-select-list">
                        <select class="form-control custom-select-value" name="edit_offense_type" id="edit_offense_type">
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
                      <input type="text" class="form-control" placeholder="Enter Offense Description" name="edit_offensedescription" id="edit_offensedescription" />
                    </div>
                  </div>
                </div>

                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Sanction</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" name="edit_sanction" placeholder="Enter Saction" id="edit_sanction" />
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
                        <input type="text" class="form-control" name="edit_start_date" id="edit_start_date" value="<?= date("m-d-Y") ?>" />
                        <span class="input-group-addon">to</span>
                        <input type="text" class="form-control" name="edit_end_date" id="edit_end_date" value="<?= date("m-d-Y") ?>" />
                      </div>
                    </div>
                  </div>
                </div>

               

                <!-- <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right pull-right-pro">Status</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <div class="form-select-list">
                        <select class="form-control custom-select-value" name="status" id="offensestatus">
                          <option>Active</option>
                          <option>Completed</option>
                          <option>Cancelled</option>
                          <option>Paused</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <div class="modal-footer">
                <input type="hidden" name="id" id="id">
                <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
                <button type="submit" name="update_offense" class="btn btn-primary btn-md">Update</button>
              </div>
            </form>

          </div>
        </div>
      </div>

    </div>


    <!-- MODAL FOR DELETING -->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div id="Delete_Offense" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-1">
              <h4 class="modal-title">Are you sure you wanted to delete the following ?</h4>
              <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
              </div>
            </div>

            <form id="OffDeleteForm" action="offense_monitoring_code.php" method="post">

              <div class="modal-body">
                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Student ID</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" placeholder="Enter Student ID" name="delete_student_id" id="delete_student_id" readonly />
                    </div>
                  </div>
                </div>
                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Student Name</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" placeholder="Enter Student Name" name="delete_stud_name" id="delete_stud_name" readonly />
                    </div>
                  </div>
                </div>
                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right pull-right-pro">Offense Type</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <div class="form-select-list">
                        <select class="form-control custom-select-value" name="delete_offense_type" id="delete_offense_type" readonly>
                          <option value="" disabled>Offense Type</option>
                          <option>Offense A</option>
                          <option>Offense B</option>
                          <option>Offense C</option>
                          <option>Offense D</option>
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
                      <input type="text" class="form-control" placeholder="Enter Offense Description" name="delete_offense_description" id="delete_offense_description" readonly />
                    </div>
                  </div>
                </div>

                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Sanction</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" name="delete_sanction" placeholder="Enter Saction" id="delete_sanction" readonly />
                    </div>
                  </div>
                </div>

              

                <!-- <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right pull-right-pro">Status</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <div class="form-select-list">
                        <select class="form-control custom-select-value" name="delete_offense_status" id="delete_offense_status" readonly>
                          <option>Active</option>
                          <option>Completed</option>
                          <option>Cancelled</option>
                          <option>Paused</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
              <div class="modal-footer">
                <input type="hidden" name="id" id="id">
                <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
                <button type="submit" name="delete_offense" class="btn btn-primary btn-md">Delete</button>
              </div>
            </form>

          </div>
        </div>
      </div>

    </div>



    <?php
    include('includes/gc___scripts.php');
    ?>

    <script type="text/javascript">
      $(document).ready(function() {
        $('#searchstudent').keyup(function() {
          var search = $(this).val();
          if (search != '') {
            jQuery.ajax({
              type: "POST",
              url: 'get_specific_studentprofile.php',
              data: {
                search: search
              },

              success: function(response) {
                console.log(response);
                userData = jQuery.parseJSON(response)
                $('#id_number').val(userData[0].id_number);
                $('#l_name').val(userData[0].last_name);
                $('#f_name').val(userData[0].first_name);
              }

            });
          }
        });
      });

      $(document).on('show.bs.modal', '#Edit_Offense', function(e) {
        var userID = $(e.relatedTarget).data('id');
        var userData;

        jQuery.ajax({
          type: "POST",
          url: 'get_specific_offense.php',
          data: {
            userID: userID
          },

          success: function(response) {
            console.log(response);
            userData = jQuery.parseJSON(response)
            $('#id').val(userData[0].id);
            $('#student_id').val(userData[0].student_id);
            $('#stud_name').val(userData[0].stud_name);
            $('#edit_offense_type').val(userData[0].offensetype);
            $('#edit_offensedescription').val(userData[0].offensedescription);
            $('#edit_sanction').val(userData[0].sanction);
            $('#edit_start_date').val(userData[0].start_date);
            $('#edit_end_date').val(userData[0].end_date);
            $('#offensestatus').val(userData[0].offensestatus);
          }

        });

        // window.location.href = "get_specific_user.php?userID=" + userID; 
      });

      $(document).on('show.bs.modal', '#Delete_Offense', function(e) {
        var userID = $(e.relatedTarget).data('id');
        var userData;

        jQuery.ajax({
          type: "POST",
          url: 'get_specific_offense.php',
          data: {
            userID: userID
          },

          success: function(response) {
            console.log(response);
            userData = jQuery.parseJSON(response)
            $('#delete_id').val(userData[0].id);
            $('#delete_student_id').val(userData[0].student_id);
            $('#delete_stud_name').val(userData[0].stud_name);
            $('#delete_offensetype').val(userData[0].offense_type);
            $('#delete_offense_description').val(userData[0].offensedescription);
            $('#delete_sanction').val(userData[0].sanction);
            $('#delete_start_date').val(userData[0].start_date);
            $('#delete_end_date').val(userData[0].end_date);
            $('#delete_offensestatus').val(userData[0].offensestatus);

            $('#OffDeleteForm').attr("action", "offense_monitoring_code.php?info="+userID+"");
          }

        });

        // window.location.href = "get_specific_user.php?userID=" + userID; 
      });
    </script>

    <!-- jquery
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
  </body>

  </html>

<?php } ?>