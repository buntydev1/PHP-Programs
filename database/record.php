<?php
$firstname=$_REQUEST['t1'];
$lastname=$_REQUEST['t2'];
$mobileno=$_REQUEST['t3'];
$conn= mysqli_connect("localhost","root","","Yasin");
//check connection
if(!$conn)
{
	die("connection failed");
}
$sql = "INSERT INTO login (First_Name, Last_Name,Mobile_No)
VALUES ('$firstname', '$lastname', '$mobileno')";
if ($conn->query($sql) === TRUE) 
{
  echo "New record created successfully";
} 
else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

	

?>