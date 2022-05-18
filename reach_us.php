<?php
$Email = $_POST['email'];
$Telephonenumber = $_POST['telephone'];

//database connection
$conn = new mysqli('localhost','root','','ziara_adventures');
$sql = "INSERT INTO `reach_us`(`id`, `email`, `phone`) VALUES ('0','$Email','$Telephonenumber')";

$rs = mysqli_query($conn, $sql);

if ($rs){
    echo "You've reached us: we'll get back to you shortly";
}
