<?php
$n=$_POST['limit'];
for($i=2;$i<=$n;$i++)
{
	$p=0;
	$temp=$i;
	for($j=1;$j<$temp;$j++)
	{
		if($temp%$j==0)
		{
			$p=$p+$j;
		}
	}
	if($i==$p)
	{
		echo " ",$i," ";
	}
}
?>