<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';

$search = $_POST['search'];

$users = DB::query("SELECT * FROM users WHERE first_name like '%$search%' OR last_name like '%$search%' AND sms_status='0'");

$data = [];

foreach ($users as $row) {

$group = $row['user_id'];

$sms = DB::query("SELECT text_sms FROM sms WHERE group_sms='$group' AND delete_status='0' ORDER BY id DESC LIMIT 1");

if (!$sms) {

$data[] = ["name" => $row['first_name']." ".$row['last_name'],
		   "id" => $row['user_id'],
		   "status" => $row['active_status'],
		   "text" => "No message yet..."];

}else{

$data[] = ["name" => $row['first_name']." ".$row['last_name'],
		   "id" => $row['user_id'],
		   "status" => $row['active_status'],
		   "text" => $sms[0]['text_sms']];

}

}

echo json_encode(["response" => $data]);



?>