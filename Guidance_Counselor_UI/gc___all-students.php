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
                  <li><span class="bread-blod">All Students</span>
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

  <!----------------------------------------- THIS IS THE MODAL FORM OF ADDING STUDENT MANUALLY ---------------------------------------------->
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div id="ADD_STUDENT_MANUAL" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-color-modal bg-color-1">
            <h4 class="modal-title">Add New Student </h4>
            <div class="modal-close-area modal-close-df">
              <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
          </div>

          <form action="thecodestud.php" method="POST">
            <div class="modal-body">
              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Student ID</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="stud_id" class="form-control" placeholder="Enter Student ID" required />
                  </div>
                </div>
              </div>

              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">First Name</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="stud_first_name" class="form-control" placeholder="Enter First Name"
                      required />
                  </div>
                </div>
              </div>

              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Middle Name</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="stud_middle_name" class="form-control" placeholder="Enter Middle Name" />
                  </div>
                </div>
              </div>

              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Last Name</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="stud_last_name" class="form-control" placeholder="Enter Last Name"
                      required />
                  </div>
                </div>
              </div>

              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Address</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="stud_address" class="form-control" placeholder="Enter Address" required />
                  </div>
                </div>
              </div>

              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Contact No.</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="stud_contact" class="form-control" placeholder="Enter Contact Number"
                      required />
                  </div>
                </div>
              </div>


              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Program</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="form-select-list">
                      <select id="stud_select_usertype" class="form-control custom-select-value" name="stud_program"
                        onchange="changeDropdown(this.value);">
                        <option disabled selected>Select Program</option>
                        <option value="BSIT">BSIT</option>
                        <option value="CCTECH">CCTECH</option>
                        <option value="MAWD">MAWD</option>
                        <option value="CUART">CUART</option>
                        <option value="HUMSS">HUMSS</option>
                        <option value="BSBA">BSBA</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Level</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="form-select-list">
                      <select id="stud_select_usertype" class="form-control custom-select-value" name="stud_level"
                        onchange="changeDropdown(this.value);">
                        <option disabled selected>Select Level</option>
                        <option value="Grade 11">Grade 11</option>
                        <option value="Grade 12">Grade 12</option>
                        <option value="1st Year">1st Year</option>
                        <option value="2nd Year">2nd Year</option>
                        <option value="3rd Year">3rd Year</option>
                        <option value="4th Year">4th Year</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>



              <!----------------- input type as student for login validation --------------------->
              <input type="hidden" name="usertype" value="Student">

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
                <button type="submit" name="add_student" class="btn btn-primary btn-md">Save</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>

  </div>




  <!----------------------------------------- THIS IS THE MODAL FORM OF ADDING STUDENT USING EXCEL FILE ---------------------------------------------->
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div id="ADD_STUDENT_EXCEL" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-color-modal bg-color-1">
            <h4 class="modal-title"> Import Excel File to Add Students </h4>
            <div class="modal-close-area modal-close-df">
              <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
          </div>

          <form action="excelupload.php" method="POST" enctype="multipart/form-data">
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
              <button type="submit" name="add_stud_data" class="btn btn-primary btn-md">Upload</button>

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
                <h1>All<span class="table-project-n"> Students</span> Table</h1>
              </div>
            </div>
            <div class="sparkline13-graph">

              <div class="datatable-dashv1-list custom-datatable-overright">

                <div id="toolbar">
                  <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">

                      <!-- <form action="excelupload.php" method="POST" enctype="multipart/form-data"> -->

                      <!-- <input type="file" name="import_file"><br> -->
                      <button type="button" class="btn btn-custon-four btn-primary btn-md" data-toggle="modal"
                        data-target="#ADD_STUDENT_EXCEL">Import File</button>
                      <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#ADD_STUDENT_MANUAL">
                        Add New
                      </button>
                      <!-- </form> -->

                    </h5>
                  </div>

                </div>

                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true"
                  data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true"
                  data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId"
                  data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                  <thead>
                    <tr>
                      <th>Student ID</th>
                      <th>Last Name</th>
                      <th>First Name</th>
                      <th>Middle Name</th>
                      <th>Address</th>
                      <th>Contact Number</th>
                      <th>Program</th>
                      <th>Level</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>

                    <?php
  // $connection = mysqli_connect('localhost', 'root', '', 'guidance_and_counseling');

  $query = "SELECT * FROM users WHERE position = 'student' || 'Student' ORDER BY last_name ASC";
  $query_run = mysqli_query($con, $query);

  if (mysqli_num_rows($query_run) > 0) {
    foreach ($query_run as $row) {
                      ?>

                    <tr>
                      <td>
                        <?= $row['id_number'] ?>
                      </td>
                      <td>
                        <?= $row['last_name'] ?>
                      </td>
                      <td>
                        <?= $row['first_name'] ?>
                      </td>
                      <td>
                        <?= $row['middle_name'] ?>
                      </td>
                      <td>
                        <?= $row['address'] ?>
                      </td>
                      <td>
                        <?= $row['contact'] ?>
                      </td>
                      <td>
                        <?= $row['program'] ?>
                      </td>
                      <td>
                        <?= $row['level'] ?>
                      </td>
                      <!-- <td>
                              <a href="gc___student_profile.php?id=<?= $row['user_id'] ?>">
                                <button type="button" class="btn btn-primary">View</button>
                            </a>
                            </td>
                            <td>
                              <a href="gc___student_profile.php?id=<?= $row['user_id'] ?>">
                                <button type="button" class="btn btn-success">Edit</button>
                            </a>
                            </td> -->

                      <td>
                        <div style="display: flex; justify-content: center;">

                          <!-- <a class="btn btn-primary" style="margin-left: 10px; color: white;" href="gc___student_profile.php?id=<?= $row['user_id'] ?>">View</a> -->

                          <!-- <a class="btn btn-danger" style="margin-left: 10px; margin-right: 20px; color: white;"
                                href="gc___student_profile.php?id=<?= $row['user_id'] ?>" >Edit</a> -->

                          <!-- <button id="showEditStudentModal" class="btn btn-warning" style="margin-left: 10px; margin-right: 20px; color: white;" data-toggle="modal" data-target="#studentModal" data-id="<?= $row['user_id'] ?>">Edit</button> -->

                          <a href="gc___student_profile.php?id=<?= $row['user_id'] ?>"><button title="View Profile"
                              class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button> </a>
                          <button title="Edit" class="pd-setting-ed" data-toggle="modal" data-target="#studentModal"
                            data-id="<?= $row['user_id'] ?>"><i class="fa fa-pencil-square-o"
                              aria-hidden="true"></i></button>

                          <!-- <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button> -->
                          <!-- <button title="View" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button> -->

                          <button title="Delete" class="pd-setting-ed" data-toggle="modal"
                            data-target="#studentModalDelete" data-id="<?= $row['user_id'] ?>"><i class="fa fa-trash-o"
                              aria-hidden="true"></i></button>

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

  <!-- MODAL FOR EDITING STUDENT INFORMATION -->
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div id="studentModal" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-color-modal bg-color-1">
            <h4 class="modal-title">Edit Student Information</h4>
            <div class="modal-close-area modal-close-df">
              <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
          </div>

          <form action="thecodestud.php" method="POST">
            <div class="modal-body">
              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Student ID</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" id="edit_stud_id" name="edit_stud_id" class="form-control"
                      placeholder="Enter Student ID" readonly />
                  </div>
                </div>
              </div>

              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">First Name</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" id="edit_first_name" name="edit_first_name" class="form-control"
                      placeholder="Enter First Name" required />
                  </div>
                </div>
              </div>

              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Middle Name</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" id="edit_middle_name" name="edit_middle_name" class="form-control"
                      placeholder="Enter Middle Name" required />
                  </div>
                </div>
              </div>

              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Last Name</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" id="edit_last_name" name="edit_last_name" class="form-control"
                      placeholder="Enter Last Name" required />
                  </div>
                </div>
              </div>

              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Address</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" id="edit_address" name="edit_address" class="form-control"
                      placeholder="Enter Address" required />
                  </div>
                </div>
              </div>

              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Contact No.</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" id="edit_contact" name="edit_contact" class="form-control"
                      placeholder="Enter Contact Number" required />
                  </div>
                </div>
              </div>


              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Program</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="form-select-list">
                      <select id="edit_select_program" class="form-control custom-select-value" name="edit_select_program">
                        <option disabled selected>Select Program</option>
                        <option value="BSIT">BSIT</option>
                        <option value="CCTECH">CCTECH</option>
                        <option value="MAWD">MAWD</option>
                        <option value="CUART">CUART</option>
                        <option value="HUMSS">HUMSS</option>
                        <option value="BSBA">BSBA</option>
                        <option value="BSBAOM">BSBAOM</option>
                        <option value="BSTM">BSTM</option>

                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Level</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="form-select-list">
                      <select id="edit_select_level" class="form-control custom-select-value" name="edit_select_level">
                        <option disabled selected>Select Level</option>
                        <option value="Grade 11">Grade 11</option>
                        <option value="Grade 12">Grade 12</option>
                        <option value="1st Year">1st Year</option>
                        <option value="2nd Year">2nd Year</option>
                        <option value="3rd Year">3rd Year</option>
                        <option value="4th Year">4th Year</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>



              <!----------------- input type as student for login validation --------------------->
              <input type="hidden" name="usertype" value="Student">

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
                <button type="submit" name="edit_student" class="btn btn-primary btn-md">Save</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>

  </div>



  <!-- MODAL FOR EDITING STUDENT INFORMATION -->
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div id="studentModalDelete" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-color-modal bg-color-1">
            <h4 class="modal-title">Are you sure you wanted to delete this student ?</h4>
            <div class="modal-close-area modal-close-df">
              <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
          </div>

          <form action="thecodestud.php" method="POST">
            <div class="modal-body">
              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Student ID</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" id="delete_stud_id" name="delete_stud_id" class="form-control"
                      placeholder="Enter Student ID" readonly />
                  </div>
                </div>
              </div>

              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">First Name</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" id="delete_first_name" name="delete_first_name" class="form-control"
                      placeholder="Enter First Name" readonly />
                  </div>
                </div>
              </div>

              <div class="form-group-inner">
                <div class="row"> 
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Middle Name</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" id="delete_middle_name" name="delete_middle_name" class="form-control"
                      placeholder="Enter Middle Name" readonly />
                  </div>
                </div>
              </div>

              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Last Name</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" id="delete_last_name" name="delete_last_name" class="form-control"
                      placeholder="Enter Last Name" readonly />
                  </div>
                </div>
              </div>

              <div class="form-group-inner">
                <div class="row">

                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="hidden" id="delete_address" name="delete_address" class="form-control"
                      placeholder="Enter Address" required />
                  </div>
                </div>
              </div>

              <div class="form-group-inner">
                <div class="row">

                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="hidden" id="delete_contact" name="delete_contact" class="form-control"
                      placeholder="Enter Contact Number" required />
                  </div>
                </div>
              </div>

              <!----------------- input type as student for login validation --------------------->
              <input type="hidden" name="usertype" value="Student">

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
                <button type="submit" name="delete_student" class="btn btn-primary btn-md">Confirm</button>
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
    $(document).on('show.bs.modal', '#studentModal', function (e) {
      var userID = $(e.relatedTarget).data('id');
      var userData;

      jQuery.ajax({
        type: "POST",
        url: 'get_specific_user.php',
        data: {
          userID: userID
        },

        success: function (response) {
          console.log(response);
          userData = jQuery.parseJSON(response)
          $('#edit_stud_id').val(userData[0].id_number);
          $('#edit_first_name').val(userData[0].first_name);
          $('#edit_middle_name').val(userData[0].middle_name);
          $('#edit_last_name').val(userData[0].last_name);
          $('#edit_address').val(userData[0].address);
          $('#edit_contact').val(userData[0].contact);
          $('#edit_select_program').val(userData[0].program);
          $('#edit_select_level').val(userData[0].level);
        }

      });
      // window.location.href = "get_specific_user.php?userID=" + userID; 
    });
  </script>

  <script>
    $(document).on('show.bs.modal', '#studentModalDelete', function (e) {
      var userID = $(e.relatedTarget).data('id');
      var userData;

      jQuery.ajax({
        type: "POST",
        url: 'get_specific_user.php',
        data: {
          userID: userID
        },

        success: function (response) {
          console.log(response);
          userData = jQuery.parseJSON(response)
          $('#delete_stud_id').val(userData[0].id_number);
          $('#delete_first_name').val(userData[0].first_name);
          $('#delete_middle_name').val(userData[0].middle_name);
          $('#delete_last_name').val(userData[0].last_name);
          $('#delete_address').val(userData[0].address);
          $('#delete_contact').val(userData[0].contact);
          $('#delete_select_program').val(userData[0].program);
          $('#delete_select_level').val(userData[0].level);
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