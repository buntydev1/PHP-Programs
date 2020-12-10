<?php
$number1=$_REQUEST['t1'];
$number2=$_REQUEST['t2'];
$number3;

if(isset($_POST['s1']))
{
	$number3=$number1+$number2;
	echo "Addition =$number3";
}
else if(isset($_POST['s2']))
{
	$number3=$number1-$number2;
	echo "Substraction =$number3";
}
else if(isset($_POST['s3']))
{
	$number3=$number1*$number2;
	echo "Multipication =$number3";
}
else if(isset($_POST['s4']))
{
	$number3=$number2/$number1;
	echo "Division =$number3";
}
else
{
	$number3=$number1%$number2;
	echo "Persentage =$number3";
}
?>