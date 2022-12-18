<?php 
include 'vendor/autoload.php'; 

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';

$appid = $_POST['appid'];
$myid = $_POST['myid'];
$ref = $_POST['ref'];
$date = $_POST['date'];
$reason = $_POST['reason'];

DB::query("UPDATE users SET limit_app=%i WHERE id_number=%i", 0, $myid);

$updstat = DB:: query("UPDATE refferals SET ref_status='Cancelled' WHERE ref_id='$ref'");

if($updstat == 'Cancelled'){
  
DB::delete('appointments', 'id=%i', $appid);
}
else{
    DB::delete('appointments', 'id=%i', $appid);
}



DB::insert('appointment_history', [
    'app_id'=> $appid,
    'reason' => $reason,
    'date_accomplished' => $date,
    'id_number' => $myid
        
          
]);

echo json_encode(["response" => "success"]);

?>