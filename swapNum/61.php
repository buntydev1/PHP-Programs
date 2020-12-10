<?php
function swap($num, $num1)
{
	$num=$num+$num1;
	$num1=$num-$num1;
	$num=$num-$num1;
	echo "number1=$num<br>";
	echo "number2=$num1";
}
swap(10,20);
?>