<?php
        $A=$_POST['1'];
        $B=$_POST['2'];
        $C=$_POST['3'];
        $D=$_POST['4'];
    if($B>=33 && $C>=33 && $D>=33){
        $t=$B+$C+$D;
        $p=$t*100/300;
        echo "True";
        echo "$A Passed.<br> Total ==> $t <br> Per ==> $p";
    }else
        echo "$A Failed.";
    
?>