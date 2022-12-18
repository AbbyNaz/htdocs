<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';

$myid = $_POST['userid'];

$users = DB::query("SELECT DISTINCT group_sms FROM sms WHERE reciever='$myid'");
// $users = DB::query("SELECT DISTINCT sms.group_sms, users.first_name, users.last_name FROM sms INNER JOIN users ON(users.user_id = sms.reciever)");

if (!$users) {
echo json_encode(["response" => ""]);
}else{

$data = [];

foreach ($users as $row) {

$group = $row['group_sms'];

$rec = DB::query("SELECT reciever FROM sms WHERE sender='$group'");

$reciever = $rec[0]['reciever'];

$users = DB::query("SELECT first_name, last_name FROM  users WHERE user_id='$reciever'");

$sms = DB::query("SELECT text_sms, sender FROM sms WHERE delete_status='0'  ORDER BY id DESC LIMIT 1");


$data[] = ["name" => $users[0]['first_name']." ".$users[0]['last_name'],
			"group" => $group,
			"sender" => $sms[0]['sender'],
		   "message" => $sms[0]['text_sms']];	

}

echo json_encode(["response" => $data]);


}




?>