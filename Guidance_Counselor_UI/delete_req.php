<?php 
include 'vendor/autoload.php'; 

// FOR CANCELLING APPOINTMENT 
// NOT NEEDED ANYMORE

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';

$appid = $_POST['appid'];
$myid = $_POST['myid'];


DB::query("UPDATE users SET limit_app=%i WHERE id_number=%i", 0, $myid);


$check = DB::query("SELECT * FROM appointments WHERE id='$appid'");


foreach ($check as $row){

    $timeslot = $row['timeslot'];
    $timeslot_end = $row['timeslot_end'];
    $date = $row['date'];
    $user_type = $row['user_type'];
    $ref_id = $row['ref_id'];
    $id_number = $row['id_number'];
    $name = $row['name'];
    $nature = $row['nature'];
    $subject = $row['subject'];
    $appointment_type = $row['appointment_type'];
    $info = $row['info'];
    $app_status = $row['app_status'];
    $updated_at = $row['updated_at'];
    $meeting_link = $row['meeting_link'];
    $app_by = $row['app_by'];

    $date = $_POST['date'];
    $reason = $_POST['reason'];
    $ref = $_POST['ref'];

        if ( $row['ref_id'] > 0) {
                $upd =DB::query("UPDATE refferals SET ref_status='Cancelled referral' WHERE ref_id='$ref'");

                if ($upd) {
                    DB::delete('appointments', 'id=%i', $appid);

                    DB::insert('appointment_history', [
                        'app_id'=> $appid,
                        'reason' => $reason,
                        'date_accomplished' => $date,
                        'status' => 'Cancelled Referral',
                        'id_number' => $myid          
                    ]);
                }
        }
        else {
                    DB::delete('appointments', 'id=%i', $appid);

                    DB::insert('appointment_history', [
                        'app_id'=> $appid,
                        'reason' => $reason,
                        'date_accomplished' => $date,
                        'status' => 'Cancelled',
                        'id_number' => $myid 
                    ]);
        }
}

echo json_encode(["response" => "success"]);

?>