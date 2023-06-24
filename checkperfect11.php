<?php
$n=$_POST['limit'];
	$p=0;
	$temp=$n;
	for($j=1;$j<$temp;$j++)
	{
		if($temp%$j==0)
		{
			$p=$p+$j;
		}
	}
	if($n==$p)
	{
		echo " ",$n," is a perfect number ";
	}
else echo " ",$n," not a perfect number";
?>