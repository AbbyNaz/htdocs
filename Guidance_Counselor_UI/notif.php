<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';

$id = $_POST['userid'];

$user = DB::query("SELECT DISTINCT group_sms FROM sms WHERE reciever='$id' AND seen_status='0'");

echo json_encode($user);


?>