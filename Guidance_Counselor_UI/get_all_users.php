<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';



if(!isset($_POST['searchTerm'])){

    $fetchData = DB::query("SELECT * from users");

}else{

    $search = $_POST['searchTerm'];
    $fetchData = DB::query("SELECT * from users where first_name like '%".$search."%' ");
}
    
$data = array();

foreach ($fetchData as $row) {
    
   $data[] = array(

    'id' => $row['user_id'] ,
    'studid' => $row['id_number'],
    'position' => $row['position'],
    'program' => $row['program'],
    'level' => $row['level'],
    'department' => $row['department'],
    'text' => $row['last_name'].", ".$row['first_name'],
    'inv_act' => $row['inv_act'],

    );
}

echo json_encode($data);


?>