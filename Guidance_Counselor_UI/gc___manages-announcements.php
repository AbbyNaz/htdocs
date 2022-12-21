<?php

session_start();

include_once("../connections/connection.php");

if (!isset($_SESSION['UserEmail'])) {

  echo "<script>window.open('../loginForm.php','_self')</script>";
} else {

  $con = connection();

<<<<<<< HEAD
=======

  if (isset($_POST['add_article'])) {

    date_default_timezone_set('Asia/Manila');
    $dateon = strtotime(date("Y-m-d h:i:sa"));
    $articlecode = date('ymd-His') . "-" . intval("0" . rand(1, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9));
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $imagename = date('ymd-His') . "-" . intval("0" . rand(1, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9)) . "-";
    $duration = trim($_POST['duration']);
    $status = "Active";

    if (isset($_FILES['files'])) {
      $desired_dir = "../uploads/";

      $count = 0;

      foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['files']['name'][$key];
        $size = $_FILES['files']['size'][$key];
        $file_f = $size / 1024;
        $file_size = round($file_f);
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];
        $path = "../uploads/$file_name";
        $pathimage = "uploads/$file_name";

        $query = "INSERT INTO articles(ARTICLECODE, TITLE, DESCRIPTION, PICTURE, DURATION, ART_STATUS) VALUES('$articlecode','$title','$description','$pathimage','$duration','$status')";
        if (mysqli_query($con, $query)) {
          move_uploaded_file($file_tmp, "$desired_dir" . $file_name);

          $count = $count + 1;
        }

        $_SESSION['status'] = "Article Added";
        $_SESSION['status_code'] = "success";
        header('Location: gc___manages_acticle.php');
      }
    } else {
      $_SESSION['status'] = "Article Not Added";
      $_SESSION['status_code'] = "error";
      header('Location: gc___manages_acticle.php');
    }
  } elseif (isset($_POST['update_article'])) {

    $articlecode = trim($_POST['articlecode']);
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $duration = trim($_POST['duration']);
    $status = trim($_POST['art_status']);
    $picturepath = trim($_POST['picturepath']);
    $imagename = date('ymd-His') . "-" . intval("0" . rand(1, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9)) . "-";

  if (isset($_POST['add_article'])) {

    date_default_timezone_set('Asia/Manila');
    $dateon = strtotime(date("Y-m-d h:i:sa"));
    $articlecode = date('ymd-His') . "-" . intval("0" . rand(1, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9));
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $imagename = date('ymd-His') . "-" . intval("0" . rand(1, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9)) . "-";
    $duration = trim($_POST['duration']);
    $status = "Active";

    if (isset($_FILES['files'])) {
      $desired_dir = "../uploads/";

      $count = 0;

      foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['files']['name'][$key];
        $size = $_FILES['files']['size'][$key];
        $file_f = $size / 1024;
        $file_size = round($file_f);
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];
        $path = "../uploads/$file_name";
        $pathimage = "uploads/$file_name";

        $query = "INSERT INTO articles(ARTICLECODE, TITLE, DESCRIPTION, PICTURE, DURATION, ART_STATUS) VALUES('$articlecode','$title','$description','$pathimage','$duration','$status')";
        if (mysqli_query($con, $query)) {
          move_uploaded_file($file_tmp, "$desired_dir" . $file_name);

          $count = $count + 1;
        }

        $_SESSION['status'] = "Article Added";
        $_SESSION['status_code'] = "success";
        header('Location: gc___manages_acticle.php');
      }
    } else {
      $_SESSION['status'] = "Article Not Added";
      $_SESSION['status_code'] = "error";
      header('Location: gc___manages_acticle.php');
    }
  } elseif (isset($_POST['update_article'])) {

    $articlecode = trim($_POST['articlecode']);
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $duration = trim($_POST['duration']);
    $status = trim($_POST['art_status']);
    $picturepath = trim($_POST['picturepath']);
    $imagename = date('ymd-His') . "-" . intval("0" . rand(1, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9)) . "-";


    if (isset($_FILES['files'])) {
      $desired_dir = "../uploads/";

      $count = 0;

      foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['files']['name'][$key];
        $size = $_FILES['files']['size'][$key];
        $file_f = $size / 1024;
        $file_size = round($file_f);
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];
        $path = "../uploads/$file_name";
        $pathimage = "uploads/$file_name";

        if ($path == "../uploads/") {
          $query = "UPDATE articles SET TITLE = '$title', DESCRIPTION = '$description', DURATION = '$duration', ART_STATUS = '$status' WHERE ARTICLECODE ='$articlecode'";
          if (!mysqli_query($con, $query)) {
            die('Error:' . mysqli_error($conn));
          }
          $_SESSION['status'] = "Article Updated";
          $_SESSION['status_code'] = "success";
          header('Location: gc___manages_acticle.php');
        } else {
          $query = "UPDATE articles SET TITLE = '$title', DESCRIPTION = '$description', PICTURE = '$pathimage', DURATION = '$duration', ART_STATUS = '$status' WHERE ARTICLECODE ='$articlecode'";
          if (mysqli_query($con, $query)) {
            move_uploaded_file($file_tmp, "$desired_dir" . $file_name);

            $count = $count + 1;
          }
          unlink("../" . $picturepath);
          $_SESSION['status'] = "Article Updated";
          $_SESSION['status_code'] = "success";
          header('Location: gc___manages_acticle.php');
        }
      }
    }
  }


    if (isset($_FILES['files'])) {
      $desired_dir = "../uploads/";

      $count = 0;

      foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['files']['name'][$key];
        $size = $_FILES['files']['size'][$key];
        $file_f = $size / 1024;
        $file_size = round($file_f);
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];
        $path = "../uploads/$file_name";
        $pathimage = "uploads/$file_name";

        if ($path == "../uploads/") {
          $query = "UPDATE articles SET TITLE = '$title', DESCRIPTION = '$description', DURATION = '$duration', ART_STATUS = '$status' WHERE ARTICLECODE ='$articlecode'";
          if (!mysqli_query($con, $query)) {
            die('Error:' . mysqli_error($conn));
          }
          $_SESSION['status'] = "Article Updated";
          $_SESSION['status_code'] = "success";
          header('Location: gc___manages_acticle.php');
        } else {
          $query = "UPDATE articles SET TITLE = '$title', DESCRIPTION = '$description', PICTURE = '$pathimage', DURATION = '$duration', ART_STATUS = '$status' WHERE ARTICLECODE ='$articlecode'";
          if (mysqli_query($con, $query)) {
            move_uploaded_file($file_tmp, "$desired_dir" . $file_name);

            $count = $count + 1;
          }
          unlink("../" . $picturepath);
          $_SESSION['status'] = "Article Updated";
          $_SESSION['status_code'] = "success";
          header('Location: gc___manages_acticle.php');
        }
      }
    }
  }


