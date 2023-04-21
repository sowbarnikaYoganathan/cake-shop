<?php
//error_reporting(0);

$con =mysqli_connect('localhost', 'root', '', 'riyadvi');

$name= $_POST["name"];
$email = $_POST["email"];
$number = $_POST ["number"];
$date = $_POST["date"];
$message= $_POST["message"];
// Create database connection
 

$sql = "INSERT INTO `sowbarnika` (`name`, `email`, `number`, `date`, `message`) VALUES ('$name','$email','$number','$date','$message')";

$rs=mysqli_query($con,$sql);

if($rs)
{
    echo "Contact Record Inserted";
}

?>