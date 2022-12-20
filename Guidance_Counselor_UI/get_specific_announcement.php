<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';

$userID = $_POST['userID'];

if(!isset($_POST['userID'])){

    $fetchData = DB::query("SELECT * from announcements");

}else{

    $search = $_POST['userID'];
    $fetchData = DB::query("SELECT * FROM announcements WHERE ID = '".$search."'");
}
    
$data = array();

foreach ($fetchData as $row) {
    
   $data[] = array(

    'id' => $row['ID'] ,
    'articlecode' => $row['ANNOUNCEMENT_CODE'],
    'title' => $row['TITLE'],
    'description' => $row['DESCRIPTION'],
    'duration' => $row['DURATION'],
    'status' => $row['STATUS'],

    );
}

echo json_encode($data);


?>