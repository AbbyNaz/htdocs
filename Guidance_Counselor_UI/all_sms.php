<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';

$group = $_POST['group'];


$name = DB::query("SELECT first_name, last_name FROM users WHERE user_id='$group'");

$messages = DB::query("SELECT * FROM sms WHERE group_sms='$group' AND delete_status='0'");

DB::query("UPDATE sms SET seen_status=%i WHERE group_sms=%i", 1, $group);

$data = [];

foreach ($messages as $row) {
$data[] = ["sms" => $row['text_sms'],
			"sms_id" => $row['id'],
			"group" => $row['group_sms'],
		   "sender" => $row['sender'],
		   "date" => date("g:i a | F j", strtotime( $row['date_sent'] ))];
}

echo json_encode(["response" => $data, "name" => $name[0]['first_name']." ".$name[0]['last_name']]);

?>