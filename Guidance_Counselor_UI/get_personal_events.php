<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';

$userid = $_POST['userid'];


$events = DB::query("SELECT * FROM personal_appointment WHERE userid='$userid'");

$data = [];

foreach ($events as $row) {

$data[] = [
    'id' => $row["id"],
    'title' => $row["subject"],
    'time' => $row['timeslot'],
    'info' => $row["information"],
    'color' => 'red',
    'rendering' => 'background',
    'status' => 2,
    'start' =>  date('Y-m-d H:i:s',strtotime($row["app_date"].$row['timeslot'])),
    'end' =>  date('Y-m-d H:i:s',strtotime($row["app_date"].$row['timeslot_end']))
    // 'end' => $row["end_event"],
];


}


$events1 = DB::query("SELECT * FROM appointments WHERE app_status='for appointment'");

$data1 = [];

foreach ($events1 as $row) {

$data1[] = [
    'id' => $row["id"],
    'title' => $row["subject"],
    'info' => $row["info"],
    'color' => 'green',
    'rendering' => 'background',
    'status' => 1,
    'start' =>  date('Y-m-d H:i:s',strtotime($row["date"].$row['timeslot'])),
    'end' =>  date('Y-m-d H:i:s',strtotime($row["date"].$row['timeslot_end']))
    // 'end' => $row["end_event"],
];


}


echo json_encode(["personal"=>$data, "school"=>$data1]);


?>