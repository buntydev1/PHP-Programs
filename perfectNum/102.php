<?php
		$num=$_POST['t1'];
		$sum=0;
		$i=1;
			if ($num%$i==0)
			{
				$sum=$sum+$i;
			}
			if($num==$sum)
			{
				echo "no is perfect";
			}
			else
			{
				echo "no is not perfect";
			}
?>