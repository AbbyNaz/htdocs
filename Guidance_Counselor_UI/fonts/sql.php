<?php


    require('sql.php');
    // insertReferral(200000, 'Montemayor', 'nick joshua','student', "01-20-2022", 'career', 'nagbasag', 'kinausap', 'kahit ano', 'pending');
?>
<?php 
        // $isSuccess = insertReferral('uglkdfyjfjutdg', 'montermayor', 'nick joshua','student', "01-20-2022", 'career', 'nagbasag', 'kinausap', 'kahit ano', 'pending'); 
        // if($isSuccess){
        //     echo 'Success';
        // }else{
        //     echo 'Failed';
        // }
       
        $data = getallReferral('Montem');
        if($data != null){
            foreach($data as $row){
                echo $row['STUD_FNAME'].$row['STUD_LNAME'].'<br>';
            }
        }
       
     ?>