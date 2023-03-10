<?php
session_start();

include_once("../connections/connection.php");

if (!isset($_SESSION['UserEmail'])) {

  echo "<script>window.open('../loginForm.php','_self')</script>";
} else {

  $con = connection();

  $monthnum = $_GET['month'];

  switch ($monthnum) {
    case 1:
      $month = 'January';
      break;
    case 2:
      $month = 'February';
      break;
    case 3:
      $month = 'March';
      break;
    case 4:
      $month = 'April';
      break;
    case 5:
      $month = 'May';
      break;
    case 6:
      $month = 'June';
      break;
    case 7:
      $month = 'July';
      break;
    case 8:
      $month = 'August';
      break;
    case 9:
      $month = 'September';
      break;
    case 10:
      $month = 'October';
      break;
    case 11:
      $month = 'November';
      break;
    case 12:
      $month = 'December';
      break;
    default:
      $month = 'January';
      break;
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
                    
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <ul class="breadcome-menu">
                    <li><a href="gc___dashboard.php">Home</a> <span class="bread-slash">/</span>
                    </li>
                    <li><span class="bread-blod">Offense Data Reports</span>
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

    <!----------------------------------------- view all data for specific referral---------------------------------------------->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div id="SPEC_OFFENSE" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-1">
              <h4 id="header" class="modal-title"> Offense Info of (NAME NG STUDENT) </h4>
              <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
              </div>
            </div>

            <form action="#" method="POST">
              <div class="modal-body">

                <div class="form-group-inner">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label class="login2 pull-right">Student ID</label>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <input id="id_number" type="text" class="form-control" readonly />
                      </div>
                    </div>
                </div>

                <div class="form-group-inner">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label class="login2 pull-right">Student Name</label>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <input id="name" type="text" class="form-control" readonly />
                      </div>
                    </div>
                </div>

                <div class="form-group-inner">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label class="login2 pull-right">Offense Type</label>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <input id="offense_type" type="text" class="form-control" readonly />
                      </div>
                    </div>
                </div>

                <div class="form-group-inner">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label class="login2 pull-right">Description</label>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <input id="description" type="text" class="form-control" readonly />
                      </div>
                    </div>
                </div>

                <div class="form-group-inner">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label class="login2 pull-right">Sanction</label>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <input id="sanction" type="text" class="form-control" readonly />
                      </div>
                    </div>
                </div>

                <div class="form-group-inner">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label class="login2 pull-right">Start Date</label>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <input id="start_date" type="text" class="form-control" readonly />
                      </div>
                    </div>
                </div>

                <div class="form-group-inner">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label class="login2 pull-right">End Date</label>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <input id="end_date" type="text" class="form-control" readonly />
                      </div>
                    </div>
                </div>

              </div>

              <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
                <button type="submit" name="add_staff_data" class="btn btn-primary btn-md">Upload</button>

              </div> -->
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
                  <h1>Offense Reports /<span class="table-project-n"> </span> Month of <?= $month ?></h1>
                </div>
              </div>
              <div class="sparkline13-graph">

                <div class="datatable-dashv1-list custom-datatable-overright">

                  <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                    <thead>
                      <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Level and Program</th>
                        <!-- <th>Level</th> -->
                        <th>Type</th>
                        <th>Classification</th>
                        <th>Date and Time</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                        $query = "SELECT o.id, o.date_created, o.offense_type, o.description, u.id_number, u.first_name, u.last_name, u.program, u.level FROM offense_monitoring o JOIN users u ON o.student_id = u.id_number WHERE Month(date_created) = $monthnum ORDER BY date_created DESC";

                        $result = mysqli_query($con, $query);
              
                        while ($Offense = mysqli_fetch_assoc($result)) {
                      
                      ?>

                          <tr data-id="<?= $Offense['id'] ?>" data-studid="<?= $Offense['id_number'] ?>" >
                            <td><?= $Offense['id_number'] ?></td>
                            <td><?= $Offense['first_name']." ".$Offense['last_name'] ?></td>
                            <!-- <td><?= $Offense['program'] ?></td> -->
                            <td><?= $Offense['level']." - ".$Offense['program']?></td>
                            <td><?= $Offense['offense_type'] ?></td>
                            <td><?= $Offense['description'] ?></td>
                            <td><?= $Offense['date_created'] ?></td>
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

    <script>

    $(document).ready(function() {
      $('#table tr').click(function() {
        var studid = $(this).data('studid');
        var id = $(this).data('id');

        if(id == undefined || studid == undefined) return;

        $.ajax({
          url: 'get_offense_full_details.php',
          data: {id: id
                },
          success: function(data) {
            var dt = JSON.parse(data);
            
            var id_number = dt.id_number;
            var name = dt.first_name + " "+dt.last_name;
            var offense_type = dt.offense_type;
            var description = dt.description;
            var sanction = dt.sanction;
            var start_date = dt.start_date;
            var end_date = dt.end_date;

            $('#id_number').val(id_number);
            $('#name').val(name);
            $('#offense_type').val(offense_type);
            $('#description').val(description);
            $('#sanction').val(sanction);
            $('#start_date').val(start_date);
            $('#end_date').val(end_date);

            $('#header').text('Offense Info of '+name);

            $('#SPEC_OFFENSE').modal('show');

          }
        });
      });
    });
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