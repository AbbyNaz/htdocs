<?php

    include_once("../Guidance_Counselor_UI/Notify.php");

    if(isset($_SESSION['UserId'])){
        $user_id = $_SESSION['UserId'];
        $user_query = "SELECT profile_picture,id_number, first_name, last_name FROM users WHERE user_id = '$user_id'";
        $user_con = $con->query($user_query) or die ($con->error);
        $row_user = $user_con->fetch_assoc();

        $id = $row_user['id_number'];
        $_SESSION['id_number'] = $row_user['id_number'];
    }

?>

<!-- Start Welcome area -->
    <div class="all-content-wrapper" id="store-data" data-id="<?php echo $_SESSION['UserId'] ?>">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="gc___dashboard.php"><img class="main-logo" src="img/sti_logo/.png" alt="" /></a>
                    </div>
                </div>
            </div> 
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="educate-icon educate-nav"></i>
                                                </button>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                           
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown" id="drop-down">
                                                    <a href="#" data-toggle="dropdown" role="button" id="show-messages" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="educate-icon educate-message edu-chat-pro" style="pointer-events: none;" aria-hidden="true"></i>
                                                        <small id="count_sms"></small>
                                                        <!-- <span class="indicator-ms"></span> -->
                                                    </a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        <ul class="message-menu" id="all-messages">
                                                        <?php
                                                            $Messages = [];

                                                            $getSMSGroups = "SELECT DISTINCT group_sms FROM sms";
                                                            $connect_group = mysqli_query($con, $getSMSGroups);

                                                            
                                                            while ($Groups = mysqli_fetch_assoc($connect_group)) {
                                                                $group = $Groups['group_sms'];

                                                                $Getusers = "SELECT first_name, last_name, id_number, profile_picture FROM  users WHERE user_id='$group'";
                                                                $connect_users = mysqli_query($con, $Getusers);
                                                                $users = $connect_users->fetch_assoc();

                                                                $getsms = "SELECT text_sms, sender FROM sms WHERE group_sms='$group' AND delete_status='0' ORDER BY id DESC LIMIT 1";
                                                                $connect_sms = mysqli_query($con, $getsms);
                                                                $sms = $connect_sms->fetch_assoc();

                                                                $Messages[] = ["name" => $users['first_name']." ".$users['last_name'],
                                                                                "id_number" => $users['id_number'],
                                                                                "profile_picture" => $users['profile_picture'],
                                                                                "group" => $group,
                                                                                "sender" => $sms['sender'],
                                                                                "message" => $sms['text_sms']];
                                                        
                                                            }

                                                            foreach ($Messages as $row) {
                                                                $profile = "";

                                                                if($row['profile_picture']){
                                                                    $profile = "../Guidance_Counselor_UI/sms_show_profile.php?id="+$row['id_number'];
                                                                }else{
                                                                    $profile = "../Guidance_Counselor_UI/img/contact/2.png";
                                                                }

                                                                if ($_SESSION['UserId'] == $row['sender']) {
                                                                    echo '<li style="width: 100%; cursor: pointer;" id="viewsms"  data-group="'.$row['group'].'">
                                                                            <a style="pointer-events: none;" href="'.$row['group'].'" id="toggle-sms">
                                                                                <div class="message-img" >
                                                                                    <img src="'.$profile.'" alt="" class="mCS_img_loaded" style=" border-radius: 50%;">
                                                                                </div>
                                                                                <div class="message-content">
                                                                                    <span class="message-date" >16 Sept</span>
                                                                                    <h2 >'.$row['name'].'</h2>
                                                                                    <p ><i>You:</i>'.$row['message'].'</p>
                                                                                </div>
                                                                            </a>
                                                                        </li>'; 
                                                                }else{
                                                                    echo '<li style="width: 100%; cursor: pointer; " id="viewsms"  data-group="'.$row['group'].'">
                                                                            <a style="pointer-events: none;" href="'.$row['group'].'" id="toggle-sms">
                                                                                <div class="message-img">
                                                                                    <img src="'.$profile.'" alt="" class="mCS_img_loaded" style=" border-radius: 50%;">
                                                                                </div>
                                                                                <div class="message-content">
                                                                                    <span class="message-date">16 Sept</span>
                                                                                    <h2 >'.$row['name'].'</h2>
                                                                                    <p >'.$row['message'].'</p>
                                                                                </div>
                                                                            </a>
                                                                        </li>'; 
                                                                }  

                                                            }


                                             
                                                        ?>

                                                            <!-- <li>
                                                                <a >
                                                                    <div class="message-img">
                                                                        <img src="img/contact/1.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Louie Ruiz</h2>
                                                                        <p>Please send your monthly reports as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a >
                                                                    <div class="message-img">
                                                                        <img src="img/contact/1.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Louie Ruiz</h2>
                                                                        <p>Please send your monthly reports as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a >
                                                                    <div class="message-img">
                                                                        <img src="img/contact/1.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Louie Ruiz</h2>
                                                                        <p>Please send your monthly reports as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a >
                                                                    <div class="message-img">
                                                                        <img src="img/contact/1.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Louie Ruiz</h2>
                                                                        <p>Please send your monthly reports as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a >
                                                                    <div class="message-img">
                                                                        <img src="img/contact/1.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Louie Ruiz</h2>
                                                                        <p>Please send your monthly reports as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li> -->

                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="sms.php">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="educate-icon educate-bell" aria-hidden="true"></i>
                                                        <?php
                                                            $Checkquery = "SELECT COUNT(id) as unread from notifications where to_user = '$id' and isRead = 0"; 
                                                            $getCount = mysqli_query($con, $Checkquery);
                                                            $Unread = mysqli_fetch_assoc($getCount);
                                                            if($Unread['unread'] > 0){
                                                                echo '<small>'.$Unread['unread'].'</small>';
                                                            }
                                                        ?>
                                                        
                                                    </a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                        <?php
                                                        
                                                                $query = "SELECT a.*
                                                                            FROM appointments a
                                                                            LEFT JOIN notifications n ON n.Type = 'Reminder' AND n.info_ID = a.id
                                                                            WHERE n.id IS NULL AND a.date = CURRENT_DATE";
                                                                
                                                                $result = $con->query($query) or die ($con->error);
                                                                
                                                                while ($Appointment = $result->fetch_assoc()) {
                                                                    Reminder($Appointment["id"], $Appointment["id_number"], $id);
                                                                }
                                                                
                                                                //QUERY
                                                                
                                                                $query = "SELECT n.*, u.first_name, u.last_name, u.profile_picture
                                                                        FROM notifications n
                                                                        JOIN users u
                                                                        ON n.from_user = u.id_number
                                                                        WHERE n.to_user = '$id'
                                                                        AND (n.Type = 'Appointment' OR n.Type = 'Referral' OR n.Type = 'Reminder' OR n.Type = 'Cancelled')
                                                                        ORDER BY isRead ASC"; //CREate join para makuha name ng user
                                                                $connect_query = mysqli_query($con, $query);

                                                                //show notification
                                                                while ($notification = mysqli_fetch_assoc($connect_query)) {
                                                                    $notif_id = $notification["id"];
                                                                    $from = $notification["from_user"];
                                                                    $DateTime = $notification["notif_date"];
                                                                    $infoID = $notification["info_ID"];
                                                                    $type = $notification["Type"];
                                                                    $isRead = $notification["isRead"];
                                                                    $name = $notification["first_name"]." ".$notification["last_name"];
                                                                    
                                                                    $description = "You have new notification";
                                                                    
                                                                    // ICON TYPE & DESCRIPTION
                                                                    switch ($type) {
                                                                        //GAWA NG CODE NA MAGSESEND NG NOTIF IF YUNG NAKUHANG APPOINTMENT IS CURRENT DATE NA
                                                                        case "Reminder": //reminder for appointments
                                                                            $description = "You have an appointment with ".$name." today";
                                                                            break;

                                                                        case "Appointment":
                                                                            $description = $name." request an appointment";
                                                                            break;

                                                                        case "Referral":
                                                                            $description = $name." send you a new referral";
                                                                            break;

                                                                        case "Cancelled":
                                                                            $description = $name." cancelled submitted referral";
                                                                            break;
                                                                    }

                                                                    // CALCULATE TIME
                                                                    date_default_timezone_set('Asia/Manila');
                                                                    $now = new DateTime(); //sometimes return late time
                                                                    $notif_DT = new DateTime($DateTime);
                                                                    $diff = $now->diff($notif_DT);

                                                                    if ($diff->d == 1) {
                                                                        $notifStrTime = $diff->d." day ago";
                                                                    }
                                                                    elseif ($diff->d > 1) {
                                                                        $notifStrTime = $diff->d." days ago";
                                                                    }
                                                                    elseif ($diff->h > 1) {
                                                                        $notifStrTime = $diff->h." hours ago";
                                                                    }
                                                                    elseif ($diff->i > 5) {
                                                                        $notifStrTime = $diff->i." minutes ago";
                                                                    }
                                                                    else{
                                                                        $notifStrTime = "Just now";
                                                                    }
                                                                    
                                                                    if($isRead == 0){
                                                                        $style = 'style="font-weight: bold;"';
                                                                    }else{
                                                                        $style = '';
                                                                    }

                                                                    if($notification["profile_picture"] != null){
                                                                        $profile = "../Guidance_Counselor_UI/notif_show_profile.php?id=".$from;
                                                                    }else{
                                                                        $profile = "../Guidance_Counselor_UI/img/users/1.jpg";
                                                                    }


                                                                    echo '<li onclick="showModal(this)" data-notif = "'.$notif_id.'" data-id = "'.$infoID.'" data-type="'.$type.'" '.$style.'>
                                                                            <div>
                                                                                <img class="notification-icon" src="'.$profile.'" alt="User Picture">
                                                                            </div>
                                                                            <div class="notification-content">
                                                                                <span class="notification-date" >'.$notifStrTime.'</span>
                                                                                <h2 style="margin-right : 20px">'.$name.'</h2>
                                                                                <p>'.$description.'</p>
                                                                            </div>
                                                                        </li>';

                                                                        //GAWA NG QUERY EVERYTIME MAGRELOAD AND PAGE CHECK
                                                                    // IF MY APPOINTMENTS TODAY AND INSERT NOTIF FROM DATABASE IF MERON
                                                                }
                                                                // KAPAG PININDOT YUNG NOTIF DAPAT MAGSESEND NG QUERY NA IUPDATE YUNG ISREAD TO 1
                                                            
                                                            ?>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="gc___notifications_table.php">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <?php if ($row_user['profile_picture'] != null) { ?>
                                                                <img style="object-fit: cover; height: 30px; width: 30px;" src="../Guidance_Counselor_UI/show_profile_picture.php" alt="" />
                                                            <?php } else { ?>
                                                                <img src="img/users/1.jpg" alt="profile_picture" />
                                                            <?php } ?>
                                                            
                                                    
                                                            <span class="admin-name">
                                                                
                                                                <?php echo $row_user['first_name']?> <?php echo $row_user['last_name']?>

                                                            </span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="gc___staff_profile.php?id=<?= $_SESSION['UserId']; ?>">My Profile</a>
                                                        </li>
                                                        <!-- <li><a href="#">Settings</a> -->
                                                        <!-- </li> -->
                                                        <li>
                                                            
                                                            <?php if(isset($_SESSION['UserEmail'])) { 
                                                                ?>
                                                                <a class="dropdown-item" href="../logout.php" data-toggle="modal" >
                                                                    Logout
                                                                </a>
                                                                
                                                            <?php
                                                                // $user_query = "SELECT id_number FROM users WHERE user_id = '$user_id'";
                                                                // $query_run = mysqli_query($con, $user_query);
                                                                // $row = mysqli_fetch_array($query_run);

                                                                // $current_date_time = date("Y-m-d H:i:s");
                                                                // $action_made = "Logged out";
                                                                // $IDNUMBER = $row['id_number'];
                                                                
                                                                // $add_logs = "INSERT INTO logs (`user_id`, `action_made`, `date_created`) VALUES ('$IDNUMBER', '$action_made', '$current_date_time')";
                                                                // $query_runs = $con->query($add_logs) or die($con->error);
                                                        } ?>

                                                        </li>
                                                    </ul>
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


