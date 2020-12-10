<?php
$number1=$_REQUEST['t1'];
if($number1>0)
{
	echo"number is positive";
}
else if($number1<0)
{
	echo"number is negative";
}
else
{
	echo"number is zero";
}
?>
