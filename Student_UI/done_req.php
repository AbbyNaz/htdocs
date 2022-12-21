<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';

$appid = $_POST['appid'];
$userid = $_POST['userid'];

$date =$_POST['date'];
$reason=$_POST['reason'];

DB::query("UPDATE users SET limit_app=%i WHERE user_id=%i", 0, $userid);
$selectuser= DB::query("SELECT * FROM users where user_id ='$userid'");

foreach ($selectuser as $row) {

   $idnum= $row['id_number'] ;

    DB::insert('appointment_history', [
        'app_id'=> $appid,
        'reason' => $reason,
        'date_accomplished' => $date,
        'status' => 'Completed',
        'id_number' => $idnum     
    ]);
    
DB::delete('appointments', 'id=%i', $appid);

}



echo json_encode(["response" => "success"]); 

?>