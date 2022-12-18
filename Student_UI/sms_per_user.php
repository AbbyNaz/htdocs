<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';

$myid = $_POST['myid'];
$user = $_POST['user'];



DB::query("UPDATE sms SET seen_status=%i WHERE reciever=%i", 1, $myid);


$sms = DB::query("SELECT * FROM sms WHERE group_sms='$myid' AND delete_status='0'");

if (!$sms) {

echo json_encode(["status" => 0]);

}else{

$data = [];

foreach ($sms as $row) {

$data[] = ["text_sms" => $row['text_sms'],
		   "reciever" => $row['reciever'],
		   "sms_id" => $row['id'],
		   "date" => date("g:i a | F j", strtotime($row['date_sent'])),
		   "sender" => $row['sender'] ];


}

echo json_encode(["response" => $data, "status" => 1]);

}


?>