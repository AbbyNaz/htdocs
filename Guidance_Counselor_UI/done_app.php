<?php 
include 'vendor/autoload.php'; 

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';

$appid = $_POST['appid'];
$myid = $_POST['myid'];


DB::query("UPDATE users SET limit_app=%i WHERE id_number=%i", 0, $myid);


$check = DB::query("SELECT *FROM appointments WHERE id='$appid'");


foreach ($check as $row){

    
    $date = $_POST['date'];
    $reason = $_POST['reason'];
    $ref = $_POST['ref'];

        if ( $row['ref_id'] > 0) { 
                $upd =DB::query("UPDATE refferals SET ref_status='Complete referral' WHERE ref_id='$ref'");

                if ($upd) {
                    DB::delete('appointments', 'id=%i', $appid);

                    DB::insert('appointment_history', [
                        'app_id'=> $appid,
                        'reason' => $reason,
                        'date_accomplished' => $date,
                        'status' => 'Complete referral',
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
                        'status' => 'Complete',
                        'id_number' => $myid 
                    ]);
            }
}

echo json_encode(["response" => "success"]);

?>