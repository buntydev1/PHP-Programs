<?php
    $A=$_POST['1'];
    $OR_N=0;
    $REM=0;
    $RES=0;
    $OR_N=$A;
    while ($OR_N != 0) {
        $REM = $OR_N % 10;
        $RES += $REM * $REM *$REM;
        $OR_N /= 10;
    }
    if($RES == $A){
        echo "$A is an Armstrong number.";
    }else{
        echo "$A is not an Armstrong number.";
    }
?>