<!-- REJECTION FORM -->
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div id="REJECTION_FORM" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header header-color-modal bg-color-1">
                            <h4 class="modal-title">Reject Referral</h4>
                            <div class="modal-close-area modal-close-df">
                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                            </div>
                        </div>

                        <form id="RejectForm" action="" method="POST">
                            <div class="modal-body">
                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Reason</label>
                                        </div>
                                        <div class="form-group res-mg-t-15 col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <textarea name="description" placeholder="Enter Reason For Rejection"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
                                <button type="submit" name="add_refferal" class="btn btn-primary btn-md">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

<!--------------------------------------- THIS IS THE MODAL FORM FOR THE REFERRAL DETAILS MODAL --------------------------------------------->

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div id="NOTIF_REFERRAL" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header header-color-modal bg-color-1">
                        <h4 class="modal-title">Referral Notification Details</h4>
                        <div class="modal-close-area modal-close-df">
                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                        </div>
                    </div>

                    <form id="ReferralForm" action="../Guidance_Counselor_UI/gc___referral.php" method="POST">
                        <div class="modal-body">

                            <!---------------------- DITO NAME NUNG NAGREFER ------------------------->
                            <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Referral From</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input id="From-User" type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <!---------------------- DITO DETAILS NUNG NIREFER NA STUDENT ------------------------->

                            <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">ID</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input id="Stud-ID" type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right"> Name</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input id="Stud-Name" type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right"> Reason for Referral</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input id="Reason" type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div id="cancelGroup" class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Cancel Reason</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <textarea id="cancelreason" type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" ></textarea> 
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                                <button type="submit" class="btn btn-primary btn-md">View Referral Details</button>
                                <button type="button" id="RejectButton" onclick="showRefModalTop(this)" class="btn btn-danger btn-md" data-ref-id="" >Reject</button>
                                <button id="setAppBtn" onclick="setRefAppointment(this)" data-ref-id="" class="btn btn-success btn-md">Set Appointment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>




