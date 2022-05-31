<?php
$Email = $_POST['email'];
$telephoneNumber = $_POST['telephone'];



//database connection
$conn = new mysqli('localhost','root','','ziara_adventures');
$sql = "INSERT INTO `reach_us`(`id`, `email`, `phone`) VALUES ('0','$Email','$telephoneNumber')";

$rs = mysqli_query($conn, $sql);


if ($rs){
    echo "Thanks, we'll be in touch";
}