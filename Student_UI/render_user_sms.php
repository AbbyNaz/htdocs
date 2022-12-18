<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';


$user = $_POST['user'];

$group = DB::query("SELECT group_sms FROM sms WHERE sender='$user' LIMIT 1");

$newgroup = $group[0]['group_sms'];

$sms = DB::query("SELECT * FROM sms WHERE seen_status='0' AND delete_status='0' AND reciever='$newgroup'");


if (!$sms) {

echo json_encode(["status" => 0]);

}else{

$data = [];

foreach ($sms as $row) {

$data[] = ["text_sms" => $row['text_sms'],
		   "reciever" => $row['reciever'],

		   "date" => date("g:i a | F j", strtotime($row['date_sent'])),
		   "sender" => $row['sender'] ];


}

DB::query("UPDATE sms SET seen_status=%i WHERE reciever=%i", 1, $newgroup);

echo json_encode(["response" => $data, "status" => 1]);

}


?>