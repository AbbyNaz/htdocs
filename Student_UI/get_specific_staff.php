<?php 
include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';



if(!isset($_POST['search'])){

    $fetchData = DB::query("SELECT * from users");

}else{

    $search = trim($_POST['search']);
    $fetchData = DB::query("SELECT * FROM users WHERE position = 'staff' AND CONCAT(last_name LIKE '%".$search."%' OR first_name LIKE '%".$search."%' OR middle_name LIKE '%".$search."%' OR id_number LIKE '%".$search."%')");
}
    
$data = array();

foreach ($fetchData as $row) {
    
   $data[] = array(

    'id' => $row['user_id'] ,
    'id_number' => $row['id_number'],
    'last_name' => $row['last_name'],
    'first_name' => $row['first_name'],
    'middle_name' => $row['middle_name'],
    'address' => $row['address'],
    'contact' => $row['contact'],
    'gender' => $row['gender'],
    'date_of_birth' => $row['date_of_birth'],
    'department' => $row['department'],
    'program' => $row['program'],
    'level' => $row['level'],
    'position' => $row['position'],
    'status' => $row['status'],

    );
}

echo json_encode($data);


?>