<!--------------------------------------- THIS IS THE MODAL FORM FOR THE APPOINTMENT DETAILS MODAL FOR STUDENT APPOINTMENT--------------------------------------------->

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div id="NOTIF_APPOINTMENT" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header header-color-modal bg-color-1">
                        <h4 class="modal-title">Appointment Notification Details</h4>
                        <div class="modal-close-area modal-close-df">
                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                        </div>
                    </div>

                    <form id="AppNotificationForm" action="../Guidance_Counselor_UI/gc___all_appointment.php" method="POST">
                        <div class="modal-body">


                            <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">User Type</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input id="User-Type" type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">ID</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input id="User-ID" type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Name</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input id="User-Name"  type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Appointment Type</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input id="Appointment-Type" type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Appointment Time</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input id="Appointment-Time" type="text" readonly class="form-control"
                                            placeholder="Enter Student Name" id="stud_name" />
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="modal-footer">
                            
                            <button type="submit" class="btn btn-primary btn-md">View Appointments</button>
                            <button id="CancelAppointment" onclick="cancelAppointment(this)" data-AppID="" class="btn btn-success btn-md">Cancel Appointment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    

<style type="text/css">

    #smith-container {
    width: 0px;
    height: 0px;
    bottom: 0px;
    right: 0px;
    z-index: 999999;
    }

    #smith-chat-container {
    overflow: hidden;
    }

    .smith-chat-frame {
    z-index: 999999 !important;
    position: fixed !important;
    bottom: 20px;
    right: 20px;
    height: calc(100% - 20px - 20px);
    width: 400px !important;
    min-height: 250px !important;
    max-height: 480px !important;
    box-shadow: 0px 1px 4px rgba(13, 22, 26, 0.08), 0px 4px 16px rgba(13, 22, 26, 0.12), 0px 2px 12px rgba(13, 22, 26, 0.08);
    border-radius: 2px !important;
    overflow: hidden !important;
    opacity: 1 !important;
    }

    .smith-chat-bar {
    z-index: 999999 !important;
    position: fixed !important;
    bottom: 13px;
    right: 20px;
    height: 60px;
    width: 400px !important;
    box-shadow: 0px 1px 4px rgba(13, 22, 26, 0.08), 0px 4px 16px rgba(13, 22, 26, 0.12), 0px 2px 12px rgba(13, 22, 26, 0.08);
    border-radius: 2px !important;
    overflow: hidden !important;
    opacity: 1 !important;
    background: #fff;
    }



    #smith-container .smith-chat-frame {
    height: 100%;
    width: 100%;
    height: calc(100% - 20px - 76px - 20px);
    bottom: 79px;
    }

    #smith-container .smith-chat {
    display: flex;
    flex-direction: column;
    position: relative;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: #fff;
    }

    #smith-container .smith-chat-header {
    background: #fff;

    position: relative;
    top: 0;
    left: 0;
    right: 0;
    transition: height 0.16s ease-out;
    }

    #smith-container .smith-header-profile {
    padding: 32px 48px 16px 48px;
    box-sizing: border-box;
    text-align: center;
    }

    #smith-container .smith-header-profile-name {
    color: rgba(0, 18, 26, 0.93);
    font-size: 20px;
    font-weight: 600;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    margin-bottom: 4px;
    }

    #smith-container .smith-header-profile-intro {
    color: rgba(0, 18, 26, 0.59);
    font-size: 14px;
    line-height: 20px;
    margin-bottom: 4px;
    }

    #smith-container .smith-header-profile-cta a {
    color: #1E9FD6;
    font-size: 14px;
    text-decoration: none;
    opacity: 0.9;
    transition: opacity 0.15s ease-in-out;
    }

    #smith-container .smith-team-profile-full-cta a:hover {
    opacity: 1;
    }

    #smith-container .smith-chat-body {
    position: relative;
    flex: 1;
    background-color: #fff;
    }

    #smith-container .smith-conversation-container {
        position: relative;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    #smith-container .smith-conversation-body-parts {
        position: relative;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;

    }

    #smith-container .smith-conversation-parts {
        padding: 24px 20px 0;
        display: flex;
        flex-flow: row wrap;
    }

    #smith-container .smith-conversation-parts-wrapper {
        display: flex;
        min-height: 100%;
        flex-direction: column;
        justify-content: space-between;
    }

    #smith-container .smith-comment-container {
    position: relative;
    margin-bottom: 24px;
    }

    #smith-container .smith-comment-container-admin {
        float: left;
        padding-left: 40px;
        width: calc(100% - 48px);
    }

    #smith-container .smith-comment-container-admin-right {
        float: right;
        padding-left: 40px;

    }

    #smith-container .smith-comment-container-admin-avatar {
        position: relative;
        left: 0;
        bottom: 2px;
    }

    #smith-container .smith-comment-container-admin-avatar-right {
        position: relative;
        right: 0;
        bottom: 2px;
    }

    #smith-container .smith-comment-container-admin-avatar-right .smith-avatar {
        width: 28px;
        height: 28px;
        line-height: 28px;
        font-size: 14px;
    }

    #smith-container .smith-avatar {
        margin: 0 auto;
        border-radius: 50%;
        display: inline-block;
        vertical-align: middle;
    }

    #smith-container .smith-comment-container-admin-avatar .smith-avatar {
        width: 28px;
        height: 28px;
        line-height: 28px;
        font-size: 14px;
    }

    #smith-container .smith-avatar img {
        border-radius: 50%;
    }

    #smith-container .smith-comment-container-admin-avatar .smith-avatar img {
        width: 28px;
        height: 28px;
    }

    #smith-container .smith-comment:not(.smith-comment-with-body) {
        padding: 12px 20px;
        border-radius: 20px;
        position: relative;
        display: inline-block;
        width: auto;
        max-width: 75%;
    }

    #smith-container .smith-comment-right:not(.smith-comment-with-body) {
        padding: 12px 20px;
        border-radius: 20px;
        position: relative;
        display: inline-block;
        width: auto;
        max-width: 75%;
        left: 72px;
        background-color: #c4d6f2;
    }

    #smith-container .smith-comment-container-admin .smith-comment-right:not(.smith-comment-with-body) {
        color: rgba(0, 18, 26, 0.93);
        background-color: #EDF1F2;
    }

    #smith-container .smith-comment-right .smith-block-paragraph {
    font-size: 14px;
    line-height: 20px;
    }

    #smith-container .smith-comment-container-admin .smith-comment:not(.smith-comment-with-body) {
        color: rgba(0, 18, 26, 0.93);
        background-color: #EDF1F2;
    }

    #smith-container .smith-comment .smith-block-paragraph {
    font-size: 14px;
    line-height: 20px;
    }

    .smith-chat-bar-message {
    padding: 12px;
    display: flex;
    align-items: center;
    }

    .smith-chat-bar-message textarea {
    background-color: transparent;
    border-radius: 0;
    border: none;
    font-size: 14px;
    flex: 2;
    line-height: 1.25rem;
    max-height: 100px;
    outline: none;
    overflow-x: hidden;
    resize: none;
    padding: 0;
    margin: 0px 8px;
    }

    .btn {
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        user-select: none;
        border: 1px solid transparent;
        padding: .375rem .75rem;
        font-size: 14px;
        line-height: 1.5;
        border-radius: 2px;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }

    .send-btn {
        color: rgba(0, 18, 26, 0.59);
        background-color: #EDF1F2;
        border-color: #EDF1F2;
        min-width: 72px;
    }

    .send-btn:hover {
        cursor: pointer;
        color: rgba(0, 18, 26, 0.93);
        background-color: #D4DADD;
        border-color: #D4DADD;
    }

    .smith-launcher-frame {
        box-shadow: 0px 2px 4px rgba(0, 18, 26, 0.08), 0px 2px 16px rgba(0, 18, 26, 0.16);
        z-index: 2147482999 !important;
        position: fixed !important;
        bottom: 20px;
        right: 20px;
        height: 56px !important;
        width: 56px !important;
        border-radius: 100px !important;
        overflow: hidden !important;
        background: #1E9FD6 !important;
        opacity: 0.9;
        transition: box-shadow 0.26s cubic-bezier(.38,0,.22,1), opacity 0.26s ease-in-out;
    }

    .smith-launcher-frame-2 {
        box-shadow: 0px 2px 4px rgba(0, 18, 26, 0.08), 0px 2px 16px rgba(0, 18, 26, 0.16);
        z-index: 2147482999 !important;
        position: fixed !important;
        bottom: 20px;
        right: 20px;
        height: 56px !important;
        width: 56px !important;
        border-radius: 100px !important;
        overflow: hidden !important;
        background: #1E9FD6 !important;
        opacity: 0.9;
        transition: box-shadow 0.26s cubic-bezier(.38,0,.22,1), opacity 0.26s ease-in-out;
    }

    .smith-launcher-frame:hover {
    cursor: pointer;
    box-shadow: 0px 2px 4px rgba(0, 18, 26, 0.08), 0px 3px 12px rgba(0, 18, 26, 0.16), 0 2px 14px 0 rgba(0, 18, 26,.20);
    opacity: 1;
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

    .mesgs-1 {
    float: left;
    padding: 30px 15px 0 25px;
    width: 100% !important;
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
    .msg_history_1 {
    height: 410px;
    overflow-y: auto;
    }
</style>


<div id="smith-container" hidden="hidden">
  <div class="smith-chat-frame">
    <div id="smith-chat-container">

      <div class="smith-chat">
        <div class="smith-chat-header" style="background-color: #05728F;">

            <button id="close" style="float: right;">X</button>
            <h4 id="chat-name" style="padding: 5px; color: white;"></h4>
 
        </div>
        <div class="smith-chat-body">
          <div class="smith-conversation-container">
            <div class="smith-conversation-body-parts">
              <div class="smith-conversation-parts-wrapper">
            
                    <div class="mesgs-1">
                      <div class="msg_history_1" id="msg_history_1">

                        <div class="incoming_msg">
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
                        </div>



                      </div>
                      <div class="type_msg">

                      </div>
                    </div>
             
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>
  </div>
  <div class="smith-chat-bar">
    <div class="smith-chat-bar-message">
      <textarea placeholder="Type your message" id="message" rows="1"></textarea>
      <button type="button" class="btn btn-primary" id="send-sms">
        Send
      </button>
    </div>

  </div>
</div>

    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>

<script type="text/javascript">
 
var intervalID;

intervalID = setInterval(function() {
$.ajax({
    url: "notif.php",
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
      
    if (data.length == 0) {
    $("#count_sms").text("");      
    }else{

    $("#count_sms").text(data.length);    

    }    
    
    
    }
    })
    }, 2000);


// $(document).on("click", "#show-messages", (e)=>{
// $.ajax({
//     url: "my_messages.php",
//     type: "POST",
//     dataType: "json",
//     data: {
//        userid: $("#store-data").data("id"),
//     },
//     xhrFields: {
//         withCredentials: true,
//     },
//     crossDomain: true,
//     success: (data) => { 

//         $("#all-messages").empty();     
            
//         $.each(data.response, (indx, user)=>{

//             var profile = "";

//             if(user.profile_picture){
//                 profile = "../Guidance_Counselor_UI/sms_show_profile.php?id="+user.id_number;
//             }else{
//                 profile = "../Guidance_Counselor_UI/img/contact/2.png";
//             }

//             if ($("#store-data").data("id") == user.sender) {
//                 $("#all-messages").append(`
//                     <li style="width: 100%; cursor: pointer;" id="viewsms"  data-group="${user.group}">
//                         <a style="pointer-events: none;" href="${user.group}" id="toggle-sms">
//                             <div class="message-img" >
//                                 <img src="${profile}" alt="" class="mCS_img_loaded" style="border-radius: 50%;">
//                             </div>
//                             <div class="message-content" >
//                                 <span class="message-date" >16 Sept</span>
//                                 <h2 >${user.name}</h2>
//                                 <p ><i>You:</i> ${user.message}</p>
//                             </div>
//                         </a>
//                     </li>
//                 `); 
//             }else{
//                 $("#all-messages").append(`
//                     <li style="width: 100%; cursor: pointer;" id="viewsms"  data-group="${user.group}">
//                         <a style="pointer-events: none;" href="${user.group}" id="toggle-sms">
//                             <div class="message-img" >
//                                 <img src="${profile}" alt="" class="mCS_img_loaded" style="border-radius: 50%;">
//                             </div>
//                             <div class="message-content" >
//                                 <span class="message-date" >16 Sept</span>
//                                 <h2 >${user.name}</h2>
//                                 <p >${user.message}</p>
//                             </div>
//                         </a>
//                     </li>
//                 `); 
//             }      

//         });    
    
//     }
//     });
// });

$(document).on("click", "#viewsms", (e)=>{


    $.ajax({
        url: "all_sms.php",
        type: "POST",
        dataType: "json",
        data: {

            group: e.target.dataset.group

        },
        xhrFields: {
            withCredentials: true,
        },
        crossDomain: true,
        success: (data) => { 
        
        $("#smith-container").hide();      
        
        $("#msg_history_1").empty();
        
        $("#chat-name").text(data.name);

        $("#msg_history_1").data("rec", e.target.dataset.group);

        $.each(data.response, (indx, sms)=>{

            var userprofile = "";

            if(sms.profile_picture){
                userprofile = "../Guidance_Counselor_UI/sms_show_profile.php?id="+sms.id_number;
            }else{
                userprofile = "../Guidance_Counselor_UI/img/contact/2.png";
            }

        if (e.target.dataset.group == sms.sender) {

        $("#msg_history_1").append(`
        
        <div class="incoming_msg" id="sms-${sms.sms_id}">
          <div class="incoming_msg_img"> <img  style="border-radius: 50%;" src="${userprofile}" alt="sunil"> </div>
          <div class="received_msg">
            <div class="received_withd_msg">
             
     <!--       <div class="dropdown" style="position:relative; left: 181px; top: 26px;">
              <i class="fa fa-ellipsis-v dropdown-toggle" data-id="${sms.sms_id}" id="dropdownMenuButton${sms.sms_id}" data-toggle="dropdown" aria-expanded="false" style="cursor: pointer;" aria-hidden="true"></i>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" id="delete-sms" data-id="${sms.sms_id}" style="cursor: pointer;">Delete</a></li>
              </ul>
            </div> -->

              <p>${sms.sms} 

              </p>
              <span class="time_date">${sms.date}</span></div>
          </div>
        </div>




        `); 

        }else{

        $("#msg_history_1").append(`

        <div class="outgoing_msg" id="sms-${sms.sms_id}" style="z-index: 1000000000000;">

          <div class="sent_msg">
        <div class="dropdown" style="position:relative; right: 12px; top: 24px;">
          <i class="fa fa-ellipsis-v dropdown-toggle" data-id="${sms.sms_id}" id="dropdownMenuButton${sms.sms_id}" data-toggle="dropdown" aria-expanded="false" style=" cursor: pointer; color: black;" aria-hidden="true"></i>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton${sms.sms_id}">
            <li><a class="dropdown-item" id="delete-sms" data-id="${sms.sms_id}" style="cursor: pointer;">Delete</a></li>
          </ul>
        </div>
            <p>${sms.sms} 
            </p>
            <span class="time_date">${sms.date}</span> </div>
        </div>

        `);  

        }   

        });

        document.getElementById("drop-down").setAttribute("class", "nav-item dropdown");

        $("#smith-container").show();    

        const myTimeout = setTimeout(myStopFunction, 1000);

        function myStopFunction() {
            var objDiv = document.getElementById("msg_history_1");
            objDiv.scrollTop = 100000;
        }

        $(document).on('keypress',function(e) {
            if(e.which == 13) {

                $.ajax({
                    url: "send_sms.php",
                    type: "POST",
                    dataType: "json",
                    data: {
                      sender: $("#store-data").data("id"),     
                      reciever: $("#msg_history_1").data("rec"),
                      text: $("#message").val()  

                    },
                    xhrFields: {
                        withCredentials: true,
                    },
                    crossDomain: true,
                    success: (data) => {    

                    $("#msg_history_1").append(`
                    
                        <div class="outgoing_msg">
                          <div class="sent_msg">
                            <p>${$("#message").val()}</p>
                            <span class="time_date">${data.date}</span> </div>
                        </div>

                    `);    

                        const myTimeout = setTimeout(myStopFunction, 1000);

                        function myStopFunction() {
                            var objDiv = document.getElementById("msg_history_1");
                            objDiv.scrollTop = 100000;
                        }


                    $("#message").val("");

                    } 
                    });


            }
        });


 
        }
        });


        intervalID = setInterval(function() {
        $.ajax({
            url: "render_sms.php",
            type: "POST",
            dataType: "json",
            data: {

                group: e.target.dataset.group,
                userid: $("#store-data").data("id"),

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

                if (e.target.dataset.group == sms.sender) {

                $("#msg_history_1").append(`
                
                <div class="incoming_msg">
                  <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                  <div class="received_msg">
                    <div class="received_withd_msg">
                      <p>${sms.sms}</p>
                      <span class="time_date">${sms.date}</span></div>
                  </div>
                </div>

                `); 

                }else{


                }   

                });
            }

            }
            })
            }, 2000);



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


