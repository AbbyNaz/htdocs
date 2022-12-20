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
            </div>

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
                          <option value="" disabled>Select Duration</option>
                          <option>1 weeks</option>
                          <option>2 weeks</option>
                          <option>3 weeks</option>
                          <option>4 weeks</option>
                        </select>
                      </div>
                    </div>
                  </div><br>

                 
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
              </div>
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
                        <th data-field="duration">Duration</th>
                        <th data-field="status">Status</th>
                        <th data-field="action">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      $query = "SELECT * FROM announcements";
                      $query_run = mysqli_query($con, $query);

                      if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $row) {
                      ?>

                          <tr id="<?php echo $row['ANNOUNCEMENT_CODE']; ?>">
                            <td><?= $row['ANNOUNCEMENT_CODE'] ?></td>
                            <td><?= $row['TITLE'] ?></td>
                            <td><?= $row['DESCRIPTION'] ?></td>
                            <td><?= $row['PICTURE'] ?></td>
                            <td><?= $row['DURATION'] ?></td>
                            <td><?= $row['ANN_STATUS'] ?></td>

                            <td>
                              <div style="display: flex; justify-content: center;">
                                
                                <button title="Edit" class="pd-setting-ed" data-toggle="modal" data-target="#Edit_New_Article" data-id="<?= $row['ID'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                          
                                <button title="Delete" class="pd-setting-ed" data-toggle="modal" data-target="#" data-id="<?= $row['ID'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></button>

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

            <form action="" method="post" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right">Title of Announcement</label>
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

                <!-- <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <label class="login2 pull-right pull-right-pro">Duration</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <div class="form-select-list">
                        <select class="form-control custom-select-value" name="duration" id="duration">
                          <option value="" disabled>Select Duration</option>
                          <option>1 week</option>
                          <option>2 weeks</option>
                          <option>3 weeks</option>
                          <option>4 weeks</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div> -->

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
                <input type="hidden" name="announcementcode" id="announcementcode">
                <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
                <button type="submit" name="update_announcement" class="btn btn-primary btn-md">Update</button>
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
      $(document).on('show.bs.modal', '#Edit_Announcement', function(e) {
        var userID = $(e.relatedTarget).data('id');
        var userData;

        jQuery.ajax({
          type: "POST",
          url: 'get_specific_article.php',
          data: {
            userID: userID,
          },

          success: function(response) {
            console.log(response);
            userData = jQuery.parseJSON(response)
            $('#announcementcode').val(userData[0].articlecode);
            $('#title').val(userData[0].title);
            $('#description').val(userData[0].description);
            // $('#duration').val(userData[0].duration);
            $('#announcementstatus').val(userData[0].status);
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