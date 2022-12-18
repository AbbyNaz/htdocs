<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';


$date = $_POST['datenow'];


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

echo json_encode(["time" => $dates, "time2" => $dates2]);


?>