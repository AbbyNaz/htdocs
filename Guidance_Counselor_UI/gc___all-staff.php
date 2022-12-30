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

    <?php include('includes/gc___left-menu-area.php') ?>
    <?php include('includes/gc___top-menu-area.php') ?>
    <?php include('includes/gc___mobile_menu.php')  ?>


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
                    <li><span class="bread-blod">All Staff</span>
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

    <!----------------------------------------- THIS IS THE MODAL FORM OF ADDING STAFF MANUALLY ---------------------------------------------->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div id="ADD_STAFF_MANUAL" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-1">
              <h4 class="modal-title">Add New Staff </h4>
              <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
              </div>
            </div>

            <form action="thecodestaff2.php" method="POST">
              <div class="modal-body">
                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Staff ID</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="number" name="staff_id" class="form-control" placeholder="Enter Staff ID" required />
                    </div>
                  </div>
                </div>

                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">First Name</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="text" name="staff_first_name" class="form-control" placeholder="Enter First Name" required />
                    </div>
                  </div>
                </div>

                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Middle Name</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="text" name="staff_middle_name" class="form-control" placeholder="Enter Middle Name" required />
                    </div>
                  </div>
                </div>

                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Last Name</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="text" name="staff_last_name" class="form-control" placeholder="Enter Last Name" required />
                    </div>
                  </div>
                </div>

                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Address</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="text" name="staff_address" class="form-control" placeholder="Enter Address" required />
                    </div>
                  </div>
                </div>

                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Contact No.</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="number" id="phone-number" maxlength="11" name="staff_contact" class="form-control" placeholder="Enter Contact Number" />
                    </div>
                  </div>
                </div>

                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Department</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <div class="form-select-list">
                        <select id="Select_Department" class="form-control custom-select-value" name="staff_department" onchange="changeDropdown(this.value);" required>
                          <option disabled selected value>Select Department</option>
                          <option value="Academics">Academics</option>
                          <option value="Administrative">Administrative</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group-inner" id="ACADEMIC_POSITIONS" style="display: none">
                  <div class=" row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Academic Position</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <div class="form-select-list">
                        <select id="mySelect" class="form-control custom-select-value" name="staff_dep_position1" onchange="changeDropdown(this.value);">
                          <option value="Lab Custodian">Lab Custodian</option>
                          <option value="Kitchen Custodian">Kitchen Custodian</option>
                          <option value="Instructor">Instructor</option>
                          <option value="Academic Head">Academic Head</option>

                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group-inner" id="ADMINISTRATIVE_POSITIONS" style="display: none">
                  <div class=" row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Administrative Position</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <div class="form-select-list">
                        <select id="mySelect" class="form-control custom-select-value" name="staff_dep_position2" onchange="changeDropdown(this.value);">
                          <option value="Registrar">Registrar</option>
                          <option value="Record">Record</option>
                          <option value="Administrative Officer">Administrative Officer</option>
                          <option value="Security">Security</option>
                          <option value="Utility">Utility</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <!----------------- input type as student for login validation --------------------->
                <input type="hidden" name="usertype" value="Staff">

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
                  <button type="submit" name="add_staff" class="btn btn-primary btn-md">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>




    <!----------------------------------------- THIS IS THE MODAL FORM OF ADDING STAFF USING EXCEL FILE ---------------------------------------------->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div id="ADD_STAFF_EXCEL" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-1">
              <h4 class="modal-title"> Import Excel File to Add Staff </h4>
              <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
              </div>
            </div>

            <form action="excelupload-staff.php" method="POST" enctype="multipart/form-data">
              <div class="modal-body">

                <div class="form-group-inner">
                  <div class="row">

                    <div class="col-lg-12 col-md-9 col-sm-9 col-xs-12">
                      <input type="file" name="import_file" class="form-control">
                    </div>
                  </div>
                </div>

              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
                <button type="submit" name="add_staff_data" class="btn btn-primary btn-md">Upload</button>

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
                  <h1>All<span class="table-project-n"> Staff</span> Table</h1>
                </div>
              </div>
              <div class="sparkline13-graph">

                <div class="datatable-dashv1-list custom-datatable-overright">

                  <div id="toolbar">
                    <div class="card-header py-3">
                      <h5 class="m-0 font-weight-bold text-primary">

                        <button type="button" class="btn btn-custon-four btn-primary btn-md" data-toggle="modal" data-target="#ADD_STAFF_EXCEL">Import File</button>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ADD_STAFF_MANUAL">
                          Add New
                        </button>

                      </h5>
                    </div>
                  </div>

                  <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                    <thead>
                      <tr>
                        <th>Staff ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Address</th>
                        <th>Contact Number</th>
                        <th>Department</th>
                        <th>Position</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>

                      <?php
                      // $connection = mysqli_connect('localhost', 'root', '', 'guidance_and_counseling');

                      $query = "SELECT * FROM users WHERE role = 2 ORDER BY last_name ASC";
                      $query_run = mysqli_query($con, $query);

                      if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $row) {
                      ?>

                          <tr>
                            <td><?= $row['id_number'] ?></td>
                            <td><?= $row['last_name'] ?></td>
                            <td><?= $row['first_name'] ?></td>
                            <td><?= $row['middle_name'] ?></td>
                            <td><?= $row['address'] ?></td>
                            <td><?= $row['contact'] ?></td>
                            <td><?= $row['department'] ?></td>
                            <td><?= $row['dep_position'] ?></td>

                            <td>
                              <div style="display: flex; justify-content: center;">
                                <!-- <a class="btn btn-success" style="margin-left: 1px; color: white;" href="gc___staff_profile.php?id=<?= $row['user_id'] ?>">View & Edit</a> -->

                                <a href="gc___staff_profile.php?id=<?= $row['user_id'] ?>"><button title="View Profile" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button> </a>
                                <button title="Edit" class="pd-setting-ed" data-toggle="modal" data-target="#EDIT_STAFF" data-id="<?= $row['user_id'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                <button title="Delete" class="pd-setting-ed" data-toggle="modal" data-target="#DELETE_STAFF" data-id="<?= $row['user_id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></button>

                              </div>
                            </td>

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
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Static Table End -->

    <!----------------------------------------- THIS IS THE MODAL FORM OF editing STAFF MANUALLY ---------------------------------------------->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div id="EDIT_STAFF" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-1">
              <h4 class="modal-title">Edit Staff Information</h4>
              <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
              </div>
            </div>

            <form action="thecodestaff2.php" method="POST">
              <div class="modal-body">
                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Staff ID</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="number" name="edit_staff_id" id="edit_staff_id" class="form-control" placeholder="Enter Staff ID" readonly />
                    </div>
                  </div>
                </div>

                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">First Name</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="text" name="edit_staff_first_name" id="edit_staff_first_name" class="form-control" placeholder="Enter First Name" required />
                    </div>
                  </div>
                </div>

                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Middle Name</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="text" name="edit_staff_middle_name" id="edit_staff_middle_name" class="form-control" placeholder="Enter Middle Name"  />
                    </div>
                  </div>
                </div>

                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Last Name</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="text" name="edit_staff_last_name" id="edit_staff_last_name" class="form-control" placeholder="Enter Last Name" required />
                    </div>
                  </div>
                </div>

                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Address</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="text" name="edit_staff_address" id="edit_staff_address" class="form-control" placeholder="Enter Address" required />
                    </div>
                  </div>
                </div>

                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Contact No.</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="number" name="edit_staff_contact" id="edit_staff_contact" class="form-control" placeholder="Enter Contact Number" />
                    </div>
                  </div>
                </div>

                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Department</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <div class="form-select-list">
                        <select onchange="changeEditDropdown(this)" class="form-control custom-select-value" name="edit_staff_department" id="edit_staff_department" required>
                          <option disabled selected value>Select Department</option>
                          <option value="Academics">Academics</option>
                          <option value="Administrative">Administrative</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group-inner" id="ACA_POS">
                  <div class=" row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Academic Position</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <div class="form-select-list">
                        <select class="form-control custom-select-value" name="edit_staff_positionAC" id="edit_staff_positionAC">
                          <option value="Lab Custodian">Lab Custodian</option>
                          <option value="Kitchen Custodian">Kitchen Custodian</option>
                          <option value="Instructor">Instructor</option>
                          <option value="Academic Head">Academic Head</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group-inner" id="AD_POS">
                  <div class=" row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Administrative Position</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <div class="form-select-list">
                        <select class="form-control custom-select-value" name="edit_staff_positionAD" id="edit_staff_positionAD">  
                          <option value="Registrar">Registrar</option>
                          <option value="Record">Record</option>
                          <option value="Administrative Officer">Administrative Officer</option>
                          <option value="Security">Security</option>
                          <option value="Utility">Utility</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <!----------------- input type as student for login validation --------------------->
                <input type="hidden" name="usertype" value="Staff">

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
                  <button type="submit" name="edit_staff" class="btn btn-primary btn-md">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>



    <!----------------------------------------- THIS IS THE MODAL FORM OF deleting STAFF MANUALLY ---------------------------------------------->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div id="DELETE_STAFF" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-1">
              <h4 class="modal-title">Are you sure you wanted to delete this staff ?</h4>
              <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
              </div>
            </div>

            <form action="thecodestaff2.php" method="POST">
              <div class="modal-body">
                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Staff ID</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="text" name="delete_staff_id" id="delete_staff_id" class="form-control" placeholder="Enter Staff ID" readonly />
                    </div>
                  </div>
                </div>

                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">First Name</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="text" name="delete_staff_first_name" id="delete_staff_first_name" class="form-control" placeholder="Enter First Name" readonly />
                    </div>
                  </div>
                </div>

                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Middle Name</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="text" name="delete_staff_middle_name" id="delete_staff_middle_name" class="form-control" placeholder="Enter Middle Name" readonly />
                    </div>
                  </div>
                </div>

                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Last Name</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="text" name="delete_staff_last_name" id="delete_staff_last_name" class="form-control" placeholder="Enter Last Name" readonly />
                    </div>
                  </div>
                </div>


                <!----------------- input type as student for login validation --------------------->
                <input type="hidden" name="usertype" value="Staff">

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
                  <button type="submit" name="delete_staff" class="btn btn-primary btn-md">Confirm</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>


    <?php
    include('includes/gc___scripts.php');
    ?>

    <script>
      $(document).ready(function() {
        $('#phone-number').keyup(function() {
          if (this.value.length > 11) {
            this.value = this.value.slice(0, 11);
          }
        });
      });
    </script>

    <script>
      function changeDropdown() {
        var state = document.getElementById("Select_Department").value;
        // alert(state);
        if (state == "Academics") {
          document.getElementById("ACADEMIC_POSITIONS").style.display = "block";
          document.getElementById("ADMINISTRATIVE_POSITIONS").style.display = "none";

        } else if (state == "Administrative") {
          document.getElementById("ADMINISTRATIVE_POSITIONS").style.display = "block";
          document.getElementById("ACADEMIC_POSITIONS").style.display = "none";
        } else {
          document.getElementById("ACADEMIC_POSITIONS").style.display = "none";
          document.getElementById("ADMINISTRATIVE_POSITIONS").style.display = "none";
        }
      }


      function changeEditDropdown(select) {
        
        var value = $(select).val();
        // alert(state);
        if (value == "Academics") {
          document.getElementById("ACA_POS").style.display = "block";
          document.getElementById("AD_POS").style.display = "none";

        } else if (value == "Administrative") {
          document.getElementById("AD_POS").style.display = "block";
          document.getElementById("ACA_POS").style.display = "none";
        } else {
          document.getElementById("ACA_POS").style.display = "none";
          document.getElementById("AD_POS").style.display = "none";
        }
      }
    </script>

    <script>
      $(document).on('show.bs.modal', '#EDIT_STAFF', function(e) {
        var userID = $(e.relatedTarget).data('id');
        var userData;

        jQuery.ajax({
          type: "POST",
          url: 'get_specific_user.php',
          data: {
            userID: userID
          },

          success: function(response) {
            userData = jQuery.parseJSON(response);

            $('#edit_staff_id').val(userData[0].id_number);
            $('#edit_staff_first_name').val(userData[0].first_name);
            $('#edit_staff_middle_name').val(userData[0].middle_name);
            $('#edit_staff_last_name').val(userData[0].last_name);
            $('#edit_staff_address').val(userData[0].address);
            $('#edit_staff_contact').val(userData[0].contact);
            $('#edit_staff_department').val(userData[0].department);
            changeEditDropdown($('#edit_staff_department'));

            if(userData[0].department == "Academics"){
              $('#edit_staff_positionAC').val(userData[0].dep_position);
              console.log("AC "+ userData[0].department);
            }else if(userData[0].department == "Administrative"){
              $('#edit_staff_positionAD').val(userData[0].dep_position);
              console.log("AC "+ userData[0].department);
            }
            
          }

        });
        // window.location.href = "get_specific_user.php?userID=" + userID; 
      });
    </script>

    <script>
      $(document).on('show.bs.modal', '#DELETE_STAFF', function(e) {
        var userID = $(e.relatedTarget).data('id');
        var userData;

        jQuery.ajax({
          type: "POST",
          url: 'get_specific_user.php',
          data: {
            userID: userID
          },

          success: function(response) {
            console.log(response);
            userData = jQuery.parseJSON(response)
            $('#delete_staff_id').val(userData[0].id_number);
            $('#delete_staff_first_name').val(userData[0].first_name);
            $('#delete_staff_middle_name').val(userData[0].middle_name);
            $('#delete_staff_last_name').val(userData[0].last_name);
            $('#delete_staff_address').val(userData[0].address);
            $('#delete_staff_contact').val(userData[0].contact);
            $('#delete_staff_department').val(userData[0].department);
            $('#delete_staff_position').val(userData[0].dep_position);
          }

        });
        // window.location.href = "get_specific_user.php?userID=" + userID; 
      });
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