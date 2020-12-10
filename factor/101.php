<?php
$num=$_POST['t1'];
 $fact=1;
		for($i=1;$i<=$num;$i++)
		{
			if($num%$i==0)
			{
				echo"factors=$i";
				echo "<br>";
			}
		}
?>