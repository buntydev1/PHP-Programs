<html>
<body bgcolor=cyan align=center>
<?php
function factorial()
{
 $num=$_POST['t1'];
 $fact=1;
 for($i=1;$i<=$num;$i++)
 {
 	$fact=$fact*$i;
 }
  echo"<h1>factorial of given number is =$fact</h1>";
 }
 factorial();
 ?>
</body>
</html>