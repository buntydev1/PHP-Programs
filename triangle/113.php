<?php
for($i=1;$i<=5;$i++)
 {
    for($j=5;$j>=$i;$j--)
    {
      echo "&nbsp;&nbsp;";
    }
   for($k=1;$k<=$i;$k++)
    {
      echo $k;
    }
   if($i>1)
    {
      for($m=$i; $m>=1; $m--)
         {
           echo $m;
         }
     }      
    echo "<br>";
}
?>