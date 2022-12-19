<?php

// Connect to the database
$conn = mysqli_connect('host', 'username', 'password', 'database');

// Check if an ID was passed in the AJAX request
if (isset($_GET['id']) ) {
  // Escape the ID to prevent SQL injection attacks
  $id = mysqli_real_escape_string($conn, $_GET['id']);

  // Retrieve the notification data from the database
  $query = "SELECT name, description, action_type FROM notifications WHERE id = '$id'";
  $result = mysqli_query($conn, $query);
  $notification = mysqli_fetch_assoc($result);

  // Return the notification data as a JSON object
  echo json_encode($notification);
}

// Close the database connection
mysqli_close($conn);



// // CHECK ALL APPOINTMENT FIRST IF IS TODAY -- make the appointment unread so that it can be seen by user
// $Appointment_query = "SELECT n.id, a.date FROM notifications n JOIN appointments a ON n.info_ID = a.id WHERE n.Type = 'Appointments'";
// $results = $con->query($Appointment_query) or die ($con->error);

// $currentDate = date('Y-m-d');
// while ($Appointment = mysqli_fetch_assoc($results)) {
//     if ($Appointment["date"]->format('Y-m-d') == $currentDate) {
//         $update_query = 'UPDATE notifications SET isRead = 0 WHERE id = $Appointment["id"]';
//         mysqli_query($con, $update_query);
//     }
// }

// // ICONS
// $appointment_icon = "educate-icon educate-checked edu-checked-pro admin-check-pro";
// $refferal_icon = "fa fa-cloud edu-cloud-computing-down";
// $rejection_icon = "fa fa-eraser edu-shield";
// $offense_icon = "fa fa-line-chart edu-analytics-arrow";

// //QUERY
// $id = $row_user['id_number'];
// $query = "SELECT n.*, u.first_name, u.last_name FROM notifications n JOIN users u ON n.from_user = u.id_number WHERE n.to_user = '$id' ORDER BY isRead ASC"; //CREate join para makuha name ng user
// $connect_query = mysqli_query($con, $query);

// //show notification
// while ($notification = mysqli_fetch_assoc($connect_query)) {
//     $from = $notification["from_user"];
//     $DateTime = $notification["notif_date"];
//     $infoID = $notification["info_ID"];
//     $type = $notification["Type"];
//     $isRead = $notification["isRead"];
//     $name = $notification["first_name"]." ".$notification["last_name"];

    

//     $description = "You have new notification";
    
//     // ICON TYPE & DESCRIPTION
//     switch ($type) {
//         //GAWA NG CODE NA MAGSESEND NG NOTIF IF YUNG NAKUHANG APPOINTMENT IS CURRENT DATE NA
//         case "Appointment":
//             $icon = $appointment_icon;

//             // if appointment check the date first
//             $getDate_query = "SELECT date FROM appointments WHERE id = '$infoID'"; //CREate join para makuha name ng user
//             $dateResult = mysqli_query($con, $getDate_query);
//             $Appointment_date = mysqli_fetch_assoc($dateResult);

//             $AppDate = new DateTime($Appointment_date["date"]);
            
//             if ($AppDate->format('Y-m-d') != $currentDate) {
//                 $description = "You have new appointment setted by ".$name;
//             }else{
//                 $description = "You have an appointment with ".$name." today";
//             }
//             break;

//         case "Referral":
//             $icon = $refferal_icon;
//             $description = $name." send you a new referral";
//             break;

//         case "Rejection":
//             $icon = $rejection_icon;
//             $description = $name." rejected your referral";
//             break;

//         case "Offense":
//             $icon = $offense_icon;
//             $description = "You have new offense given by ".$name;
//             break;

//         default:
//             $icon = $appointment_icon;
//             $description = "You have new notification";
//             break;
//     }

//     // CALCULATE TIME
//     $now = new DateTime();
//     $notif_DT = new DateTime($DateTime);
//     $diff = $now->diff($notif_DT);

//     if ($diff->d >= 1) {
//         $notifStrTime = $diff->d." days ago";
//     }
//     elseif ($diff->h > 1) {
//         $notifStrTime = $diff->h." hours ago";
//     }else{
//         $notifStrTime = "Just now";
//     }
    
//     if($isRead == 0){
//         $style = 'style="font-weight: bold;"';
//     }else{
//         $style = '';
//     }

//     echo '<li class ="notification-list" data-id = "'.$infoID.'" data-type="'.$type.'" '.$style.'>
//         <a href="">
//             <div class="notification-icon">
//                 <i class="'.$icon.'" aria-hidden="true"></i>
//             </div>
//             <div class="notification-content">
//                 <span class="notification-date">'.$notifStrTime.'</span>
//                 <h2>'.$name.'</h2>
//                 <p>'.$description.'</p>
//             </div>
//         </a>
//     </li>';
// }