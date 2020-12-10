<html>
<body bgcolor=cyan align=center>
<?php
 $num=$_POST['t1'];
 $sum=0;
 $re;
		while($num>0)
		{
				$re=$num%10;
				$sum=$sum+$re;
				$num=$num/10;
		}
		echo"<h1>sum of digits=$sum</h1>";
 ?>
</body>
</html>