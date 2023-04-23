<?php

$name = $_POST["name"];
$date = $_POST["date"];
$time = $_POST["time"];
$email = $_POST["email"];
$teacher = $_POST["teacher"];
$notes = $_POST["notes"];
  
$host = "meetinginfo.cgj7os1xcd9b.us-east-1.rds.amazonaws.com";
$dbname = "bpeightal1";
$username = "bpeightal";
$password = "unoproject";

mysqli_connect($host, $username, $password, $dbname);

$sql = "INSERT INTO signup (name, date, time, email, teacher, notes)
        VALUES ('$name', $date, '$time', '$email', '$teacher', '$notes')";

?>
