<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';

$userid = $_POST['userid'];

$get_idnumber = DB::query("SELECT id_number FROM users WHERE user_id='$userid'");

$idnumber = $get_idnumber[0]['id_number'];

$events = DB::query("SELECT * FROM appointments WHERE id_number='$idnumber'");

$data = [];

foreach ($events as $row) {

$data[] = [
    'id' => $row["id"],
    'title' => $row["subject"],
    'info' => $row["info"],
    'start' =>  date('Y-m-d H:i:s',strtotime($row["date"].$row['timeslot'])),
    'end' =>  date('Y-m-d H:i:s',strtotime($row["date"].$row['timeslot_end'])),    // 'end' => $row["end_event"],
];


}

echo json_encode($data);


?>