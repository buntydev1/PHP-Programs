<?php
    $A=$_POST['1'];
    if($A>0){
        echo "$A is positive number";
    }elseif($A<0){
        echo "$A is negative number";
    }else{
        echo "$A IS ZERO";
    }
?>