$(document).on("click", "#close", ()=>{

  clearInterval(intervalID);
    
  $("#smith-container").toggle("fast");


});



$(document).on("click", "#send-sms", ()=>{


$.ajax({
    url: "send_sms.php",
    type: "POST",
    dataType: "json",
    data: {
      sender: $("#store-data").data("id"),     
      reciever: $("#msg_history_1").data("rec"),
      text: $("#message").val()  

    },
    xhrFields: {
        withCredentials: true,
    },
    crossDomain: true,
    success: (data) => {    

    $("#msg_history_1").append(`
    
        <div class="outgoing_msg">
          <div class="sent_msg">
            <p>${$("#message").val()}</p>
            <span class="time_date">${data.date}</span> </div>
        </div>

    `);    

        const myTimeout = setTimeout(myStopFunction, 1000);

        function myStopFunction() {
            var objDiv = document.getElementById("msg_history_1");
            objDiv.scrollTop = 100000;
        }


    $("#message").val("");

    } 
    });


});


function setRefAppointment(button){
    var refID = $(button).data('ref-id');

    $('#ReferralForm').attr("action", "../Guidance_Counselor_UI/gc___dashboard.php?ref_id="+refID+"");
}

function cancelAppointment(button){
    var AppID = $(button).data('AppID');
    
    $('#AppNotificationForm').attr("action", "../Guidance_Counselor_UI/cancel_appointment.php?app_id="+AppID+"");
}

