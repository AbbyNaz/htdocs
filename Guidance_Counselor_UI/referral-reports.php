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
  <!-- forms CSS
		============================================ -->
  <link rel="stylesheet" href="css/form/all-type-forms.css">
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

     <!----------------------------------------- view all data for specific referral---------------------------------------------->
     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div id="SPEC_REFERRAL" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-1">
              <h4 id="header" class="modal-title"> Referral Info of </h4>
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
                        <label class="login2 pull-right">Referral Source</label>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <input id="source" type="text" class="form-control" readonly />
                      </div>
                    </div>
                </div>

                <div class="form-group-inner">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label class="login2 pull-right">Referred By</label>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <input id="referred_by" type="text" class="form-control" readonly />
                      </div>
                    </div>
                </div>

                <div class="form-group-inner">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label class="login2 pull-right">Nature</label>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <input id="nature" type="text" class="form-control" readonly />
                      </div>
                    </div>
                </div>

                <div class="form-group-inner">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label class="login2 pull-right">Reason of Referral</label>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <input id="reason" type="text" class="form-control" readonly />
                      </div>
                    </div>
                </div>

                
                <div class="form-group-inner">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label class="login2 pull-right">Actions Taken before Referral</label>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <input id="actions" type="text" class="form-control" readonly />
                      </div>
                    </div>
                </div>

                <div class="form-group-inner">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label class="login2 pull-right">Remarks</label>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <input id="remarks" type="text" class="form-control" readonly />
                      </div>
                    </div>
                </div>

                <div class="form-group-inner">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label class="login2 pull-right">Date and Time</label>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <input id="date" type="text" class="form-control" readonly />
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

  <!-- Mobile Menu end -->
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
                  <li><a href="gc___dashboard.php">Home</a> <span class="bread-slash">/</span>
                  </li>
                  <li><a href="gc___all-reports.php">Semestral Reports</a> <span class="bread-slash">/</span>
                  </li>
                  <li><span class="bread-blod">Referral Reports</span>
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
  <!-- Single pro tab review Start-->
  <div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="product-payment-inner-st">
            <div class="main-sparkline13-hd">
              <h1>Referral <span class="table-project-n"> Reports</span> </h1>
            </div> <br>
            <ul id="myTabedu1" class="tab-review-design">
              <li class="active"><a href="#Referral_Sept">September</a></li>
              <li><a href="#Referral_Oct">October</a></li>
              <li><a href="#Referral_Nov">November</a></li>
              <li><a href="#Referral_Dec">December</a></li>
              <li><a href="#Referral_Jan">January</a></li>

            </ul>
            <div id="myTabContent" class="tab-content custom-product-edit">
              <div class="product-tab-list tab-pane fade active in" id="Referral_Sept">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-content-section">
                      <div class="data-table-area mg-b-15">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="sparkline13-list">
                                <div class="sparkline13-graph">
                                  <div class="datatable-dashv1-list custom-datatable-overright">
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true"
                                        data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true"
                                        data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId"
                                        data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                            <th>Student ID</th>
                                            <th>Student Name</th>
                                            <th>Program</th>
                                            <th>Level</th>
                                            <th>Date and Time</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                          <?php 
                                            $query = "SELECT r.*, u.id_number, u.first_name, u.last_name, u.program, u.level FROM refferals r JOIN users u ON r.reffered_user = u.user_id WHERE Month(reffered_date) = 9 ORDER BY reffered_date DESC";

                                            // Execute the query and retrieve the results
                                            $result = mysqli_query($con, $query);
              
                                            while ($Referrals = mysqli_fetch_assoc($result)) {
                                              
                                            
                                            
                                          ?>
                                            <tr data-id="<?= $Referrals['ref_id'] ?>" data-studid="<?= $Referrals['id_number'] ?>" >
                                              <td><?= $Referrals['id_number'] ?></td>
                                              <td><?= $Referrals['first_name']." ".$Referrals['last_name'] ?></td>
                                              <td><?= $Referrals['program'] ?></td>
                                              <td><?= $Referrals['level'] ?></td>
                                              <td><?= $Referrals['reffered_date'] ?></td>
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
                    </div>
                  </div>
                </div>
            </div>
              <div class="product-tab-list tab-pane fade" id="Referral_Oct">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-content-section">
                      <div class="data-table-area mg-b-15">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="sparkline13-list">
                                <div class="sparkline13-graph">
                                  <div class="datatable-dashv1-list custom-datatable-overright">
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true"
                                        data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true"
                                        data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId"
                                        data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                            <th>Student ID</th>
                                            <th>Student Name</th>
                                            <th>Program</th>
                                            <th>Level</th>
                                            <th>Date and Time</th><!--DITO KUNG KELAN FINILLUPAN  YUNG INDIVIDUAL INVENTORY FORM -->
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php 
                                            $query = "SELECT r.*, u.id_number, u.first_name, u.last_name, u.program, u.level FROM refferals r JOIN users u ON r.reffered_user = u.user_id WHERE Month(reffered_date) = 10 ORDER BY reffered_date DESC";

                                            // Execute the query and retrieve the results
                                            $result = mysqli_query($con, $query);
              
                                            while ($Referrals = mysqli_fetch_assoc($result)) {
                                              
                                            
                                            
                                          ?>
                                            <tr data-id="<?= $Referrals['ref_id'] ?>" data-studid="<?= $Referrals['id_number'] ?>" >
                                              <td><?= $Referrals['id_number'] ?></td>
                                              <td><?= $Referrals['first_name']." ".$Referrals['last_name'] ?></td>
                                              <td><?= $Referrals['program'] ?></td>
                                              <td><?= $Referrals['level'] ?></td>
                                              <td><?= $Referrals['reffered_date'] ?></td>
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
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-tab-list tab-pane fade" id="Referral_Nov">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-content-section">
                      <div class="data-table-area mg-b-15">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="sparkline13-list">
                                <div class="sparkline13-graph">
                                  <div class="datatable-dashv1-list custom-datatable-overright">
                                  <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true"
                                        data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true"
                                        data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId"
                                        data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                            <th>Student ID</th>
                                            <th>Student Name</th>
                                            <th>Program</th>
                                            <th>Level</th>
                                            <th>Date and Time</th><!--DITO KUNG KELAN FINILLUPAN  YUNG INDIVIDUAL INVENTORY FORM -->
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php 
                                            $query = "SELECT r.*, u.id_number, u.first_name, u.last_name, u.program, u.level FROM refferals r JOIN users u ON r.reffered_user = u.user_id WHERE Month(reffered_date) = 11 ORDER BY reffered_date DESC";

                                            // Execute the query and retrieve the results
                                            $result = mysqli_query($con, $query);
              
                                            while ($Referrals = mysqli_fetch_assoc($result)) {
                                              
                                            
                                            
                                          ?>
                                            <tr data-id="<?= $Referrals['ref_id'] ?>" data-studid="<?= $Referrals['id_number'] ?>" >
                                              <td><?= $Referrals['id_number'] ?></td>
                                              <td><?= $Referrals['first_name']." ".$Referrals['last_name'] ?></td>
                                              <td><?= $Referrals['program'] ?></td>
                                              <td><?= $Referrals['level'] ?></td>
                                              <td><?= $Referrals['reffered_date'] ?></td>
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
                    </div>
                  </div>
                </div>
              </div>

              <div class="product-tab-list tab-pane fade" id="Referral_Dec">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-content-section">
                      <div class="data-table-area mg-b-15">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="sparkline13-list">
                                <div class="sparkline13-graph">
                                  <div class="datatable-dashv1-list custom-datatable-overright">
                                  <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true"
                                        data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true"
                                        data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId"
                                        data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                            <th>Student ID</th>
                                            <th>Student Name</th>
                                            <th>Program</th>
                                            <th>Level</th>
                                            <th>Date and Time</th><!--DITO KUNG KELAN FINILLUPAN  YUNG INDIVIDUAL INVENTORY FORM -->
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php 
                                            $query = "SELECT r.*, u.id_number, u.first_name, u.last_name, u.program, u.level FROM refferals r JOIN users u ON r.reffered_user = u.user_id WHERE Month(reffered_date) = 12 ORDER BY reffered_date DESC";

                                            // Execute the query and retrieve the results
                                            $result = mysqli_query($con, $query);
              
                                            while ($Referrals = mysqli_fetch_assoc($result)) {
                                              
                                            
                                            
                                          ?>
                                            <tr data-id="<?= $Referrals['ref_id'] ?>" data-studid="<?= $Referrals['id_number'] ?>" >
                                              <td><?= $Referrals['id_number'] ?></td>
                                              <td><?= $Referrals['first_name']." ".$Referrals['last_name'] ?></td>
                                              <td><?= $Referrals['program'] ?></td>
                                              <td><?= $Referrals['level'] ?></td>
                                              <td><?= $Referrals['reffered_date'] ?></td>
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
                    </div>
                  </div>
                </div>
              </div>

              <div class="product-tab-list tab-pane fade" id="Referral_Jan">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-content-section">
                      <div class="data-table-area mg-b-15">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="sparkline13-list">
                                <div class="sparkline13-graph">
                                  <div class="datatable-dashv1-list custom-datatable-overright">
                                  <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true"
                                        data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true"
                                        data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId"
                                        data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                            <th>Student ID</th>
                                            <th>Student Name</th>
                                            <th>Program</th>
                                            <th>Level</th>
                                            <th>Date and Time</th><!--DITO KUNG KELAN FINILLUPAN  YUNG INDIVIDUAL INVENTORY FORM -->
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php 
                                            $query = "SELECT r.*, u.id_number, u.first_name, u.last_name, u.program, u.level FROM refferals r JOIN users u ON r.reffered_user = u.user_id WHERE Month(reffered_date) = 1 ORDER BY reffered_date DESC";

                                            // Execute the query and retrieve the results
                                            $result = mysqli_query($con, $query);
              
                                            while ($Referrals = mysqli_fetch_assoc($result)) {
                                              
                                            
                                            
                                          ?>
                                            <tr data-id="<?= $Referrals['ref_id'] ?>" data-studid="<?= $Referrals['id_number'] ?>" >
                                              <td><?= $Referrals['id_number'] ?></td>
                                              <td><?= $Referrals['first_name']." ".$Referrals['last_name'] ?></td>
                                              <td><?= $Referrals['program'] ?></td>
                                              <td><?= $Referrals['level'] ?></td>
                                              <td><?= $Referrals['reffered_date'] ?></td>
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
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Static Table End -->

  </div>

  <script>
      $(document).ready(function() {
        $('#table tr').click(function() {
          var studid = $(this).data('studid');
          var id = $(this).data('id');

          if(id == undefined || studid == undefined) return;

          $.ajax({
            url: 'get_referral_full_datails.php',
            data: {id: id,
                  studid: studid
                  },
            success: function(data) {
              var dt = JSON.parse(data);

              var id_number = dt.id_number;
              var name = dt.first_name + " "+dt.last_name;
              var source = dt.source;
              var referred_by = dt.reffered_by;
              var nature = dt.nature;
              var reason = dt.reason;
              var actions = dt.actions;
              var remarks = dt.remarks;
              var date = dt.reffered_date;
              
              $('#id_number').val(id_number);
              $('#name').val(name);
              $('#source').val(source);
              $('#referred_by').val(referred_by);
              $('#nature').val(nature);
              $('#reason').val(reason);
              $('#actions').val(actions);
              $('#remarks').val(remarks);
              $('#date').val(date);

              $('#header').text("Referral Info of "+name);

              $('#SPEC_REFERRAL').modal('show');
            }
          });
        });
      });
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
  <!-- icheck JS
		============================================ -->
  <script src="js/icheck/icheck.min.js"></script>
  <script src="js/icheck/icheck-active.js"></script>
  <!-- plugins JS
		============================================ -->
  <script src="js/plugins.js"></script>
  <!-- main JS
		============================================ -->
  <script src="js/main.js"></script>
  <!-- tawk chat JS
		============================================ -->
  <!-- <script src="js/tawk-chat.js"></script> -->
</body>

</html>

<?php } ?>