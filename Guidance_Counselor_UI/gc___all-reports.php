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
    <style>
      input[type="radio"] {
        margin-left: 10px 0;
      }

      td,
      tr,
      th {
        border: solid;
        margin-right: auto;
        border-style: 1px;
        text-align: center;
      }
      td{
        
        text-align: center;
        vertical-align: middle;
      }
      
    </style>
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
                    <li><a href="gc___dashboard.php">Home</a> <span class="bread-slash">/</span>
                    </li>
                    <li><span class="bread-blod">Semestral Reports</span>
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
                  <h1>Semestral<span class="table-project-n"> Reports</span> </h1>
                </div>

              </div>
              <div class="sparkline13-graph">
                <div class="datatable-dashv1-list custom-datatable-overright">
                  <div id="toolbar">
                    <div class="card-header py-3">
                      <h5 class="m-0 font-weight-bold text-primary">

                      </h5>
                    </div>
                  </div>
                  <table id="table" data-toggle="table" data-search="true" data-show-columns="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                    <thead>
                      <tr>
                        <th data-field="appoint_stud_name">Types of Service</th> 
                        <th data-field="appoint_reason">SEP</th>
                        <th data-field="appoint_ref_reason">OCT</th>
                        <th data-field="appoint_concern">NOV</th>
                        <th data-field="appoint_dates">DEC</th>
                        <th data-field="appoint_datea">JAN</th>
                        <!-- <th data-field="appoint_date">FEB</th>
                        <th></th> --> 

                      </tr>
                    </thead>
                    <tbody>
                  
                      <tr>
                        
                        <td><a href="counseling-reports.php">Counseling</a></td>
                      </tr>

                      <?php
                            $row2 = array();

                            for ($b=1; $b <= 13; $b++) { 
                              $query2 = "SELECT COUNT(nature2) AS row_count FROM refferals_nature WHERE MONTH(reffered_date2) = $b AND nature2 = 'Academics'";

                              // Execute the query and retrieve the results
                              $result2 = mysqli_query($con, $query2);

                              // Fetch the first row of the result set as an associative array
                              $row2[] = mysqli_fetch_assoc($result2);
                            }
                        
                            ?>
                      <tr>
                        <td>
                          <li>Academic</li>
                        </td>
                        <td><a href="specific_report_counseling.php"><?= $row2[8]['row_count']?></a></td>
                        <td><a href="specific_report_counseling.php"><?= $row2[9]['row_count']?></a></td>
                        <td><a href="specific_report_counseling.php"><?= $row2[10]['row_count']?></a></td>
                        <td><a href="specific_report_counseling.php"><?= $row2[11]['row_count']?></a></td>
                        <td><a href="specific_report_counseling.php"><?= $row2[0]['row_count']?></a></td>
                        <!-- <td></td> -->
                      </tr>


                      <tr>
                      <?php
                            $row3 = array();

                            for ($c=1; $c <= 13; $c++) { 
                              $query3 = "SELECT COUNT(nature2) AS row_count FROM refferals_nature WHERE MONTH(reffered_date2) = $c AND nature2 = 'Career'";

                              // Execute the query and retrieve the results
                              $result3 = mysqli_query($con, $query3);

                              // Fetch the first row of the result set as an associative array
                              $row3[] = mysqli_fetch_assoc($result3);
                            }
                        
                            ?>
                        <td>
                          <li>Career</li>
                        </td>
                        <td><a href="specific_report_counseling.php"><?= $row3[8]['row_count']?></a></td>
                        <td><a href="specific_report_counseling.php"><?= $row3[9]['row_count']?></a></td>
                        <td><a href="specific_report_counseling.php"><?= $row3[10]['row_count']?></a></td>
                        <td><a href="specific_report_counseling.php"><?= $row3[11]['row_count']?></a></td>
                        <td><a href="specific_report_counseling.php"><?= $row3[0]['row_count']?></a></td>
                        <!-- <td></td> -->
                      </tr>

                      <tr>

                      <?php
                            $row4 = array();

                            for ($d=1; $d <= 13; $d++) { 
                              $query4 = "SELECT COUNT(nature2) AS row_count FROM refferals_nature WHERE MONTH(reffered_date2) = $d AND nature2 = 'Personal'";

                              // Execute the query and retrieve the results
                              $result4 = mysqli_query($con, $query4);

                              // Fetch the first row of the result set as an associative array
                              $row4[] = mysqli_fetch_assoc($result4);
                            }
                        
                            ?>
                        <td>
                          <li>Personal</li>
                        </td>
                        <td><a href="specific_report_counseling.php"><?= $row4[8]['row_count']?></a></td>
                        <td><a href="specific_report_counseling.php"><?= $row4[9]['row_count']?></a></td>
                        <td><a href="specific_report_counseling.php"><?= $row4[10]['row_count']?></a></td>
                        <td><a href="specific_report_counseling.php"><?= $row4[11]['row_count']?></a></td>
                        <td><a href="specific_report_counseling.php"><?= $row4[0]['row_count']?></a></td>
                        <!-- <td></td> -->

                      </tr>

                      <tr>
                        
                      <?php
                            $row5 = array();

                            for ($e=1; $e <= 13; $e++) { 
                              $query5 = "SELECT COUNT(nature2) AS row_count FROM refferals_nature WHERE MONTH(reffered_date2) = $e AND nature2 = 'Crisis'";

                              // Execute the query and retrieve the results
                              $result5 = mysqli_query($con, $query5);

                              // Fetch the first row of the result set as an associative array
                              $row5[] = mysqli_fetch_assoc($result5);
                            }
                        
                            ?>
                        <td>
                          <li>Psychological First Aid / Crisis Intervention</li>
                        </td>
                        <td><a href="specific_report_counseling.php"><?= $row5[8]['row_count']?></a></td>
                        <td><a href="specific_report_counseling.php"><?= $row5[9]['row_count']?></a></td>
                        <td><a href="specific_report_counseling.php"><?= $row5[10]['row_count']?></a></td>
                        <td><a href="specific_report_counseling.php"><?= $row5[11]['row_count']?></a></td>
                        <td><a href="specific_report_counseling.php"><?= $row5[0]['row_count']?></a></td>
                        <!-- <td></td> -->

                      </tr>

                      <?php
                            $row1 = array();

                            for ($a=1; $a <= 13; $a++) { 
                              $query1 = "SELECT COUNT(DATE_INCREATED) AS row_count FROM inventory WHERE MONTH(DATE_INCREATED) = $a";

                              // Execute the query and retrieve the results
                              $result1 = mysqli_query($con, $query1);

                              // Fetch the first row of the result set as an associative array
                              $row1[] = mysqli_fetch_assoc($result1);
                            }
                        
                            ?>
                      <tr>
                        <td><a href="individual-inventory-reports.php">Individual Inventory</a></td>
                      </tr>
                      <tr>
                        <td>
                          <li>Cumulative Record</li>
                        </td>
                        <td><a href="specific_report_individual.php"><?= $row1[8]['row_count']?></a></td>
                        <td><a href="specific_report_individual.php"><?= $row1[9]['row_count']?></a></td>
                        <td><a href="specific_report_individual.php"><?= $row1[10]['row_count']?></a></td>
                        <td><a href="specific_report_individual.php"><?= $row1[11]['row_count']?></a></td>
                        <td><a href="specific_report_individual.php"><?= $row1[0]['row_count']?></a></td>
                        <!-- <td><?= $row1[1]['row_count']?></td> -->
                        <!-- <td></td> -->


                      </tr>
                      <!-- <tr>
                        <td>
                          <li>Test Results</li>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr> -->