function showRefModalTop(button){
    var refID = $(button).data('ref-id');

    $('#RejectForm').attr("action", "../Guidance_Counselor_UI/RefRejectQuery.php?ref_id="+refID+"");

    $('#REJECTION_FORM').modal('show');
    
}

function showModal(li){
    
    // Get the notification ID from the clicked element
    var id = $(li).data('id');
    var type = $(li).data('type');
    var notif_id = $(li).data('notif');

    // Send an AJAX request to the server with the ID
    $.ajax({
        
        url: '../Guidance_Counselor_UI/notifications.php',
        data: {id: id,
                type : type,
                notif_id : notif_id
                },
        success: function(data) {
            // Show the modal form
            switch (type) {
                case 'Appointment':
                case 'Reminder':
                    var Appointment = JSON.parse(data);
                    var name = Appointment.name;
                    var id_number = Appointment.id_number;
                    var user_type = Appointment.user_type;
                    var Appointment_time = Appointment.date +' ('+Appointment.timeslot+' - '+Appointment.timeslot_end+')';
                    var Appointment_type = Appointment.appointment_type;
                    
                    $('#CancelAppointment').data('AppID', id);
                    

                    $('#User-Type').val(user_type);
                    $('#User-ID').val(id_number);
                    $('#User-Name').val(name);
                    $('#Appointment-Type').val(Appointment_type);
                    $('#Appointment-Time').val(Appointment_time);
                    $('#NOTIF_APPOINTMENT').modal('show');
                    break;
                case 'Referral':
                case 'Cancelled':
                    var Referral = JSON.parse(data);
                    var from = Referral.referrer_fname+" "+Referral.referrer_lname;
                    var stud_id = Referral.Student_ID;
                    var stud_name = Referral.Student_fname+" "+Referral.Student_lname;
                    var reason = Referral.reason;
                    var cancelreason = Referral.Cancel_Reason;

                    var status = Referral.ref_status;

                    
                    $('#setAppointment').attr("href", "../Guidance_Counselor_UI/gc___dashboard.php?ref_id="+Referral.ref_id+"");
                    $('#RejectButton').data('ref-id', id);
                    $('#setAppBtn').data('ref-id', id);

                    $('#From-User').val(from);
                    $('#Stud-ID').val(stud_id);
                    $('#Stud-Name').val(stud_name);
                    $('#Reason').val(reason);

                    $('#cancelreason').val(cancelreason);
                    $("#cancelGroup").hide();

                    if(status.includes('Cancelled') || status.includes('Complete') ){
                        $("#RejectButton").hide();
                        $("#setAppBtn").hide();
                    }
                    if(type == 'Cancelled'){
                        $("#cancelGroup").show();
                    }
                    

                    $('#NOTIF_REFERRAL').modal('show');
                    break;
            }
            
        }
    });
}

</script>