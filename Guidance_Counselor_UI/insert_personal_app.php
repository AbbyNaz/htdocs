<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';

$userid = $_POST['userid'];
$information = $_POST['info'];
$date = $_POST['date'];
$selectTimeslot = $_POST['time'];
$selectTimeslotto = $_POST['timeto'];
$subject = $_POST['subject'];




DB::insert('personal_appointment', [
  'userid' => $userid,
  'timeslot' => $selectTimeslot,
  'timeslot_end' => $selectTimeslotto,
  'information' => $information,
  'subject' => $subject,
  'app_date' => $date 
]);


$req_id = DB::insertId();

$events = DB::query("SELECT * FROM personal_appointment WHERE id='$req_id'");

$data = [];

foreach ($events as $row) {

$data[] = [
    'id' => $row["id"],
    'title' => $row["subject"],
    'info' => $row["information"],
    'time' => $row['timeslot'],
    'color' => 'red',
    'status' => 2,
    'start' =>  date('Y-m-d H:i:s',strtotime($row["app_date"].$row['timeslot'])),
    'end' =>  date('Y-m-d H:i:s',strtotime($row["app_date"].$row['timeslot_end']))
    // 'end' => $row["end_event"],
];


}

echo json_encode($data);


?>