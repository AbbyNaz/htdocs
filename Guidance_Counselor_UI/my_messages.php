<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';

$users = DB::query("SELECT DISTINCT group_sms FROM sms ");
// $users = DB::query("SELECT DISTINCT sms.group_sms, users.first_name, users.last_name FROM sms INNER JOIN users ON(users.user_id = sms.reciever)");

$data = [];

foreach ($users as $row) {

$group = $row['group_sms'];

$users = DB::query("SELECT first_name, last_name FROM  users WHERE user_id='$group'");

$sms = DB::query("SELECT text_sms, sender FROM sms WHERE group_sms='$group' AND delete_status='0' ORDER BY id DESC LIMIT 1");


$data[] = ["name" => $users[0]['first_name']." ".$users[0]['last_name'],
			"group" => $group,
			"sender" => $sms[0]['sender'],
		   "message" => $sms[0]['text_sms']];	

}

echo json_encode(["response" => $data]);



?>