<?php
function swap($num, $num1)
{
	$num=$num+$num1;
	$num1=$num-$num1;
	$num=$num-$num1;
	echo "number1=$num<br>";
	echo "number2=$num1";
}
$a=10;
$b=20;
swap($a,$b);
echo"<br>";
echo "number1=$a<br>";
echo "number2=$b";
?>