<?php
session_start(); 

include_once("../connections/connection.php");

$con = connection();


    
$user_id = $_SESSION['UserId'];

$user_query = "SELECT * FROM users WHERE user_id = '$user_id'";
$get_user = $con->query($user_query) or die($con->error);
$row_user = $get_user->fetch_assoc();


  $id_number = $row_user['id_number'];


$app_query = "SELECT * FROM appointments WHERE id_number = '$id_number'";
$get_app = $con->query($app_query) or die($con->error);
$row_app = $get_app->fetch_assoc();

 $appby = $row_app['app_by'];

include('includes/staff___header.php');
include('includes/staff___left-menu-area.php');
include('includes/staff___top-menu-area.php');
include('includes/staff___mobile_menu.php');
?>
<style type="text/css">
  .fc-daygrid-day-frame {
    border: 1px solid #b6e3f2;
  }

  .fc-day-today .fc-daygrid-day-frame {
    background-color: #b1eafc;
  }
</style>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css">
<div class="breadcome-area">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="breadcome-list">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="breadcome-heading">
                <!-- this is for the search bar that has been removed since this is a dashboard-->
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


<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <div id="VIEW_APPOINTMENT" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header header-color-modal bg-color-1">
          <h4 class="modal-title">Appointment Information</h4>
          <div class="modal-close-area modal-close-df">
            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
          </div>
        </div>


        <div class="modal-body">

          <div class="form-group-inner data-custon-pick" id="data_2">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-9">
                <label class="login2 pull-right" style="font-weight: bold;">ID</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="text" id="view-id" class="form-control" disabled />
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
                  <input type="text" id="view-time" class="form-control" disabled />
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
                <input type="text" id="view-reason" class="form-control" disabled />
              </div>
            </div>
          </div>


          <div class="form-group-inner data-custon-pick" id="data_2">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-9">
                <label class="login2 pull-right" style="font-weight: bold;">Date</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="date" id="view-date" class="form-control" disabled />
              </div>
            </div>
          </div>

          <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label class="login2 pull-right pull-right-pro"><span class="basic-ds-n">Type</span></label>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-9 col-xs-9">
                <input type="text" id="view-type" class="form-control" disabled />
              </div>
            </div>
          </div>
          <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right">Information</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="text" id="view-information" class="form-control" placeholder="Enter Appointment Information" disabled />
              </div>
            </div>
          </div>

        </div>


        <div class="modal-footer"><?php
            if($appby == 1){
            ?>
            <?php 
            }else{
              ?>
               <button type="button" id="cancel-app" class="btn btn-danger btn-md">Cancel Appointment</button>
              <?php } ?>
            
            <?php
            if($appby == 1){
            ?>
            <?php 
            }else{
              ?>
               <button type="button" id="done-app" class="btn btn-info btn-md">Done Appointment</button>
              <?php } ?>
          <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

</div>



