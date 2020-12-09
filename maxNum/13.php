<?php
    $A=$_REQUEST['1'];
    $B=$_REQUEST['2'];
    $C=$_REQUEST['3'];
    if($B>$A){
        $A=$B;
    }
    if($C>$A){
        $A=$C;
    }
    echo "MAXIMUM Number = $A ";
?>