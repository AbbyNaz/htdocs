<!-- <?php
      session_start();

      include_once("../connections/connection.php");

      if (!isset($_SESSION['UserEmail'])) {

        echo "<script>window.open('../loginForm.php','_self')</script>";
      } else {

        $con = connection();


        // REMOVE ALL APPOINTMENTS REQUEST THAT PASS THE DATE
        $app_query = "SELECT * FROM appointments WHERE app_status = 'In Review' AND date < CURDATE();";
        $app_con = $con->query($app_query) or die($con->error);
        while ($Appointment = $app_con->fetch_assoc()) {
          $app_id = $Appointment['id'];
          $timeslot = $Appointment['timeslot'];
          $timeslot_end = $Appointment['timeslot_end'];
          $date = $Appointment['date'];
          $user_type = $Appointment['user_type'];
          $ref_id = $Appointment['ref_id'];
          $id_number = $Appointment['id_number'];
          $name = $Appointment['name'];
          $nature = $Appointment['nature'];
          $subject = $Appointment['subject'];
          $appointment_type = $Appointment['appointment_type'];
          $info = $Appointment['info'];

          $updatelimit = "UPDATE `users` SET `limit_app`= 0 WHERE id_number='$id_number'" ;
          $con->query($updatelimit) or die($con->error);

          $app_status = 'No Response';
        
          $InsertHistoryquery = "INSERT INTO appointment_history (timeslot,timeslot_end,date,user_type,ref_id,id_number,name,nature,subject,appointment_type,info,app_status,app_id) 
                    VALUES('$timeslot','$timeslot_end','$date','$user_type','$ref_id','$id_number','$name','$nature','$subject',
                            '$appointment_type','$info','$app_status','$app_id')";
          $con->query($InsertHistoryquery) or die($con->error);

          $delapppointment ="DELETE FROM `appointments` where id = '$app_id'";
          $con->query($delapppointment) or die ($con->error);

        }

        if (isset($_GET['ref_id'])) {
          $ref_id = $_GET['ref_id'];

          $ref_query = "SELECT * FROM refferals WHERE ref_id = '$ref_id'";
          $ref_con = $con->query($ref_query) or die($con->error);
          $row_ref = $ref_con->fetch_assoc();

          $ref_user = $row_ref['reffered_user'];
          $ref_reason = $row_ref['reason'];
          $ref_actions = $row_ref['actions'];
          $ref_remarks = $row_ref['remarks'];

          $ref_natures = $row_ref['nature'];

          if(strpos($ref_natures ,'Academic') !== false){
            $Academic = 'checked';
          }else{
            $Academic = '';
          }
          if(strpos($ref_natures ,'Career') !== false){
            $Career = 'checked';
          }else{
            $Career = '';
          }
          if(strpos($ref_natures ,'Personal') !== false){
            $Personal = 'checked';
          }else{
            $Personal = '';
          }
          if(strpos($ref_natures ,'Crisis') !== false){
            $Crisis = 'checked';
          }else{
            $Crisis = '';
          }
          

          $user_query = "SELECT * FROM users WHERE user_id = '$ref_user'";
          $user_con = $con->query($user_query) or die($con->error);
          $row_user = $user_con->fetch_assoc();

          $id_number = $row_user['id_number'];
          $lName = $row_user['last_name'];
          $fName = $row_user['first_name'];
          $mName = $row_user['middle_name'];
          $program = $row_user['program'];
          $level = $row_user['level'];
          $position = $row_user['position'];
        }
        
        // if (isset($_POST['subit-req-ref'])) {
          
        //   $refid = $_POST['refid'];
          
        //   $status = "For Appointment";

        //   $queryupdate = "INSERT INTO `appointments`(`timeslot`, `date`, `user_type`, `ref_id`, `id_number`, `subject`, `appointment_type`, `info`, `app_status`) " .
        //     "VALUES ('$app_timeslot','$date','$app_type','$ref_id','$student_id','$app_subject','$type','$app_info','$status')";
        //   $get_app = $con->query($queryupdate) or die($con->error);
        //   // $row_get_app = $get_app->fetch_assoc();

        //   if ($get_app) {
        //     $update_ref_status_query = "UPDATE `refferals` SET `ref_status`='$status' WHERE ref_id = '$ref_id'";
        //     $update_con = $con->query($update_ref_status_query) or die($con->error);
        //     // $update_row = $update_con->fetch_assoc();
        //   }

        //   if ($update_con) {
        //     // echo "Saved";
        //     $_SESSION['status'] = "Appointment Added";
        //     $_SESSION['status_code'] = "success";
        //     header("Location: gc___all_appointment.php");
        //   } else {
        //     // echo "Not saved";
        //     $_SESSION['status'] = "Appointment Not Added";
        //     $_SESSION['status_code'] = "error";
        //     header("Location: gc___all_appointment.php");
        //   }
        // }

        

        function build_calendar($month, $year)
        {
          $con = connection();

          $daysOfWeek = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');

          $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);

          $numberDays = date('t', $firstDayOfMonth);

          $dateComponents = getdate($firstDayOfMonth);

          $monthName = $dateComponents['month'];

          $dayOfWeek = $dateComponents['wday'];

          $datetoday = date('Y-m-d');
          $calendar = "<table class='table table-bordered'>";
          $calendar .= "<center><h2>$monthName $year</h2><br>";

          $calendar .= "<a class='btn btn-xs btn-primary' href='?month=" . date('m', mktime(0, 0, 0, $month - 1, 1, $year)) . "&year=" . date('Y', mktime(0, 0, 0, $month - 1, 1, $year)) . "'>Previous Month</a> ";

          $calendar .= " <a href='gc___dashboard.php' class='btn btn-xs btn-primary' data-month='" . date('m') . "' data-year='" . date('Y') . "'>Current Month</a> ";

          $calendar .= "<a href='?month=" . date('m', mktime(0, 0, 0, $month + 1, 1, $year)) . "&year=" . date('Y', mktime(0, 0, 0, $month + 1, 1, $year)) . "' class='btn btn-xs btn-primary'>Next Month</a></center><br>";

          $calendar .= "<tr>";

          foreach ($daysOfWeek as $day) {
            $calendar .= "<th  class='header'>$day</th>";
          }

          $currentDay = 1;
          $calendar .= "</tr><tr>";

          if ($dayOfWeek > 0) {
            for ($k = 0; $k < $dayOfWeek; $k++) {
              $calendar .= "<td  class='empty'></td>";
            }
          }


          $month = str_pad($month, 2, "0", STR_PAD_LEFT);

          while ($currentDay <= $numberDays) {
            //Seventh column (Saturday) reached. Start a new row.
            if ($dayOfWeek == 7) {
              $dayOfWeek = 0;
              $calendar .= "</tr><tr>";
            }

            $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
            date_default_timezone_set('Asia/Manila');
            $date = "$year-$month-$currentDayRel";
            $dayname = strtolower(date('l', strtotime($date)));
            $eventNum = 0;
            $today = $date == date('Y-m-d') ? "today" : "";

            // this is for the no office hours in the calendar which is the saturday and sunday
            if ($dayname == 'saturday' || $dayname == 'sunday') {
              $calendar .= "<td class='$today'><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'>No Office Hours</button>";
            }
            // this is for the already passed date that is not available for booking
            elseif ($date < date('Y-m-d')) {
              $calendar .= "<td class='$today'><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'>N/A</button>";
            }
            // elseif (in_array($date, $bookings)) {
            //     $calendar .= "<td><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'>Already Booked</button>";
            // } 
            else {

              // this is where in calendar mared na yung date if nakuha na lahat ng appointment timeslots
              $totalbookings = checkSlot($con, $date);
              // yung 12 dito is yung total timeslots sa isang date
              if ($totalbookings == 18) {
                $calendar .= "<td class='$today'><h4>$currentDay</h4> <a href='#' class='btn btn-danger btn-xs'>All Booked</a>";
              } else {
                $availableslots = 18 - $totalbookings;
                $calendar .= "<td class='$today'><h4>$currentDay</h4> <a href='gc___calendar-appointment.php?date=" . $date . "' class='btn btn-success btn-xs'>Book</a> <small><i>$availableslots slots left</i></small>";
              }
            }


            $calendar .= "</td>";
            //Increment counters
            $currentDay++;
            $dayOfWeek++;
          }

          //Complete the row of the last week in month, if necessary
          if ($dayOfWeek != 7) {
            $remainingDays = 7 - $dayOfWeek;
            for ($l = 0; $l < $remainingDays; $l++) {
              $calendar .= "<td class='empty'></td>";
            }
          }

          $calendar .= "</tr>";
          $calendar .= "</table>";
          return $calendar;
        }


        function checkSlot($con, $date)
        {
          $stmt = $con->prepare("select * from appointments where date=?");
          $stmt->bind_param('s', $date);
          $totalbookings = 0;
          if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                $totalbookings++;
              }
              $stmt->close();
            }
          }

          return $totalbookings;
        }

      ?> -->

