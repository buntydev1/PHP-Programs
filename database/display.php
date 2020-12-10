<?php
$conn= mysqli_connect("localhost","root","","Yasin");
//check connection
if(!$conn)
{
	die("connection failed");
	
}
$sql = "SELECT * FROM login";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result))
			 {
    			echo " " . $row["id"]. " " . $row["First_Name"]. " " . $row["Last_Name"]. "" . $row["Mobile_No"]."<br>";
 			 }
	} 
	else 
	{
  		echo "0 results";
	}

?>