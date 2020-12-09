<?php
    $A=$_POST['1'];
    switch ($A) {
        case ($A>=0):
            echo "$A Is positive";
            break;
        case ($A<=0):
            echo "$A Is negative";
            break;
        default:
        echo "$A Is ZERO";
    }
?>