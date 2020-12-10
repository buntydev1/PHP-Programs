<html>
<body bgcolor=yellow align=center>
<?php
$rollno=$_REQUEST['t1'];
$m1=$_REQUEST['t2'];
$m2=$_REQUEST['t3'];
$m3=$_REQUEST['t4'];
if($m1>40 && $m2>40 && $m3>40)
{
	$total=$m1+$m2+$m3;
	$per=$total/3;
	$class="";
			if($per>=70)
			{
				$class="distiction";
			}
			else if($per>=60)
			{
				$class="first class";
			}
			else if ($per>=50)
			{
				$class="second class";
			}
			else
			{
				$class="pass class";
			}
				echo "-------------------------";
				echo "<br>";
				echo "roll number = $rollno";
				echo "<br>";
				echo "mark of subject 1 = $m1";
				echo "<br>";
				echo "mark of subject 2 = $m2";
				echo "<br>";
				echo "mark of subject 3 = $m3";
				echo "<br>";
				echo "-------------------------";
				echo "<br>";
				echo " total = $total";
				echo "<br>";
				echo " percentage = $per";
				echo "<br>";
				echo "class is = $class";
				echo "<br>";
				echo "-------------------------";
}
else 
{
	echo " you are fail";
}
?>
</body>
</html>