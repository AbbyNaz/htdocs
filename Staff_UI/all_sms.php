<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';

$group = $_POST['group'];

$rec = DB::query("SELECT reciever FROM sms WHERE sender='$group'");

$reciever = $rec[0]['reciever'];

$name = DB::query("SELECT first_name, last_name FROM users WHERE user_id='$reciever'");

$messages = DB::query("SELECT * FROM sms WHERE group_sms='$group' AND delete_status='0'");

DB::query("UPDATE sms SET seen_status=%i WHERE reciever=%i", 1, $group);

$data = [];

foreach ($messages as $row) {
$data[] = ["sms" => $row['text_sms'],
			"group" => $row['group_sms'],
			"sms_id" => $row['id'],
		   "sender" => $row['sender'],
		   "date" => date("g:i a | F j", strtotime( $row['date_sent'] ))];
}

echo json_encode(["response" => $data, "name" => $name[0]['first_name']." ".$name[0]['last_name']]);

?>