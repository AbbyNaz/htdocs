<?php

include_once("../connections/connection.php");

global $con;
$con = connection();

function Notify($Type, $id) {
    

    switch ($Type) {
        case 'Referral':
            $from = $_SESSION['id_number'];
            $type = $Type;
            $infoID = $id;
            $isRead = 0;
            $notif_date = date_format(new DateTime(), 'Y-m-d H:i:s');

            $notify = "INSERT INTO `notifications`(`from_user`, `to_user`, `Type`, `info_ID`, `isRead`, `notif_date`)
                    VALUES ('$from',
                            (SELECT id_number FROM users WHERE position = 'Guidance'),
                            '$type',
                            '$infoID',
                            '$isRead',
                            '$notif_date')";
            $notified = mysqli_query($GLOBALS['con'], $notify);

            return $notified;

            break;
        case 'Rejection':
            $from = $_SESSION['id_number'];
            $type = $Type;
            $infoID = $id;
            $isRead = 0;
            $notif_date = date_format(new DateTime(), 'Y-m-d H:i:s');

            $notify = "INSERT INTO `notifications`(`from_user`, `to_user`, `Type`, `info_ID`, `isRead`, `notif_date`)
                    VALUES ('$from',
                            (SELECT u.id_number FROM refferals r JOIN users u ON r.reffered_by = u.user_id WHERE r.ref_id = '$infoID'),
                            '$type',
                            '$infoID',
                            '$isRead',
                            '$notif_date')";
            $notified = mysqli_query($GLOBALS['con'], $notify);

            return $notified;

            break;
        case 'Appointment':
            $from = $_SESSION['id_number'];
            $type = $Type;
            $infoID = $id;
            $isRead = 0;
            $notif_date = date_format(new DateTime(), 'Y-m-d H:i:s');

            $notify = "INSERT INTO `notifications`(`from_user`, `to_user`, `Type`, `info_ID`, `isRead`, `notif_date`)
                    VALUES ('$from',
                            (SELECT id_number FROM appointments WHERE id = '$infoID'),
                            '$type',
                            '$infoID',
                            '$isRead',
                            '$notif_date')";
            $notified = mysqli_query($GLOBALS['con'], $notify);

            return $notified;


            break;
            case 'Offense':
                $from = $_SESSION['id_number'];
                $type = $Type;
                $infoID = $id;
                $isRead = 0;
                $notif_date = date_format(new DateTime(), 'Y-m-d H:i:s');
    
                $notify = "INSERT INTO `notifications`(`from_user`, `to_user`, `Type`, `info_ID`, `isRead`, `notif_date`)
                        VALUES ('$from',
                                (SELECT student_id FROM offense_monitoring WHERE id = '$infoID'),
                                '$type',
                                '$infoID',
                                '$isRead',
                                '$notif_date')";
                $notified = mysqli_query($GLOBALS['con'], $notify);
    
                return $notified;
    
    
                break;
            
    }
        
}

function Reminder( $id, $user1, $user2) {
    // Remind USER1
    $type = 'Reminder';
    $infoID = $id;
    $isRead = 0;
    $notif_date = date_format(new DateTime(), 'Y-m-d H:i:s');

    $notify = "INSERT INTO `notifications`(`from_user`, `to_user`, `Type`, `info_ID`, `isRead`, `notif_date`)
            VALUES ('$user1',
                    '$user2',
                    '$type',
                    '$infoID',
                    '$isRead',
                    '$notif_date')";
    $notified = mysqli_query($GLOBALS['con'], $notify);

    // Remind USER2
    $notify = "INSERT INTO `notifications`(`from_user`, `to_user`, `Type`, `info_ID`, `isRead`, `notif_date`)
            VALUES ('$user2',
                    '$user1',
                    '$type',
                    '$infoID',
                    '$isRead',
                    '$notif_date')";
    $notified = mysqli_query($GLOBALS['con'], $notify);

    return $notified;

}