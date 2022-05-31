<?php
$Name = $_POST['fullname'];
$Email = $_POST['email'];
$Contact = $_POST['contact'];
$Message = $_POST['message'];

//database connection
$conn = new mysqli('localhost','root','','ziara_adventures');
$sql = "INSERT INTO `contact`(`id`, `name`, `email`, `contact`, `message`) VALUES ('0','$Name','$Email','$Contact','$Message')";

$rs = mysqli_query($conn, $sql);


if ($rs){
    echo "Message sent successfully";
}