<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <div id="ADD_APPOINTMENT" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header header-color-modal bg-color-1">
          <h4 class="modal-title">Add New Appointment</h4>
          <div class="modal-close-area modal-close-df">
            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
          </div>
        </div>


        <div class="modal-body">

        <input type="hidden" id="myid" class="form-control" disabled />
        <input type="hidden" id="fullname" class="form-control" disabled />
        <input type="hidden" id="pos" class="form-control" disabled />


          <!-- <div class="form-group-inner data-custon-pick" id="data_2">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-9">
                <label class="login2 pull-right" style="font-weight: bold;">ID</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="hidden" id="myid" class="form-control"  />
              </div>
            </div>
          </div>

          <div class="form-group-inner data-custon-pick" id="data_2">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-9">
                <label class="login2 pull-right" style="font-weight: bold;">Name</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="text" id="fullname" class="form-control" disabled />
              </div>
            </div>
          </div>

          <div class="form-group-inner data-custon-pick" id="data_2">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-9">
                <label class="login2 pull-right" style="font-weight: bold;">Position</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="text" id="pos" class="form-control" disabled />
              </div>
            </div>
          </div> -->

          <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right">Subject</label>
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
          </div>
          <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right">Time From</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="form-select-list">
                  <select id="selectTimeslot" class="form-control custom-select-value" name="timeslot">

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
          
          <!-- <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right">Concern</label>
              </div>
              <div class="col-lg-4 col-md-9 col-sm-9 col-xs-9">
                <div class="bt-df-checkbox">
                  <label>
                    <input class="pull-left radio-checked" type="checkbox"> Urgent
                  </label>
                </div>
              </div>
            </div>
          </div> -->

          <div class="form-group-inner data-custon-pick" id="data_2">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-9">
                <label class="login2 pull-right" style="font-weight: bold;">Date</label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="text" id="date-selected" class="form-control" disabled />
              </div>
            </div>
          </div>

          <div class="form-group-inner">
            <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right pull-right-pro"><span class="basic-ds-n">Type</span></label>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="form-select-list">
                  <select class="form-control custom-select-value" id="type">
                    <option>Walk-in</option>
                    <option>Online</option>
                  </select>
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


        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
          <button type="button" id="submit-req" class="btn btn-primary btn-md">Add</button>
        </div>
      </div>
    </div>
  </div>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
  $.ajax({
    url: "get_calendar_events.php",
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

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          themeSystem: "bootstrap",
          dayMaxEventRows: true,
          editable: false,
          initialView: "dayGridMonth",
          selectable: false,
          weekends: false,
          headerToolbar: {
            left: "prev,next,today",
            center: "title",
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
          },
          events: data,
          dateClick: function(info) {

            var selectedDate = new Date(info.dateStr);
            // Create a Date object for the current date
            var currentDate = new Date();

            if (selectedDate.getTime() >= currentDate.getTime()) {
              // console.log($("#store-data").data("id"));
              $("#ADD_APPOINTMENT").modal("show");
              $("#date-selected").val(info.dateStr);
              
            }
            
            let userid = $("#store-data").data("id");
            
            $.ajax({
              url: "get_data.php",
              type: "POST",
              dataType: "json",
              data: {
                userid: userid,
                datenow: info.dateStr
              },
              xhrFields: {
                withCredentials: true,
              },
              crossDomain: true,
              success: (data) => {

                $("#selectTimeslot").empty();

                $("#selectTimeslot").append(`
                    <option id="9:00-am" value="9:00 am">9:00 am</option>
                    <option id="10:00-am" value="10:00 am">10:00 am</option>
                    <option id="11:00-am" value="11:00 am">11:00 am</option>
                    <option id="1:00-pm" value="1:00 pm">1:00 pm</option>
                    <option id="2:00-pm" value="2:00 pm">2:00 pm</option>
                    <option id="3:00-pm" value="3:00 pm">3:00 pm</option>
                    <option id="4:00-pm" value="4:00 pm">4:00 pm</option>
                  `);

                $("#selectTimeslot-to").empty();

                $("#selectTimeslot-to").append(`
                    <option id="9:00-am-to" value="9:00 am">9:00 am</option>
                    <option id="10:00-am-to" value="10:00 am">10:00 am</option>
                    <option id="11:00-am-to" value="11:00 am">11:00 am</option>
                    <option id="1:00-pm-to" value="1:00 pm">1:00 pm</option>
                    <option id="2:00-pm-to" value="2:00 pm">2:00 pm</option>
                    <option id="3:00-pm-to" value="3:00 pm">3:00 pm</option>
                    <option id="4:00-pm-to" value="4:00 pm">4:00 pm</option>
                  `);

                $.each(data.time, (indx, time) => {


                  new_start = time.hour.replace(" ", "-");
                  new_end = time.hour_end.replace(" ", "-")

                  let text = "9:00-am 10:00-am 11:00-am 1:00-pm 2:00-pm 3:00-pm 4:00-pm";
                  let ret = text.replace(new_start, '{');
                  let final = ret.replace(new_end, '}');
                  let final_hours = final.replace(/.*?({.*}).*/, "$1");
                  let filtered_hour = final_hours.replace(/[\])}[{(]/g, '');

                  let array = filtered_hour.trim().split(' ');



                  if (array[0] === "") {

                  } else {
                    for (let i = 0; i < array.length; i++) {

                      document.getElementById(array[i] + "-to").setAttribute("disabled", "");
                      document.getElementById(array[i] + "-to").style.color = "red";

                      document.getElementById(array[i]).setAttribute("disabled", "");
                      document.getElementById(array[i]).style.color = "red";
                    }
                  }
                  document.getElementById(time.hour.replace(" ", "-") + "-to").setAttribute("disabled", "");
                  document.getElementById(time.hour.replace(" ", "-") + "-to").style.color = "red";
                  document.getElementById(time.hour_end.replace(" ", "-") + "-to").setAttribute("disabled", "");
                  document.getElementById(time.hour_end.replace(" ", "-") + "-to").style.color = "red";


                  document.getElementById(time.hour.replace(" ", "-")).setAttribute("disabled", "");
                  document.getElementById(time.hour.replace(" ", "-")).style.color = "red";
                  document.getElementById(time.hour_end.replace(" ", "-")).setAttribute("disabled", "");
                  document.getElementById(time.hour_end.replace(" ", "-")).style.color = "red";



                });

                $.each(data.time2, (indx, time) => {


                  new_start = time.hour.replace(" ", "-");
                  new_end = time.hour_end.replace(" ", "-")

                  let text = "9:00-am 10:00-am 11:00-am 1:00-pm 2:00-pm 3:00-pm 4:00-pm";
                  let ret = text.replace(new_start, '{');
                  let final = ret.replace(new_end, '}');
                  let final_hours = final.replace(/.*?({.*}).*/, "$1");
                  let filtered_hour = final_hours.replace(/[\])}[{(]/g, '');

                  let array = filtered_hour.trim().split(' ');



                  if (array[0] === "") {

                  } else {
                    for (let i = 0; i < array.length; i++) {

                      document.getElementById(array[i] + "-to").setAttribute("disabled", "");
                      document.getElementById(array[i] + "-to").style.color = "red";

                      document.getElementById(array[i]).setAttribute("disabled", "");
                      document.getElementById(array[i]).style.color = "red";
                    }
                  }
                  document.getElementById(time.hour.replace(" ", "-") + "-to").setAttribute("disabled", "");
                  document.getElementById(time.hour.replace(" ", "-") + "-to").style.color = "red";
                  document.getElementById(time.hour_end.replace(" ", "-") + "-to").setAttribute("disabled", "");
                  document.getElementById(time.hour_end.replace(" ", "-") + "-to").style.color = "red";


                  document.getElementById(time.hour.replace(" ", "-")).setAttribute("disabled", "");
                  document.getElementById(time.hour.replace(" ", "-")).style.color = "red";
                  document.getElementById(time.hour_end.replace(" ", "-")).setAttribute("disabled", "");
                  document.getElementById(time.hour_end.replace(" ", "-")).style.color = "red";



                });


                $("#myid").val(data.stud_id);
                $("#pos").val(data.position);
                $("#fullname").val(data.name);
              }
            });


            $(document).on("click", "#submit-req", () => {

              $.ajax({
                url: "insert_req.php",
                type: "POST",
                dataType: "json",
                data: {
                  useridnumber: //FOR NOTIFICATION
                  <?php
                    $guidanceQuery = "SELECT id_number FROM users WHERE position = 'Guidance'";
                    $Guidance = mysqli_query($con, $guidanceQuery);
                    $GuidanceID = $Guidance->fetch_assoc();
                    echo $GuidanceID['id_number'];
                  ?>,
                  userid: $("#store-data").data("id"),
                  information: $("#information").val(),
                  type: $("#type").val(),
                  date: $("#date-selected").val(),
                  reason: $("#reason").val(),
                  selectTimeslot: $("#selectTimeslot").val(),
                  selectTimeslotto: $("#selectTimeslot-to").val(),
                  subject: $("#subject").val(),
                  pos: $("#pos").val(),
                  myid: $("#myid").val()

                },
                xhrFields: {
                  withCredentials: true,
                },
                crossDomain: true,
                success: (data) => {

                  if (data.status == 0) {
                    Swal.fire('You have 1 appointment pending.');
                  } else if (data.status == 1) {
                    calendar.addEventSource(data);
                    // calendar.refetchEvents();

                    $("#ADD_APPOINTMENT").modal("hide");
                  }

                }
              });

            });



          },
          eventClick: function(events) {

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
                $("#view-time").val(data[0].timeslot);
                $("#view-id").val(data[0].id_number);


              }
            });


            $(document).on("click", "#cancel-app", () => {
              $.ajax({
                url: "delete_req.php",
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

          }



        });
        calendar.render();
      });

    }
  });
</script>


<?php
include('includes/staff___scripts.php');
?>