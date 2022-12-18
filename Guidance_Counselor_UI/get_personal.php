<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';

$appid = $_POST['appid'];

$app = DB::query("SELECT * FROM personal_appointment WHERE id='$appid'");

echo json_encode($app);

?>