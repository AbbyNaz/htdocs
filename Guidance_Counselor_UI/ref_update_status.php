<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';

$userid = $_POST['userid'];
$refid = $_POST['refid'];


DB::query("UPDATE referrals SET ref_status=%i WHERE ref_id=%i", 'For appointment', $refid);




$req_id = DB::insertId();

$events = DB::query("SELECT * FROM appointments WHERE id='$req_id'");

$data = [];

foreach ($events as $row) {

$data[] = [
    'id' => $row["id"],
    'title' => $row["subject"],
    'info' => $row["info"],
    'start' => $row["date"]
    // 'end' => $row["end_event"],
];


}

echo json_encode($data);


?>