>>>>>>> parent of 81c3dcd (backup and announcements)
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
  <?php include('includes/gc___mobile_menu.php') ?>

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
                  <li><span class="bread-blod">Announcements</span>
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
    <div id="Add_New_Article" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-color-modal bg-color-1">
            <h4 class="modal-title">Add New Announcement</h4>
            <div class="modal-close-area modal-close-df">
              <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
<<<<<<< HEAD
=======

            <form action="" method="post" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Title of Announcement</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" placeholder="Enter Title" name="title" />
                    </div>
                  </div>
                </div>

                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Description</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <textarea class="form-control" rows="5" name="description" style="margin-bottom: 10px;" maxlength="500" placeholder="Enter Article Description" required></textarea>
                    </div>
                  </div>
                </div>

                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right pull-right-pro">Duration</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <div class="form-select-list">
                        <select class="form-control custom-select-value" name="duration">
                          <option value="" disabled>Select Duration Month</option>
                          <option>January</option>
                          <option>February</option>
                          <option>March</option>
                          <option>April</option>
                          <option>May</option>
                          <option>June</option>
                          <option>July</option>
                          <option>August</option>
                          <option>September</option>
                          <option>October</option>
                          <option>November</option>
                          <option>December</option>
                        </select>
                      </div>
                    </div>
                  </div><br>

                  <div class="form-group-inner">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label class="login2 pull-right">Image</label>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <input type="file" name="files[]" class="form-control" accept="image/*" style="margin-bottom: 30px;" required />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
                <button type="submit" name="add_article" class="btn btn-primary btn-md">Save</button>
              </div>
            </form>

>>>>>>> parent of 81c3dcd (backup and announcements)
          </div>

          <form action="thecodeannouncement.php" method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Title of Announcement</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" class="form-control" placeholder="Enter Title" name="announcement_title"
                      required />
                  </div>
                </div>
              </div>

              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Description</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <textarea class="form-control" rows="5" name="announcement_description" style="margin-bottom: 10px;"
                      maxlength="500" placeholder="Enter Announcement Description" required></textarea>
                  </div>
                </div>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
              <button type="submit" name="add_announcement" class="btn btn-primary btn-md">Save</button>
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
                <h1>Announcements Table</h1>
              </div>
