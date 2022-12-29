<?php
session_start();

include_once("../connections/connection.php");

if (!isset($_SESSION['UserEmail'])) {

  echo "<script>window.open('../loginForm.php','_self')</script>";
} else {

  $con = connection();

  // if (isset($_POST['add_staff'])) {

  //   $staff_id = $_POST['staff_id'];
  //   $last_name = $_POST['last_name'];
  //   $first_name = $_POST['first_name'];
  //   $middle_name = $_POST['middle_name'];
  //   $address = $_POST['address'];
  //   $contact = $_POST['contact'];
  //   $gender = $_POST['gender'];
  //   $department = $_POST['department'];
  //   $program = $_POST['program'];
  //   $level = $_POST['level'];
  //   $email = $_POST['email'];
  //   $password = $_POST['password'];
  //   $position = "Staff";
  //   $status = "Active";
  //   $role = "2";

  //   $image = $_FILES['image']['name'];
  //   $temp_name = $_FILES['image']['tmp_name'];
  //   move_uploaded_file($temp_name, "img/student/$image");

  //   $add_staff = "INSERT INTO users (`id_number`, `last_name`, `first_name`, `middle_name`, `address`, `contact`, " .
  //     "`gender`, `department`, `program`, `level`, `position`, `status`, `image`, `email`, `password`, `role`) " .
  //     "VALUES ('$staff_id','$last_name','$first_name','$middle_name','$address','$contact','$gender','$department', " .
  //     "'$program','$level','$position','$status','$image','$email','$password','$role')";
  //   $con->query($add_staff) or die($con->error);
  //   header("Location: gc___all-staff.php");
  // }


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

    <?php include('includes/staff___left-menu-area.php') ?>
    <?php include('includes/staff___top-menu-area.php') ?>
    <?php include('includes/staff___mobile_menu.php')  ?>

<style type="text/css">
  
  .active_chat_new{
    background-color: #bee9fa;
  }

.container{max-width:1170px; margin:revert;}
img{ max-width:100%;}
.inbox_people {
  background: #f8f8f8 none repeat scroll 0 0;
  float: left;
  overflow: hidden;
  width: 40%; border-right:1px solid #c4c4c4;
}
.inbox_msg {
  border: 1px solid #c4c4c4;
  clear: both;
  overflow: hidden;
}
.top_spac{ margin: 20px 0 0;}


.recent_heading {float: left; width:40%;}
.srch_bar {
  display: inline-block;
  text-align: right;
  width: 60%;
}
.headind_srch{ padding:10px 29px 10px 20px; overflow:hidden; border-bottom:1px solid #c4c4c4;}

.recent_heading h4 {
  color: #05728f;
  font-size: 21px;
  margin: auto;
}
.srch_bar input{ border:1px solid #cdcdcd; border-width:0 0 1px 0; width:80%; padding:2px 0 4px 6px; background:none;}
.srch_bar .input-group-addon button {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  padding: 0;
  color: #707070;
  font-size: 18px;
}
.srch_bar .input-group-addon { margin: 0 0 0 -27px;}

.chat_ib h5{ font-size:15px; color:#464646; margin:0 0 8px 0;}
.chat_ib h5 span{ font-size:13px; float:right;}
.chat_ib p{ font-size:14px; color:#989898; margin:auto}
.chat_img {
  float: left;
  width: 11%;
}
.chat_ib {
  float: left;
  padding: 0 0 0 15px;
  width: 88%;
}

.chat_people{ overflow:hidden; clear:both;}
.chat_list {
  border-bottom: 1px solid #c4c4c4;
  margin: 0;
  padding: 18px 16px 10px;
}
.inbox_chat { height: 550px; overflow-y: scroll;}

.active_chat{ background:#ebebeb;}

.incoming_msg_img {
  display: inline-block;
  width: 6%;
}
.received_msg {
  display: inline-block;
  padding: 0 0 0 10px;
  vertical-align: top;
  width: 92%;
 }
 .received_withd_msg p {
  background: #ebebeb none repeat scroll 0 0;
  border-radius: 3px;
  color: #646464;
  font-size: 14px;
  margin: 0;
  padding: 5px 10px 5px 12px;
  width: 100%;
}
.time_date {
  color: #747474;
  display: block;
  font-size: 12px;
  margin: 8px 0 0;
}
.received_withd_msg { width: 57%;}
.mesgs {
  float: left;
  padding: 30px 15px 0 25px;
  width: 60%;
}

 .sent_msg p {
  background: #05728f none repeat scroll 0 0;
  border-radius: 3px;
  font-size: 14px;
  margin: 0; color:#fff;
  padding: 5px 10px 5px 12px;
  width:100%;
}
.outgoing_msg{ overflow:hidden; margin:26px 0 26px;}
.sent_msg {
  float: right;
  width: 46%;
}
.input_msg_write input {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  color: #4c4c4c;
  font-size: 15px;
  min-height: 48px;
  width: 100%;
}

.type_msg {border-top: 1px solid #c4c4c4;position: relative;}
.msg_send_btn {
  background: #05728f none repeat scroll 0 0;
  border: medium none;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  font-size: 17px;
  height: 33px;
  position: absolute;
  right: 0;
  top: 11px;
  width: 33px;
}
.messaging { padding: 0 0 50px 0;}
.msg_history {
  height: 516px;
  overflow-y: auto;
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
                    <!-- i remove the search bar because there is already a search bar in the table area -->
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <ul class="breadcome-menu">
                    <li><a href="gc___dashboard.php">Home</a> <span class="bread-slash">/</span>
                    </li>
                    <li><span class="bread-blod">Inbox</span>
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




    <!-- Static Table Start -->

    <div class="data-table-area mg-b-15">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline13-list">
              <div class="sparkline13-hd">
                <div class="main-sparkline13-hd">
                 
                </div>
              </div>
              <div class="sparkline13-graph">

                <div class="datatable-dashv1-list custom-datatable-overright">

                 <div class="row">
                   
<div class="container">
<h3 class=" text-center">Messaging</h3>
<div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Recent</h4>
            </div>

          </div>
          <div class="inbox_chat" id="inbox_chat">

            <div class="chat_list active_chat" id="select-user">
              <div class="chat_people" style="pointer-events: none;">
                <div class="chat_img" style="pointer-events: none;"> 
                  <img style="pointer-events: none;"  src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> 
                </div>
                <div class="chat_ib" style="pointer-events: none;">
                  <h5 style="pointer-events: none;">Sunil Rajput <span style="color: gray; font-size: 20px;">●</span> </span></h5>
                  <p style="pointer-events: none;">Test, which is a new approach to have all solutions 
                    astrology under one roof.</p>
                </div>
              </div>
            </div>

            <div class="chat_list" id="select-user">
              <div class="chat_people" style="pointer-events: none;">
                <div class="chat_img" style="pointer-events: none;"> 
                  <img style="pointer-events: none;"  src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> 
                </div>
                <div class="chat_ib" style="pointer-events: none;">
                  <h5 style="pointer-events: none;">Sunil Rajput <span style="color: gray; font-size: 20px;">●</span> </span></h5>
                  <p style="pointer-events: none;">Test, which is a new approach to have all solutions 
                    astrology under one roof.</p>
                </div>
              </div>
            </div>


          </div>
        </div>
        <div class="mesgs">
          <div class="msg_history" id="msg_history">

<!--             <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>Test which is a new approach to have all
                    solutions</p>
                  <span class="time_date"> 11:01 AM    |    June 9</span></div>
              </div>
            </div>

            <div class="outgoing_msg">
              <div class="sent_msg">
                <p>Test which is a new approach to have all
                  solutions</p>
                <span class="time_date"> 11:01 AM    |    June 9</span> </div>
            </div> -->



          </div>
          <div class="type_msg">
            <div class="input_msg_write">
              <input type="text" id="message-send" class="write_msg" placeholder="Type a message" />
              <button class="msg_send_btn" id="send-text" type="button"><i class="fa fa-paper-plane-o" style="pointer-events: none;" aria-hidden="true"></i></button>
            </div>
          </div>
        </div>
      </div>
      
      
    
      
    </div></div>

                 </div> 

 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Static Table End -->



    <?php
    include('includes/staff___scripts.php');
    ?>

    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>

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


    <script type="text/javascript">
      
    var intervalID;  

    $.ajax({
        url: "all_users.php",
        type: "POST",
        dataType: "json",
        data: {

            userid: $("#store-data").data("id")

        },
        xhrFields: {
            withCredentials: true,
        },
        crossDomain: true,
        success: (data) => { 
        
        $("#inbox_chat").empty();
          
        $.each(data.response, (index, user)=>{
            var userprofile = "";

            if(user.profile_picture){
                userprofile = "../Staff_UI/sms_show_profile.php?id="+user.id_number;
            }else{
                userprofile = "../Staff_UI/img/profile/prof2.png";
            }

        $("#inbox_chat").append(`
            <div class="chat_list select-user" id="user-${user.id}" data-id="${user.id}">
              <div class="chat_people" style="pointer-events: none;">
                <div class="chat_img" style="pointer-events: none;"> 
                  <img style="pointer-events: none; border-radius: 50%;"  src="${userprofile}" alt="sunil"> 
                </div>
                <div class="chat_ib" style="pointer-events: none;">
                  <h5 style="pointer-events: none;">${user.name} <span style="color: ${(user.status == 1) ? 'green' :'gray'}; font-size: 20px;">●</span> </span></h5>
                  <p style="pointer-events: none;">${user.text}</p>
                </div>
              </div>
            </div>        
        `);  

        });

        }
        });


    $(document).on("click", ".select-user", (e)=>{

    clearInterval(intervalID);
    
    $.ajax({
        url: "sms_per_user.php",
        type: "POST",
        dataType: "json",
        data: {

            user: e.target.dataset.id,
            myid: $("#store-data").data("id")

        },
        xhrFields: {
            withCredentials: true,
        },
        crossDomain: true,
        success: (data) => { 

        document.getElementById("user-"+e.target.dataset.id).setAttribute("class", "chat_list select-user active_chat_new");  

        $("#send-text").data("rec", e.target.dataset.id);

        $("#msg_history").empty();

        if (data.status == 1) {
        $.each(data.response, (index, sms)=>{

            var profile = "";

            if(sms.profile_picture){
                profile = "../Staff_UI/sms_show_profile.php?id="+sms.id_number;
            }else{
                profile = "../Staff_UI/img/profile/prof2.png";
            }

        if (e.target.dataset.id == sms.sender) {

        $("#msg_history").append(`
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img style="border-radius: 50%;" src="${profile}" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>${sms.text_sms}</p>
                  <span class="time_date">${sms.date}</span></div>
              </div>
            </div>        
        `); 

        } else {

        $("#msg_history").append(`
        <div class="outgoing_msg" id="sms-${sms.sms_id}" style="z-index: 1000000000000;">

          <div class="sent_msg">
        <div class="dropdown" style="position:relative; right: 12px; top: 24px;">
          <i class="fa fa-ellipsis-v dropdown-toggle" data-id="${sms.sms_id}" id="dropdownMenuButton${sms.sms_id}" data-toggle="dropdown" aria-expanded="false" style=" cursor: pointer; color: black;" aria-hidden="true"></i>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton${sms.sms_id}">
            <li><a class="dropdown-item" id="delete-sms" data-id="${sms.sms_id}" style="cursor: pointer;">Delete</a></li>
          </ul>
        </div>
            <p>${sms.text_sms} 
            </p>
            <span class="time_date">${sms.date}</span> </div>
        </div>          
        `); 

        }

        });

        $(document).on('keypress',function(e) {
            if(e.which == 13) {

            $.ajax({
                url: "send_sms.php",
                type: "POST",
                dataType: "json",
                data: {
                  sender: $("#store-data").data("id"),     
                  reciever: $("#send-text").data("rec"),
                  text: $("#message-send").val()  

                },
                xhrFields: {
                    withCredentials: true,
                },
                crossDomain: true,
                success: (data) => { 



                $("#msg_history").append(`
                    <div class="outgoing_msg">
                      <div class="sent_msg">
                        <p>${$("#message-send").val()}</p>
                        <span class="time_date">${data.date}</span> </div>
                    </div>          
                `);   

                $("#message-send").val("");

                var objDiv = document.getElementById("msg_history");
                objDiv.scrollTop = objDiv.scrollHeight;

                } 
                });


            }
        });

        var objDiv = document.getElementById("msg_history");
        objDiv.scrollTop = objDiv.scrollHeight;
  
        }else{

        }

        }
        });

        intervalID = setInterval(function() {
        $.ajax({
            url: "render_user_sms.php",
            type: "POST",
            dataType: "json",
            data: {

                user: e.target.dataset.id

            },
            xhrFields: {
                withCredentials: true,
            },
            crossDomain: true,
            success: (data) => { 
            
            console.log(data.response.length);

            if (data.response.length == 0) {

            }else{
                $.each(data.response, (indx, sms)=>{

                console.log(e.target.dataset.group +"=="+ sms.sender)  
                  
                if (e.target.dataset.group == sms.sender) {


                }else{

                $("#msg_history").append(`
                    <div class="incoming_msg">
                      <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p>${sms.text_sms}</p>
                          <span class="time_date">${sms.date}</span></div>
                      </div>
                    </div>        
                `); 

                }   

                });
            }

            }
            })
            }, 2000);



    });



$(document).on("click", "#send-text", ()=>{


$.ajax({
    url: "send_sms.php",
    type: "POST",
    dataType: "json",
    data: {
      sender: $("#store-data").data("id"),     
      reciever: $("#send-text").data("rec"),
      text: $("#message-send").val()  

    },
    xhrFields: {
        withCredentials: true,
    },
    crossDomain: true,
    success: (data) => { 



    $("#msg_history").append(`
        <div class="outgoing_msg">
          <div class="sent_msg">
            <p>${$("#message-send").val()}</p>
            <span class="time_date">${data.date}</span> </div>
        </div>          
    `);   

    $("#message-send").val("");
    var objDiv = document.getElementById("msg_history");
    objDiv.scrollTop = objDiv.scrollHeight;


    } 
    });


});


$(document).on("click", "#delete-sms", (e)=>{

   
    
    $.ajax({
        url: "delete_sms.php",
        type: "POST",
        dataType: "json",
        data: {

            id: e.target.dataset.id

        },
        xhrFields: {
            withCredentials: true,
        },
        crossDomain: true,
        success: (data) => {    

         $("#sms-"+e.target.dataset.id).remove();    

        } 
        });


});


    </script>


  </body>

  </html>

<?php } ?>