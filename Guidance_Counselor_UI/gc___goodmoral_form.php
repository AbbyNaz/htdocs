<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "guidance_and_counseling");

if(isset($_POST['submit'])) {
$get_name = $_POST['stu_name'];
$GET = "SELECT first_name,last_name from users where user_id = '$get_name'";
$execute = $conn->query($GET);
while ($display = $execute->fetch_assoc()) {
$font = 'C:/xampp\htdocs\UPDATE\Arimo-Bold.TTF';
$image = imagecreatefromjpeg("certificate.jpg");
$color = imagecolorallocate($image, 19, 21, 22);
$name = $display['first_name'] . " " . $display['last_name'];
imagettftext($image, 40, 0, 850, 750, $color, $font, $name);
 for ($num = 1; $num < 1000; $num++) { } 
imagejpeg($image, "insertedCert/Picture.$num.jpg" ); 
imagedestroy($image); 
}
      echo "Generate Successful!";
}
?>