<!-- 
                      <tr>
                        <td>Information</td>
                      </tr>
                      <tr>
                        <td>
                          <li>Orientation</li>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>
                          <li>Consultation</li>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>
                          <li>Conference</li>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr> -->

                      <!-- <tr>
                        <td>Group Guidance</td>
                      </tr>

                      <tr>
                        <td>Career Guidance</td>
                      </tr> -->


                      <tr>
                        <td><a href="referral-reports.php">Referral</a></td>
                      </tr>
                      <tr>
                        <?php
                            $row = array();

                            for ($i=1; $i <= 13; $i++) { 
                              $query = "SELECT COUNT(reffered_date) AS row_count FROM refferals WHERE MONTH(reffered_date) = $i";

                              // Execute the query and retrieve the results
                              $result = mysqli_query($con, $query);

                              // Fetch the first row of the result set as an associative array
                              $row[] = mysqli_fetch_assoc($result);
                            }
                        
                            ?>
                        <td>
                          <li>Internal</li>
                        </td>
                        <td><a href="specific_report_referral.php"><?= $row2[8]['row_count']?></a></td>
                        <td><a href="specific_report_referral.php"><?= $row2[9]['row_count']?></a></td>
                        <td><a href="specific_report_referral.php"><?= $row2[10]['row_count']?></a></td>
                        <td><a href="specific_report_referral.php"><?= $row2[11]['row_count']?></a></td>
                        <td><a href="specific_report_referral.php"><?= $row2[0]['row_count']?></a></td>
                        <!-- <td><?= $row[1]['row_count']?></td> -->

                      </tr>



                      <tr>
                        <td><a href="offense-reports.php">Offense Monitoring</a></td>
                      </tr>
                      <tr>
                        <?php
                            $row = array();

                            for ($i=1; $i <= 13; $i++) { 
                              $query = "SELECT COUNT(date_created) AS row_count FROM offense_monitoring WHERE status='Inactive' AND MONTH(date_created) = $i";

                              // Execute the query and retrieve the results
                              $result = mysqli_query($con, $query);

                              // Fetch the first row of the result set as an associative array
                              $row[] = mysqli_fetch_assoc($result);
                            }
                        
                            ?>
                        <td>
                          <li>Offenses Records Done</li>
                        </td>
                        <td><a href="specific_report_offense.php"><?= $row[8]['row_count']?></a></td>
                        <td><a href="specific_report_offense.php"><?= $row[9]['row_count']?></a></td>
                        <td><a href="specific_report_offense.php"><?= $row[10]['row_count']?></a></td>
                        <td><a href="specific_report_offense.php"><?= $row[11]['row_count']?></a></td>
                        <td><a href="specific_report_offense.php"><?= $row[0]['row_count']?></a></td>
                        <!-- <td><?= $row[1]['row_count']?></td> -->

                      </tr>

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