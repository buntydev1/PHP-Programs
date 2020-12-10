<?php
function sum($num1, $num2){
	
	$ans=$num1+$num2;
	$data = ["num1" => $num1,"num2" => $num2,"ans" => $ans];
	return $data;
}

$result = sum(10,20);

print_r($result);
?>