<<<<<<< HEAD
            </div>
            <div class="sparkline13-graph">
              <div class="datatable-dashv1-list custom-datatable-overright">
                <div id="toolbar">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Add_New_Article">
                    Add New
                  </button>
                </div>
                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true"
                  data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true"
                  data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId"
                  data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                  
                  <thead>
                    <tr>
                      <th data-field="title">Title</th>
                      <th data-field="description">Description</th>
                      <th data-field="status">Status</th>
                      <th data-field="action">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
=======
              <div class="sparkline13-graph">
                <div class="datatable-dashv1-list custom-datatable-overright">
                  <div id="toolbar">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Add_New_Article">
                      Add New
                    </button>
                  </div>
                  <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                    <thead>
                      <tr>
                        <th data-field="code">Announcements Code</th>
                        <th data-field="title">Title</th>
                        <th data-field="description">Description</th>
                        <th data-field="picture">Picture</th>
                        <th data-field="duration">Duration</th>
                        <th data-field="status">Status</th>
                        <th data-field="action">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
>>>>>>> parent of 81c3dcd (backup and announcements)

                        $query = "SELECT * FROM announcements";
                        $query_run = mysqli_query($con, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                          foreach ($query_run as $row) {
                      ?>

                    <td><?= $row['TITLE'] ?></td>
                    <td><?= $row['DESCRIPTION'] ?></td>
                    <td><?= $row['ANN_STATUS'] ?></td>

<<<<<<< HEAD
                    <td>
                      <div style="display: flex; justify-content: center;">
=======
                            <td>
                              <div style="display: flex; justify-content: center;">

                                <!-- <button id="showEditStaffModal" class="btn btn-warning" style="margin-left: 10px; margin-right: 20px; color: white;" data-toggle="modal" data-target="#Edit_New_Article" data-id="<?= $row['ID'] ?>">Edit</button> -->
                                
                                <button title="Edit" class="pd-setting-ed" data-toggle="modal" data-target="#Edit_New_Article" data-id="<?= $row['ID'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                          
                                <button title="Delete" class="pd-setting-ed" data-toggle="modal" data-target="#" data-id="<?= $row['ID'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
>>>>>>> parent of 81c3dcd (backup and announcements)

                        <button title="Edit" class="pd-setting-ed" data-toggle="modal" data-target="#Edit_Announcement" data-id="<?= $row['ID'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>

                        <button title="Delete" class="pd-setting-ed" data-toggle="modal" data-target="#Delete_Announcement" data-id="<?= $row['ID'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></button>

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

  </div>

  <!------------------------------------------ THIS IS FOR THE EDIT ANNOUNCEMENT ------------------------------------------>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div id="Edit_Announcement" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-color-modal bg-color-1">
            <h4 class="modal-title">Edit Announcement</h4>
            <div class="modal-close-area modal-close-df">
              <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
          </div>

<<<<<<< HEAD
          <form action="thecodeannouncement.php" method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Title of Announcement</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" class="form-control" placeholder="Enter Title" name="edit_title"
                      id="edit_title" />
                  </div>
                </div>
=======
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div id="Edit_New_Article" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-1">
              <h4 class="modal-title">Edit Article</h4>
              <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
>>>>>>> parent of 81c3dcd (backup and announcements)
              </div>

              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Description</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <textarea class="form-control" rows="5" name="edit_description" style="margin-bottom: 10px;"
                      maxlength="500" placeholder="Enter Article Description" id="edit_description" required></textarea>
                  </div>
                </div>
              </div>

              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right pull-right-pro">Status</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="form-select-list">
                      <select class="form-control custom-select-value" name="edit_status" id="edit_announcementstatus">
                        <option value="" disabled>Select Status</option>
                        <option>Active</option>
                        <option>Deactive</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

            </div>

<<<<<<< HEAD
            <div class="modal-footer">
              <input type="hidden" name="announcementcode" id="announcementcode">
              <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
              <button type="submit" name="update_announcement" class="btn btn-primary btn-md">Update</button>
            </div>
          </form>

=======
            <form action="" method="post" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Title of Article</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" placeholder="Enter Title" name="title" id="title" />
                    </div>
                  </div>
                </div>

                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Description</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <textarea class="form-control" rows="5" name="description" style="margin-bottom: 10px;" maxlength="500" placeholder="Enter Article Description" id="description" required></textarea>
                    </div>
                  </div>
                </div>

                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Image</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <input type="file" name="files[]" class="form-control" accept="image/*" style="margin-bottom: 10px;" />
                    </div>
                  </div>
                </div>

                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right pull-right-pro">Duration</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <div class="form-select-list">
                        <select class="form-control custom-select-value" name="duration" id="duration">
                          <option value="" disabled>Select Duration Month</option>
                          <option>January</option>
                          <option>February</option>
                          <option>March</option>
                          <option>April</option>
                          <option>May</option>
                          <option>June</option>
                          <option>July</option>
                          <option>August</option>
                          <option>September</option>
                          <option>October</option>
                          <option>November</option>
                          <option>December</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right pull-right-pro">Status</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <div class="form-select-list">
                        <select class="form-control custom-select-value" name="status" id="articlestatus">
                          <option value="" disabled>Select Status</option>
                          <option>Active</option>
                          <option>Deactive</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="modal-footer">
                <input type="hidden" name="articlecode" id="articlecode">
                <input type="hidden" name="picturepath" id="picturepath">
                <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
                <button type="submit" name="update_article" class="btn btn-primary btn-md">Update</button>
              </div>
            </form>

          </div>
>>>>>>> parent of 81c3dcd (backup and announcements)
        </div>
      </div>
    </div>
  </div>





  <!------------------------------------------ THIS IS FOR THE DELETE ANNOUNCEMENT ------------------------------------------>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div id="Delete_Announcement" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-color-modal bg-color-1">
            <h4 class="modal-title">Are you sure you wanted to delete this announcement?</h4>
            <div class="modal-close-area modal-close-df">
              <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
          </div>

          <form action="thecodeannouncement.php" method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Title of Announcement</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" class="form-control" placeholder="Enter Title" name="delete_title" id="delete_title" />
                  </div>
                </div>
              </div>

              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Description</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <textarea class="form-control" rows="5" name="delete_description" style="margin-bottom: 10px;" maxlength="500" placeholder="Enter Article Description" id="delete_description" required></textarea>
                  </div>
                </div>
              </div>

              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right pull-right-pro">Status</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="form-select-list">
                      <select class="form-control custom-select-value" name="delete_status"
                        id="delete_announcementstatus">
                        <option value="" disabled>Select Status</option>
                        <option>Active</option>
                        <option>Deactive</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal-footer">
              <input type="hidden" name="announcementcode" id="announcementcode">
              <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
              <button type="submit" name="delete_announcement" class="btn btn-primary btn-md">Delete</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>


  <?php
  include('includes/gc___scripts.php');
    ?>

<<<<<<< HEAD
  <script>
    $(document).on('show.bs.modal', '#Edit_Announcement', function (e) {
      var userID = $(e.relatedTarget).data('id');
      var userData;
=======
    <script>
      $(document).on('show.bs.modal', '#Edit_New_Article', function(e) {
        var userID = $(e.relatedTarget).data('id');
        var userData;
>>>>>>> parent of 81c3dcd (backup and announcements)

      jQuery.ajax({
        type: "POST",
        url: 'get_specific_announcement.php',
        data: {
          userID: userID,
        },

<<<<<<< HEAD
        success: function (response) {
          console.log(response);
          userData = jQuery.parseJSON(response)
          // $('#announcementcode').val(userData[0].articlecode);
          $('#edit_title').val(userData[0].title);
          $('#edit_description').val(userData[0].description);
          // $('#duration').val(userData[0].duration);
          $('#edit_announcementstatus').val(userData[0].status);
        }

=======
          success: function(response) {
            console.log(response);
            userData = jQuery.parseJSON(response)
            $('#articlecode').val(userData[0].articlecode);
            $('#title').val(userData[0].title);
            $('#description').val(userData[0].description);
            $('#picturepath').val(userData[0].picture);
            $('#duration').val(userData[0].duration);
            $('#articlestatus').val(userData[0].status);
          } 

        });
        // window.location.href = "get_specific_user.php?userID=" + userID; 
<<<<<<< HEAD
>>>>>>> parent of 81c3dcd (backup and announcements)
=======
>>>>>>> parent of 81c3dcd (backup and announcements)
      });
    });
  </script>

  <script>
    $(document).on('show.bs.modal', '#Delete_Announcement', function (e) {
      var userID = $(e.relatedTarget).data('id');
      var userData;

      jQuery.ajax({
        type: "POST",
        url: 'get_specific_announcement.php',
        data: {
          userID: userID,
        },

        success: function (response) {
          console.log(response);
          userData = jQuery.parseJSON(response)
          // $('#announcementcode').val(userData[0].articlecode);
          $('#delete_title').val(userData[0].title);
          $('#delete_description').val(userData[0].description);
          // $('#duration').val(userData[0].duration);
          $('#delete_announcementstatus').val(userData[0].status);
        }

      });
    });
  </script>

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