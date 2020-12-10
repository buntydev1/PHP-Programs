<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "Yasin";
//create database connection
$conn= mysql_connect("localhost","root","","Yasin");
//check connection
if(!$conn)
{
	die("connection failed");
}
$sql = "INSERT INTO login (First_Name, Last_Name,Mobile_No)
VALUES ('Yasin', 'Virani', '9909375761')";
if ($conn->query($sql) === TRUE) 
{
  echo "New record created successfully";
} 
else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}



?>