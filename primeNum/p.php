<?php
    $A=$_POST['a1'];
    $I=0;
    $C=0;
    for ($I=2; $I <= $A/2; $I++) { 
        if($A % $I == 0){
            $C++;

        }
    }
    if($C==0 && $A != 1){
        echo "$A is a prime number";
    }else{
        echo "$A is not a prime number";
    }
?>