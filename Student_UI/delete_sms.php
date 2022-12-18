<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';


$id = $_POST['id'];

DB::query("UPDATE sms SET delete_status=%i WHERE id=%i", 1, $id);

echo json_encode(["response" => "success"]);

?>