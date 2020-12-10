<?php
$number1=$_REQUEST['t1'];
		$c=0;
		$i;
		for($i=2;$i<3;$i++)
		{
			if($number1%$i==0)
			{
				$c=1;
				break;
			}
				if($c==1)
				{
				echo"$number1 is not prime";
				}
				else
				{
				echo"$number1 is prime";
				}
		}
?>