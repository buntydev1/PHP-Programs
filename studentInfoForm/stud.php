<html>
<head>
	<title> student login form</title>
</head>
<body bgcolor=cyan>
		<marquee behavior=scroll><h3>Student Enformation</h3></marquee>
	<h1 align=center>Student Data</h1>
	<table border=3 cellpadding=10 bordercolor=black bgcolor=powderblue align=center>
	<tr>
		<td>
	<?php
		$rno=$_POST['t1'];
		$nm=$_POST['t2'];
		$gender=$_POST['r1'];
		$stream=$_POST['s1'];
		$email=$_POST['t3'];
		$contact=$_POST['t4'];
		$address=$_POST['t5'];
		echo"Roll NO=$rno<br>";
		echo"Enter Name=$nm<br>";
		echo"Gender=$gender<br>";
		echo"Stream=$stream<br>";
		echo"Email Address=$email<br>";
		echo"Enter Contact=$contact<br>";
		echo"Student Address=$address<br>";
	?>
</table>
</body>
</html>