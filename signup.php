<?php

$name = $_POST['name'];
$date = $_POST['date'];
$time = $_POST['time'];
$email = $_POST['email'];
$teacher = $_POST['teacher'];
$notes = $_POST['notes'];
  
$con=mysqli_connect('meetinginfo.cgj7os1xcd9b.us-east-1.rds.amazonaws.com', 'bpeightal', 'unoproject', 'bpeightal1');

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "INSERT INTO signup (name, date, time, email, teacher, notes)
        VALUES ('$name', $date, '$time', '$email', '$teacher', '$notes')";

?>
