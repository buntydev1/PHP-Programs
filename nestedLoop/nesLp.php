<html>
<body bgcolor=orange>
<table border=3 cellpadding=10 align=center bgcolor=cyan>
<?php
	$no=$_POST['t1'];
		for($i=1;$i<=$no;$i++)
		{
			echo"<tr>";
	echo"<td>";
			for($j=1;$j<=$i;$j++)
			{
				echo"*";
			}
			
			echo"<br>";
		}
?>
</table>
</body>
</html>