<?php

        include('includes/gc___header.php');
        include('includes/gc___left-menu-area.php');
        include('includes/gc___top-menu-area.php');
        include('includes/gc___mobile_menu.php');
?>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css">


<style type="text/css">
  .fc-daygrid-day-frame {
    border: 1px solid #b6e3f2;
  }

  .fc-day-today .fc-daygrid-day-frame {
    background-color: #b1eafc;
  }
</style>



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
                <li><a href="#">Home</a> <span class="bread-slash">/</span>
                </li>
                <li><span class="bread-blod">Dashboard</span>
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

<div class="analytics-sparkle-area">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="analytics-sparkle-line reso-mg-b-30">
          <div class="analytics-content">
            <h5>SHS</h5>

            <?php
            $query = "SELECT id_number FROM users WHERE level = 'Grade 11' || level = 'grade 11' || level = 'Grade 11' || level = 'grade 12'";
            $query_run = mysqli_query($con, $query);
            $row = mysqli_num_rows($query_run);
            echo '<h2><span class="counter">' . $row . '</span>
                                    <span class="tuition-fees">SHS Students</span></h2>'

            ?>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="analytics-sparkle-line reso-mg-b-30">
          <div class="analytics-content">
            <h5>Tertiary</h5>

            <?php
            $query = "SELECT id_number FROM users WHERE program = 'BSIT' || program = 'BSTM' || program = 'BSBAOM' || program = 'BSHM' || program = 'BMMA' AND role = 3";
            $query_run = mysqli_query($con, $query);
            $row = mysqli_num_rows($query_run);
            echo '<h2><span class="counter">' . $row . '</span>
                                    <span class="tuition-fees">Tertiary Student</span></h2>'
            ?>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
          <div class="analytics-content">
            <h5>Staff</h5>

            <?php
            $query = "SELECT id_number FROM users WHERE position = 'staff' || position = 'Staff' AND role = 2";
            $query_run = mysqli_query($con, $query);
            $row = mysqli_num_rows($query_run);
            echo '<h2><span class="counter">' . $row . '</span>
                            <span class="tuition-fees">Staff</span></h2>'
            ?>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
          <div class="analytics-content">
            <h5>Number of Pending Appointments</h5>

            <?php
            $current_date = date("Y-m-d");
            $result = "SELECT id FROM appointments WHERE '$current_date' <= date ORDER BY id";
            // $result = "SELECT COUNT(date) AS num_appointments FROM appointments WHERE '$current_date' <= date";
            // $result = "SELECT COUNT(date) AS num_appointments FROM appointments WHERE date < '$current_date'";
            $query_run = mysqli_query($con, $result);
            $row = mysqli_num_rows($query_run);

            echo '<h2><span class="counter">' . $row . '</span>
                            <span class="tuition-fees">Appointments</span></h2>'
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="product-sales-area mg-tb-30">
  <div class="container-fluid">
    <div class="row">
      <div class="calender-area mg-b-15">
        <div class="container-fluid">
          <div class="row">
            <!-- <div class="col-lg-12">
                                <div class="calender-inner">
                                    <?php
                                    $dateComponents = getdate();
                                    if (isset($_GET['month']) && isset($_GET['year'])) {
                                      $month = $_GET['month'];
                                      $year = $_GET['year'];
                                    } else {
                                      $month = $dateComponents['mon'];
                                      $year = $dateComponents['year'];
                                    }
                                    echo build_calendar($month, $year);
                                    ?>
                                </div>
                            </div> -->


            <div class="col-lg-12">
              <div class="product-sales-chart">
                <div class="portlet-title">
                  <div class="row">
                    <div class="col-lg-12">
                      <div id='calendar'></div>

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




<!-- Modal -->
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <div id="view-personal-modal" class="modal modal-edu-general default-popup-PrimaryModal fade" data-backdrop="static" data-keyboard="false" role="dialog">
  <div class="modal-dialog" style="overflow-y: scroll; max-height:90%;  margin-top: 50px; margin-bottom:50px;" >
      <div class="modal-content">
        <div class="modal-header header-color-modal bg-color-1">
          <h4 class="modal-title">My Appointment</h4>
          <div class="modal-close-area modal-close-df">
            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
          </div>
        </div>


        <div class="modal-body">


          <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right">Subject</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="text" id="view-personal-sub" class="form-control" readonly />
              </div>
            </div>
          </div>

          <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right">Time Slot</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="text" id="view-personal-time" class="form-control" readonly />
              </div>
            </div>
          </div>

          <div class="form-group-inner data-custon-pick" id="data_2">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-9">
                <label class="login2 pull-right" style="font-weight: bold;">Date</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="text" id="view-personal-date" class="form-control" readonly />
              </div>
            </div>
          </div>

          <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right">Information</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="text" id="view-personal-information" class="form-control" placeholder="Enter Appointment Information" />
              </div>
            </div>
          </div>

        </div>


        <div class="modal-footer">
          <button type="button" id="cancel-personal" data-status="0" class="btn btn-danger btn-md">Cancel Appointment</button>
          <button type="button" id="cancel-personal" data-status="0" class="btn btn-danger btn-md">Done</button>
          <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

</div>


<!-- Modal -->
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <div id="personal-modal" class="modal modal-edu-general default-popup-PrimaryModal fade" data-backdrop="static" data-keyboard="false" role="dialog">
  <div class="modal-dialog" style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;" >
      <div class="modal-content">
        <div class="modal-header header-color-modal bg-color-1">
          <h4 class="modal-title">Add Personal Appointment</h4>
          <div class="modal-close-area modal-close-df">
            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
          </div>
        </div>


        <div class="modal-body">



          <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right">Subject</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="text" id="personal-sub" class="form-control" />
              </div>
            </div>
          </div>

          <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right">Time From</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="form-select-list">
                  <select id="personal-time" class="form-control custom-select-value" name="timeslot">

                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right">Time To</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="form-select-list">
                  <select id="personal-time-to" class="form-control custom-select-value" name="timeslot">

                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group-inner data-custon-pick" id="data_2">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-9">
                <label class="login2 pull-right" style="font-weight: bold;">Date</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="text" id="personal-date" class="form-control" readonly />
              </div>
            </div>
          </div>

          <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right">Information</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="text" id="personal-information" class="form-control" placeholder="Enter Appointment Information" />
              </div>
            </div>
          </div>

        </div>


        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
          <button type="button" id="submit-personal" data-status="0" class="btn btn-primary btn-md">Add</button>
        </div>
      </div>
    </div>
  </div>

