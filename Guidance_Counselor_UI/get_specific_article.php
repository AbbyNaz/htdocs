<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';

$userID = $_POST['userID'];

if(!isset($_POST['userID'])){

    $fetchData = DB::query("SELECT * from articles");

}else{

    $search = $_POST['userID'];
    $fetchData = DB::query("SELECT * FROM articles WHERE ID = '".$search."'");
}
    
$data = array();

foreach ($fetchData as $row) {
    
   $data[] = array(

    'id' => $row['ID'] ,
    'articlecode' => $row['ARTICLECODE'],
    'title' => $row['TITLE'],
    'description' => $row['DESCRIPTION'],
    'picture' => $row['PICTURE'],
    'duration' => $row['DURATION'],
    'status' => $row['ART_STATUS'],

    );
}

echo json_encode($data);


?>