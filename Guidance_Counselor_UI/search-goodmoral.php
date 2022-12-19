<?php  
    $connect = mysqli_connect("localhost", "root", "", "guidance_and_counseling");  

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $Search = $_POST['search'];
        $sql = "SELECT * FROM users WHERE first_name LIKE '%".$Search."%'";  
        $result = mysqli_query($connect, $sql); 

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo '<a href="#" class="list-group-item list-group-item-action border p2">'.$row['first_name'].'</a>';
            }
        }
        else{
            echo '<p class="list-group list-group-item">RECORD NOT FOUND</p>';
        }
    }


?>