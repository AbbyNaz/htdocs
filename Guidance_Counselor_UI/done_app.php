<?php 
include 'vendor/autoload.php'; 

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';


if (isset($_POST['doneapp']) && isset($_GET['appid'])) {
    $appid = $_GET['appid'];

    $check = DB::query("SELECT *FROM appointments WHERE id='$appid'");


    foreach ($check as $row) {

        $timeslot = $row['timeslot'];
        $timeslot_end = $row['timeslot_end'];
        $date = $row['date'];
        $user_type = $row['user_type'];
        $ref_id = $row['ref_id'];
        $id_number = $row['id_number'];
        $name = $row['name'];
        $nature = $row['nature'];
        $subject = $row['subject'];
        $appointment_type = $row['appointment_type'];
        $info = $row['info'];
        $app_status = $row['app_status'];
        $updated_at = $row['updated_at'];
        $meeting_link = $row['meeting_link'];
        $app_by = $row['app_by'];

        DB::query("UPDATE users SET limit_app=%i WHERE id_number=%i", 0, $id_number);

        if ($row['ref_id'] > 0) {
            $upd = DB::query("UPDATE refferals SET ref_status='Completed Referral' WHERE ref_id='$ref_id'");

            if ($upd) {
                $appInserted = DB::insert('appointment_history', [
                    'timeslot' => $timeslot,
                    'timeslot_end' => $timeslot_end,
                    'date' => $date,
                    'user_type' => $user_type,
                    'ref_id' => $ref_id,
                    'id_number' => $id_number,
                    'name' => $name,
                    'nature' => $nature,
                    'subject' => $subject,
                    'appointment_type' => $appointment_type,
                    'info' => $info,
                    'app_status' => "Completed Referral",
                    'updated_at' => $updated_at,
                    'meeting_link' => $meeting_link,
                    'app_by' => $app_by,
                    'app_id' => $appid,
                ]);

                if ($appInserted) {
                    DB::delete('appointments', 'id=%i', $appid);
                }
            }
        } else {


            $appInserted = DB::insert('appointment_history', [
                'timeslot' => $timeslot,
                'timeslot_end' => $timeslot_end,
                'date' => $date,
                'user_type' => $user_type,
                'ref_id' => $ref_id,
                'id_number' => $id_number,
                'name' => $name,
                'nature' => $nature,
                'subject' => $subject,
                'appointment_type' => $appointment_type,
                'info' => $info,
                'app_status' => "Completed",
                'updated_at' => $updated_at,
                'meeting_link' => $meeting_link,
                'app_by' => $app_by,
                'app_id' => $appid,
            ]);

            if ($appInserted) {
                DB::delete('appointments', 'id=%i', $appid);
            }
        }
    }

    header("Location: gc___dashboard.php?Success");
}else{
    header("Location: gc___dashboard.php?NoAppointment".$appid);
}
?>