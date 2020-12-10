<?php
function sod($no)
	{
			$sum=0;
			while($no>0)
			{
				$x=$no%10;
				$sum=$sum+$x;
				$no=$no/10;
			}
			//echo"sum of digit = $sum";
return $sum;
	};
 $result = sod(123);
//echo"sum of digit = $a";
 echo "sum of digit=$result";
?>