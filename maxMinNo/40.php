<?php
$number1=$_REQUEST['t1'];
$number2=$_REQUEST['t2'];

if(isset($_POST['s1']))
{
	if($number2>$number1)
	{
		$number1=$number2;
	}
	echo "$number1 is maximum number";
}
else
{
	if($number2<$number1)
	{
		$number1=$number2;
	}
	echo "$number1 is minimum number";
}
?>