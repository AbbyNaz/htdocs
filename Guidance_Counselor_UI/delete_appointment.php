<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';

$appid = $_POST['appid'];


DB::delete('personal_appointment', 'id=%i', $appid);

echo json_encode(["response" => "success"]);

?>