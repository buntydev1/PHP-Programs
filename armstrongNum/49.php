<?php
$number1=$_REQUEST['t1'];
		$sum=0;
		$n;
		$d;
		$n=$number1;
		while($number1>0)
		{
			$d=$number1%10;
			$sum=$sum+($d*$d*$d);
			$number1=$number1/10;
		}
		if($n==$sum)
		{
			echo"number is armstrong";		
		}
		else
		{
			echo"number is not armstrong";
		}
?>