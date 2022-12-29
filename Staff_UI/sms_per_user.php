<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';

$myid = $_POST['myid'];
$userid = $_POST['user'];

$users = DB::query("SELECT id_number, profile_picture FROM users WHERE user_id='$userid'"); //kunin info ni kausap para sa pic

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
		   "id_number" => $users[0]['id_number'],
		   "profile_picture" => $users[0]['profile_picture'],
		   "date" => date("g:i a | F j", strtotime($row['date_sent'])),
		   "sender" => $row['sender'] ];


}

echo json_encode(["response" => $data, "status" => 1]);

}


?>