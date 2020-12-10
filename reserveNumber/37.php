<html>
<body bgcolor=cyan align=center>
<?php
 $num=$_POST['t1'];
		while($num>=1)
		{
			$i=$num%10;
			echo "$i";
			$num=$num/10;
		}
 ?>
</body>
</html>