<?php

$S=$_POST['a1'];
$L=$_POST['a2'];
if($S<=$L){
    echo "$S is smaller than $L";
}else{
    echo "$L is smaller than $S";
}
?>