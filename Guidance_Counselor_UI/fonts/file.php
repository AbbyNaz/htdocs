<?php

function insertReferral($stud_ID,$stud_lname,$stud_fname,$ref_source,$ref_date,$ref_nature,$ref_reason,$ref_act,$ref_remark,$ref_stat)
{
    $connection = mysqli_connect('localhost', 'root' , '' , 'content');
    $query = "INSERT INTO referral_tbl(STUD_ID, STUD_LNAME, STUD_FNAME, REF_SOURCE,REF_DATE, REF_NATURE, REF_REASON, REF_ACT, REF_REMARK,REFF_STAT) 
        VALUES('$stud_ID','$stud_lname','$stud_fname','$ref_source', '$ref_date','$ref_nature','$ref_reason','$ref_act','$ref_remark','$ref_stat')";
    
    mysqli_query($connection, $query);

    $rows = mysqli_affected_rows($connection);
    if(!isset($rows)){
        return false;
    }else{
        return true;
    }
}

    function getallReferral($STUD_NAME)
    {
        $connection = mysqli_connect('localhost', 'root' , '' , 'content');
        $query = "SELECT * FROM referral_tbl WHERE STUD_LNAME = '$STUD_NAME'";
        
        $data = mysqli_query($connection, $query);
        
        while($row= mysqli_fetch_array($data)) {
            $return[] = $row;
        }
        return $return;
      
         
    }
?>