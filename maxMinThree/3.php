<?php
$a=100;
$b=150;
$c=50;
if($a>$b && $a>$c)
{
	echo"a is maximum";
}
else if($b>$a && $b>$c)
{
	echo"b is maximum";
}
else 
{
	echo"c is maximum";
}
 if($a<$b && $a<$c)
 {
 	echo"<br>a is minimum ";

 }
 else if ($b<$a && $b<$c)
 {
 	echo"<br>b is minimum";
 }
 else
 {
 	echo"<br>c is minimum";
 }
 ?>