<?php
$string="hello";
$length=strlen($string);
for($i=0;$i<$length;$i++)
{
	for($j=0;$j<=$i;$j++){
		echo $string[$j];
	}
	echo "<br>";

}
?>