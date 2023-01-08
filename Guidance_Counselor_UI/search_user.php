<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';

$pos = $_POST['pos'];
$search = $_POST['search'];

if (strpos($search, ",") !== false) {
    $parts = explode(", ", $search);
    $search = $parts[0];
}

if ($search != '') {
    $fetchData = DB::query("SELECT * from users where position='$pos'
                    AND CONCAT(last_name LIKE '%$search%' OR first_name LIKE '%$search%' OR middle_name LIKE '%$search%' OR id_number LIKE '%$search%')");
}

// $fetchData = DB::query("SELECT * from users where position='$pos'");

$data = array();

foreach ($fetchData as $row) {
    
   $data[] = array(

    'id' => $row['user_id'] ,
    'studid' => $row['id_number'],
    'position' => $row['position'],
    'program' => $row['program'],
    'level' => $row['level'],
    'department' => $row['department'],
    'inv_act' => $row['inv_act'],
    'text' => $row['last_name'].", ".$row['first_name'],

    );
}
if($fetchData){
    echo json_encode(["users" => $data, "search" => $search]);
}else{
    echo json_encode(["search" => $search]);
}



?>