</div>


<!-- Modal -->
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <div id="req-modal" class="modal modal-edu-general default-popup-PrimaryModal fade" data-backdrop="static" data-keyboard="false" role="dialog">
  <div class="modal-dialog" style="overflow-y: scroll; max-height:90%;  margin-top: 50px; margin-bottom:70px;" >
      <div class="modal-content">
        <div class="modal-header header-color-modal bg-color-1">
          <h4 class="modal-title">Add New Appointment</h4>
          <div class="modal-close-area modal-close-df">
            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
          </div>
        </div>


        <div class="modal-body">
          <?php if (!isset($_GET['ref_id'])) { ?>
            <div class="form-group-inner" id="STUD_ID">
              <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                  <label class="login2 pull-right pull-right-pro">Name</label>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                  <div class="input-group">
                    <input type="text" class="form-control" id="student_name" placeholder="Search User">
                    <div class="input-group-btn">
                      <!-- <a href="gc___search-students.php"><button tabindex="-1" class="btn btn-primary btn-md" type="button" >Search</button></a> -->
                      <a style="cursor: pointer;" id="search_id"><button tabindex="-1" id="search-user" class="btn btn-primary btn-md" type="button">Search</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } else { ?>
            <div class="form-group-inner" id="STUD_ID">
              <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                  <label class="login2 pull-right pull-right-pro">Name</label>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                  <div class="input-group">
                    <textarea class="form-control" id="student_name" readonly><?= $fName ?> <?= $lName ?></textarea>
                    <div class="input-group-btn">
                      <!-- <a href="gc___search-students.php"><button tabindex="-1" class="btn btn-primary btn-md" type="button" >Search</button></a> -->
                      <a style="cursor: pointer;" id="search_id"><button tabindex="-1" id="search-user" class="btn btn-primary btn-md" type="button">Search</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>

          <!--    <div class="form-group-inner data-custon-pick" id="data_2"
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-9">
                    <label class="login2 pull-right" style="font-weight: bold;">Name</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <select id="selectname" style="width: 334px"></select>
                  </div>
                </div>
              </div> -->
          <?php if (!isset($_GET['ref_id'])) { ?>
            <div class="form-group-inner data-custon-pick" id="data_2">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-9">
                  <label class="login2 pull-right" style="font-weight: bold;">ID</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                  <input type="text" id="myid" class="form-control" readonly />
                </div>
              </div>
            </div>
          <?php } else { ?>
            <div class="form-group-inner data-custon-pick" id="data_2">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-9">
                  <label class="login2 pull-right" style="font-weight: bold;">ID</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                  <textarea class="form-control" id="myid" readonly><?= $id_number ?> </textarea>
                </div>
              </div>
            </div>
          <?php } ?>


          <?php if (!isset($_GET['ref_id'])) { ?>
            <div class="form-group-inner data-custon-pick" id="data_2">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-9">
                  <label class="login2 pull-right" style="font-weight: bold;">Position</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                  <input type="text" id="pos" class="form-control" readonly />
                </div>
              </div>
            </div>
          <?php } else { ?>
            <div class="form-group-inner data-custon-pick" id="data_2">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-9">
                  <label class="login2 pull-right" style="font-weight: bold;">Position</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                  <textarea class="form-control" id="pos" readonly><?= $position ?> </textarea>
                </div>
              </div>
            </div>
          <?php } ?>

          <?php if (!isset($_GET['ref_id'])) { ?>

            <!-- <div class="form-group-inner">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <label class="login2 pull-right">Nature</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                  <div class="form-select-list">
                    <select class="form-control custom-select-value" name="subject">
                      <option>Counseling</option>
                      <option>Academic</option>
                      <option>Personal</option>
                      <option>Others</option>
                    </select>
                  </div>
                </div>
              </div>
            </div> -->

            <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                      <label class="login2 pull-right pull-right-pro">Nature </label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                      <div class="bt-df-checkbox pull-left">
                          <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div class="i-checks pull-left">
                                      <label>
                                          <input id="nature" type="checkbox" name="nature[]" value="Academic"> <i></i> Academic </label>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div class="i-checks pull-left">
                                      <label>
                                          <input id="nature" type="checkbox" name="nature[]" value="Career"> <i></i> Career </label>
                                  </div>
                              </div>
                            </div>
                          <div class="row"> 
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div class="i-checks pull-left">
                                      <label>
                                          <input id="nature" type="checkbox" name="nature[]" value="Personal"> <i></i> Personal </label>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div class="i-checks pull-left">
                                      <label>
                                          <input id="nature" type="checkbox" name="nature[]" value="Crisis"> <i></i> Crisis </label>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>

          </div>
            
          <?php } else { ?>
            
            <!-- <div class="form-group-inner">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <label class="login2 pull-right">Nature</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                  <div class="form-select-list">
                    <select class="form-control custom-select-value" name="subject">
                      <option>Counseling</option>
                      <option>Academic</option>
                      <option>Personal</option>
                      <option>Others</option>
                    </select>
                  </div>
                </div>
              </div>
            </div> -->

            <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                      <label class="login2 pull-right pull-right-pro">Nature </label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                      <div class="bt-df-checkbox pull-left">
                          <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div class="i-checks pull-left">
                                      <label>
                                          <input id="nature" type="checkbox" name="nature[]" value="Academic" disabled <?= $Academic ?>> <i></i> Academic </label>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div class="i-checks pull-left">
                                      <label>
                                          <input id="nature" type="checkbox" name="nature[]" value="Career" disabled <?= $Career ?>> <i></i> Career </label>
                                  </div>
                              </div>
                            </div>
                          <div class="row"> 
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div class="i-checks pull-left">
                                      <label>
                                          <input id="nature" type="checkbox" name="nature[]" value="Personal" disabled <?= $Personal ?>> <i></i> Personal </label>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div class="i-checks pull-left">
                                      <label>
                                          <input id="nature" type="checkbox" name="nature[]" value="Crisis" disabled <?= $Crisis ?>> <i></i> Crisis </label>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>

          </div>

          <?php } ?>
          <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right">Time From</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="form-select-list">
                  <select id="selectTimeslot" class="form-control custom-select-value" name="timeslot">
                    <!-- <option id="9:00-am" value="9:00 am">9:00 am</option>
                    <option id="10:00-am" value="10:00 am">10:00 am</option>
                    <option id="11:00-am" value="11:00 am">11:00 am</option>
                    <option id="1:00-pm" value="1:00 pm">1:00 pm</option>
                    <option id="2:00-pm" value="2:00 pm">2:00 pm</option>
                    <option id="3:00-pm" value="3:00 pm">3:00 pm</option>
                    <option id="4:00-pm" value="4:00 pm">4:00 pm</option> -->
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right">Time To</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="form-select-list">
                  <select id="selectTimeslot-to" class="form-control custom-select-value" name="timeslot">

                    <!-- <option id="10:00-am" value="10:00 am">10:00 am</option>
                    <option id="11:00-am" value="11:00 am">11:00 am</option>
                    <option id="1:00-pm" value="1:00 pm">1:00 pm</option>
                    <option id="2:00-pm" value="2:00 pm">2:00 pm</option>
                    <option id="3:00-pm" value="3:00 pm">3:00 pm</option>
                    <option id="4:00-pm" value="4:00 pm">4:00 pm</option>
                    <option id="5:00-pm" value="5:00 pm">5:00 pm</option> -->
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
                <input type="text" id="reason" class="form-control" placeholder="Enter Appointment Subject" />
              </div>
            </div>
          </div>

          <?php if (!isset($_GET['ref_id'])) { ?>
          <div class="form-group-inner data-custon-pick" id="data_2">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-9">
                <label class="login2 pull-right" style="font-weight: bold;">Date</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="text" id="date-selected" class="form-control" readonly />
              </div>
            </div>
          </div>
          <?php }else{ ?>
          <div class="form-group-inner data-custon-pick" id="data_2">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-9">
                <label class="login2 pull-right" style="font-weight: bold;">Date</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="date" id="dateselected" class="form-control"/>
              </div>
            </div>
          </div>
          <?php } ?>

          <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right">Type</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="form-select-list">
                  <select class="form-control custom-select-value" id="type">
                    <option>Online</option>
                    <option>Walk-in</option>
                  </select>
                </div>
              </div>
            </div>
          </div>



          <div class="form-group-inner" id="meeting">
            <div class="row">
              <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <label class="login2 pull-right pull-right-pro">Meeting Link</label>
              </div>
              <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="input-group">
                  <input type="text" class="form-control" id="meetinglink" placeholder="Input Meeting Link">
                  <div class="input-group-btn">
                    <!-- <a href="gc___search-students.php"><button tabindex="-1" class="btn btn-primary btn-md" type="button" >Search</button></a> -->
                    <a href="https://teams.microsoft.com/_?lm=deeplink&lmsrc=NeutralHomePageWeb&cmpid=WebSignIn&culture=en-us&country=us#/scheduling-form/?opener=1&navCtx=navigateHybridContentRoute" style="cursor: pointer;" target="blank"><button tabindex="-1" id="search-meetinglink" class="btn btn-primary btn-md" type="button">Link</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>


            
          <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right">Information</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="text" id="information" class="form-control" placeholder="Enter Appointment Information" />
              </div>
            </div>
          </div>

        </div>
<!-- ADD APPOINTMENT -->
        <?php if (!isset($_GET['ref_id'])) { ?>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
          <button type="button" id="submit-req" data-status="0" class="btn btn-primary btn-md">Add</button>
        </div>
        <?php } else { ?>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
          <button type="button" name="submit-req-ref"id="submit-req-ref" data-status="0" class="btn btn-primary btn-md ">Add</button>
          <input type="hidden" name="refid" id="refid" value="<?=  $ref_id?>">

          
        </div>
        <?php } ?>
      
      </div>
    </div>
  </div>

</div>



<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <div id="search-modal" class="modal modal-edu-general default-popup-PrimaryModal fade" data-backdrop="static" data-keyboard="false" role="dialog">
  <div class="modal-dialog" style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;" >
      <div class="modal-content">
        <div class="modal-header header-color-modal bg-color-1">
          <h4 class="modal-title" id="modal-title"></h4>
          <div class="modal-close-area modal-close-df">
            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
          </div>
        </div>

        <div class="modal-body">

          <div class="row">

            <div class="form-group-inner">
              <div class="row">

                <div class="form-select-list">
                  <select class="form-control custom-select-value" id="selected-pos">
                    <option selected disabled>Select the User Position</option>
                    <option>Student</option>
                    <option>Staff</option>>
                  </select>
                </div>
                <br>
                <div class="form-select-list">
                  <input type="text" id="search-form" class="form-control" placeholder="Search......" />
                </div>

              </div>
            </div>

          </div>


          <br>

          <table class="table">
            <thead>
              <tr>
                <th>Name</th>
                <th>ID Number</th>
                <th>Position</th>
                <th>Program or Department</th>
                <!-- <th>Department</th> -->
                <!-- <th></th> -->
              </tr>
            </thead>
            <tbody id="search-result">

            </tbody>
          </table>
        </div>


        <div class="modal-footer">
          <button type="button" id="back-modal" data-status="0" class="btn btn-primary btn-md">Back</button>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <div id="VIEW_APPOINTMENT" class="modal modal-edu-general default-popup-PrimaryModal" role="dialog">
  <div class="modal-dialog" style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;" >
      <div class="modal-content">
        <div class="modal-header header-color-modal bg-color-1">
          <h4 class="modal-title">Appointment Information</h4>
          <div class="modal-close-area modal-close-df">
            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
          </div>
        </div>

        <form id="viewForm" action="" method="POST">
        <div class="modal-body">
          <div class="form-group-inner data-custon-pick" id="data_2">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-9">
                <label class="login2 pull-right" style="font-weight: bold;">ID</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="text" id="view-id" class="form-control" readonly />
              </div>
            </div>
          </div>

          <div class="form-group-inner data-custon-pick" id="data_2">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-9">
                <label class="login2 pull-right" style="font-weight: bold;"> Name</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="text" id="view-name" class="form-control" readonly />
              </div>
            </div>
          </div>

          <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right">Time Slot</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="form-select-list">
                  <input type="text" id="view-time" class="form-control" readonly />
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
                <input type="text" id="view-reason" class="form-control" readonly />
              </div>
            </div>
          </div>


          <div class="form-group-inner data-custon-pick" id="data_2">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-9">
                <label class="login2 pull-right" style="font-weight: bold;">Date</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="date" id="view-date" class="form-control" readonly />
              </div>
            </div>
          </div>

          <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label class="login2 pull-right pull-right-pro"><span class="basic-ds-n">Type</span></label>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-9 col-xs-9">
                <input type="text" id="view-type" class="form-control" readonly />
              </div>
            </div>
          </div>
          <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right">Information</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="text" id="view-information" class="form-control" placeholder="Enter Appointment Information" readonly />
              </div>
            </div>
          </div>
          <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right">Meeting Link</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="text" id="view-url" class="form-control" placeholder="Enter Appointment Information" />
              </div>
            </div>
          </div>
        </div>


        <div class="modal-footer">
              <button type="submit" name="cancelapp" id="cancel-app" class="btn btn-danger btn-md">Cancel Appointment</button>
              <button type="submit" name="doneapp" id="done-app" class="btn btn-primary btn-md">Done</button>

          <!-- <a href="gc___appointment_history.php" 
          <button type="button" id="done-app" class="btn btn-info btn-md">Done</button> </a> -->

          <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>

</div>



<!-- ??? load jQuery ??? -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>



<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  // FOR MANAGING ADD MEETING LINK ON ADD APPOINTMENT
  $('#type').change(function() {
      if ($(this).val() === 'Online') {
        $('#meeting').show();
      } else {
        $('#meeting').hide();
      }
  });

  // FOR THE TIME FORM OF ADD APPOINTMENT FROM REFERRALS
  // MANAGE TIME FOR ADD APPOINTMENT MODAL
  $('#dateselected').change(function() {
    var selectedDate = $(this).val();

    $.ajax({
              url: "get_today_app_time.php",
              data: {
                date: selectedDate
              },
              success: function(data) {
                var Appointments = JSON.parse(data);
                
                $("#selectTimeslot").empty();
                $("#selectTimeslot-to").empty();

                const start = [9, 10, 11, 1, 2, 3, 4];
                const end = [10, 11, 12, 2, 3, 4, 5];
                var index = 0;

                // REMOVE ALL THE TIMES THAT HAS BEEN APPOINTED
                Appointments.forEach(Appointment => {
                  
                  switch (Appointment['timeslot']) {
                    case '9:00 am':
                      index = start.indexOf(9);
                      if (index > -1) {
                        start.splice(index, 1);
                      }
                      break;
                    case '10:00 am':
                      index = start.indexOf(10);
                      if (index > -1) {
                        start.splice(index, 1);
                      }
                      break;
                    case '11:00 am':
                      index = start.indexOf(11);
                      if (index > -1) {
                        start.splice(index, 1);
                      }
                      break;
                    case '1:00 pm':
                      index = start.indexOf(1);
                      if (index > -1) {
                        start.splice(index, 1);
                      }
                      break;
                    case '2:00 pm':
                      index = start.indexOf(2);
                      if (index > -1) {
                        start.splice(index, 1);
                      }
                      break;
                    case '3:00 pm':
                      index = start.indexOf(3);
                      if (index > -1) {
                        start.splice(index, 1);
                      }
                      break;
                    case '4:00 pm':
                      index = start.indexOf(4);
                      if (index > -1) {
                        start.splice(index, 1);
                      }
                      break;
                  }

                  switch (Appointment['timeslot_end']) {
                    case '10:00 am':
                      index = end.indexOf(10);
                      if (index > -1) {
                        end.splice(index, 1);
                      }
                      break;
                    case '11:00 am':
                      index = end.indexOf(11);
                      if (index > -1) {
                        end.splice(index, 1);
                      }
                      break;
                    case '12:00 pm':
                      index = end.indexOf(12);
                      if (index > -1) {
                        end.splice(index, 1);
                      }
                      break;
                    case '2:00 pm':
                      index = end.indexOf(2);
                      if (index > -1) {
                        end.splice(index, 1);
                      }
                      break;
                    case '3:00 pm':
                      index = end.indexOf(3);
                      if (index > -1) {
                        end.splice(index, 1);
                      }
                      break;
                    case '4:00 pm':
                      index = end.indexOf(4);
                      if (index > -1) {
                        end.splice(index, 1);
                      }
                      break;
                    case '5:00 pm':
                      index = end.indexOf(5);
                      if (index > -1) {
                        end.splice(index, 1);
                      }
                      break;
                  }
                  // END OF switch
                });

                console.log(start);
                console.log(end);
                
                // ADD ALL AVAILABLE START TIME
                start.forEach(time => {
                  switch (time) {
                    case 9:
                      $("#selectTimeslot").append('<option id="9:00-am" value="9:00 am">9:00 am</option>');
                      break;
                    case 10:
                      $("#selectTimeslot").append('<option id="10:00-am" value="10:00 am">10:00 am</option>');
                      break;
                    case 11:
                      $("#selectTimeslot").append('<option id="11:00-am" value="11:00 am">11:00 am</option>');
                      break;
                    case 1:
                      $("#selectTimeslot").append('<option id="1:00-pm" value="1:00 pm">1:00 pm</option>');
                      break;
                    case 2:
                      $("#selectTimeslot").append('<option id="2:00-pm" value="2:00 pm">2:00 pm</option>');
                      break;
                    case 3:
                      $("#selectTimeslot").append('<option id="3:00-pm" value="3:00 pm">3:00 pm</option>');
                      break;
                    case 4:
                      $("#selectTimeslot").append('<option id="4:00-pm" value="4:00 pm">4:00 pm</option>');
                      break;
                  }
                });
                
                // ADD ALL AVAILABLE END TIME
                end.forEach(time => {
                  switch (time) {
                    case 10:
                      $("#selectTimeslot-to").append('<option id="10:00-am-to" value="10:00 am">10:00 am</option>');
                      break;
                    case 11:
                      $("#selectTimeslot-to").append('<option id="11:00-am-to" value="11:00 am">11:00 am</option>');
                      break;
                    case 12:
                      $("#selectTimeslot-to").append('<option id="12:00-pm-to" value="12:00 pm">12:00 pm</option>');
                      break;
                    case 2:
                      $("#selectTimeslot-to").append('<option id="2:00-pm-to" value="2:00 pm">2:00 pm</option>');
                      break;
                    case 3:
                      $("#selectTimeslot-to").append('<option id="3:00-pm-to" value="3:00 pm">3:00 pm</option>');
                      break;
                    case 4:
                      $("#selectTimeslot-to").append('<option id="4:00-pm-to" value="4:00 pm">4:00 pm</option>');
                      break;
                    case 5:
                      $("#selectTimeslot-to").append('<option id="5:00-pm-to" value="5:00 pm">5:00 pm</option>');
                      break;
                  }
                });

              }
            });
  });
  


  // $(document).ready(function() {
  //               $('#searchstudent').keyup(function() {
  //                   var search = $(this).val();
  //                   if (search != '') {
  //                       jQuery.ajax({
  //                           type: "POST",
  //                           url: 'get_specific_student.php',
  //                           data: {
  //                               search: search
  //                           },

  //                           success: function(response) {
  //                               var userData = jQuery.parseJSON(response);
                                
  //                               // $('#ReferralForm').attr("action", "add_referral.php?id="+userData[0].id+"");
                                
  //                               // $('#stud_id').val(userData[0].id);
  //                               // $('#stud_name').val(userData[0].first_name + " " + userData[0].last_name);
  //                               // $('#stud_program').val(userData[0].program);
  //                               // $('#stud_level').val(userData[0].level);
                                
                                
                                
  //                           }
                            

  //                       });
  //                   }
  //               });

  //               $('#searchstaff').keyup(function() {
  //                   var search = $(this).val();

  //                   console.log(search);

  //                   if (search != '') {
  //                       console.log(search);
  //                       jQuery.ajax({
  //                           type: "POST",
  //                           url: 'get_specific_staff.php',
  //                           data: {
  //                               search: search
  //                           },

  //                           success: function(response) {
                                
  //                               var userData2 = jQuery.parseJSON(response);

  //                               // $('#ReferralForm').attr("action", "add_referral.php?id="+userData2[0].id+"");

  //                               // console.log(userData2);
  //                               // $('#stud_id').val(userData2[0].id);
  //                               // $('#staff_name').val(userData2[0].first_name + " " + userData2[0].last_name);
  //                               // $('#staff_department').val(userData2[0].department);
  //                               // $('#staff_position').val(userData2[0].position);
  //                           }

  //                       });
  //                   }
  //               });
  //           });

</script>


<script>
  $(document).ready(function() {
    var refId = null;

    $.urlParam = function(name){
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if(!results) return;
        return results[1] || 0;
    }

    refId = $.urlParam('ref_id');
    if (refId != null) {
      $("#req-modal").modal("show");
    }
  });
  
</script>

<script type="text/javascript">
  $.ajax({
    url: "get_personal_events.php",
    type: "POST",
    dataType: "json",
    data: {
      userid: $("#store-data").data("id"),
    },
    xhrFields: {
      withCredentials: true,
    },
    crossDomain: true,
    success: (data) => {

      let mergedObject = data.personal.concat(data.school);



      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          themeSystem: "bootstrap",
          dayMaxEventRows: true,
          editable: false,
          initialView: "dayGridMonth",
          selectable: false,
          headerToolbar: {
            left: "prev,next,today",
            center: "title",
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
          },
          // validRange: function (nowDate) {
          // return {
          //   start: nowDate
          // }
          // },
          events: mergedObject,
          dateClick: function(info) {

           

            var dateParts = info.dateStr.split('-');
            var year = dateParts[0];
            var month = dateParts[1] + 1; // JavaScript months are 0-based
            var day = dateParts[2];

            var selectedDate = new Date(info.dateStr);
            var currentDate = new Date();
            currentDate.setHours(8, 0, 0, 0);

            // alert(selectedDate+"\n "+currentDate);

              // $("#personal-modal").modal("show");
              $("#personal-date").val(info.dateStr);
              $("#date-selected").val(info.dateStr);
              let userid = $("#store-data").data("id");
              $("#meeting").hide();
              const Toast = Swal.mixin({
                toast: true,
                position: 'center',
                showConfirmButton: true,
                confirmButtonText: "Personal",
                showDenyButton: true,
                denyButtonText: "School",
                showCancelButton: true,
                preConfirm: (e) => {
                  $("#personal-modal").modal("show");
                },
                preDeny: (e) => {
                  $("#req-modal").modal("show");
                }

              })

            // dont show if the date is past the current date
            if (selectedDate >= currentDate) { 
              Toast.fire({
                icon: 'info',
                title: 'Select type of appointment'
              })

            }

            
            
            // MANAGE TIME FOR ADD APPOINTMENT MODAL
            $.ajax({
              url: "get_today_app_time.php",
              data: {
                date: info.dateStr
              },
              success: function(data) {
                var Appointments = JSON.parse(data);
                
                $("#selectTimeslot").empty();
                $("#selectTimeslot-to").empty();

                const start = [9, 10, 11, 1, 2, 3, 4];
                const end = [10, 11, 12, 2, 3, 4, 5];
                var index = 0;

                // REMOVE ALL THE TIMES THAT HAS BEEN APPOINTED
                Appointments.forEach(Appointment => {
                  
                  switch (Appointment['timeslot']) {
                    case '9:00 am':
                      index = start.indexOf(9);
                      if (index > -1) {
                        start.splice(index, 1);
                      }
                      break;
                    case '10:00 am':
                      index = start.indexOf(10);
                      if (index > -1) {
                        start.splice(index, 1);
                      }
                      break;
                    case '11:00 am':
                      index = start.indexOf(11);
                      if (index > -1) {
                        start.splice(index, 1);
                      }
                      break;
                    case '1:00 pm':
                      index = start.indexOf(1);
                      if (index > -1) {
                        start.splice(index, 1);
                      }
                      break;
                    case '2:00 pm':
                      index = start.indexOf(2);
                      if (index > -1) {
                        start.splice(index, 1);
                      }
                      break;
                    case '3:00 pm':
                      index = start.indexOf(3);
                      if (index > -1) {
                        start.splice(index, 1);
                      }
                      break;
                    case '4:00 pm':
                      index = start.indexOf(4);
                      if (index > -1) {
                        start.splice(index, 1);
                      }
                      break;
                  }

                  switch (Appointment['timeslot_end']) {
                    case '10:00 am':
                      index = end.indexOf(10);
                      if (index > -1) {
                        end.splice(index, 1);
                      }
                      break;
                    case '11:00 am':
                      index = end.indexOf(11);
                      if (index > -1) {
                        end.splice(index, 1);
                      }
                      break;
                    case '12:00 pm':
                      index = end.indexOf(12);
                      if (index > -1) {
                        end.splice(index, 1);
                      }
                      break;
                    case '2:00 pm':
                      index = end.indexOf(2);
                      if (index > -1) {
                        end.splice(index, 1);
                      }
                      break;
                    case '3:00 pm':
                      index = end.indexOf(3);
                      if (index > -1) {
                        end.splice(index, 1);
                      }
                      break;
                    case '4:00 pm':
                      index = end.indexOf(4);
                      if (index > -1) {
                        end.splice(index, 1);
                      }
                      break;
                    case '5:00 pm':
                      index = end.indexOf(5);
                      if (index > -1) {
                        end.splice(index, 1);
                      }
                      break;
                  }
                  // END OF switch
                });

                console.log(start);
                console.log(end);
                
                // ADD ALL AVAILABLE START TIME
                start.forEach(time => {
                  switch (time) {
                    case 9:
                      $("#selectTimeslot").append('<option id="9:00-am" value="9:00 am">9:00 am</option>');
                      break;
                    case 10:
                      $("#selectTimeslot").append('<option id="10:00-am" value="10:00 am">10:00 am</option>');
                      break;
                    case 11:
                      $("#selectTimeslot").append('<option id="11:00-am" value="11:00 am">11:00 am</option>');
                      break;
                    case 1:
                      $("#selectTimeslot").append('<option id="1:00-pm" value="1:00 pm">1:00 pm</option>');
                      break;
                    case 2:
                      $("#selectTimeslot").append('<option id="2:00-pm" value="2:00 pm">2:00 pm</option>');
                      break;
                    case 3:
                      $("#selectTimeslot").append('<option id="3:00-pm" value="3:00 pm">3:00 pm</option>');
                      break;
                    case 4:
                      $("#selectTimeslot").append('<option id="4:00-pm" value="4:00 pm">4:00 pm</option>');
                      break;
                  }
                });
                
                // ADD ALL AVAILABLE END TIME
                end.forEach(time => {
                  switch (time) {
                    case 10:
                      $("#selectTimeslot-to").append('<option id="10:00-am-to" value="10:00 am">10:00 am</option>');
                      break;
                    case 11:
                      $("#selectTimeslot-to").append('<option id="11:00-am-to" value="11:00 am">11:00 am</option>');
                      break;
                    case 12:
                      $("#selectTimeslot-to").append('<option id="12:00-pm-to" value="12:00 pm">12:00 pm</option>');
                      break;
                    case 2:
                      $("#selectTimeslot-to").append('<option id="2:00-pm-to" value="2:00 pm">2:00 pm</option>');
                      break;
                    case 3:
                      $("#selectTimeslot-to").append('<option id="3:00-pm-to" value="3:00 pm">3:00 pm</option>');
                      break;
                    case 4:
                      $("#selectTimeslot-to").append('<option id="4:00-pm-to" value="4:00 pm">4:00 pm</option>');
                      break;
                    case 5:
                      $("#selectTimeslot-to").append('<option id="5:00-pm-to" value="5:00 pm">5:00 pm</option>');
                      break;
                  }
                });

              }
            });
            


            $(document).on("click", "#search-user", () => { //SHOW SEARCH USER

              $("#req-modal").modal("hide");
              $("#search-modal").modal("show");
              $("#modal-title").text('Search for "' + $("#student_name").val() + '"');
              $('#search-form').val($("#student_name").val());
            });

            $(document).on("change", "#selected-pos", () => {

              // console.log($("#selected-pos").val());

              if ($("#search-form").val() != "") {
                

                $.ajax({
                  url: "search_user.php",
                  type: "POST",
                  dataType: "json",
                  data: {
                    search: $("#search-form").val(),
                    pos: $("#selected-pos").val()
                  },
                  xhrFields: {
                    withCredentials: true,
                  },
                  crossDomain: true,
                  success: (data) => {

                    calendar.addEventSource(data);
                    // calendar.refetchEvents();
                    $("#search-result").empty();

                    if (data.users.length == 0) {
                      $("#search-result").empty();
                    } else {
                      $.each(data.users, (indx, users) => {

                        $("#search-result").append(`                        
                        <tr>
                          <th>${users.text}</th>
                          <td>${users.studid}</td>
                          <td>${users.position}</td>
                          <td>${users.program}</td>
                          // <td>${users.department}</td>
                          <td><button class="btn btn-primary btn-sm" id="get-selected" data-name="${users.text}" data-studid="${users.studid}" data-pos="${users.position}" data-id="${users.id}">Select</td>
                        </tr>
                        `)

                      });
                    }

                  }
                });
              }

              // $.ajax({
              //   url: "search_user.php",
              //   type: "POST",
              //   dataType: "json",
              //   data: {
              //     search: $("#student_name").val(),
              //     pos: $("#selected-pos").val()
              //   },
              //   xhrFields: {
              //     withCredentials: true,
              //   },
              //   crossDomain: true,
              //   success: (data) => {

              //     calendar.addEventSource(data);
              //     // calendar.refetchEvents();
              //     $("#search-result").empty();

              //     if (data.users.length == 0) {
              //       $("#search-result").empty();
              //     } else {
              //       $.each(data.users, (indx, users) => {

              //         $("#search-result").append(`                        
              //           <tr>
              //             <th>${users.text}</th>
              //             <td>${users.studid}</td>
              //             <td>${users.position}</td>
              //             // <td>${users.program} ${users.department}</td>
              //             // 
              //             <td><button class="btn btn-primary btn-sm" id="get-selected" data-name="${users.text}" data-studid="${users.studid}" data-pos="${users.position}" data-id="${users.id}">Select</td>
              //           </tr>
              //           `)

              //       });
              //     }

              //   }
              // });

            });


            $(document).on("click", "#get-selected", (e) => {

              $("#req-modal").modal("show");
              $("#search-modal").modal("hide");
              $("#student_name").val(e.target.dataset.name);
              $("#myid").val(e.target.dataset.studid);
              $("#pos").val(e.target.dataset.pos);

            });

            $("#search-form").keyup(function() {

              $("#search-result").empty();

                $.ajax({
                  url: "search_user.php",
                  type: "POST",
                  dataType: "json",
                  data: {
                    pos: $("#selected-pos").val(),
                    search: $("#search-form").val()
                  },
                  xhrFields: {
                    withCredentials: true,
                  },
                  crossDomain: true,
                  success: (data) => {

                    $("#search-result").empty();

                    $.each(data.users, (indx, users) => {

                      $("#search-result").append(`                        
                        <tr>
                          <th>${users.text}</th>
                          <td>${users.studid}</td>
                          <td>${users.position}</td>
                          <td>${users.program}</td>
                          // <td>${users.department}</td>
                          <td><button class="btn btn-primary btn-sm" id="get-selected" data-name="${users.text}" data-studid="${users.studid}" data-pos="${users.position}" data-id="${users.id}">Select</td>
                        </tr>
                        `)

                    });

                  }
                });


            });


            $(document).on("click", "#back-modal", (e) => {

              $("#req-modal").modal("show");
              $("#search-modal").modal("hide");
            });


          },
          eventClick: function(events) {

            console.log(events.event._def.extendedProps.status);


            if (events.event._def.extendedProps.status == 1) {

              $.ajax({
                url: "get_req.php",
                type: "POST",
                dataType: "json",
                data: {
                  appid: events.event._def.publicId,
                  userid: $("#store-data").data("id"),
                },
                xhrFields: {
                  withCredentials: true,
                },
                crossDomain: true,
                success: (data) => {

                  $("#VIEW_APPOINTMENT").modal("show");

                  $("#view-information").val(data[0].info);
                  $("#view-type").val(data[0].appointment_type);
                  $("#view-date").val(data[0].date);
                  $("#view-reason").val(data[0].subject);
                  $("#view-time").val(data[0].timeslot + " to " + data[0].timeslot_end);
                  $("#view-id").val(data[0].id_number);
                  $("#view-name").val(data[0].name);
                  $("#view-url").val(data[0].meeting_link);

                  $('#app_id').val(appid);

                }
              });

            } else if (events.event._def.extendedProps.status == 2) {
              $.ajax({
                url: "get_personal.php",
                type: "POST",
                dataType: "json",
                data: {
                  appid: events.event._def.publicId
                },
                xhrFields: {
                  withCredentials: true,
                },
                crossDomain: true,
                success: (data) => {

                  $("#view-personal-modal").modal("show");
                  console.log(data);
                  $("#view-personal-information").val(data[0].information);
                  $("#view-personal-sub").val(data[0].subject);
                  $("#view-personal-date").val(data[0].app_date);
                  // $("#view-reason").val(data[0].subject);
                  $("#view-personal-time").val(data[0].timeslot + " to " + data[0].timeslot_end);
                  // $("#view-id").val(data[0].id_number);


                }
              });
            }




            $(document).on("click", "#cancel-personal", () => {
              $.ajax({
                url: "delete_appointment.php",
                type: "POST",
                dataType: "json",
                data: {
                  appid: events.event._def.publicId,
                  userid: $("#store-data").data("id"),
                },
                xhrFields: {
                  withCredentials: true,
                },
                crossDomain: true,
                success: (data) => {

                  $("#VIEW_APPOINTMENT").modal("hide");
                  location.reload();

                }
              });
            });

            // CHANGE TO cancel_appointment.php
            // $(document).on("click", "#cancel-app", () => {
            //   var ref=$("#refid").val();
            //   $.ajax({
            //     url: "delete_req.php",
            //     type: "POST",
            //     dataType: "json",
            //     data: {
            //       appid: events.event._def.publicId,
            //       myid: $("#view-id").val(),
            //       ref,
            //       date: $("#view-date").val(),
            //     reason: $("#view-reason").val(),
            //     },
            //     xhrFields: {
            //       withCredentials: true,
            //     },
            //     crossDomain: true,
            //     success: (data) => {

            //       $("#VIEW_APPOINTMENT").modal("hide");
            //       location.reload();

            //     }
            //   });
            // }); 

            $(document).on("click", "#cancel-app", () => {
             var appid = events.event._def.publicId;
             $('#viewForm').attr("action", "cancel_appointment.php?app_id="+appid);
            }); 

            $(document).on("click", "#done-app", () => {
             var appid = events.event._def.publicId;
             console.log(appid);
             $('#viewForm').attr("action", "done_app.php?appid="+appid);
            });

          // $(document).on("click", "#done-app", () => {
          //   var ref=$("#refid").val();
          //   $.ajax({
          //     url: "done_app.php",
          //     type: "POST",
          //     dataType: "json",
          //     data: {
          //       appid: events.event._def.publicId,
          //       userid: $("#store-data").data("id"),
          //       date: $("#view-date").val(),
          //       reason: $("#view-reason").val(),
          //       myid: $("#view-id").val(),
          //       ref,
          //     },
          //     xhrFields: {
          //       withCredentials: true,
          //     },
          //     crossDomain: true,
          //     success: (data) => {

          //       $("#VIEW_APPOINTMENT").modal("hide");
          //       location.reload();
          //       alert('done');

          //     }
          //   });
          // });

        }
        });
        calendar.render();
      

        $(document).on("click", "#submit-personal", (e) => {

          // if (e.target.dataset.status == 0) {
          $.ajax({
            url: "insert_personal_app.php",
            type: "POST",
            dataType: "json",
            data: {
              userid: $("#store-data").data("id"),
              info: $("#personal-information").val(),
              date: $("#personal-date").val(),
              time: $("#personal-time").val(),
              timeto: $("#personal-time-to").val(),
              subject: $("#personal-sub").val()
            },
            xhrFields: {
              withCredentials: true,
            },
            crossDomain: true,
            success: (data) => {

              calendar.addEventSource(data);
              // calendar.refetchEvents();

              $("#personal-modal").modal("hide");
                  location.reload();

            }
          });

        });

        $(document).on("click", "#submit-req", (e) => {

          document.getElementById("submit-req").setAttribute("disabled", "");

          var natureArr = $('#nature:checked').map(function() {
            return this.value;
          }).get();

          var nature = JSON.stringify(natureArr);
          

          if (e.target.dataset.status == 0) {
            $.ajax({
              url: "insert_req.php",
              type: "POST",
              dataType: "json",
              data: {
                useridnumber: <?php echo $_SESSION['UserNumber'];?>,
                userid: $("#store-data").data("id"),
                information: $("#information").val(),
                type: $("#type").val(),
                date: $("#date-selected").val(),
                reason: $("#reason").val(),
                selectTimeslot: $("#selectTimeslot").val(),
                selectTimeslotto: $("#selectTimeslot-to").val(),
                // subject: $("#subject").val(),
                nature: nature,

                pos: $("#pos").val(),
                myid: $("#myid").val(),
                myname:$("#student_name").val(),
                status: 0,

              },
              xhrFields: {
                withCredentials: true,
              },
              crossDomain: true,
              success: (data) => {

                if (data.status == 1) {
                  document.getElementById("submit-req").removeAttribute("disabled");
                  calendar.addEventSource(data);
                  // calendar.refetchEvents();

                  $("#req-modal").modal("hide");
                  location.reload();
                } else if (data.status == 0) {
                  document.getElementById("submit-req").removeAttribute("disabled");
                  $("#req-modal").modal("hide");
                  Swal.fire('User have 1 appointment pending.');
                }
                

              }
            });

          } else if (e.target.dataset.status == 1) {
            $.ajax({
              url: "insert_req.php",
              type: "POST",
              dataType: "json",
              data: {
                useridnumber: <?php echo $_SESSION['UserNumber'];?>,
                userid: $("#store-data").data("id"),
                information: $("#information").val(),
                type: $("#type").val(),
                date: $("#date-selected").val(),
                reason: $("#reason").val(),
                selectTimeslot: $("#selectTimeslot").val(),
                selectTimeslotto: $("#selectTimeslot-to").val(),
                // subject: $("#subject").val(),
                nature: nature,

                pos: $("#pos").val(),
                myid: $("#myid").val(),
                myname:$("#student_name").val(),
                status: 1,
                meeting: $("#meetinglink").val()

              },
              xhrFields: {
                withCredentials: true,
              },
              crossDomain: true,
              success: (data) => {
                if (data.status == 1) {
                  document.getElementById("submit-req").removeAttribute("disabled");
                  calendar.addEventSource(data);
                  // calendar.refetchEvents();

                  $("#req-modal").modal("hide");
                  location.reload();
                } else if (data.status == 0) {
                  document.getElementById("submit-req").removeAttribute("disabled");
                  $("#req-modal").modal("hide");
                  Swal.fire('User have 1 appointment pending.');
                }
                

              }
            });
          }


        });

        $(document).on("click", "#submit-req-ref", (e) => {

        document.getElementById("submit-req-ref").setAttribute("disabled", "");
        var ref=$("#refid").val();
        
        var natureArr = $('#nature:checked').map(function() {
          return this.value;
        }).get();

        var nature = JSON.stringify(natureArr);
          

          if (e.target.dataset.status == 0) {
            $.ajax({
              url: "insert_req_ref.php",
              type: "POST",
              dataType: "json",
              data: {
                useridnumber: <?php echo $_SESSION['UserNumber'];?>,
                userid: $("#store-data").data("id"),
                information: $("#information").val(),
                type: $("#type").val(),
                date: $("#date-selected").val(),
                reason: $("#reason").val(),
                selectTimeslot: $("#selectTimeslot").val(),
                selectTimeslotto: $("#selectTimeslot-to").val(),
                // subject: $("#subject").val(),
                nature: nature,

                pos: $("#pos").val(),
                myid: $("#myid").val(),
                myname:$("#student_name").val(),
                ref,
                status: 0,

              },
              xhrFields: {
                withCredentials: true,
              },
              crossDomain: true,
              success: (data) => {

                if (data.status == 1) {
                  document.getElementById("submit-req-ref").removeAttribute("disabled");
                  calendar.addEventSource(data);
                  // calendar.refetchEvents();

                  $("#req-modal").modal("hide");
                  location.reload();
                } else if (data.status == 0) {
                  document.getElementById("submit-req-ref").removeAttribute("disabled");
                  $("#req-modal").modal("hide");
                  Swal.fire('User have 1 appointment pending.');
                }
                

              }
            });

          } else if (e.target.dataset.status == 1) {
            $.ajax({
              url: "insert_req_ref.php",
              type: "POST",
              dataType: "json",
              data: {
                useridnumber: <?php echo $_SESSION['UserNumber'];?>,
                userid: $("#store-data").data("id"),
                information: $("#information").val(),
                type: $("#type").val(),
                date: $("#date-selected").val(),
                reason: $("#reason").val(),
                selectTimeslot: $("#selectTimeslot").val(),
                selectTimeslotto: $("#selectTimeslot-to").val(),
                // subject: $("#subject").val(),
                nature: nature,

                pos: $("#pos").val(),
                myid: $("#myid").val(),
                myname:$("#student_name").val(),
                status: 1,
                ref,
                meeting: $("#meetinglink").val(),

              },
              xhrFields: {
                withCredentials: true,
              },
              crossDomain: true,
              success: (data) => {
                if (data.status == 1) {
                  document.getElementById("submit-req-ref").removeAttribute("disabled");
                  calendar.addEventSource(data);
                  // calendar.refetchEvents();

                  $("#req-modal").modal("hide");
                  location.reload();
                } else if (data.status == 0) {
                  document.getElementById("submit-req-ref").removeAttribute("disabled");
                  $("#req-modal").modal("hide");
                  Swal.fire('User have 1 appointment pending.');
                }
                

              }
            });
          }


          });


                });

              }
            });

  $(document).on("click", "#type", (e) => {

    if ($("#type").val() === "Walk-in") {
      document.getElementById("submit-req").setAttribute("data-status", "0");
      $("#meeting").hide();

    } else if ($("#type").val() === "Online") {
      document.getElementById("submit-req").setAttribute("data-status", "1");
      $("#meeting").show();

    }



  });


  $(document).on("click", "#viewsms", () => {


    $("#smith-container").toggle("fast");


  });

  function select_name() {
    $("#selectname").select2({
      placeholder: "Select User",
      ajax: {
        url: "get_all_users.php",
        type: "post",
        dataType: "json",
        delay: 250,
        data: function(params) {
          return {
            searchTerm: params.term, // search term

          };
        },
        processResults: function(response) {
          return {
            results: response,
          };
        },
        cache: true,
      },
      dropdownParent: "#req-modal",
    }).on("select2:select", function(e) {

      if (e.params.data.position === "student") {

        $("#myid").val(e.params.data.studid);

        $("#pos").val(e.params.data.program + "-" + e.params.data.level);

        $("#pos").data("position", e.params.data.position);

      } else if (e.params.data.position === "staff") {

        $("#myid").val(e.params.data.studid);

        $("#pos").val(e.params.data.position + "-" + e.params.data.department);

        $("#pos").data("position", e.params.data.position);

      }


    });
  }
</script>


<?php

        include('includes/gc___scripts.php');

?>


<?php } ?>