<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';



if(!isset($_POST['userID'])){

    $fetchData = DB::query("SELECT * from offense_monitoring");

}else{

    $search = $_POST['userID'];
    $fetchData = DB::query("SELECT * FROM offense_monitoring WHERE id = '".$search."'");
}
    
$data = array();

foreach ($fetchData as $row) {
    
   $data[] = array(

    'id' => $row['id'],
    'student_id' => $row['student_id'],
    'stud_name' => $row['stud_name'],
    'offensetype' => $row['offense_type'],
    'offensedescription' => $row['description'],
    'date_created' => $row['date_created'],
    'sanction' => $row['sanction'],
    'start_date' => $row['start_date'],
    'end_date' => $row['end_date'],
    'offensestatus' => $row['status'],

    );
}

echo json_encode($data);


?>