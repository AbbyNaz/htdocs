

<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';

$userid = $_POST['userid'];
$date = $_POST['date'];
$reason = $_POST['reason'];
$myid = $_POST['myid'];
$appid = $_POST['appid'];
$ref = $_POST['ref'];



DB::query("UPDATE users SET limit_app=%i WHERE id_number=%i", 0, $myid);

$updstat = DB:: query("UPDATE refferals SET ref_status='Completed' WHERE ref_id='$ref'");

if($updstat == 'Completed'){
  
DB::delete('appointments', 'id=%i', $appid);
}

if($updstat== ""){
  
  DB::delete('appointments', 'id=%i', $appid);
  }


 DB::insert('appointment_history', [
      'app_id'=> $appid,
      'reason' => $reason,
      'status' => 'Completed',
      'date_accomplished' => $date,
      'id_number' => $myid
      
        
    ]);


    echo json_encode(["response" => "success"]);



?>