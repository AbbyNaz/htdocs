<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';

$userid = $_POST['userid'];
$information = $_POST['information'];
$type = $_POST['type'];
$date = $_POST['date'];
$reason = $_POST['reason'];
$selectTimeslot = $_POST['selectTimeslot'];
$pos = $_POST['pos'];
$myid = $_POST['myid'];

$check = DB::query("SELECT limit_app FROM users WHERE user_id='$userid'");

if ($check[0]['limit_app'] == 0) {

DB::query("UPDATE users SET limit_app=%i WHERE user_id=%i", 1, $userid);
 
DB::insert('appointments', [
  'timeslot' => $selectTimeslot,
  'date' => $date,
  'user_type' => $pos,
  'id_number' => $myid,
  'subject' => $reason,
  'appointment_type' => $type,
  'info' => $information,
  'app_status' => 'In Review' 
]);

$req_id = DB::insertId();

$events = DB::query("SELECT * FROM appointments WHERE id='$req_id'");

$data = [];

foreach ($events as $row) {

$data[] = [
    'id' => $row["id"],
    'title' => $row["subject"],
    'info' => $row["info"],
    'color' => 'green',
    'start' =>  date('Y-m-d H:i:s',strtotime($row["date"].$row['timeslot'])),
    'end' =>  date('Y-m-d H:i:s',strtotime($row["date"].$row['timeslot_end']))
    // 'end' => $row["end_event"],
];


}

echo json_encode(["events" => $data, "status" => 1]);

}else if($check[0]['limit_app'] == 1){

echo json_encode(["status" => 0]);

}



?>