<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';

$appid = $_POST['appid'];
$userid = $_POST['userid'];

DB::query("UPDATE users SET limit_app=%i WHERE user_id=%i", 0, $userid);

DB::delete('appointments', 'id=%i', $appid);

echo json_encode(["response" => "success"]);

?>