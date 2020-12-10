<?php

$a=10;
$b=20;
function test()
{
	global $a;
    echo "a=$a";
}
test();
echo"<br>$b";
?>