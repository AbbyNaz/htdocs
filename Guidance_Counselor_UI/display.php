<?php

// use PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\Days;

    require('fpdf.php');
        $connect = mysqli_connect("localhost", "root", "", "guidance_and_counseling");  

        if($_SERVER['REQUEST_METHOD']=='POST'){

            $Search = $_POST['query']; // from AJAX
            $sql = "SELECT * FROM users WHERE first_name  LIKE '%".$Search."%'";  
            $result = mysqli_query($connect, $sql); 
                //DECLARING FOR HTML INNER
            $output = '<table class="table table-striped" border="3">
                        <tr>
                            <td>Student ID</td>
                             <td>FirstName</td>
                             <td>LastName</td>
                        </tr>';
                 
            
            while($row= mysqli_fetch_assoc($result)){

                $output.='<tr>';
                $output.='<td>'.$row['id_number'].'</td>';
                $output.='<td>'.$row['first_name'].'</td>';
                $output.='<td>'.$row['last_name'].'</td>';
                
                $font = 'C:\xampp\htdocs\Guidance_Counselor_UI\Arimo-Bold.TTF';
                $image = imagecreatefromjpeg("certificate.jpg");
                $color = imagecolorallocate($image, 19, 21, 22);
                $year = date("Y"); 
                $year2 = date("dS");
                $year3 = date("M");
                $year1 = date('Y', strtotime('+1 year'));
                $name = $row['first_name']." ".$row['last_name'];
                $sect = $row['program'];
                imagettftext($image,35,0,930,1270,$color, $font, $name); 
                imagettftext($image,35,0,985,1350,$color,$font,$sect);
                imagettftext($image,35,0,475,1437,$color,$font,$year);
                imagettftext($image,35,0,640,1437,$color,$font,$year1);
                imagettftext($image,35,0,670,1852,$color,$font,$year2);
                imagettftext($image,35,0,950,1852,$color,$font,$year3);
                imagettftext($image,35,0,1090,1852,$color,$font,$year);
                
                imagejpeg($image, "GM_Certs/Picture.jpg" ); 
                $pdf = new FPDF ('P', 'in', [11.03, 15.57]);
                $pdf->AddPage();
                $pdf->Image("GM_Certs/Picture.jpg",0,0,11.03,15.57);
                $pdf->Output("GM_Certs/Picture.pdf","F");
                imagedestroy($image);
             
            }
            $output.='</tr>';
            $output.='</table>';
            echo $output;

        }
?>