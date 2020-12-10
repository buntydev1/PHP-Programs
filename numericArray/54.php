<?php
$student=array();
$student[0]="abc";
$student[1]="pqr";
$student[2]="xyz";
$count=count($student);
for ($i=0; $i <$count ; $i++) 
{ 
	echo $student[$i];
	echo"<br>";
}
?>