<?php
$number1=$_REQUEST['t1'];
		$rev=0;
		$i = 0;
		$t=$number1;
		while($number1>0)
		{
			$i = $number1 % 10;
			$rev = ( $rev * 10 ) + $i;
			$number1 = intval($number1 / 10);
		}
		if($t==$rev)
		{
			echo"number is palindrome";		
		}
		else
		{
			echo"number is not palindrome";
		}
?>