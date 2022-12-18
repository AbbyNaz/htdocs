<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';


$date = $_POST['datenow'];
$userid = $_POST['userid'];

$info = DB::query("SELECT position, first_name, last_name, id_number FROM users 
				  WHERE user_id='$userid'");

$hours = DB::query("SELECT timeslot, timeslot_end FROM personal_appointment WHERE  app_date='$date' ");

$hours2 = DB::query("SELECT timeslot, timeslot_end FROM appointments WHERE app_status='for appointment' AND date='$date'");

$dates = [];

foreach ($hours as $row) {

$dates[] = ["hour" => $row['timeslot'], "hour_end" => $row['timeslot_end'] ];

}

$dates2 = [];

foreach ($hours2 as $row) {

$dates2[] = ["hour" => $row['timeslot'], "hour_end" => $row['timeslot_end'] ];

}

echo json_encode(["time" => $dates, 
				   "time2" => $dates2,	
				   "name" => $info[0]['last_name'].", ".$info[0]['first_name'],
				   "stud_id" => $info[0]['id_number'],
				   "position" => $info[0]['position']]);


?>