<html>
<body bgcolor=orange align=center>
<table border=3 cellpadding="10" align=center>
<?php
	$no=$_POST['t1'];
		for($i=1;$i<=500;$i++)
		{
			if($i%5==0)
			{
			echo"<tr>";
			echo"<td>";
			echo"$i";
			echo"<br>";
			}
		}
?>
</table>
</body>
</html>
