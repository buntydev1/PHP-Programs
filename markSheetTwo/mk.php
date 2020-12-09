<?php
       $a=$_POST['1'];
       $b=$_POST['2'];
       $c=$_POST['3'];
       $d=$_POST['4'];

       $total=$b+$c+$d;
       $per=$total*100/300;

       echo "Roll Number ==> $a";
       if($b>=33 && $c>=33 && $d>=33){
           echo "Total ==> $total";
           echo "Per ==> $per";

       }else{
          echo "<br>";x
          echo "failed in exam";
       }
?>