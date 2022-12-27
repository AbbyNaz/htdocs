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
$selectTimeslotto = $_POST['selectTimeslotto'];
$pos = $_POST['pos'];
$myid = $_POST['myid'];
$myname = $_POST['myname'];
$ref = $_POST['ref'];
$status = $_POST['status'];


$natureArr = json_decode($_POST['nature'], true);
  // Join the elements of the array into a single string
$nature = implode(',', $natureArr);

$getid = DB::query("SELECT user_id FROM users WHERE id_number='$myid'");

$my_userid = $getid[0]['user_id'];

$check = DB::query("SELECT limit_app FROM users WHERE user_id='$my_userid'");



if ($check[0]['limit_app'] == 0) {

DB::query("UPDATE users SET limit_app=%i WHERE user_id=%i", 1, $my_userid);

$upd =DB::query("UPDATE refferals SET ref_status='For Appointment' WHERE ref_id='$ref'");

    if ($status == 1) {

    $meeting = $_POST['meeting'];

    DB::insert('appointments', [
      'timeslot' => $selectTimeslot,
      'timeslot_end' => $selectTimeslotto,
      'date' => $date,
      'user_type' => $pos,
      'id_number' => $myid,
      'name' => $myname,
      'nature' => $nature,
      'subject' => $reason,
      'appointment_type' => $type,
      'info' => $information,
      'app_status' => 'for appointment',
      'meeting_link' => $meeting,
      'ref_id' => $ref,
      'app_by' => 1
    ]);

    }else if ($status == 0) {

    DB::insert('appointments', [
      'timeslot' => $selectTimeslot,
      'timeslot_end' => $selectTimeslotto,
      'date' => $date,
      'user_type' => $pos,
      'id_number' => $myid,
      'name' => $myname,
      'nature' => $nature,
      'subject' => $reason,
      'appointment_type' => $type,
      'info' => $information,
      'app_status' => 'for appointment',
      'meeting_link' => 'no link',
      'ref_id' => $ref,
      'app_by' => 1
    ]);

    }

$req_id = DB::insertId();

// NOTIFICATION PURPOSES
$from = $_POST['useridnumber'];
$type = 'Appointment';
$infoID = $req_id;
$isRead = 0;
// $notif_date = date_format(new DateTime(), 'Y-m-d H:i:s');
DB::insert('notifications', [
  'from_user' => $from,
  'to_user' => $myid,
  'Type' => $type,
  'info_ID' => $infoID,
  'isRead' => $isRead
]);
//////////////////////////////////////////

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

//----------NOTIFY USER-------------->>
	// Notify('Appointment', $req_id);

echo json_encode(["events" => $data, "status" => 1]);

}else if ($check[0]['limit_app'] == 1) {
echo json_encode(["status" => 0]);
}





?>