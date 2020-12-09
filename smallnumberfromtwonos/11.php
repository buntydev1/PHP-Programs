<?php

$s=$_POST['a1'];
$L=$_POST['a2'];
if($s<=$L){
    echo "$s is smaller than $L";
}else{
    echo "$L is smaller than $s";
}
?>