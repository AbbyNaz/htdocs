<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';


$group = $_POST['user'];

$myid = DB::query("SELECT sender FROM sms WHERE reciever='$group' LIMIT 1");

$id = $myid[0]['sender'];

$sms = DB::query("SELECT * FROM sms WHERE seen_status='0' AND delete_status='0' AND reciever='$id'");


if (!$sms) {

echo json_encode(["status" => 0, "id" => $id]);

}else{

$data = [];

foreach ($sms as $row) {

$data[] = ["text_sms" => $row['text_sms'],
		   "reciever" => $row['reciever'],

		   "date" => date("g:i a | F j", strtotime($row['date_sent'])),
		   "sender" => $row['sender'] ];


}

DB::query("UPDATE sms SET seen_status=%i WHERE reciever=%i", 1, $id);

echo json_encode(["response" => $data, "status" => 1, "id" => $id]);

}


?>